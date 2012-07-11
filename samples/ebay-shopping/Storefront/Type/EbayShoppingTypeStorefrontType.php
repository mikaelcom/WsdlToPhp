<?php
/**
 * Class file for EbayShoppingTypeStorefrontType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeStorefrontType
 * Documentation : Contains information related to the item in the context of a seller's eBay Store. Applicable for auction format, Basic Fixed Price, and Store Inventory format items listed by eBay Stores sellers.
 * @date 05/07/2012
 */
class EbayShoppingTypeStorefrontType extends EbayShoppingWsdlClass
{
	/**
	 * The StoreURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The URL of the seller's eBay Store page. Not returned if the seller does not have an eBay store. <br><br> FindProducts only returned a default URL at the time of this writing. FindHalfProducts returns the URL of the seller's Half.com Shop page.
	 * @var anyURI
	 */
	public $StoreURL;
	/**
	 * The StoreName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of the seller's eBay Store. Not returned if the seller does not have an eBay store. <br><br> FindProducts returns an empty value for all items at the time of this writing. FindHalfProducts returns the name of seller's Half.com Shop, which is the SellerID.
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
	 * @param anyURI StoreURL
	 * @param string StoreName
	 * @param DOMDocument any
	 * @return EbayShoppingTypeStorefrontType
	 */
	public function __construct($_StoreURL = null,$_StoreName = null,$_any = null)
	{
		parent::__construct(array('StoreURL'=>$_StoreURL,'StoreName'=>$_StoreName,'any'=>$_any));
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