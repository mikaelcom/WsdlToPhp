<?php
/**
 * Class file for XiNewsTypeGetEarningAnnouncements
 * @date 08/07/2012
 */
/**
 * Class XiNewsTypeGetEarningAnnouncements
 * @date 08/07/2012
 */
class XiNewsTypeGetEarningAnnouncements extends XiNewsWsdlClass
{
	/**
	 * The AnnouncementDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AnnouncementDate;
	/**
	 * Constructor
	 * @param string AnnouncementDate
	 * @return XiNewsTypeGetEarningAnnouncements
	 */
	public function __construct($_AnnouncementDate = null)
	{
		parent::__construct(array('AnnouncementDate'=>$_AnnouncementDate));
	}
	/**
	 * Set AnnouncementDate
	 * @param string AnnouncementDate
	 * @return string
	 */
	public function setAnnouncementDate($_AnnouncementDate)
	{
		return ($this->AnnouncementDate = $_AnnouncementDate);
	}
	/**
	 * Get AnnouncementDate
	 * @return string
	 */
	public function getAnnouncementDate()
	{
		return $this->AnnouncementDate;
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