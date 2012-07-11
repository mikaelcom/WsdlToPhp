<?php
/**
 * Class file for XiRatesTypeGetHistoricalRateFamilyResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetHistoricalRateFamilyResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetHistoricalRateFamilyResponse extends XiRatesWsdlClass
{
	/**
	 * The GetHistoricalRateFamilyResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeFamilyRates
	 */
	public $GetHistoricalRateFamilyResult;
	/**
	 * Constructor
	 * @param XiRatesTypeFamilyRates GetHistoricalRateFamilyResult
	 * @return XiRatesTypeGetHistoricalRateFamilyResponse
	 */
	public function __construct($_GetHistoricalRateFamilyResult = null)
	{
		parent::__construct(array('GetHistoricalRateFamilyResult'=>$_GetHistoricalRateFamilyResult));
	}
	/**
	 * Set GetHistoricalRateFamilyResult
	 * @param FamilyRates GetHistoricalRateFamilyResult
	 * @return FamilyRates
	 */
	public function setGetHistoricalRateFamilyResult($_GetHistoricalRateFamilyResult)
	{
		return ($this->GetHistoricalRateFamilyResult = $_GetHistoricalRateFamilyResult);
	}
	/**
	 * Get GetHistoricalRateFamilyResult
	 * @return XiRatesTypeFamilyRates
	 */
	public function getGetHistoricalRateFamilyResult()
	{
		return $this->GetHistoricalRateFamilyResult;
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