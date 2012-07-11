<?php
/**
 * Class file for EbayTradingTypeGetSellerListRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetSellerListRequestType
 * Documentation : Returns a list of the items posted by the authenticated user, including the related item data.
 * @date 04/07/2012
 */
class EbayTradingTypeGetSellerListRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The UserID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Specifies the seller whose items will be returned. UserID is an optional input. If not specified, retrieves listings for the user identified by the authentication token passed in the request. Note that since user information is anonymous to everyone except the bidder and the seller (during an active auction), only sellers looking for information about their own listings and bidders who know the user IDs of their sellers will be able to make this API call successfully. See <a href= "http://developer.ebay.com/DevZone/XML/docs/WebHelp/index.htm?context=eBay_XML_API&topic=AnonymousUserInfo" >Working with Anonymous User Information</a>in the eBay Web Services Guide for more information.
	 * @var EbayTradingTypeUserIDType
	 */
	public $UserID;
	/**
	 * The MotorsDealerUsers
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Specifies the list of Motors Dealer sellers for which a special set of metrics can be requested. Applies to eBay Motors Pro applications only.
	 * @var EbayTradingTypeUserIDArrayType
	 */
	public $MotorsDealerUsers;
	/**
	 * The EndTimeFrom
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the earliest (oldest) date to use in a date range filter based on item end time. Specify either an end-time range or a start-time range filter in every call request. Each of the time ranges must be a value less than 120 days.
	 * @var dateTime
	 */
	public $EndTimeFrom;
	/**
	 * The EndTimeTo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the latest (most recent) date to use in a date range filter based on item end time. Must be specified if EndTimeFrom is specified.
	 * @var dateTime
	 */
	public $EndTimeTo;
	/**
	 * The Sort
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the order in which returned items are sorted (based on the end dates of the item listings). Valid values: <br> 0 = No sorting<br> 1 = Sort in descending order<br> 2 = Sort in ascending order<br>
	 * @var int
	 */
	public $Sort;
	/**
	 * The StartTimeFrom
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the earliest (oldest) date to use in a date range filter based on item start time. Each of the time ranges must be a value less than 120 days. In all calls, at least one date-range filter must be specified (i.e., you must specify either the end time range or start time range in every request).
	 * @var dateTime
	 */
	public $StartTimeFrom;
	/**
	 * The StartTimeTo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the latest (most recent) date to use in a date range filter based on item start time. Must be specified if StartTimeFrom is specified.
	 * @var dateTime
	 */
	public $StartTimeTo;
	/**
	 * The Pagination
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the data controlling the pagination of the returned values. If you set a DetailLevel in this call, you must set pagination values. The Pagination field contains the number of items to be returned per page of data (per call), and the page number to return with the current call.
	 * @var EbayTradingTypePaginationType
	 */
	public $Pagination;
	/**
	 * The GranularityLevel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the subset of item and user fields to return. See GetSellerList in the eBay Web Services guide for a list of the fields that are returned for each granularity level. For GetSellerList, use DetailLevel or GranularityLevel in a request, but not both. For GetSellerList, if GranularityLevel is specified, DetailLevel is ignored.
	 * @var EbayTradingTypeGranularityLevelCodeType
	 */
	public $GranularityLevel;
	/**
	 * The SKUArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container for a set of SKUs. Filters (reduces) the response to only include active listings that the seller listed with any of the specified SKUs. If multiple listings include the same SKU, they are all returned (assuming they also match the other criteria in the GetSellerList request).<br> <br> SKUArray can be used to retrieve items listed by the user identified in AuthToken or in UserID.<br> <br> <span class="tablenote"><b>Note:</b> Listings with matching SKUs are returned regardless of their Item.InventoryTrackingMethod settings. </span>
	 * @var EbayTradingTypeSKUArrayType
	 */
	public $SKUArray;
	/**
	 * The IncludeWatchCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies whether to include WatchCount in Item nodes returned. WatchCount is only returned with DetailLevel ReturnAll.
	 * @var boolean
	 */
	public $IncludeWatchCount;
	/**
	 * The AdminEndedItemsOnly
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies whether to return only items that were administratively ended based on a policy violation.
	 * @var boolean
	 */
	public $AdminEndedItemsOnly;
	/**
	 * The CategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The category ID for the items retrieved. If you specify CategoryID in a GetSellerList call, the response contains only items in the category you specify.
	 * @var int
	 */
	public $CategoryID;
	/**
	 * The IncludeVariations
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, the Variations node is returned for all multi-variation listings in the response.<br> <br> Please note that if the seller includes a large number of variations in many listings, using this flag may degrade the call's performance. Therefore, when you use this flag, you may need to reduce the total number of items you're requesting at once. For example, you may need to use shorter time ranges in the EndTime or StartTime filters, fewer entries per page in Pagination, and/or SKUArray.
	 * @var boolean
	 */
	public $IncludeVariations;
	/**
	 * Constructor
	 * @param EbayTradingTypeUserIDType UserID
	 * @param EbayTradingTypeUserIDArrayType MotorsDealerUsers
	 * @param dateTime EndTimeFrom
	 * @param dateTime EndTimeTo
	 * @param int Sort
	 * @param dateTime StartTimeFrom
	 * @param dateTime StartTimeTo
	 * @param EbayTradingTypePaginationType Pagination
	 * @param EbayTradingTypeGranularityLevelCodeType GranularityLevel
	 * @param EbayTradingTypeSKUArrayType SKUArray
	 * @param boolean IncludeWatchCount
	 * @param boolean AdminEndedItemsOnly
	 * @param int CategoryID
	 * @param boolean IncludeVariations
	 * @return EbayTradingTypeGetSellerListRequestType
	 */
	public function __construct($_UserID = null,$_MotorsDealerUsers = null,$_EndTimeFrom = null,$_EndTimeTo = null,$_Sort = null,$_StartTimeFrom = null,$_StartTimeTo = null,$_Pagination = null,$_GranularityLevel = null,$_SKUArray = null,$_IncludeWatchCount = null,$_AdminEndedItemsOnly = null,$_CategoryID = null,$_IncludeVariations = null)
	{
		EbayTradingWsdlClass::__construct(array('UserID'=>$_UserID,'MotorsDealerUsers'=>$_MotorsDealerUsers,'EndTimeFrom'=>$_EndTimeFrom,'EndTimeTo'=>$_EndTimeTo,'Sort'=>$_Sort,'StartTimeFrom'=>$_StartTimeFrom,'StartTimeTo'=>$_StartTimeTo,'Pagination'=>$_Pagination,'GranularityLevel'=>$_GranularityLevel,'SKUArray'=>$_SKUArray,'IncludeWatchCount'=>$_IncludeWatchCount,'AdminEndedItemsOnly'=>$_AdminEndedItemsOnly,'CategoryID'=>$_CategoryID,'IncludeVariations'=>$_IncludeVariations));
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
	 * Set MotorsDealerUsers
	 * @param UserIDArrayType MotorsDealerUsers
	 * @return UserIDArrayType
	 */
	public function setMotorsDealerUsers($_MotorsDealerUsers)
	{
		return ($this->MotorsDealerUsers = $_MotorsDealerUsers);
	}
	/**
	 * Get MotorsDealerUsers
	 * @return EbayTradingTypeUserIDArrayType
	 */
	public function getMotorsDealerUsers()
	{
		return $this->MotorsDealerUsers;
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
	 * Set Sort
	 * @param int Sort
	 * @return int
	 */
	public function setSort($_Sort)
	{
		return ($this->Sort = $_Sort);
	}
	/**
	 * Get Sort
	 * @return int
	 */
	public function getSort()
	{
		return $this->Sort;
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
	 * Set Pagination
	 * @param PaginationType Pagination
	 * @return PaginationType
	 */
	public function setPagination($_Pagination)
	{
		return ($this->Pagination = $_Pagination);
	}
	/**
	 * Get Pagination
	 * @return EbayTradingTypePaginationType
	 */
	public function getPagination()
	{
		return $this->Pagination;
	}
	/**
	 * Set GranularityLevel
	 * @param GranularityLevelCodeType GranularityLevel
	 * @return GranularityLevelCodeType
	 */
	public function setGranularityLevel($_GranularityLevel)
	{
		return ($this->GranularityLevel = EbayTradingTypeGranularityLevelCodeType::valueIsValid($_GranularityLevel)?$_GranularityLevel:null);
	}
	/**
	 * Get GranularityLevel
	 * @return EbayTradingTypeGranularityLevelCodeType
	 */
	public function getGranularityLevel()
	{
		return $this->GranularityLevel;
	}
	/**
	 * Set SKUArray
	 * @param SKUArrayType SKUArray
	 * @return SKUArrayType
	 */
	public function setSKUArray($_SKUArray)
	{
		return ($this->SKUArray = $_SKUArray);
	}
	/**
	 * Get SKUArray
	 * @return EbayTradingTypeSKUArrayType
	 */
	public function getSKUArray()
	{
		return $this->SKUArray;
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
	 * Set AdminEndedItemsOnly
	 * @param boolean AdminEndedItemsOnly
	 * @return boolean
	 */
	public function setAdminEndedItemsOnly($_AdminEndedItemsOnly)
	{
		return ($this->AdminEndedItemsOnly = $_AdminEndedItemsOnly);
	}
	/**
	 * Get AdminEndedItemsOnly
	 * @return boolean
	 */
	public function getAdminEndedItemsOnly()
	{
		return $this->AdminEndedItemsOnly;
	}
	/**
	 * Set CategoryID
	 * @param int CategoryID
	 * @return int
	 */
	public function setCategoryID($_CategoryID)
	{
		return ($this->CategoryID = $_CategoryID);
	}
	/**
	 * Get CategoryID
	 * @return int
	 */
	public function getCategoryID()
	{
		return $this->CategoryID;
	}
	/**
	 * Set IncludeVariations
	 * @param boolean IncludeVariations
	 * @return boolean
	 */
	public function setIncludeVariations($_IncludeVariations)
	{
		return ($this->IncludeVariations = $_IncludeVariations);
	}
	/**
	 * Get IncludeVariations
	 * @return boolean
	 */
	public function getIncludeVariations()
	{
		return $this->IncludeVariations;
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