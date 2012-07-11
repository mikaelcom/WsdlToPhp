<?php
/**
 * Class file for EbayShoppingTypeProductStateCodeType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeProductStateCodeType
 * @date 05/07/2012
 */
class EbayShoppingTypeProductStateCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'Update'
	 * Meta informations :
	 * 	- documentation : The product details have been updated. If your application currently uses the product for listing or searching, we recommend that you check to make sure the product data still meets your needs.
	 * @return string 'Update'
	 */
	const VALUE_UPDATE = 'Update';
	/**
	 * Constant for value 'UpdateMajor'
	 * Meta informations :
	 * 	- documentation : This product has changed. This product has been mapped to a newer product in the catalog that eBay (or Half.com) is currently using, and its details have been updated based on the new catalog data. The product reference ID remains the same (but the longer product ID string may have changed). If your application currently uses the product for searching, we recommend that you check to make sure the product data still meets your needs.
	 * @return string 'UpdateMajor'
	 */
	const VALUE_UPDATEMAJOR = 'UpdateMajor';
	/**
	 * Constant for value 'UpdateNoDetails'
	 * Meta informations :
	 * 	- documentation : This product was previously available in an earlier catalog, but it has not been mapped to a product in the catalog that eBay is currently using. It can still be used for searching, but it may contain fewer details than other products. If your application currently uses the product for searching, we recommend that you check to make sure the product data still meets your needs. Not applicable to Half.com.
	 * @return string 'UpdateNoDetails'
	 */
	const VALUE_UPDATENODETAILS = 'UpdateNoDetails';
	/**
	 * Constant for value 'Merge'
	 * Meta informations :
	 * 	- documentation : Some information in this product is scheduled to be merged into another product in the catalog that eBay (or Half.com) is currently using. This product may be removed from the system at any time. If your application currently uses the product for searching, we recommend that you update your application to use a product that is not scheduled to be merged or deleted.
	 * @return string 'Merge'
	 */
	const VALUE_MERGE = 'Merge';
	/**
	 * Constant for value 'Delete'
	 * Meta informations :
	 * 	- documentation : This product is marked for deletion, and it will not be mapped to another product. If your application currently uses the product for searching, we recommend that you update your application to use a product that is not scheduled to be merged or deleted.
	 * @return string 'Delete'
	 */
	const VALUE_DELETE = 'Delete';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayShoppingTypeProductStateCodeType
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
		return in_array($_value,array(self::VALUE_UPDATE,self::VALUE_UPDATEMAJOR,self::VALUE_UPDATENODETAILS,self::VALUE_MERGE,self::VALUE_DELETE,self::VALUE_CUSTOMCODE));
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