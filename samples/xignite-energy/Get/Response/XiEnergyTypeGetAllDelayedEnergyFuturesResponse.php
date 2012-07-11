<?php
/**
 * Class file for XiEnergyTypeGetAllDelayedEnergyFuturesResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetAllDelayedEnergyFuturesResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetAllDelayedEnergyFuturesResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetAllDelayedEnergyFuturesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeArrayOfFutureQuote
	 */
	public $GetAllDelayedEnergyFuturesResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeArrayOfFutureQuote GetAllDelayedEnergyFuturesResult
	 * @return XiEnergyTypeGetAllDelayedEnergyFuturesResponse
	 */
	public function __construct($_GetAllDelayedEnergyFuturesResult = null)
	{
		parent::__construct(array('GetAllDelayedEnergyFuturesResult'=>new XiEnergyTypeArrayOfFutureQuote($_GetAllDelayedEnergyFuturesResult)));
	}
	/**
	 * Set GetAllDelayedEnergyFuturesResult
	 * @param ArrayOfFutureQuote GetAllDelayedEnergyFuturesResult
	 * @return ArrayOfFutureQuote
	 */
	public function setGetAllDelayedEnergyFuturesResult($_GetAllDelayedEnergyFuturesResult)
	{
		return ($this->GetAllDelayedEnergyFuturesResult = $_GetAllDelayedEnergyFuturesResult);
	}
	/**
	 * Get GetAllDelayedEnergyFuturesResult
	 * @return XiEnergyTypeArrayOfFutureQuote
	 */
	public function getGetAllDelayedEnergyFuturesResult()
	{
		return $this->GetAllDelayedEnergyFuturesResult;
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