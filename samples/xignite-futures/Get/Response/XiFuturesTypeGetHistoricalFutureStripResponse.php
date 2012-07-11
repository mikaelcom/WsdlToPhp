<?php
/**
 * Class file for XiFuturesTypeGetHistoricalFutureStripResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetHistoricalFutureStripResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetHistoricalFutureStripResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetHistoricalFutureStripResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeStrip
	 */
	public $GetHistoricalFutureStripResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeStrip GetHistoricalFutureStripResult
	 * @return XiFuturesTypeGetHistoricalFutureStripResponse
	 */
	public function __construct($_GetHistoricalFutureStripResult = null)
	{
		parent::__construct(array('GetHistoricalFutureStripResult'=>$_GetHistoricalFutureStripResult));
	}
	/**
	 * Set GetHistoricalFutureStripResult
	 * @param Strip GetHistoricalFutureStripResult
	 * @return Strip
	 */
	public function setGetHistoricalFutureStripResult($_GetHistoricalFutureStripResult)
	{
		return ($this->GetHistoricalFutureStripResult = $_GetHistoricalFutureStripResult);
	}
	/**
	 * Get GetHistoricalFutureStripResult
	 * @return XiFuturesTypeStrip
	 */
	public function getGetHistoricalFutureStripResult()
	{
		return $this->GetHistoricalFutureStripResult;
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