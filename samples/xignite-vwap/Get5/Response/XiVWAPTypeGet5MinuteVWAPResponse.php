<?php
/**
 * Class file for XiVWAPTypeGet5MinuteVWAPResponse
 * @date 08/07/2012
 */
/**
 * Class XiVWAPTypeGet5MinuteVWAPResponse
 * @date 08/07/2012
 */
class XiVWAPTypeGet5MinuteVWAPResponse extends XiVWAPWsdlClass
{
	/**
	 * The Get5MinuteVWAPResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiVWAPTypeIntradayVWAP
	 */
	public $Get5MinuteVWAPResult;
	/**
	 * Constructor
	 * @param XiVWAPTypeIntradayVWAP Get5MinuteVWAPResult
	 * @return XiVWAPTypeGet5MinuteVWAPResponse
	 */
	public function __construct($_Get5MinuteVWAPResult = null)
	{
		parent::__construct(array('Get5MinuteVWAPResult'=>$_Get5MinuteVWAPResult));
	}
	/**
	 * Set Get5MinuteVWAPResult
	 * @param IntradayVWAP Get5MinuteVWAPResult
	 * @return IntradayVWAP
	 */
	public function setGet5MinuteVWAPResult($_Get5MinuteVWAPResult)
	{
		return ($this->Get5MinuteVWAPResult = $_Get5MinuteVWAPResult);
	}
	/**
	 * Get Get5MinuteVWAPResult
	 * @return XiVWAPTypeIntradayVWAP
	 */
	public function getGet5MinuteVWAPResult()
	{
		return $this->Get5MinuteVWAPResult;
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