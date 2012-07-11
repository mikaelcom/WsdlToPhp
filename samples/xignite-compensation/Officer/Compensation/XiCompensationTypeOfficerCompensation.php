<?php
/**
 * Class file for XiCompensationTypeOfficerCompensation
 * @date 08/07/2012
 */
/**
 * Class XiCompensationTypeOfficerCompensation
 * @date 08/07/2012
 */
class XiCompensationTypeOfficerCompensation extends XiCompensationTypeCommon
{
	/**
	 * The OfficerID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $OfficerID;
	/**
	 * The Officer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCompensationTypeOfficer
	 */
	public $Officer;
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
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Currency;
	/**
	 * Constructor
	 * @param string OfficerID
	 * @param XiCompensationTypeOfficer Officer
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
	 * @param string Currency
	 * @return XiCompensationTypeOfficerCompensation
	 */
	public function __construct($_OfficerID = null,$_Officer = null,$_DirectorAsReported = null,$_DirectorStandardized = null,$_Year,$_Salary,$_Bonus,$_OtherAnnualCompensation,$_RestrictedStockAwards,$_SecurityUnderlyingOptions,$_LongTermIncentivePlanPayouts,$_AllOtherCompensation,$_Currency = null)
	{
		XiCompensationWsdlClass::__construct(array('OfficerID'=>$_OfficerID,'Officer'=>$_Officer,'DirectorAsReported'=>$_DirectorAsReported,'DirectorStandardized'=>$_DirectorStandardized,'Year'=>$_Year,'Salary'=>$_Salary,'Bonus'=>$_Bonus,'OtherAnnualCompensation'=>$_OtherAnnualCompensation,'RestrictedStockAwards'=>$_RestrictedStockAwards,'SecurityUnderlyingOptions'=>$_SecurityUnderlyingOptions,'LongTermIncentivePlanPayouts'=>$_LongTermIncentivePlanPayouts,'AllOtherCompensation'=>$_AllOtherCompensation,'Currency'=>$_Currency));
	}
	/**
	 * Set OfficerID
	 * @param string OfficerID
	 * @return string
	 */
	public function setOfficerID($_OfficerID)
	{
		return ($this->OfficerID = $_OfficerID);
	}
	/**
	 * Get OfficerID
	 * @return string
	 */
	public function getOfficerID()
	{
		return $this->OfficerID;
	}
	/**
	 * Set Officer
	 * @param Officer Officer
	 * @return Officer
	 */
	public function setOfficer($_Officer)
	{
		return ($this->Officer = $_Officer);
	}
	/**
	 * Get Officer
	 * @return XiCompensationTypeOfficer
	 */
	public function getOfficer()
	{
		return $this->Officer;
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