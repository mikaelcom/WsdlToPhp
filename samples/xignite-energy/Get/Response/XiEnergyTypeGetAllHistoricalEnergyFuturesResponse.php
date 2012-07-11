<?php
/**
 * Class file for XiEnergyTypeGetAllHistoricalEnergyFuturesResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetAllHistoricalEnergyFuturesResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetAllHistoricalEnergyFuturesResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetAllHistoricalEnergyFuturesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeArrayOfFutureQuote
	 */
	public $GetAllHistoricalEnergyFuturesResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeArrayOfFutureQuote GetAllHistoricalEnergyFuturesResult
	 * @return XiEnergyTypeGetAllHistoricalEnergyFuturesResponse
	 */
	public function __construct($_GetAllHistoricalEnergyFuturesResult = null)
	{
		parent::__construct(array('GetAllHistoricalEnergyFuturesResult'=>new XiEnergyTypeArrayOfFutureQuote($_GetAllHistoricalEnergyFuturesResult)));
	}
	/**
	 * Set GetAllHistoricalEnergyFuturesResult
	 * @param ArrayOfFutureQuote GetAllHistoricalEnergyFuturesResult
	 * @return ArrayOfFutureQuote
	 */
	public function setGetAllHistoricalEnergyFuturesResult($_GetAllHistoricalEnergyFuturesResult)
	{
		return ($this->GetAllHistoricalEnergyFuturesResult = $_GetAllHistoricalEnergyFuturesResult);
	}
	/**
	 * Get GetAllHistoricalEnergyFuturesResult
	 * @return XiEnergyTypeArrayOfFutureQuote
	 */
	public function getGetAllHistoricalEnergyFuturesResult()
	{
		return $this->GetAllHistoricalEnergyFuturesResult;
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