<?php
/**
 * Class file for XiFinancialsTypeCashFromOperatingActivities
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeCashFromOperatingActivities
 * @date 08/07/2012
 */
class XiFinancialsTypeCashFromOperatingActivities extends XiFinancialsWsdlClass
{
	/**
	 * The DepreciationExpenses
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $DepreciationExpenses;
	/**
	 * The AmortizationExpenses
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AmortizationExpenses;
	/**
	 * The AmortizationOfIntangiblesExpenses
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AmortizationOfIntangiblesExpenses;
	/**
	 * The DeferredIncomeTaxes
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $DeferredIncomeTaxes;
	/**
	 * The OperatingGainsOrLosses
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OperatingGainsOrLosses;
	/**
	 * The ExtraordinaryGainsOrLosses
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ExtraordinaryGainsOrLosses;
	/**
	 * The IncreaseOrDecreaseInReceivables
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $IncreaseOrDecreaseInReceivables;
	/**
	 * The IncreaseOrDecreaseInInventories
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $IncreaseOrDecreaseInInventories;
	/**
	 * The IncreaseOrDecreaseInPrepaidExpenses
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $IncreaseOrDecreaseInPrepaidExpenses;
	/**
	 * The IncreaseOrDecreaseInOtherCurrentAssets
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $IncreaseOrDecreaseInOtherCurrentAssets;
	/**
	 * The IncreaseOrDecreaseInPayables
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $IncreaseOrDecreaseInPayables;
	/**
	 * The IncreaseOrDecreaseInOtherCurrentLiabilities
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $IncreaseOrDecreaseInOtherCurrentLiabilities;
	/**
	 * The IncreaseOrDecreaseInOtherWorkingCapital
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $IncreaseOrDecreaseInOtherWorkingCapital;
	/**
	 * The OtherNonCashItems
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OtherNonCashItems;
	/**
	 * The NetCashFromContinuingOperations
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NetCashFromContinuingOperations;
	/**
	 * The NetCashFromDiscontinuedOperations
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NetCashFromDiscontinuedOperations;
	/**
	 * The NetCashFromOperatingActivities
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NetCashFromOperatingActivities;
	/**
	 * Constructor
	 * @param double DepreciationExpenses
	 * @param double AmortizationExpenses
	 * @param double AmortizationOfIntangiblesExpenses
	 * @param double DeferredIncomeTaxes
	 * @param double OperatingGainsOrLosses
	 * @param double ExtraordinaryGainsOrLosses
	 * @param double IncreaseOrDecreaseInReceivables
	 * @param double IncreaseOrDecreaseInInventories
	 * @param double IncreaseOrDecreaseInPrepaidExpenses
	 * @param double IncreaseOrDecreaseInOtherCurrentAssets
	 * @param double IncreaseOrDecreaseInPayables
	 * @param double IncreaseOrDecreaseInOtherCurrentLiabilities
	 * @param double IncreaseOrDecreaseInOtherWorkingCapital
	 * @param double OtherNonCashItems
	 * @param double NetCashFromContinuingOperations
	 * @param double NetCashFromDiscontinuedOperations
	 * @param double NetCashFromOperatingActivities
	 * @return XiFinancialsTypeCashFromOperatingActivities
	 */
	public function __construct($_DepreciationExpenses,$_AmortizationExpenses,$_AmortizationOfIntangiblesExpenses,$_DeferredIncomeTaxes,$_OperatingGainsOrLosses,$_ExtraordinaryGainsOrLosses,$_IncreaseOrDecreaseInReceivables,$_IncreaseOrDecreaseInInventories,$_IncreaseOrDecreaseInPrepaidExpenses,$_IncreaseOrDecreaseInOtherCurrentAssets,$_IncreaseOrDecreaseInPayables,$_IncreaseOrDecreaseInOtherCurrentLiabilities,$_IncreaseOrDecreaseInOtherWorkingCapital,$_OtherNonCashItems,$_NetCashFromContinuingOperations,$_NetCashFromDiscontinuedOperations,$_NetCashFromOperatingActivities)
	{
		parent::__construct(array('DepreciationExpenses'=>$_DepreciationExpenses,'AmortizationExpenses'=>$_AmortizationExpenses,'AmortizationOfIntangiblesExpenses'=>$_AmortizationOfIntangiblesExpenses,'DeferredIncomeTaxes'=>$_DeferredIncomeTaxes,'OperatingGainsOrLosses'=>$_OperatingGainsOrLosses,'ExtraordinaryGainsOrLosses'=>$_ExtraordinaryGainsOrLosses,'IncreaseOrDecreaseInReceivables'=>$_IncreaseOrDecreaseInReceivables,'IncreaseOrDecreaseInInventories'=>$_IncreaseOrDecreaseInInventories,'IncreaseOrDecreaseInPrepaidExpenses'=>$_IncreaseOrDecreaseInPrepaidExpenses,'IncreaseOrDecreaseInOtherCurrentAssets'=>$_IncreaseOrDecreaseInOtherCurrentAssets,'IncreaseOrDecreaseInPayables'=>$_IncreaseOrDecreaseInPayables,'IncreaseOrDecreaseInOtherCurrentLiabilities'=>$_IncreaseOrDecreaseInOtherCurrentLiabilities,'IncreaseOrDecreaseInOtherWorkingCapital'=>$_IncreaseOrDecreaseInOtherWorkingCapital,'OtherNonCashItems'=>$_OtherNonCashItems,'NetCashFromContinuingOperations'=>$_NetCashFromContinuingOperations,'NetCashFromDiscontinuedOperations'=>$_NetCashFromDiscontinuedOperations,'NetCashFromOperatingActivities'=>$_NetCashFromOperatingActivities));
	}
	/**
	 * Set DepreciationExpenses
	 * @param double DepreciationExpenses
	 * @return double
	 */
	public function setDepreciationExpenses($_DepreciationExpenses)
	{
		return ($this->DepreciationExpenses = $_DepreciationExpenses);
	}
	/**
	 * Get DepreciationExpenses
	 * @return double
	 */
	public function getDepreciationExpenses()
	{
		return $this->DepreciationExpenses;
	}
	/**
	 * Set AmortizationExpenses
	 * @param double AmortizationExpenses
	 * @return double
	 */
	public function setAmortizationExpenses($_AmortizationExpenses)
	{
		return ($this->AmortizationExpenses = $_AmortizationExpenses);
	}
	/**
	 * Get AmortizationExpenses
	 * @return double
	 */
	public function getAmortizationExpenses()
	{
		return $this->AmortizationExpenses;
	}
	/**
	 * Set AmortizationOfIntangiblesExpenses
	 * @param double AmortizationOfIntangiblesExpenses
	 * @return double
	 */
	public function setAmortizationOfIntangiblesExpenses($_AmortizationOfIntangiblesExpenses)
	{
		return ($this->AmortizationOfIntangiblesExpenses = $_AmortizationOfIntangiblesExpenses);
	}
	/**
	 * Get AmortizationOfIntangiblesExpenses
	 * @return double
	 */
	public function getAmortizationOfIntangiblesExpenses()
	{
		return $this->AmortizationOfIntangiblesExpenses;
	}
	/**
	 * Set DeferredIncomeTaxes
	 * @param double DeferredIncomeTaxes
	 * @return double
	 */
	public function setDeferredIncomeTaxes($_DeferredIncomeTaxes)
	{
		return ($this->DeferredIncomeTaxes = $_DeferredIncomeTaxes);
	}
	/**
	 * Get DeferredIncomeTaxes
	 * @return double
	 */
	public function getDeferredIncomeTaxes()
	{
		return $this->DeferredIncomeTaxes;
	}
	/**
	 * Set OperatingGainsOrLosses
	 * @param double OperatingGainsOrLosses
	 * @return double
	 */
	public function setOperatingGainsOrLosses($_OperatingGainsOrLosses)
	{
		return ($this->OperatingGainsOrLosses = $_OperatingGainsOrLosses);
	}
	/**
	 * Get OperatingGainsOrLosses
	 * @return double
	 */
	public function getOperatingGainsOrLosses()
	{
		return $this->OperatingGainsOrLosses;
	}
	/**
	 * Set ExtraordinaryGainsOrLosses
	 * @param double ExtraordinaryGainsOrLosses
	 * @return double
	 */
	public function setExtraordinaryGainsOrLosses($_ExtraordinaryGainsOrLosses)
	{
		return ($this->ExtraordinaryGainsOrLosses = $_ExtraordinaryGainsOrLosses);
	}
	/**
	 * Get ExtraordinaryGainsOrLosses
	 * @return double
	 */
	public function getExtraordinaryGainsOrLosses()
	{
		return $this->ExtraordinaryGainsOrLosses;
	}
	/**
	 * Set IncreaseOrDecreaseInReceivables
	 * @param double IncreaseOrDecreaseInReceivables
	 * @return double
	 */
	public function setIncreaseOrDecreaseInReceivables($_IncreaseOrDecreaseInReceivables)
	{
		return ($this->IncreaseOrDecreaseInReceivables = $_IncreaseOrDecreaseInReceivables);
	}
	/**
	 * Get IncreaseOrDecreaseInReceivables
	 * @return double
	 */
	public function getIncreaseOrDecreaseInReceivables()
	{
		return $this->IncreaseOrDecreaseInReceivables;
	}
	/**
	 * Set IncreaseOrDecreaseInInventories
	 * @param double IncreaseOrDecreaseInInventories
	 * @return double
	 */
	public function setIncreaseOrDecreaseInInventories($_IncreaseOrDecreaseInInventories)
	{
		return ($this->IncreaseOrDecreaseInInventories = $_IncreaseOrDecreaseInInventories);
	}
	/**
	 * Get IncreaseOrDecreaseInInventories
	 * @return double
	 */
	public function getIncreaseOrDecreaseInInventories()
	{
		return $this->IncreaseOrDecreaseInInventories;
	}
	/**
	 * Set IncreaseOrDecreaseInPrepaidExpenses
	 * @param double IncreaseOrDecreaseInPrepaidExpenses
	 * @return double
	 */
	public function setIncreaseOrDecreaseInPrepaidExpenses($_IncreaseOrDecreaseInPrepaidExpenses)
	{
		return ($this->IncreaseOrDecreaseInPrepaidExpenses = $_IncreaseOrDecreaseInPrepaidExpenses);
	}
	/**
	 * Get IncreaseOrDecreaseInPrepaidExpenses
	 * @return double
	 */
	public function getIncreaseOrDecreaseInPrepaidExpenses()
	{
		return $this->IncreaseOrDecreaseInPrepaidExpenses;
	}
	/**
	 * Set IncreaseOrDecreaseInOtherCurrentAssets
	 * @param double IncreaseOrDecreaseInOtherCurrentAssets
	 * @return double
	 */
	public function setIncreaseOrDecreaseInOtherCurrentAssets($_IncreaseOrDecreaseInOtherCurrentAssets)
	{
		return ($this->IncreaseOrDecreaseInOtherCurrentAssets = $_IncreaseOrDecreaseInOtherCurrentAssets);
	}
	/**
	 * Get IncreaseOrDecreaseInOtherCurrentAssets
	 * @return double
	 */
	public function getIncreaseOrDecreaseInOtherCurrentAssets()
	{
		return $this->IncreaseOrDecreaseInOtherCurrentAssets;
	}
	/**
	 * Set IncreaseOrDecreaseInPayables
	 * @param double IncreaseOrDecreaseInPayables
	 * @return double
	 */
	public function setIncreaseOrDecreaseInPayables($_IncreaseOrDecreaseInPayables)
	{
		return ($this->IncreaseOrDecreaseInPayables = $_IncreaseOrDecreaseInPayables);
	}
	/**
	 * Get IncreaseOrDecreaseInPayables
	 * @return double
	 */
	public function getIncreaseOrDecreaseInPayables()
	{
		return $this->IncreaseOrDecreaseInPayables;
	}
	/**
	 * Set IncreaseOrDecreaseInOtherCurrentLiabilities
	 * @param double IncreaseOrDecreaseInOtherCurrentLiabilities
	 * @return double
	 */
	public function setIncreaseOrDecreaseInOtherCurrentLiabilities($_IncreaseOrDecreaseInOtherCurrentLiabilities)
	{
		return ($this->IncreaseOrDecreaseInOtherCurrentLiabilities = $_IncreaseOrDecreaseInOtherCurrentLiabilities);
	}
	/**
	 * Get IncreaseOrDecreaseInOtherCurrentLiabilities
	 * @return double
	 */
	public function getIncreaseOrDecreaseInOtherCurrentLiabilities()
	{
		return $this->IncreaseOrDecreaseInOtherCurrentLiabilities;
	}
	/**
	 * Set IncreaseOrDecreaseInOtherWorkingCapital
	 * @param double IncreaseOrDecreaseInOtherWorkingCapital
	 * @return double
	 */
	public function setIncreaseOrDecreaseInOtherWorkingCapital($_IncreaseOrDecreaseInOtherWorkingCapital)
	{
		return ($this->IncreaseOrDecreaseInOtherWorkingCapital = $_IncreaseOrDecreaseInOtherWorkingCapital);
	}
	/**
	 * Get IncreaseOrDecreaseInOtherWorkingCapital
	 * @return double
	 */
	public function getIncreaseOrDecreaseInOtherWorkingCapital()
	{
		return $this->IncreaseOrDecreaseInOtherWorkingCapital;
	}
	/**
	 * Set OtherNonCashItems
	 * @param double OtherNonCashItems
	 * @return double
	 */
	public function setOtherNonCashItems($_OtherNonCashItems)
	{
		return ($this->OtherNonCashItems = $_OtherNonCashItems);
	}
	/**
	 * Get OtherNonCashItems
	 * @return double
	 */
	public function getOtherNonCashItems()
	{
		return $this->OtherNonCashItems;
	}
	/**
	 * Set NetCashFromContinuingOperations
	 * @param double NetCashFromContinuingOperations
	 * @return double
	 */
	public function setNetCashFromContinuingOperations($_NetCashFromContinuingOperations)
	{
		return ($this->NetCashFromContinuingOperations = $_NetCashFromContinuingOperations);
	}
	/**
	 * Get NetCashFromContinuingOperations
	 * @return double
	 */
	public function getNetCashFromContinuingOperations()
	{
		return $this->NetCashFromContinuingOperations;
	}
	/**
	 * Set NetCashFromDiscontinuedOperations
	 * @param double NetCashFromDiscontinuedOperations
	 * @return double
	 */
	public function setNetCashFromDiscontinuedOperations($_NetCashFromDiscontinuedOperations)
	{
		return ($this->NetCashFromDiscontinuedOperations = $_NetCashFromDiscontinuedOperations);
	}
	/**
	 * Get NetCashFromDiscontinuedOperations
	 * @return double
	 */
	public function getNetCashFromDiscontinuedOperations()
	{
		return $this->NetCashFromDiscontinuedOperations;
	}
	/**
	 * Set NetCashFromOperatingActivities
	 * @param double NetCashFromOperatingActivities
	 * @return double
	 */
	public function setNetCashFromOperatingActivities($_NetCashFromOperatingActivities)
	{
		return ($this->NetCashFromOperatingActivities = $_NetCashFromOperatingActivities);
	}
	/**
	 * Get NetCashFromOperatingActivities
	 * @return double
	 */
	public function getNetCashFromOperatingActivities()
	{
		return $this->NetCashFromOperatingActivities;
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