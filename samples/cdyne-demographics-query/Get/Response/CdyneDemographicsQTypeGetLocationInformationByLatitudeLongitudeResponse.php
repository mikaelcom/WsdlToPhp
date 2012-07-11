<?php
/**
 * Class file for CdyneDemographicsQTypeGetLocationInformationByLatitudeLongitudeResponse
 * @date 03/07/2012
 */
/**
 * Class CdyneDemographicsQTypeGetLocationInformationByLatitudeLongitudeResponse
 * @date 03/07/2012
 */
class CdyneDemographicsQTypeGetLocationInformationByLatitudeLongitudeResponse extends CdyneDemographicsQWsdlClass
{
	/**
	 * The GetLocationInformationByLatitudeLongitudeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var CdyneDemographicsQTypeSummaryInformation
	 */
	public $GetLocationInformationByLatitudeLongitudeResult;
	/**
	 * Constructor
	 * @param CdyneDemographicsQTypeSummaryInformation GetLocationInformationByLatitudeLongitudeResult
	 * @return CdyneDemographicsQTypeGetLocationInformationByLatitudeLongitudeResponse
	 */
	public function __construct($_GetLocationInformationByLatitudeLongitudeResult = null)
	{
		parent::__construct(array('GetLocationInformationByLatitudeLongitudeResult'=>$_GetLocationInformationByLatitudeLongitudeResult));
	}
	/**
	 * Set GetLocationInformationByLatitudeLongitudeResult
	 * @param SummaryInformation GetLocationInformationByLatitudeLongitudeResult
	 * @return SummaryInformation
	 */
	public function setGetLocationInformationByLatitudeLongitudeResult($_GetLocationInformationByLatitudeLongitudeResult)
	{
		return ($this->GetLocationInformationByLatitudeLongitudeResult = $_GetLocationInformationByLatitudeLongitudeResult);
	}
	/**
	 * Get GetLocationInformationByLatitudeLongitudeResult
	 * @return CdyneDemographicsQTypeSummaryInformation
	 */
	public function getGetLocationInformationByLatitudeLongitudeResult()
	{
		return $this->GetLocationInformationByLatitudeLongitudeResult;
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