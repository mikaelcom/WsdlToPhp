<?php
/**
 * Class file for EbayTradingTypeGetSellerEventsRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetSellerEventsRequestType
 * Documentation : Retrieves price changes, item revisions, description revisions, and other changes that have occurred within the last 48 hours related to a seller's eBay listings.
 * @date 04/07/2012
 */
class EbayTradingTypeGetSellerEventsRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The UserID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : eBay user ID for the seller whose events are to be returned. If not specified, retrieves events for the user identified by the authentication token passed in the request. Note that since user information is anonymous to everyone except the bidder and the seller (during an active auction), only sellers looking for information about their own listings and bidders who know the user IDs of their sellers will be able to make this API call successfully.
	 * @var EbayTradingTypeUserIDType
	 */
	public $UserID;
	/**
	 * The StartTimeFrom
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Describes the earliest (oldest) time to use in a time range filter based on item start time. Must be specified if StartTimeTo is specified. Either the StartTimeFrom, EndTimeFrom, or ModTimeFrom filter must be specified. If you do not specify the correspoding To filter, it is set to the time you make the call. For better results, the time period you use should be less than 48 hours. If 3000 or more items are found, use a smaller time range.<br> <br> Include a 2-minute, overlapping buffer between requests. For example, if StartTimeTo was 6:58 in a prior request, the current request should use 6:56 in StartTimeFrom (e.g., use ranges like 5:56-6:58, 6:56-7:58, 7:56-8:58).
	 * @var dateTime
	 */
	public $StartTimeFrom;
	/**
	 * The StartTimeTo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Describes the latest (most recent) date to use in a time range filter based on item start time. If you specify the corresponding From filter, but you do not include StartTimeTo, the StartTimeTo is set to the time you make the call.
	 * @var dateTime
	 */
	public $StartTimeTo;
	/**
	 * The EndTimeFrom
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Describes the earliest (oldest) date to use in a time range filter based on item end time. Must be specified if EndTimeTo is specified. Either the StartTimeFrom, EndTimeFrom, or ModTimeFrom filter must be specified. If you do not specify the correspoding To filter, it is set to the time you make the call.<br> <br> For better results, the time range you use should be less than 48 hours. If 3000 or more items are found, use a smaller time range.<br> <br> Include a 2-minute, overlapping buffer between requests. For example, if EndTimeTo was 6:58 in a prior request, the current request should use 6:56 in EndTimeFrom (e.g., use ranges like 5:56-6:58, 6:56-7:58, 7:56-8:58).
	 * @var dateTime
	 */
	public $EndTimeFrom;
	/**
	 * The EndTimeTo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Describes the latest (most recent) date to use in a time range filter based on item end time. If you specify the corresponding From filter, but you do not include EndTimeTo, then EndTimeTo is set to the time you make the call.
	 * @var dateTime
	 */
	public $EndTimeTo;
	/**
	 * The ModTimeFrom
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Describes the earliest (oldest) date to use in a time range filter based on item modification time. Must be specified if ModTimeTo is specified. Either the StartTimeFrom, EndTimeFrom, or ModTimeFrom filter must be specified. If you do not specify the correspoding To filter, it is set to the time you make the call.<br> <br> Include a 2-minute, overlapping buffer between requests. For example, if ModTimeTo was 6:58 in a prior request, the current request should use 6:56 in ModTimeFrom (e.g., use ranges like 5:56-6:58, 6:56-7:58, 7:56-8:58). <br><br> For better results, the time range you use should be less than 48 hours. If 3000 or more items are found, use a smaller time range. <br><br> If an unexpected item is returned (including an old item or an unchanged active item), please ignore the item. Although a maintenance process may have triggered a change in the modification time, item characteristics are unchanged.
	 * @var dateTime
	 */
	public $ModTimeFrom;
	/**
	 * The ModTimeTo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Describes the latest (most recent) date and time to use in a time range filter based on the time an item's record was modified. If you specify the corresponding From filter, but you do not include ModTimeTo, then ModTimeTo is set to the time you make the call. Include a 2-minute buffer between the current time and the ModTimeTo filter.
	 * @var dateTime
	 */
	public $ModTimeTo;
	/**
	 * The NewItemFilter
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Default is true. If true, response includes only items that have been modified within the ModTime range. If false, response includes all items.
	 * @var boolean
	 */
	public $NewItemFilter;
	/**
	 * The IncludeWatchCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies whether to include WatchCount in Item nodes returned. WatchCount is the number of watches buyers have placed on the item from their My eBay accounts.
	 * @var boolean
	 */
	public $IncludeWatchCount;
	/**
	 * The IncludeVariationSpecifics
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies whether to force the response to include variation specifics for multi-variation listings. <br> <br> If false (or not specified), eBay keeps the response as small as possible by not returning Variation.VariationSpecifics. It only returns Variation.SKU as an identifier (along with the variation price and other selling details). If the variation has no SKU, then Variation.VariationSpecifics is returned as the variation's unique identifier.<br> <br> If true, Variation.VariationSpecifics is returned. (Variation.SKU is also returned, if the variation has a SKU.) This may be useful for applications that don't track variations by SKU.<br> <br> Ignored when HideVariations=true.<br> <br> Please note that if the seller includes a large number of variations in many listings, using this flag may degrade the call's performance. Therefore, when you use this flag, you may need to reduce the total number of items you're requesting at once. For example, you may need to use shorter time ranges in the EndTime, StartTime, or ModTime filters.
	 * @var boolean
	 */
	public $IncludeVariationSpecifics;
	/**
	 * The HideVariations
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies whether to force the response to hide variation details for multi-variation listings.<br> <br> If false (or not specified), eBay returns variation details (if any). In this case, the amount of detail can be controlled by using IncludeVariationSpecifics.<br> <br> If true, variation details are not returned (and IncludeVariationSpecifics has no effect). This may be useful for applications that use other calls, notifications, alerts, or reports to track price and quantity details.
	 * @var boolean
	 */
	public $HideVariations;
	/**
	 * Constructor
	 * @param EbayTradingTypeUserIDType UserID
	 * @param dateTime StartTimeFrom
	 * @param dateTime StartTimeTo
	 * @param dateTime EndTimeFrom
	 * @param dateTime EndTimeTo
	 * @param dateTime ModTimeFrom
	 * @param dateTime ModTimeTo
	 * @param boolean NewItemFilter
	 * @param boolean IncludeWatchCount
	 * @param boolean IncludeVariationSpecifics
	 * @param boolean HideVariations
	 * @return EbayTradingTypeGetSellerEventsRequestType
	 */
	public function __construct($_UserID = null,$_StartTimeFrom = null,$_StartTimeTo = null,$_EndTimeFrom = null,$_EndTimeTo = null,$_ModTimeFrom = null,$_ModTimeTo = null,$_NewItemFilter = null,$_IncludeWatchCount = null,$_IncludeVariationSpecifics = null,$_HideVariations = null)
	{
		EbayTradingWsdlClass::__construct(array('UserID'=>$_UserID,'StartTimeFrom'=>$_StartTimeFrom,'StartTimeTo'=>$_StartTimeTo,'EndTimeFrom'=>$_EndTimeFrom,'EndTimeTo'=>$_EndTimeTo,'ModTimeFrom'=>$_ModTimeFrom,'ModTimeTo'=>$_ModTimeTo,'NewItemFilter'=>$_NewItemFilter,'IncludeWatchCount'=>$_IncludeWatchCount,'IncludeVariationSpecifics'=>$_IncludeVariationSpecifics,'HideVariations'=>$_HideVariations));
	}
	/**
	 * Set UserID
	 * @param UserIDType UserID
	 * @return UserIDType
	 */
	public function setUserID($_UserID)
	{
		return ($this->UserID = EbayTradingTypeUserIDType::valueIsValid($_UserID)?$_UserID:null);
	}
	/**
	 * Get UserID
	 * @return EbayTradingTypeUserIDType
	 */
	public function getUserID()
	{
		return $this->UserID;
	}
	/**
	 * Set StartTimeFrom
	 * @param dateTime StartTimeFrom
	 * @return dateTime
	 */
	public function setStartTimeFrom($_StartTimeFrom)
	{
		return ($this->StartTimeFrom = $_StartTimeFrom);
	}
	/**
	 * Get StartTimeFrom
	 * @return dateTime
	 */
	public function getStartTimeFrom()
	{
		return $this->StartTimeFrom;
	}
	/**
	 * Set StartTimeTo
	 * @param dateTime StartTimeTo
	 * @return dateTime
	 */
	public function setStartTimeTo($_StartTimeTo)
	{
		return ($this->StartTimeTo = $_StartTimeTo);
	}
	/**
	 * Get StartTimeTo
	 * @return dateTime
	 */
	public function getStartTimeTo()
	{
		return $this->StartTimeTo;
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
	 * Set ModTimeFrom
	 * @param dateTime ModTimeFrom
	 * @return dateTime
	 */
	public function setModTimeFrom($_ModTimeFrom)
	{
		return ($this->ModTimeFrom = $_ModTimeFrom);
	}
	/**
	 * Get ModTimeFrom
	 * @return dateTime
	 */
	public function getModTimeFrom()
	{
		return $this->ModTimeFrom;
	}
	/**
	 * Set ModTimeTo
	 * @param dateTime ModTimeTo
	 * @return dateTime
	 */
	public function setModTimeTo($_ModTimeTo)
	{
		return ($this->ModTimeTo = $_ModTimeTo);
	}
	/**
	 * Get ModTimeTo
	 * @return dateTime
	 */
	public function getModTimeTo()
	{
		return $this->ModTimeTo;
	}
	/**
	 * Set NewItemFilter
	 * @param boolean NewItemFilter
	 * @return boolean
	 */
	public function setNewItemFilter($_NewItemFilter)
	{
		return ($this->NewItemFilter = $_NewItemFilter);
	}
	/**
	 * Get NewItemFilter
	 * @return boolean
	 */
	public function getNewItemFilter()
	{
		return $this->NewItemFilter;
	}
	/**
	 * Set IncludeWatchCount
	 * @param boolean IncludeWatchCount
	 * @return boolean
	 */
	public function setIncludeWatchCount($_IncludeWatchCount)
	{
		return ($this->IncludeWatchCount = $_IncludeWatchCount);
	}
	/**
	 * Get IncludeWatchCount
	 * @return boolean
	 */
	public function getIncludeWatchCount()
	{
		return $this->IncludeWatchCount;
	}
	/**
	 * Set IncludeVariationSpecifics
	 * @param boolean IncludeVariationSpecifics
	 * @return boolean
	 */
	public function setIncludeVariationSpecifics($_IncludeVariationSpecifics)
	{
		return ($this->IncludeVariationSpecifics = $_IncludeVariationSpecifics);
	}
	/**
	 * Get IncludeVariationSpecifics
	 * @return boolean
	 */
	public function getIncludeVariationSpecifics()
	{
		return $this->IncludeVariationSpecifics;
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