<?php
/**
 * Class file for XiFinancialsTypeOperatingExpenses
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeOperatingExpenses
 * @date 08/07/2012
 */
class XiFinancialsTypeOperatingExpenses extends XiFinancialsWsdlClass
{
	/**
	 * The ResearchAndDevelopmentExpenses
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ResearchAndDevelopmentExpenses;
	/**
	 * The SellingGeneralAndAdministrativeExpenses
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $SellingGeneralAndAdministrativeExpenses;
	/**
	 * The AdvertisingExpenses
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AdvertisingExpenses;
	/**
	 * The OperatingIncomeBeforeDepreciation
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OperatingIncomeBeforeDepreciation;
	/**
	 * The OperatingIncome
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OperatingIncome;
	/**
	 * The Depreciation
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Depreciation;
	/**
	 * The DepreciationUnreconciled
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $DepreciationUnreconciled;
	/**
	 * The Amortization
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Amortization;
	/**
	 * The AmortizationOfIntangibles
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AmortizationOfIntangibles;
	/**
	 * The OperatingIncomeAfterDepreciation
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OperatingIncomeAfterDepreciation;
	/**
	 * Constructor
	 * @param double ResearchAndDevelopmentExpenses
	 * @param double SellingGeneralAndAdministrativeExpenses
	 * @param double AdvertisingExpenses
	 * @param double OperatingIncomeBeforeDepreciation
	 * @param double OperatingIncome
	 * @param double Depreciation
	 * @param double DepreciationUnreconciled
	 * @param double Amortization
	 * @param double AmortizationOfIntangibles
	 * @param double OperatingIncomeAfterDepreciation
	 * @return XiFinancialsTypeOperatingExpenses
	 */
	public function __construct($_ResearchAndDevelopmentExpenses,$_SellingGeneralAndAdministrativeExpenses,$_AdvertisingExpenses,$_OperatingIncomeBeforeDepreciation,$_OperatingIncome,$_Depreciation,$_DepreciationUnreconciled,$_Amortization,$_AmortizationOfIntangibles,$_OperatingIncomeAfterDepreciation)
	{
		parent::__construct(array('ResearchAndDevelopmentExpenses'=>$_ResearchAndDevelopmentExpenses,'SellingGeneralAndAdministrativeExpenses'=>$_SellingGeneralAndAdministrativeExpenses,'AdvertisingExpenses'=>$_AdvertisingExpenses,'OperatingIncomeBeforeDepreciation'=>$_OperatingIncomeBeforeDepreciation,'OperatingIncome'=>$_OperatingIncome,'Depreciation'=>$_Depreciation,'DepreciationUnreconciled'=>$_DepreciationUnreconciled,'Amortization'=>$_Amortization,'AmortizationOfIntangibles'=>$_AmortizationOfIntangibles,'OperatingIncomeAfterDepreciation'=>$_OperatingIncomeAfterDepreciation));
	}
	/**
	 * Set ResearchAndDevelopmentExpenses
	 * @param double ResearchAndDevelopmentExpenses
	 * @return double
	 */
	public function setResearchAndDevelopmentExpenses($_ResearchAndDevelopmentExpenses)
	{
		return ($this->ResearchAndDevelopmentExpenses = $_ResearchAndDevelopmentExpenses);
	}
	/**
	 * Get ResearchAndDevelopmentExpenses
	 * @return double
	 */
	public function getResearchAndDevelopmentExpenses()
	{
		return $this->ResearchAndDevelopmentExpenses;
	}
	/**
	 * Set SellingGeneralAndAdministrativeExpenses
	 * @param double SellingGeneralAndAdministrativeExpenses
	 * @return double
	 */
	public function setSellingGeneralAndAdministrativeExpenses($_SellingGeneralAndAdministrativeExpenses)
	{
		return ($this->SellingGeneralAndAdministrativeExpenses = $_SellingGeneralAndAdministrativeExpenses);
	}
	/**
	 * Get SellingGeneralAndAdministrativeExpenses
	 * @return double
	 */
	public function getSellingGeneralAndAdministrativeExpenses()
	{
		return $this->SellingGeneralAndAdministrativeExpenses;
	}
	/**
	 * Set AdvertisingExpenses
	 * @param double AdvertisingExpenses
	 * @return double
	 */
	public function setAdvertisingExpenses($_AdvertisingExpenses)
	{
		return ($this->AdvertisingExpenses = $_AdvertisingExpenses);
	}
	/**
	 * Get AdvertisingExpenses
	 * @return double
	 */
	public function getAdvertisingExpenses()
	{
		return $this->AdvertisingExpenses;
	}
	/**
	 * Set OperatingIncomeBeforeDepreciation
	 * @param double OperatingIncomeBeforeDepreciation
	 * @return double
	 */
	public function setOperatingIncomeBeforeDepreciation($_OperatingIncomeBeforeDepreciation)
	{
		return ($this->OperatingIncomeBeforeDepreciation = $_OperatingIncomeBeforeDepreciation);
	}
	/**
	 * Get OperatingIncomeBeforeDepreciation
	 * @return double
	 */
	public function getOperatingIncomeBeforeDepreciation()
	{
		return $this->OperatingIncomeBeforeDepreciation;
	}
	/**
	 * Set OperatingIncome
	 * @param double OperatingIncome
	 * @return double
	 */
	public function setOperatingIncome($_OperatingIncome)
	{
		return ($this->OperatingIncome = $_OperatingIncome);
	}
	/**
	 * Get OperatingIncome
	 * @return double
	 */
	public function getOperatingIncome()
	{
		return $this->OperatingIncome;
	}
	/**
	 * Set Depreciation
	 * @param double Depreciation
	 * @return double
	 */
	public function setDepreciation($_Depreciation)
	{
		return ($this->Depreciation = $_Depreciation);
	}
	/**
	 * Get Depreciation
	 * @return double
	 */
	public function getDepreciation()
	{
		return $this->Depreciation;
	}
	/**
	 * Set DepreciationUnreconciled
	 * @param double DepreciationUnreconciled
	 * @return double
	 */
	public function setDepreciationUnreconciled($_DepreciationUnreconciled)
	{
		return ($this->DepreciationUnreconciled = $_DepreciationUnreconciled);
	}
	/**
	 * Get DepreciationUnreconciled
	 * @return double
	 */
	public function getDepreciationUnreconciled()
	{
		return $this->DepreciationUnreconciled;
	}
	/**
	 * Set Amortization
	 * @param double Amortization
	 * @return double
	 */
	public function setAmortization($_Amortization)
	{
		return ($this->Amortization = $_Amortization);
	}
	/**
	 * Get Amortization
	 * @return double
	 */
	public function getAmortization()
	{
		return $this->Amortization;
	}
	/**
	 * Set AmortizationOfIntangibles
	 * @param double AmortizationOfIntangibles
	 * @return double
	 */
	public function setAmortizationOfIntangibles($_AmortizationOfIntangibles)
	{
		return ($this->AmortizationOfIntangibles = $_AmortizationOfIntangibles);
	}
	/**
	 * Get AmortizationOfIntangibles
	 * @return double
	 */
	public function getAmortizationOfIntangibles()
	{
		return $this->AmortizationOfIntangibles;
	}
	/**
	 * Set OperatingIncomeAfterDepreciation
	 * @param double OperatingIncomeAfterDepreciation
	 * @return double
	 */
	public function setOperatingIncomeAfterDepreciation($_OperatingIncomeAfterDepreciation)
	{
		return ($this->OperatingIncomeAfterDepreciation = $_OperatingIncomeAfterDepreciation);
	}
	/**
	 * Get OperatingIncomeAfterDepreciation
	 * @return double
	 */
	public function getOperatingIncomeAfterDepreciation()
	{
		return $this->OperatingIncomeAfterDepreciation;
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