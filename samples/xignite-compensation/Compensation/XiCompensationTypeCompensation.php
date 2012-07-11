<?php
/**
 * Class file for XiCompensationTypeCompensation
 * @date 08/07/2012
 */
/**
 * Class XiCompensationTypeCompensation
 * @date 08/07/2012
 */
class XiCompensationTypeCompensation extends XiCompensationTypeCommon
{
	/**
	 * The DirectorAsReported
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DirectorAsReported;
	/**
	 * The DirectorStandardized
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DirectorStandardized;
	/**
	 * The Year
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Year;
	/**
	 * The Salary
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Salary;
	/**
	 * The Bonus
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Bonus;
	/**
	 * The OtherAnnualCompensation
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OtherAnnualCompensation;
	/**
	 * The RestrictedStockAwards
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $RestrictedStockAwards;
	/**
	 * The SecurityUnderlyingOptions
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $SecurityUnderlyingOptions;
	/**
	 * The LongTermIncentivePlanPayouts
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $LongTermIncentivePlanPayouts;
	/**
	 * The AllOtherCompensation
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AllOtherCompensation;
	/**
	 * The OptionAwards
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OptionAwards;
	/**
	 * The NonEquityIncentivePlanCompensation
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NonEquityIncentivePlanCompensation;
	/**
	 * The ChangeInPensionValueAndNondisqualifiedDeferredCompensationEarnings
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ChangeInPensionValueAndNondisqualifiedDeferredCompensationEarnings;
	/**
	 * The TotalCompensation
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $TotalCompensation;
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Currency;
	/**
	 * Constructor
	 * @param string DirectorAsReported
	 * @param string DirectorStandardized
	 * @param int Year
	 * @param double Salary
	 * @param double Bonus
	 * @param double OtherAnnualCompensation
	 * @param double RestrictedStockAwards
	 * @param double SecurityUnderlyingOptions
	 * @param double LongTermIncentivePlanPayouts
	 * @param double AllOtherCompensation
	 * @param double OptionAwards
	 * @param double NonEquityIncentivePlanCompensation
	 * @param double ChangeInPensionValueAndNondisqualifiedDeferredCompensationEarnings
	 * @param double TotalCompensation
	 * @param string Currency
	 * @return XiCompensationTypeCompensation
	 */
	public function __construct($_DirectorAsReported = null,$_DirectorStandardized = null,$_Year,$_Salary,$_Bonus,$_OtherAnnualCompensation,$_RestrictedStockAwards,$_SecurityUnderlyingOptions,$_LongTermIncentivePlanPayouts,$_AllOtherCompensation,$_OptionAwards,$_NonEquityIncentivePlanCompensation,$_ChangeInPensionValueAndNondisqualifiedDeferredCompensationEarnings,$_TotalCompensation,$_Currency = null)
	{
		XiCompensationWsdlClass::__construct(array('DirectorAsReported'=>$_DirectorAsReported,'DirectorStandardized'=>$_DirectorStandardized,'Year'=>$_Year,'Salary'=>$_Salary,'Bonus'=>$_Bonus,'OtherAnnualCompensation'=>$_OtherAnnualCompensation,'RestrictedStockAwards'=>$_RestrictedStockAwards,'SecurityUnderlyingOptions'=>$_SecurityUnderlyingOptions,'LongTermIncentivePlanPayouts'=>$_LongTermIncentivePlanPayouts,'AllOtherCompensation'=>$_AllOtherCompensation,'OptionAwards'=>$_OptionAwards,'NonEquityIncentivePlanCompensation'=>$_NonEquityIncentivePlanCompensation,'ChangeInPensionValueAndNondisqualifiedDeferredCompensationEarnings'=>$_ChangeInPensionValueAndNondisqualifiedDeferredCompensationEarnings,'TotalCompensation'=>$_TotalCompensation,'Currency'=>$_Currency));
	}
	/**
	 * Set DirectorAsReported
	 * @param string DirectorAsReported
	 * @return string
	 */
	public function setDirectorAsReported($_DirectorAsReported)
	{
		return ($this->DirectorAsReported = $_DirectorAsReported);
	}
	/**
	 * Get DirectorAsReported
	 * @return string
	 */
	public function getDirectorAsReported()
	{
		return $this->DirectorAsReported;
	}
	/**
	 * Set DirectorStandardized
	 * @param string DirectorStandardized
	 * @return string
	 */
	public function setDirectorStandardized($_DirectorStandardized)
	{
		return ($this->DirectorStandardized = $_DirectorStandardized);
	}
	/**
	 * Get DirectorStandardized
	 * @return string
	 */
	public function getDirectorStandardized()
	{
		return $this->DirectorStandardized;
	}
	/**
	 * Set Year
	 * @param int Year
	 * @return int
	 */
	public function setYear($_Year)
	{
		return ($this->Year = $_Year);
	}
	/**
	 * Get Year
	 * @return int
	 */
	public function getYear()
	{
		return $this->Year;
	}
	/**
	 * Set Salary
	 * @param double Salary
	 * @return double
	 */
	public function setSalary($_Salary)
	{
		return ($this->Salary = $_Salary);
	}
	/**
	 * Get Salary
	 * @return double
	 */
	public function getSalary()
	{
		return $this->Salary;
	}
	/**
	 * Set Bonus
	 * @param double Bonus
	 * @return double
	 */
	public function setBonus($_Bonus)
	{
		return ($this->Bonus = $_Bonus);
	}
	/**
	 * Get Bonus
	 * @return double
	 */
	public function getBonus()
	{
		return $this->Bonus;
	}
	/**
	 * Set OtherAnnualCompensation
	 * @param double OtherAnnualCompensation
	 * @return double
	 */
	public function setOtherAnnualCompensation($_OtherAnnualCompensation)
	{
		return ($this->OtherAnnualCompensation = $_OtherAnnualCompensation);
	}
	/**
	 * Get OtherAnnualCompensation
	 * @return double
	 */
	public function getOtherAnnualCompensation()
	{
		return $this->OtherAnnualCompensation;
	}
	/**
	 * Set RestrictedStockAwards
	 * @param double RestrictedStockAwards
	 * @return double
	 */
	public function setRestrictedStockAwards($_RestrictedStockAwards)
	{
		return ($this->RestrictedStockAwards = $_RestrictedStockAwards);
	}
	/**
	 * Get RestrictedStockAwards
	 * @return double
	 */
	public function getRestrictedStockAwards()
	{
		return $this->RestrictedStockAwards;
	}
	/**
	 * Set SecurityUnderlyingOptions
	 * @param double SecurityUnderlyingOptions
	 * @return double
	 */
	public function setSecurityUnderlyingOptions($_SecurityUnderlyingOptions)
	{
		return ($this->SecurityUnderlyingOptions = $_SecurityUnderlyingOptions);
	}
	/**
	 * Get SecurityUnderlyingOptions
	 * @return double
	 */
	public function getSecurityUnderlyingOptions()
	{
		return $this->SecurityUnderlyingOptions;
	}
	/**
	 * Set LongTermIncentivePlanPayouts
	 * @param double LongTermIncentivePlanPayouts
	 * @return double
	 */
	public function setLongTermIncentivePlanPayouts($_LongTermIncentivePlanPayouts)
	{
		return ($this->LongTermIncentivePlanPayouts = $_LongTermIncentivePlanPayouts);
	}
	/**
	 * Get LongTermIncentivePlanPayouts
	 * @return double
	 */
	public function getLongTermIncentivePlanPayouts()
	{
		return $this->LongTermIncentivePlanPayouts;
	}
	/**
	 * Set AllOtherCompensation
	 * @param double AllOtherCompensation
	 * @return double
	 */
	public function setAllOtherCompensation($_AllOtherCompensation)
	{
		return ($this->AllOtherCompensation = $_AllOtherCompensation);
	}
	/**
	 * Get AllOtherCompensation
	 * @return double
	 */
	public function getAllOtherCompensation()
	{
		return $this->AllOtherCompensation;
	}
	/**
	 * Set OptionAwards
	 * @param double OptionAwards
	 * @return double
	 */
	public function setOptionAwards($_OptionAwards)
	{
		return ($this->OptionAwards = $_OptionAwards);
	}
	/**
	 * Get OptionAwards
	 * @return double
	 */
	public function getOptionAwards()
	{
		return $this->OptionAwards;
	}
	/**
	 * Set NonEquityIncentivePlanCompensation
	 * @param double NonEquityIncentivePlanCompensation
	 * @return double
	 */
	public function setNonEquityIncentivePlanCompensation($_NonEquityIncentivePlanCompensation)
	{
		return ($this->NonEquityIncentivePlanCompensation = $_NonEquityIncentivePlanCompensation);
	}
	/**
	 * Get NonEquityIncentivePlanCompensation
	 * @return double
	 */
	public function getNonEquityIncentivePlanCompensation()
	{
		return $this->NonEquityIncentivePlanCompensation;
	}
	/**
	 * Set ChangeInPensionValueAndNondisqualifiedDeferredCompensationEarnings
	 * @param double ChangeInPensionValueAndNondisqualifiedDeferredCompensationEarnings
	 * @return double
	 */
	public function setChangeInPensionValueAndNondisqualifiedDeferredCompensationEarnings($_ChangeInPensionValueAndNondisqualifiedDeferredCompensationEarnings)
	{
		return ($this->ChangeInPensionValueAndNondisqualifiedDeferredCompensationEarnings = $_ChangeInPensionValueAndNondisqualifiedDeferredCompensationEarnings);
	}
	/**
	 * Get ChangeInPensionValueAndNondisqualifiedDeferredCompensationEarnings
	 * @return double
	 */
	public function getChangeInPensionValueAndNondisqualifiedDeferredCompensationEarnings()
	{
		return $this->ChangeInPensionValueAndNondisqualifiedDeferredCompensationEarnings;
	}
	/**
	 * Set TotalCompensation
	 * @param double TotalCompensation
	 * @return double
	 */
	public function setTotalCompensation($_TotalCompensation)
	{
		return ($this->TotalCompensation = $_TotalCompensation);
	}
	/**
	 * Get TotalCompensation
	 * @return double
	 */
	public function getTotalCompensation()
	{
		return $this->TotalCompensation;
	}
	/**
	 * Set Currency
	 * @param string Currency
	 * @return string
	 */
	public function setCurrency($_Currency)
	{
		return ($this->Currency = $_Currency);
	}
	/**
	 * Get Currency
	 * @return string
	 */
	public function getCurrency()
	{
		return $this->Currency;
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