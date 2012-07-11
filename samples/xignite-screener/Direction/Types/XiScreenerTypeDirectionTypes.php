<?php
/**
 * Class file for XiScreenerTypeDirectionTypes
 * @date 08/07/2012
 */
/**
 * Class XiScreenerTypeDirectionTypes
 * @date 08/07/2012
 */
class XiScreenerTypeDirectionTypes extends XiScreenerWsdlClass
{
	/**
	 * Constant for value 'Ascending'
	 * @return string 'Ascending'
	 */
	const VALUE_ASCENDING = 'Ascending';
	/**
	 * Constant for value 'Descending'
	 * @return string 'Descending'
	 */
	const VALUE_DESCENDING = 'Descending';
	/**
	 * Constructor
	 * @return XiScreenerTypeDirectionTypes
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
		return in_array($_value,array(self::VALUE_ASCENDING,self::VALUE_DESCENDING));
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