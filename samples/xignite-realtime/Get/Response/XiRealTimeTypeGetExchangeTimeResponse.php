<?php
/**
 * Class file for XiRealTimeTypeGetExchangeTimeResponse
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeGetExchangeTimeResponse
 * @date 08/07/2012
 */
class XiRealTimeTypeGetExchangeTimeResponse extends XiRealTimeWsdlClass
{
	/**
	 * The GetExchangeTimeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRealTimeTypeExchangeTime
	 */
	public $GetExchangeTimeResult;
	/**
	 * Constructor
	 * @param XiRealTimeTypeExchangeTime GetExchangeTimeResult
	 * @return XiRealTimeTypeGetExchangeTimeResponse
	 */
	public function __construct($_GetExchangeTimeResult = null)
	{
		parent::__construct(array('GetExchangeTimeResult'=>$_GetExchangeTimeResult));
	}
	/**
	 * Set GetExchangeTimeResult
	 * @param ExchangeTime GetExchangeTimeResult
	 * @return ExchangeTime
	 */
	public function setGetExchangeTimeResult($_GetExchangeTimeResult)
	{
		return ($this->GetExchangeTimeResult = $_GetExchangeTimeResult);
	}
	/**
	 * Get GetExchangeTimeResult
	 * @return XiRealTimeTypeExchangeTime
	 */
	public function getGetExchangeTimeResult()
	{
		return $this->GetExchangeTimeResult;
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