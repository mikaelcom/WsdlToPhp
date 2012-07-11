<?php
/**
 * Class file for EbayTradingTypeProductType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeProductType
 * Documentation : The name of the product, as defined within the catalog. Not necessarily the same as the "Title" attribute in the characteristics set metadata. On the eBay site, this title serves as the basis for the suggested item title (truncated to the maximum length permitted for Item Title in item listing calls). Applications can use this value to supply a suggested listing title to users.
 * @date 04/07/2012
 */
class EbayTradingTypeProductType extends EbayTradingWsdlClass
{
	/**
	 * The CharacteristicsSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A set of characteristics that describe the product in a standardized way. In responses, only the attributes and values that applicable for the specified product are returned.
	 * @var EbayTradingTypeCharacteristicsSetType
	 */
	public $CharacteristicsSet;
	/**
	 * The DetailsURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Fully qualified URL for optional information about the product, such as a movie's description or film credits. This information is hosted through the eBay site and cannot be edited. Applications can include this URL as a link in product search results so that end users can view additional descriptive details about the product.
	 * @var anyURI
	 */
	public $DetailsURL;
	/**
	 * The NumItems
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Total number of active listings on the specified eBay site that were pre-filled based on this product.
	 * @var int
	 */
	public $NumItems;
	/**
	 * The MinPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Lowest current price of active and ended listings on the specified eBay site that were pre-filled based on this product. The value is in the specified site's currency.
	 * @var EbayTradingTypeAmountType
	 */
	public $MinPrice;
	/**
	 * The MaxPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Highest current price of active and ended listings on the specified eBay site that were pre-filled based on this product. The value is in the specified site's currency. Round numbers (such as 15.0) may only show one zero after the decimal (as with any double in the schema).
	 * @var EbayTradingTypeAmountType
	 */
	public $MaxPrice;
	/**
	 * The ProductReferenceID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : eBay's global reference ID for a catalog product. On the eBay Web site, this is known as the "ePID". A reference ID is a fixed reference to a product (regardless of version). One reference ID can be associated with multiple ProductID values. The value should start with "EPID", for example "EPID30971438" (without quotes). You can find reference IDs for products by using GetProducts (or FindProducts in the Shopping API). You can also find the ePID on eBay's Web site. <br><br> If the primary and secondary categories are both catalog-enabled, this ID should correspond to the primary category (not the secondary category).<br> <br> Some sites (such as eBay US, Germany, Austria, and Switzerland) are updating, replacing, deleting, or merging some products (as a result of migrating from one catalog data provider to another). If you specify one of these products in a request, the call may return the product with a warning, or it may return an error if the product has been deleted.
	 * @var string
	 */
	public $ProductReferenceID;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * The productID
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $productID;
	/**
	 * The stockPhotoURL
	 * @var anyURI
	 */
	public $stockPhotoURL;
	/**
	 * The title
	 * @var string
	 */
	public $title;
	/**
	 * Constructor
	 * @param EbayTradingTypeCharacteristicsSetType CharacteristicsSet
	 * @param anyURI DetailsURL
	 * @param int NumItems
	 * @param EbayTradingTypeAmountType MinPrice
	 * @param EbayTradingTypeAmountType MaxPrice
	 * @param string ProductReferenceID
	 * @param DOMDocument any
	 * @param string productID
	 * @param anyURI stockPhotoURL
	 * @param string title
	 * @return EbayTradingTypeProductType
	 */
	public function __construct($_CharacteristicsSet = null,$_DetailsURL = null,$_NumItems = null,$_MinPrice = null,$_MaxPrice = null,$_ProductReferenceID = null,$_any = null,$_productID = null,$_stockPhotoURL = null,$_title = null)
	{
		parent::__construct(array('CharacteristicsSet'=>$_CharacteristicsSet,'DetailsURL'=>$_DetailsURL,'NumItems'=>$_NumItems,'MinPrice'=>$_MinPrice,'MaxPrice'=>$_MaxPrice,'ProductReferenceID'=>$_ProductReferenceID,'any'=>$_any,'productID'=>$_productID,'stockPhotoURL'=>$_stockPhotoURL,'title'=>$_title));
	}
	/**
	 * Set CharacteristicsSet
	 * @param CharacteristicsSetType CharacteristicsSet
	 * @return CharacteristicsSetType
	 */
	public function setCharacteristicsSet($_CharacteristicsSet)
	{
		return ($this->CharacteristicsSet = $_CharacteristicsSet);
	}
	/**
	 * Get CharacteristicsSet
	 * @return EbayTradingTypeCharacteristicsSetType
	 */
	public function getCharacteristicsSet()
	{
		return $this->CharacteristicsSet;
	}
	/**
	 * Set DetailsURL
	 * @param anyURI DetailsURL
	 * @return anyURI
	 */
	public function setDetailsURL($_DetailsURL)
	{
		return ($this->DetailsURL = $_DetailsURL);
	}
	/**
	 * Get DetailsURL
	 * @return anyURI
	 */
	public function getDetailsURL()
	{
		return $this->DetailsURL;
	}
	/**
	 * Set NumItems
	 * @param int NumItems
	 * @return int
	 */
	public function setNumItems($_NumItems)
	{
		return ($this->NumItems = $_NumItems);
	}
	/**
	 * Get NumItems
	 * @return int
	 */
	public function getNumItems()
	{
		return $this->NumItems;
	}
	/**
	 * Set MinPrice
	 * @param AmountType MinPrice
	 * @return AmountType
	 */
	public function setMinPrice($_MinPrice)
	{
		return ($this->MinPrice = $_MinPrice);
	}
	/**
	 * Get MinPrice
	 * @return EbayTradingTypeAmountType
	 */
	public function getMinPrice()
	{
		return $this->MinPrice;
	}
	/**
	 * Set MaxPrice
	 * @param AmountType MaxPrice
	 * @return AmountType
	 */
	public function setMaxPrice($_MaxPrice)
	{
		return ($this->MaxPrice = $_MaxPrice);
	}
	/**
	 * Get MaxPrice
	 * @return EbayTradingTypeAmountType
	 */
	public function getMaxPrice()
	{
		return $this->MaxPrice;
	}
	/**
	 * Set ProductReferenceID
	 * @param string ProductReferenceID
	 * @return string
	 */
	public function setProductReferenceID($_ProductReferenceID)
	{
		return ($this->ProductReferenceID = $_ProductReferenceID);
	}
	/**
	 * Get ProductReferenceID
	 * @return string
	 */
	public function getProductReferenceID()
	{
		return $this->ProductReferenceID;
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
	 * Set productID
	 * @param string productID
	 * @return string
	 */
	public function setProductID($_productID)
	{
		return ($this->productID = $_productID);
	}
	/**
	 * Get productID
	 * @return string
	 */
	public function getProductID()
	{
		return $this->productID;
	}
	/**
	 * Set stockPhotoURL
	 * @param anyURI stockPhotoURL
	 * @return anyURI
	 */
	public function setStockPhotoURL($_stockPhotoURL)
	{
		return ($this->stockPhotoURL = $_stockPhotoURL);
	}
	/**
	 * Get stockPhotoURL
	 * @return anyURI
	 */
	public function getStockPhotoURL()
	{
		return $this->stockPhotoURL;
	}
	/**
	 * Set title
	 * @param string title
	 * @return string
	 */
	public function setTitle($_title)
	{
		return ($this->title = $_title);
	}
	/**
	 * Get title
	 * @return string
	 */
	public function getTitle()
	{
		return $this->title;
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