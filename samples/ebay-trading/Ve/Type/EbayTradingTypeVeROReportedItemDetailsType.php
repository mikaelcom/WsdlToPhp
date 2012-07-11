<?php
/**
 * Class file for EbayTradingTypeVeROReportedItemDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeVeROReportedItemDetailsType
 * Documentation : Container for a list of reported items. Can contain zero, one, or multiple VeROReportedItemType objects, each of which conveys the data for one item listing.
 * @date 04/07/2012
 */
class EbayTradingTypeVeROReportedItemDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The ReportedItem
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains the data and status of a reported item.
	 * @var EbayTradingTypeVeROReportedItemType
	 */
	public $ReportedItem;
	/**
	 * Constructor
	 * @param EbayTradingTypeVeROReportedItemType ReportedItem
	 * @return EbayTradingTypeVeROReportedItemDetailsType
	 */
	public function __construct($_ReportedItem = null)
	{
		parent::__construct(array('ReportedItem'=>$_ReportedItem));
	}
	/**
	 * Set ReportedItem
	 * @param VeROReportedItemType ReportedItem
	 * @return VeROReportedItemType
	 */
	public function setReportedItem($_ReportedItem)
	{
		return ($this->ReportedItem = $_ReportedItem);
	}
	/**
	 * Get ReportedItem
	 * @return EbayTradingTypeVeROReportedItemType
	 */
	public function getReportedItem()
	{
		return $this->ReportedItem;
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