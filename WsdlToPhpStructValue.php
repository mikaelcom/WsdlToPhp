<?php
/**
 * File for WsdlToPhpStructValue
 * @package WsdlToPhpGenerator
 * @date 19/12/2012
 */
/**
 * Class WsdlToPhpStructValue stands for an enumeration value
 * @package WsdlToPhpGenerator
 * @date 19/12/2012
 */
class WsdlToPhpStructValue extends WsdlToPhpModel
{
	/**
	 * Store the constants generated per structName
	 * @var array
	 */
	private static $uniqueConstants = array();
	/**
	 * The index of the value in the enumeration struct
	 * @var int
	 */
	private $index = 0;
	/**
	 * Main constructor
	 * @see WsdlToPhpModel::__construct()
	 * @uses WsdlToPhpModel::setOwner()
	 * @uses WsdlToPhpStructValue::setIndex()
	 * @param string $_name the original name
	 * @param string $_index the index of the value in the enumeration struct
	 * @param WsdlToPhpStruct $_wsdlToPhpStruct defines the struct which owns this value
	 * @return WsdlToPhpStructValue
	 */
	public function __construct($_name,$_index,WsdlToPhpStruct $_wsdlToPhpStruct)
	{
		parent::__construct($_name);
		$this->setIndex($_index);
		$this->setOwner($_wsdlToPhpStruct);
	}
	/**
	 * Returns the name of the value as constant
	 * @see WsdlToPhpModel::getCleanName()
	 * @uses WsdlToPhpModel::getCleanName()
	 * @uses WsdlToPhpModel::getName()
	 * @uses WsdlToPhpModel::getOwner()
	 * @uses WsdlToPhpStructValue::constantSuffix()
	 * @uses WsdlToPhpStructValue::getIndex()
	 * @uses WsdlToPhpStructValue::getOwner()
	 * @uses WsdlToPhpGenerator::getOptionGenericConstantsNames()
	 * @param bool $_keepMultipleUnderscores optional, allows to keep the multiple consecutive underscores
	 * @return string
	 */
	public function getCleanName($_keepMultipleUnderscores = false)
	{
		if(WsdlToPhpGenerator::getOptionGenericConstantsNames() && is_numeric($this->getIndex()) && $this->getIndex() >= 0)
			return 'ENUM_VALUE_' . $this->getIndex();
		else
		{
			$key = self::constantSuffix($this->getOwner()->getName(),parent::getCleanName($_keepMultipleUnderscores),$this->getIndex());
			return 'VALUE_' . strtoupper(parent::getCleanName($_keepMultipleUnderscores)) . ($key?'_' . $key:'');
		}
	}
	/**
	 * Returns the value with good type
	 * @uses WsdlToPhpModel::getName()
	 * @uses WsdlToPhpModel::getValueWithinItsType()
	 * @return mixed
	 */
	public function getValue()
	{
		return self::getValueWithinItsType($this->getName());
	}
	/**
	 * Gets the index attribute value
	 * @return int
	 */
	public function getIndex()
	{
		return $this->index;
	}
	/**
	 * Sets the index attribute value
	 * @param int
	 * @return int $_index
	 */
	public function setIndex($_index)
	{
		return ($this->index = $_index);
	}
	/**
	 * Returns the comment lines for this value
	 * @see WsdlToPhpModel::getComment()
	 * @uses WsdlToPhpStructValue::getValue()
	 * @uses WsdlToPhpModel::addMetaComment()
	 * @return array
	 */
	public function getComment()
	{
		$value = $this->getValue();
		$comments = array();
		array_push($comments,'Constant for value ' . var_export($value,true));
		$this->addMetaComment($comments);
		array_push($comments,'@return ' . gettype($value) . ' ' . var_export($value,true));
		return $comments;
	}
	/**
	 * Returns the declaration of the value
	 * @see WsdlToPhpStructValue::getCleanName()
	 * @see WsdlToPhpStructValue::getValue()
	 * @param string $_structName the name of the struct which the value belongs to
	 * @param int $_index the index of the constant contained by the struct class
	 * @return string
	 */
	public function getDeclaration($_structName,$_index = -1)
	{
		return 'const ' . $this->getCleanName() . ' = ' . var_export($this->getValue(),true) . ';';
	}
	/**
	 * Returns the index which has to be added at the end of natural constant name defined with the value cleaned
	 * Allows to avoid multiple constant name to be indentic
	 * @param string $_structName the struct name
	 * @param mixed $_value the value
	 * @param int $_index the position of the value
	 * @return int
	 */
	private static function constantSuffix($_structName,$_value,$_index)
	{
		$key = strtoupper($_structName . '_' . $_value);
		$indexedKey = $key . '_' . $_index;
		if(array_key_exists($indexedKey,self::$uniqueConstants))
			return self::$uniqueConstants[$indexedKey];
		elseif(!array_key_exists($key,self::$uniqueConstants))
			self::$uniqueConstants[$key] = 0;
		else
			self::$uniqueConstants[$key]++;
		self::$uniqueConstants[$indexedKey] = self::$uniqueConstants[$key];
		return self::$uniqueConstants[$key];
	}
	/**
	 * Returns the owner model object, meaning a WsdlToPhpStruct object
	 * @see WsdlToPhpModel::getOwner()
	 * @uses WsdlToPhpModel::getOwner()
	 * @return WsdlToPhpStruct
	 */
	public function getOwner()
	{
		return parent::getOwner();
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