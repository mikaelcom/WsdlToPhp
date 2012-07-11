<?php
/**
 * Class file for XiFuturesTypeGetDelayedFutureStripResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetDelayedFutureStripResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetDelayedFutureStripResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetDelayedFutureStripResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeStrip
	 */
	public $GetDelayedFutureStripResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeStrip GetDelayedFutureStripResult
	 * @return XiFuturesTypeGetDelayedFutureStripResponse
	 */
	public function __construct($_GetDelayedFutureStripResult = null)
	{
		parent::__construct(array('GetDelayedFutureStripResult'=>$_GetDelayedFutureStripResult));
	}
	/**
	 * Set GetDelayedFutureStripResult
	 * @param Strip GetDelayedFutureStripResult
	 * @return Strip
	 */
	public function setGetDelayedFutureStripResult($_GetDelayedFutureStripResult)
	{
		return ($this->GetDelayedFutureStripResult = $_GetDelayedFutureStripResult);
	}
	/**
	 * Get GetDelayedFutureStripResult
	 * @return XiFuturesTypeStrip
	 */
	public function getGetDelayedFutureStripResult()
	{
		return $this->GetDelayedFutureStripResult;
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