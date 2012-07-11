<?php
/**
 * Class file for XiFuturesTypeGetHistoricalTicksResponse
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetHistoricalTicksResponse
 * @date 08/07/2012
 */
class XiFuturesTypeGetHistoricalTicksResponse extends XiFuturesWsdlClass
{
	/**
	 * The GetHistoricalTicksResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeTicks
	 */
	public $GetHistoricalTicksResult;
	/**
	 * Constructor
	 * @param XiFuturesTypeTicks GetHistoricalTicksResult
	 * @return XiFuturesTypeGetHistoricalTicksResponse
	 */
	public function __construct($_GetHistoricalTicksResult = null)
	{
		parent::__construct(array('GetHistoricalTicksResult'=>$_GetHistoricalTicksResult));
	}
	/**
	 * Set GetHistoricalTicksResult
	 * @param Ticks GetHistoricalTicksResult
	 * @return Ticks
	 */
	public function setGetHistoricalTicksResult($_GetHistoricalTicksResult)
	{
		return ($this->GetHistoricalTicksResult = $_GetHistoricalTicksResult);
	}
	/**
	 * Get GetHistoricalTicksResult
	 * @return XiFuturesTypeTicks
	 */
	public function getGetHistoricalTicksResult()
	{
		return $this->GetHistoricalTicksResult;
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