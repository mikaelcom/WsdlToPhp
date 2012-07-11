<?php
/**
 * Class file for CdyneDemographicsQTypeGetNeighborhoodAgeGenderMaleInDataSetResponse
 * @date 03/07/2012
 */
/**
 * Class CdyneDemographicsQTypeGetNeighborhoodAgeGenderMaleInDataSetResponse
 * @date 03/07/2012
 */
class CdyneDemographicsQTypeGetNeighborhoodAgeGenderMaleInDataSetResponse extends CdyneDemographicsQWsdlClass
{
	/**
	 * The GetNeighborhoodAgeGenderMaleInDataSetResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var CdyneDemographicsQTypeCensusInfoWithDataSet
	 */
	public $GetNeighborhoodAgeGenderMaleInDataSetResult;
	/**
	 * Constructor
	 * @param CdyneDemographicsQTypeCensusInfoWithDataSet GetNeighborhoodAgeGenderMaleInDataSetResult
	 * @return CdyneDemographicsQTypeGetNeighborhoodAgeGenderMaleInDataSetResponse
	 */
	public function __construct($_GetNeighborhoodAgeGenderMaleInDataSetResult = null)
	{
		parent::__construct(array('GetNeighborhoodAgeGenderMaleInDataSetResult'=>$_GetNeighborhoodAgeGenderMaleInDataSetResult));
	}
	/**
	 * Set GetNeighborhoodAgeGenderMaleInDataSetResult
	 * @param CensusInfoWithDataSet GetNeighborhoodAgeGenderMaleInDataSetResult
	 * @return CensusInfoWithDataSet
	 */
	public function setGetNeighborhoodAgeGenderMaleInDataSetResult($_GetNeighborhoodAgeGenderMaleInDataSetResult)
	{
		return ($this->GetNeighborhoodAgeGenderMaleInDataSetResult = $_GetNeighborhoodAgeGenderMaleInDataSetResult);
	}
	/**
	 * Get GetNeighborhoodAgeGenderMaleInDataSetResult
	 * @return CdyneDemographicsQTypeCensusInfoWithDataSet
	 */
	public function getGetNeighborhoodAgeGenderMaleInDataSetResult()
	{
		return $this->GetNeighborhoodAgeGenderMaleInDataSetResult;
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