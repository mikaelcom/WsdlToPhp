<?php
/**
 * Class file for XiMetalsTypeGetLastRealTimeMetalQuotesGMTResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetLastRealTimeMetalQuotesGMTResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetLastRealTimeMetalQuotesGMTResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetLastRealTimeMetalQuotesGMTResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeArrayOfMetalQuote
	 */
	public $GetLastRealTimeMetalQuotesGMTResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeArrayOfMetalQuote GetLastRealTimeMetalQuotesGMTResult
	 * @return XiMetalsTypeGetLastRealTimeMetalQuotesGMTResponse
	 */
	public function __construct($_GetLastRealTimeMetalQuotesGMTResult = null)
	{
		parent::__construct(array('GetLastRealTimeMetalQuotesGMTResult'=>new XiMetalsTypeArrayOfMetalQuote($_GetLastRealTimeMetalQuotesGMTResult)));
	}
	/**
	 * Set GetLastRealTimeMetalQuotesGMTResult
	 * @param ArrayOfMetalQuote GetLastRealTimeMetalQuotesGMTResult
	 * @return ArrayOfMetalQuote
	 */
	public function setGetLastRealTimeMetalQuotesGMTResult($_GetLastRealTimeMetalQuotesGMTResult)
	{
		return ($this->GetLastRealTimeMetalQuotesGMTResult = $_GetLastRealTimeMetalQuotesGMTResult);
	}
	/**
	 * Get GetLastRealTimeMetalQuotesGMTResult
	 * @return XiMetalsTypeArrayOfMetalQuote
	 */
	public function getGetLastRealTimeMetalQuotesGMTResult()
	{
		return $this->GetLastRealTimeMetalQuotesGMTResult;
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