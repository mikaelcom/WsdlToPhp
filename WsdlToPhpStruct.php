<?php
/**
 * File for WsdlToPhpStruct
 * @package WsdlToPhpGenerator
 * @date 19/12/2012
 */
/**
 * Class WsdlToPhpStruct stands for an available struct described in the WSDL
 * @package WsdlToPhpGenerator
 * @date 19/12/2012
 */
class WsdlToPhpStruct extends WsdlToPhpModel
{
	/**
	 * Attributes of the struct
	 * @var array
	 */
	private $attributes = array();
	/**
	 * Is the struct a restriction with defined values ?
	 * @var bool
	 */
	private $isRestriction = false;
	/**
	 * If the struct is a restriction with values, then store values
	 * @var array
	 */
	private $values = array();
	/**
	 * Define if the urrent struct is a concrete struct or just a virtual struct to store meta informations
	 * @var bool
	 */
	private $isStruct = false;
	/**
	 * Main constructor
	 * @see WsdlToPhpModel::__construct()
	 * @uses WsdlToPhpStruct::setIsStruct()
	 * @param string $_name the original name
	 * @param bool $_isStruct defines if it's a real sruct or not
	 * @return WsdlToPhpStruct
	 */
	public function __construct($_name,$_isStruct = true)
	{
		parent::__construct($_name);
		$this->setIsStruct($_isStruct);
	}
	/**
	 * Returns the constructor method
	 * @uses WsdlToPhpModel::getName()
	 * @uses WsdlToPhpModel::getModelByName()
	 * @uses WsdlToPhpModel::getPackagedName()
	 * @uses WsdlToPhpModel::getCleanName()
	 * @uses WsdlToPhpModel::getInheritance()
	 * @uses WsdlToPhpModel::getGenericWsdlClassName()
	 * @uses WsdlToPhpStruct::isArray()
	 * @uses WsdlToPhpStruct::getIsRestriction()
	 * @uses WsdlToPhpStruct::getValues()
	 * @uses WsdlToPhpStruct::getAttributes()
	 * @uses WsdlToPhpStruct::getIsStruct()
	 * @uses WsdlToPhpStructValue::getComment()
	 * @uses WsdlToPhpStructValue::getDeclaration()
	 * @uses WsdlToPhpStructValue::getCleanName()
	 * @uses WsdlToPhpStructAttribute::getComment()
	 * @uses WsdlToPhpStructAttribute::getDeclaration()
	 * @uses WsdlToPhpStructAttribute::isRequired()
	 * @uses WsdlToPhpStructAttribute::getType()
	 * @uses WsdlToPhpStructAttribute::getDefaultValue()
	 * @uses WsdlToPhpStructAttribute::getGetterDeclaration()
	 * @uses WsdlToPhpStructAttribute::getSetterDeclaration()
	 * @uses WsdlToPhpGenerator::getOptionGenerateWsdlClassFile()
	 * @uses WsdlToPhpGenerator::getPackageName()
	 * @param array $_body the body which will be populated
	 * @return array
	 */
	public function getClassBody(&$_body)
	{
		/**
		 * A restriction struct with enumeration values
		 */
		if($this->getIsRestriction() && count($this->getValues()))
		{
			$constantsDefined = array();
			foreach($this->getValues() as $index=>$value)
			{
				array_push($_body,array(
										'comment'=>$value->getComment()));
				array_push($_body,$value->getDeclaration($this->getName(),$index));
				array_push($constantsDefined,$this->getPackagedName() . '::' . $value->getCleanName());
			}
			/**
			 * valueIsValid() method comments
			 */
			$comments = array();
			array_push($comments,'Return true if value is allowed');
			foreach($constantsDefined as $constantName)
				array_push($comments,'@uses ' . $constantName);
			array_push($comments,'@param mixed $_value value');
			array_push($comments,'@return bool true|false');
			array_push($_body,array(
									'comment'=>$comments));
			/**
			 * valueIsValid() method body
			 */
			array_push($_body,'public static function valueIsValid($_value)');
			array_push($_body,'{');
			array_push($_body,'return in_array($_value,array(' . implode(',',$constantsDefined) . '));');
			array_push($_body,'}');
			unset($comments);
		}
		/**
		 * A classic struct with attributes
		 */
		elseif(count($this->getAttributes()))
		{
			/**
			 * Gathers informations about attributes
			 */
			$bodyParameters = array();
			$bodyParams = array();
			$bodyUses = array();
			$constructParameters = array();
			$attributes = $this->getAttributes(false,true);
			foreach($attributes as $attribute)
			{
				array_push($_body,array(
										'comment'=>$attribute->getComment()));
				array_push($_body,$attribute->getDeclaration());
				array_push($bodyParameters,'$_' . lcfirst($attribute->getCleanName()) . (!$attribute->isRequired()?' = ' . var_export($attribute->getDefaultValue(),true):''));
				if(!WsdlToPhpGenerator::getOptionGenerateWsdlClassFile())
					array_push($bodyUses,$this->getPackagedName() . '::' . $attribute->getSetterName() . '()');
				$model = self::getModelByName($attribute->getType());
				if($model)
				{
					if($model->getIsStruct() && $model->getPackagedName() != $this->getPackagedName())
					{
						if($model->isArray())
							array_push($constructParameters,'\'' . $attribute->getUniqueName() . '\'=>($_' . lcfirst($attribute->getCleanName()) . ' instanceof ' . $model->getPackagedName() . ')?$_' . lcfirst($attribute->getCleanName()) . ':new ' . $model->getPackagedName() . '($_' . lcfirst($attribute->getCleanName()) . ')');
						else
							array_push($constructParameters,'\'' . $attribute->getUniqueName() . '\'=>$_' . lcfirst($attribute->getCleanName()));
						$paramType = $model->getPackagedName();
					}
					else
					{
						array_push($constructParameters,'\'' . $attribute->getUniqueName() . '\'=>$_' . lcfirst($attribute->getCleanName()));
						$paramType = $model->getInheritance()?$model->getInheritance():$attribute->getType();
					}
				}
				else
				{
					array_push($constructParameters,'\'' . $attribute->getUniqueName() . '\'=>$_' . lcfirst($attribute->getCleanName()));
					$paramType = $attribute->getType();
				}
				array_push($bodyParams,$paramType . ' $_' . lcfirst($attribute->getCleanName()));
				unset($paramType,$model);
			}
			/**
			 * __contruct() method comments
			 */
			$comments = array();
			array_push($comments,'Constructor method for ' . $this->getCleanName());
			/**
			 * Uses the parent constructor method
			 */
			if(WsdlToPhpGenerator::getOptionGenerateWsdlClassFile())
				array_push($comments,'@see parent::__construct()');
			foreach($bodyUses as $bodyUse)
				array_push($comments,'@uses ' . $bodyUse);
			foreach($bodyParams as $bodyParam)
				array_push($comments,'@param ' . $bodyParam);
			array_push($comments,'@return ' . $this->getPackagedName());
			array_push($_body,array(
									'comment'=>$comments));
			/**
			 * __contruct() method body
			 */
			array_push($_body,'public function __construct(' . implode(',',$bodyParameters) . ')');
			array_push($_body,'{');
			$model = self::getModelByName($this->getInheritance());
			/**
			 * Uses the parent constructor method
			 */
			if(WsdlToPhpGenerator::getOptionGenerateWsdlClassFile())
				array_push($_body,(($model && $model->getIsStruct())?self::getGenericWsdlClassName():'parent') . '::__construct(array(' . implode(',',$constructParameters) . '),false);');
			/**
			 * Uses its own setters
			 */
			else
			{
				foreach($attributes as $attribute)
					array_push($_body,'$this->' . $attribute->getSetterName() . '($_' . lcfirst($attribute->getCleanName()) . ');');
			}
			array_push($_body,'}');
			/**
			 * Setters and getters
			 */
			foreach($this->getAttributes(false,true) as $attribute)
			{
				$attribute->getGetterDeclaration($_body,$this);
				$attribute->getSetterDeclaration($_body,$this);
			}
			unset($comments,$bodyParameters,$bodyParams,$constructParameters);
			/**
			 * A array struct
			 */
			if($this->isArray())
			{
				foreach($this->getAttributes() as $attr)
					$attribute = $attr;
				if($attribute instanceof WsdlToPhpStructAttribute)
				{
					$model = self::getModelByName($attribute->getType());
					$return = ($model && $model->getIsStruct())?$model->getPackagedName():$attribute->getType();
					$comments = array();
					/**
					 * current() method comments
					 */
					array_push($comments,'Returns the current element');
					array_push($comments,'@see ' . self::getGenericWsdlClassName() . '::current()');
					array_push($comments,'@return ' . $return);
					array_push($_body,array(
											'comment'=>$comments));
					/**
					 * current() method body
					 */
					array_push($_body,'public function current()');
					array_push($_body,'{');
					array_push($_body,'return parent::current();');
					array_push($_body,'}');
					$comments = array();
					/**
					 * item() method comments
					 */
					array_push($comments,'Returns the indexed element');
					array_push($comments,'@see ' . self::getGenericWsdlClassName() . '::item()');
					array_push($comments,'@param int $_index');
					array_push($comments,'@return ' . $return);
					array_push($_body,array(
											'comment'=>$comments));
					/**
					 * item() method body
					 */
					array_push($_body,'public function item($_index)');
					array_push($_body,'{');
					array_push($_body,'return parent::item($_index);');
					array_push($_body,'}');
					$comments = array();
					/**
					 * first() method comments
					 */
					array_push($comments,'Returns the first element');
					array_push($comments,'@see ' . self::getGenericWsdlClassName() . '::first()');
					array_push($comments,'@return ' . $return);
					array_push($_body,array(
											'comment'=>$comments));
					/**
					 * first() method body
					 */
					array_push($_body,'public function first()');
					array_push($_body,'{');
					array_push($_body,'return parent::first();');
					array_push($_body,'}');
					$comments = array();
					/**
					 * last() method comments
					 */
					array_push($comments,'Returns the last element');
					array_push($comments,'@see ' . self::getGenericWsdlClassName() . '::last()');
					array_push($comments,'@return ' . $return);
					array_push($_body,array(
											'comment'=>$comments));
					/**
					 * last() method body
					 */
					array_push($_body,'public function last()');
					array_push($_body,'{');
					array_push($_body,'return parent::last();');
					array_push($_body,'}');
					$comments = array();
					/**
					 * offsetGet() method comments
					 */
					array_push($comments,'Returns the element at the offset');
					array_push($comments,'@see ' . self::getGenericWsdlClassName() . '::last()');
					array_push($comments,'@param int $_offset');
					array_push($comments,'@return ' . $return);
					array_push($_body,array(
											'comment'=>$comments));
					/**
					 * offsetGet() method body
					 */
					array_push($_body,'public function offsetGet($_offset)');
					array_push($_body,'{');
					array_push($_body,'return parent::offsetGet($_offset);');
					array_push($_body,'}');
					if($model && $model->getIsRestriction())
					{
						$comments = array();
						/**
						 * add() method comments
						 */
						array_push($comments,'Add element to array');
						array_push($comments,'@see ' . self::getGenericWsdlClassName() . '::add()');
						array_push($comments,'@uses ' . $model->getPackagedName() . '::valueIsValid()');
						array_push($comments,'@param ' . $model->getPackagedName() . ' $_item');
						array_push($comments,'@return ' . $return);
						array_push($_body,array(
												'comment'=>$comments));
						/**
						 * add() method body
						 */
						array_push($_body,'public function add($_item)');
						array_push($_body,'{');
						array_push($_body,'return ' . $model->getPackagedName() . '::valueIsValid($_item)?parent::add($_item):false;');
						array_push($_body,'}');
					}
					/**
					 * getAttributeName() method comments
					 */
					$comments = array();
					array_push($comments,'Returns the attribute name');
					array_push($comments,'@see ' . self::getGenericWsdlClassName() . '::getAttributeName()');
					array_push($comments,'@return string ' . $attribute->getCleanName());
					array_push($_body,array(
											'comment'=>$comments));
					/**
					 * getAttributeName() method body
					 */
					array_push($_body,'public function getAttributeName()');
					array_push($_body,'{');
					array_push($_body,'return \'' . $attribute->getCleanName() . '\';');
					array_push($_body,'}');
					unset($comments,$model);
				}
				unset($attribute);
			}
			/**
			 * __set_state method override
			 */
			if(WsdlToPhpGenerator::getOptionGenerateWsdlClassFile())
			{
				/**
				 * __set_state() method comments
				 */
				$comments = array();
				array_push($comments,'Method called when an object has been exported with var_export() functions');
				array_push($comments,'It allows to return an object instantiated with the values');
				array_push($comments,'@see ' . self::getGenericWsdlClassName() . '::__set_state()');
				array_push($comments,'@uses ' . self::getGenericWsdlClassName() . '::__set_state()');
				array_push($comments,'@param array $_array the exported values');
				array_push($comments,'@return ' . $this->getPackagedName());
				array_push($_body,array(
										'comment'=>$comments));
				unset($comments);
				/**
				 * __set_state method body
				 */
				array_push($_body,'public static function __set_state(array $_array,$_className = __CLASS__)');
				array_push($_body,'{');
				array_push($_body,'return parent::__set_state($_array,$_className);');
				array_push($_body,'}');
			}
		}
	}
	/**
	 * Returns the contextual part of the class name for the package
	 * @see WsdlToPhpModel::getContextualPart()
	 * @uses WsdlToPhpStruct::getIsRestriction()
	 * @return string
	 */
	public function getContextualPart()
	{
		return $this->getIsRestriction()?'Enum':'Struct';
	}
	/**
	 * Returns the sub package name which the model belongs to
	 * Must be overridden by sub classes
	 * @see WsdlToPhpModel::getDocSubPackages()
	 * @uses WsdlToPhpStruct::getIsRestriction()
	 * @return array
	 */
	public function getDocSubPackages()
	{
		return array(
					$this->getIsRestriction()?'Enumerations':'Structs');
	}
	/**
	 * Returns true if the current struct is a collection of values (like an array)
	 * @uses WsdlToPhpModel::getName()
	 * @uses WsdlToPhpStruct::countOwnAttributes()
	 * @return bool
	 */
	public function isArray()
	{
		return ($this->countOwnAttributes() === 1 && stripos($this->getName(),'array') !== false);
	}
	/**
	 * Returns the attributes of the struct and potentially from the parent class
	 * @uses WsdlToPhpModel::getInheritance()
	 * @uses WsdlToPhpModel::getModelByName()
	 * @uses WsdlToPhpStruct::getIsStruct()
	 * @uses WsdlToPhpStruct::getAttributes()
	 * @param bool $_includeInheritanceAttributes include the attributes of parent class, default parent attributes are not included. If true, then the array is an associative array containing and index "attribute" for the WsdlToPhpStructAttribute object and an index "model" for the WsdlToPhpStruct object.
	 * @param bool $_requiredFirst places the required attributes first, then the not required in order to have the _contrust method with the required attribute at first
	 * @return array
	 */
	public function getAttributes($_includeInheritanceAttributes = false,$_requiredFirst = false)
	{
		$attributes = $this->attributes;
		/**
		 * Returns the inherited attributes
		 */
		if($_includeInheritanceAttributes)
		{
			$attributes = array();
			if($this->getInheritance() != '')
			{
				$model = WsdlToPhpModel::getModelByName($this->getInheritance());
				while($model && $model->getIsStruct())
				{
					$modelAttributes = $model->getAttributes();
					if(count($modelAttributes))
					{
						foreach($modelAttributes as $attribute)
							array_push($attributes,array(
														'attribute'=>$attribute,
														'model'=>$model));
					}
					unset($modelAttributes);
					$model = WsdlToPhpModel::getModelByName($model->getInheritance());
				}
			}
			$thisAttributes = $this->getAttributes();
			if(count($thisAttributes))
			{
				foreach($thisAttributes as $attribute)
					array_push($attributes,array(
												'attribute'=>$attribute,
												'model'=>$this));
			}
			unset($thisAttributes);
		}
		/**
		 * Returns the required attributes at first position
		 */
		if($_requiredFirst)
		{
			$requiredAttributes = array();
			$notRequiredAttributes = array();
			foreach($attributes as $attribute)
			{
				$attributeModel = $_includeInheritanceAttributes?$attribute['attribute']:$attribute;
				if($attributeModel->isRequired())
					array_push($requiredAttributes,$attribute);
				else
					array_push($notRequiredAttributes,$attribute);
			}
			$attributes = array();
			foreach($requiredAttributes as $attribute)
				array_push($attributes,$attribute);
			foreach($notRequiredAttributes as $attribute)
				array_push($attributes,$attribute);
			unset($requiredAttributes,$notRequiredAttributes);
		}
		return $attributes;
	}
	/**
	 * Returns the number of own attributes
	 * @uses WsdlToPhpStruct::getAttributes()
	 * @return int
	 */
	public function countOwnAttributes()
	{
		return count($this->getAttributes(false,false));
	}
	/**
	 * Sets the attributes of the struct
	 * @param array
	 * @return array
	 */
	public function setAttributes(array $_attributes = array())
	{
		return ($this->attributes = $_attributes);
	}
	/**
	 * Adds attribute based on its original name
	 * @uses WsdlToPhpModel::updateModels()
	 * @param string $_attributeName the attribute name
	 * @param string $_attributeType the attribute type
	 * @return WsdlToPhpStructAttribute
	 */
	public function addAttribute($_attributeName,$_attributeType)
	{
		$this->attributes[$_attributeName] = new WsdlToPhpStructAttribute($_attributeName,$_attributeType,$this);
		self::updateModels($this);
		return $this->attributes[$_attributeName];
	}
	/**
	 * Returns the attribute by its name, otherwise null
	 * @uses WsdlToPhpStruct::getAttributes()
	 * @param string $_attributeName the original attribute name
	 * @return WsdlToPhpStructAttribute|null
	 */
	public function getAttribute($_attributeName)
	{
		return array_key_exists($_attributeName,$this->getAttributes())?$this->attributes[$_attributeName]:null;
	}
	/**
	 * Returns the isRestriction value
	 * @return bool
	 */
	public function getIsRestriction()
	{
		return $this->isRestriction;
	}
	/**
	 * Sets the isRestriction value
	 * @uses WsdlToPhpModel::updateModels()
	 * @param bool $_isRestriction
	 * @return bool
	 */
	public function setIsRestriction($_isRestriction = true)
	{
		$this->isRestriction = $_isRestriction;
		self::updateModels($this);
		return $_isRestriction;
	}
	/**
	 * Returns the isStruct value
	 * @return bool
	 */
	public function getIsStruct()
	{
		return $this->isStruct;
	}
	/**
	 * Sets the isStruct value
	 * @uses WsdlToPhpModel::updateModels()
	 * @param bool $_isStruct
	 * @return bool
	 */
	public function setIsStruct($_isStruct = true)
	{
		$this->isStruct = $_isStruct;
		self::updateModels($this);
		return $_isStruct;
	}
	/**
	 * Returns the values for an enumeration
	 * @return array
	 */
	public function getValues()
	{
		return $this->values;
	}
	/**
	 * Sets the values for an enumeration
	 * @uses WsdlToPhpModel::updateModels()
	 * @param array $_values
	 * @return array
	 */
	private function setValues(array $_values = array())
	{
		$this->values = $_values;
		self::updateModels($this);
		return $_values;
	}
	/**
	 * Adds value to values array
	 * @uses WsdlToPhpModel::updateModels()
	 * @uses WsdlToPhpStruct::getValue()
	 * @uses WsdlToPhpStruct::getValues()
	 * @param mixed $_value the original value
	 */
	public function addValue($_value)
	{
		if(!$this->getValue($_value))
			array_push($this->values,new WsdlToPhpStructValue($_value,count($this->getValues()),$this));
		self::updateModels($this);
	}
	/**
	 * Gets the value object for the given value
	 * @uses WsdlToPhpStruct::getValues()
	 * @uses WsdlToPhpModel::getName()
	 * @param string $_value Value name
	 * @return WsdlToPhpStructValue|null
	 */
	public function getValue($_value)
	{
		foreach($this->getValues() as $value)
		{
			if($value->getName() === $_value)
				return $value;
		}
		return null;
	}
	/**
	 * Returns class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}