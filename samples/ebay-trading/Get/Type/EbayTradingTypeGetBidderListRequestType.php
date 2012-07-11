<?php
/**
 * Class file for EbayTradingTypeGetBidderListRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetBidderListRequestType
 * Documentation : Retrieves all items the user is currently bidding on, and the ones they have won or purchased.
 * @date 04/07/2012
 */
class EbayTradingTypeGetBidderListRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ActiveItemsOnly
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether or not to limit the result set to active items. If true, only active items are returned and the EndTimeFrom and EndTimeTo filters are ignored. If false (or not sent), both active and ended items are returned.
	 * @var boolean
	 */
	public $ActiveItemsOnly;
	/**
	 * The EndTimeFrom
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Used in conjunction with EndTimeTo. Limits returned items to only those for which the item's end date is on or after the date-time specified. Specify an end date within 30 days prior to today. Items that ended more than 30 days ago are omitted from the results. If specified, EndTimeTo must also be specified. Express date-time in the format YYYY-MM-DD HH:MM:SS, and in GMT. (For information on how to convert between your local time zone and GMT, see Time Values Note.) This field is ignored if ActiveItemsOnly is true.
	 * @var dateTime
	 */
	public $EndTimeFrom;
	/**
	 * The EndTimeTo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Used in conjunction with EndTimeFrom. Limits returned items to only those for which the item's end date is on or before the date-time specified. If specified, EndTimeFrom must also be specified. Express date-time in the format YYYY-MM-DD HH:MM:SS, and in GMT. This field is ignored if ActiveItemsOnly is true. Note that for GTC items, whose end times automatically increment by 30 days every 30 days, an EndTimeTo within in the first 30 days of a listing will refer to the listing's initial end time.
	 * @var dateTime
	 */
	public $EndTimeTo;
	/**
	 * The UserID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The user for whom information should be returned. If provided, overrides user defined via RequesterCredentials in header.
	 * @var EbayTradingTypeUserIDType
	 */
	public $UserID;
	/**
	 * The GranularityLevel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : You can control some of the fields returned in the response by specifying one of two values in the GranularityLevel field: Fine or Medium. Fine returns more fields than the default, while setting this field to Medium returns an abbreviated set of results.
	 * @var EbayTradingTypeGranularityLevelCodeType
	 */
	public $GranularityLevel;
	/**
	 * Constructor
	 * @param boolean ActiveItemsOnly
	 * @param dateTime EndTimeFrom
	 * @param dateTime EndTimeTo
	 * @param EbayTradingTypeUserIDType UserID
	 * @param EbayTradingTypeGranularityLevelCodeType GranularityLevel
	 * @return EbayTradingTypeGetBidderListRequestType
	 */
	public function __construct($_ActiveItemsOnly = null,$_EndTimeFrom = null,$_EndTimeTo = null,$_UserID = null,$_GranularityLevel = null)
	{
		EbayTradingWsdlClass::__construct(array('ActiveItemsOnly'=>$_ActiveItemsOnly,'EndTimeFrom'=>$_EndTimeFrom,'EndTimeTo'=>$_EndTimeTo,'UserID'=>$_UserID,'GranularityLevel'=>$_GranularityLevel));
	}
	/**
	 * Set ActiveItemsOnly
	 * @param boolean ActiveItemsOnly
	 * @return boolean
	 */
	public function setActiveItemsOnly($_ActiveItemsOnly)
	{
		return ($this->ActiveItemsOnly = $_ActiveItemsOnly);
	}
	/**
	 * Get ActiveItemsOnly
	 * @return boolean
	 */
	public function getActiveItemsOnly()
	{
		return $this->ActiveItemsOnly;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>