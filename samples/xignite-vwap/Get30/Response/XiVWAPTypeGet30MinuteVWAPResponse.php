<?php
/**
 * Class file for XiVWAPTypeGet30MinuteVWAPResponse
 * @date 08/07/2012
 */
/**
 * Class XiVWAPTypeGet30MinuteVWAPResponse
 * @date 08/07/2012
 */
class XiVWAPTypeGet30MinuteVWAPResponse extends XiVWAPWsdlClass
{
	/**
	 * The Get30MinuteVWAPResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiVWAPTypeIntradayVWAP
	 */
	public $Get30MinuteVWAPResult;
	/**
	 * Constructor
	 * @param XiVWAPTypeIntradayVWAP Get30MinuteVWAPResult
	 * @return XiVWAPTypeGet30MinuteVWAPResponse
	 */
	public function __construct($_Get30MinuteVWAPResult = null)
	{
		parent::__construct(array('Get30MinuteVWAPResult'=>$_Get30MinuteVWAPResult));
	}
	/**
	 * Set Get30MinuteVWAPResult
	 * @param IntradayVWAP Get30MinuteVWAPResult
	 * @return IntradayVWAP
	 */
	public function setGet30MinuteVWAPResult($_Get30MinuteVWAPResult)
	{
		return ($this->Get30MinuteVWAPResult = $_Get30MinuteVWAPResult);
	}
	/**
	 * Get Get30MinuteVWAPResult
	 * @return XiVWAPTypeIntradayVWAP
	 */
	public function getGet30MinuteVWAPResult()
	{
		return $this->Get30MinuteVWAPResult;
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