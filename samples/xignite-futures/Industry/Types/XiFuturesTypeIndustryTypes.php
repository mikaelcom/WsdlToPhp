<?php
/**
 * Class file for XiFuturesTypeIndustryTypes
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeIndustryTypes
 * @date 08/07/2012
 */
class XiFuturesTypeIndustryTypes extends XiFuturesWsdlClass
{
	/**
	 * Constant for value 'AllEnergy'
	 * @return string 'AllEnergy'
	 */
	const VALUE_ALLENERGY = 'AllEnergy';
	/**
	 * Constant for value 'OilAndGas'
	 * @return string 'OilAndGas'
	 */
	const VALUE_OILANDGAS = 'OilAndGas';
	/**
	 * Constant for value 'MiningAndMetals'
	 * @return string 'MiningAndMetals'
	 */
	const VALUE_MININGANDMETALS = 'MiningAndMetals';
	/**
	 * Constant for value 'Chemicals'
	 * @return string 'Chemicals'
	 */
	const VALUE_CHEMICALS = 'Chemicals';
	/**
	 * Constant for value 'Discovery'
	 * @return string 'Discovery'
	 */
	const VALUE_DISCOVERY = 'Discovery';
	/**
	 * Constant for value 'Utilities'
	 * @return string 'Utilities'
	 */
	const VALUE_UTILITIES = 'Utilities';
	/**
	 * Constant for value 'EnvironmentalServices'
	 * @return string 'EnvironmentalServices'
	 */
	const VALUE_ENVIRONMENTALSERVICES = 'EnvironmentalServices';
	/**
	 * Constant for value 'Agriculture'
	 * @return string 'Agriculture'
	 */
	const VALUE_AGRICULTURE = 'Agriculture';
	/**
	 * Constructor
	 * @return XiFuturesTypeIndustryTypes
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
		return in_array($_value,array(self::VALUE_ALLENERGY,self::VALUE_OILANDGAS,self::VALUE_MININGANDMETALS,self::VALUE_CHEMICALS,self::VALUE_DISCOVERY,self::VALUE_UTILITIES,self::VALUE_ENVIRONMENTALSERVICES,self::VALUE_AGRICULTURE));
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