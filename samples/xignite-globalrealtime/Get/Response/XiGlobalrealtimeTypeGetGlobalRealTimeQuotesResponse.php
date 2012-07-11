<?php
/**
 * Class file for XiGlobalrealtimeTypeGetGlobalRealTimeQuotesResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalrealtimeTypeGetGlobalRealTimeQuotesResponse
 * @date 08/07/2012
 */
class XiGlobalrealtimeTypeGetGlobalRealTimeQuotesResponse extends XiGlobalrealtimeWsdlClass
{
	/**
	 * The GetGlobalRealTimeQuotesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalrealtimeTypeArrayOfGlobalQuote
	 */
	public $GetGlobalRealTimeQuotesResult;
	/**
	 * Constructor
	 * @param XiGlobalrealtimeTypeArrayOfGlobalQuote GetGlobalRealTimeQuotesResult
	 * @return XiGlobalrealtimeTypeGetGlobalRealTimeQuotesResponse
	 */
	public function __construct($_GetGlobalRealTimeQuotesResult = null)
	{
		parent::__construct(array('GetGlobalRealTimeQuotesResult'=>new XiGlobalrealtimeTypeArrayOfGlobalQuote($_GetGlobalRealTimeQuotesResult)));
	}
	/**
	 * Set GetGlobalRealTimeQuotesResult
	 * @param ArrayOfGlobalQuote GetGlobalRealTimeQuotesResult
	 * @return ArrayOfGlobalQuote
	 */
	public function setGetGlobalRealTimeQuotesResult($_GetGlobalRealTimeQuotesResult)
	{
		return ($this->GetGlobalRealTimeQuotesResult = $_GetGlobalRealTimeQuotesResult);
	}
	/**
	 * Get GetGlobalRealTimeQuotesResult
	 * @return XiGlobalrealtimeTypeArrayOfGlobalQuote
	 */
	public function getGetGlobalRealTimeQuotesResult()
	{
		return $this->GetGlobalRealTimeQuotesResult;
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