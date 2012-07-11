<?php
/**
 * Class file for AmazonEc2TypeReportInstanceStatusReasonCodesSetType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeReportInstanceStatusReasonCodesSetType
 * @date 10/07/2012
 */
class AmazonEc2TypeReportInstanceStatusReasonCodesSetType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeReportInstanceStatusReasonCodeSetItemType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeReportInstanceStatusReasonCodeSetItemType item
	 * @return AmazonEc2TypeReportInstanceStatusReasonCodesSetType
	 */
	public function __construct($_item)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param ReportInstanceStatusReasonCodeSetItemType item
	 * @return ReportInstanceStatusReasonCodeSetItemType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeReportInstanceStatusReasonCodeSetItemType
	 */
	public function getItem()
	{
		return $this->item;
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