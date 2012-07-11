<?php
/**
 * Class file for EbayTradingTypeSellerFavoriteItemPreferencesType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellerFavoriteItemPreferencesType
 * Documentation : Contains the data for the seller favorite item preferences, i.e. the manual or automatic selection criteria to display items for buyer's favourite seller opt in email marketing.
 * @date 04/07/2012
 */
class EbayTradingTypeSellerFavoriteItemPreferencesType extends EbayTradingWsdlClass
{
	/**
	 * The SearchKeywords
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The keywords in the item title for the automatic item search criteria.
	 * @var string
	 */
	public $SearchKeywords;
	/**
	 * The StoreCategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : (For eBay Store owners only) The store custom category for the automatic item search criteria.
	 * @var long
	 */
	public $StoreCategoryID;
	/**
	 * The ListingType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The listing format (fixed price, auction, etc) for the automatic item search criteria.
	 * @var EbayTradingTypeListingTypeCodeType
	 */
	public $ListingType;
	/**
	 * The SearchSortOrder
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The sort order chosen from the standard ebay sorts for the automatic search criteria.
	 * @var EbayTradingTypeStoreItemListSortOrderCodeType
	 */
	public $SearchSortOrder;
	/**
	 * The MinPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the lower limit of price range for the automatic search criteria.
	 * @var EbayTradingTypeAmountType
	 */
	public $MinPrice;
	/**
	 * The MaxPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the upper limit of price range for the automatic search criteria.
	 * @var EbayTradingTypeAmountType
	 */
	public $MaxPrice;
	/**
	 * The FavoriteItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Specifies the list of favorite items.
	 * @var EbayTradingTypeItemIDType
	 */
	public $FavoriteItemID;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string SearchKeywords
	 * @param long StoreCategoryID
	 * @param EbayTradingTypeListingTypeCodeType ListingType
	 * @param EbayTradingTypeStoreItemListSortOrderCodeType SearchSortOrder
	 * @param EbayTradingTypeAmountType MinPrice
	 * @param EbayTradingTypeAmountType MaxPrice
	 * @param EbayTradingTypeItemIDType FavoriteItemID
	 * @param DOMDocument any
	 * @return EbayTradingTypeSellerFavoriteItemPreferencesType
	 */
	public function __construct($_SearchKeywords = null,$_StoreCategoryID = null,$_ListingType = null,$_SearchSortOrder = null,$_MinPrice = null,$_MaxPrice = null,$_FavoriteItemID = null,$_any = null)
	{
		parent::__construct(array('SearchKeywords'=>$_SearchKeywords,'StoreCategoryID'=>$_StoreCategoryID,'ListingType'=>$_ListingType,'SearchSortOrder'=>$_SearchSortOrder,'MinPrice'=>$_MinPrice,'MaxPrice'=>$_MaxPrice,'FavoriteItemID'=>$_FavoriteItemID,'any'=>$_any));
	}
	/**
	 * Set SearchKeywords
	 * @param string SearchKeywords
	 * @return string
	 */
	public function setSearchKeywords($_SearchKeywords)
	{
		return ($this->SearchKeywords = $_SearchKeywords);
	}
	/**
	 * Get SearchKeywords
	 * @return string
	 */
	public function getSearchKeywords()
	{
		return $this->SearchKeywords;
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
	 * Set ListingType
	 * @param ListingTypeCodeType ListingType
	 * @return ListingTypeCodeType
	 */
	public function setListingType($_ListingType)
	{
		return ($this->ListingType = EbayTradingTypeListingTypeCodeType::valueIsValid($_ListingType)?$_ListingType:null);
	}
	/**
	 * Get ListingType
	 * @return EbayTradingTypeListingTypeCodeType
	 */
	public function getListingType()
	{
		return $this->ListingType;
	}
	/**
	 * Set SearchSortOrder
	 * @param StoreItemListSortOrderCodeType SearchSortOrder
	 * @return StoreItemListSortOrderCodeType
	 */
	public function setSearchSortOrder($_SearchSortOrder)
	{
		return ($this->SearchSortOrder = EbayTradingTypeStoreItemListSortOrderCodeType::valueIsValid($_SearchSortOrder)?$_SearchSortOrder:null);
	}
	/**
	 * Get SearchSortOrder
	 * @return EbayTradingTypeStoreItemListSortOrderCodeType
	 */
	public function getSearchSortOrder()
	{
		return $this->SearchSortOrder;
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
	 * Set FavoriteItemID
	 * @param ItemIDType FavoriteItemID
	 * @return ItemIDType
	 */
	public function setFavoriteItemID($_FavoriteItemID)
	{
		return ($this->FavoriteItemID = EbayTradingTypeItemIDType::valueIsValid($_FavoriteItemID)?$_FavoriteItemID:null);
	}
	/**
	 * Get FavoriteItemID
	 * @return EbayTradingTypeItemIDType
	 */
	public function getFavoriteItemID()
	{
		return $this->FavoriteItemID;
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