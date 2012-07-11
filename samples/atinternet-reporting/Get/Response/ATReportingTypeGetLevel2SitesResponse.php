<?php
/**
 * Class file for ATReportingTypeGetLevel2SitesResponse
 * @date 03/07/2012
 */
/**
 * Class ATReportingTypeGetLevel2SitesResponse
 * @date 03/07/2012
 */
class ATReportingTypeGetLevel2SitesResponse extends ATReportingWsdlClass
{
	/**
	 * The getLevel2SitesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var ATReportingTypeArrayOfAT_Section
	 */
	public $getLevel2SitesResult;
	/**
	 * Constructor
	 * @param ATReportingTypeArrayOfAT_Section getLevel2SitesResult
	 * @return ATReportingTypeGetLevel2SitesResponse
	 */
	public function __construct($_getLevel2SitesResult = null)
	{
		parent::__construct(array('getLevel2SitesResult'=>new ATReportingTypeArrayOfAT_Section($_getLevel2SitesResult)));
	}
	/**
	 * Set getLevel2SitesResult
	 * @param ArrayOfAT_Section getLevel2SitesResult
	 * @return ArrayOfAT_Section
	 */
	public function setGetLevel2SitesResult($_getLevel2SitesResult)
	{
		return ($this->getLevel2SitesResult = $_getLevel2SitesResult);
	}
	/**
	 * Get getLevel2SitesResult
	 * @return ATReportingTypeArrayOfAT_Section
	 */
	public function getGetLevel2SitesResult()
	{
		return $this->getLevel2SitesResult;
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