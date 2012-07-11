<?php
/**
 * Class file for XiVWAPTypeGet1MinuteVWAPResponse
 * @date 08/07/2012
 */
/**
 * Class XiVWAPTypeGet1MinuteVWAPResponse
 * @date 08/07/2012
 */
class XiVWAPTypeGet1MinuteVWAPResponse extends XiVWAPWsdlClass
{
	/**
	 * The Get1MinuteVWAPResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiVWAPTypeIntradayVWAP
	 */
	public $Get1MinuteVWAPResult;
	/**
	 * Constructor
	 * @param XiVWAPTypeIntradayVWAP Get1MinuteVWAPResult
	 * @return XiVWAPTypeGet1MinuteVWAPResponse
	 */
	public function __construct($_Get1MinuteVWAPResult = null)
	{
		parent::__construct(array('Get1MinuteVWAPResult'=>$_Get1MinuteVWAPResult));
	}
	/**
	 * Set Get1MinuteVWAPResult
	 * @param IntradayVWAP Get1MinuteVWAPResult
	 * @return IntradayVWAP
	 */
	public function setGet1MinuteVWAPResult($_Get1MinuteVWAPResult)
	{
		return ($this->Get1MinuteVWAPResult = $_Get1MinuteVWAPResult);
	}
	/**
	 * Get Get1MinuteVWAPResult
	 * @return XiVWAPTypeIntradayVWAP
	 */
	public function getGet1MinuteVWAPResult()
	{
		return $this->Get1MinuteVWAPResult;
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