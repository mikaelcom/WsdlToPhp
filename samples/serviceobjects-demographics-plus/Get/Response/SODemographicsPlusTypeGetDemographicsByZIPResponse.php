<?php
/**
 * Class file for SODemographicsPlusTypeGetDemographicsByZIPResponse
 * @date 06/07/2012
 */
/**
 * Class SODemographicsPlusTypeGetDemographicsByZIPResponse
 * @date 06/07/2012
 */
class SODemographicsPlusTypeGetDemographicsByZIPResponse extends SODemographicsPlusWsdlClass
{
	/**
	 * The GetDemographicsByZIPResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SODemographicsPlusTypeDemographicsByZipResult
	 */
	public $GetDemographicsByZIPResult;
	/**
	 * Constructor
	 * @param SODemographicsPlusTypeDemographicsByZipResult GetDemographicsByZIPResult
	 * @return SODemographicsPlusTypeGetDemographicsByZIPResponse
	 */
	public function __construct($_GetDemographicsByZIPResult = null)
	{
		parent::__construct(array('GetDemographicsByZIPResult'=>$_GetDemographicsByZIPResult));
	}
	/**
	 * Set GetDemographicsByZIPResult
	 * @param DemographicsByZipResult GetDemographicsByZIPResult
	 * @return DemographicsByZipResult
	 */
	public function setGetDemographicsByZIPResult($_GetDemographicsByZIPResult)
	{
		return ($this->GetDemographicsByZIPResult = $_GetDemographicsByZIPResult);
	}
	/**
	 * Get GetDemographicsByZIPResult
	 * @return SODemographicsPlusTypeDemographicsByZipResult
	 */
	public function getGetDemographicsByZIPResult()
	{
		return $this->GetDemographicsByZIPResult;
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