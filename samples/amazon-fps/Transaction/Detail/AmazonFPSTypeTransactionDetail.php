<?php
/**
 * Class file for AmazonFPSTypeTransactionDetail
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeTransactionDetail
 * @date 10/07/2012
 */
class AmazonFPSTypeTransactionDetail extends AmazonFPSWsdlClass
{
	/**
	 * The TransactionId
	 * @var string
	 */
	public $TransactionId;
	/**
	 * The CallerReference
	 * @var string
	 */
	public $CallerReference;
	/**
	 * The CallerDescription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $CallerDescription;
	/**
	 * The SenderDescription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $SenderDescription;
	/**
	 * The DateReceived
	 * @var dateTime
	 */
	public $DateReceived;
	/**
	 * The DateCompleted
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var dateTime
	 */
	public $DateCompleted;
	/**
	 * The TransactionAmount
	 * @var AmazonFPSTypeAmount
	 */
	public $TransactionAmount;
	/**
	 * The FPSFees
	 * @var AmazonFPSTypeAmount
	 */
	public $FPSFees;
	/**
	 * The MarketplaceFees
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypeAmount
	 */
	public $MarketplaceFees;
	/**
	 * The FPSFeesPaidBy
	 * @var AmazonFPSTypeTransactionalRole
	 */
	public $FPSFeesPaidBy;
	/**
	 * The SenderTokenId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $SenderTokenId;
	/**
	 * The RecipientTokenId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $RecipientTokenId;
	/**
	 * The PrepaidInstrumentId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $PrepaidInstrumentId;
	/**
	 * The CreditInstrumentId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $CreditInstrumentId;
	/**
	 * The FPSOperation
	 * @var AmazonFPSTypeFPSOperation
	 */
	public $FPSOperation;
	/**
	 * The PaymentMethod
	 * @var AmazonFPSTypePaymentMethod
	 */
	public $PaymentMethod;
	/**
	 * The TransactionStatus
	 * @var AmazonFPSTypeTransactionStatus
	 */
	public $TransactionStatus;
	/**
	 * The StatusCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $StatusCode;
	/**
	 * The StatusMessage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $StatusMessage;
	/**
	 * The SenderName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $SenderName;
	/**
	 * The SenderEmail
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $SenderEmail;
	/**
	 * The CallerName
	 * @var string
	 */
	public $CallerName;
	/**
	 * The RecipientName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $RecipientName;
	/**
	 * The RecipientEmail
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $RecipientEmail;
	/**
	 * The RelatedTransaction
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypeRelatedTransaction
	 */
	public $RelatedTransaction;
	/**
	 * The StatusHistory
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * @var AmazonFPSTypeStatusHistory
	 */
	public $StatusHistory;
	/**
	 * Constructor
	 * @param string TransactionId
	 * @param string CallerReference
	 * @param string CallerDescription
	 * @param string SenderDescription
	 * @param dateTime DateReceived
	 * @param dateTime DateCompleted
	 * @param AmazonFPSTypeAmount TransactionAmount
	 * @param AmazonFPSTypeAmount FPSFees
	 * @param AmazonFPSTypeAmount MarketplaceFees
	 * @param AmazonFPSTypeTransactionalRole FPSFeesPaidBy
	 * @param string SenderTokenId
	 * @param string RecipientTokenId
	 * @param string PrepaidInstrumentId
	 * @param string CreditInstrumentId
	 * @param AmazonFPSTypeFPSOperation FPSOperation
	 * @param AmazonFPSTypePaymentMethod PaymentMethod
	 * @param AmazonFPSTypeTransactionStatus TransactionStatus
	 * @param string StatusCode
	 * @param string StatusMessage
	 * @param string SenderName
	 * @param string SenderEmail
	 * @param string CallerName
	 * @param string RecipientName
	 * @param string RecipientEmail
	 * @param AmazonFPSTypeRelatedTransaction RelatedTransaction
	 * @param AmazonFPSTypeStatusHistory StatusHistory
	 * @return AmazonFPSTypeTransactionDetail
	 */
	public function __construct($_TransactionId = null,$_CallerReference = null,$_CallerDescription = null,$_SenderDescription = null,$_DateReceived = null,$_DateCompleted = null,$_TransactionAmount = null,$_FPSFees = null,$_MarketplaceFees = null,$_FPSFeesPaidBy = null,$_SenderTokenId = null,$_RecipientTokenId = null,$_PrepaidInstrumentId = null,$_CreditInstrumentId = null,$_FPSOperation = null,$_PaymentMethod = null,$_TransactionStatus = null,$_StatusCode = null,$_StatusMessage = null,$_SenderName = null,$_SenderEmail = null,$_CallerName = null,$_RecipientName = null,$_RecipientEmail = null,$_RelatedTransaction = null,$_StatusHistory = null)
	{
		parent::__construct(array('TransactionId'=>$_TransactionId,'CallerReference'=>$_CallerReference,'CallerDescription'=>$_CallerDescription,'SenderDescription'=>$_SenderDescription,'DateReceived'=>$_DateReceived,'DateCompleted'=>$_DateCompleted,'TransactionAmount'=>$_TransactionAmount,'FPSFees'=>$_FPSFees,'MarketplaceFees'=>$_MarketplaceFees,'FPSFeesPaidBy'=>$_FPSFeesPaidBy,'SenderTokenId'=>$_SenderTokenId,'RecipientTokenId'=>$_RecipientTokenId,'PrepaidInstrumentId'=>$_PrepaidInstrumentId,'CreditInstrumentId'=>$_CreditInstrumentId,'FPSOperation'=>$_FPSOperation,'PaymentMethod'=>$_PaymentMethod,'TransactionStatus'=>$_TransactionStatus,'StatusCode'=>$_StatusCode,'StatusMessage'=>$_StatusMessage,'SenderName'=>$_SenderName,'SenderEmail'=>$_SenderEmail,'CallerName'=>$_CallerName,'RecipientName'=>$_RecipientName,'RecipientEmail'=>$_RecipientEmail,'RelatedTransaction'=>$_RelatedTransaction,'StatusHistory'=>$_StatusHistory));
	}
	/**
	 * Set TransactionId
	 * @param string TransactionId
	 * @return string
	 */
	public function setTransactionId($_TransactionId)
	{
		return ($this->TransactionId = $_TransactionId);
	}
	/**
	 * Get TransactionId
	 * @return string
	 */
	public function getTransactionId()
	{
		return $this->TransactionId;
	}
	/**
	 * Set CallerReference
	 * @param string CallerReference
	 * @return string
	 */
	public function setCallerReference($_CallerReference)
	{
		return ($this->CallerReference = $_CallerReference);
	}
	/**
	 * Get CallerReference
	 * @return string
	 */
	public function getCallerReference()
	{
		return $this->CallerReference;
	}
	/**
	 * Set CallerDescription
	 * @param string CallerDescription
	 * @return string
	 */
	public function setCallerDescription($_CallerDescription)
	{
		return ($this->CallerDescription = $_CallerDescription);
	}
	/**
	 * Get CallerDescription
	 * @return string
	 */
	public function getCallerDescription()
	{
		return $this->CallerDescription;
	}
	/**
	 * Set SenderDescription
	 * @param string SenderDescription
	 * @return string
	 */
	public function setSenderDescription($_SenderDescription)
	{
		return ($this->SenderDescription = $_SenderDescription);
	}
	/**
	 * Get SenderDescription
	 * @return string
	 */
	public function getSenderDescription()
	{
		return $this->SenderDescription;
	}
	/**
	 * Set DateReceived
	 * @param dateTime DateReceived
	 * @return dateTime
	 */
	public function setDateReceived($_DateReceived)
	{
		return ($this->DateReceived = $_DateReceived);
	}
	/**
	 * Get DateReceived
	 * @return dateTime
	 */
	public function getDateReceived()
	{
		return $this->DateReceived;
	}
	/**
	 * Set DateCompleted
	 * @param dateTime DateCompleted
	 * @return dateTime
	 */
	public function setDateCompleted($_DateCompleted)
	{
		return ($this->DateCompleted = $_DateCompleted);
	}
	/**
	 * Get DateCompleted
	 * @return dateTime
	 */
	public function getDateCompleted()
	{
		return $this->DateCompleted;
	}
	/**
	 * Set TransactionAmount
	 * @param Amount TransactionAmount
	 * @return Amount
	 */
	public function setTransactionAmount($_TransactionAmount)
	{
		return ($this->TransactionAmount = $_TransactionAmount);
	}
	/**
	 * Get TransactionAmount
	 * @return AmazonFPSTypeAmount
	 */
	public function getTransactionAmount()
	{
		return $this->TransactionAmount;
	}
	/**
	 * Set FPSFees
	 * @param Amount FPSFees
	 * @return Amount
	 */
	public function setFPSFees($_FPSFees)
	{
		return ($this->FPSFees = $_FPSFees);
	}
	/**
	 * Get FPSFees
	 * @return AmazonFPSTypeAmount
	 */
	public function getFPSFees()
	{
		return $this->FPSFees;
	}
	/**
	 * Set MarketplaceFees
	 * @param Amount MarketplaceFees
	 * @return Amount
	 */
	public function setMarketplaceFees($_MarketplaceFees)
	{
		return ($this->MarketplaceFees = $_MarketplaceFees);
	}
	/**
	 * Get MarketplaceFees
	 * @return AmazonFPSTypeAmount
	 */
	public function getMarketplaceFees()
	{
		return $this->MarketplaceFees;
	}
	/**
	 * Set FPSFeesPaidBy
	 * @param TransactionalRole FPSFeesPaidBy
	 * @return TransactionalRole
	 */
	public function setFPSFeesPaidBy($_FPSFeesPaidBy)
	{
		return ($this->FPSFeesPaidBy = AmazonFPSTypeTransactionalRole::valueIsValid($_FPSFeesPaidBy)?$_FPSFeesPaidBy:null);
	}
	/**
	 * Get FPSFeesPaidBy
	 * @return AmazonFPSTypeTransactionalRole
	 */
	public function getFPSFeesPaidBy()
	{
		return $this->FPSFeesPaidBy;
	}
	/**
	 * Set SenderTokenId
	 * @param string SenderTokenId
	 * @return string
	 */
	public function setSenderTokenId($_SenderTokenId)
	{
		return ($this->SenderTokenId = $_SenderTokenId);
	}
	/**
	 * Get SenderTokenId
	 * @return string
	 */
	public function getSenderTokenId()
	{
		return $this->SenderTokenId;
	}
	/**
	 * Set RecipientTokenId
	 * @param string RecipientTokenId
	 * @return string
	 */
	public function setRecipientTokenId($_RecipientTokenId)
	{
		return ($this->RecipientTokenId = $_RecipientTokenId);
	}
	/**
	 * Get RecipientTokenId
	 * @return string
	 */
	public function getRecipientTokenId()
	{
		return $this->RecipientTokenId;
	}
	/**
	 * Set PrepaidInstrumentId
	 * @param string PrepaidInstrumentId
	 * @return string
	 */
	public function setPrepaidInstrumentId($_PrepaidInstrumentId)
	{
		return ($this->PrepaidInstrumentId = $_PrepaidInstrumentId);
	}
	/**
	 * Get PrepaidInstrumentId
	 * @return string
	 */
	public function getPrepaidInstrumentId()
	{
		return $this->PrepaidInstrumentId;
	}
	/**
	 * Set CreditInstrumentId
	 * @param string CreditInstrumentId
	 * @return string
	 */
	public function setCreditInstrumentId($_CreditInstrumentId)
	{
		return ($this->CreditInstrumentId = $_CreditInstrumentId);
	}
	/**
	 * Get CreditInstrumentId
	 * @return string
	 */
	public function getCreditInstrumentId()
	{
		return $this->CreditInstrumentId;
	}
	/**
	 * Set FPSOperation
	 * @param FPSOperation FPSOperation
	 * @return FPSOperation
	 */
	public function setFPSOperation($_FPSOperation)
	{
		return ($this->FPSOperation = AmazonFPSTypeFPSOperation::valueIsValid($_FPSOperation)?$_FPSOperation:null);
	}
	/**
	 * Get FPSOperation
	 * @return AmazonFPSTypeFPSOperation
	 */
	public function getFPSOperation()
	{
		return $this->FPSOperation;
	}
	/**
	 * Set PaymentMethod
	 * @param PaymentMethod PaymentMethod
	 * @return PaymentMethod
	 */
	public function setPaymentMethod($_PaymentMethod)
	{
		return ($this->PaymentMethod = AmazonFPSTypePaymentMethod::valueIsValid($_PaymentMethod)?$_PaymentMethod:null);
	}
	/**
	 * Get PaymentMethod
	 * @return AmazonFPSTypePaymentMethod
	 */
	public function getPaymentMethod()
	{
		return $this->PaymentMethod;
	}
	/**
	 * Set TransactionStatus
	 * @param TransactionStatus TransactionStatus
	 * @return TransactionStatus
	 */
	public function setTransactionStatus($_TransactionStatus)
	{
		return ($this->TransactionStatus = AmazonFPSTypeTransactionStatus::valueIsValid($_TransactionStatus)?$_TransactionStatus:null);
	}
	/**
	 * Get TransactionStatus
	 * @return AmazonFPSTypeTransactionStatus
	 */
	public function getTransactionStatus()
	{
		return $this->TransactionStatus;
	}
	/**
	 * Set StatusCode
	 * @param string StatusCode
	 * @return string
	 */
	public function setStatusCode($_StatusCode)
	{
		return ($this->StatusCode = $_StatusCode);
	}
	/**
	 * Get StatusCode
	 * @return string
	 */
	public function getStatusCode()
	{
		return $this->StatusCode;
	}
	/**
	 * Set StatusMessage
	 * @param string StatusMessage
	 * @return string
	 */
	public function setStatusMessage($_StatusMessage)
	{
		return ($this->StatusMessage = $_StatusMessage);
	}
	/**
	 * Get StatusMessage
	 * @return string
	 */
	public function getStatusMessage()
	{
		return $this->StatusMessage;
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
	 * Set CallerName
	 * @param string CallerName
	 * @return string
	 */
	public function setCallerName($_CallerName)
	{
		return ($this->CallerName = $_CallerName);
	}
	/**
	 * Get CallerName
	 * @return string
	 */
	public function getCallerName()
	{
		return $this->CallerName;
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
	 * Set RelatedTransaction
	 * @param RelatedTransaction RelatedTransaction
	 * @return RelatedTransaction
	 */
	public function setRelatedTransaction($_RelatedTransaction)
	{
		return ($this->RelatedTransaction = $_RelatedTransaction);
	}
	/**
	 * Get RelatedTransaction
	 * @return AmazonFPSTypeRelatedTransaction
	 */
	public function getRelatedTransaction()
	{
		return $this->RelatedTransaction;
	}
	/**
	 * Set StatusHistory
	 * @param StatusHistory StatusHistory
	 * @return StatusHistory
	 */
	public function setStatusHistory($_StatusHistory)
	{
		return ($this->StatusHistory = $_StatusHistory);
	}
	/**
	 * Get StatusHistory
	 * @return AmazonFPSTypeStatusHistory
	 */
	public function getStatusHistory()
	{
		return $this->StatusHistory;
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