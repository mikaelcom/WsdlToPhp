<?php
/**
 * Class file for XiEarningsCalendarTypeArrayOfAnnouncement
 * @date 08/07/2012
 */
/**
 * Class XiEarningsCalendarTypeArrayOfAnnouncement
 * @date 08/07/2012
 */
class XiEarningsCalendarTypeArrayOfAnnouncement extends XiEarningsCalendarWsdlClass
{
	/**
	 * The Announcement
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiEarningsCalendarTypeAnnouncement
	 */
	public $Announcement;
	/**
	 * Constructor
	 * @param XiEarningsCalendarTypeAnnouncement Announcement
	 * @return XiEarningsCalendarTypeArrayOfAnnouncement
	 */
	public function __construct($_Announcement = null)
	{
		parent::__construct(array('Announcement'=>$_Announcement));
	}
	/**
	 * Set Announcement
	 * @param Announcement Announcement
	 * @return Announcement
	 */
	public function setAnnouncement($_Announcement)
	{
		return ($this->Announcement = $_Announcement);
	}
	/**
	 * Get Announcement
	 * @return XiEarningsCalendarTypeAnnouncement
	 */
	public function getAnnouncement()
	{
		return $this->Announcement;
	}
	/**
	 * Returns the current element
	 * @see XiEarningsCalendarWsdlClass::current()
	 * @return XiEarningsCalendarTypeAnnouncement
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiEarningsCalendarWsdlClass::item()
	 * @param int
	 * @return XiEarningsCalendarTypeAnnouncement
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiEarningsCalendarWsdlClass::first()
	 * @return XiEarningsCalendarTypeAnnouncement
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiEarningsCalendarWsdlClass::last()
	 * @return XiEarningsCalendarTypeAnnouncement
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiEarningsCalendarWsdlClass::offsetGet()
	 * @param int
	 * @return XiEarningsCalendarTypeAnnouncement
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Announcement'
	 */
	public function getAttributeName()
	{
		return 'Announcement';
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