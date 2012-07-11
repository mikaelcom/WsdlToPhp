<?php
/**
 * Class file for EbayTradingTypeSiteIDFilterCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSiteIDFilterCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeSiteIDFilterCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'ListedInCurrencyImplied'
	 * Meta informations :
	 * 	- documentation : (in) Items listed in the currency implied by the site specified in the request.
	 * @return string 'ListedInCurrencyImplied'
	 */
	const VALUE_LISTEDINCURRENCYIMPLIED = 'ListedInCurrencyImplied';
	/**
	 * Constant for value 'LocatedInCountryImplied'
	 * Meta informations :
	 * 	- documentation : (in) Items located in the country implied by the site specified in the request.
	 * @return string 'LocatedInCountryImplied'
	 */
	const VALUE_LOCATEDINCOUNTRYIMPLIED = 'LocatedInCountryImplied';
	/**
	 * Constant for value 'AvailableInCountryImplied'
	 * Meta informations :
	 * 	- documentation : (in) Items available to the country implied by the site specified in the request. For the US site, this implies listings from ALL English-language countries that are available to the US.
	 * @return string 'AvailableInCountryImplied'
	 */
	const VALUE_AVAILABLEINCOUNTRYIMPLIED = 'AvailableInCountryImplied';
	/**
	 * Constant for value 'SiteImplied'
	 * Meta informations :
	 * 	- documentation : (in) Items listed on the site specified in the request, regardless of listing currency.
	 * @return string 'SiteImplied'
	 */
	const VALUE_SITEIMPLIED = 'SiteImplied';
	/**
	 * Constant for value 'BelgiumListing'
	 * Meta informations :
	 * 	- documentation : (in) Items located in Belgium or listed on one of the two Belgian sites.
	 * @return string 'BelgiumListing'
	 */
	const VALUE_BELGIUMLISTING = 'BelgiumListing';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeSiteIDFilterCodeType
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
		return in_array($_value,array(self::VALUE_LISTEDINCURRENCYIMPLIED,self::VALUE_LOCATEDINCOUNTRYIMPLIED,self::VALUE_AVAILABLEINCOUNTRYIMPLIED,self::VALUE_SITEIMPLIED,self::VALUE_BELGIUMLISTING,self::VALUE_CUSTOMCODE));
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