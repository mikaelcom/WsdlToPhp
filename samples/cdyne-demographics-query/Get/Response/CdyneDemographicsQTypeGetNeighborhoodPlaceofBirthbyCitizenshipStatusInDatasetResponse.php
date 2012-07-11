<?php
/**
 * Class file for CdyneDemographicsQTypeGetNeighborhoodPlaceofBirthbyCitizenshipStatusInDatasetResponse
 * @date 03/07/2012
 */
/**
 * Class CdyneDemographicsQTypeGetNeighborhoodPlaceofBirthbyCitizenshipStatusInDatasetResponse
 * @date 03/07/2012
 */
class CdyneDemographicsQTypeGetNeighborhoodPlaceofBirthbyCitizenshipStatusInDatasetResponse extends CdyneDemographicsQWsdlClass
{
	/**
	 * The GetNeighborhoodPlaceofBirthbyCitizenshipStatusInDatasetResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var CdyneDemographicsQTypeCensusInfoWithDataSet
	 */
	public $GetNeighborhoodPlaceofBirthbyCitizenshipStatusInDatasetResult;
	/**
	 * Constructor
	 * @param CdyneDemographicsQTypeCensusInfoWithDataSet GetNeighborhoodPlaceofBirthbyCitizenshipStatusInDatasetResult
	 * @return CdyneDemographicsQTypeGetNeighborhoodPlaceofBirthbyCitizenshipStatusInDatasetResponse
	 */
	public function __construct($_GetNeighborhoodPlaceofBirthbyCitizenshipStatusInDatasetResult = null)
	{
		parent::__construct(array('GetNeighborhoodPlaceofBirthbyCitizenshipStatusInDatasetResult'=>$_GetNeighborhoodPlaceofBirthbyCitizenshipStatusInDatasetResult));
	}
	/**
	 * Set GetNeighborhoodPlaceofBirthbyCitizenshipStatusInDatasetResult
	 * @param CensusInfoWithDataSet GetNeighborhoodPlaceofBirthbyCitizenshipStatusInDatasetResult
	 * @return CensusInfoWithDataSet
	 */
	public function setGetNeighborhoodPlaceofBirthbyCitizenshipStatusInDatasetResult($_GetNeighborhoodPlaceofBirthbyCitizenshipStatusInDatasetResult)
	{
		return ($this->GetNeighborhoodPlaceofBirthbyCitizenshipStatusInDatasetResult = $_GetNeighborhoodPlaceofBirthbyCitizenshipStatusInDatasetResult);
	}
	/**
	 * Get GetNeighborhoodPlaceofBirthbyCitizenshipStatusInDatasetResult
	 * @return CdyneDemographicsQTypeCensusInfoWithDataSet
	 */
	public function getGetNeighborhoodPlaceofBirthbyCitizenshipStatusInDatasetResult()
	{
		return $this->GetNeighborhoodPlaceofBirthbyCitizenshipStatusInDatasetResult;
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