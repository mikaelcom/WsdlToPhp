<?php
/**
 * Class file for EbayTradingTypeMyeBayFavoriteSearchType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMyeBayFavoriteSearchType
 * Documentation : Characteristics of a saved My eBay Favorite Search.
 * @date 04/07/2012
 */
class EbayTradingTypeMyeBayFavoriteSearchType extends EbayTradingWsdlClass
{
	/**
	 * The SearchName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of a My eBay Favorite Search.
	 * @var string
	 */
	public $SearchName;
	/**
	 * The SearchQuery
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The query string of a My eBay Favorite Search. You can paste this value, that is returned as a URL, into a browser to re-play the Favorite Search using the Trading Web Service.
	 * @var string
	 */
	public $SearchQuery;
	/**
	 * The QueryKeywords
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The QueryKeywords of a My eBay Favorite Search. A search that uses QueryKeywords is a query that specifies a string for searching titles of items on eBay.<br><br> If you are using a URL, then to search for multiple words, use "%20". For example, use Harry%20Potter to search for items containing those words in any order. <br><br> You can incorporate wildcards into a multi-word search, as in the following: ap*%20ip*.<br><br> The words "and" and "or" are treated like any other word. Only use "and", "or", or "the" if you are searching for listings containing these words.
	 * @var string
	 */
	public $QueryKeywords;
	/**
	 * The CategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The CategoryID of a My eBay Favorite Search. CategoryID is used to restrict the query to a specific category. CategoryID cannot be used with the following input fields: EndTimeFrom, EndTimeTo, PriceMin, or PriceMax.
	 * @var string
	 */
	public $CategoryID;
	/**
	 * The ItemSort
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ItemSort of a My eBay Favorite Search. Values for ItemSort include Best Match, EndTime, Distance, and other options listed in SimpleItemSortCodeType.
	 * @var EbayTradingTypeSimpleItemSortCodeType
	 */
	public $ItemSort;
	/**
	 * The SortOrder
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The SortOrder of a My eBay Favorite Search. This value specifies whether you want to sort search results in ascending or descending order, in conjunction with the value you specify in ItemSort.
	 * @var EbayTradingTypeSortOrderCodeType
	 */
	public $SortOrder;
	/**
	 * The EndTimeFrom
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The EndTimeFrom of a My eBay Favorite Search. EndTimeFrom and EndTimeTo limit the results to items ending within a time range. EndTimeFrom specifies the beginning of the time range.
	 * @var dateTime
	 */
	public $EndTimeFrom;
	/**
	 * The EndTimeTo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The EndTimeTo of a My eBay Favorite Search. EndTimeFrom and EndTimeTo limit the results to items ending within a time range. EndTimeTo specifies the end of the time range.
	 * @var dateTime
	 */
	public $EndTimeTo;
	/**
	 * The MaxDistance
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The MaxDistance of a My eBay Favorite Search. This is the maximum distance from the item-location value specified in PostalCode.
	 * @var int
	 */
	public $MaxDistance;
	/**
	 * The PostalCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The PostalCode of a My eBay Favorite Search. This value indicates the postal code where an item is located.
	 * @var string
	 */
	public $PostalCode;
	/**
	 * The ItemType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ItemType of a My eBay Favorite Search. Setting ItemType in a search limits the results to items of a specific type, such as Fixed Price items, Store Inventory items, items with AdFormat, etc.
	 * @var EbayTradingTypeItemTypeCodeType
	 */
	public $ItemType;
	/**
	 * The PriceMax
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The PriceMax of a My eBay Favorite Search. PriceMax specifies the maximum current price an item can have to be included in the search results. PriceMax can be used with PriceMin to specify a range of prices.
	 * @var EbayTradingTypeAmountType
	 */
	public $PriceMax;
	/**
	 * The PriceMin
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The PriceMin of a My eBay Favorite Search. PriceMin specifies the minimum current price an item listing can have to be included in the search results. PriceMin can be used with PriceMax to specify a range of prices.
	 * @var EbayTradingTypeAmountType
	 */
	public $PriceMin;
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The Currency of a My eBay Favorite Search. The currency value limits the result set to just those items with a specified currency.
	 * @var EbayTradingTypeCurrencyCodeType
	 */
	public $Currency;
	/**
	 * The BidCountMax
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The BidCountMax value in a My eBay Favorite Search. The BidCountMax limits the search results to items with a maximum number of bids.
	 * @var int
	 */
	public $BidCountMax;
	/**
	 * The BidCountMin
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The BidCountMin value in a My eBay Favorite Search. The BidCountMin limits the results of a search to items with a maximum number of bids.
	 * @var int
	 */
	public $BidCountMin;
	/**
	 * The SearchFlag
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The SearchFlag value in a My eBay Favorite Search. The SearchFlag allows you to specify whether you want to include charity listings, free-shipping listings, and listings with other features in your search.
	 * @var EbayTradingTypeSearchFlagCodeType
	 */
	public $SearchFlag;
	/**
	 * The PaymentMethod
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The PaymentMethod value in a My eBay Favorite Search. The PaymentMethod limits the search results to items that accept a specific payment method or methods.
	 * @var EbayTradingTypePaymentMethodSearchCodeType
	 */
	public $PaymentMethod;
	/**
	 * The PreferredLocation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The PreferredLocation value of a My eBay Favorite Search. The PreferredLocation specifies the criteria for filtering search results by site, where site is determined by the site ID in the request.
	 * @var EbayTradingTypePreferredLocationCodeType
	 */
	public $PreferredLocation;
	/**
	 * The SellerID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The SellerID value in a My eBay Favorite Search. The SellerID is the eBay ID of a specific seller.
	 * @var string
	 */
	public $SellerID;
	/**
	 * The SellerIDExclude
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The SellerIDExclude value in a My eBay Favorite Search. The SellerIDExclude limits the search results to exclude items sold by a specific seller or by specific sellers.
	 * @var string
	 */
	public $SellerIDExclude;
	/**
	 * The ItemsAvailableTo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ItemsAvailableTo value in a My eBay Favorite Search. ItemsAvailableTo limits the result set to just those items available to the specified country.
	 * @var EbayTradingTypeCountryCodeType
	 */
	public $ItemsAvailableTo;
	/**
	 * The ItemsLocatedIn
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ItemsLocatedIn value in a My eBay Favorite Search. ItemsLocatedIn limits the result set to just those items located in the specified country.
	 * @var EbayTradingTypeCountryCodeType
	 */
	public $ItemsLocatedIn;
	/**
	 * The SellerBusinessType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The SellerBusinessType value in a My eBay Favorite Search. The SellerBusinessType limits the search results to those of a particular seller business type such as commercial or private. SellerBusinessType is only available for sites that have business seller features enabled.
	 * @var EbayTradingTypeSellerBusinessCodeType
	 */
	public $SellerBusinessType;
	/**
	 * The Condition
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The Condition value in a My eBay Favorite Search. Condition limits the results to new or used items, plus items that have no condition specified.
	 * @var EbayTradingTypeItemConditionCodeType
	 */
	public $Condition;
	/**
	 * The Quantity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The Quantity value in a My eBay Favorite Search. The Quantity limits the search results to listings that offer a certain number of items matching the query. The Quantity field is used with QuantityOperator to specify that you are seeking listings with quantities greater than, equal to, or less than the value you specify in Quantity.
	 * @var int
	 */
	public $Quantity;
	/**
	 * The QuantityOperator
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The Quantity Operator value in a My eBay Favorite Search. The Quantity Operator limits the results to listings with quantities greater than, equal to, or less than the value you specify in Quantity.
	 * @var EbayTradingTypeQuantityOperatorCodeType
	 */
	public $QuantityOperator;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string SearchName
	 * @param string SearchQuery
	 * @param string QueryKeywords
	 * @param string CategoryID
	 * @param EbayTradingTypeSimpleItemSortCodeType ItemSort
	 * @param EbayTradingTypeSortOrderCodeType SortOrder
	 * @param dateTime EndTimeFrom
	 * @param dateTime EndTimeTo
	 * @param int MaxDistance
	 * @param string PostalCode
	 * @param EbayTradingTypeItemTypeCodeType ItemType
	 * @param EbayTradingTypeAmountType PriceMax
	 * @param EbayTradingTypeAmountType PriceMin
	 * @param EbayTradingTypeCurrencyCodeType Currency
	 * @param int BidCountMax
	 * @param int BidCountMin
	 * @param EbayTradingTypeSearchFlagCodeType SearchFlag
	 * @param EbayTradingTypePaymentMethodSearchCodeType PaymentMethod
	 * @param EbayTradingTypePreferredLocationCodeType PreferredLocation
	 * @param string SellerID
	 * @param string SellerIDExclude
	 * @param EbayTradingTypeCountryCodeType ItemsAvailableTo
	 * @param EbayTradingTypeCountryCodeType ItemsLocatedIn
	 * @param EbayTradingTypeSellerBusinessCodeType SellerBusinessType
	 * @param EbayTradingTypeItemConditionCodeType Condition
	 * @param int Quantity
	 * @param EbayTradingTypeQuantityOperatorCodeType QuantityOperator
	 * @param DOMDocument any
	 * @return EbayTradingTypeMyeBayFavoriteSearchType
	 */
	public function __construct($_SearchName = null,$_SearchQuery = null,$_QueryKeywords = null,$_CategoryID = null,$_ItemSort = null,$_SortOrder = null,$_EndTimeFrom = null,$_EndTimeTo = null,$_MaxDistance = null,$_PostalCode = null,$_ItemType = null,$_PriceMax = null,$_PriceMin = null,$_Currency = null,$_BidCountMax = null,$_BidCountMin = null,$_SearchFlag = null,$_PaymentMethod = null,$_PreferredLocation = null,$_SellerID = null,$_SellerIDExclude = null,$_ItemsAvailableTo = null,$_ItemsLocatedIn = null,$_SellerBusinessType = null,$_Condition = null,$_Quantity = null,$_QuantityOperator = null,$_any = null)
	{
		parent::__construct(array('SearchName'=>$_SearchName,'SearchQuery'=>$_SearchQuery,'QueryKeywords'=>$_QueryKeywords,'CategoryID'=>$_CategoryID,'ItemSort'=>$_ItemSort,'SortOrder'=>$_SortOrder,'EndTimeFrom'=>$_EndTimeFrom,'EndTimeTo'=>$_EndTimeTo,'MaxDistance'=>$_MaxDistance,'PostalCode'=>$_PostalCode,'ItemType'=>$_ItemType,'PriceMax'=>$_PriceMax,'PriceMin'=>$_PriceMin,'Currency'=>$_Currency,'BidCountMax'=>$_BidCountMax,'BidCountMin'=>$_BidCountMin,'SearchFlag'=>$_SearchFlag,'PaymentMethod'=>$_PaymentMethod,'PreferredLocation'=>$_PreferredLocation,'SellerID'=>$_SellerID,'SellerIDExclude'=>$_SellerIDExclude,'ItemsAvailableTo'=>$_ItemsAvailableTo,'ItemsLocatedIn'=>$_ItemsLocatedIn,'SellerBusinessType'=>$_SellerBusinessType,'Condition'=>$_Condition,'Quantity'=>$_Quantity,'QuantityOperator'=>$_QuantityOperator,'any'=>$_any));
	}
	/**
	 * Set SearchName
	 * @param string SearchName
	 * @return string
	 */
	public function setSearchName($_SearchName)
	{
		return ($this->SearchName = $_SearchName);
	}
	/**
	 * Get SearchName
	 * @return string
	 */
	public function getSearchName()
	{
		return $this->SearchName;
	}
	/**
	 * Set SearchQuery
	 * @param string SearchQuery
	 * @return string
	 */
	public function setSearchQuery($_SearchQuery)
	{
		return ($this->SearchQuery = $_SearchQuery);
	}
	/**
	 * Get SearchQuery
	 * @return string
	 */
	public function getSearchQuery()
	{
		return $this->SearchQuery;
	}
	/**
	 * Set QueryKeywords
	 * @param string QueryKeywords
	 * @return string
	 */
	public function setQueryKeywords($_QueryKeywords)
	{
		return ($this->QueryKeywords = $_QueryKeywords);
	}
	/**
	 * Get QueryKeywords
	 * @return string
	 */
	public function getQueryKeywords()
	{
		return $this->QueryKeywords;
	}
	/**
	 * Set CategoryID
	 * @param string CategoryID
	 * @return string
	 */
	public function setCategoryID($_CategoryID)
	{
		return ($this->CategoryID = $_CategoryID);
	}
	/**
	 * Get CategoryID
	 * @return string
	 */
	public function getCategoryID()
	{
		return $this->CategoryID;
	}
	/**
	 * Set ItemSort
	 * @param SimpleItemSortCodeType ItemSort
	 * @return SimpleItemSortCodeType
	 */
	public function setItemSort($_ItemSort)
	{
		return ($this->ItemSort = EbayTradingTypeSimpleItemSortCodeType::valueIsValid($_ItemSort)?$_ItemSort:null);
	}
	/**
	 * Get ItemSort
	 * @return EbayTradingTypeSimpleItemSortCodeType
	 */
	public function getItemSort()
	{
		return $this->ItemSort;
	}
	/**
	 * Set SortOrder
	 * @param SortOrderCodeType SortOrder
	 * @return SortOrderCodeType
	 */
	public function setSortOrder($_SortOrder)
	{
		return ($this->SortOrder = EbayTradingTypeSortOrderCodeType::valueIsValid($_SortOrder)?$_SortOrder:null);
	}
	/**
	 * Get SortOrder
	 * @return EbayTradingTypeSortOrderCodeType
	 */
	public function getSortOrder()
	{
		return $this->SortOrder;
	}
	/**
	 * Set EndTimeFrom
	 * @param dateTime EndTimeFrom
	 * @return dateTime
	 */
	public function setEndTimeFrom($_EndTimeFrom)
	{
		return ($this->EndTimeFrom = $_EndTimeFrom);
	}
	/**
	 * Get EndTimeFrom
	 * @return dateTime
	 */
	public function getEndTimeFrom()
	{
		return $this->EndTimeFrom;
	}
	/**
	 * Set EndTimeTo
	 * @param dateTime EndTimeTo
	 * @return dateTime
	 */
	public function setEndTimeTo($_EndTimeTo)
	{
		return ($this->EndTimeTo = $_EndTimeTo);
	}
	/**
	 * Get EndTimeTo
	 * @return dateTime
	 */
	public function getEndTimeTo()
	{
		return $this->EndTimeTo;
	}
	/**
	 * Set MaxDistance
	 * @param int MaxDistance
	 * @return int
	 */
	public function setMaxDistance($_MaxDistance)
	{
		return ($this->MaxDistance = $_MaxDistance);
	}
	/**
	 * Get MaxDistance
	 * @return int
	 */
	public function getMaxDistance()
	{
		return $this->MaxDistance;
	}
	/**
	 * Set PostalCode
	 * @param string PostalCode
	 * @return string
	 */
	public function setPostalCode($_PostalCode)
	{
		return ($this->PostalCode = $_PostalCode);
	}
	/**
	 * Get PostalCode
	 * @return string
	 */
	public function getPostalCode()
	{
		return $this->PostalCode;
	}
	/**
	 * Set ItemType
	 * @param ItemTypeCodeType ItemType
	 * @return ItemTypeCodeType
	 */
	public function setItemType($_ItemType)
	{
		return ($this->ItemType = EbayTradingTypeItemTypeCodeType::valueIsValid($_ItemType)?$_ItemType:null);
	}
	/**
	 * Get ItemType
	 * @return EbayTradingTypeItemTypeCodeType
	 */
	public function getItemType()
	{
		return $this->ItemType;
	}
	/**
	 * Set PriceMax
	 * @param AmountType PriceMax
	 * @return AmountType
	 */
	public function setPriceMax($_PriceMax)
	{
		return ($this->PriceMax = $_PriceMax);
	}
	/**
	 * Get PriceMax
	 * @return EbayTradingTypeAmountType
	 */
	public function getPriceMax()
	{
		return $this->PriceMax;
	}
	/**
	 * Set PriceMin
	 * @param AmountType PriceMin
	 * @return AmountType
	 */
	public function setPriceMin($_PriceMin)
	{
		return ($this->PriceMin = $_PriceMin);
	}
	/**
	 * Get PriceMin
	 * @return EbayTradingTypeAmountType
	 */
	public function getPriceMin()
	{
		return $this->PriceMin;
	}
	/**
	 * Set Currency
	 * @param CurrencyCodeType Currency
	 * @return CurrencyCodeType
	 */
	public function setCurrency($_Currency)
	{
		return ($this->Currency = EbayTradingTypeCurrencyCodeType::valueIsValid($_Currency)?$_Currency:null);
	}
	/**
	 * Get Currency
	 * @return EbayTradingTypeCurrencyCodeType
	 */
	public function getCurrency()
	{
		return $this->Currency;
	}
	/**
	 * Set BidCountMax
	 * @param int BidCountMax
	 * @return int
	 */
	public function setBidCountMax($_BidCountMax)
	{
		return ($this->BidCountMax = $_BidCountMax);
	}
	/**
	 * Get BidCountMax
	 * @return int
	 */
	public function getBidCountMax()
	{
		return $this->BidCountMax;
	}
	/**
	 * Set BidCountMin
	 * @param int BidCountMin
	 * @return int
	 */
	public function setBidCountMin($_BidCountMin)
	{
		return ($this->BidCountMin = $_BidCountMin);
	}
	/**
	 * Get BidCountMin
	 * @return int
	 */
	public function getBidCountMin()
	{
		return $this->BidCountMin;
	}
	/**
	 * Set SearchFlag
	 * @param SearchFlagCodeType SearchFlag
	 * @return SearchFlagCodeType
	 */
	public function setSearchFlag($_SearchFlag)
	{
		return ($this->SearchFlag = EbayTradingTypeSearchFlagCodeType::valueIsValid($_SearchFlag)?$_SearchFlag:null);
	}
	/**
	 * Get SearchFlag
	 * @return EbayTradingTypeSearchFlagCodeType
	 */
	public function getSearchFlag()
	{
		return $this->SearchFlag;
	}
	/**
	 * Set PaymentMethod
	 * @param PaymentMethodSearchCodeType PaymentMethod
	 * @return PaymentMethodSearchCodeType
	 */
	public function setPaymentMethod($_PaymentMethod)
	{
		return ($this->PaymentMethod = EbayTradingTypePaymentMethodSearchCodeType::valueIsValid($_PaymentMethod)?$_PaymentMethod:null);
	}
	/**
	 * Get PaymentMethod
	 * @return EbayTradingTypePaymentMethodSearchCodeType
	 */
	public function getPaymentMethod()
	{
		return $this->PaymentMethod;
	}
	/**
	 * Set PreferredLocation
	 * @param PreferredLocationCodeType PreferredLocation
	 * @return PreferredLocationCodeType
	 */
	public function setPreferredLocation($_PreferredLocation)
	{
		return ($this->PreferredLocation = EbayTradingTypePreferredLocationCodeType::valueIsValid($_PreferredLocation)?$_PreferredLocation:null);
	}
	/**
	 * Get PreferredLocation
	 * @return EbayTradingTypePreferredLocationCodeType
	 */
	public function getPreferredLocation()
	{
		return $this->PreferredLocation;
	}
	/**
	 * Set SellerID
	 * @param string SellerID
	 * @return string
	 */
	public function setSellerID($_SellerID)
	{
		return ($this->SellerID = $_SellerID);
	}
	/**
	 * Get SellerID
	 * @return string
	 */
	public function getSellerID()
	{
		return $this->SellerID;
	}
	/**
	 * Set SellerIDExclude
	 * @param string SellerIDExclude
	 * @return string
	 */
	public function setSellerIDExclude($_SellerIDExclude)
	{
		return ($this->SellerIDExclude = $_SellerIDExclude);
	}
	/**
	 * Get SellerIDExclude
	 * @return string
	 */
	public function getSellerIDExclude()
	{
		return $this->SellerIDExclude;
	}
	/**
	 * Set ItemsAvailableTo
	 * @param CountryCodeType ItemsAvailableTo
	 * @return CountryCodeType
	 */
	public function setItemsAvailableTo($_ItemsAvailableTo)
	{
		return ($this->ItemsAvailableTo = EbayTradingTypeCountryCodeType::valueIsValid($_ItemsAvailableTo)?$_ItemsAvailableTo:null);
	}
	/**
	 * Get ItemsAvailableTo
	 * @return EbayTradingTypeCountryCodeType
	 */
	public function getItemsAvailableTo()
	{
		return $this->ItemsAvailableTo;
	}
	/**
	 * Set ItemsLocatedIn
	 * @param CountryCodeType ItemsLocatedIn
	 * @return CountryCodeType
	 */
	public function setItemsLocatedIn($_ItemsLocatedIn)
	{
		return ($this->ItemsLocatedIn = EbayTradingTypeCountryCodeType::valueIsValid($_ItemsLocatedIn)?$_ItemsLocatedIn:null);
	}
	/**
	 * Get ItemsLocatedIn
	 * @return EbayTradingTypeCountryCodeType
	 */
	public function getItemsLocatedIn()
	{
		return $this->ItemsLocatedIn;
	}
	/**
	 * Set SellerBusinessType
	 * @param SellerBusinessCodeType SellerBusinessType
	 * @return SellerBusinessCodeType
	 */
	public function setSellerBusinessType($_SellerBusinessType)
	{
		return ($this->SellerBusinessType = EbayTradingTypeSellerBusinessCodeType::valueIsValid($_SellerBusinessType)?$_SellerBusinessType:null);
	}
	/**
	 * Get SellerBusinessType
	 * @return EbayTradingTypeSellerBusinessCodeType
	 */
	public function getSellerBusinessType()
	{
		return $this->SellerBusinessType;
	}
	/**
	 * Set Condition
	 * @param ItemConditionCodeType Condition
	 * @return ItemConditionCodeType
	 */
	public function setCondition($_Condition)
	{
		return ($this->Condition = EbayTradingTypeItemConditionCodeType::valueIsValid($_Condition)?$_Condition:null);
	}
	/**
	 * Get Condition
	 * @return EbayTradingTypeItemConditionCodeType
	 */
	public function getCondition()
	{
		return $this->Condition;
	}
	/**
	 * Set Quantity
	 * @param int Quantity
	 * @return int
	 */
	public function setQuantity($_Quantity)
	{
		return ($this->Quantity = $_Quantity);
	}
	/**
	 * Get Quantity
	 * @return int
	 */
	public function getQuantity()
	{
		return $this->Quantity;
	}
	/**
	 * Set QuantityOperator
	 * @param QuantityOperatorCodeType QuantityOperator
	 * @return QuantityOperatorCodeType
	 */
	public function setQuantityOperator($_QuantityOperator)
	{
		return ($this->QuantityOperator = EbayTradingTypeQuantityOperatorCodeType::valueIsValid($_QuantityOperator)?$_QuantityOperator:null);
	}
	/**
	 * Get QuantityOperator
	 * @return EbayTradingTypeQuantityOperatorCodeType
	 */
	public function getQuantityOperator()
	{
		return $this->QuantityOperator;
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