<?php
/**
 * Class file for XiMetalsTypeBaseMetalTypes
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeBaseMetalTypes
 * @date 08/07/2012
 */
class XiMetalsTypeBaseMetalTypes extends XiMetalsWsdlClass
{
	/**
	 * Constant for value 'Platinum'
	 * @return string 'Platinum'
	 */
	const VALUE_PLATINUM = 'Platinum';
	/**
	 * Constant for value 'Palladium'
	 * @return string 'Palladium'
	 */
	const VALUE_PALLADIUM = 'Palladium';
	/**
	 * Constant for value 'Rhodium'
	 * @return string 'Rhodium'
	 */
	const VALUE_RHODIUM = 'Rhodium';
	/**
	 * Constant for value 'Iridium'
	 * @return string 'Iridium'
	 */
	const VALUE_IRIDIUM = 'Iridium';
	/**
	 * Constant for value 'Ruthenium'
	 * @return string 'Ruthenium'
	 */
	const VALUE_RUTHENIUM = 'Ruthenium';
	/**
	 * Constant for value 'Osmium'
	 * @return string 'Osmium'
	 */
	const VALUE_OSMIUM = 'Osmium';
	/**
	 * Constant for value 'Rhenium'
	 * @return string 'Rhenium'
	 */
	const VALUE_RHENIUM = 'Rhenium';
	/**
	 * Constant for value 'EngelhardGold'
	 * @return string 'EngelhardGold'
	 */
	const VALUE_ENGELHARDGOLD = 'EngelhardGold';
	/**
	 * Constant for value 'EngelhardSilver'
	 * @return string 'EngelhardSilver'
	 */
	const VALUE_ENGELHARDSILVER = 'EngelhardSilver';
	/**
	 * Constant for value 'EngelhardPlatinum'
	 * @return string 'EngelhardPlatinum'
	 */
	const VALUE_ENGELHARDPLATINUM = 'EngelhardPlatinum';
	/**
	 * Constant for value 'EngelhardPalladium'
	 * @return string 'EngelhardPalladium'
	 */
	const VALUE_ENGELHARDPALLADIUM = 'EngelhardPalladium';
	/**
	 * Constructor
	 * @return XiMetalsTypeBaseMetalTypes
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
		return in_array($_value,array(self::VALUE_PLATINUM,self::VALUE_PALLADIUM,self::VALUE_RHODIUM,self::VALUE_IRIDIUM,self::VALUE_RUTHENIUM,self::VALUE_OSMIUM,self::VALUE_RHENIUM,self::VALUE_ENGELHARDGOLD,self::VALUE_ENGELHARDSILVER,self::VALUE_ENGELHARDPLATINUM,self::VALUE_ENGELHARDPALLADIUM));
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