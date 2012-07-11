<?php
/**
 * Class file for XiMetalsTypeGetLastRealTimeMetalQuoteGMTResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetLastRealTimeMetalQuoteGMTResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetLastRealTimeMetalQuoteGMTResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetLastRealTimeMetalQuoteGMTResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeMetalQuote
	 */
	public $GetLastRealTimeMetalQuoteGMTResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeMetalQuote GetLastRealTimeMetalQuoteGMTResult
	 * @return XiMetalsTypeGetLastRealTimeMetalQuoteGMTResponse
	 */
	public function __construct($_GetLastRealTimeMetalQuoteGMTResult = null)
	{
		parent::__construct(array('GetLastRealTimeMetalQuoteGMTResult'=>$_GetLastRealTimeMetalQuoteGMTResult));
	}
	/**
	 * Set GetLastRealTimeMetalQuoteGMTResult
	 * @param MetalQuote GetLastRealTimeMetalQuoteGMTResult
	 * @return MetalQuote
	 */
	public function setGetLastRealTimeMetalQuoteGMTResult($_GetLastRealTimeMetalQuoteGMTResult)
	{
		return ($this->GetLastRealTimeMetalQuoteGMTResult = $_GetLastRealTimeMetalQuoteGMTResult);
	}
	/**
	 * Get GetLastRealTimeMetalQuoteGMTResult
	 * @return XiMetalsTypeMetalQuote
	 */
	public function getGetLastRealTimeMetalQuoteGMTResult()
	{
		return $this->GetLastRealTimeMetalQuoteGMTResult;
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