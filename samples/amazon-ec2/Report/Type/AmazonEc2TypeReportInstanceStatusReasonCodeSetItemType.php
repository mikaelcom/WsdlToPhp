<?php
/**
 * Class file for AmazonEc2TypeReportInstanceStatusReasonCodeSetItemType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeReportInstanceStatusReasonCodeSetItemType
 * @date 10/07/2012
 */
class AmazonEc2TypeReportInstanceStatusReasonCodeSetItemType extends AmazonEc2WsdlClass
{
	/**
	 * The reasonCode
	 * @var string
	 */
	public $reasonCode;
	/**
	 * Constructor
	 * @param string reasonCode
	 * @return AmazonEc2TypeReportInstanceStatusReasonCodeSetItemType
	 */
	public function __construct($_reasonCode = null)
	{
		parent::__construct(array('reasonCode'=>$_reasonCode));
	}
	/**
	 * Set reasonCode
	 * @param string reasonCode
	 * @return string
	 */
	public function setReasonCode($_reasonCode)
	{
		return ($this->reasonCode = $_reasonCode);
	}
	/**
	 * Get reasonCode
	 * @return string
	 */
	public function getReasonCode()
	{
		return $this->reasonCode;
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