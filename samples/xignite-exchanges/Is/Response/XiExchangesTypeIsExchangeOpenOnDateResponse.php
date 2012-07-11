<?php
/**
 * Class file for XiExchangesTypeIsExchangeOpenOnDateResponse
 * @date 08/07/2012
 */
/**
 * Class XiExchangesTypeIsExchangeOpenOnDateResponse
 * @date 08/07/2012
 */
class XiExchangesTypeIsExchangeOpenOnDateResponse extends XiExchangesWsdlClass
{
	/**
	 * The IsExchangeOpenOnDateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiExchangesTypeExchangeSchedule
	 */
	public $IsExchangeOpenOnDateResult;
	/**
	 * Constructor
	 * @param XiExchangesTypeExchangeSchedule IsExchangeOpenOnDateResult
	 * @return XiExchangesTypeIsExchangeOpenOnDateResponse
	 */
	public function __construct($_IsExchangeOpenOnDateResult = null)
	{
		parent::__construct(array('IsExchangeOpenOnDateResult'=>$_IsExchangeOpenOnDateResult));
	}
	/**
	 * Set IsExchangeOpenOnDateResult
	 * @param ExchangeSchedule IsExchangeOpenOnDateResult
	 * @return ExchangeSchedule
	 */
	public function setIsExchangeOpenOnDateResult($_IsExchangeOpenOnDateResult)
	{
		return ($this->IsExchangeOpenOnDateResult = $_IsExchangeOpenOnDateResult);
	}
	/**
	 * Get IsExchangeOpenOnDateResult
	 * @return XiExchangesTypeExchangeSchedule
	 */
	public function getIsExchangeOpenOnDateResult()
	{
		return $this->IsExchangeOpenOnDateResult;
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