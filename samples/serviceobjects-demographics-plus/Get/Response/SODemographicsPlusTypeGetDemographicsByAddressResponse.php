<?php
/**
 * Class file for SODemographicsPlusTypeGetDemographicsByAddressResponse
 * @date 06/07/2012
 */
/**
 * Class SODemographicsPlusTypeGetDemographicsByAddressResponse
 * @date 06/07/2012
 */
class SODemographicsPlusTypeGetDemographicsByAddressResponse extends SODemographicsPlusWsdlClass
{
	/**
	 * The GetDemographicsByAddressResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SODemographicsPlusTypeDemographicResult
	 */
	public $GetDemographicsByAddressResult;
	/**
	 * Constructor
	 * @param SODemographicsPlusTypeDemographicResult GetDemographicsByAddressResult
	 * @return SODemographicsPlusTypeGetDemographicsByAddressResponse
	 */
	public function __construct($_GetDemographicsByAddressResult = null)
	{
		parent::__construct(array('GetDemographicsByAddressResult'=>$_GetDemographicsByAddressResult));
	}
	/**
	 * Set GetDemographicsByAddressResult
	 * @param DemographicResult GetDemographicsByAddressResult
	 * @return DemographicResult
	 */
	public function setGetDemographicsByAddressResult($_GetDemographicsByAddressResult)
	{
		return ($this->GetDemographicsByAddressResult = $_GetDemographicsByAddressResult);
	}
	/**
	 * Get GetDemographicsByAddressResult
	 * @return SODemographicsPlusTypeDemographicResult
	 */
	public function getGetDemographicsByAddressResult()
	{
		return $this->GetDemographicsByAddressResult;
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