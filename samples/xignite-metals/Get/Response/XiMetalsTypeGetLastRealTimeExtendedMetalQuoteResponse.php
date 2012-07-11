<?php
/**
 * Class file for XiMetalsTypeGetLastRealTimeExtendedMetalQuoteResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetLastRealTimeExtendedMetalQuoteResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetLastRealTimeExtendedMetalQuoteResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetLastRealTimeExtendedMetalQuoteResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeExtendedMetalQuote
	 */
	public $GetLastRealTimeExtendedMetalQuoteResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeExtendedMetalQuote GetLastRealTimeExtendedMetalQuoteResult
	 * @return XiMetalsTypeGetLastRealTimeExtendedMetalQuoteResponse
	 */
	public function __construct($_GetLastRealTimeExtendedMetalQuoteResult = null)
	{
		parent::__construct(array('GetLastRealTimeExtendedMetalQuoteResult'=>$_GetLastRealTimeExtendedMetalQuoteResult));
	}
	/**
	 * Set GetLastRealTimeExtendedMetalQuoteResult
	 * @param ExtendedMetalQuote GetLastRealTimeExtendedMetalQuoteResult
	 * @return ExtendedMetalQuote
	 */
	public function setGetLastRealTimeExtendedMetalQuoteResult($_GetLastRealTimeExtendedMetalQuoteResult)
	{
		return ($this->GetLastRealTimeExtendedMetalQuoteResult = $_GetLastRealTimeExtendedMetalQuoteResult);
	}
	/**
	 * Get GetLastRealTimeExtendedMetalQuoteResult
	 * @return XiMetalsTypeExtendedMetalQuote
	 */
	public function getGetLastRealTimeExtendedMetalQuoteResult()
	{
		return $this->GetLastRealTimeExtendedMetalQuoteResult;
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