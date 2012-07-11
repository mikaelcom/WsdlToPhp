<?php
/**
 * Class file for XiEnergyTypeGetHistoricalEnergySwapsResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetHistoricalEnergySwapsResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetHistoricalEnergySwapsResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetHistoricalEnergySwapsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeArrayOfFutureQuote
	 */
	public $GetHistoricalEnergySwapsResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeArrayOfFutureQuote GetHistoricalEnergySwapsResult
	 * @return XiEnergyTypeGetHistoricalEnergySwapsResponse
	 */
	public function __construct($_GetHistoricalEnergySwapsResult = null)
	{
		parent::__construct(array('GetHistoricalEnergySwapsResult'=>new XiEnergyTypeArrayOfFutureQuote($_GetHistoricalEnergySwapsResult)));
	}
	/**
	 * Set GetHistoricalEnergySwapsResult
	 * @param ArrayOfFutureQuote GetHistoricalEnergySwapsResult
	 * @return ArrayOfFutureQuote
	 */
	public function setGetHistoricalEnergySwapsResult($_GetHistoricalEnergySwapsResult)
	{
		return ($this->GetHistoricalEnergySwapsResult = $_GetHistoricalEnergySwapsResult);
	}
	/**
	 * Get GetHistoricalEnergySwapsResult
	 * @return XiEnergyTypeArrayOfFutureQuote
	 */
	public function getGetHistoricalEnergySwapsResult()
	{
		return $this->GetHistoricalEnergySwapsResult;
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