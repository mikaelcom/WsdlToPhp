<?php
/**
 * Class file for EbayTradingTypeGetMyeBayBuyingResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetMyeBayBuyingResponseType
 * Documentation : Returns items from All Buying or All Favorites in the user's My eBay account.
 * @date 04/07/2012
 */
class EbayTradingTypeGetMyeBayBuyingResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The BuyingSummary
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains a summary of the items the user has bid on. Returned at all detail levels.
	 * @var EbayTradingTypeBuyingSummaryType
	 */
	public $BuyingSummary;
	/**
	 * The WatchList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the items the user is watching. Only returned if items exist that meet the request criteria.
	 * @var EbayTradingTypePaginatedItemArrayType
	 */
	public $WatchList;
	/**
	 * The BidList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains all the items the buyer has bid on. Only returned if items exist that meet the request criteria.
	 * @var EbayTradingTypePaginatedItemArrayType
	 */
	public $BidList;
	/**
	 * The BestOfferList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the items the user has placed best offers on. Only returned if items exist that meet the request criteria.
	 * @var EbayTradingTypePaginatedItemArrayType
	 */
	public $BestOfferList;
	/**
	 * The WonList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the items the user has bid on and won. Only returned if items exist that meet the request criteria.
	 * @var EbayTradingTypePaginatedOrderTransactionArrayType
	 */
	public $WonList;
	/**
	 * The LostList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the items the user has bid on and lost. Only returned if items exist that meet the request criteria.
	 * @var EbayTradingTypePaginatedItemArrayType
	 */
	public $LostList;
	/**
	 * The FavoriteSearches
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains a list of the user's favorite searches. Only returned if the user has Favorite Searches. The search name, search query, and search elements, such as QueryKeywords, SortOrder, and Condition are returned. <br><br> You can paste the Search Query response, that comes back as a URL, into a browser to re-play the Favorite Search. <br><br> The search elements that are returned by this call can be used as input for the Shopping Web Service FindItemsAdvanced request.
	 * @var EbayTradingTypeMyeBayFavoriteSearchListType
	 */
	public $FavoriteSearches;
	/**
	 * The FavoriteSellers
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains a list of the user's favorite sellers. Only returned if items exist that meet the request criteria.
	 * @var EbayTradingTypeMyeBayFavoriteSellerListType
	 */
	public $FavoriteSellers;
	/**
	 * The SecondChanceOffer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains the list of second chance offers the user has received. Only returned if items exist that meet the request criteria.
	 * @var EbayTradingTypeItemType
	 */
	public $SecondChanceOffer;
	/**
	 * The BidAssistantList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the items that were bid on using the Bid Assistant feature.
	 * @var EbayTradingTypeBidGroupArrayType
	 */
	public $BidAssistantList;
	/**
	 * The DeletedFromWonList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the items the buyer has bid on, won, and deleted from My eBay. Only returned if items exist that meet the request criteria.
	 * @var EbayTradingTypePaginatedOrderTransactionArrayType
	 */
	public $DeletedFromWonList;
	/**
	 * The DeletedFromLostList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the items the buyer has bid on, lost, and deleted from My eBay. Only returned if items exist that meet the request criteria.
	 * @var EbayTradingTypePaginatedItemArrayType
	 */
	public $DeletedFromLostList;
	/**
	 * The UserDefinedList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains the items, searches, or sellers that the user has saved to this list using the "Add to list" feature. The name of the list is given by the "Name" element. Returned only if UserDefineLists is specified in the request.
	 * @var EbayTradingTypeUserDefinedListType
	 */
	public $UserDefinedList;
	/**
	 * Constructor
	 * @param EbayTradingTypeBuyingSummaryType BuyingSummary
	 * @param EbayTradingTypePaginatedItemArrayType WatchList
	 * @param EbayTradingTypePaginatedItemArrayType BidList
	 * @param EbayTradingTypePaginatedItemArrayType BestOfferList
	 * @param EbayTradingTypePaginatedOrderTransactionArrayType WonList
	 * @param EbayTradingTypePaginatedItemArrayType LostList
	 * @param EbayTradingTypeMyeBayFavoriteSearchListType FavoriteSearches
	 * @param EbayTradingTypeMyeBayFavoriteSellerListType FavoriteSellers
	 * @param EbayTradingTypeItemType SecondChanceOffer
	 * @param EbayTradingTypeBidGroupArrayType BidAssistantList
	 * @param EbayTradingTypePaginatedOrderTransactionArrayType DeletedFromWonList
	 * @param EbayTradingTypePaginatedItemArrayType DeletedFromLostList
	 * @param EbayTradingTypeUserDefinedListType UserDefinedList
	 * @return EbayTradingTypeGetMyeBayBuyingResponseType
	 */
	public function __construct($_BuyingSummary = null,$_WatchList = null,$_BidList = null,$_BestOfferList = null,$_WonList = null,$_LostList = null,$_FavoriteSearches = null,$_FavoriteSellers = null,$_SecondChanceOffer = null,$_BidAssistantList = null,$_DeletedFromWonList = null,$_DeletedFromLostList = null,$_UserDefinedList = null)
	{
		EbayTradingWsdlClass::__construct(array('BuyingSummary'=>$_BuyingSummary,'WatchList'=>$_WatchList,'BidList'=>$_BidList,'BestOfferList'=>$_BestOfferList,'WonList'=>$_WonList,'LostList'=>$_LostList,'FavoriteSearches'=>$_FavoriteSearches,'FavoriteSellers'=>$_FavoriteSellers,'SecondChanceOffer'=>$_SecondChanceOffer,'BidAssistantList'=>$_BidAssistantList,'DeletedFromWonList'=>$_DeletedFromWonList,'DeletedFromLostList'=>$_DeletedFromLostList,'UserDefinedList'=>$_UserDefinedList));
	}
	/**
	 * Set BuyingSummary
	 * @param BuyingSummaryType BuyingSummary
	 * @return BuyingSummaryType
	 */
	public function setBuyingSummary($_BuyingSummary)
	{
		return ($this->BuyingSummary = $_BuyingSummary);
	}
	/**
	 * Get BuyingSummary
	 * @return EbayTradingTypeBuyingSummaryType
	 */
	public function getBuyingSummary()
	{
		return $this->BuyingSummary;
	}
	/**
	 * Set WatchList
	 * @param PaginatedItemArrayType WatchList
	 * @return PaginatedItemArrayType
	 */
	public function setWatchList($_WatchList)
	{
		return ($this->WatchList = $_WatchList);
	}
	/**
	 * Get WatchList
	 * @return EbayTradingTypePaginatedItemArrayType
	 */
	public function getWatchList()
	{
		return $this->WatchList;
	}
	/**
	 * Set BidList
	 * @param PaginatedItemArrayType BidList
	 * @return PaginatedItemArrayType
	 */
	public function setBidList($_BidList)
	{
		return ($this->BidList = $_BidList);
	}
	/**
	 * Get BidList
	 * @return EbayTradingTypePaginatedItemArrayType
	 */
	public function getBidList()
	{
		return $this->BidList;
	}
	/**
	 * Set BestOfferList
	 * @param PaginatedItemArrayType BestOfferList
	 * @return PaginatedItemArrayType
	 */
	public function setBestOfferList($_BestOfferList)
	{
		return ($this->BestOfferList = $_BestOfferList);
	}
	/**
	 * Get BestOfferList
	 * @return EbayTradingTypePaginatedItemArrayType
	 */
	public function getBestOfferList()
	{
		return $this->BestOfferList;
	}
	/**
	 * Set WonList
	 * @param PaginatedOrderTransactionArrayType WonList
	 * @return PaginatedOrderTransactionArrayType
	 */
	public function setWonList($_WonList)
	{
		return ($this->WonList = $_WonList);
	}
	/**
	 * Get WonList
	 * @return EbayTradingTypePaginatedOrderTransactionArrayType
	 */
	public function getWonList()
	{
		return $this->WonList;
	}
	/**
	 * Set LostList
	 * @param PaginatedItemArrayType LostList
	 * @return PaginatedItemArrayType
	 */
	public function setLostList($_LostList)
	{
		return ($this->LostList = $_LostList);
	}
	/**
	 * Get LostList
	 * @return EbayTradingTypePaginatedItemArrayType
	 */
	public function getLostList()
	{
		return $this->LostList;
	}
	/**
	 * Set FavoriteSearches
	 * @param MyeBayFavoriteSearchListType FavoriteSearches
	 * @return MyeBayFavoriteSearchListType
	 */
	public function setFavoriteSearches($_FavoriteSearches)
	{
		return ($this->FavoriteSearches = $_FavoriteSearches);
	}
	/**
	 * Get FavoriteSearches
	 * @return EbayTradingTypeMyeBayFavoriteSearchListType
	 */
	public function getFavoriteSearches()
	{
		return $this->FavoriteSearches;
	}
	/**
	 * Set FavoriteSellers
	 * @param MyeBayFavoriteSellerListType FavoriteSellers
	 * @return MyeBayFavoriteSellerListType
	 */
	public function setFavoriteSellers($_FavoriteSellers)
	{
		return ($this->FavoriteSellers = $_FavoriteSellers);
	}
	/**
	 * Get FavoriteSellers
	 * @return EbayTradingTypeMyeBayFavoriteSellerListType
	 */
	public function getFavoriteSellers()
	{
		return $this->FavoriteSellers;
	}
	/**
	 * Set SecondChanceOffer
	 * @param ItemType SecondChanceOffer
	 * @return ItemType
	 */
	public function setSecondChanceOffer($_SecondChanceOffer)
	{
		return ($this->SecondChanceOffer = $_SecondChanceOffer);
	}
	/**
	 * Get SecondChanceOffer
	 * @return EbayTradingTypeItemType
	 */
	public function getSecondChanceOffer()
	{
		return $this->SecondChanceOffer;
	}
	/**
	 * Set BidAssistantList
	 * @param BidGroupArrayType BidAssistantList
	 * @return BidGroupArrayType
	 */
	public function setBidAssistantList($_BidAssistantList)
	{
		return ($this->BidAssistantList = $_BidAssistantList);
	}
	/**
	 * Get BidAssistantList
	 * @return EbayTradingTypeBidGroupArrayType
	 */
	public function getBidAssistantList()
	{
		return $this->BidAssistantList;
	}
	/**
	 * Set DeletedFromWonList
	 * @param PaginatedOrderTransactionArrayType DeletedFromWonList
	 * @return PaginatedOrderTransactionArrayType
	 */
	public function setDeletedFromWonList($_DeletedFromWonList)
	{
		return ($this->DeletedFromWonList = $_DeletedFromWonList);
	}
	/**
	 * Get DeletedFromWonList
	 * @return EbayTradingTypePaginatedOrderTransactionArrayType
	 */
	public function getDeletedFromWonList()
	{
		return $this->DeletedFromWonList;
	}
	/**
	 * Set DeletedFromLostList
	 * @param PaginatedItemArrayType DeletedFromLostList
	 * @return PaginatedItemArrayType
	 */
	public function setDeletedFromLostList($_DeletedFromLostList)
	{
		return ($this->DeletedFromLostList = $_DeletedFromLostList);
	}
	/**
	 * Get DeletedFromLostList
	 * @return EbayTradingTypePaginatedItemArrayType
	 */
	public function getDeletedFromLostList()
	{
		return $this->DeletedFromLostList;
	}
	/**
	 * Set UserDefinedList
	 * @param UserDefinedListType UserDefinedList
	 * @return UserDefinedListType
	 */
	public function setUserDefinedList($_UserDefinedList)
	{
		return ($this->UserDefinedList = $_UserDefinedList);
	}
	/**
	 * Get UserDefinedList
	 * @return EbayTradingTypeUserDefinedListType
	 */
	public function getUserDefinedList()
	{
		return $this->UserDefinedList;
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