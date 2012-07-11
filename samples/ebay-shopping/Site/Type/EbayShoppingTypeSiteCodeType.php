<?php
/**
 * Class file for EbayShoppingTypeSiteCodeType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeSiteCodeType
 * @date 05/07/2012
 */
class EbayShoppingTypeSiteCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'US'
	 * Meta informations :
	 * 	- documentation : USA, site ID 0, abbreviation US, currency USD.
	 * @return string 'US'
	 */
	const VALUE_US = 'US';
	/**
	 * Constant for value 'Canada'
	 * Meta informations :
	 * 	- documentation : Canada, site ID 2, abbreviation CA, currencies CAD and USD.
	 * @return string 'Canada'
	 */
	const VALUE_CANADA = 'Canada';
	/**
	 * Constant for value 'UK'
	 * Meta informations :
	 * 	- documentation : United Kingdom, site ID 3, abbreviation UK, currency GBP.
	 * @return string 'UK'
	 */
	const VALUE_UK = 'UK';
	/**
	 * Constant for value 'Australia'
	 * Meta informations :
	 * 	- documentation : Australia, site ID 15, abbreviation AU, currency AUD.
	 * @return string 'Australia'
	 */
	const VALUE_AUSTRALIA = 'Australia';
	/**
	 * Constant for value 'Austria'
	 * Meta informations :
	 * 	- documentation : Austria, site ID 16, abbreviation AT, currency EUR.
	 * @return string 'Austria'
	 */
	const VALUE_AUSTRIA = 'Austria';
	/**
	 * Constant for value 'Belgium_French'
	 * Meta informations :
	 * 	- documentation : Belgium (French), site ID 23, abbreviation BEFR, currency EUR.
	 * @return string 'Belgium_French'
	 */
	const VALUE_BELGIUM_FRENCH = 'Belgium_French';
	/**
	 * Constant for value 'France'
	 * Meta informations :
	 * 	- documentation : France, site ID 71, abbreviation FR, currency EUR.
	 * @return string 'France'
	 */
	const VALUE_FRANCE = 'France';
	/**
	 * Constant for value 'Germany'
	 * Meta informations :
	 * 	- documentation : Germany, site ID 77, abbreviation DE, currency EUR.
	 * @return string 'Germany'
	 */
	const VALUE_GERMANY = 'Germany';
	/**
	 * Constant for value 'Italy'
	 * Meta informations :
	 * 	- documentation : Italy, site ID 101, abbreviation IT, currency EUR.
	 * @return string 'Italy'
	 */
	const VALUE_ITALY = 'Italy';
	/**
	 * Constant for value 'Belgium_Dutch'
	 * Meta informations :
	 * 	- documentation : Belgium (Dutch), site ID 123, abbreviation BENL, currency EUR.
	 * @return string 'Belgium_Dutch'
	 */
	const VALUE_BELGIUM_DUTCH = 'Belgium_Dutch';
	/**
	 * Constant for value 'Netherlands'
	 * Meta informations :
	 * 	- documentation : Netherlands, site ID 146, abbreviation NL, currency EUR.
	 * @return string 'Netherlands'
	 */
	const VALUE_NETHERLANDS = 'Netherlands';
	/**
	 * Constant for value 'Spain'
	 * Meta informations :
	 * 	- documentation : Spain, site ID 186, abbreviation ES, currency EUR.
	 * @return string 'Spain'
	 */
	const VALUE_SPAIN = 'Spain';
	/**
	 * Constant for value 'Switzerland'
	 * Meta informations :
	 * 	- documentation : Switzerland, site ID 193, abbreviation CH, currency CHF.
	 * @return string 'Switzerland'
	 */
	const VALUE_SWITZERLAND = 'Switzerland';
	/**
	 * Constant for value 'Taiwan'
	 * Meta informations :
	 * 	- documentation : Taiwan, site ID 196, abbreviation TW, currency TWD.
	 * @return string 'Taiwan'
	 */
	const VALUE_TAIWAN = 'Taiwan';
	/**
	 * Constant for value 'eBayMotors'
	 * Meta informations :
	 * 	- documentation : eBay Motors, site ID 100, currency USD.
	 * @return string 'eBayMotors'
	 */
	const VALUE_EBAYMOTORS = 'eBayMotors';
	/**
	 * Constant for value 'HongKong'
	 * Meta informations :
	 * 	- documentation : Hong Kong, site ID 201, abbreviation HK, currency HKD.
	 * @return string 'HongKong'
	 */
	const VALUE_HONGKONG = 'HongKong';
	/**
	 * Constant for value 'Singapore'
	 * Meta informations :
	 * 	- documentation : Singapore, site ID 216, abbreviation SG, currency SGD.
	 * @return string 'Singapore'
	 */
	const VALUE_SINGAPORE = 'Singapore';
	/**
	 * Constant for value 'India'
	 * Meta informations :
	 * 	- documentation : India, site ID 203, abbreviation IN, currency INR.
	 * @return string 'India'
	 */
	const VALUE_INDIA = 'India';
	/**
	 * Constant for value 'China'
	 * Meta informations :
	 * 	- documentation : China, site ID 223, abbreviation CN, currency CNY.
	 * @return string 'China'
	 */
	const VALUE_CHINA = 'China';
	/**
	 * Constant for value 'Ireland'
	 * Meta informations :
	 * 	- documentation : Ireland, site ID 205, abbreviation IE, currency EUR.
	 * @return string 'Ireland'
	 */
	const VALUE_IRELAND = 'Ireland';
	/**
	 * Constant for value 'Malaysia'
	 * Meta informations :
	 * 	- documentation : Malaysia, site ID 207, abbreviation MY, currency MYR.
	 * @return string 'Malaysia'
	 */
	const VALUE_MALAYSIA = 'Malaysia';
	/**
	 * Constant for value 'Philippines'
	 * Meta informations :
	 * 	- documentation : Philippines, site ID 211, abbreviation PH, currency PHP.
	 * @return string 'Philippines'
	 */
	const VALUE_PHILIPPINES = 'Philippines';
	/**
	 * Constant for value 'Poland'
	 * Meta informations :
	 * 	- documentation : Poland, site ID 212, abbreviation PL, currency PLN.
	 * @return string 'Poland'
	 */
	const VALUE_POLAND = 'Poland';
	/**
	 * Constant for value 'Sweden'
	 * Meta informations :
	 * 	- documentation : Sweden, site ID 218, abbreviation SE, currency SEK.
	 * @return string 'Sweden'
	 */
	const VALUE_SWEDEN = 'Sweden';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Placeholder value. See <a href="types/simpleTypes.html#token">token</a>.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constant for value 'CanadaFrench'
	 * Meta informations :
	 * 	- documentation : CanadaFrench, site ID 210, abbreviation CAFR, currencies CAD and USD.
	 * @return string 'CanadaFrench'
	 */
	const VALUE_CANADAFRENCH = 'CanadaFrench';
	/**
	 * Constructor
	 * @return EbayShoppingTypeSiteCodeType
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
		return in_array($_value,array(self::VALUE_US,self::VALUE_CANADA,self::VALUE_UK,self::VALUE_AUSTRALIA,self::VALUE_AUSTRIA,self::VALUE_BELGIUM_FRENCH,self::VALUE_FRANCE,self::VALUE_GERMANY,self::VALUE_ITALY,self::VALUE_BELGIUM_DUTCH,self::VALUE_NETHERLANDS,self::VALUE_SPAIN,self::VALUE_SWITZERLAND,self::VALUE_TAIWAN,self::VALUE_EBAYMOTORS,self::VALUE_HONGKONG,self::VALUE_SINGAPORE,self::VALUE_INDIA,self::VALUE_CHINA,self::VALUE_IRELAND,self::VALUE_MALAYSIA,self::VALUE_PHILIPPINES,self::VALUE_POLAND,self::VALUE_SWEDEN,self::VALUE_CUSTOMCODE,self::VALUE_CANADAFRENCH));
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