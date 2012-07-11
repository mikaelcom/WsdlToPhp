<?php
/**
 * Class file for XiEnergyTypeGetHistoricalEnergyFuturesResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetHistoricalEnergyFuturesResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetHistoricalEnergyFuturesResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetHistoricalEnergyFuturesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeArrayOfFutureQuote
	 */
	public $GetHistoricalEnergyFuturesResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeArrayOfFutureQuote GetHistoricalEnergyFuturesResult
	 * @return XiEnergyTypeGetHistoricalEnergyFuturesResponse
	 */
	public function __construct($_GetHistoricalEnergyFuturesResult = null)
	{
		parent::__construct(array('GetHistoricalEnergyFuturesResult'=>new XiEnergyTypeArrayOfFutureQuote($_GetHistoricalEnergyFuturesResult)));
	}
	/**
	 * Set GetHistoricalEnergyFuturesResult
	 * @param ArrayOfFutureQuote GetHistoricalEnergyFuturesResult
	 * @return ArrayOfFutureQuote
	 */
	public function setGetHistoricalEnergyFuturesResult($_GetHistoricalEnergyFuturesResult)
	{
		return ($this->GetHistoricalEnergyFuturesResult = $_GetHistoricalEnergyFuturesResult);
	}
	/**
	 * Get GetHistoricalEnergyFuturesResult
	 * @return XiEnergyTypeArrayOfFutureQuote
	 */
	public function getGetHistoricalEnergyFuturesResult()
	{
		return $this->GetHistoricalEnergyFuturesResult;
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