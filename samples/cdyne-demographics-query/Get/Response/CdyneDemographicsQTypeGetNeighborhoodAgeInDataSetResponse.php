<?php
/**
 * Class file for CdyneDemographicsQTypeGetNeighborhoodAgeInDataSetResponse
 * @date 03/07/2012
 */
/**
 * Class CdyneDemographicsQTypeGetNeighborhoodAgeInDataSetResponse
 * @date 03/07/2012
 */
class CdyneDemographicsQTypeGetNeighborhoodAgeInDataSetResponse extends CdyneDemographicsQWsdlClass
{
	/**
	 * The GetNeighborhoodAgeInDataSetResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var CdyneDemographicsQTypeCensusInfoWithDataSet
	 */
	public $GetNeighborhoodAgeInDataSetResult;
	/**
	 * Constructor
	 * @param CdyneDemographicsQTypeCensusInfoWithDataSet GetNeighborhoodAgeInDataSetResult
	 * @return CdyneDemographicsQTypeGetNeighborhoodAgeInDataSetResponse
	 */
	public function __construct($_GetNeighborhoodAgeInDataSetResult = null)
	{
		parent::__construct(array('GetNeighborhoodAgeInDataSetResult'=>$_GetNeighborhoodAgeInDataSetResult));
	}
	/**
	 * Set GetNeighborhoodAgeInDataSetResult
	 * @param CensusInfoWithDataSet GetNeighborhoodAgeInDataSetResult
	 * @return CensusInfoWithDataSet
	 */
	public function setGetNeighborhoodAgeInDataSetResult($_GetNeighborhoodAgeInDataSetResult)
	{
		return ($this->GetNeighborhoodAgeInDataSetResult = $_GetNeighborhoodAgeInDataSetResult);
	}
	/**
	 * Get GetNeighborhoodAgeInDataSetResult
	 * @return CdyneDemographicsQTypeCensusInfoWithDataSet
	 */
	public function getGetNeighborhoodAgeInDataSetResult()
	{
		return $this->GetNeighborhoodAgeInDataSetResult;
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