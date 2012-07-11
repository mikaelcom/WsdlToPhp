<?php
/**
 * Class file for XiEarningsCalendarTypeEarningCalendarDay
 * @date 08/07/2012
 */
/**
 * Class XiEarningsCalendarTypeEarningCalendarDay
 * @date 08/07/2012
 */
class XiEarningsCalendarTypeEarningCalendarDay extends XiEarningsCalendarTypeCommon
{
	/**
	 * The Date
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Date;
	/**
	 * The Count
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Count;
	/**
	 * The Announcements
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEarningsCalendarTypeArrayOfAnnouncement
	 */
	public $Announcements;
	/**
	 * Constructor
	 * @param string Date
	 * @param int Count
	 * @param XiEarningsCalendarTypeArrayOfAnnouncement Announcements
	 * @return XiEarningsCalendarTypeEarningCalendarDay
	 */
	public function __construct($_Date = null,$_Count,$_Announcements = null)
	{
		XiEarningsCalendarWsdlClass::__construct(array('Date'=>$_Date,'Count'=>$_Count,'Announcements'=>new XiEarningsCalendarTypeArrayOfAnnouncement($_Announcements)));
	}
	/**
	 * Set Date
	 * @param string Date
	 * @return string
	 */
	public function setDate($_Date)
	{
		return ($this->Date = $_Date);
	}
	/**
	 * Get Date
	 * @return string
	 */
	public function getDate()
	{
		return $this->Date;
	}
	/**
	 * Set Count
	 * @param int Count
	 * @return int
	 */
	public function setCount($_Count)
	{
		return ($this->Count = $_Count);
	}
	/**
	 * Get Count
	 * @return int
	 */
	public function getCount()
	{
		return $this->Count;
	}
	/**
	 * Set Announcements
	 * @param ArrayOfAnnouncement Announcements
	 * @return ArrayOfAnnouncement
	 */
	public function setAnnouncements($_Announcements)
	{
		return ($this->Announcements = $_Announcements);
	}
	/**
	 * Get Announcements
	 * @return XiEarningsCalendarTypeArrayOfAnnouncement
	 */
	public function getAnnouncements()
	{
		return $this->Announcements;
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