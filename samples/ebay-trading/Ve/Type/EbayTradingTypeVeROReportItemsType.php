<?php
/**
 * Class file for EbayTradingTypeVeROReportItemsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeVeROReportItemsType
 * Documentation : Container for a list of items. Can contain zero, one, or multiple ReportedItemsType objects, each of which conveys the data for one item listing.
 * @date 04/07/2012
 */
class EbayTradingTypeVeROReportItemsType extends EbayTradingWsdlClass
{
	/**
	 * The ReportItem
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains the data and status of a reported item.
	 * @var EbayTradingTypeVeROReportItemType
	 */
	public $ReportItem;
	/**
	 * Constructor
	 * @param EbayTradingTypeVeROReportItemType ReportItem
	 * @return EbayTradingTypeVeROReportItemsType
	 */
	public function __construct($_ReportItem = null)
	{
		parent::__construct(array('ReportItem'=>$_ReportItem));
	}
	/**
	 * Set ReportItem
	 * @param VeROReportItemType ReportItem
	 * @return VeROReportItemType
	 */
	public function setReportItem($_ReportItem)
	{
		return ($this->ReportItem = $_ReportItem);
	}
	/**
	 * Get ReportItem
	 * @return EbayTradingTypeVeROReportItemType
	 */
	public function getReportItem()
	{
		return $this->ReportItem;
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