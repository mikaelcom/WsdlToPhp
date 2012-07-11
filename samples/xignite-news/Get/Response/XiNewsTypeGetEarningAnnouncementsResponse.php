<?php
/**
 * Class file for XiNewsTypeGetEarningAnnouncementsResponse
 * @date 08/07/2012
 */
/**
 * Class XiNewsTypeGetEarningAnnouncementsResponse
 * @date 08/07/2012
 */
class XiNewsTypeGetEarningAnnouncementsResponse extends XiNewsWsdlClass
{
	/**
	 * The GetEarningAnnouncementsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiNewsTypeArrayOfEarningAnnouncement
	 */
	public $GetEarningAnnouncementsResult;
	/**
	 * Constructor
	 * @param XiNewsTypeArrayOfEarningAnnouncement GetEarningAnnouncementsResult
	 * @return XiNewsTypeGetEarningAnnouncementsResponse
	 */
	public function __construct($_GetEarningAnnouncementsResult = null)
	{
		parent::__construct(array('GetEarningAnnouncementsResult'=>new XiNewsTypeArrayOfEarningAnnouncement($_GetEarningAnnouncementsResult)));
	}
	/**
	 * Set GetEarningAnnouncementsResult
	 * @param ArrayOfEarningAnnouncement GetEarningAnnouncementsResult
	 * @return ArrayOfEarningAnnouncement
	 */
	public function setGetEarningAnnouncementsResult($_GetEarningAnnouncementsResult)
	{
		return ($this->GetEarningAnnouncementsResult = $_GetEarningAnnouncementsResult);
	}
	/**
	 * Get GetEarningAnnouncementsResult
	 * @return XiNewsTypeArrayOfEarningAnnouncement
	 */
	public function getGetEarningAnnouncementsResult()
	{
		return $this->GetEarningAnnouncementsResult;
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