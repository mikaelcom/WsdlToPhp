<?php
/**
 * Class file for PayPalTypeDoReferenceTransactionResponseDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDoReferenceTransactionResponseDetailsType
 * @date 14/07/2012
 */
class PayPalTypeDoReferenceTransactionResponseDetailsType extends PayPalWsdlClass
{
	/**
	 * The BillingAgreementID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var string
	 */
	public $BillingAgreementID;
	/**
	 * The PaymentInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypePaymentInfoType
	 */
	public $PaymentInfo;
	/**
	 * The Amount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypeBasicAmountType
	 */
	public $Amount;
	/**
	 * The AVSCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var string
	 */
	public $AVSCode;
	/**
	 * The CVV2Code
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var string
	 */
	public $CVV2Code;
	/**
	 * The TransactionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypeTransactionId
	 */
	public $TransactionID;
	/**
	 * The PaymentAdviceCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Response code from the processor when a recurring transaction is declined
	 * @var string
	 */
	public $PaymentAdviceCode;
	/**
	 * The MsgSubID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Return msgsubid back to merchant
	 * @var string
	 */
	public $MsgSubID;
	/**
	 * Constructor
	 * @param string BillingAgreementID
	 * @param PayPalTypePaymentInfoType PaymentInfo
	 * @param PayPalTypeBasicAmountType Amount
	 * @param string AVSCode
	 * @param string CVV2Code
	 * @param PayPalTypeTransactionId TransactionID
	 * @param string PaymentAdviceCode
	 * @param string MsgSubID
	 * @return PayPalTypeDoReferenceTransactionResponseDetailsType
	 */
	public function __construct($_BillingAgreementID = null,$_PaymentInfo = null,$_Amount = null,$_AVSCode = null,$_CVV2Code = null,$_TransactionID = null,$_PaymentAdviceCode = null,$_MsgSubID = null)
	{
		parent::__construct(array('BillingAgreementID'=>$_BillingAgreementID,'PaymentInfo'=>$_PaymentInfo,'Amount'=>$_Amount,'AVSCode'=>$_AVSCode,'CVV2Code'=>$_CVV2Code,'TransactionID'=>$_TransactionID,'PaymentAdviceCode'=>$_PaymentAdviceCode,'MsgSubID'=>$_MsgSubID));
	}
	/**
	 * Set BillingAgreementID
	 * @param string BillingAgreementID
	 * @return string
	 */
	public function setBillingAgreementID($_BillingAgreementID)
	{
		return ($this->BillingAgreementID = $_BillingAgreementID);
	}
	/**
	 * Get BillingAgreementID
	 * @return string
	 */
	public function getBillingAgreementID()
	{
		return $this->BillingAgreementID;
	}
	/**
	 * Set PaymentInfo
	 * @param PaymentInfoType PaymentInfo
	 * @return PaymentInfoType
	 */
	public function setPaymentInfo($_PaymentInfo)
	{
		return ($this->PaymentInfo = $_PaymentInfo);
	}
	/**
	 * Get PaymentInfo
	 * @return PayPalTypePaymentInfoType
	 */
	public function getPaymentInfo()
	{
		return $this->PaymentInfo;
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
	 * Set AVSCode
	 * @param string AVSCode
	 * @return string
	 */
	public function setAVSCode($_AVSCode)
	{
		return ($this->AVSCode = $_AVSCode);
	}
	/**
	 * Get AVSCode
	 * @return string
	 */
	public function getAVSCode()
	{
		return $this->AVSCode;
	}
	/**
	 * Set CVV2Code
	 * @param string CVV2Code
	 * @return string
	 */
	public function setCVV2Code($_CVV2Code)
	{
		return ($this->CVV2Code = $_CVV2Code);
	}
	/**
	 * Get CVV2Code
	 * @return string
	 */
	public function getCVV2Code()
	{
		return $this->CVV2Code;
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
	 * Set PaymentAdviceCode
	 * @param string PaymentAdviceCode
	 * @return string
	 */
	public function setPaymentAdviceCode($_PaymentAdviceCode)
	{
		return ($this->PaymentAdviceCode = $_PaymentAdviceCode);
	}
	/**
	 * Get PaymentAdviceCode
	 * @return string
	 */
	public function getPaymentAdviceCode()
	{
		return $this->PaymentAdviceCode;
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