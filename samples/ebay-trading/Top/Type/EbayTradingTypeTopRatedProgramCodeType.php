<?php
/**
 * Class file for EbayTradingTypeTopRatedProgramCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeTopRatedProgramCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeTopRatedProgramCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'US'
	 * Meta informations :
	 * 	- documentation : Specifies the US Top-Rated Seller Program.
	 * @return string 'US'
	 */
	const VALUE_US = 'US';
	/**
	 * Constant for value 'UK'
	 * Meta informations :
	 * 	- documentation : Specifies the UK Top-Rated Seller Program.
	 * @return string 'UK'
	 */
	const VALUE_UK = 'UK';
	/**
	 * Constant for value 'DE'
	 * Meta informations :
	 * 	- documentation : Specifies the German Top-Rated Seller Program.
	 * @return string 'DE'
	 */
	const VALUE_DE = 'DE';
	/**
	 * Constant for value 'Global'
	 * Meta informations :
	 * 	- documentation : Specifies the Global Top-Rated Seller Program.
	 * @return string 'Global'
	 */
	const VALUE_GLOBAL = 'Global';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeTopRatedProgramCodeType
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
		return in_array($_value,array(self::VALUE_US,self::VALUE_UK,self::VALUE_DE,self::VALUE_GLOBAL,self::VALUE_CUSTOMCODE));
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