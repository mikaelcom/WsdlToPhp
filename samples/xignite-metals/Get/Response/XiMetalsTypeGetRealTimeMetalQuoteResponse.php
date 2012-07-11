<?php
/**
 * Class file for XiMetalsTypeGetRealTimeMetalQuoteResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetRealTimeMetalQuoteResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetRealTimeMetalQuoteResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetRealTimeMetalQuoteResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeMetalQuote
	 */
	public $GetRealTimeMetalQuoteResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeMetalQuote GetRealTimeMetalQuoteResult
	 * @return XiMetalsTypeGetRealTimeMetalQuoteResponse
	 */
	public function __construct($_GetRealTimeMetalQuoteResult = null)
	{
		parent::__construct(array('GetRealTimeMetalQuoteResult'=>$_GetRealTimeMetalQuoteResult));
	}
	/**
	 * Set GetRealTimeMetalQuoteResult
	 * @param MetalQuote GetRealTimeMetalQuoteResult
	 * @return MetalQuote
	 */
	public function setGetRealTimeMetalQuoteResult($_GetRealTimeMetalQuoteResult)
	{
		return ($this->GetRealTimeMetalQuoteResult = $_GetRealTimeMetalQuoteResult);
	}
	/**
	 * Get GetRealTimeMetalQuoteResult
	 * @return XiMetalsTypeMetalQuote
	 */
	public function getGetRealTimeMetalQuoteResult()
	{
		return $this->GetRealTimeMetalQuoteResult;
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