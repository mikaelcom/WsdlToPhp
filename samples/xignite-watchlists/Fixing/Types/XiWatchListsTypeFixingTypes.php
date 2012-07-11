<?php
/**
 * Class file for XiWatchListsTypeFixingTypes
 * @date 08/07/2012
 */
/**
 * Class XiWatchListsTypeFixingTypes
 * @date 08/07/2012
 */
class XiWatchListsTypeFixingTypes extends XiWatchListsWsdlClass
{
	/**
	 * Constant for value 'LondonGold'
	 * @return string 'LondonGold'
	 */
	const VALUE_LONDONGOLD = 'LondonGold';
	/**
	 * Constant for value 'LondonSilver'
	 * @return string 'LondonSilver'
	 */
	const VALUE_LONDONSILVER = 'LondonSilver';
	/**
	 * Constant for value 'LondonPlatinum'
	 * @return string 'LondonPlatinum'
	 */
	const VALUE_LONDONPLATINUM = 'LondonPlatinum';
	/**
	 * Constant for value 'LondonPalladium'
	 * @return string 'LondonPalladium'
	 */
	const VALUE_LONDONPALLADIUM = 'LondonPalladium';
	/**
	 * Constructor
	 * @return XiWatchListsTypeFixingTypes
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
		return in_array($_value,array(self::VALUE_LONDONGOLD,self::VALUE_LONDONSILVER,self::VALUE_LONDONPLATINUM,self::VALUE_LONDONPALLADIUM));
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