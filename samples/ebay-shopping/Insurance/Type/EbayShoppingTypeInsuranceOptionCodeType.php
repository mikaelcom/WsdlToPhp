<?php
/**
 * Class file for EbayShoppingTypeInsuranceOptionCodeType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeInsuranceOptionCodeType
 * @date 05/07/2012
 */
class EbayShoppingTypeInsuranceOptionCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'Optional'
	 * Meta informations :
	 * 	- documentation : The seller offers the buyer the choice of paying for shipping insurance or not.
	 * @return string 'Optional'
	 */
	const VALUE_OPTIONAL = 'Optional';
	/**
	 * Constant for value 'Required'
	 * Meta informations :
	 * 	- documentation : The seller requires that the buyer pay for shipping insurance.
	 * @return string 'Required'
	 */
	const VALUE_REQUIRED = 'Required';
	/**
	 * Constant for value 'NotOffered'
	 * Meta informations :
	 * 	- documentation : The seller does not offer shipping insurance to the buyer.
	 * @return string 'NotOffered'
	 */
	const VALUE_NOTOFFERED = 'NotOffered';
	/**
	 * Constant for value 'IncludedInShippingHandling'
	 * Meta informations :
	 * 	- documentation : The seller is not charging separately for shipping insurance costs; any insurance is already included in the base shipping cost.
	 * @return string 'IncludedInShippingHandling'
	 */
	const VALUE_INCLUDEDINSHIPPINGHANDLING = 'IncludedInShippingHandling';
	/**
	 * Constant for value 'NotOfferedOnSite'
	 * Meta informations :
	 * 	- documentation : Shipping insurance is not offered as a separate option on the site where the item is listed. (Some shipping services, such as DE_InsuredExpressOrCourier, include insurance as part of the service.) If another insurance option is specified in the listing request and the site does not support shipping insurance as a separate option, eBay will reset the insurance option to this value. At the time of this writing, this option is only meaningful for the eBay Germany, Austria, and Switzerland sites.
	 * @return string 'NotOfferedOnSite'
	 */
	const VALUE_NOTOFFEREDONSITE = 'NotOfferedOnSite';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Placeholder value. See <a href="types/simpleTypes.html#token">token</a>.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayShoppingTypeInsuranceOptionCodeType
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
		return in_array($_value,array(self::VALUE_OPTIONAL,self::VALUE_REQUIRED,self::VALUE_NOTOFFERED,self::VALUE_INCLUDEDINSHIPPINGHANDLING,self::VALUE_NOTOFFEREDONSITE,self::VALUE_CUSTOMCODE));
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