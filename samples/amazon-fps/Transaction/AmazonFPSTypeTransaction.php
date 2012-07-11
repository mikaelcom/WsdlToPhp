<?php
/**
 * Class file for AmazonFPSTypeTransaction
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeTransaction
 * @date 10/07/2012
 */
class AmazonFPSTypeTransaction extends AmazonFPSWsdlClass
{
	/**
	 * The TransactionId
	 * @var string
	 */
	public $TransactionId;
	/**
	 * The CallerTransactionDate
	 * @var dateTime
	 */
	public $CallerTransactionDate;
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
	 * The FPSOperation
	 * @var AmazonFPSTypeFPSOperation
	 */
	public $FPSOperation;
	/**
	 * The TransactionStatus
	 * @var AmazonFPSTypeTransactionStatus
	 */
	public $TransactionStatus;
	/**
	 * The StatusMessage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $StatusMessage;
	/**
	 * The StatusCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $StatusCode;
	/**
	 * The OriginalTransactionId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $OriginalTransactionId;
	/**
	 * The TransactionPart
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * @var AmazonFPSTypeTransactionPart
	 */
	public $TransactionPart;
	/**
	 * The PaymentMethod
	 * @var AmazonFPSTypePaymentMethod
	 */
	public $PaymentMethod;
	/**
	 * The SenderName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $SenderName;
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
	 * The FPSFees
	 * @var AmazonFPSTypeAmount
	 */
	public $FPSFees;
	/**
	 * The Balance
	 * @var AmazonFPSTypeAmount
	 */
	public $Balance;
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
	 * Constructor
	 * @param string TransactionId
	 * @param dateTime CallerTransactionDate
	 * @param dateTime DateReceived
	 * @param dateTime DateCompleted
	 * @param AmazonFPSTypeAmount TransactionAmount
	 * @param AmazonFPSTypeFPSOperation FPSOperation
	 * @param AmazonFPSTypeTransactionStatus TransactionStatus
	 * @param string StatusMessage
	 * @param string StatusCode
	 * @param string OriginalTransactionId
	 * @param AmazonFPSTypeTransactionPart TransactionPart
	 * @param AmazonFPSTypePaymentMethod PaymentMethod
	 * @param string SenderName
	 * @param string CallerName
	 * @param string RecipientName
	 * @param AmazonFPSTypeAmount FPSFees
	 * @param AmazonFPSTypeAmount Balance
	 * @param string SenderTokenId
	 * @param string RecipientTokenId
	 * @return AmazonFPSTypeTransaction
	 */
	public function __construct($_TransactionId = null,$_CallerTransactionDate = null,$_DateReceived = null,$_DateCompleted = null,$_TransactionAmount = null,$_FPSOperation = null,$_TransactionStatus = null,$_StatusMessage = null,$_StatusCode = null,$_OriginalTransactionId = null,$_TransactionPart = null,$_PaymentMethod = null,$_SenderName = null,$_CallerName = null,$_RecipientName = null,$_FPSFees = null,$_Balance = null,$_SenderTokenId = null,$_RecipientTokenId = null)
	{
		parent::__construct(array('TransactionId'=>$_TransactionId,'CallerTransactionDate'=>$_CallerTransactionDate,'DateReceived'=>$_DateReceived,'DateCompleted'=>$_DateCompleted,'TransactionAmount'=>$_TransactionAmount,'FPSOperation'=>$_FPSOperation,'TransactionStatus'=>$_TransactionStatus,'StatusMessage'=>$_StatusMessage,'StatusCode'=>$_StatusCode,'OriginalTransactionId'=>$_OriginalTransactionId,'TransactionPart'=>$_TransactionPart,'PaymentMethod'=>$_PaymentMethod,'SenderName'=>$_SenderName,'CallerName'=>$_CallerName,'RecipientName'=>$_RecipientName,'FPSFees'=>$_FPSFees,'Balance'=>$_Balance,'SenderTokenId'=>$_SenderTokenId,'RecipientTokenId'=>$_RecipientTokenId));
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
	 * Set CallerTransactionDate
	 * @param dateTime CallerTransactionDate
	 * @return dateTime
	 */
	public function setCallerTransactionDate($_CallerTransactionDate)
	{
		return ($this->CallerTransactionDate = $_CallerTransactionDate);
	}
	/**
	 * Get CallerTransactionDate
	 * @return dateTime
	 */
	public function getCallerTransactionDate()
	{
		return $this->CallerTransactionDate;
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
	 * Set OriginalTransactionId
	 * @param string OriginalTransactionId
	 * @return string
	 */
	public function setOriginalTransactionId($_OriginalTransactionId)
	{
		return ($this->OriginalTransactionId = $_OriginalTransactionId);
	}
	/**
	 * Get OriginalTransactionId
	 * @return string
	 */
	public function getOriginalTransactionId()
	{
		return $this->OriginalTransactionId;
	}
	/**
	 * Set TransactionPart
	 * @param TransactionPart TransactionPart
	 * @return TransactionPart
	 */
	public function setTransactionPart($_TransactionPart)
	{
		return ($this->TransactionPart = $_TransactionPart);
	}
	/**
	 * Get TransactionPart
	 * @return AmazonFPSTypeTransactionPart
	 */
	public function getTransactionPart()
	{
		return $this->TransactionPart;
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
	 * Set Balance
	 * @param Amount Balance
	 * @return Amount
	 */
	public function setBalance($_Balance)
	{
		return ($this->Balance = $_Balance);
	}
	/**
	 * Get Balance
	 * @return AmazonFPSTypeAmount
	 */
	public function getBalance()
	{
		return $this->Balance;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>