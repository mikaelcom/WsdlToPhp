<?php
/**
 * Class file for XiEnergyTypeGetAllHistoricalEnergySwapsResponse
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetAllHistoricalEnergySwapsResponse
 * @date 08/07/2012
 */
class XiEnergyTypeGetAllHistoricalEnergySwapsResponse extends XiEnergyWsdlClass
{
	/**
	 * The GetAllHistoricalEnergySwapsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeArrayOfFutureQuote
	 */
	public $GetAllHistoricalEnergySwapsResult;
	/**
	 * Constructor
	 * @param XiEnergyTypeArrayOfFutureQuote GetAllHistoricalEnergySwapsResult
	 * @return XiEnergyTypeGetAllHistoricalEnergySwapsResponse
	 */
	public function __construct($_GetAllHistoricalEnergySwapsResult = null)
	{
		parent::__construct(array('GetAllHistoricalEnergySwapsResult'=>new XiEnergyTypeArrayOfFutureQuote($_GetAllHistoricalEnergySwapsResult)));
	}
	/**
	 * Set GetAllHistoricalEnergySwapsResult
	 * @param ArrayOfFutureQuote GetAllHistoricalEnergySwapsResult
	 * @return ArrayOfFutureQuote
	 */
	public function setGetAllHistoricalEnergySwapsResult($_GetAllHistoricalEnergySwapsResult)
	{
		return ($this->GetAllHistoricalEnergySwapsResult = $_GetAllHistoricalEnergySwapsResult);
	}
	/**
	 * Get GetAllHistoricalEnergySwapsResult
	 * @return XiEnergyTypeArrayOfFutureQuote
	 */
	public function getGetAllHistoricalEnergySwapsResult()
	{
		return $this->GetAllHistoricalEnergySwapsResult;
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