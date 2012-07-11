<?php
/**
 * Class file for EbayShoppingTypeShippingTypeCodeType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeShippingTypeCodeType
 * @date 05/07/2012
 */
class EbayShoppingTypeShippingTypeCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'Flat'
	 * Meta informations :
	 * 	- documentation : The flat rate shipping model: the seller establishes the cost of shipping and cost of shipping insurance, regardless of what any buyer-selected shipping service might charge the seller.
	 * @return string 'Flat'
	 */
	const VALUE_FLAT = 'Flat';
	/**
	 * Constant for value 'Calculated'
	 * Meta informations :
	 * 	- documentation : The calculated shipping model: the posted cost of shipping is based on the seller-offered and buyer-selected shipping service, where the shipping costs are calculated by eBay and the shipping carrier based on the buyer's address, and any packaging/handling costs established by the seller are automatically rolled into the total.
	 * @return string 'Calculated'
	 */
	const VALUE_CALCULATED = 'Calculated';
	/**
	 * Constant for value 'Freight'
	 * Meta informations :
	 * 	- documentation : The freight shipping model: the cost of shipping is determined by a third party, FreightQuote.com, based on the item location (zip code). Currently, Freight can only be specified on input via eBay Web site, not via API.
	 * @return string 'Freight'
	 */
	const VALUE_FREIGHT = 'Freight';
	/**
	 * Constant for value 'Free'
	 * Meta informations :
	 * 	- documentation : Free is used when the seller is declaring that shipping is free for the buyer. Since Free cannot be selected via API, the seller has two options for signifying that shipping is free when listing an item: <br> - omit shipping details, mention in the item description that shipping is free, and set ShippingTermsInDescription to true <br> - select an arbitrary shipping service and set its shipping cost to 0, mention in the item description that shipping is free, and set ShippingTermsInDescription to true <br> The latter is a better way to communicate "free shipping" because eBay picks up the "0" cost and can more accurately identify shipping costs in search results.
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
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Placeholder value. See <a href="types/simpleTypes.html#token">token</a>.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayShoppingTypeShippingTypeCodeType
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
		return in_array($_value,array(self::VALUE_FLAT,self::VALUE_CALCULATED,self::VALUE_FREIGHT,self::VALUE_FREE,self::VALUE_NOTSPECIFIED,self::VALUE_FLATDOMESTICCALCULATEDINTERNATIONAL,self::VALUE_CALCULATEDDOMESTICFLATINTERNATIONAL,self::VALUE_CUSTOMCODE));
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