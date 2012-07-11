<?php
/**
 * Class file for EbayTradingTypeStorefrontType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeStorefrontType
 * Documentation : Contains information related to the item in the context of a seller's eBay Store. Applicable for auction format, Basic Fixed Price, and Store Inventory format items listed by eBay Stores sellers.
 * @date 04/07/2012
 */
class EbayTradingTypeStorefrontType extends EbayTradingWsdlClass
{
	/**
	 * The StoreCategoryID
	 * Meta informations :
	 * 	- documentation : Numeric ID for a custom category that the seller created in their eBay Store, if any. eBay Stores sellers can create up to three levels of custom categories for their stores. Items can only be listed in store categories that have no child categories (subcategories). If you attempt to list an item in a category that has subcategories, the call response contains a warning, and the item is listed in the Other store category. In GetProducts, this field currently returns 0. As a workaround, use GetItem or related calls to get the ID.
	 * @var long
	 */
	public $StoreCategoryID;
	/**
	 * The StoreCategory2ID
	 * Meta informations :
	 * 	- documentation : Applicable for eBay Store sellers only. Numeric ID for a second custom category that the seller created in their eBay Store. eBay Stores sellers can create up to 300 custom categories for their stores. (One additional Store category cannot be customized and retains the value of "Other"). <br> If you specify an invalid value, the values are the same for both the primary and secondary store categories, or if the seondary store category is specified but the primary is left blank (or other), the system resets the value to 0 (None). In short, the primary store category must be set to something meaningful and different from the second store category in order to set the secondary store category to a value other than 0. In GetProducts, this field currently returns 0. As a workaround, use GetItem or related calls to get the ID.
	 * @var long
	 */
	public $StoreCategory2ID;
	/**
	 * The StoreURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The URL of the seller's eBay Store page. GetProducts only returned a default URL at the time of this writing.
	 * @var anyURI
	 */
	public $StoreURL;
	/**
	 * The StoreName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of the seller's eBay Store. GetProducts returns an empty value for all items at the time of this writing.
	 * @var string
	 */
	public $StoreName;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param long StoreCategoryID
	 * @param long StoreCategory2ID
	 * @param anyURI StoreURL
	 * @param string StoreName
	 * @param DOMDocument any
	 * @return EbayTradingTypeStorefrontType
	 */
	public function __construct($_StoreCategoryID = null,$_StoreCategory2ID = null,$_StoreURL = null,$_StoreName = null,$_any = null)
	{
		parent::__construct(array('StoreCategoryID'=>$_StoreCategoryID,'StoreCategory2ID'=>$_StoreCategory2ID,'StoreURL'=>$_StoreURL,'StoreName'=>$_StoreName,'any'=>$_any));
	}
	/**
	 * Set StoreCategoryID
	 * @param long StoreCategoryID
	 * @return long
	 */
	public function setStoreCategoryID($_StoreCategoryID)
	{
		return ($this->StoreCategoryID = $_StoreCategoryID);
	}
	/**
	 * Get StoreCategoryID
	 * @return long
	 */
	public function getStoreCategoryID()
	{
		return $this->StoreCategoryID;
	}
	/**
	 * Set StoreCategory2ID
	 * @param long StoreCategory2ID
	 * @return long
	 */
	public function setStoreCategory2ID($_StoreCategory2ID)
	{
		return ($this->StoreCategory2ID = $_StoreCategory2ID);
	}
	/**
	 * Get StoreCategory2ID
	 * @return long
	 */
	public function getStoreCategory2ID()
	{
		return $this->StoreCategory2ID;
	}
	/**
	 * Set StoreURL
	 * @param anyURI StoreURL
	 * @return anyURI
	 */
	public function setStoreURL($_StoreURL)
	{
		return ($this->StoreURL = $_StoreURL);
	}
	/**
	 * Get StoreURL
	 * @return anyURI
	 */
	public function getStoreURL()
	{
		return $this->StoreURL;
	}
	/**
	 * Set StoreName
	 * @param string StoreName
	 * @return string
	 */
	public function setStoreName($_StoreName)
	{
		return ($this->StoreName = $_StoreName);
	}
	/**
	 * Get StoreName
	 * @return string
	 */
	public function getStoreName()
	{
		return $this->StoreName;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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