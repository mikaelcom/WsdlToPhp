<?php
/**
 * Class file for XiInterBanksTypeFamilyRates
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeFamilyRates
 * @date 08/07/2012
 */
class XiInterBanksTypeFamilyRates extends XiInterBanksTypeCommon
{
	/**
	 * The RateFamilyType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeRateFamilyTypes
	 */
	public $RateFamilyType;
	/**
	 * The HistoricalInterestRate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeArrayOfHistoricalInterestRates
	 */
	public $HistoricalInterestRate;
	/**
	 * Constructor
	 * @param XiInterBanksTypeRateFamilyTypes RateFamilyType
	 * @param XiInterBanksTypeArrayOfHistoricalInterestRates HistoricalInterestRate
	 * @return XiInterBanksTypeFamilyRates
	 */
	public function __construct($_RateFamilyType,$_HistoricalInterestRate = null)
	{
		XiInterBanksWsdlClass::__construct(array('RateFamilyType'=>$_RateFamilyType,'HistoricalInterestRate'=>new XiInterBanksTypeArrayOfHistoricalInterestRates($_HistoricalInterestRate)));
	}
	/**
	 * Set RateFamilyType
	 * @param RateFamilyTypes RateFamilyType
	 * @return RateFamilyTypes
	 */
	public function setRateFamilyType($_RateFamilyType)
	{
		return ($this->RateFamilyType = XiInterBanksTypeRateFamilyTypes::valueIsValid($_RateFamilyType)?$_RateFamilyType:null);
	}
	/**
	 * Get RateFamilyType
	 * @return XiInterBanksTypeRateFamilyTypes
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
	 * @return XiInterBanksTypeArrayOfHistoricalInterestRates
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