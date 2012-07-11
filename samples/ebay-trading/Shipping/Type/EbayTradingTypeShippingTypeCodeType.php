<?php
/**
 * Class file for EbayTradingTypeShippingTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeShippingTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeShippingTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Flat'
	 * Meta informations :
	 * 	- documentation : Flat shipping model: the seller establishes the cost of shipping and cost of shipping insurance, regardless of what any buyer-selected shipping service might charge the seller.
	 * @return string 'Flat'
	 */
	const VALUE_FLAT = 'Flat';
	/**
	 * Constant for value 'Calculated'
	 * Meta informations :
	 * 	- documentation : Calculated shipping model: the cost of shipping is determined in large part by the seller-offered and buyer-selected shipping service. The seller might assess an additional fee via PackagingHandlingCosts.
	 * @return string 'Calculated'
	 */
	const VALUE_CALCULATED = 'Calculated';
	/**
	 * Constant for value 'Freight'
	 * Meta informations :
	 * 	- documentation : Freight shipping model: the cost of shipping is determined by a third party, FreightQuote.com, based on the item location (zip code). Currently, Freight can only be specified on input via eBay Web site, not API.
	 * @return string 'Freight'
	 */
	const VALUE_FREIGHT = 'Freight';
	/**
	 * Constant for value 'Free'
	 * Meta informations :
	 * 	- documentation : Free shipping. Returned only by GetProducts. This field is output-only so if you want to use AddItem to specify a free Shipping Cost, specify 0 in Item.ShippingDetails.ShippingServiceOptions.ShippingServiceCost.
	 * @return string 'Free'
	 */
	const VALUE_FREE = 'Free';
	/**
	 * Constant for value 'NotSpecified'
	 * Meta informations :
	 * 	- documentation : The seller did not specify the shipping type.
	 * @return string 'NotSpecified'
	 */
	const VALUE_NOTSPECIFIED = 'NotSpecified';
	/**
	 * Constant for value 'FlatDomesticCalculatedInternational'
	 * Meta informations :
	 * 	- documentation : The seller specified one or more flat domestic shipping services and one or more calculated international shipping services.
	 * @return string 'FlatDomesticCalculatedInternational'
	 */
	const VALUE_FLATDOMESTICCALCULATEDINTERNATIONAL = 'FlatDomesticCalculatedInternational';
	/**
	 * Constant for value 'CalculatedDomesticFlatInternational'
	 * Meta informations :
	 * 	- documentation : The seller specified one or more calculated domestic shipping services and one or more flat international shipping services.
	 * @return string 'CalculatedDomesticFlatInternational'
	 */
	const VALUE_CALCULATEDDOMESTICFLATINTERNATIONAL = 'CalculatedDomesticFlatInternational';
	/**
	 * Constant for value 'FreightFlat'
	 * Meta informations :
	 * 	- documentation : Freight shipping model: freight shipping may be used when flat or calculated shipping cannot be used due to the greater weight of the item. See "Specifying Freight Shipping" in the Shipping chapter for details on freight shipping.
	 * @return string 'FreightFlat'
	 */
	const VALUE_FREIGHTFLAT = 'FreightFlat';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeShippingTypeCodeType
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
		return in_array($_value,array(self::VALUE_FLAT,self::VALUE_CALCULATED,self::VALUE_FREIGHT,self::VALUE_FREE,self::VALUE_NOTSPECIFIED,self::VALUE_FLATDOMESTICCALCULATEDINTERNATIONAL,self::VALUE_CALCULATEDDOMESTICFLATINTERNATIONAL,self::VALUE_FREIGHTFLAT,self::VALUE_CUSTOMCODE));
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