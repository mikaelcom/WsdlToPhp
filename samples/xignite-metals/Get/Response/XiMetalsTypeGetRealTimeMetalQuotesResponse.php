<?php
/**
 * Class file for XiMetalsTypeGetRealTimeMetalQuotesResponse
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetRealTimeMetalQuotesResponse
 * @date 08/07/2012
 */
class XiMetalsTypeGetRealTimeMetalQuotesResponse extends XiMetalsWsdlClass
{
	/**
	 * The GetRealTimeMetalQuotesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeArrayOfMetalQuote
	 */
	public $GetRealTimeMetalQuotesResult;
	/**
	 * Constructor
	 * @param XiMetalsTypeArrayOfMetalQuote GetRealTimeMetalQuotesResult
	 * @return XiMetalsTypeGetRealTimeMetalQuotesResponse
	 */
	public function __construct($_GetRealTimeMetalQuotesResult = null)
	{
		parent::__construct(array('GetRealTimeMetalQuotesResult'=>new XiMetalsTypeArrayOfMetalQuote($_GetRealTimeMetalQuotesResult)));
	}
	/**
	 * Set GetRealTimeMetalQuotesResult
	 * @param ArrayOfMetalQuote GetRealTimeMetalQuotesResult
	 * @return ArrayOfMetalQuote
	 */
	public function setGetRealTimeMetalQuotesResult($_GetRealTimeMetalQuotesResult)
	{
		return ($this->GetRealTimeMetalQuotesResult = $_GetRealTimeMetalQuotesResult);
	}
	/**
	 * Get GetRealTimeMetalQuotesResult
	 * @return XiMetalsTypeArrayOfMetalQuote
	 */
	public function getGetRealTimeMetalQuotesResult()
	{
		return $this->GetRealTimeMetalQuotesResult;
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