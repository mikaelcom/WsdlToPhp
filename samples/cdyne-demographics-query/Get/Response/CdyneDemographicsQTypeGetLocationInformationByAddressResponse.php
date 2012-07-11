<?php
/**
 * Class file for CdyneDemographicsQTypeGetLocationInformationByAddressResponse
 * @date 03/07/2012
 */
/**
 * Class CdyneDemographicsQTypeGetLocationInformationByAddressResponse
 * @date 03/07/2012
 */
class CdyneDemographicsQTypeGetLocationInformationByAddressResponse extends CdyneDemographicsQWsdlClass
{
	/**
	 * The GetLocationInformationByAddressResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var CdyneDemographicsQTypeSummaryInformation
	 */
	public $GetLocationInformationByAddressResult;
	/**
	 * Constructor
	 * @param CdyneDemographicsQTypeSummaryInformation GetLocationInformationByAddressResult
	 * @return CdyneDemographicsQTypeGetLocationInformationByAddressResponse
	 */
	public function __construct($_GetLocationInformationByAddressResult = null)
	{
		parent::__construct(array('GetLocationInformationByAddressResult'=>$_GetLocationInformationByAddressResult));
	}
	/**
	 * Set GetLocationInformationByAddressResult
	 * @param SummaryInformation GetLocationInformationByAddressResult
	 * @return SummaryInformation
	 */
	public function setGetLocationInformationByAddressResult($_GetLocationInformationByAddressResult)
	{
		return ($this->GetLocationInformationByAddressResult = $_GetLocationInformationByAddressResult);
	}
	/**
	 * Get GetLocationInformationByAddressResult
	 * @return CdyneDemographicsQTypeSummaryInformation
	 */
	public function getGetLocationInformationByAddressResult()
	{
		return $this->GetLocationInformationByAddressResult;
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