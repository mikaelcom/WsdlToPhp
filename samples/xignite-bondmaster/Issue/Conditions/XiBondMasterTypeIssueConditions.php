<?php
/**
 * Class file for XiBondMasterTypeIssueConditions
 * @date 08/07/2012
 */
/**
 * Class XiBondMasterTypeIssueConditions
 * @date 08/07/2012
 */
class XiBondMasterTypeIssueConditions extends XiBondMasterWsdlClass
{
	/**
	 * The IssueStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IssueStatus;
	/**
	 * The PlacementType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PlacementType;
	/**
	 * The IssueDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IssueDate;
	/**
	 * The IssueTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IssueTime;
	/**
	 * The IssueAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IssueAmount;
	/**
	 * The IssueCurrency
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IssueCurrency;
	/**
	 * The OriginalDenominations
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $OriginalDenominations;
	/**
	 * The IssuePrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IssuePrice;
	/**
	 * The IssueUnit
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IssueUnit;
	/**
	 * The IssuePriceQuotationType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IssuePriceQuotationType;
	/**
	 * The IssuePriceFixingDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IssuePriceFixingDate;
	/**
	 * The PaymentType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PaymentType;
	/**
	 * The Domicile
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Domicile;
	/**
	 * The Location
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Location;
	/**
	 * The SubscriptionType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SubscriptionType;
	/**
	 * The SubscriptionPeriodStart
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SubscriptionPeriodStart;
	/**
	 * The SubscriptionPeriodEnd
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SubscriptionPeriodEnd;
	/**
	 * The PaymentOnSubscription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PaymentOnSubscription;
	/**
	 * The MinimumSubscription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MinimumSubscription;
	/**
	 * The SubscriptionIncrement
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SubscriptionIncrement;
	/**
	 * The PaymentDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PaymentDate;
	/**
	 * The DatedDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DatedDate;
	/**
	 * Constructor
	 * @param string IssueStatus
	 * @param string PlacementType
	 * @param string IssueDate
	 * @param string IssueTime
	 * @param string IssueAmount
	 * @param string IssueCurrency
	 * @param string OriginalDenominations
	 * @param string IssuePrice
	 * @param string IssueUnit
	 * @param string IssuePriceQuotationType
	 * @param string IssuePriceFixingDate
	 * @param string PaymentType
	 * @param string Domicile
	 * @param string Location
	 * @param string SubscriptionType
	 * @param string SubscriptionPeriodStart
	 * @param string SubscriptionPeriodEnd
	 * @param string PaymentOnSubscription
	 * @param string MinimumSubscription
	 * @param string SubscriptionIncrement
	 * @param string PaymentDate
	 * @param string DatedDate
	 * @return XiBondMasterTypeIssueConditions
	 */
	public function __construct($_IssueStatus = null,$_PlacementType = null,$_IssueDate = null,$_IssueTime = null,$_IssueAmount = null,$_IssueCurrency = null,$_OriginalDenominations = null,$_IssuePrice = null,$_IssueUnit = null,$_IssuePriceQuotationType = null,$_IssuePriceFixingDate = null,$_PaymentType = null,$_Domicile = null,$_Location = null,$_SubscriptionType = null,$_SubscriptionPeriodStart = null,$_SubscriptionPeriodEnd = null,$_PaymentOnSubscription = null,$_MinimumSubscription = null,$_SubscriptionIncrement = null,$_PaymentDate = null,$_DatedDate = null)
	{
		parent::__construct(array('IssueStatus'=>$_IssueStatus,'PlacementType'=>$_PlacementType,'IssueDate'=>$_IssueDate,'IssueTime'=>$_IssueTime,'IssueAmount'=>$_IssueAmount,'IssueCurrency'=>$_IssueCurrency,'OriginalDenominations'=>$_OriginalDenominations,'IssuePrice'=>$_IssuePrice,'IssueUnit'=>$_IssueUnit,'IssuePriceQuotationType'=>$_IssuePriceQuotationType,'IssuePriceFixingDate'=>$_IssuePriceFixingDate,'PaymentType'=>$_PaymentType,'Domicile'=>$_Domicile,'Location'=>$_Location,'SubscriptionType'=>$_SubscriptionType,'SubscriptionPeriodStart'=>$_SubscriptionPeriodStart,'SubscriptionPeriodEnd'=>$_SubscriptionPeriodEnd,'PaymentOnSubscription'=>$_PaymentOnSubscription,'MinimumSubscription'=>$_MinimumSubscription,'SubscriptionIncrement'=>$_SubscriptionIncrement,'PaymentDate'=>$_PaymentDate,'DatedDate'=>$_DatedDate));
	}
	/**
	 * Set IssueStatus
	 * @param string IssueStatus
	 * @return string
	 */
	public function setIssueStatus($_IssueStatus)
	{
		return ($this->IssueStatus = $_IssueStatus);
	}
	/**
	 * Get IssueStatus
	 * @return string
	 */
	public function getIssueStatus()
	{
		return $this->IssueStatus;
	}
	/**
	 * Set PlacementType
	 * @param string PlacementType
	 * @return string
	 */
	public function setPlacementType($_PlacementType)
	{
		return ($this->PlacementType = $_PlacementType);
	}
	/**
	 * Get PlacementType
	 * @return string
	 */
	public function getPlacementType()
	{
		return $this->PlacementType;
	}
	/**
	 * Set IssueDate
	 * @param string IssueDate
	 * @return string
	 */
	public function setIssueDate($_IssueDate)
	{
		return ($this->IssueDate = $_IssueDate);
	}
	/**
	 * Get IssueDate
	 * @return string
	 */
	public function getIssueDate()
	{
		return $this->IssueDate;
	}
	/**
	 * Set IssueTime
	 * @param string IssueTime
	 * @return string
	 */
	public function setIssueTime($_IssueTime)
	{
		return ($this->IssueTime = $_IssueTime);
	}
	/**
	 * Get IssueTime
	 * @return string
	 */
	public function getIssueTime()
	{
		return $this->IssueTime;
	}
	/**
	 * Set IssueAmount
	 * @param string IssueAmount
	 * @return string
	 */
	public function setIssueAmount($_IssueAmount)
	{
		return ($this->IssueAmount = $_IssueAmount);
	}
	/**
	 * Get IssueAmount
	 * @return string
	 */
	public function getIssueAmount()
	{
		return $this->IssueAmount;
	}
	/**
	 * Set IssueCurrency
	 * @param string IssueCurrency
	 * @return string
	 */
	public function setIssueCurrency($_IssueCurrency)
	{
		return ($this->IssueCurrency = $_IssueCurrency);
	}
	/**
	 * Get IssueCurrency
	 * @return string
	 */
	public function getIssueCurrency()
	{
		return $this->IssueCurrency;
	}
	/**
	 * Set OriginalDenominations
	 * @param string OriginalDenominations
	 * @return string
	 */
	public function setOriginalDenominations($_OriginalDenominations)
	{
		return ($this->OriginalDenominations = $_OriginalDenominations);
	}
	/**
	 * Get OriginalDenominations
	 * @return string
	 */
	public function getOriginalDenominations()
	{
		return $this->OriginalDenominations;
	}
	/**
	 * Set IssuePrice
	 * @param string IssuePrice
	 * @return string
	 */
	public function setIssuePrice($_IssuePrice)
	{
		return ($this->IssuePrice = $_IssuePrice);
	}
	/**
	 * Get IssuePrice
	 * @return string
	 */
	public function getIssuePrice()
	{
		return $this->IssuePrice;
	}
	/**
	 * Set IssueUnit
	 * @param string IssueUnit
	 * @return string
	 */
	public function setIssueUnit($_IssueUnit)
	{
		return ($this->IssueUnit = $_IssueUnit);
	}
	/**
	 * Get IssueUnit
	 * @return string
	 */
	public function getIssueUnit()
	{
		return $this->IssueUnit;
	}
	/**
	 * Set IssuePriceQuotationType
	 * @param string IssuePriceQuotationType
	 * @return string
	 */
	public function setIssuePriceQuotationType($_IssuePriceQuotationType)
	{
		return ($this->IssuePriceQuotationType = $_IssuePriceQuotationType);
	}
	/**
	 * Get IssuePriceQuotationType
	 * @return string
	 */
	public function getIssuePriceQuotationType()
	{
		return $this->IssuePriceQuotationType;
	}
	/**
	 * Set IssuePriceFixingDate
	 * @param string IssuePriceFixingDate
	 * @return string
	 */
	public function setIssuePriceFixingDate($_IssuePriceFixingDate)
	{
		return ($this->IssuePriceFixingDate = $_IssuePriceFixingDate);
	}
	/**
	 * Get IssuePriceFixingDate
	 * @return string
	 */
	public function getIssuePriceFixingDate()
	{
		return $this->IssuePriceFixingDate;
	}
	/**
	 * Set PaymentType
	 * @param string PaymentType
	 * @return string
	 */
	public function setPaymentType($_PaymentType)
	{
		return ($this->PaymentType = $_PaymentType);
	}
	/**
	 * Get PaymentType
	 * @return string
	 */
	public function getPaymentType()
	{
		return $this->PaymentType;
	}
	/**
	 * Set Domicile
	 * @param string Domicile
	 * @return string
	 */
	public function setDomicile($_Domicile)
	{
		return ($this->Domicile = $_Domicile);
	}
	/**
	 * Get Domicile
	 * @return string
	 */
	public function getDomicile()
	{
		return $this->Domicile;
	}
	/**
	 * Set Location
	 * @param string Location
	 * @return string
	 */
	public function setLocation($_Location)
	{
		return ($this->Location = $_Location);
	}
	/**
	 * Get Location
	 * @return string
	 */
	public function getLocation()
	{
		return $this->Location;
	}
	/**
	 * Set SubscriptionType
	 * @param string SubscriptionType
	 * @return string
	 */
	public function setSubscriptionType($_SubscriptionType)
	{
		return ($this->SubscriptionType = $_SubscriptionType);
	}
	/**
	 * Get SubscriptionType
	 * @return string
	 */
	public function getSubscriptionType()
	{
		return $this->SubscriptionType;
	}
	/**
	 * Set SubscriptionPeriodStart
	 * @param string SubscriptionPeriodStart
	 * @return string
	 */
	public function setSubscriptionPeriodStart($_SubscriptionPeriodStart)
	{
		return ($this->SubscriptionPeriodStart = $_SubscriptionPeriodStart);
	}
	/**
	 * Get SubscriptionPeriodStart
	 * @return string
	 */
	public function getSubscriptionPeriodStart()
	{
		return $this->SubscriptionPeriodStart;
	}
	/**
	 * Set SubscriptionPeriodEnd
	 * @param string SubscriptionPeriodEnd
	 * @return string
	 */
	public function setSubscriptionPeriodEnd($_SubscriptionPeriodEnd)
	{
		return ($this->SubscriptionPeriodEnd = $_SubscriptionPeriodEnd);
	}
	/**
	 * Get SubscriptionPeriodEnd
	 * @return string
	 */
	public function getSubscriptionPeriodEnd()
	{
		return $this->SubscriptionPeriodEnd;
	}
	/**
	 * Set PaymentOnSubscription
	 * @param string PaymentOnSubscription
	 * @return string
	 */
	public function setPaymentOnSubscription($_PaymentOnSubscription)
	{
		return ($this->PaymentOnSubscription = $_PaymentOnSubscription);
	}
	/**
	 * Get PaymentOnSubscription
	 * @return string
	 */
	public function getPaymentOnSubscription()
	{
		return $this->PaymentOnSubscription;
	}
	/**
	 * Set MinimumSubscription
	 * @param string MinimumSubscription
	 * @return string
	 */
	public function setMinimumSubscription($_MinimumSubscription)
	{
		return ($this->MinimumSubscription = $_MinimumSubscription);
	}
	/**
	 * Get MinimumSubscription
	 * @return string
	 */
	public function getMinimumSubscription()
	{
		return $this->MinimumSubscription;
	}
	/**
	 * Set SubscriptionIncrement
	 * @param string SubscriptionIncrement
	 * @return string
	 */
	public function setSubscriptionIncrement($_SubscriptionIncrement)
	{
		return ($this->SubscriptionIncrement = $_SubscriptionIncrement);
	}
	/**
	 * Get SubscriptionIncrement
	 * @return string
	 */
	public function getSubscriptionIncrement()
	{
		return $this->SubscriptionIncrement;
	}
	/**
	 * Set PaymentDate
	 * @param string PaymentDate
	 * @return string
	 */
	public function setPaymentDate($_PaymentDate)
	{
		return ($this->PaymentDate = $_PaymentDate);
	}
	/**
	 * Get PaymentDate
	 * @return string
	 */
	public function getPaymentDate()
	{
		return $this->PaymentDate;
	}
	/**
	 * Set DatedDate
	 * @param string DatedDate
	 * @return string
	 */
	public function setDatedDate($_DatedDate)
	{
		return ($this->DatedDate = $_DatedDate);
	}
	/**
	 * Get DatedDate
	 * @return string
	 */
	public function getDatedDate()
	{
		return $this->DatedDate;
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