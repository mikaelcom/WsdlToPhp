<?php
/**
 * File for WsdlToPhpModel class
 * @package WsdlToPhpGenerator
 * @date 19/12/2012
 */
/**
 * Class WsdlToPhpModel defines the basic properties and methods to operations and structs extracted from the WSDL
 * @package WsdlToPhpGenerator
 * @date 19/12/2012
 */
class WsdlToPhpModel
{
	/**
	 * Constant used to define the key to store documentation value in meta
	 * @var string
	 */
	const META_DOCUMENTATION = 'documentation';
	/**
	 * Original name od the element
	 * @var string
	 */
	private $name;
	/**
	 * Values associated to the operation
	 * @var array
	 */
	private $meta;
	/**
	 * Define the inheritance of a struct by the name of the parent struct or type
	 * @var string
	 */
	private $inheritance;
	/**
	 * Store the object which owns the current model
	 * @var WsdlToPhpModel
	 */
	private $owner;
	/**
	 * Store all the models generated
	 * @var array
	 */
	private static $models = array();
	/**
	 * Reserved PHP keywords
	 * Plus {PackageName}WsdlClass specific/common methods
	 * @var string
	 */
	private static $phpReserverKeywords = 'add|getResult|count|current|item|offsetGet|offsetSet|key|last|first|next|offsetExists|offsetUnset|rewind|setResult|toSend|valueIsValid|valid|_set|_get|__halt_compiler|abstract|and|array|as|break|callable|case|catch|class|clone|const|continue|declare|default|die|do|echo|else|elseif|empty|enddeclare|endfor|endforeach|endif|endswitch|endwhile|eval|exit|extends|final|for|foreach|function|global|goto|if|implements|include|include_once|instanceof|insteadof|interface|isset|list|namespace|new|or|print|private|protected|public|require|require_once|return|static|switch|throw|trait|try|unset|use|var|while|xor';
	/**
	 * Replaced keywords time in order to generate unique new keyword
	 * @var array
	 */
	private static $replacedReservedPhpKeywords = array();
	/**
	 * Unique name generated in order to ensure unique naming (for struct constructor and setters/getters even for different case attribute name whith same value)
	 * @var array
	 */
	private static $uniqueNames = array();
	/**
	 * Main constructor
	 * @uses WsdlToPhpModel::setInheritance()
	 * @uses WsdlToPhpModel::setMeta()
	 * @uses WsdlToPhpModel::setName()
	 * @uses WsdlToPhpModel::updateModels()
	 * @param string $_name the original name
	 * @return WsdlToPhpModel
	 */
	public function __construct($_name)
	{
		$this->setInheritance();
		$this->setMeta();
		$this->setName($_name);
		self::updateModels($this);
	}
	/**
	 * Returns comments for the class
	 * @uses WsdlToPhpModel::getPackagedName()
	 * @uses WsdlToPhpModel::getDocumentation()
	 * @uses WsdlToPhpModel::addMetaComment()
	 * @uses WsdlToPhpModel::getDocSubPackages()
	 * @uses WsdlToPhpGenerator::getPackageName()
	 * @param int $_part comment part
	 * @return array
	 */
	public function getComment($_part = '')
	{
		$comments = array();
		switch($_part)
		{
			case 1:
				array_push($comments,'File for class ' . $this->getPackagedName());
				array_push($comments,'@package ' . WsdlToPhpGenerator::getPackageName());
				if(count($this->getDocSubPackages()))
					array_push($comments,'@subpackage ' . implode(',',$this->getDocSubPackages()));
				array_push($comments,'@date ' . date('Y-m-d'));
				break;
			case 2:
				array_push($comments,'This class stands for ' . $this->getPackagedName() . ' originally named ' . $this->getName());
				if($this->getDocumentation() != '')
					array_push($comments,'Documentation : ' . $this->getDocumentation());
				$this->addMetaComment($comments,false,true);
				array_push($comments,'@package ' . WsdlToPhpGenerator::getPackageName());
				if(count($this->getDocSubPackages()))
					array_push($comments,'@subpackage ' . implode(',',$this->getDocSubPackages()));
				array_push($comments,'@date ' . date('Y-m-d'));
				break;
		}
		return $comments;
	}
	/**
	 * Method to override in sub class
	 * Must return a string in order to declare the function, attribute or the value
	 * @uses WsdlToPhpStruct::getIsStruct()
	 * @uses WsdlToPhpModel::getModelByName()
	 * @uses WsdlToPhpModel::getInheritance()
	 * @uses WsdlToPhpModel::getComment()
	 * @uses WsdlToPhpModel::getPackagedName()
	 * @uses WsdlToPhpModel::getClassBody()
	 * @uses WsdlToPhpModel::getGenericWsdlClassName()
	 * @uses WsdlToPhpGenerator::getOptionInheritsClassIdentifier()
	 * @uses WsdlToPhpGenerator::getOptionGenerateWsdlClassFile()
	 * @return string
	 */
	public function getClassDeclaration()
	{
		$class = array();
		/**
		 * Class comments
		 */
		array_push($class,array(
								'comment'=>$this->getComment(1)));
		array_push($class,array(
								'comment'=>$this->getComment(2)));
		/**
		 * Extends
		 */
		$extends = '';
		$base = WsdlToPhpGenerator::getOptionInheritsClassIdentifier();
		if(!empty($base) && ($model = self::getModelByName($this->getName() . $base)))
		{
			if($model->getIsStruct())
				$extends = $model->getPackagedName();
		}
		elseif($this->getInheritance() != '' && ($model = self::getModelByName($this->getInheritance())))
		{
			if($model->getIsStruct())
				$extends = $model->getPackagedName();
		}
		elseif(class_exists($this->getInheritance()))
			$extends = $this->getInheritance();
		if(empty($extends) && WsdlToPhpGenerator::getOptionGenerateWsdlClassFile())
			$extends = self::getGenericWsdlClassName();
		array_push($class,'class ' . $this->getPackagedName() . (!empty($extends)?' extends ' . $extends:''));
		/**
		 * Class body
		 */
		array_push($class,'{');
		/**
		 * Populate class body
		 */
		$this->getClassBody($class);
		/**
		 * __toString() method comments
		 */
		$comments = array();
		array_push($comments,'Method returning the class name');
		array_push($comments,'@return string __CLASS__');
		array_push($class,array(
								'comment'=>$comments));
		unset($comments);
		/**
		 * __toString method body
		 */
		array_push($class,'public function __toString()');
		array_push($class,'{');
		array_push($class,'return __CLASS__;');
		array_push($class,'}');
		array_push($class,'}');
		return $class;
	}
	/**
	 * Methods which fills the class body
	 * Must be overridden in classes
	 * @param array
	 * @return void
	 */
	public function getClassBody(&$_class)
	{}
	/**
	 * Returns the name of the class the current class inherits from
	 * @return string
	 */
	public function getInheritance()
	{
		return $this->inheritance;
	}
	/**
	 * Set the name of the class the current class inherits from
	 * @param string
	 */
	public function setInheritance($_inheritance = '')
	{
		return ($this->inheritance = $_inheritance);
	}
	/**
	 * Add meta informations to comment array
	 * @uses WsdlToPhpModel::META_DOCUMENTATION
	 * @uses WsdlToPhpModel::getMeta()
	 * @uses WsdlToPhpModel::cleanComment()
	 * @param array $_comments array which meta are added to
	 * @param bool $_addStars add comments tags
	 * @param bool $_ignoreDocumentation ignore documentation info or not
	 * @return void
	 */
	protected function addMetaComment(array &$_comments = array(),$_addStars = false,$_ignoreDocumentation = false)
	{
		$metaComments = array();
		if(count($this->getMeta()))
		{
			foreach($this->getMeta() as $metaName=>$metaValue)
			{
				$cleanedMetaValue = self::cleanComment($metaValue);
				if(($_ignoreDocumentation && $metaName == self::META_DOCUMENTATION) || $cleanedMetaValue === '')
					continue;
				array_push($metaComments,($_addStars?' * ':'') . "\t- $metaName : $cleanedMetaValue");
			}
		}
		if(count($metaComments))
		{
			if(!in_array('Meta informations extracted from the WSDL',$_comments))
				array_push($_comments,'Meta informations extracted from the WSDL');
			foreach($metaComments as $metaComment)
				array_push($_comments,$metaComment);
		}
		unset($metaComments);
	}
	/**
	 * Returns the meta
	 * @return array
	 */
	public function getMeta()
	{
		return $this->meta;
	}
	/**
	 * Set the meta
	 * @param array $_meta
	 * @return array
	 */
	public function setMeta(array $_meta = array())
	{
		return ($this->meta = $_meta);
	}
	/**
	 * Add meta information to the operation
	 * @uses WsdlToPhpModel::getMeta()
	 * @uses WsdlToPhpModel::updateModels()
	 * @param string $_metaName
	 * @param mixed $_metaValue
	 * @return mixed
	 */
	public function addMeta($_metaName,$_metaValue)
	{
		if(!is_scalar($_metaName) || (!is_scalar($_metaValue) && !is_array($_metaValue)))
			return '';
		$metaValue = is_scalar($_metaValue)?trim($_metaValue):$_metaValue;
		if(is_scalar($metaValue) && $metaValue === '')
			return false;
		if(!array_key_exists($_metaName,$this->getMeta()))
			$this->meta[$_metaName] = $metaValue;
		elseif(is_array($this->meta[$_metaName]) && is_array($metaValue))
			$this->meta[$_metaName] = array_merge($this->meta[$_metaName],$metaValue);
		elseif(is_array($this->meta[$_metaName]))
			array_push($this->meta[$_metaName],$metaValue);
		else
			$this->meta[$_metaName] = $metaValue;
		ksort($this->meta);
		self::updateModels($this);
		return $metaValue;
	}
	/**
	 * Set the documentation meta value
	 * @uses WsdlToPhpModel::META_DOCUMENTATION
	 * @uses WsdlToPhpModel::addMeta()
	 * @param string $_documentation the documentation from the WSDL
	 * @return string the documentation from the WSDL
	 */
	public function setDocumentation($_documentation)
	{
		return $this->addMeta(self::META_DOCUMENTATION,$_documentation);
	}
	/**
	 * Get the documentation meta value
	 * @uses WsdlToPhpModel::META_DOCUMENTATION
	 * @uses WsdlToPhpModel::getMetaValue()
	 * @uses WsdlToPhpModel::cleanComment()
	 * @return string the documentation from the WSDL
	 */
	public function getDocumentation()
	{
		return self::cleanComment($this->getMetaValue(self::META_DOCUMENTATION,''));
	}
	/**
	 * Return a meta value according to its name
	 * @uses WsdlToPhpModel::getMeta()
	 * @param string $_metaName the meta information name
	 * @param string $_fallback the fallback value if unset
	 * @return mixed the meta information value
	 */
	public function getMetaValue($_metaName,$_fallback = null)
	{
		return array_key_exists($_metaName,$this->getMeta())?$this->meta[$_metaName]:$_fallback;
	}
	/**
	 * Return the value of the first meta value assigned to the name
	 * @param array $_names the meta names to check
	 * @param string $_fallback the fallback value if anyone is set
	 * @return mixed the meta information value
	 */
	public function getMetaValueFirstSet(array $_names,$_fallback = null)
	{
		foreach($_names as $name)
		{
			if(array_key_exists($name,$this->getMeta()))
				return $this->meta[$name];
		}
		return $_fallback;
	}
	/**
	 * Returns the original name extracted from the WSDL
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}
	/**
	 * Set the original name extracted from the WSDL
	 * @param string $_name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Return a valid clean name for PHP
	 * @uses WsdlToPhpModel::getName()
	 * @uses WsdlToPhpModel::cleanString()
	 * @return string
	 */
	public function getCleanName()
	{
		return self::cleanString($this->getName());
	}
	/**
	 * @return WsdlToPhpModel
	 */
	public function getOwner()
	{
		return $this->owner;
	}
	/**
	 * @param WsdlToPhpModel $_owner object the owner of the current model
	 * @return WsdlToPhpModel
	 */
	public function setOwner(WsdlToPhpModel $_owner)
	{
		return ($this->owner = $_owner);
	}
	/**
	 * Returns true if the original name is safe to use as a PHP property, variable name or class name
	 * @uses WsdlToPhpModel::getName()
	 * @uses WsdlToPhpModel::getCleanName()
	 * @return bool
	 */
	public function nameIsClean()
	{
		return ($this->getName() != '' && $this->getName() == $this->getCleanName());
	}
	/**
	 * Return the packaged name
	 * @uses WsdlToPhpGenerator::getPackageName()
	 * @uses WsdlToPhpModel::getCleanName()
	 * @uses WsdlToPhpModel::getContextualPart()
	 * @uses WsdlToPhpModel::uniqueName() to ensure unique naming of struct case sensitively
	 * @return string
	 */
	public function getPackagedName()
	{
		return WsdlToPhpGenerator::getPackageName() . $this->getContextualPart() . ucfirst(self::uniqueName($this->getCleanName(),$this->getContextualPart()));
	}
	/**
	 * Allows to define the contextual part of the class name for the package
	 * @return string
	 */
	public function getContextualPart()
	{
		return '';
	}
	/**
	 * Returns the sub package name which the model belongs to
	 * Must be overridden by sub classes
	 * @return array
	 */
	public function getDocSubPackages()
	{
		return array();
	}
	/**
	 * Clean a string to make it valid as PHP variable
	 * @param string $_string the string to clean
	 * @return string
	 */
	public static function cleanString($_string)
	{
		return preg_replace('/[_]+/','_',preg_replace('/[^a-zA-Z0-9_]/','_',$_string));
	}
	/**
	 * Get models
	 * @return array
	 */
	public static function getModels()
	{
		return self::$models;
	}
	/**
	 * Return the model by its name
	 * @uses WsdlToPhpModel::getModels()
	 * @param string $_modelName the original WsdlToPhpStruct name
	 * @return WsdlToPhpStruct|null
	 */
	public static function getModelByName($_modelName)
	{
		if(!is_scalar($_modelName))
			return null;
		return array_key_exists('_' . $_modelName . '_',self::getModels())?self::$models['_' . $_modelName . '_']:null;
	}
	/**
	 * Set models
	 * @param array $_models the WsdlToPhpStruct's defined
	 * @return array the WsdlToPhpStruct's defined
	 */
	private static function setModels(array $_models = array())
	{
		return (self::$models = $_models);
	}
	/**
	 * Update models with model
	 * @uses WsdlToPhpModel::getModels()
	 * @uses WsdlToPhpModel::setModels()
	 * @uses WsdlToPhpModel::getName()
	 * @param WsdlToPhpModel $_model a WsdlToPhpModel object
	 * @return WsdlToPhpStruct|bool
	 */
	private static function updateModels(WsdlToPhpModel $_model)
	{
		if($_model->__toString() != 'WsdlToPhpStruct')
			return false;
		return (self::$models['_' . $_model->getName() . '_'] = $_model);
	}
	/**
	 * Returns a usable keyword for a original keyword
	 * @param string $_keyword the keyword
	 * @param string $_context the context
	 * @return string
	 */
	public static function replaceReservedPhpKeyword($_keyword,$_context)
	{
		$phpReservedKeywordFound = '';
		foreach(explode('|',self::$phpReserverKeywords) as $keyword)
		{
			if(strtolower($keyword) == strtolower($_keyword))
			{
				$phpReservedKeywordFound = $keyword;
				break;
			}
		}
		if(!empty($phpReservedKeywordFound))
		{
			$keywordKey = $phpReservedKeywordFound . '_' . $_context;
			if(!array_key_exists($keywordKey,self::$replacedReservedPhpKeywords))
				self::$replacedReservedPhpKeywords[$keywordKey] = 0;
			else
				self::$replacedReservedPhpKeywords[$keywordKey]++;
			return '_' . $_keyword . (self::$replacedReservedPhpKeywords[$keywordKey]?'_' . self::$replacedReservedPhpKeywords[$keywordKey]:'');
		}
		else
			return $_keyword;
	}
	/**
	 * Static method wich returns a unique name case sensitively
	 * Useful to name methods case sensitively distinct, see http://the-echoplex.net/log/php-case-sensitivity
	 * @param string $_name the original name
	 * @param string $_context the context where the name is needed unique
	 * @return string
	 */
	protected static function uniqueName($_name,$_context)
	{
		$insensitiveKey = strtolower($_name . '_' . $_context);
		$sensitiveKey = $_name . '_' . $_context;
		if(array_key_exists($sensitiveKey,self::$uniqueNames))
			return self::$uniqueNames[$sensitiveKey];
		elseif(!array_key_exists($insensitiveKey,self::$uniqueNames))
			self::$uniqueNames[$insensitiveKey] = 0;
		else
			self::$uniqueNames[$insensitiveKey]++;
		$uniqueName = $_name . (self::$uniqueNames[$insensitiveKey]?'_' . self::$uniqueNames[$insensitiveKey]:'');
		self::$uniqueNames[$sensitiveKey] = $uniqueName;
		return $uniqueName;
	}
	/**
	 * Return the value with good type
	 * @param mixed $_value the value
	 * @return mixed
	 */
	public static function getValueWithinItsType($_value)
	{
		if(is_int($_value))
			return intval($_value);
		elseif(is_float($_value))
			return floatval($_value);
		elseif(is_numeric($_value))
			return intval($_value) == $_value?intval($_value):floatval($_value);
		elseif(is_bool($_value))
			return $_value?true:false;
		else
			return $_value;
	}
	/**
	 * Clean comment
	 * @param string $_comment the comment to clean
	 * @return string
	 */
	public static function cleanComment($_comment)
	{
		if(!is_scalar($_comment) && !is_array($_comment))
			return '';
		return trim(str_replace('*/','*[:slash:]',is_scalar($_comment)?$_comment:implode(',',array_unique($_comment))));
	}
	/**
	 * Returns the generic name of the WsdlClass
	 * @uses WsdlToPhpGenerator::getPackageName()
	 * @return string
	 */
	public static function getGenericWsdlClassName()
	{
		return WsdlToPhpGenerator::getPackageName() . 'WsdlClass';
	}
	/**
	 * Return class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>