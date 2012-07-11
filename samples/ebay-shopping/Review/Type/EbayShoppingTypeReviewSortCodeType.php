<?php
/**
 * Class file for EbayShoppingTypeReviewSortCodeType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeReviewSortCodeType
 * @date 05/07/2012
 */
class EbayShoppingTypeReviewSortCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'CreationTime'
	 * Meta informations :
	 * 	- documentation : Sorts reviews by creation time, in ascending or descending order.
	 * @return string 'CreationTime'
	 */
	const VALUE_CREATIONTIME = 'CreationTime';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for values that are not available in the version of the schema you are using. If eBay adds a new value to this code type as of a newer version, we return CustomCode instead when you specify a lower request version.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayShoppingTypeReviewSortCodeType
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
		return in_array($_value,array(self::VALUE_CREATIONTIME,self::VALUE_CUSTOMCODE));
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