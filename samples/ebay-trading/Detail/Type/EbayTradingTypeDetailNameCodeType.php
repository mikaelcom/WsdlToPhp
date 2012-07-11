<?php
/**
 * Class file for EbayTradingTypeDetailNameCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDetailNameCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeDetailNameCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'CountryDetails'
	 * Meta informations :
	 * 	- documentation : Lists the country code and associated name of the countries supported by the eBay system.
	 * @return string 'CountryDetails'
	 */
	const VALUE_COUNTRYDETAILS = 'CountryDetails';
	/**
	 * Constant for value 'CurrencyDetails'
	 * Meta informations :
	 * 	- documentation : Lists the currencies supported by the eBay system.
	 * @return string 'CurrencyDetails'
	 */
	const VALUE_CURRENCYDETAILS = 'CurrencyDetails';
	/**
	 * Constant for value 'PaymentOptionDetails'
	 * Meta informations :
	 * 	- documentation : Not functional. Do not use this value. <br /> Formerly, this value was used to get details about specific payment options.
	 * @return string 'PaymentOptionDetails'
	 */
	const VALUE_PAYMENTOPTIONDETAILS = 'PaymentOptionDetails';
	/**
	 * Constant for value 'RegionDetails'
	 * Meta informations :
	 * 	- documentation : Not functional. Do not use this value.
	 * @return string 'RegionDetails'
	 */
	const VALUE_REGIONDETAILS = 'RegionDetails';
	/**
	 * Constant for value 'ShippingLocationDetails'
	 * Meta informations :
	 * 	- documentation : Lists the regions and locations supported by eBays shipping services.
	 * @return string 'ShippingLocationDetails'
	 */
	const VALUE_SHIPPINGLOCATIONDETAILS = 'ShippingLocationDetails';
	/**
	 * Constant for value 'ShippingServiceDetails'
	 * Meta informations :
	 * 	- documentation : Lists the shipping services supported by the specified eBay site.
	 * @return string 'ShippingServiceDetails'
	 */
	const VALUE_SHIPPINGSERVICEDETAILS = 'ShippingServiceDetails';
	/**
	 * Constant for value 'SiteDetails'
	 * Meta informations :
	 * 	- documentation : Lists the available eBay sites and their associated SiteID numbers.
	 * @return string 'SiteDetails'
	 */
	const VALUE_SITEDETAILS = 'SiteDetails';
	/**
	 * Constant for value 'TaxJurisdiction'
	 * Meta informations :
	 * 	- documentation : Details the different tax jurisdictions supported by the specified eBay site.
	 * @return string 'TaxJurisdiction'
	 */
	const VALUE_TAXJURISDICTION = 'TaxJurisdiction';
	/**
	 * Constant for value 'URLDetails'
	 * Meta informations :
	 * 	- documentation : Lists the different eBay URLs associated with the specified eBay site.
	 * @return string 'URLDetails'
	 */
	const VALUE_URLDETAILS = 'URLDetails';
	/**
	 * Constant for value 'TimeZoneDetails'
	 * Meta informations :
	 * 	- documentation : Lists the details of the time zones supported by the eBay system.
	 * @return string 'TimeZoneDetails'
	 */
	const VALUE_TIMEZONEDETAILS = 'TimeZoneDetails';
	/**
	 * Constant for value 'RegionOfOriginDetails'
	 * Meta informations :
	 * 	- documentation : Not functional. Do not use this value.<br /> Details about the region of origin of a listing.
	 * @return string 'RegionOfOriginDetails'
	 */
	const VALUE_REGIONOFORIGINDETAILS = 'RegionOfOriginDetails';
	/**
	 * Constant for value 'DispatchTimeMaxDetails'
	 * Meta informations :
	 * 	- documentation : Details about maximum dispatch times.
	 * @return string 'DispatchTimeMaxDetails'
	 */
	const VALUE_DISPATCHTIMEMAXDETAILS = 'DispatchTimeMaxDetails';
	/**
	 * Constant for value 'ItemSpecificDetails'
	 * Meta informations :
	 * 	- documentation : Details about Item Specifics rules for the specified site.
	 * @return string 'ItemSpecificDetails'
	 */
	const VALUE_ITEMSPECIFICDETAILS = 'ItemSpecificDetails';
	/**
	 * Constant for value 'UnitOfMeasurementDetails'
	 * Meta informations :
	 * 	- documentation : Lists the suggested unit-of-measurement strings to use with Item Specifics descriptions.
	 * @return string 'UnitOfMeasurementDetails'
	 */
	const VALUE_UNITOFMEASUREMENTDETAILS = 'UnitOfMeasurementDetails';
	/**
	 * Constant for value 'ShippingPackageDetails'
	 * Meta informations :
	 * 	- documentation : Lists the various shipping packages supported by the specified site.
	 * @return string 'ShippingPackageDetails'
	 */
	const VALUE_SHIPPINGPACKAGEDETAILS = 'ShippingPackageDetails';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constant for value 'ShippingCarrierDetails'
	 * Meta informations :
	 * 	- documentation : Lists the shipping carriers supported by the specified site.
	 * @return string 'ShippingCarrierDetails'
	 */
	const VALUE_SHIPPINGCARRIERDETAILS = 'ShippingCarrierDetails';
	/**
	 * Constant for value 'ListingStartPriceDetails'
	 * Meta informations :
	 * 	- documentation : Lists the minimum starting prices for the supported types of eBay listings.
	 * @return string 'ListingStartPriceDetails'
	 */
	const VALUE_LISTINGSTARTPRICEDETAILS = 'ListingStartPriceDetails';
	/**
	 * Constant for value 'ReturnPolicyDetails'
	 * Meta informations :
	 * 	- documentation : Lists the return policies supported by the specified eBay site.
	 * @return string 'ReturnPolicyDetails'
	 */
	const VALUE_RETURNPOLICYDETAILS = 'ReturnPolicyDetails';
	/**
	 * Constant for value 'BuyerRequirementDetails'
	 * Meta informations :
	 * 	- documentation : Details various eBay-buyer requirements.
	 * @return string 'BuyerRequirementDetails'
	 */
	const VALUE_BUYERREQUIREMENTDETAILS = 'BuyerRequirementDetails';
	/**
	 * Constant for value 'ListingFeatureDetails'
	 * Meta informations :
	 * 	- documentation : Details the listing features available for the specified site.
	 * @return string 'ListingFeatureDetails'
	 */
	const VALUE_LISTINGFEATUREDETAILS = 'ListingFeatureDetails';
	/**
	 * Constant for value 'VariationDetails'
	 * Meta informations :
	 * 	- documentation : Details the multi-variation listing rules for the site.
	 * @return string 'VariationDetails'
	 */
	const VALUE_VARIATIONDETAILS = 'VariationDetails';
	/**
	 * Constant for value 'ExcludeShippingLocationDetails'
	 * Meta informations :
	 * 	- documentation : Lists the locations supported by the ExcludeShipToLocation feature. <br /> The codes reflect the <a href= "http://www.iso.org/iso/country_codes/iso_3166_code_lists/english_country_names_and_code_elements.htm" >ISO 3166</a> location codes.
	 * @return string 'ExcludeShippingLocationDetails'
	 */
	const VALUE_EXCLUDESHIPPINGLOCATIONDETAILS = 'ExcludeShippingLocationDetails';
	/**
	 * Constant for value 'RecoupmentPolicyDetails'
	 * Meta informations :
	 * 	- documentation : Details the recoupment policies of the site.
	 * @return string 'RecoupmentPolicyDetails'
	 */
	const VALUE_RECOUPMENTPOLICYDETAILS = 'RecoupmentPolicyDetails';
	/**
	 * Constant for value 'ShippingCategoryDetails'
	 * Meta informations :
	 * 	- documentation : Enumeration of the categories in which the shipping services available for the site belongs to.
	 * @return string 'ShippingCategoryDetails'
	 */
	const VALUE_SHIPPINGCATEGORYDETAILS = 'ShippingCategoryDetails';
	/**
	 * Constructor
	 * @return EbayTradingTypeDetailNameCodeType
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
		return in_array($_value,array(self::VALUE_COUNTRYDETAILS,self::VALUE_CURRENCYDETAILS,self::VALUE_PAYMENTOPTIONDETAILS,self::VALUE_REGIONDETAILS,self::VALUE_SHIPPINGLOCATIONDETAILS,self::VALUE_SHIPPINGSERVICEDETAILS,self::VALUE_SITEDETAILS,self::VALUE_TAXJURISDICTION,self::VALUE_URLDETAILS,self::VALUE_TIMEZONEDETAILS,self::VALUE_REGIONOFORIGINDETAILS,self::VALUE_DISPATCHTIMEMAXDETAILS,self::VALUE_ITEMSPECIFICDETAILS,self::VALUE_UNITOFMEASUREMENTDETAILS,self::VALUE_SHIPPINGPACKAGEDETAILS,self::VALUE_CUSTOMCODE,self::VALUE_SHIPPINGCARRIERDETAILS,self::VALUE_LISTINGSTARTPRICEDETAILS,self::VALUE_RETURNPOLICYDETAILS,self::VALUE_BUYERREQUIREMENTDETAILS,self::VALUE_LISTINGFEATUREDETAILS,self::VALUE_VARIATIONDETAILS,self::VALUE_EXCLUDESHIPPINGLOCATIONDETAILS,self::VALUE_RECOUPMENTPOLICYDETAILS,self::VALUE_SHIPPINGCATEGORYDETAILS));
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