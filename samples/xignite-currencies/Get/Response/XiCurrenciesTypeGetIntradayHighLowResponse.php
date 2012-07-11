<?php
/**
 * Class file for XiCurrenciesTypeGetIntradayHighLowResponse
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetIntradayHighLowResponse
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetIntradayHighLowResponse extends XiCurrenciesWsdlClass
{
	/**
	 * The GetIntradayHighLowResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeHighLowTick
	 */
	public $GetIntradayHighLowResult;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeHighLowTick GetIntradayHighLowResult
	 * @return XiCurrenciesTypeGetIntradayHighLowResponse
	 */
	public function __construct($_GetIntradayHighLowResult = null)
	{
		parent::__construct(array('GetIntradayHighLowResult'=>$_GetIntradayHighLowResult));
	}
	/**
	 * Set GetIntradayHighLowResult
	 * @param HighLowTick GetIntradayHighLowResult
	 * @return HighLowTick
	 */
	public function setGetIntradayHighLowResult($_GetIntradayHighLowResult)
	{
		return ($this->GetIntradayHighLowResult = $_GetIntradayHighLowResult);
	}
	/**
	 * Get GetIntradayHighLowResult
	 * @return XiCurrenciesTypeHighLowTick
	 */
	public function getGetIntradayHighLowResult()
	{
		return $this->GetIntradayHighLowResult;
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