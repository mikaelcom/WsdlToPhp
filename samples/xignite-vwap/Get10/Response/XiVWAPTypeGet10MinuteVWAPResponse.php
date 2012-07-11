<?php
/**
 * Class file for XiVWAPTypeGet10MinuteVWAPResponse
 * @date 08/07/2012
 */
/**
 * Class XiVWAPTypeGet10MinuteVWAPResponse
 * @date 08/07/2012
 */
class XiVWAPTypeGet10MinuteVWAPResponse extends XiVWAPWsdlClass
{
	/**
	 * The Get10MinuteVWAPResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiVWAPTypeIntradayVWAP
	 */
	public $Get10MinuteVWAPResult;
	/**
	 * Constructor
	 * @param XiVWAPTypeIntradayVWAP Get10MinuteVWAPResult
	 * @return XiVWAPTypeGet10MinuteVWAPResponse
	 */
	public function __construct($_Get10MinuteVWAPResult = null)
	{
		parent::__construct(array('Get10MinuteVWAPResult'=>$_Get10MinuteVWAPResult));
	}
	/**
	 * Set Get10MinuteVWAPResult
	 * @param IntradayVWAP Get10MinuteVWAPResult
	 * @return IntradayVWAP
	 */
	public function setGet10MinuteVWAPResult($_Get10MinuteVWAPResult)
	{
		return ($this->Get10MinuteVWAPResult = $_Get10MinuteVWAPResult);
	}
	/**
	 * Get Get10MinuteVWAPResult
	 * @return XiVWAPTypeIntradayVWAP
	 */
	public function getGet10MinuteVWAPResult()
	{
		return $this->Get10MinuteVWAPResult;
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