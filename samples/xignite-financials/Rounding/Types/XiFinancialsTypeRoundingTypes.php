<?php
/**
 * Class file for XiFinancialsTypeRoundingTypes
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeRoundingTypes
 * @date 08/07/2012
 */
class XiFinancialsTypeRoundingTypes extends XiFinancialsWsdlClass
{
	/**
	 * Constant for value 'None'
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'Thousands'
	 * @return string 'Thousands'
	 */
	const VALUE_THOUSANDS = 'Thousands';
	/**
	 * Constant for value 'Millions'
	 * @return string 'Millions'
	 */
	const VALUE_MILLIONS = 'Millions';
	/**
	 * Constant for value 'Billions'
	 * @return string 'Billions'
	 */
	const VALUE_BILLIONS = 'Billions';
	/**
	 * Constructor
	 * @return XiFinancialsTypeRoundingTypes
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
		return in_array($_value,array(self::VALUE_NONE,self::VALUE_THOUSANDS,self::VALUE_MILLIONS,self::VALUE_BILLIONS));
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