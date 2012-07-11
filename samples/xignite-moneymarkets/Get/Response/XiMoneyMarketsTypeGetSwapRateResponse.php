<?php
/**
 * Class file for XiMoneyMarketsTypeGetSwapRateResponse
 * @date 08/07/2012
 */
/**
 * Class XiMoneyMarketsTypeGetSwapRateResponse
 * @date 08/07/2012
 */
class XiMoneyMarketsTypeGetSwapRateResponse extends XiMoneyMarketsWsdlClass
{
	/**
	 * The GetSwapRateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMoneyMarketsTypeSwapRate
	 */
	public $GetSwapRateResult;
	/**
	 * Constructor
	 * @param XiMoneyMarketsTypeSwapRate GetSwapRateResult
	 * @return XiMoneyMarketsTypeGetSwapRateResponse
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
	 * @return XiMoneyMarketsTypeSwapRate
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