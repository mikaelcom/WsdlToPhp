<?php
/**
 * Class file for XiMetalsTypeGetLastRealTimeMetalQuoteResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetLastRealTimeMetalQuoteResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetLastRealTimeMetalQuoteResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetLastRealTimeMetalQuoteResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeMetalQuote
	 */
	public $GetLastRealTimeMetalQuoteResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeMetalQuote GetLastRealTimeMetalQuoteResult
	 * @return XiMetalsTypeGetLastRealTimeMetalQuoteResponse
	 */
	public function __construct($_GetLastRealTimeMetalQuoteResult = null)
	{
		parent::__construct(array('GetLastRealTimeMetalQuoteResult'=>$_GetLastRealTimeMetalQuoteResult));
	}
	/**
	 * Set GetLastRealTimeMetalQuoteResult
	 * @param MetalQuote GetLastRealTimeMetalQuoteResult
	 * @return MetalQuote
	 */
	public function setGetLastRealTimeMetalQuoteResult($_GetLastRealTimeMetalQuoteResult)
	{
		return ($this->GetLastRealTimeMetalQuoteResult = $_GetLastRealTimeMetalQuoteResult);
	}
	/**
	 * Get GetLastRealTimeMetalQuoteResult
	 * @return XiMetalsTypeMetalQuote
	 */
	public function getGetLastRealTimeMetalQuoteResult()
	{
		return $this->GetLastRealTimeMetalQuoteResult;
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