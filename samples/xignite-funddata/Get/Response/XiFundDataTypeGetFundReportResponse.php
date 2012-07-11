<?php
/**
 * Class file for XiFundDataTypeGetFundReportResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeGetFundReportResponse
 * @date 08/07/2012
 */
class XiFundDataTypeGetFundReportResponse extends XiFundDataWsdlClass
{
	/**
	 * The GetFundReportResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundDataTypeReport
	 */
	public $GetFundReportResult;
	/**
	 * Constructor
	 * @param XiFundDataTypeReport GetFundReportResult
	 * @return XiFundDataTypeGetFundReportResponse
	 */
	public function __construct($_GetFundReportResult = null)
	{
		parent::__construct(array('GetFundReportResult'=>$_GetFundReportResult));
	}
	/**
	 * Set GetFundReportResult
	 * @param Report GetFundReportResult
	 * @return Report
	 */
	public function setGetFundReportResult($_GetFundReportResult)
	{
		return ($this->GetFundReportResult = $_GetFundReportResult);
	}
	/**
	 * Get GetFundReportResult
	 * @return XiFundDataTypeReport
	 */
	public function getGetFundReportResult()
	{
		return $this->GetFundReportResult;
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