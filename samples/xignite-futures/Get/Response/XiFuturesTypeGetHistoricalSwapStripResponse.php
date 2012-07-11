<?php
/**
 * Class file for XiFuturesTypeGetHistoricalSwapStripResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetHistoricalSwapStripResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetHistoricalSwapStripResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetHistoricalSwapStripResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeStrip
	 */
	public $GetHistoricalSwapStripResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeStrip GetHistoricalSwapStripResult
	 * @return XiFuturesTypeGetHistoricalSwapStripResponse
	 */
	public function __construct($_GetHistoricalSwapStripResult = null)
	{
		parent::__construct(array('GetHistoricalSwapStripResult'=>$_GetHistoricalSwapStripResult));
	}
	/**
	 * Set GetHistoricalSwapStripResult
	 * @param Strip GetHistoricalSwapStripResult
	 * @return Strip
	 */
	public function setGetHistoricalSwapStripResult($_GetHistoricalSwapStripResult)
	{
		return ($this->GetHistoricalSwapStripResult = $_GetHistoricalSwapStripResult);
	}
	/**
	 * Get GetHistoricalSwapStripResult
	 * @return XiFuturesTypeStrip
	 */
	public function getGetHistoricalSwapStripResult()
	{
		return $this->GetHistoricalSwapStripResult;
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