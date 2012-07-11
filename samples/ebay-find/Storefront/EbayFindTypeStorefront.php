<?php
/**
 * Class file for EbayFindTypeStorefront
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeStorefront
 * Documentation : Denotes whether the item is a storefront listing.
 * @date 04/07/2012
 */
class EbayFindTypeStorefront extends EbayFindWsdlClass
{
	/**
	 * The storeName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of the seller's eBay Store.
	 * @var string
	 */
	public $storeName;
	/**
	 * The storeURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The URL of the seller's eBay Store page.
	 * @var anyURI
	 */
	public $storeURL;
	/**
	 * The delimiter
	 * @var string
	 */
	public $delimiter;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string storeName
	 * @param anyURI storeURL
	 * @param string delimiter
	 * @param DOMDocument any
	 * @return EbayFindTypeStorefront
	 */
	public function __construct($_storeName = null,$_storeURL = null,$_delimiter = null,$_any = null)
	{
		parent::__construct(array('storeName'=>$_storeName,'storeURL'=>$_storeURL,'delimiter'=>$_delimiter,'any'=>$_any));
	}
	/**
	 * Set storeName
	 * @param string storeName
	 * @return string
	 */
	public function setStoreName($_storeName)
	{
		return ($this->storeName = $_storeName);
	}
	/**
	 * Get storeName
	 * @return string
	 */
	public function getStoreName()
	{
		return $this->storeName;
	}
	/**
	 * Set storeURL
	 * @param anyURI storeURL
	 * @return anyURI
	 */
	public function setStoreURL($_storeURL)
	{
		return ($this->storeURL = $_storeURL);
	}
	/**
	 * Get storeURL
	 * @return anyURI
	 */
	public function getStoreURL()
	{
		return $this->storeURL;
	}
	/**
	 * Set delimiter
	 * @param string delimiter
	 * @return string
	 */
	public function setDelimiter($_delimiter)
	{
		return ($this->delimiter = $_delimiter);
	}
	/**
	 * Get delimiter
	 * @return string
	 */
	public function getDelimiter()
	{
		return $this->delimiter;
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