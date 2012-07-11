<?php
/**
 * Class file for ATReportingTypeGetAPISegmentsResponse
 * @date 03/07/2012
 */
/**
 * Class ATReportingTypeGetAPISegmentsResponse
 * @date 03/07/2012
 */
class ATReportingTypeGetAPISegmentsResponse extends ATReportingWsdlClass
{
	/**
	 * The getAPISegmentsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var ATReportingTypeArrayOfXNXSegment
	 */
	public $getAPISegmentsResult;
	/**
	 * Constructor
	 * @param ATReportingTypeArrayOfXNXSegment getAPISegmentsResult
	 * @return ATReportingTypeGetAPISegmentsResponse
	 */
	public function __construct($_getAPISegmentsResult = null)
	{
		parent::__construct(array('getAPISegmentsResult'=>new ATReportingTypeArrayOfXNXSegment($_getAPISegmentsResult)));
	}
	/**
	 * Set getAPISegmentsResult
	 * @param ArrayOfXNXSegment getAPISegmentsResult
	 * @return ArrayOfXNXSegment
	 */
	public function setGetAPISegmentsResult($_getAPISegmentsResult)
	{
		return ($this->getAPISegmentsResult = $_getAPISegmentsResult);
	}
	/**
	 * Get getAPISegmentsResult
	 * @return ATReportingTypeArrayOfXNXSegment
	 */
	public function getGetAPISegmentsResult()
	{
		return $this->getAPISegmentsResult;
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