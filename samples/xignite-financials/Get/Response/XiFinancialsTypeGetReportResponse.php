<?php
/**
 * Class file for XiFinancialsTypeGetReportResponse
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeGetReportResponse
 * @date 08/07/2012
 */
class XiFinancialsTypeGetReportResponse extends XiFinancialsWsdlClass
{
	/**
	 * The GetReportResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeReport
	 */
	public $GetReportResult;
	/**
	 * Constructor
	 * @param XiFinancialsTypeReport GetReportResult
	 * @return XiFinancialsTypeGetReportResponse
	 */
	public function __construct($_GetReportResult = null)
	{
		parent::__construct(array('GetReportResult'=>$_GetReportResult));
	}
	/**
	 * Set GetReportResult
	 * @param Report GetReportResult
	 * @return Report
	 */
	public function setGetReportResult($_GetReportResult)
	{
		return ($this->GetReportResult = $_GetReportResult);
	}
	/**
	 * Get GetReportResult
	 * @return XiFinancialsTypeReport
	 */
	public function getGetReportResult()
	{
		return $this->GetReportResult;
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