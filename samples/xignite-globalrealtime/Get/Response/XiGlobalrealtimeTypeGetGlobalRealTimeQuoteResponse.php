<?php
/**
 * Class file for XiGlobalrealtimeTypeGetGlobalRealTimeQuoteResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalrealtimeTypeGetGlobalRealTimeQuoteResponse
 * @date 08/07/2012
 */
class XiGlobalrealtimeTypeGetGlobalRealTimeQuoteResponse extends XiGlobalrealtimeWsdlClass
{
	/**
	 * The GetGlobalRealTimeQuoteResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalrealtimeTypeGlobalQuote
	 */
	public $GetGlobalRealTimeQuoteResult;
	/**
	 * Constructor
	 * @param XiGlobalrealtimeTypeGlobalQuote GetGlobalRealTimeQuoteResult
	 * @return XiGlobalrealtimeTypeGetGlobalRealTimeQuoteResponse
	 */
	public function __construct($_GetGlobalRealTimeQuoteResult = null)
	{
		parent::__construct(array('GetGlobalRealTimeQuoteResult'=>$_GetGlobalRealTimeQuoteResult));
	}
	/**
	 * Set GetGlobalRealTimeQuoteResult
	 * @param GlobalQuote GetGlobalRealTimeQuoteResult
	 * @return GlobalQuote
	 */
	public function setGetGlobalRealTimeQuoteResult($_GetGlobalRealTimeQuoteResult)
	{
		return ($this->GetGlobalRealTimeQuoteResult = $_GetGlobalRealTimeQuoteResult);
	}
	/**
	 * Get GetGlobalRealTimeQuoteResult
	 * @return XiGlobalrealtimeTypeGlobalQuote
	 */
	public function getGetGlobalRealTimeQuoteResult()
	{
		return $this->GetGlobalRealTimeQuoteResult;
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