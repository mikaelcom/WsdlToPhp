<?php
/**
 * Class file for XiGlobalrealtimeTypeGetGlobalRealTimeVWAPResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalrealtimeTypeGetGlobalRealTimeVWAPResponse
 * @date 08/07/2012
 */
class XiGlobalrealtimeTypeGetGlobalRealTimeVWAPResponse extends XiGlobalrealtimeWsdlClass
{
	/**
	 * The GetGlobalRealTimeVWAPResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalrealtimeTypeIntradayVWAP
	 */
	public $GetGlobalRealTimeVWAPResult;
	/**
	 * Constructor
	 * @param XiGlobalrealtimeTypeIntradayVWAP GetGlobalRealTimeVWAPResult
	 * @return XiGlobalrealtimeTypeGetGlobalRealTimeVWAPResponse
	 */
	public function __construct($_GetGlobalRealTimeVWAPResult = null)
	{
		parent::__construct(array('GetGlobalRealTimeVWAPResult'=>$_GetGlobalRealTimeVWAPResult));
	}
	/**
	 * Set GetGlobalRealTimeVWAPResult
	 * @param IntradayVWAP GetGlobalRealTimeVWAPResult
	 * @return IntradayVWAP
	 */
	public function setGetGlobalRealTimeVWAPResult($_GetGlobalRealTimeVWAPResult)
	{
		return ($this->GetGlobalRealTimeVWAPResult = $_GetGlobalRealTimeVWAPResult);
	}
	/**
	 * Get GetGlobalRealTimeVWAPResult
	 * @return XiGlobalrealtimeTypeIntradayVWAP
	 */
	public function getGetGlobalRealTimeVWAPResult()
	{
		return $this->GetGlobalRealTimeVWAPResult;
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