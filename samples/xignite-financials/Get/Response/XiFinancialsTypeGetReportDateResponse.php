<?php
/**
 * Class file for XiFinancialsTypeGetReportDateResponse
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeGetReportDateResponse
 * @date 08/07/2012
 */
class XiFinancialsTypeGetReportDateResponse extends XiFinancialsWsdlClass
{
	/**
	 * The GetReportDateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeReportDate
	 */
	public $GetReportDateResult;
	/**
	 * Constructor
	 * @param XiFinancialsTypeReportDate GetReportDateResult
	 * @return XiFinancialsTypeGetReportDateResponse
	 */
	public function __construct($_GetReportDateResult = null)
	{
		parent::__construct(array('GetReportDateResult'=>$_GetReportDateResult));
	}
	/**
	 * Set GetReportDateResult
	 * @param ReportDate GetReportDateResult
	 * @return ReportDate
	 */
	public function setGetReportDateResult($_GetReportDateResult)
	{
		return ($this->GetReportDateResult = $_GetReportDateResult);
	}
	/**
	 * Get GetReportDateResult
	 * @return XiFinancialsTypeReportDate
	 */
	public function getGetReportDateResult()
	{
		return $this->GetReportDateResult;
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