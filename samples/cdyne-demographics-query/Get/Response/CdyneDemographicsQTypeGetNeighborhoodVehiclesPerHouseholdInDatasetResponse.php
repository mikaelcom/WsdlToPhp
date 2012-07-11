<?php
/**
 * Class file for CdyneDemographicsQTypeGetNeighborhoodVehiclesPerHouseholdInDatasetResponse
 * @date 03/07/2012
 */
/**
 * Class CdyneDemographicsQTypeGetNeighborhoodVehiclesPerHouseholdInDatasetResponse
 * @date 03/07/2012
 */
class CdyneDemographicsQTypeGetNeighborhoodVehiclesPerHouseholdInDatasetResponse extends CdyneDemographicsQWsdlClass
{
	/**
	 * The GetNeighborhoodVehiclesPerHouseholdInDatasetResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var CdyneDemographicsQTypeCensusInfoWithDataSet
	 */
	public $GetNeighborhoodVehiclesPerHouseholdInDatasetResult;
	/**
	 * Constructor
	 * @param CdyneDemographicsQTypeCensusInfoWithDataSet GetNeighborhoodVehiclesPerHouseholdInDatasetResult
	 * @return CdyneDemographicsQTypeGetNeighborhoodVehiclesPerHouseholdInDatasetResponse
	 */
	public function __construct($_GetNeighborhoodVehiclesPerHouseholdInDatasetResult = null)
	{
		parent::__construct(array('GetNeighborhoodVehiclesPerHouseholdInDatasetResult'=>$_GetNeighborhoodVehiclesPerHouseholdInDatasetResult));
	}
	/**
	 * Set GetNeighborhoodVehiclesPerHouseholdInDatasetResult
	 * @param CensusInfoWithDataSet GetNeighborhoodVehiclesPerHouseholdInDatasetResult
	 * @return CensusInfoWithDataSet
	 */
	public function setGetNeighborhoodVehiclesPerHouseholdInDatasetResult($_GetNeighborhoodVehiclesPerHouseholdInDatasetResult)
	{
		return ($this->GetNeighborhoodVehiclesPerHouseholdInDatasetResult = $_GetNeighborhoodVehiclesPerHouseholdInDatasetResult);
	}
	/**
	 * Get GetNeighborhoodVehiclesPerHouseholdInDatasetResult
	 * @return CdyneDemographicsQTypeCensusInfoWithDataSet
	 */
	public function getGetNeighborhoodVehiclesPerHouseholdInDatasetResult()
	{
		return $this->GetNeighborhoodVehiclesPerHouseholdInDatasetResult;
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