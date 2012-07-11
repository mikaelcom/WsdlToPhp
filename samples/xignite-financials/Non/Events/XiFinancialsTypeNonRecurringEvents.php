<?php
/**
 * Class file for XiFinancialsTypeNonRecurringEvents
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeNonRecurringEvents
 * @date 08/07/2012
 */
class XiFinancialsTypeNonRecurringEvents extends XiFinancialsWsdlClass
{
	/**
	 * The ExtraordinaryIncomeLosses
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ExtraordinaryIncomeLosses;
	/**
	 * The IncomeFromCummulatedEffectOfAccountingChanges
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $IncomeFromCummulatedEffectOfAccountingChanges;
	/**
	 * The IncomeFromTaxLossCarryforward
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $IncomeFromTaxLossCarryforward;
	/**
	 * The OtherGainsAndLosses
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OtherGainsAndLosses;
	/**
	 * The TotalNetIncome
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $TotalNetIncome;
	/**
	 * The NormalizedIncome
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NormalizedIncome;
	/**
	 * The NetIncomeAvailableForCommon
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NetIncomeAvailableForCommon;
	/**
	 * The PreferredDividends
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PreferredDividends;
	/**
	 * The ExciseTaxes
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ExciseTaxes;
	/**
	 * Constructor
	 * @param double ExtraordinaryIncomeLosses
	 * @param double IncomeFromCummulatedEffectOfAccountingChanges
	 * @param double IncomeFromTaxLossCarryforward
	 * @param double OtherGainsAndLosses
	 * @param double TotalNetIncome
	 * @param double NormalizedIncome
	 * @param double NetIncomeAvailableForCommon
	 * @param double PreferredDividends
	 * @param double ExciseTaxes
	 * @return XiFinancialsTypeNonRecurringEvents
	 */
	public function __construct($_ExtraordinaryIncomeLosses,$_IncomeFromCummulatedEffectOfAccountingChanges,$_IncomeFromTaxLossCarryforward,$_OtherGainsAndLosses,$_TotalNetIncome,$_NormalizedIncome,$_NetIncomeAvailableForCommon,$_PreferredDividends,$_ExciseTaxes)
	{
		parent::__construct(array('ExtraordinaryIncomeLosses'=>$_ExtraordinaryIncomeLosses,'IncomeFromCummulatedEffectOfAccountingChanges'=>$_IncomeFromCummulatedEffectOfAccountingChanges,'IncomeFromTaxLossCarryforward'=>$_IncomeFromTaxLossCarryforward,'OtherGainsAndLosses'=>$_OtherGainsAndLosses,'TotalNetIncome'=>$_TotalNetIncome,'NormalizedIncome'=>$_NormalizedIncome,'NetIncomeAvailableForCommon'=>$_NetIncomeAvailableForCommon,'PreferredDividends'=>$_PreferredDividends,'ExciseTaxes'=>$_ExciseTaxes));
	}
	/**
	 * Set ExtraordinaryIncomeLosses
	 * @param double ExtraordinaryIncomeLosses
	 * @return double
	 */
	public function setExtraordinaryIncomeLosses($_ExtraordinaryIncomeLosses)
	{
		return ($this->ExtraordinaryIncomeLosses = $_ExtraordinaryIncomeLosses);
	}
	/**
	 * Get ExtraordinaryIncomeLosses
	 * @return double
	 */
	public function getExtraordinaryIncomeLosses()
	{
		return $this->ExtraordinaryIncomeLosses;
	}
	/**
	 * Set IncomeFromCummulatedEffectOfAccountingChanges
	 * @param double IncomeFromCummulatedEffectOfAccountingChanges
	 * @return double
	 */
	public function setIncomeFromCummulatedEffectOfAccountingChanges($_IncomeFromCummulatedEffectOfAccountingChanges)
	{
		return ($this->IncomeFromCummulatedEffectOfAccountingChanges = $_IncomeFromCummulatedEffectOfAccountingChanges);
	}
	/**
	 * Get IncomeFromCummulatedEffectOfAccountingChanges
	 * @return double
	 */
	public function getIncomeFromCummulatedEffectOfAccountingChanges()
	{
		return $this->IncomeFromCummulatedEffectOfAccountingChanges;
	}
	/**
	 * Set IncomeFromTaxLossCarryforward
	 * @param double IncomeFromTaxLossCarryforward
	 * @return double
	 */
	public function setIncomeFromTaxLossCarryforward($_IncomeFromTaxLossCarryforward)
	{
		return ($this->IncomeFromTaxLossCarryforward = $_IncomeFromTaxLossCarryforward);
	}
	/**
	 * Get IncomeFromTaxLossCarryforward
	 * @return double
	 */
	public function getIncomeFromTaxLossCarryforward()
	{
		return $this->IncomeFromTaxLossCarryforward;
	}
	/**
	 * Set OtherGainsAndLosses
	 * @param double OtherGainsAndLosses
	 * @return double
	 */
	public function setOtherGainsAndLosses($_OtherGainsAndLosses)
	{
		return ($this->OtherGainsAndLosses = $_OtherGainsAndLosses);
	}
	/**
	 * Get OtherGainsAndLosses
	 * @return double
	 */
	public function getOtherGainsAndLosses()
	{
		return $this->OtherGainsAndLosses;
	}
	/**
	 * Set TotalNetIncome
	 * @param double TotalNetIncome
	 * @return double
	 */
	public function setTotalNetIncome($_TotalNetIncome)
	{
		return ($this->TotalNetIncome = $_TotalNetIncome);
	}
	/**
	 * Get TotalNetIncome
	 * @return double
	 */
	public function getTotalNetIncome()
	{
		return $this->TotalNetIncome;
	}
	/**
	 * Set NormalizedIncome
	 * @param double NormalizedIncome
	 * @return double
	 */
	public function setNormalizedIncome($_NormalizedIncome)
	{
		return ($this->NormalizedIncome = $_NormalizedIncome);
	}
	/**
	 * Get NormalizedIncome
	 * @return double
	 */
	public function getNormalizedIncome()
	{
		return $this->NormalizedIncome;
	}
	/**
	 * Set NetIncomeAvailableForCommon
	 * @param double NetIncomeAvailableForCommon
	 * @return double
	 */
	public function setNetIncomeAvailableForCommon($_NetIncomeAvailableForCommon)
	{
		return ($this->NetIncomeAvailableForCommon = $_NetIncomeAvailableForCommon);
	}
	/**
	 * Get NetIncomeAvailableForCommon
	 * @return double
	 */
	public function getNetIncomeAvailableForCommon()
	{
		return $this->NetIncomeAvailableForCommon;
	}
	/**
	 * Set PreferredDividends
	 * @param double PreferredDividends
	 * @return double
	 */
	public function setPreferredDividends($_PreferredDividends)
	{
		return ($this->PreferredDividends = $_PreferredDividends);
	}
	/**
	 * Get PreferredDividends
	 * @return double
	 */
	public function getPreferredDividends()
	{
		return $this->PreferredDividends;
	}
	/**
	 * Set ExciseTaxes
	 * @param double ExciseTaxes
	 * @return double
	 */
	public function setExciseTaxes($_ExciseTaxes)
	{
		return ($this->ExciseTaxes = $_ExciseTaxes);
	}
	/**
	 * Get ExciseTaxes
	 * @return double
	 */
	public function getExciseTaxes()
	{
		return $this->ExciseTaxes;
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