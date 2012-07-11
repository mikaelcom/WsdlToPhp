<?php
/**
 * Class file for CdyneDemographicsQTypeGetNeighborhoodYearStructuresBuiltResponse
 * @date 03/07/2012
 */
/**
 * Class CdyneDemographicsQTypeGetNeighborhoodYearStructuresBuiltResponse
 * @date 03/07/2012
 */
class CdyneDemographicsQTypeGetNeighborhoodYearStructuresBuiltResponse extends CdyneDemographicsQWsdlClass
{
	/**
	 * The GetNeighborhoodYearStructuresBuiltResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var CdyneDemographicsQTypeCensusInfoWithDataSet
	 */
	public $GetNeighborhoodYearStructuresBuiltResult;
	/**
	 * Constructor
	 * @param CdyneDemographicsQTypeCensusInfoWithDataSet GetNeighborhoodYearStructuresBuiltResult
	 * @return CdyneDemographicsQTypeGetNeighborhoodYearStructuresBuiltResponse
	 */
	public function __construct($_GetNeighborhoodYearStructuresBuiltResult = null)
	{
		parent::__construct(array('GetNeighborhoodYearStructuresBuiltResult'=>$_GetNeighborhoodYearStructuresBuiltResult));
	}
	/**
	 * Set GetNeighborhoodYearStructuresBuiltResult
	 * @param CensusInfoWithDataSet GetNeighborhoodYearStructuresBuiltResult
	 * @return CensusInfoWithDataSet
	 */
	public function setGetNeighborhoodYearStructuresBuiltResult($_GetNeighborhoodYearStructuresBuiltResult)
	{
		return ($this->GetNeighborhoodYearStructuresBuiltResult = $_GetNeighborhoodYearStructuresBuiltResult);
	}
	/**
	 * Get GetNeighborhoodYearStructuresBuiltResult
	 * @return CdyneDemographicsQTypeCensusInfoWithDataSet
	 */
	public function getGetNeighborhoodYearStructuresBuiltResult()
	{
		return $this->GetNeighborhoodYearStructuresBuiltResult;
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