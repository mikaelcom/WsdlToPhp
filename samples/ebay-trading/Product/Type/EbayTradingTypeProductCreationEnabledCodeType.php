<?php
/**
 * Class file for EbayTradingTypeProductCreationEnabledCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeProductCreationEnabledCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeProductCreationEnabledCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Disabled'
	 * Meta informations :
	 * 	- documentation : Product creation is not supported for the category. AddItem family calls can still list with product.
	 * @return string 'Disabled'
	 */
	const VALUE_DISABLED = 'Disabled';
	/**
	 * Constant for value 'Enabled'
	 * Meta informations :
	 * 	- documentation : Product creation is supported for the category. AddItem and related listing calls can list with a product from the eBay catalog, but it is not mandatory. Currently, unless listing with a product is required, the capability to add products to eBay catalogs is only available to a select set of users identified by eBay.
	 * @return string 'Enabled'
	 */
	const VALUE_ENABLED = 'Enabled';
	/**
	 * Constant for value 'Required'
	 * Meta informations :
	 * 	- documentation : Product creation is supported for the category and listing with a product is required. If there is no matching product in the eBay catalog for the item, the seller must add the product to the catalog before listing the item. For categories that require listing with a product, any seller will be allowed to add a product. Product creation will be supported in the API and other tools.
	 * @return string 'Required'
	 */
	const VALUE_REQUIRED = 'Required';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeProductCreationEnabledCodeType
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
		return in_array($_value,array(self::VALUE_DISABLED,self::VALUE_ENABLED,self::VALUE_REQUIRED,self::VALUE_CUSTOMCODE));
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