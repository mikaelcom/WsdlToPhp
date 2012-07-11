<?php
/**
 * Class file for AmazonFPSTypeSubscriptionDetails
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeSubscriptionDetails
 * @date 10/07/2012
 */
class AmazonFPSTypeSubscriptionDetails extends AmazonFPSWsdlClass
{
	/**
	 * The SubscriptionId
	 * @var string
	 */
	public $SubscriptionId;
	/**
	 * The Description
	 * @var string
	 */
	public $Description;
	/**
	 * The SubscriptionAmount
	 * @var AmazonFPSTypeAmount
	 */
	public $SubscriptionAmount;
	/**
	 * The NextTransactionAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypeAmount
	 */
	public $NextTransactionAmount;
	/**
	 * The PromotionalAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypeAmount
	 */
	public $PromotionalAmount;
	/**
	 * The NumberOfPromotionalTransactions
	 * @var integer
	 */
	public $NumberOfPromotionalTransactions;
	/**
	 * The StartDate
	 * @var dateTime
	 */
	public $StartDate;
	/**
	 * The EndDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var dateTime
	 */
	public $EndDate;
	/**
	 * The SubscriptionPeriod
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypeDuration
	 */
	public $SubscriptionPeriod;
	/**
	 * The SubscriptionFrequency
	 * @var AmazonFPSTypeDuration
	 */
	public $SubscriptionFrequency;
	/**
	 * The OverrideIPNUrl
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $OverrideIPNUrl;
	/**
	 * The SubscriptionStatus
	 * @var AmazonFPSTypeSubscriptionStatus
	 */
	public $SubscriptionStatus;
	/**
	 * The NumberOfTransactionsProcessed
	 * @var integer
	 */
	public $NumberOfTransactionsProcessed;
	/**
	 * The RecipientEmail
	 * @var string
	 */
	public $RecipientEmail;
	/**
	 * The RecipientName
	 * @var string
	 */
	public $RecipientName;
	/**
	 * The SenderEmail
	 * @var string
	 */
	public $SenderEmail;
	/**
	 * The SenderName
	 * @var string
	 */
	public $SenderName;
	/**
	 * The NextTransactionDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var dateTime
	 */
	public $NextTransactionDate;
	/**
	 * Constructor
	 * @param string SubscriptionId
	 * @param string Description
	 * @param AmazonFPSTypeAmount SubscriptionAmount
	 * @param AmazonFPSTypeAmount NextTransactionAmount
	 * @param AmazonFPSTypeAmount PromotionalAmount
	 * @param integer NumberOfPromotionalTransactions
	 * @param dateTime StartDate
	 * @param dateTime EndDate
	 * @param AmazonFPSTypeDuration SubscriptionPeriod
	 * @param AmazonFPSTypeDuration SubscriptionFrequency
	 * @param string OverrideIPNUrl
	 * @param AmazonFPSTypeSubscriptionStatus SubscriptionStatus
	 * @param integer NumberOfTransactionsProcessed
	 * @param string RecipientEmail
	 * @param string RecipientName
	 * @param string SenderEmail
	 * @param string SenderName
	 * @param dateTime NextTransactionDate
	 * @return AmazonFPSTypeSubscriptionDetails
	 */
	public function __construct($_SubscriptionId = null,$_Description = null,$_SubscriptionAmount = null,$_NextTransactionAmount = null,$_PromotionalAmount = null,$_NumberOfPromotionalTransactions = null,$_StartDate = null,$_EndDate = null,$_SubscriptionPeriod = null,$_SubscriptionFrequency = null,$_OverrideIPNUrl = null,$_SubscriptionStatus = null,$_NumberOfTransactionsProcessed = null,$_RecipientEmail = null,$_RecipientName = null,$_SenderEmail = null,$_SenderName = null,$_NextTransactionDate = null)
	{
		parent::__construct(array('SubscriptionId'=>$_SubscriptionId,'Description'=>$_Description,'SubscriptionAmount'=>$_SubscriptionAmount,'NextTransactionAmount'=>$_NextTransactionAmount,'PromotionalAmount'=>$_PromotionalAmount,'NumberOfPromotionalTransactions'=>$_NumberOfPromotionalTransactions,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate,'SubscriptionPeriod'=>$_SubscriptionPeriod,'SubscriptionFrequency'=>$_SubscriptionFrequency,'OverrideIPNUrl'=>$_OverrideIPNUrl,'SubscriptionStatus'=>$_SubscriptionStatus,'NumberOfTransactionsProcessed'=>$_NumberOfTransactionsProcessed,'RecipientEmail'=>$_RecipientEmail,'RecipientName'=>$_RecipientName,'SenderEmail'=>$_SenderEmail,'SenderName'=>$_SenderName,'NextTransactionDate'=>$_NextTransactionDate));
	}
	/**
	 * Set SubscriptionId
	 * @param string SubscriptionId
	 * @return string
	 */
	public function setSubscriptionId($_SubscriptionId)
	{
		return ($this->SubscriptionId = $_SubscriptionId);
	}
	/**
	 * Get SubscriptionId
	 * @return string
	 */
	public function getSubscriptionId()
	{
		return $this->SubscriptionId;
	}
	/**
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set SubscriptionAmount
	 * @param Amount SubscriptionAmount
	 * @return Amount
	 */
	public function setSubscriptionAmount($_SubscriptionAmount)
	{
		return ($this->SubscriptionAmount = $_SubscriptionAmount);
	}
	/**
	 * Get SubscriptionAmount
	 * @return AmazonFPSTypeAmount
	 */
	public function getSubscriptionAmount()
	{
		return $this->SubscriptionAmount;
	}
	/**
	 * Set NextTransactionAmount
	 * @param Amount NextTransactionAmount
	 * @return Amount
	 */
	public function setNextTransactionAmount($_NextTransactionAmount)
	{
		return ($this->NextTransactionAmount = $_NextTransactionAmount);
	}
	/**
	 * Get NextTransactionAmount
	 * @return AmazonFPSTypeAmount
	 */
	public function getNextTransactionAmount()
	{
		return $this->NextTransactionAmount;
	}
	/**
	 * Set PromotionalAmount
	 * @param Amount PromotionalAmount
	 * @return Amount
	 */
	public function setPromotionalAmount($_PromotionalAmount)
	{
		return ($this->PromotionalAmount = $_PromotionalAmount);
	}
	/**
	 * Get PromotionalAmount
	 * @return AmazonFPSTypeAmount
	 */
	public function getPromotionalAmount()
	{
		return $this->PromotionalAmount;
	}
	/**
	 * Set NumberOfPromotionalTransactions
	 * @param integer NumberOfPromotionalTransactions
	 * @return integer
	 */
	public function setNumberOfPromotionalTransactions($_NumberOfPromotionalTransactions)
	{
		return ($this->NumberOfPromotionalTransactions = $_NumberOfPromotionalTransactions);
	}
	/**
	 * Get NumberOfPromotionalTransactions
	 * @return integer
	 */
	public function getNumberOfPromotionalTransactions()
	{
		return $this->NumberOfPromotionalTransactions;
	}
	/**
	 * Set StartDate
	 * @param dateTime StartDate
	 * @return dateTime
	 */
	public function setStartDate($_StartDate)
	{
		return ($this->StartDate = $_StartDate);
	}
	/**
	 * Get StartDate
	 * @return dateTime
	 */
	public function getStartDate()
	{
		return $this->StartDate;
	}
	/**
	 * Set EndDate
	 * @param dateTime EndDate
	 * @return dateTime
	 */
	public function setEndDate($_EndDate)
	{
		return ($this->EndDate = $_EndDate);
	}
	/**
	 * Get EndDate
	 * @return dateTime
	 */
	public function getEndDate()
	{
		return $this->EndDate;
	}
	/**
	 * Set SubscriptionPeriod
	 * @param Duration SubscriptionPeriod
	 * @return Duration
	 */
	public function setSubscriptionPeriod($_SubscriptionPeriod)
	{
		return ($this->SubscriptionPeriod = $_SubscriptionPeriod);
	}
	/**
	 * Get SubscriptionPeriod
	 * @return AmazonFPSTypeDuration
	 */
	public function getSubscriptionPeriod()
	{
		return $this->SubscriptionPeriod;
	}
	/**
	 * Set SubscriptionFrequency
	 * @param Duration SubscriptionFrequency
	 * @return Duration
	 */
	public function setSubscriptionFrequency($_SubscriptionFrequency)
	{
		return ($this->SubscriptionFrequency = $_SubscriptionFrequency);
	}
	/**
	 * Get SubscriptionFrequency
	 * @return AmazonFPSTypeDuration
	 */
	public function getSubscriptionFrequency()
	{
		return $this->SubscriptionFrequency;
	}
	/**
	 * Set OverrideIPNUrl
	 * @param string OverrideIPNUrl
	 * @return string
	 */
	public function setOverrideIPNUrl($_OverrideIPNUrl)
	{
		return ($this->OverrideIPNUrl = $_OverrideIPNUrl);
	}
	/**
	 * Get OverrideIPNUrl
	 * @return string
	 */
	public function getOverrideIPNUrl()
	{
		return $this->OverrideIPNUrl;
	}
	/**
	 * Set SubscriptionStatus
	 * @param SubscriptionStatus SubscriptionStatus
	 * @return SubscriptionStatus
	 */
	public function setSubscriptionStatus($_SubscriptionStatus)
	{
		return ($this->SubscriptionStatus = AmazonFPSTypeSubscriptionStatus::valueIsValid($_SubscriptionStatus)?$_SubscriptionStatus:null);
	}
	/**
	 * Get SubscriptionStatus
	 * @return AmazonFPSTypeSubscriptionStatus
	 */
	public function getSubscriptionStatus()
	{
		return $this->SubscriptionStatus;
	}
	/**
	 * Set NumberOfTransactionsProcessed
	 * @param integer NumberOfTransactionsProcessed
	 * @return integer
	 */
	public function setNumberOfTransactionsProcessed($_NumberOfTransactionsProcessed)
	{
		return ($this->NumberOfTransactionsProcessed = $_NumberOfTransactionsProcessed);
	}
	/**
	 * Get NumberOfTransactionsProcessed
	 * @return integer
	 */
	public function getNumberOfTransactionsProcessed()
	{
		return $this->NumberOfTransactionsProcessed;
	}
	/**
	 * Set RecipientEmail
	 * @param string RecipientEmail
	 * @return string
	 */
	public function setRecipientEmail($_RecipientEmail)
	{
		return ($this->RecipientEmail = $_RecipientEmail);
	}
	/**
	 * Get RecipientEmail
	 * @return string
	 */
	public function getRecipientEmail()
	{
		return $this->RecipientEmail;
	}
	/**
	 * Set RecipientName
	 * @param string RecipientName
	 * @return string
	 */
	public function setRecipientName($_RecipientName)
	{
		return ($this->RecipientName = $_RecipientName);
	}
	/**
	 * Get RecipientName
	 * @return string
	 */
	public function getRecipientName()
	{
		return $this->RecipientName;
	}
	/**
	 * Set SenderEmail
	 * @param string SenderEmail
	 * @return string
	 */
	public function setSenderEmail($_SenderEmail)
	{
		return ($this->SenderEmail = $_SenderEmail);
	}
	/**
	 * Get SenderEmail
	 * @return string
	 */
	public function getSenderEmail()
	{
		return $this->SenderEmail;
	}
	/**
	 * Set SenderName
	 * @param string SenderName
	 * @return string
	 */
	public function setSenderName($_SenderName)
	{
		return ($this->SenderName = $_SenderName);
	}
	/**
	 * Get SenderName
	 * @return string
	 */
	public function getSenderName()
	{
		return $this->SenderName;
	}
	/**
	 * Set NextTransactionDate
	 * @param dateTime NextTransactionDate
	 * @return dateTime
	 */
	public function setNextTransactionDate($_NextTransactionDate)
	{
		return ($this->NextTransactionDate = $_NextTransactionDate);
	}
	/**
	 * Get NextTransactionDate
	 * @return dateTime
	 */
	public function getNextTransactionDate()
	{
		return $this->NextTransactionDate;
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