<?php
/**
 * Class file for ATReportingTypeQueryReportResponse
 * @date 03/07/2012
 */
/**
 * Class ATReportingTypeQueryReportResponse
 * @date 03/07/2012
 */
class ATReportingTypeQueryReportResponse extends ATReportingWsdlClass
{
	/**
	 * The queryReportResult
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $queryReportResult;
	/**
	 * Constructor
	 * @param int queryReportResult
	 * @return ATReportingTypeQueryReportResponse
	 */
	public function __construct($_queryReportResult)
	{
		parent::__construct(array('queryReportResult'=>$_queryReportResult));
	}
	/**
	 * Set queryReportResult
	 * @param int queryReportResult
	 * @return int
	 */
	public function setQueryReportResult($_queryReportResult)
	{
		return ($this->queryReportResult = $_queryReportResult);
	}
	/**
	 * Get queryReportResult
	 * @return int
	 */
	public function getQueryReportResult()
	{
		return $this->queryReportResult;
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