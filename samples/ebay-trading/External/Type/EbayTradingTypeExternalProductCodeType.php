<?php
/**
 * Class file for EbayTradingTypeExternalProductCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeExternalProductCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeExternalProductCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'ISBN'
	 * Meta informations :
	 * 	- documentation : ExternalProductID.Value contains an ISBN value. Required when you pass an ISBN as the external product ID. (This value is also applicable to Half.com listings.)
	 * @return string 'ISBN'
	 */
	const VALUE_ISBN = 'ISBN';
	/**
	 * Constant for value 'UPC'
	 * Meta informations :
	 * 	- documentation : ExternalProductID.Value contains a UPC value. Required when you pass a UPC as the external product ID. (This value is also applicable to Half.com listings.)
	 * @return string 'UPC'
	 */
	const VALUE_UPC = 'UPC';
	/**
	 * Constant for value 'ProductID'
	 * Meta informations :
	 * 	- documentation : ExternalProductID.Value contains an eBay catalog product ID. Required when you pass an eBay product ID as the external product ID. Not applicable with GetProducts.
	 * @return string 'ProductID'
	 */
	const VALUE_PRODUCTID = 'ProductID';
	/**
	 * Constant for value 'EAN'
	 * Meta informations :
	 * 	- documentation : ExternalProductID.Value contains an EAN value. Required when you pass an EAN as the external product ID.
	 * @return string 'EAN'
	 */
	const VALUE_EAN = 'EAN';
	/**
	 * Constant for value 'Keywords'
	 * Meta informations :
	 * 	- documentation : ExternalProductID.Value contains a set of keywords that uniquely identify the product. Only applicable when listing event ticket. See the eBay Web Services guide for information about valid ticket keywords for an external product ID. Required when you pass a set of keywords as the external product ID. Not applicable with GetProducts.
	 * @return string 'Keywords'
	 */
	const VALUE_KEYWORDS = 'Keywords';
	/**
	 * Constant for value 'MPN'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @return string 'MPN'
	 */
	const VALUE_MPN = 'MPN';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeExternalProductCodeType
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
		return in_array($_value,array(self::VALUE_ISBN,self::VALUE_UPC,self::VALUE_PRODUCTID,self::VALUE_EAN,self::VALUE_KEYWORDS,self::VALUE_MPN,self::VALUE_CUSTOMCODE));
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