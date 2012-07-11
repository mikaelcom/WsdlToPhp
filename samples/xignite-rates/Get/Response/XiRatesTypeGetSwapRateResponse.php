<?php
/**
 * Class file for XiRatesTypeGetSwapRateResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetSwapRateResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetSwapRateResponse extends XiRatesWsdlClass
{
	/**
	 * The GetSwapRateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeSwapRate
	 */
	public $GetSwapRateResult;
	/**
	 * Constructor
	 * @param XiRatesTypeSwapRate GetSwapRateResult
	 * @return XiRatesTypeGetSwapRateResponse
	 */
	public function __construct($_GetSwapRateResult = null)
	{
		parent::__construct(array('GetSwapRateResult'=>$_GetSwapRateResult));
	}
	/**
	 * Set GetSwapRateResult
	 * @param SwapRate GetSwapRateResult
	 * @return SwapRate
	 */
	public function setGetSwapRateResult($_GetSwapRateResult)
	{
		return ($this->GetSwapRateResult = $_GetSwapRateResult);
	}
	/**
	 * Get GetSwapRateResult
	 * @return XiRatesTypeSwapRate
	 */
	public function getGetSwapRateResult()
	{
		return $this->GetSwapRateResult;
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