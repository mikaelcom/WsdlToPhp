<?php
/**
 * Class file for CdyneDemographicsQTypeGetNeighborhoodAgeGenderFemaleInDataSetResponse
 * @date 03/07/2012
 */
/**
 * Class CdyneDemographicsQTypeGetNeighborhoodAgeGenderFemaleInDataSetResponse
 * @date 03/07/2012
 */
class CdyneDemographicsQTypeGetNeighborhoodAgeGenderFemaleInDataSetResponse extends CdyneDemographicsQWsdlClass
{
	/**
	 * The GetNeighborhoodAgeGenderFemaleInDataSetResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var CdyneDemographicsQTypeCensusInfoWithDataSet
	 */
	public $GetNeighborhoodAgeGenderFemaleInDataSetResult;
	/**
	 * Constructor
	 * @param CdyneDemographicsQTypeCensusInfoWithDataSet GetNeighborhoodAgeGenderFemaleInDataSetResult
	 * @return CdyneDemographicsQTypeGetNeighborhoodAgeGenderFemaleInDataSetResponse
	 */
	public function __construct($_GetNeighborhoodAgeGenderFemaleInDataSetResult = null)
	{
		parent::__construct(array('GetNeighborhoodAgeGenderFemaleInDataSetResult'=>$_GetNeighborhoodAgeGenderFemaleInDataSetResult));
	}
	/**
	 * Set GetNeighborhoodAgeGenderFemaleInDataSetResult
	 * @param CensusInfoWithDataSet GetNeighborhoodAgeGenderFemaleInDataSetResult
	 * @return CensusInfoWithDataSet
	 */
	public function setGetNeighborhoodAgeGenderFemaleInDataSetResult($_GetNeighborhoodAgeGenderFemaleInDataSetResult)
	{
		return ($this->GetNeighborhoodAgeGenderFemaleInDataSetResult = $_GetNeighborhoodAgeGenderFemaleInDataSetResult);
	}
	/**
	 * Get GetNeighborhoodAgeGenderFemaleInDataSetResult
	 * @return CdyneDemographicsQTypeCensusInfoWithDataSet
	 */
	public function getGetNeighborhoodAgeGenderFemaleInDataSetResult()
	{
		return $this->GetNeighborhoodAgeGenderFemaleInDataSetResult;
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