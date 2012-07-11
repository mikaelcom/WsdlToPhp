<?php
/**
 * Class file for XiRatesTypeGetLatestRateFamilyResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetLatestRateFamilyResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetLatestRateFamilyResponse extends XiRatesWsdlClass
{
	/**
	 * The GetLatestRateFamilyResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeArrayOfInterestRate
	 */
	public $GetLatestRateFamilyResult;
	/**
	 * Constructor
	 * @param XiRatesTypeArrayOfInterestRate GetLatestRateFamilyResult
	 * @return XiRatesTypeGetLatestRateFamilyResponse
	 */
	public function __construct($_GetLatestRateFamilyResult = null)
	{
		parent::__construct(array('GetLatestRateFamilyResult'=>new XiRatesTypeArrayOfInterestRate($_GetLatestRateFamilyResult)));
	}
	/**
	 * Set GetLatestRateFamilyResult
	 * @param ArrayOfInterestRate GetLatestRateFamilyResult
	 * @return ArrayOfInterestRate
	 */
	public function setGetLatestRateFamilyResult($_GetLatestRateFamilyResult)
	{
		return ($this->GetLatestRateFamilyResult = $_GetLatestRateFamilyResult);
	}
	/**
	 * Get GetLatestRateFamilyResult
	 * @return XiRatesTypeArrayOfInterestRate
	 */
	public function getGetLatestRateFamilyResult()
	{
		return $this->GetLatestRateFamilyResult;
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