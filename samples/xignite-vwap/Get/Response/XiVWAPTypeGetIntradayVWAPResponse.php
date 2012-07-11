<?php
/**
 * Class file for XiVWAPTypeGetIntradayVWAPResponse
 * @date 08/07/2012
 */
/**
 * Class XiVWAPTypeGetIntradayVWAPResponse
 * @date 08/07/2012
 */
class XiVWAPTypeGetIntradayVWAPResponse extends XiVWAPWsdlClass
{
	/**
	 * The GetIntradayVWAPResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiVWAPTypeIntradayVWAP
	 */
	public $GetIntradayVWAPResult;
	/**
	 * Constructor
	 * @param XiVWAPTypeIntradayVWAP GetIntradayVWAPResult
	 * @return XiVWAPTypeGetIntradayVWAPResponse
	 */
	public function __construct($_GetIntradayVWAPResult = null)
	{
		parent::__construct(array('GetIntradayVWAPResult'=>$_GetIntradayVWAPResult));
	}
	/**
	 * Set GetIntradayVWAPResult
	 * @param IntradayVWAP GetIntradayVWAPResult
	 * @return IntradayVWAP
	 */
	public function setGetIntradayVWAPResult($_GetIntradayVWAPResult)
	{
		return ($this->GetIntradayVWAPResult = $_GetIntradayVWAPResult);
	}
	/**
	 * Get GetIntradayVWAPResult
	 * @return XiVWAPTypeIntradayVWAP
	 */
	public function getGetIntradayVWAPResult()
	{
		return $this->GetIntradayVWAPResult;
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