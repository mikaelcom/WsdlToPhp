<?php
/**
 * Class file for YMailTypeSearchMatchMode
 * @date 02/07/2012
 */
/**
 * Class YMailTypeSearchMatchMode
 * @date 02/07/2012
 */
class YMailTypeSearchMatchMode extends YMailWsdlClass
{
	/**
	 * Constant for value 'contains'
	 * @return string 'contains'
	 */
	const VALUE_CONTAINS = 'contains';
	/**
	 * Constant for value 'notcontains'
	 * @return string 'notcontains'
	 */
	const VALUE_NOTCONTAINS = 'notcontains';
	/**
	 * Constant for value 'exact'
	 * @return string 'exact'
	 */
	const VALUE_EXACT = 'exact';
	/**
	 * Constructor
	 * @return YMailTypeSearchMatchMode
	 */
	public function __construct()
	{
		parent::__construct(array());
	}
	/**
	 * Return true if value is allowed
	 * @param string value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(self::VALUE_CONTAINS,self::VALUE_NOTCONTAINS,self::VALUE_EXACT));
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>