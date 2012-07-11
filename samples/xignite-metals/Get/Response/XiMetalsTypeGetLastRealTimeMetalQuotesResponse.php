<?php
/**
 * Class file for XiMetalsTypeGetLastRealTimeMetalQuotesResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetLastRealTimeMetalQuotesResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetLastRealTimeMetalQuotesResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetLastRealTimeMetalQuotesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeArrayOfMetalQuote
	 */
	public $GetLastRealTimeMetalQuotesResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeArrayOfMetalQuote GetLastRealTimeMetalQuotesResult
	 * @return XiMetalsTypeGetLastRealTimeMetalQuotesResponse
	 */
	public function __construct($_GetLastRealTimeMetalQuotesResult = null)
	{
		parent::__construct(array('GetLastRealTimeMetalQuotesResult'=>new XiMetalsTypeArrayOfMetalQuote($_GetLastRealTimeMetalQuotesResult)));
	}
	/**
	 * Set GetLastRealTimeMetalQuotesResult
	 * @param ArrayOfMetalQuote GetLastRealTimeMetalQuotesResult
	 * @return ArrayOfMetalQuote
	 */
	public function setGetLastRealTimeMetalQuotesResult($_GetLastRealTimeMetalQuotesResult)
	{
		return ($this->GetLastRealTimeMetalQuotesResult = $_GetLastRealTimeMetalQuotesResult);
	}
	/**
	 * Get GetLastRealTimeMetalQuotesResult
	 * @return XiMetalsTypeArrayOfMetalQuote
	 */
	public function getGetLastRealTimeMetalQuotesResult()
	{
		return $this->GetLastRealTimeMetalQuotesResult;
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