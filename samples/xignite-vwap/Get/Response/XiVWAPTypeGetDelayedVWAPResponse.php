<?php
/**
 * Class file for XiVWAPTypeGetDelayedVWAPResponse
 * @date 08/07/2012
 */
/**
 * Class XiVWAPTypeGetDelayedVWAPResponse
 * @date 08/07/2012
 */
class XiVWAPTypeGetDelayedVWAPResponse extends XiVWAPWsdlClass
{
	/**
	 * The GetDelayedVWAPResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiVWAPTypeIntradayVWAP
	 */
	public $GetDelayedVWAPResult;
	/**
	 * Constructor
	 * @param XiVWAPTypeIntradayVWAP GetDelayedVWAPResult
	 * @return XiVWAPTypeGetDelayedVWAPResponse
	 */
	public function __construct($_GetDelayedVWAPResult = null)
	{
		parent::__construct(array('GetDelayedVWAPResult'=>$_GetDelayedVWAPResult));
	}
	/**
	 * Set GetDelayedVWAPResult
	 * @param IntradayVWAP GetDelayedVWAPResult
	 * @return IntradayVWAP
	 */
	public function setGetDelayedVWAPResult($_GetDelayedVWAPResult)
	{
		return ($this->GetDelayedVWAPResult = $_GetDelayedVWAPResult);
	}
	/**
	 * Get GetDelayedVWAPResult
	 * @return XiVWAPTypeIntradayVWAP
	 */
	public function getGetDelayedVWAPResult()
	{
		return $this->GetDelayedVWAPResult;
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