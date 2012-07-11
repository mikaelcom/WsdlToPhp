<?php
/**
 * Class file for XiRatesTypeGetSwapRateFamilyResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetSwapRateFamilyResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetSwapRateFamilyResponse extends XiRatesWsdlClass
{
	/**
	 * The GetSwapRateFamilyResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeArrayOfSwapRate
	 */
	public $GetSwapRateFamilyResult;
	/**
	 * Constructor
	 * @param XiRatesTypeArrayOfSwapRate GetSwapRateFamilyResult
	 * @return XiRatesTypeGetSwapRateFamilyResponse
	 */
	public function __construct($_GetSwapRateFamilyResult = null)
	{
		parent::__construct(array('GetSwapRateFamilyResult'=>new XiRatesTypeArrayOfSwapRate($_GetSwapRateFamilyResult)));
	}
	/**
	 * Set GetSwapRateFamilyResult
	 * @param ArrayOfSwapRate GetSwapRateFamilyResult
	 * @return ArrayOfSwapRate
	 */
	public function setGetSwapRateFamilyResult($_GetSwapRateFamilyResult)
	{
		return ($this->GetSwapRateFamilyResult = $_GetSwapRateFamilyResult);
	}
	/**
	 * Get GetSwapRateFamilyResult
	 * @return XiRatesTypeArrayOfSwapRate
	 */
	public function getGetSwapRateFamilyResult()
	{
		return $this->GetSwapRateFamilyResult;
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