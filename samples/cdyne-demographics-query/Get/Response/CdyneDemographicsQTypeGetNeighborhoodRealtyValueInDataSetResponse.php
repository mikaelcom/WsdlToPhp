<?php
/**
 * Class file for CdyneDemographicsQTypeGetNeighborhoodRealtyValueInDataSetResponse
 * @date 03/07/2012
 */
/**
 * Class CdyneDemographicsQTypeGetNeighborhoodRealtyValueInDataSetResponse
 * @date 03/07/2012
 */
class CdyneDemographicsQTypeGetNeighborhoodRealtyValueInDataSetResponse extends CdyneDemographicsQWsdlClass
{
	/**
	 * The GetNeighborhoodRealtyValueInDataSetResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var CdyneDemographicsQTypeCensusInfoWithDataSet
	 */
	public $GetNeighborhoodRealtyValueInDataSetResult;
	/**
	 * Constructor
	 * @param CdyneDemographicsQTypeCensusInfoWithDataSet GetNeighborhoodRealtyValueInDataSetResult
	 * @return CdyneDemographicsQTypeGetNeighborhoodRealtyValueInDataSetResponse
	 */
	public function __construct($_GetNeighborhoodRealtyValueInDataSetResult = null)
	{
		parent::__construct(array('GetNeighborhoodRealtyValueInDataSetResult'=>$_GetNeighborhoodRealtyValueInDataSetResult));
	}
	/**
	 * Set GetNeighborhoodRealtyValueInDataSetResult
	 * @param CensusInfoWithDataSet GetNeighborhoodRealtyValueInDataSetResult
	 * @return CensusInfoWithDataSet
	 */
	public function setGetNeighborhoodRealtyValueInDataSetResult($_GetNeighborhoodRealtyValueInDataSetResult)
	{
		return ($this->GetNeighborhoodRealtyValueInDataSetResult = $_GetNeighborhoodRealtyValueInDataSetResult);
	}
	/**
	 * Get GetNeighborhoodRealtyValueInDataSetResult
	 * @return CdyneDemographicsQTypeCensusInfoWithDataSet
	 */
	public function getGetNeighborhoodRealtyValueInDataSetResult()
	{
		return $this->GetNeighborhoodRealtyValueInDataSetResult;
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