<?php
/**
 * File for WsdlToPhpStructValue
 * @package WsdlToPhpGenerator
 * @date 19/12/2012
 */
/**
 * Class WsdlToPhpStructValue stands for an enumeratio value
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
	 * Method to return the name of the value as constant
	 * @see WsdlToPhpModel::getCleanName()
	 * @uses WsdlToPhpModel::getCleanName()
	 * @uses WsdlToPhpStructValue::constantSuffix()
	 * @uses WsdlToPhpGenerator::getOptionGenericConstantsNames()
	 * @param string the name of the struct which the value belongs to
	 * @param int the index of the constant contained by the struct class
	 * @return string
	 */
	public function getCleanName($_structName,$_index = -1)
	{
		if(WsdlToPhpGenerator::getOptionGenericConstantsNames() && is_numeric($_index) && $_index >= 0)
			return 'ENUM_VALUE_' . $_index;
		else
		{
			$key = self::constantSuffix($_structName,parent::getCleanName(),$_index);
			return 'VALUE_' . strtoupper(parent::getCleanName()) . ($key?'_' . $key:'');
		}
	}
	/**
	 * Return the value with good type
	 * @uses WsdlToPhpModel::getName()
	 * @uses WsdlToPhpModel::getValueWithinItsType()
	 * @return mixed
	 */
	public function getValue()
	{
		return self::getValueWithinItsType($this->getName());
	}
	/**
	 * Returns the commment lines for this value
	 * @see WsdlToPhpModel::getComment()
	 * @uses WsdlToPhpStructValue::getValue()
	 * @uses WsdlToPhpModel::addMetaComment()
	 * @param int comment part
	 * @return array
	 */
	public function getComment($_part = '')
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
	 * @param string the name of the struct which the value belongs to
	 * @param int the index of the constant contained by the struct class
	 * @return string
	 */
	public function getDeclaration($_structName,$_index = -1)
	{
		return 'const ' . $this->getCleanName($_structName,$_index) . ' = ' . var_export($this->getValue(),true) . ';';
	}
	/**
	 * Return the index which has to be added at the end of natural constant name defined with the value cleaned
	 * Allows to avoid multiple constant name to be indentic
	 * @param string the struct name
	 * @param mixed the value
	 * @param int the position of the value
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
	 * Return class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>