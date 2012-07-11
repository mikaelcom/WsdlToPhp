<?php
/**
 * Class file for OvhTypeTelephonyFaxSummaryStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyFaxSummaryStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyFaxSummaryStruct extends OvhWsdlClass
{
	/**
	 * The low
	 * @var OvhTypeTelephonyFaxSummaryDetailsStruct
	 */
	public $low;
	/**
	 * The high
	 * @var OvhTypeTelephonyFaxSummaryDetailsStruct
	 */
	public $high;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyFaxSummaryDetailsStruct low
	 * @param OvhTypeTelephonyFaxSummaryDetailsStruct high
	 * @return OvhTypeTelephonyFaxSummaryStruct
	 */
	public function __construct($_low = null,$_high = null)
	{
		parent::__construct(array('low'=>$_low,'high'=>$_high));
	}
	/**
	 * Set low
	 * @param telephonyFaxSummaryDetailsStruct low
	 * @return telephonyFaxSummaryDetailsStruct
	 */
	public function setLow($_low)
	{
		return ($this->low = $_low);
	}
	/**
	 * Get low
	 * @return OvhTypetelephonyFaxSummaryDetailsStruct
	 */
	public function getLow()
	{
		return $this->low;
	}
	/**
	 * Set high
	 * @param telephonyFaxSummaryDetailsStruct high
	 * @return telephonyFaxSummaryDetailsStruct
	 */
	public function setHigh($_high)
	{
		return ($this->high = $_high);
	}
	/**
	 * Get high
	 * @return OvhTypetelephonyFaxSummaryDetailsStruct
	 */
	public function getHigh()
	{
		return $this->high;
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