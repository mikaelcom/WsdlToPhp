<?php
/**
 * Class file for SODemographicsPlusTypeDemographicsByZipResult
 * @date 06/07/2012
 */
/**
 * Class SODemographicsPlusTypeDemographicsByZipResult
 * @date 06/07/2012
 */
class SODemographicsPlusTypeDemographicsByZipResult extends SODemographicsPlusWsdlClass
{
	/**
	 * The DemographicResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var SODemographicsPlusTypeDemographicResult
	 */
	public $DemographicResult;
	/**
	 * Constructor
	 * @param SODemographicsPlusTypeDemographicResult DemographicResult
	 * @return SODemographicsPlusTypeDemographicsByZipResult
	 */
	public function __construct($_DemographicResult = null)
	{
		parent::__construct(array('DemographicResult'=>$_DemographicResult));
	}
	/**
	 * Set DemographicResult
	 * @param DemographicResult DemographicResult
	 * @return DemographicResult
	 */
	public function setDemographicResult($_DemographicResult)
	{
		return ($this->DemographicResult = $_DemographicResult);
	}
	/**
	 * Get DemographicResult
	 * @return SODemographicsPlusTypeDemographicResult
	 */
	public function getDemographicResult()
	{
		return $this->DemographicResult;
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