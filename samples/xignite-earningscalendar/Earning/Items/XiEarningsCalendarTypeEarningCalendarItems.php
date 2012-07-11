<?php
/**
 * Class file for XiEarningsCalendarTypeEarningCalendarItems
 * @date 08/07/2012
 */
/**
 * Class XiEarningsCalendarTypeEarningCalendarItems
 * @date 08/07/2012
 */
class XiEarningsCalendarTypeEarningCalendarItems extends XiEarningsCalendarTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEarningsCalendarTypeSecurity
	 */
	public $Security;
	/**
	 * The Items
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEarningsCalendarTypeArrayOfEarningCalendarItem
	 */
	public $Items;
	/**
	 * Constructor
	 * @param XiEarningsCalendarTypeSecurity Security
	 * @param XiEarningsCalendarTypeArrayOfEarningCalendarItem Items
	 * @return XiEarningsCalendarTypeEarningCalendarItems
	 */
	public function __construct($_Security = null,$_Items = null)
	{
		XiEarningsCalendarWsdlClass::__construct(array('Security'=>$_Security,'Items'=>new XiEarningsCalendarTypeArrayOfEarningCalendarItem($_Items)));
	}
	/**
	 * Set Security
	 * @param Security Security
	 * @return Security
	 */
	public function setSecurity($_Security)
	{
		return ($this->Security = $_Security);
	}
	/**
	 * Get Security
	 * @return XiEarningsCalendarTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set Items
	 * @param ArrayOfEarningCalendarItem Items
	 * @return ArrayOfEarningCalendarItem
	 */
	public function setItems($_Items)
	{
		return ($this->Items = $_Items);
	}
	/**
	 * Get Items
	 * @return XiEarningsCalendarTypeArrayOfEarningCalendarItem
	 */
	public function getItems()
	{
		return $this->Items;
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