<?php
/**
 * Class file for EbayTradingTypeGetMyeBaySellingRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetMyeBaySellingRequestType
 * Documentation : Returns items from the Selling section of the user's My eBay account, including items that the user is currently selling (the Active list), items that have bids, sold items, and unsold items.
 * @date 04/07/2012
 */
class EbayTradingTypeGetMyeBaySellingRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ScheduledList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the list of items the user has scheduled to sell but whose listings have not yet opened. <br><br> Set Include to true to return the default response set.
	 * @var EbayTradingTypeItemListCustomizationType
	 */
	public $ScheduledList;
	/**
	 * The ActiveList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the list of items the user is actively selling (the currently active listings). <br><br> Set Include to true to return the default response set.
	 * @var EbayTradingTypeItemListCustomizationType
	 */
	public $ActiveList;
	/**
	 * The SoldList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the list of items the user has sold. <br><br> Set Include to true to return the default response set.
	 * @var EbayTradingTypeItemListCustomizationType
	 */
	public $SoldList;
	/**
	 * The UnsoldList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the list of items the user has listed, but whose listings have ended without being sold. <br><br> Set Include to true to return the default response set.
	 * @var EbayTradingTypeItemListCustomizationType
	 */
	public $UnsoldList;
	/**
	 * The BidList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Return the list of active items on which there are bids. <br><br> Set Include to true to return the default response set.
	 * @var EbayTradingTypeItemListCustomizationType
	 */
	public $BidList;
	/**
	 * The DeletedFromSoldList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Return the list of active items on which there are bids. <br><br> Set Include to true to return the default response set.
	 * @var EbayTradingTypeItemListCustomizationType
	 */
	public $DeletedFromSoldList;
	/**
	 * The DeletedFromUnsoldList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the list of items the user either ended or did not sell, and subsequently were deleted them from their My eBay page. Allowed values for DurationInDays are 0-90. <br><br> Set Include to true to return the default response set.
	 * @var EbayTradingTypeItemListCustomizationType
	 */
	public $DeletedFromUnsoldList;
	/**
	 * The SellingSummary
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns a summary of the user's buying activity. <br><br> With a request version of 605 or higher, the selling summary container is not included in the response by default. Add a SellingSummary element in the request with an Include field set to true to receive a SellingSummary container in your response. <br><br> With a request version lower than 605, the SellingSummary is always returned by default. Add a SellingSummary element with an Include field set to false to exclude the SellingSummary from your response.
	 * @var EbayTradingTypeItemListCustomizationType
	 */
	public $SellingSummary;
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
	 * @param EbayTradingTypeItemListCustomizationType ScheduledList
	 * @param EbayTradingTypeItemListCustomizationType ActiveList
	 * @param EbayTradingTypeItemListCustomizationType SoldList
	 * @param EbayTradingTypeItemListCustomizationType UnsoldList
	 * @param EbayTradingTypeItemListCustomizationType BidList
	 * @param EbayTradingTypeItemListCustomizationType DeletedFromSoldList
	 * @param EbayTradingTypeItemListCustomizationType DeletedFromUnsoldList
	 * @param EbayTradingTypeItemListCustomizationType SellingSummary
	 * @param boolean HideVariations
	 * @return EbayTradingTypeGetMyeBaySellingRequestType
	 */
	public function __construct($_ScheduledList = null,$_ActiveList = null,$_SoldList = null,$_UnsoldList = null,$_BidList = null,$_DeletedFromSoldList = null,$_DeletedFromUnsoldList = null,$_SellingSummary = null,$_HideVariations = null)
	{
		EbayTradingWsdlClass::__construct(array('ScheduledList'=>$_ScheduledList,'ActiveList'=>$_ActiveList,'SoldList'=>$_SoldList,'UnsoldList'=>$_UnsoldList,'BidList'=>$_BidList,'DeletedFromSoldList'=>$_DeletedFromSoldList,'DeletedFromUnsoldList'=>$_DeletedFromUnsoldList,'SellingSummary'=>$_SellingSummary,'HideVariations'=>$_HideVariations));
	}
	/**
	 * Set ScheduledList
	 * @param ItemListCustomizationType ScheduledList
	 * @return ItemListCustomizationType
	 */
	public function setScheduledList($_ScheduledList)
	{
		return ($this->ScheduledList = $_ScheduledList);
	}
	/**
	 * Get ScheduledList
	 * @return EbayTradingTypeItemListCustomizationType
	 */
	public function getScheduledList()
	{
		return $this->ScheduledList;
	}
	/**
	 * Set ActiveList
	 * @param ItemListCustomizationType ActiveList
	 * @return ItemListCustomizationType
	 */
	public function setActiveList($_ActiveList)
	{
		return ($this->ActiveList = $_ActiveList);
	}
	/**
	 * Get ActiveList
	 * @return EbayTradingTypeItemListCustomizationType
	 */
	public function getActiveList()
	{
		return $this->ActiveList;
	}
	/**
	 * Set SoldList
	 * @param ItemListCustomizationType SoldList
	 * @return ItemListCustomizationType
	 */
	public function setSoldList($_SoldList)
	{
		return ($this->SoldList = $_SoldList);
	}
	/**
	 * Get SoldList
	 * @return EbayTradingTypeItemListCustomizationType
	 */
	public function getSoldList()
	{
		return $this->SoldList;
	}
	/**
	 * Set UnsoldList
	 * @param ItemListCustomizationType UnsoldList
	 * @return ItemListCustomizationType
	 */
	public function setUnsoldList($_UnsoldList)
	{
		return ($this->UnsoldList = $_UnsoldList);
	}
	/**
	 * Get UnsoldList
	 * @return EbayTradingTypeItemListCustomizationType
	 */
	public function getUnsoldList()
	{
		return $this->UnsoldList;
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
	 * Set DeletedFromSoldList
	 * @param ItemListCustomizationType DeletedFromSoldList
	 * @return ItemListCustomizationType
	 */
	public function setDeletedFromSoldList($_DeletedFromSoldList)
	{
		return ($this->DeletedFromSoldList = $_DeletedFromSoldList);
	}
	/**
	 * Get DeletedFromSoldList
	 * @return EbayTradingTypeItemListCustomizationType
	 */
	public function getDeletedFromSoldList()
	{
		return $this->DeletedFromSoldList;
	}
	/**
	 * Set DeletedFromUnsoldList
	 * @param ItemListCustomizationType DeletedFromUnsoldList
	 * @return ItemListCustomizationType
	 */
	public function setDeletedFromUnsoldList($_DeletedFromUnsoldList)
	{
		return ($this->DeletedFromUnsoldList = $_DeletedFromUnsoldList);
	}
	/**
	 * Get DeletedFromUnsoldList
	 * @return EbayTradingTypeItemListCustomizationType
	 */
	public function getDeletedFromUnsoldList()
	{
		return $this->DeletedFromUnsoldList;
	}
	/**
	 * Set SellingSummary
	 * @param ItemListCustomizationType SellingSummary
	 * @return ItemListCustomizationType
	 */
	public function setSellingSummary($_SellingSummary)
	{
		return ($this->SellingSummary = $_SellingSummary);
	}
	/**
	 * Get SellingSummary
	 * @return EbayTradingTypeItemListCustomizationType
	 */
	public function getSellingSummary()
	{
		return $this->SellingSummary;
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