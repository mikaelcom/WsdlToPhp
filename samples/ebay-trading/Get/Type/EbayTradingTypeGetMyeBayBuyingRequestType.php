<?php
/**
 * Class file for EbayTradingTypeGetMyeBayBuyingRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetMyeBayBuyingRequestType
 * Documentation : Returns items from the Buying section of the user's My eBay account, including items that the user is watching, bidding on, has won, has not won, and has made best offers on.
 * @date 04/07/2012
 */
class EbayTradingTypeGetMyeBayBuyingRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The WatchList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the list of items being watched by the user. <br><br> Set Include to true to return the default response set.
	 * @var EbayTradingTypeItemListCustomizationType
	 */
	public $WatchList;
	/**
	 * The BidList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the list of items on which the user has bid. <br><br> Set Include to true to return the default response set.
	 * @var EbayTradingTypeItemListCustomizationType
	 */
	public $BidList;
	/**
	 * The BestOfferList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the list of items on which the user has placed best offers. <br><br> Set Include to true to return the default response set.
	 * @var EbayTradingTypeItemListCustomizationType
	 */
	public $BestOfferList;
	/**
	 * The WonList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the list of items on which the use has bid. <br><br> Set Include to true to return the default response set.
	 * @var EbayTradingTypeItemListCustomizationType
	 */
	public $WonList;
	/**
	 * The LostList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the list of items on which the user has bid on and lost. <br><br> Set Include to true to return the default response set.
	 * @var EbayTradingTypeItemListCustomizationType
	 */
	public $LostList;
	/**
	 * The FavoriteSearches
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the list of searches that the user has saved in My eBay. Returned only if the user has saved searches. <br><br> Set Include to true to return the default response set.
	 * @var EbayTradingTypeMyeBaySelectionType
	 */
	public $FavoriteSearches;
	/**
	 * The FavoriteSellers
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the list of favorite sellers that the user has saved in My eBay. Returned only if the user has saved a list of favorite sellers. <br><br> Set Include to true to return the default response set.
	 * @var EbayTradingTypeMyeBaySelectionType
	 */
	public $FavoriteSellers;
	/**
	 * The SecondChanceOffer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the list of second chance offers made by the user. Returned only if the user has made second chance offers. <br><br> Set Include to true to return the default response set.
	 * @var EbayTradingTypeMyeBaySelectionType
	 */
	public $SecondChanceOffer;
	/**
	 * The BidAssistantList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether or not the Bid Assistant feature is being used.
	 * @var EbayTradingTypeBidAssistantListType
	 */
	public $BidAssistantList;
	/**
	 * The DeletedFromWonList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the list of items the user has won, and subsequently deleted from their My eBay page. <br><br> Set Include to true to return the default response set.
	 * @var EbayTradingTypeItemListCustomizationType
	 */
	public $DeletedFromWonList;
	/**
	 * The DeletedFromLostList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the list of items (auctions) the user did not win and were subsequently deleted from their My eBay page. <br><br> Set Include to true to return the default response set.
	 * @var EbayTradingTypeItemListCustomizationType
	 */
	public $DeletedFromLostList;
	/**
	 * The BuyingSummary
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns a summary of the user's buying activity. <br><br> With a request version of 605 or higher, the buying summary container is not included in the response by default. Add a BuyingSummary element in the request with an Include field set to true to receive a BuyingSummary container in your response. <br><br> With a request version lower than 605, the BuyingSummary is always returned by default. Add a BuyingSummary element with an Include field set to false to exclude the BuyingSummary from your response.
	 * @var EbayTradingTypeItemListCustomizationType
	 */
	public $BuyingSummary;
	/**
	 * The UserDefinedLists
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the user defined lists, which are lists created by the user in the eBay UI and filled with items, or sellers, or searches using the "Add to List" feature. <br><br> Set Include to true to return the default response set.
	 * @var EbayTradingTypeMyeBaySelectionType
	 */
	public $UserDefinedLists;
	/**
	 * The HideVariations
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, the Variations node is omitted for all multi-variation listings in the response. If false, the Variations node is returned for all multi-variation listings in the response. <br> <br> Please note that if the seller includes a large number of variations in many listings, retrieving variations (setting this flag to false) may degrade the call's performance. Therefore, when this is false, you may need to reduce the total number of items you're requesting at once (by using other input fields, such as Pagination).
	 * @var boolean
	 */
	public $HideVariations;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemListCustomizationType WatchList
	 * @param EbayTradingTypeItemListCustomizationType BidList
	 * @param EbayTradingTypeItemListCustomizationType BestOfferList
	 * @param EbayTradingTypeItemListCustomizationType WonList
	 * @param EbayTradingTypeItemListCustomizationType LostList
	 * @param EbayTradingTypeMyeBaySelectionType FavoriteSearches
	 * @param EbayTradingTypeMyeBaySelectionType FavoriteSellers
	 * @param EbayTradingTypeMyeBaySelectionType SecondChanceOffer
	 * @param EbayTradingTypeBidAssistantListType BidAssistantList
	 * @param EbayTradingTypeItemListCustomizationType DeletedFromWonList
	 * @param EbayTradingTypeItemListCustomizationType DeletedFromLostList
	 * @param EbayTradingTypeItemListCustomizationType BuyingSummary
	 * @param EbayTradingTypeMyeBaySelectionType UserDefinedLists
	 * @param boolean HideVariations
	 * @return EbayTradingTypeGetMyeBayBuyingRequestType
	 */
	public function __construct($_WatchList = null,$_BidList = null,$_BestOfferList = null,$_WonList = null,$_LostList = null,$_FavoriteSearches = null,$_FavoriteSellers = null,$_SecondChanceOffer = null,$_BidAssistantList = null,$_DeletedFromWonList = null,$_DeletedFromLostList = null,$_BuyingSummary = null,$_UserDefinedLists = null,$_HideVariations = null)
	{
		EbayTradingWsdlClass::__construct(array('WatchList'=>$_WatchList,'BidList'=>$_BidList,'BestOfferList'=>$_BestOfferList,'WonList'=>$_WonList,'LostList'=>$_LostList,'FavoriteSearches'=>$_FavoriteSearches,'FavoriteSellers'=>$_FavoriteSellers,'SecondChanceOffer'=>$_SecondChanceOffer,'BidAssistantList'=>$_BidAssistantList,'DeletedFromWonList'=>$_DeletedFromWonList,'DeletedFromLostList'=>$_DeletedFromLostList,'BuyingSummary'=>$_BuyingSummary,'UserDefinedLists'=>$_UserDefinedLists,'HideVariations'=>$_HideVariations));
	}
	/**
	 * Set WatchList
	 * @param ItemListCustomizationType WatchList
	 * @return ItemListCustomizationType
	 */
	public function setWatchList($_WatchList)
	{
		return ($this->WatchList = $_WatchList);
	}
	/**
	 * Get WatchList
	 * @return EbayTradingTypeItemListCustomizationType
	 */
	public function getWatchList()
	{
		return $this->WatchList;
	}
	/**
	 * Set BidList
	 * @param ItemListCustomizationType BidList
	 * @return ItemListCustomizationType
	 */
	public function setBidList($_BidList)
	{
		return ($this->BidList = $_BidList);
	}
	/**
	 * Get BidList
	 * @return EbayTradingTypeItemListCustomizationType
	 */
	public function getBidList()
	{
		return $this->BidList;
	}
	/**
	 * Set BestOfferList
	 * @param ItemListCustomizationType BestOfferList
	 * @return ItemListCustomizationType
	 */
	public function setBestOfferList($_BestOfferList)
	{
		return ($this->BestOfferList = $_BestOfferList);
	}
	/**
	 * Get BestOfferList
	 * @return EbayTradingTypeItemListCustomizationType
	 */
	public function getBestOfferList()
	{
		return $this->BestOfferList;
	}
	/**
	 * Set WonList
	 * @param ItemListCustomizationType WonList
	 * @return ItemListCustomizationType
	 */
	public function setWonList($_WonList)
	{
		return ($this->WonList = $_WonList);
	}
	/**
	 * Get WonList
	 * @return EbayTradingTypeItemListCustomizationType
	 */
	public function getWonList()
	{
		return $this->WonList;
	}
	/**
	 * Set LostList
	 * @param ItemListCustomizationType LostList
	 * @return ItemListCustomizationType
	 */
	public function setLostList($_LostList)
	{
		return ($this->LostList = $_LostList);
	}
	/**
	 * Get LostList
	 * @return EbayTradingTypeItemListCustomizationType
	 */
	public function getLostList()
	{
		return $this->LostList;
	}
	/**
	 * Set FavoriteSearches
	 * @param MyeBaySelectionType FavoriteSearches
	 * @return MyeBaySelectionType
	 */
	public function setFavoriteSearches($_FavoriteSearches)
	{
		return ($this->FavoriteSearches = $_FavoriteSearches);
	}
	/**
	 * Get FavoriteSearches
	 * @return EbayTradingTypeMyeBaySelectionType
	 */
	public function getFavoriteSearches()
	{
		return $this->FavoriteSearches;
	}
	/**
	 * Set FavoriteSellers
	 * @param MyeBaySelectionType FavoriteSellers
	 * @return MyeBaySelectionType
	 */
	public function setFavoriteSellers($_FavoriteSellers)
	{
		return ($this->FavoriteSellers = $_FavoriteSellers);
	}
	/**
	 * Get FavoriteSellers
	 * @return EbayTradingTypeMyeBaySelectionType
	 */
	public function getFavoriteSellers()
	{
		return $this->FavoriteSellers;
	}
	/**
	 * Set SecondChanceOffer
	 * @param MyeBaySelectionType SecondChanceOffer
	 * @return MyeBaySelectionType
	 */
	public function setSecondChanceOffer($_SecondChanceOffer)
	{
		return ($this->SecondChanceOffer = $_SecondChanceOffer);
	}
	/**
	 * Get SecondChanceOffer
	 * @return EbayTradingTypeMyeBaySelectionType
	 */
	public function getSecondChanceOffer()
	{
		return $this->SecondChanceOffer;
	}
	/**
	 * Set BidAssistantList
	 * @param BidAssistantListType BidAssistantList
	 * @return BidAssistantListType
	 */
	public function setBidAssistantList($_BidAssistantList)
	{
		return ($this->BidAssistantList = $_BidAssistantList);
	}
	/**
	 * Get BidAssistantList
	 * @return EbayTradingTypeBidAssistantListType
	 */
	public function getBidAssistantList()
	{
		return $this->BidAssistantList;
	}
	/**
	 * Set DeletedFromWonList
	 * @param ItemListCustomizationType DeletedFromWonList
	 * @return ItemListCustomizationType
	 */
	public function setDeletedFromWonList($_DeletedFromWonList)
	{
		return ($this->DeletedFromWonList = $_DeletedFromWonList);
	}
	/**
	 * Get DeletedFromWonList
	 * @return EbayTradingTypeItemListCustomizationType
	 */
	public function getDeletedFromWonList()
	{
		return $this->DeletedFromWonList;
	}
	/**
	 * Set DeletedFromLostList
	 * @param ItemListCustomizationType DeletedFromLostList
	 * @return ItemListCustomizationType
	 */
	public function setDeletedFromLostList($_DeletedFromLostList)
	{
		return ($this->DeletedFromLostList = $_DeletedFromLostList);
	}
	/**
	 * Get DeletedFromLostList
	 * @return EbayTradingTypeItemListCustomizationType
	 */
	public function getDeletedFromLostList()
	{
		return $this->DeletedFromLostList;
	}
	/**
	 * Set BuyingSummary
	 * @param ItemListCustomizationType BuyingSummary
	 * @return ItemListCustomizationType
	 */
	public function setBuyingSummary($_BuyingSummary)
	{
		return ($this->BuyingSummary = $_BuyingSummary);
	}
	/**
	 * Get BuyingSummary
	 * @return EbayTradingTypeItemListCustomizationType
	 */
	public function getBuyingSummary()
	{
		return $this->BuyingSummary;
	}
	/**
	 * Set UserDefinedLists
	 * @param MyeBaySelectionType UserDefinedLists
	 * @return MyeBaySelectionType
	 */
	public function setUserDefinedLists($_UserDefinedLists)
	{
		return ($this->UserDefinedLists = $_UserDefinedLists);
	}
	/**
	 * Get UserDefinedLists
	 * @return EbayTradingTypeMyeBaySelectionType
	 */
	public function getUserDefinedLists()
	{
		return $this->UserDefinedLists;
	}
	/**
	 * Set HideVariations
	 * @param boolean HideVariations
	 * @return boolean
	 */
	public function setHideVariations($_HideVariations)
	{
		return ($this->HideVariations = $_HideVariations);
	}
	/**
	 * Get HideVariations
	 * @return boolean
	 */
	public function getHideVariations()
	{
		return $this->HideVariations;
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