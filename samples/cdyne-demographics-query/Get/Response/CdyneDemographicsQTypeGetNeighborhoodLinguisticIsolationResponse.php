<?php
/**
 * Class file for CdyneDemographicsQTypeGetNeighborhoodLinguisticIsolationResponse
 * @date 03/07/2012
 */
/**
 * Class CdyneDemographicsQTypeGetNeighborhoodLinguisticIsolationResponse
 * @date 03/07/2012
 */
class CdyneDemographicsQTypeGetNeighborhoodLinguisticIsolationResponse extends CdyneDemographicsQWsdlClass
{
	/**
	 * The GetNeighborhoodLinguisticIsolationResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var CdyneDemographicsQTypeCensusInfoWithDataSet
	 */
	public $GetNeighborhoodLinguisticIsolationResult;
	/**
	 * Constructor
	 * @param CdyneDemographicsQTypeCensusInfoWithDataSet GetNeighborhoodLinguisticIsolationResult
	 * @return CdyneDemographicsQTypeGetNeighborhoodLinguisticIsolationResponse
	 */
	public function __construct($_GetNeighborhoodLinguisticIsolationResult = null)
	{
		parent::__construct(array('GetNeighborhoodLinguisticIsolationResult'=>$_GetNeighborhoodLinguisticIsolationResult));
	}
	/**
	 * Set GetNeighborhoodLinguisticIsolationResult
	 * @param CensusInfoWithDataSet GetNeighborhoodLinguisticIsolationResult
	 * @return CensusInfoWithDataSet
	 */
	public function setGetNeighborhoodLinguisticIsolationResult($_GetNeighborhoodLinguisticIsolationResult)
	{
		return ($this->GetNeighborhoodLinguisticIsolationResult = $_GetNeighborhoodLinguisticIsolationResult);
	}
	/**
	 * Get GetNeighborhoodLinguisticIsolationResult
	 * @return CdyneDemographicsQTypeCensusInfoWithDataSet
	 */
	public function getGetNeighborhoodLinguisticIsolationResult()
	{
		return $this->GetNeighborhoodLinguisticIsolationResult;
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