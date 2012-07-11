<?php
/**
 * Class file for XiEnergyTypeGetDelayedEnergyFuturesResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetDelayedEnergyFuturesResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetDelayedEnergyFuturesResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetDelayedEnergyFuturesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeArrayOfFutureQuote
	 */
	public $GetDelayedEnergyFuturesResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeArrayOfFutureQuote GetDelayedEnergyFuturesResult
	 * @return XiEnergyTypeGetDelayedEnergyFuturesResponse
	 */
	public function __construct($_GetDelayedEnergyFuturesResult = null)
	{
		parent::__construct(array('GetDelayedEnergyFuturesResult'=>new XiEnergyTypeArrayOfFutureQuote($_GetDelayedEnergyFuturesResult)));
	}
	/**
	 * Set GetDelayedEnergyFuturesResult
	 * @param ArrayOfFutureQuote GetDelayedEnergyFuturesResult
	 * @return ArrayOfFutureQuote
	 */
	public function setGetDelayedEnergyFuturesResult($_GetDelayedEnergyFuturesResult)
	{
		return ($this->GetDelayedEnergyFuturesResult = $_GetDelayedEnergyFuturesResult);
	}
	/**
	 * Get GetDelayedEnergyFuturesResult
	 * @return XiEnergyTypeArrayOfFutureQuote
	 */
	public function getGetDelayedEnergyFuturesResult()
	{
		return $this->GetDelayedEnergyFuturesResult;
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