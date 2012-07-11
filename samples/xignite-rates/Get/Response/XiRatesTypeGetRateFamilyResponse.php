<?php
/**
 * Class file for XiRatesTypeGetRateFamilyResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetRateFamilyResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetRateFamilyResponse extends XiRatesWsdlClass
{
	/**
	 * The GetRateFamilyResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeArrayOfInterestRate
	 */
	public $GetRateFamilyResult;
	/**
	 * Constructor
	 * @param XiRatesTypeArrayOfInterestRate GetRateFamilyResult
	 * @return XiRatesTypeGetRateFamilyResponse
	 */
	public function __construct($_GetRateFamilyResult = null)
	{
		parent::__construct(array('GetRateFamilyResult'=>new XiRatesTypeArrayOfInterestRate($_GetRateFamilyResult)));
	}
	/**
	 * Set GetRateFamilyResult
	 * @param ArrayOfInterestRate GetRateFamilyResult
	 * @return ArrayOfInterestRate
	 */
	public function setGetRateFamilyResult($_GetRateFamilyResult)
	{
		return ($this->GetRateFamilyResult = $_GetRateFamilyResult);
	}
	/**
	 * Get GetRateFamilyResult
	 * @return XiRatesTypeArrayOfInterestRate
	 */
	public function getGetRateFamilyResult()
	{
		return $this->GetRateFamilyResult;
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