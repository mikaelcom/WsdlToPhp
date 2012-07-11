<?php
/**
 * Class file for XiGlobalquotesTypeGetGlobalDelayedVWAPResponse
 * @date 08/07/2012
 */
/**
 * Class XiGlobalquotesTypeGetGlobalDelayedVWAPResponse
 * @date 08/07/2012
 */
class XiGlobalquotesTypeGetGlobalDelayedVWAPResponse extends XiGlobalquotesWsdlClass
{
	/**
	 * The GetGlobalDelayedVWAPResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalquotesTypeIntradayVWAP
	 */
	public $GetGlobalDelayedVWAPResult;
	/**
	 * Constructor
	 * @param XiGlobalquotesTypeIntradayVWAP GetGlobalDelayedVWAPResult
	 * @return XiGlobalquotesTypeGetGlobalDelayedVWAPResponse
	 */
	public function __construct($_GetGlobalDelayedVWAPResult = null)
	{
		parent::__construct(array('GetGlobalDelayedVWAPResult'=>$_GetGlobalDelayedVWAPResult));
	}
	/**
	 * Set GetGlobalDelayedVWAPResult
	 * @param IntradayVWAP GetGlobalDelayedVWAPResult
	 * @return IntradayVWAP
	 */
	public function setGetGlobalDelayedVWAPResult($_GetGlobalDelayedVWAPResult)
	{
		return ($this->GetGlobalDelayedVWAPResult = $_GetGlobalDelayedVWAPResult);
	}
	/**
	 * Get GetGlobalDelayedVWAPResult
	 * @return XiGlobalquotesTypeIntradayVWAP
	 */
	public function getGetGlobalDelayedVWAPResult()
	{
		return $this->GetGlobalDelayedVWAPResult;
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