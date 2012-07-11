<?php
/**
 * Class file for XiEnergyTypeGetTopDelayedEnergyFuturesResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetTopDelayedEnergyFuturesResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetTopDelayedEnergyFuturesResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetTopDelayedEnergyFuturesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeArrayOfFutureQuote
	 */
	public $GetTopDelayedEnergyFuturesResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeArrayOfFutureQuote GetTopDelayedEnergyFuturesResult
	 * @return XiEnergyTypeGetTopDelayedEnergyFuturesResponse
	 */
	public function __construct($_GetTopDelayedEnergyFuturesResult = null)
	{
		parent::__construct(array('GetTopDelayedEnergyFuturesResult'=>new XiEnergyTypeArrayOfFutureQuote($_GetTopDelayedEnergyFuturesResult)));
	}
	/**
	 * Set GetTopDelayedEnergyFuturesResult
	 * @param ArrayOfFutureQuote GetTopDelayedEnergyFuturesResult
	 * @return ArrayOfFutureQuote
	 */
	public function setGetTopDelayedEnergyFuturesResult($_GetTopDelayedEnergyFuturesResult)
	{
		return ($this->GetTopDelayedEnergyFuturesResult = $_GetTopDelayedEnergyFuturesResult);
	}
	/**
	 * Get GetTopDelayedEnergyFuturesResult
	 * @return XiEnergyTypeArrayOfFutureQuote
	 */
	public function getGetTopDelayedEnergyFuturesResult()
	{
		return $this->GetTopDelayedEnergyFuturesResult;
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