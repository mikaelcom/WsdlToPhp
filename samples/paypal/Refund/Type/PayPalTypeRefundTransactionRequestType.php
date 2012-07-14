<?php
/**
 * Class file for PayPalTypeRefundTransactionRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeRefundTransactionRequestType
 * @date 14/07/2012
 */
class PayPalTypeRefundTransactionRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The TransactionID
	 * Meta informations :
	 * 	- documentation : Unique identifier of the transaction you are refunding. Required Character length and limitations: 17 single-byte alphanumeric characters
	 * @var PayPalTypeTransactionId
	 */
	public $TransactionID;
	/**
	 * The InvoiceID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Invoice number corresponding to transaction details for tracking the refund of a payment. This parameter is passed by the merchant or recipient while refunding the transaction. This parameter does not affect the business logic, it is persisted in the DB for transaction reference Optional
	 * @var string
	 */
	public $InvoiceID;
	/**
	 * The RefundType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Type of refund you are making Required
	 * @var PayPalTypeRefundType
	 */
	public $RefundType;
	/**
	 * The Amount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Refund amount. Amount is required if RefundType is Partial. NOTE: If RefundType is Full, do not set Amount.
	 * @var PayPalTypeBasicAmountType
	 */
	public $Amount;
	/**
	 * The Memo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Custom memo about the refund. Optional Character length and limitations: 255 single-byte alphanumeric characters
	 * @var string
	 */
	public $Memo;
	/**
	 * The RetryUntil
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : The maximum time till which refund must be tried. Optional
	 * @var dateTime
	 */
	public $RetryUntil;
	/**
	 * The RefundSource
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : The type of funding source for refund. Optional
	 * @var PayPalTypeRefundSourceCodeType
	 */
	public $RefundSource;
	/**
	 * The RefundAdvice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Flag to indicate that the customer was already given store credit for a given transaction. This will allow us to make sure we do not double refund. Optional
	 * @var boolean
	 */
	public $RefundAdvice;
	/**
	 * The MerchantStoreDetails
	 * @var PayPalTypeMerchantStoreDetailsType
	 */
	public $MerchantStoreDetails;
	/**
	 * The RefundItemDetails
	 * @var PayPalTypeInvoiceItemType
	 */
	public $RefundItemDetails;
	/**
	 * The MsgSubID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Unique id for each API request to prevent duplicate payments. Optional Character length and limits: 38 single-byte characters maximum.
	 * @var string
	 */
	public $MsgSubID;
	/**
	 * Constructor
	 * @param PayPalTypeTransactionId TransactionID
	 * @param string InvoiceID
	 * @param PayPalTypeRefundType RefundType
	 * @param PayPalTypeBasicAmountType Amount
	 * @param string Memo
	 * @param dateTime RetryUntil
	 * @param PayPalTypeRefundSourceCodeType RefundSource
	 * @param boolean RefundAdvice
	 * @param PayPalTypeMerchantStoreDetailsType MerchantStoreDetails
	 * @param PayPalTypeInvoiceItemType RefundItemDetails
	 * @param string MsgSubID
	 * @return PayPalTypeRefundTransactionRequestType
	 */
	public function __construct($_TransactionID = null,$_InvoiceID = null,$_RefundType = null,$_Amount = null,$_Memo = null,$_RetryUntil = null,$_RefundSource = null,$_RefundAdvice = null,$_MerchantStoreDetails = null,$_RefundItemDetails = null,$_MsgSubID = null)
	{
		PayPalWsdlClass::__construct(array('TransactionID'=>$_TransactionID,'InvoiceID'=>$_InvoiceID,'RefundType'=>$_RefundType,'Amount'=>$_Amount,'Memo'=>$_Memo,'RetryUntil'=>$_RetryUntil,'RefundSource'=>$_RefundSource,'RefundAdvice'=>$_RefundAdvice,'MerchantStoreDetails'=>$_MerchantStoreDetails,'RefundItemDetails'=>$_RefundItemDetails,'MsgSubID'=>$_MsgSubID));
	}
	/**
	 * Set TransactionID
	 * @param TransactionId TransactionID
	 * @return TransactionId
	 */
	public function setTransactionID($_TransactionID)
	{
		return ($this->TransactionID = PayPalTypeTransactionId::valueIsValid($_TransactionID)?$_TransactionID:null);
	}
	/**
	 * Get TransactionID
	 * @return PayPalTypeTransactionId
	 */
	public function getTransactionID()
	{
		return $this->TransactionID;
	}
	/**
	 * Set InvoiceID
	 * @param string InvoiceID
	 * @return string
	 */
	public function setInvoiceID($_InvoiceID)
	{
		return ($this->InvoiceID = $_InvoiceID);
	}
	/**
	 * Get InvoiceID
	 * @return string
	 */
	public function getInvoiceID()
	{
		return $this->InvoiceID;
	}
	/**
	 * Set RefundType
	 * @param RefundType RefundType
	 * @return RefundType
	 */
	public function setRefundType($_RefundType)
	{
		return ($this->RefundType = PayPalTypeRefundType::valueIsValid($_RefundType)?$_RefundType:null);
	}
	/**
	 * Get RefundType
	 * @return PayPalTypeRefundType
	 */
	public function getRefundType()
	{
		return $this->RefundType;
	}
	/**
	 * Set Amount
	 * @param BasicAmountType Amount
	 * @return BasicAmountType
	 */
	public function setAmount($_Amount)
	{
		return ($this->Amount = $_Amount);
	}
	/**
	 * Get Amount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getAmount()
	{
		return $this->Amount;
	}
	/**
	 * Set Memo
	 * @param string Memo
	 * @return string
	 */
	public function setMemo($_Memo)
	{
		return ($this->Memo = $_Memo);
	}
	/**
	 * Get Memo
	 * @return string
	 */
	public function getMemo()
	{
		return $this->Memo;
	}
	/**
	 * Set RetryUntil
	 * @param dateTime RetryUntil
	 * @return dateTime
	 */
	public function setRetryUntil($_RetryUntil)
	{
		return ($this->RetryUntil = $_RetryUntil);
	}
	/**
	 * Get RetryUntil
	 * @return dateTime
	 */
	public function getRetryUntil()
	{
		return $this->RetryUntil;
	}
	/**
	 * Set RefundSource
	 * @param RefundSourceCodeType RefundSource
	 * @return RefundSourceCodeType
	 */
	public function setRefundSource($_RefundSource)
	{
		return ($this->RefundSource = PayPalTypeRefundSourceCodeType::valueIsValid($_RefundSource)?$_RefundSource:null);
	}
	/**
	 * Get RefundSource
	 * @return PayPalTypeRefundSourceCodeType
	 */
	public function getRefundSource()
	{
		return $this->RefundSource;
	}
	/**
	 * Set RefundAdvice
	 * @param boolean RefundAdvice
	 * @return boolean
	 */
	public function setRefundAdvice($_RefundAdvice)
	{
		return ($this->RefundAdvice = $_RefundAdvice);
	}
	/**
	 * Get RefundAdvice
	 * @return boolean
	 */
	public function getRefundAdvice()
	{
		return $this->RefundAdvice;
	}
	/**
	 * Set MerchantStoreDetails
	 * @param MerchantStoreDetailsType MerchantStoreDetails
	 * @return MerchantStoreDetailsType
	 */
	public function setMerchantStoreDetails($_MerchantStoreDetails)
	{
		return ($this->MerchantStoreDetails = $_MerchantStoreDetails);
	}
	/**
	 * Get MerchantStoreDetails
	 * @return PayPalTypeMerchantStoreDetailsType
	 */
	public function getMerchantStoreDetails()
	{
		return $this->MerchantStoreDetails;
	}
	/**
	 * Set RefundItemDetails
	 * @param InvoiceItemType RefundItemDetails
	 * @return InvoiceItemType
	 */
	public function setRefundItemDetails($_RefundItemDetails)
	{
		return ($this->RefundItemDetails = $_RefundItemDetails);
	}
	/**
	 * Get RefundItemDetails
	 * @return PayPalTypeInvoiceItemType
	 */
	public function getRefundItemDetails()
	{
		return $this->RefundItemDetails;
	}
	/**
	 * Set MsgSubID
	 * @param string MsgSubID
	 * @return string
	 */
	public function setMsgSubID($_MsgSubID)
	{
		return ($this->MsgSubID = $_MsgSubID);
	}
	/**
	 * Get MsgSubID
	 * @return string
	 */
	public function getMsgSubID()
	{
		return $this->MsgSubID;
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