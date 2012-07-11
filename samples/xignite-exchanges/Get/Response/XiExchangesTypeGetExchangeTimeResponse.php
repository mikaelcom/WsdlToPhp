<?php
/**
 * Class file for XiExchangesTypeGetExchangeTimeResponse
 * @date 08/07/2012
 */
/**
 * Class XiExchangesTypeGetExchangeTimeResponse
 * @date 08/07/2012
 */
class XiExchangesTypeGetExchangeTimeResponse extends XiExchangesWsdlClass
{
	/**
	 * The GetExchangeTimeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiExchangesTypeStringResult
	 */
	public $GetExchangeTimeResult;
	/**
	 * Constructor
	 * @param XiExchangesTypeStringResult GetExchangeTimeResult
	 * @return XiExchangesTypeGetExchangeTimeResponse
	 */
	public function __construct($_GetExchangeTimeResult = null)
	{
		parent::__construct(array('GetExchangeTimeResult'=>$_GetExchangeTimeResult));
	}
	/**
	 * Set GetExchangeTimeResult
	 * @param StringResult GetExchangeTimeResult
	 * @return StringResult
	 */
	public function setGetExchangeTimeResult($_GetExchangeTimeResult)
	{
		return ($this->GetExchangeTimeResult = $_GetExchangeTimeResult);
	}
	/**
	 * Get GetExchangeTimeResult
	 * @return XiExchangesTypeStringResult
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