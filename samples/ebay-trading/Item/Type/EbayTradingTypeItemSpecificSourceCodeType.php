<?php
/**
 * Class file for EbayTradingTypeItemSpecificSourceCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeItemSpecificSourceCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeItemSpecificSourceCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'ItemSpecific'
	 * Meta informations :
	 * 	- documentation : The Item Specific was originally stored with custom Item Specifics fields. (For example, the seller used the ItemSpecifics node in AddItem.) This is the default setting if Source isn't returned.
	 * @return string 'ItemSpecific'
	 */
	const VALUE_ITEMSPECIFIC = 'ItemSpecific';
	/**
	 * Constant for value 'Attribute'
	 * Meta informations :
	 * 	- documentation : The Item Specific was originally stored with eBay's system-defined (ID-based) attributes format. (For example, the seller used the AttributeSetArray node in AddItem at a time when the category supported Attributes.)
	 * @return string 'Attribute'
	 */
	const VALUE_ATTRIBUTE = 'Attribute';
	/**
	 * Constant for value 'Product'
	 * Meta informations :
	 * 	- documentation : The Item Specific is prefilled from a product catalog. (For example, the seller used ExternalProductID or ProductID in AddItem.)
	 * @return string 'Product'
	 */
	const VALUE_PRODUCT = 'Product';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeItemSpecificSourceCodeType
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
		return in_array($_value,array(self::VALUE_ITEMSPECIFIC,self::VALUE_ATTRIBUTE,self::VALUE_PRODUCT,self::VALUE_CUSTOMCODE));
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