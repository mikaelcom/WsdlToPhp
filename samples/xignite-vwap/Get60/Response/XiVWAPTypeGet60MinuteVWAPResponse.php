<?php
/**
 * Class file for XiVWAPTypeGet60MinuteVWAPResponse
 * @date 08/07/2012
 */
/**
 * Class XiVWAPTypeGet60MinuteVWAPResponse
 * @date 08/07/2012
 */
class XiVWAPTypeGet60MinuteVWAPResponse extends XiVWAPWsdlClass
{
	/**
	 * The Get60MinuteVWAPResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiVWAPTypeIntradayVWAP
	 */
	public $Get60MinuteVWAPResult;
	/**
	 * Constructor
	 * @param XiVWAPTypeIntradayVWAP Get60MinuteVWAPResult
	 * @return XiVWAPTypeGet60MinuteVWAPResponse
	 */
	public function __construct($_Get60MinuteVWAPResult = null)
	{
		parent::__construct(array('Get60MinuteVWAPResult'=>$_Get60MinuteVWAPResult));
	}
	/**
	 * Set Get60MinuteVWAPResult
	 * @param IntradayVWAP Get60MinuteVWAPResult
	 * @return IntradayVWAP
	 */
	public function setGet60MinuteVWAPResult($_Get60MinuteVWAPResult)
	{
		return ($this->Get60MinuteVWAPResult = $_Get60MinuteVWAPResult);
	}
	/**
	 * Get Get60MinuteVWAPResult
	 * @return XiVWAPTypeIntradayVWAP
	 */
	public function getGet60MinuteVWAPResult()
	{
		return $this->Get60MinuteVWAPResult;
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