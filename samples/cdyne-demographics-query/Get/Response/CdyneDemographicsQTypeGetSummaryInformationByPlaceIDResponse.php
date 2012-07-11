<?php
/**
 * Class file for CdyneDemographicsQTypeGetSummaryInformationByPlaceIDResponse
 * @date 03/07/2012
 */
/**
 * Class CdyneDemographicsQTypeGetSummaryInformationByPlaceIDResponse
 * @date 03/07/2012
 */
class CdyneDemographicsQTypeGetSummaryInformationByPlaceIDResponse extends CdyneDemographicsQWsdlClass
{
	/**
	 * The GetSummaryInformationByPlaceIDResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var CdyneDemographicsQTypeSummaryInformation
	 */
	public $GetSummaryInformationByPlaceIDResult;
	/**
	 * Constructor
	 * @param CdyneDemographicsQTypeSummaryInformation GetSummaryInformationByPlaceIDResult
	 * @return CdyneDemographicsQTypeGetSummaryInformationByPlaceIDResponse
	 */
	public function __construct($_GetSummaryInformationByPlaceIDResult = null)
	{
		parent::__construct(array('GetSummaryInformationByPlaceIDResult'=>$_GetSummaryInformationByPlaceIDResult));
	}
	/**
	 * Set GetSummaryInformationByPlaceIDResult
	 * @param SummaryInformation GetSummaryInformationByPlaceIDResult
	 * @return SummaryInformation
	 */
	public function setGetSummaryInformationByPlaceIDResult($_GetSummaryInformationByPlaceIDResult)
	{
		return ($this->GetSummaryInformationByPlaceIDResult = $_GetSummaryInformationByPlaceIDResult);
	}
	/**
	 * Get GetSummaryInformationByPlaceIDResult
	 * @return CdyneDemographicsQTypeSummaryInformation
	 */
	public function getGetSummaryInformationByPlaceIDResult()
	{
		return $this->GetSummaryInformationByPlaceIDResult;
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