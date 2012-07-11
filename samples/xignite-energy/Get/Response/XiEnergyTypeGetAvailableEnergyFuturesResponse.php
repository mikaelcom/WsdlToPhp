<?php
/**
 * Class file for XiEnergyTypeGetAvailableEnergyFuturesResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetAvailableEnergyFuturesResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetAvailableEnergyFuturesResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetAvailableEnergyFuturesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeArrayOfFuture
	 */
	public $GetAvailableEnergyFuturesResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeArrayOfFuture GetAvailableEnergyFuturesResult
	 * @return XiEnergyTypeGetAvailableEnergyFuturesResponse
	 */
	public function __construct($_GetAvailableEnergyFuturesResult = null)
	{
		parent::__construct(array('GetAvailableEnergyFuturesResult'=>new XiEnergyTypeArrayOfFuture($_GetAvailableEnergyFuturesResult)));
	}
	/**
	 * Set GetAvailableEnergyFuturesResult
	 * @param ArrayOfFuture GetAvailableEnergyFuturesResult
	 * @return ArrayOfFuture
	 */
	public function setGetAvailableEnergyFuturesResult($_GetAvailableEnergyFuturesResult)
	{
		return ($this->GetAvailableEnergyFuturesResult = $_GetAvailableEnergyFuturesResult);
	}
	/**
	 * Get GetAvailableEnergyFuturesResult
	 * @return XiEnergyTypeArrayOfFuture
	 */
	public function getGetAvailableEnergyFuturesResult()
	{
		return $this->GetAvailableEnergyFuturesResult;
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