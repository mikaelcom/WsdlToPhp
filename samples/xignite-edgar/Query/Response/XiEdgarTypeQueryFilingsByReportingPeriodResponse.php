<?php
/**
 * Class file for XiEdgarTypeQueryFilingsByReportingPeriodResponse
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeQueryFilingsByReportingPeriodResponse
 * @date 08/07/2012
 */
class XiEdgarTypeQueryFilingsByReportingPeriodResponse extends XiEdgarWsdlClass
{
	/**
	 * The QueryFilingsByReportingPeriodResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeQueryResult
	 */
	public $QueryFilingsByReportingPeriodResult;
	/**
	 * Constructor
	 * @param XiEdgarTypeQueryResult QueryFilingsByReportingPeriodResult
	 * @return XiEdgarTypeQueryFilingsByReportingPeriodResponse
	 */
	public function __construct($_QueryFilingsByReportingPeriodResult = null)
	{
		parent::__construct(array('QueryFilingsByReportingPeriodResult'=>$_QueryFilingsByReportingPeriodResult));
	}
	/**
	 * Set QueryFilingsByReportingPeriodResult
	 * @param QueryResult QueryFilingsByReportingPeriodResult
	 * @return QueryResult
	 */
	public function setQueryFilingsByReportingPeriodResult($_QueryFilingsByReportingPeriodResult)
	{
		return ($this->QueryFilingsByReportingPeriodResult = $_QueryFilingsByReportingPeriodResult);
	}
	/**
	 * Get QueryFilingsByReportingPeriodResult
	 * @return XiEdgarTypeQueryResult
	 */
	public function getQueryFilingsByReportingPeriodResult()
	{
		return $this->QueryFilingsByReportingPeriodResult;
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