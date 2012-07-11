<?php
/**
 * Class file for XiCompensationTypeOptionGranted
 * @date 08/07/2012
 */
/**
 * Class XiCompensationTypeOptionGranted
 * @date 08/07/2012
 */
class XiCompensationTypeOptionGranted extends XiCompensationTypeCommon
{
	/**
	 * The Source
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Source;
	/**
	 * The SourceDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SourceDate;
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Currency;
	/**
	 * The NumberOfSecuritiesUnderlyIngOptions
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $NumberOfSecuritiesUnderlyIngOptions;
	/**
	 * The PercentOfTotalOptionsGrantedInFiscalYear
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentOfTotalOptionsGrantedInFiscalYear;
	/**
	 * The ExerciseOrBasePrice
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ExerciseOrBasePrice;
	/**
	 * The ExpirationDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ExpirationDate;
	/**
	 * The GrantDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $GrantDate;
	/**
	 * The ValueOfOptionsPotentialValue5Percent
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ValueOfOptionsPotentialValue5Percent;
	/**
	 * The ValueOfOptionsPotentialValue10Percent
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ValueOfOptionsPotentialValue10Percent;
	/**
	 * The GrantDatePresentValue
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $GrantDatePresentValue;
	/**
	 * The EstimatedPayoutsNonEquityIncentivePlanAwardsThreshold
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $EstimatedPayoutsNonEquityIncentivePlanAwardsThreshold;
	/**
	 * The EstimatedPayoutsNonEquityIncentivePlanAwardsTarget
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $EstimatedPayoutsNonEquityIncentivePlanAwardsTarget;
	/**
	 * The EstimatedPayoutsNonEquityIncentivePlanAwardsMaximum
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $EstimatedPayoutsNonEquityIncentivePlanAwardsMaximum;
	/**
	 * The EstimatedPayoutsEquityIncentivePlanAwardsThreshold
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $EstimatedPayoutsEquityIncentivePlanAwardsThreshold;
	/**
	 * The EstimatedPayoutsEquityIncentivePlanAwardsTarget
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $EstimatedPayoutsEquityIncentivePlanAwardsTarget;
	/**
	 * The EstimatedPayoutsEquityIncentivePlanAwardsMaximum
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $EstimatedPayoutsEquityIncentivePlanAwardsMaximum;
	/**
	 * The AllOtherStockAwardsNumberOfSharesOrStockOrUnits
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AllOtherStockAwardsNumberOfSharesOrStockOrUnits;
	/**
	 * The AllOtherStockAwardsNumberOfSecuritiesUnderlyIngOptions
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AllOtherStockAwardsNumberOfSecuritiesUnderlyIngOptions;
	/**
	 * The GrantDateFairValueOfStockandOptionAwards
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $GrantDateFairValueOfStockandOptionAwards;
	/**
	 * Constructor
	 * @param string Source
	 * @param string SourceDate
	 * @param string Currency
	 * @param int NumberOfSecuritiesUnderlyIngOptions
	 * @param double PercentOfTotalOptionsGrantedInFiscalYear
	 * @param double ExerciseOrBasePrice
	 * @param string ExpirationDate
	 * @param string GrantDate
	 * @param double ValueOfOptionsPotentialValue5Percent
	 * @param double ValueOfOptionsPotentialValue10Percent
	 * @param double GrantDatePresentValue
	 * @param double EstimatedPayoutsNonEquityIncentivePlanAwardsThreshold
	 * @param double EstimatedPayoutsNonEquityIncentivePlanAwardsTarget
	 * @param double EstimatedPayoutsNonEquityIncentivePlanAwardsMaximum
	 * @param double EstimatedPayoutsEquityIncentivePlanAwardsThreshold
	 * @param double EstimatedPayoutsEquityIncentivePlanAwardsTarget
	 * @param double EstimatedPayoutsEquityIncentivePlanAwardsMaximum
	 * @param double AllOtherStockAwardsNumberOfSharesOrStockOrUnits
	 * @param double AllOtherStockAwardsNumberOfSecuritiesUnderlyIngOptions
	 * @param double GrantDateFairValueOfStockandOptionAwards
	 * @return XiCompensationTypeOptionGranted
	 */
	public function __construct($_Source = null,$_SourceDate = null,$_Currency = null,$_NumberOfSecuritiesUnderlyIngOptions,$_PercentOfTotalOptionsGrantedInFiscalYear,$_ExerciseOrBasePrice,$_ExpirationDate = null,$_GrantDate = null,$_ValueOfOptionsPotentialValue5Percent,$_ValueOfOptionsPotentialValue10Percent,$_GrantDatePresentValue,$_EstimatedPayoutsNonEquityIncentivePlanAwardsThreshold,$_EstimatedPayoutsNonEquityIncentivePlanAwardsTarget,$_EstimatedPayoutsNonEquityIncentivePlanAwardsMaximum,$_EstimatedPayoutsEquityIncentivePlanAwardsThreshold,$_EstimatedPayoutsEquityIncentivePlanAwardsTarget,$_EstimatedPayoutsEquityIncentivePlanAwardsMaximum,$_AllOtherStockAwardsNumberOfSharesOrStockOrUnits,$_AllOtherStockAwardsNumberOfSecuritiesUnderlyIngOptions,$_GrantDateFairValueOfStockandOptionAwards)
	{
		XiCompensationWsdlClass::__construct(array('Source'=>$_Source,'SourceDate'=>$_SourceDate,'Currency'=>$_Currency,'NumberOfSecuritiesUnderlyIngOptions'=>$_NumberOfSecuritiesUnderlyIngOptions,'PercentOfTotalOptionsGrantedInFiscalYear'=>$_PercentOfTotalOptionsGrantedInFiscalYear,'ExerciseOrBasePrice'=>$_ExerciseOrBasePrice,'ExpirationDate'=>$_ExpirationDate,'GrantDate'=>$_GrantDate,'ValueOfOptionsPotentialValue5Percent'=>$_ValueOfOptionsPotentialValue5Percent,'ValueOfOptionsPotentialValue10Percent'=>$_ValueOfOptionsPotentialValue10Percent,'GrantDatePresentValue'=>$_GrantDatePresentValue,'EstimatedPayoutsNonEquityIncentivePlanAwardsThreshold'=>$_EstimatedPayoutsNonEquityIncentivePlanAwardsThreshold,'EstimatedPayoutsNonEquityIncentivePlanAwardsTarget'=>$_EstimatedPayoutsNonEquityIncentivePlanAwardsTarget,'EstimatedPayoutsNonEquityIncentivePlanAwardsMaximum'=>$_EstimatedPayoutsNonEquityIncentivePlanAwardsMaximum,'EstimatedPayoutsEquityIncentivePlanAwardsThreshold'=>$_EstimatedPayoutsEquityIncentivePlanAwardsThreshold,'EstimatedPayoutsEquityIncentivePlanAwardsTarget'=>$_EstimatedPayoutsEquityIncentivePlanAwardsTarget,'EstimatedPayoutsEquityIncentivePlanAwardsMaximum'=>$_EstimatedPayoutsEquityIncentivePlanAwardsMaximum,'AllOtherStockAwardsNumberOfSharesOrStockOrUnits'=>$_AllOtherStockAwardsNumberOfSharesOrStockOrUnits,'AllOtherStockAwardsNumberOfSecuritiesUnderlyIngOptions'=>$_AllOtherStockAwardsNumberOfSecuritiesUnderlyIngOptions,'GrantDateFairValueOfStockandOptionAwards'=>$_GrantDateFairValueOfStockandOptionAwards));
	}
	/**
	 * Set Source
	 * @param string Source
	 * @return string
	 */
	public function setSource($_Source)
	{
		return ($this->Source = $_Source);
	}
	/**
	 * Get Source
	 * @return string
	 */
	public function getSource()
	{
		return $this->Source;
	}
	/**
	 * Set SourceDate
	 * @param string SourceDate
	 * @return string
	 */
	public function setSourceDate($_SourceDate)
	{
		return ($this->SourceDate = $_SourceDate);
	}
	/**
	 * Get SourceDate
	 * @return string
	 */
	public function getSourceDate()
	{
		return $this->SourceDate;
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
	 * Set NumberOfSecuritiesUnderlyIngOptions
	 * @param int NumberOfSecuritiesUnderlyIngOptions
	 * @return int
	 */
	public function setNumberOfSecuritiesUnderlyIngOptions($_NumberOfSecuritiesUnderlyIngOptions)
	{
		return ($this->NumberOfSecuritiesUnderlyIngOptions = $_NumberOfSecuritiesUnderlyIngOptions);
	}
	/**
	 * Get NumberOfSecuritiesUnderlyIngOptions
	 * @return int
	 */
	public function getNumberOfSecuritiesUnderlyIngOptions()
	{
		return $this->NumberOfSecuritiesUnderlyIngOptions;
	}
	/**
	 * Set PercentOfTotalOptionsGrantedInFiscalYear
	 * @param double PercentOfTotalOptionsGrantedInFiscalYear
	 * @return double
	 */
	public function setPercentOfTotalOptionsGrantedInFiscalYear($_PercentOfTotalOptionsGrantedInFiscalYear)
	{
		return ($this->PercentOfTotalOptionsGrantedInFiscalYear = $_PercentOfTotalOptionsGrantedInFiscalYear);
	}
	/**
	 * Get PercentOfTotalOptionsGrantedInFiscalYear
	 * @return double
	 */
	public function getPercentOfTotalOptionsGrantedInFiscalYear()
	{
		return $this->PercentOfTotalOptionsGrantedInFiscalYear;
	}
	/**
	 * Set ExerciseOrBasePrice
	 * @param double ExerciseOrBasePrice
	 * @return double
	 */
	public function setExerciseOrBasePrice($_ExerciseOrBasePrice)
	{
		return ($this->ExerciseOrBasePrice = $_ExerciseOrBasePrice);
	}
	/**
	 * Get ExerciseOrBasePrice
	 * @return double
	 */
	public function getExerciseOrBasePrice()
	{
		return $this->ExerciseOrBasePrice;
	}
	/**
	 * Set ExpirationDate
	 * @param string ExpirationDate
	 * @return string
	 */
	public function setExpirationDate($_ExpirationDate)
	{
		return ($this->ExpirationDate = $_ExpirationDate);
	}
	/**
	 * Get ExpirationDate
	 * @return string
	 */
	public function getExpirationDate()
	{
		return $this->ExpirationDate;
	}
	/**
	 * Set GrantDate
	 * @param string GrantDate
	 * @return string
	 */
	public function setGrantDate($_GrantDate)
	{
		return ($this->GrantDate = $_GrantDate);
	}
	/**
	 * Get GrantDate
	 * @return string
	 */
	public function getGrantDate()
	{
		return $this->GrantDate;
	}
	/**
	 * Set ValueOfOptionsPotentialValue5Percent
	 * @param double ValueOfOptionsPotentialValue5Percent
	 * @return double
	 */
	public function setValueOfOptionsPotentialValue5Percent($_ValueOfOptionsPotentialValue5Percent)
	{
		return ($this->ValueOfOptionsPotentialValue5Percent = $_ValueOfOptionsPotentialValue5Percent);
	}
	/**
	 * Get ValueOfOptionsPotentialValue5Percent
	 * @return double
	 */
	public function getValueOfOptionsPotentialValue5Percent()
	{
		return $this->ValueOfOptionsPotentialValue5Percent;
	}
	/**
	 * Set ValueOfOptionsPotentialValue10Percent
	 * @param double ValueOfOptionsPotentialValue10Percent
	 * @return double
	 */
	public function setValueOfOptionsPotentialValue10Percent($_ValueOfOptionsPotentialValue10Percent)
	{
		return ($this->ValueOfOptionsPotentialValue10Percent = $_ValueOfOptionsPotentialValue10Percent);
	}
	/**
	 * Get ValueOfOptionsPotentialValue10Percent
	 * @return double
	 */
	public function getValueOfOptionsPotentialValue10Percent()
	{
		return $this->ValueOfOptionsPotentialValue10Percent;
	}
	/**
	 * Set GrantDatePresentValue
	 * @param double GrantDatePresentValue
	 * @return double
	 */
	public function setGrantDatePresentValue($_GrantDatePresentValue)
	{
		return ($this->GrantDatePresentValue = $_GrantDatePresentValue);
	}
	/**
	 * Get GrantDatePresentValue
	 * @return double
	 */
	public function getGrantDatePresentValue()
	{
		return $this->GrantDatePresentValue;
	}
	/**
	 * Set EstimatedPayoutsNonEquityIncentivePlanAwardsThreshold
	 * @param double EstimatedPayoutsNonEquityIncentivePlanAwardsThreshold
	 * @return double
	 */
	public function setEstimatedPayoutsNonEquityIncentivePlanAwardsThreshold($_EstimatedPayoutsNonEquityIncentivePlanAwardsThreshold)
	{
		return ($this->EstimatedPayoutsNonEquityIncentivePlanAwardsThreshold = $_EstimatedPayoutsNonEquityIncentivePlanAwardsThreshold);
	}
	/**
	 * Get EstimatedPayoutsNonEquityIncentivePlanAwardsThreshold
	 * @return double
	 */
	public function getEstimatedPayoutsNonEquityIncentivePlanAwardsThreshold()
	{
		return $this->EstimatedPayoutsNonEquityIncentivePlanAwardsThreshold;
	}
	/**
	 * Set EstimatedPayoutsNonEquityIncentivePlanAwardsTarget
	 * @param double EstimatedPayoutsNonEquityIncentivePlanAwardsTarget
	 * @return double
	 */
	public function setEstimatedPayoutsNonEquityIncentivePlanAwardsTarget($_EstimatedPayoutsNonEquityIncentivePlanAwardsTarget)
	{
		return ($this->EstimatedPayoutsNonEquityIncentivePlanAwardsTarget = $_EstimatedPayoutsNonEquityIncentivePlanAwardsTarget);
	}
	/**
	 * Get EstimatedPayoutsNonEquityIncentivePlanAwardsTarget
	 * @return double
	 */
	public function getEstimatedPayoutsNonEquityIncentivePlanAwardsTarget()
	{
		return $this->EstimatedPayoutsNonEquityIncentivePlanAwardsTarget;
	}
	/**
	 * Set EstimatedPayoutsNonEquityIncentivePlanAwardsMaximum
	 * @param double EstimatedPayoutsNonEquityIncentivePlanAwardsMaximum
	 * @return double
	 */
	public function setEstimatedPayoutsNonEquityIncentivePlanAwardsMaximum($_EstimatedPayoutsNonEquityIncentivePlanAwardsMaximum)
	{
		return ($this->EstimatedPayoutsNonEquityIncentivePlanAwardsMaximum = $_EstimatedPayoutsNonEquityIncentivePlanAwardsMaximum);
	}
	/**
	 * Get EstimatedPayoutsNonEquityIncentivePlanAwardsMaximum
	 * @return double
	 */
	public function getEstimatedPayoutsNonEquityIncentivePlanAwardsMaximum()
	{
		return $this->EstimatedPayoutsNonEquityIncentivePlanAwardsMaximum;
	}
	/**
	 * Set EstimatedPayoutsEquityIncentivePlanAwardsThreshold
	 * @param double EstimatedPayoutsEquityIncentivePlanAwardsThreshold
	 * @return double
	 */
	public function setEstimatedPayoutsEquityIncentivePlanAwardsThreshold($_EstimatedPayoutsEquityIncentivePlanAwardsThreshold)
	{
		return ($this->EstimatedPayoutsEquityIncentivePlanAwardsThreshold = $_EstimatedPayoutsEquityIncentivePlanAwardsThreshold);
	}
	/**
	 * Get EstimatedPayoutsEquityIncentivePlanAwardsThreshold
	 * @return double
	 */
	public function getEstimatedPayoutsEquityIncentivePlanAwardsThreshold()
	{
		return $this->EstimatedPayoutsEquityIncentivePlanAwardsThreshold;
	}
	/**
	 * Set EstimatedPayoutsEquityIncentivePlanAwardsTarget
	 * @param double EstimatedPayoutsEquityIncentivePlanAwardsTarget
	 * @return double
	 */
	public function setEstimatedPayoutsEquityIncentivePlanAwardsTarget($_EstimatedPayoutsEquityIncentivePlanAwardsTarget)
	{
		return ($this->EstimatedPayoutsEquityIncentivePlanAwardsTarget = $_EstimatedPayoutsEquityIncentivePlanAwardsTarget);
	}
	/**
	 * Get EstimatedPayoutsEquityIncentivePlanAwardsTarget
	 * @return double
	 */
	public function getEstimatedPayoutsEquityIncentivePlanAwardsTarget()
	{
		return $this->EstimatedPayoutsEquityIncentivePlanAwardsTarget;
	}
	/**
	 * Set EstimatedPayoutsEquityIncentivePlanAwardsMaximum
	 * @param double EstimatedPayoutsEquityIncentivePlanAwardsMaximum
	 * @return double
	 */
	public function setEstimatedPayoutsEquityIncentivePlanAwardsMaximum($_EstimatedPayoutsEquityIncentivePlanAwardsMaximum)
	{
		return ($this->EstimatedPayoutsEquityIncentivePlanAwardsMaximum = $_EstimatedPayoutsEquityIncentivePlanAwardsMaximum);
	}
	/**
	 * Get EstimatedPayoutsEquityIncentivePlanAwardsMaximum
	 * @return double
	 */
	public function getEstimatedPayoutsEquityIncentivePlanAwardsMaximum()
	{
		return $this->EstimatedPayoutsEquityIncentivePlanAwardsMaximum;
	}
	/**
	 * Set AllOtherStockAwardsNumberOfSharesOrStockOrUnits
	 * @param double AllOtherStockAwardsNumberOfSharesOrStockOrUnits
	 * @return double
	 */
	public function setAllOtherStockAwardsNumberOfSharesOrStockOrUnits($_AllOtherStockAwardsNumberOfSharesOrStockOrUnits)
	{
		return ($this->AllOtherStockAwardsNumberOfSharesOrStockOrUnits = $_AllOtherStockAwardsNumberOfSharesOrStockOrUnits);
	}
	/**
	 * Get AllOtherStockAwardsNumberOfSharesOrStockOrUnits
	 * @return double
	 */
	public function getAllOtherStockAwardsNumberOfSharesOrStockOrUnits()
	{
		return $this->AllOtherStockAwardsNumberOfSharesOrStockOrUnits;
	}
	/**
	 * Set AllOtherStockAwardsNumberOfSecuritiesUnderlyIngOptions
	 * @param double AllOtherStockAwardsNumberOfSecuritiesUnderlyIngOptions
	 * @return double
	 */
	public function setAllOtherStockAwardsNumberOfSecuritiesUnderlyIngOptions($_AllOtherStockAwardsNumberOfSecuritiesUnderlyIngOptions)
	{
		return ($this->AllOtherStockAwardsNumberOfSecuritiesUnderlyIngOptions = $_AllOtherStockAwardsNumberOfSecuritiesUnderlyIngOptions);
	}
	/**
	 * Get AllOtherStockAwardsNumberOfSecuritiesUnderlyIngOptions
	 * @return double
	 */
	public function getAllOtherStockAwardsNumberOfSecuritiesUnderlyIngOptions()
	{
		return $this->AllOtherStockAwardsNumberOfSecuritiesUnderlyIngOptions;
	}
	/**
	 * Set GrantDateFairValueOfStockandOptionAwards
	 * @param double GrantDateFairValueOfStockandOptionAwards
	 * @return double
	 */
	public function setGrantDateFairValueOfStockandOptionAwards($_GrantDateFairValueOfStockandOptionAwards)
	{
		return ($this->GrantDateFairValueOfStockandOptionAwards = $_GrantDateFairValueOfStockandOptionAwards);
	}
	/**
	 * Get GrantDateFairValueOfStockandOptionAwards
	 * @return double
	 */
	public function getGrantDateFairValueOfStockandOptionAwards()
	{
		return $this->GrantDateFairValueOfStockandOptionAwards;
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