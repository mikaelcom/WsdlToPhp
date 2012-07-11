<?php
/**
 * Class file for EbayTradingTypeProductUseCaseCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeProductUseCaseCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeProductUseCaseCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'AddItem'
	 * Meta informations :
	 * 	- documentation : (in) Use this code when calling GetProductSellingPages before adding an item. This retrieves the latest product ID and the corresponding characteristic meta-data.
	 * @return string 'AddItem'
	 */
	const VALUE_ADDITEM = 'AddItem';
	/**
	 * Constant for value 'ReviseItem'
	 * Meta informations :
	 * 	- documentation : (in) Use this code when calling GetProductSellingPages before revising an item that already contains product information. If the product ID or data has changed, the original product ID that you passed in and the data associated with that original version of the product is returned. This is useful because the original Pre-filled Item Information is used when you call ReviseItem.
	 * @return string 'ReviseItem'
	 */
	const VALUE_REVISEITEM = 'ReviseItem';
	/**
	 * Constant for value 'RelistItem'
	 * Meta informations :
	 * 	- documentation : (in) Use this code when calling GetProductSellingPages before relisting an item that already contains product information. This retrieves the latest product ID and the corresponding characteristic meta-data (same data as AddItem).
	 * @return string 'RelistItem'
	 */
	const VALUE_RELISTITEM = 'RelistItem';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeProductUseCaseCodeType
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
		return in_array($_value,array(self::VALUE_ADDITEM,self::VALUE_REVISEITEM,self::VALUE_RELISTITEM,self::VALUE_CUSTOMCODE));
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