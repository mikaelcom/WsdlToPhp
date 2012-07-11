<?php
/**
 * Class file for XiRatesTypeFamilyRates
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeFamilyRates
 * @date 08/07/2012
 */
class XiRatesTypeFamilyRates extends XiRatesTypeCommon
{
	/**
	 * The RateFamilyType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeRateFamilyTypes
	 */
	public $RateFamilyType;
	/**
	 * The HistoricalInterestRate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeArrayOfHistoricalInterestRates
	 */
	public $HistoricalInterestRate;
	/**
	 * Constructor
	 * @param XiRatesTypeRateFamilyTypes RateFamilyType
	 * @param XiRatesTypeArrayOfHistoricalInterestRates HistoricalInterestRate
	 * @return XiRatesTypeFamilyRates
	 */
	public function __construct($_RateFamilyType,$_HistoricalInterestRate = null)
	{
		XiRatesWsdlClass::__construct(array('RateFamilyType'=>$_RateFamilyType,'HistoricalInterestRate'=>new XiRatesTypeArrayOfHistoricalInterestRates($_HistoricalInterestRate)));
	}
	/**
	 * Set RateFamilyType
	 * @param RateFamilyTypes RateFamilyType
	 * @return RateFamilyTypes
	 */
	public function setRateFamilyType($_RateFamilyType)
	{
		return ($this->RateFamilyType = XiRatesTypeRateFamilyTypes::valueIsValid($_RateFamilyType)?$_RateFamilyType:null);
	}
	/**
	 * Get RateFamilyType
	 * @return XiRatesTypeRateFamilyTypes
	 */
	public function getRateFamilyType()
	{
		return $this->RateFamilyType;
	}
	/**
	 * Set HistoricalInterestRate
	 * @param ArrayOfHistoricalInterestRates HistoricalInterestRate
	 * @return ArrayOfHistoricalInterestRates
	 */
	public function setHistoricalInterestRate($_HistoricalInterestRate)
	{
		return ($this->HistoricalInterestRate = $_HistoricalInterestRate);
	}
	/**
	 * Get HistoricalInterestRate
	 * @return XiRatesTypeArrayOfHistoricalInterestRates
	 */
	public function getHistoricalInterestRate()
	{
		return $this->HistoricalInterestRate;
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