<?php
/**
 * Class file for XiVWAPTypeGetRealTimeVWAPResponse
 * @date 08/07/2012
 */
/**
 * Class XiVWAPTypeGetRealTimeVWAPResponse
 * @date 08/07/2012
 */
class XiVWAPTypeGetRealTimeVWAPResponse extends XiVWAPWsdlClass
{
	/**
	 * The GetRealTimeVWAPResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiVWAPTypeIntradayVWAP
	 */
	public $GetRealTimeVWAPResult;
	/**
	 * Constructor
	 * @param XiVWAPTypeIntradayVWAP GetRealTimeVWAPResult
	 * @return XiVWAPTypeGetRealTimeVWAPResponse
	 */
	public function __construct($_GetRealTimeVWAPResult = null)
	{
		parent::__construct(array('GetRealTimeVWAPResult'=>$_GetRealTimeVWAPResult));
	}
	/**
	 * Set GetRealTimeVWAPResult
	 * @param IntradayVWAP GetRealTimeVWAPResult
	 * @return IntradayVWAP
	 */
	public function setGetRealTimeVWAPResult($_GetRealTimeVWAPResult)
	{
		return ($this->GetRealTimeVWAPResult = $_GetRealTimeVWAPResult);
	}
	/**
	 * Get GetRealTimeVWAPResult
	 * @return XiVWAPTypeIntradayVWAP
	 */
	public function getGetRealTimeVWAPResult()
	{
		return $this->GetRealTimeVWAPResult;
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