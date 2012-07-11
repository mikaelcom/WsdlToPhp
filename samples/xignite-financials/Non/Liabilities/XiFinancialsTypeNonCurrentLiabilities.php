<?php
/**
 * Class file for XiFinancialsTypeNonCurrentLiabilities
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeNonCurrentLiabilities
 * @date 08/07/2012
 */
class XiFinancialsTypeNonCurrentLiabilities extends XiFinancialsWsdlClass
{
	/**
	 * The LongTermDebt
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $LongTermDebt;
	/**
	 * The CapitalLeaseObligations
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $CapitalLeaseObligations;
	/**
	 * The DeferredIncomeTaxLiabilities
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $DeferredIncomeTaxLiabilities;
	/**
	 * The OtherNonCurrentLiabilities
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OtherNonCurrentLiabilities;
	/**
	 * The MinorityInterestLiabilities
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $MinorityInterestLiabilities;
	/**
	 * The PreferredSecuritiesOfSubsidiaryTrustLiabilities
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PreferredSecuritiesOfSubsidiaryTrustLiabilities;
	/**
	 * The PreferredEquityOutsideStockEquity
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PreferredEquityOutsideStockEquity;
	/**
	 * The TotalNonCurrentLiabilities
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $TotalNonCurrentLiabilities;
	/**
	 * Constructor
	 * @param double LongTermDebt
	 * @param double CapitalLeaseObligations
	 * @param double DeferredIncomeTaxLiabilities
	 * @param double OtherNonCurrentLiabilities
	 * @param double MinorityInterestLiabilities
	 * @param double PreferredSecuritiesOfSubsidiaryTrustLiabilities
	 * @param double PreferredEquityOutsideStockEquity
	 * @param double TotalNonCurrentLiabilities
	 * @return XiFinancialsTypeNonCurrentLiabilities
	 */
	public function __construct($_LongTermDebt,$_CapitalLeaseObligations,$_DeferredIncomeTaxLiabilities,$_OtherNonCurrentLiabilities,$_MinorityInterestLiabilities,$_PreferredSecuritiesOfSubsidiaryTrustLiabilities,$_PreferredEquityOutsideStockEquity,$_TotalNonCurrentLiabilities)
	{
		parent::__construct(array('LongTermDebt'=>$_LongTermDebt,'CapitalLeaseObligations'=>$_CapitalLeaseObligations,'DeferredIncomeTaxLiabilities'=>$_DeferredIncomeTaxLiabilities,'OtherNonCurrentLiabilities'=>$_OtherNonCurrentLiabilities,'MinorityInterestLiabilities'=>$_MinorityInterestLiabilities,'PreferredSecuritiesOfSubsidiaryTrustLiabilities'=>$_PreferredSecuritiesOfSubsidiaryTrustLiabilities,'PreferredEquityOutsideStockEquity'=>$_PreferredEquityOutsideStockEquity,'TotalNonCurrentLiabilities'=>$_TotalNonCurrentLiabilities));
	}
	/**
	 * Set LongTermDebt
	 * @param double LongTermDebt
	 * @return double
	 */
	public function setLongTermDebt($_LongTermDebt)
	{
		return ($this->LongTermDebt = $_LongTermDebt);
	}
	/**
	 * Get LongTermDebt
	 * @return double
	 */
	public function getLongTermDebt()
	{
		return $this->LongTermDebt;
	}
	/**
	 * Set CapitalLeaseObligations
	 * @param double CapitalLeaseObligations
	 * @return double
	 */
	public function setCapitalLeaseObligations($_CapitalLeaseObligations)
	{
		return ($this->CapitalLeaseObligations = $_CapitalLeaseObligations);
	}
	/**
	 * Get CapitalLeaseObligations
	 * @return double
	 */
	public function getCapitalLeaseObligations()
	{
		return $this->CapitalLeaseObligations;
	}
	/**
	 * Set DeferredIncomeTaxLiabilities
	 * @param double DeferredIncomeTaxLiabilities
	 * @return double
	 */
	public function setDeferredIncomeTaxLiabilities($_DeferredIncomeTaxLiabilities)
	{
		return ($this->DeferredIncomeTaxLiabilities = $_DeferredIncomeTaxLiabilities);
	}
	/**
	 * Get DeferredIncomeTaxLiabilities
	 * @return double
	 */
	public function getDeferredIncomeTaxLiabilities()
	{
		return $this->DeferredIncomeTaxLiabilities;
	}
	/**
	 * Set OtherNonCurrentLiabilities
	 * @param double OtherNonCurrentLiabilities
	 * @return double
	 */
	public function setOtherNonCurrentLiabilities($_OtherNonCurrentLiabilities)
	{
		return ($this->OtherNonCurrentLiabilities = $_OtherNonCurrentLiabilities);
	}
	/**
	 * Get OtherNonCurrentLiabilities
	 * @return double
	 */
	public function getOtherNonCurrentLiabilities()
	{
		return $this->OtherNonCurrentLiabilities;
	}
	/**
	 * Set MinorityInterestLiabilities
	 * @param double MinorityInterestLiabilities
	 * @return double
	 */
	public function setMinorityInterestLiabilities($_MinorityInterestLiabilities)
	{
		return ($this->MinorityInterestLiabilities = $_MinorityInterestLiabilities);
	}
	/**
	 * Get MinorityInterestLiabilities
	 * @return double
	 */
	public function getMinorityInterestLiabilities()
	{
		return $this->MinorityInterestLiabilities;
	}
	/**
	 * Set PreferredSecuritiesOfSubsidiaryTrustLiabilities
	 * @param double PreferredSecuritiesOfSubsidiaryTrustLiabilities
	 * @return double
	 */
	public function setPreferredSecuritiesOfSubsidiaryTrustLiabilities($_PreferredSecuritiesOfSubsidiaryTrustLiabilities)
	{
		return ($this->PreferredSecuritiesOfSubsidiaryTrustLiabilities = $_PreferredSecuritiesOfSubsidiaryTrustLiabilities);
	}
	/**
	 * Get PreferredSecuritiesOfSubsidiaryTrustLiabilities
	 * @return double
	 */
	public function getPreferredSecuritiesOfSubsidiaryTrustLiabilities()
	{
		return $this->PreferredSecuritiesOfSubsidiaryTrustLiabilities;
	}
	/**
	 * Set PreferredEquityOutsideStockEquity
	 * @param double PreferredEquityOutsideStockEquity
	 * @return double
	 */
	public function setPreferredEquityOutsideStockEquity($_PreferredEquityOutsideStockEquity)
	{
		return ($this->PreferredEquityOutsideStockEquity = $_PreferredEquityOutsideStockEquity);
	}
	/**
	 * Get PreferredEquityOutsideStockEquity
	 * @return double
	 */
	public function getPreferredEquityOutsideStockEquity()
	{
		return $this->PreferredEquityOutsideStockEquity;
	}
	/**
	 * Set TotalNonCurrentLiabilities
	 * @param double TotalNonCurrentLiabilities
	 * @return double
	 */
	public function setTotalNonCurrentLiabilities($_TotalNonCurrentLiabilities)
	{
		return ($this->TotalNonCurrentLiabilities = $_TotalNonCurrentLiabilities);
	}
	/**
	 * Get TotalNonCurrentLiabilities
	 * @return double
	 */
	public function getTotalNonCurrentLiabilities()
	{
		return $this->TotalNonCurrentLiabilities;
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