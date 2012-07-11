<?php
/**
 * Class file for XiExchangesTypeGetExchangeDayResponse
 * @date 08/07/2012
 */
/**
 * Class XiExchangesTypeGetExchangeDayResponse
 * @date 08/07/2012
 */
class XiExchangesTypeGetExchangeDayResponse extends XiExchangesWsdlClass
{
	/**
	 * The GetExchangeDayResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiExchangesTypeStringResult
	 */
	public $GetExchangeDayResult;
	/**
	 * Constructor
	 * @param XiExchangesTypeStringResult GetExchangeDayResult
	 * @return XiExchangesTypeGetExchangeDayResponse
	 */
	public function __construct($_GetExchangeDayResult = null)
	{
		parent::__construct(array('GetExchangeDayResult'=>$_GetExchangeDayResult));
	}
	/**
	 * Set GetExchangeDayResult
	 * @param StringResult GetExchangeDayResult
	 * @return StringResult
	 */
	public function setGetExchangeDayResult($_GetExchangeDayResult)
	{
		return ($this->GetExchangeDayResult = $_GetExchangeDayResult);
	}
	/**
	 * Get GetExchangeDayResult
	 * @return XiExchangesTypeStringResult
	 */
	public function getGetExchangeDayResult()
	{
		return $this->GetExchangeDayResult;
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