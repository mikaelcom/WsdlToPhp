<?php
/**
 * Class file for ATReportingTypeGetDownloadUrlResponse
 * @date 03/07/2012
 */
/**
 * Class ATReportingTypeGetDownloadUrlResponse
 * @date 03/07/2012
 */
class ATReportingTypeGetDownloadUrlResponse extends ATReportingWsdlClass
{
	/**
	 * The getDownloadUrlResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var ATReportingTypeXDownload
	 */
	public $getDownloadUrlResult;
	/**
	 * Constructor
	 * @param ATReportingTypeXDownload getDownloadUrlResult
	 * @return ATReportingTypeGetDownloadUrlResponse
	 */
	public function __construct($_getDownloadUrlResult = null)
	{
		parent::__construct(array('getDownloadUrlResult'=>$_getDownloadUrlResult));
	}
	/**
	 * Set getDownloadUrlResult
	 * @param XDownload getDownloadUrlResult
	 * @return XDownload
	 */
	public function setGetDownloadUrlResult($_getDownloadUrlResult)
	{
		return ($this->getDownloadUrlResult = $_getDownloadUrlResult);
	}
	/**
	 * Get getDownloadUrlResult
	 * @return ATReportingTypeXDownload
	 */
	public function getGetDownloadUrlResult()
	{
		return $this->getDownloadUrlResult;
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