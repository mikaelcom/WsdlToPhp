<?php
/**
 * Class file for XiEarningsCalendarTypeGetAnnouncementResponse
 * @date 08/07/2012
 */
/**
 * Class XiEarningsCalendarTypeGetAnnouncementResponse
 * @date 08/07/2012
 */
class XiEarningsCalendarTypeGetAnnouncementResponse extends XiEarningsCalendarWsdlClass
{
	/**
	 * The GetAnnouncementResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEarningsCalendarTypeAnnouncement
	 */
	public $GetAnnouncementResult;
	/**
	 * Constructor
	 * @param XiEarningsCalendarTypeAnnouncement GetAnnouncementResult
	 * @return XiEarningsCalendarTypeGetAnnouncementResponse
	 */
	public function __construct($_GetAnnouncementResult = null)
	{
		parent::__construct(array('GetAnnouncementResult'=>$_GetAnnouncementResult));
	}
	/**
	 * Set GetAnnouncementResult
	 * @param Announcement GetAnnouncementResult
	 * @return Announcement
	 */
	public function setGetAnnouncementResult($_GetAnnouncementResult)
	{
		return ($this->GetAnnouncementResult = $_GetAnnouncementResult);
	}
	/**
	 * Get GetAnnouncementResult
	 * @return XiEarningsCalendarTypeAnnouncement
	 */
	public function getGetAnnouncementResult()
	{
		return $this->GetAnnouncementResult;
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