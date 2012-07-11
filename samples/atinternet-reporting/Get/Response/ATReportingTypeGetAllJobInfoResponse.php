<?php
/**
 * Class file for ATReportingTypeGetAllJobInfoResponse
 * @date 03/07/2012
 */
/**
 * Class ATReportingTypeGetAllJobInfoResponse
 * @date 03/07/2012
 */
class ATReportingTypeGetAllJobInfoResponse extends ATReportingWsdlClass
{
	/**
	 * The getAllJobInfoResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var ATReportingTypeArrayOfXDownload
	 */
	public $getAllJobInfoResult;
	/**
	 * Constructor
	 * @param ATReportingTypeArrayOfXDownload getAllJobInfoResult
	 * @return ATReportingTypeGetAllJobInfoResponse
	 */
	public function __construct($_getAllJobInfoResult = null)
	{
		parent::__construct(array('getAllJobInfoResult'=>new ATReportingTypeArrayOfXDownload($_getAllJobInfoResult)));
	}
	/**
	 * Set getAllJobInfoResult
	 * @param ArrayOfXDownload getAllJobInfoResult
	 * @return ArrayOfXDownload
	 */
	public function setGetAllJobInfoResult($_getAllJobInfoResult)
	{
		return ($this->getAllJobInfoResult = $_getAllJobInfoResult);
	}
	/**
	 * Get getAllJobInfoResult
	 * @return ATReportingTypeArrayOfXDownload
	 */
	public function getGetAllJobInfoResult()
	{
		return $this->getAllJobInfoResult;
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