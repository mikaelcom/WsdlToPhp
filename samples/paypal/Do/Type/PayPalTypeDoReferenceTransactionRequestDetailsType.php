<?php
/**
 * Class file for PayPalTypeDoReferenceTransactionRequestDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDoReferenceTransactionRequestDetailsType
 * @date 14/07/2012
 */
class PayPalTypeDoReferenceTransactionRequestDetailsType extends PayPalWsdlClass
{
	/**
	 * The ReferenceID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var string
	 */
	public $ReferenceID;
	/**
	 * The PaymentAction
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypePaymentActionCodeType
	 */
	public $PaymentAction;
	/**
	 * The PaymentType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypeMerchantPullPaymentCodeType
	 */
	public $PaymentType;
	/**
	 * The PaymentDetails
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypePaymentDetailsType
	 */
	public $PaymentDetails;
	/**
	 * The CreditCard
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypeReferenceCreditCardDetailsType
	 */
	public $CreditCard;
	/**
	 * The IPAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var string
	 */
	public $IPAddress;
	/**
	 * The MerchantSessionId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var string
	 */
	public $MerchantSessionId;
	/**
	 * The ReqConfirmShipping
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var string
	 */
	public $ReqConfirmShipping;
	/**
	 * The SoftDescriptor
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var string
	 */
	public $SoftDescriptor;
	/**
	 * The SenderDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypeSenderDetailsType
	 */
	public $SenderDetails;
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
	 * @param string ReferenceID
	 * @param PayPalTypePaymentActionCodeType PaymentAction
	 * @param PayPalTypeMerchantPullPaymentCodeType PaymentType
	 * @param PayPalTypePaymentDetailsType PaymentDetails
	 * @param PayPalTypeReferenceCreditCardDetailsType CreditCard
	 * @param string IPAddress
	 * @param string MerchantSessionId
	 * @param string ReqConfirmShipping
	 * @param string SoftDescriptor
	 * @param PayPalTypeSenderDetailsType SenderDetails
	 * @param string MsgSubID
	 * @return PayPalTypeDoReferenceTransactionRequestDetailsType
	 */
	public function __construct($_ReferenceID,$_PaymentAction,$_PaymentType = null,$_PaymentDetails,$_CreditCard = null,$_IPAddress = null,$_MerchantSessionId = null,$_ReqConfirmShipping = null,$_SoftDescriptor = null,$_SenderDetails = null,$_MsgSubID = null)
	{
		parent::__construct(array('ReferenceID'=>$_ReferenceID,'PaymentAction'=>$_PaymentAction,'PaymentType'=>$_PaymentType,'PaymentDetails'=>$_PaymentDetails,'CreditCard'=>$_CreditCard,'IPAddress'=>$_IPAddress,'MerchantSessionId'=>$_MerchantSessionId,'ReqConfirmShipping'=>$_ReqConfirmShipping,'SoftDescriptor'=>$_SoftDescriptor,'SenderDetails'=>$_SenderDetails,'MsgSubID'=>$_MsgSubID));
	}
	/**
	 * Set ReferenceID
	 * @param string ReferenceID
	 * @return string
	 */
	public function setReferenceID($_ReferenceID)
	{
		return ($this->ReferenceID = $_ReferenceID);
	}
	/**
	 * Get ReferenceID
	 * @return string
	 */
	public function getReferenceID()
	{
		return $this->ReferenceID;
	}
	/**
	 * Set PaymentAction
	 * @param PaymentActionCodeType PaymentAction
	 * @return PaymentActionCodeType
	 */
	public function setPaymentAction($_PaymentAction)
	{
		return ($this->PaymentAction = PayPalTypePaymentActionCodeType::valueIsValid($_PaymentAction)?$_PaymentAction:null);
	}
	/**
	 * Get PaymentAction
	 * @return PayPalTypePaymentActionCodeType
	 */
	public function getPaymentAction()
	{
		return $this->PaymentAction;
	}
	/**
	 * Set PaymentType
	 * @param MerchantPullPaymentCodeType PaymentType
	 * @return MerchantPullPaymentCodeType
	 */
	public function setPaymentType($_PaymentType)
	{
		return ($this->PaymentType = PayPalTypeMerchantPullPaymentCodeType::valueIsValid($_PaymentType)?$_PaymentType:null);
	}
	/**
	 * Get PaymentType
	 * @return PayPalTypeMerchantPullPaymentCodeType
	 */
	public function getPaymentType()
	{
		return $this->PaymentType;
	}
	/**
	 * Set PaymentDetails
	 * @param PaymentDetailsType PaymentDetails
	 * @return PaymentDetailsType
	 */
	public function setPaymentDetails($_PaymentDetails)
	{
		return ($this->PaymentDetails = $_PaymentDetails);
	}
	/**
	 * Get PaymentDetails
	 * @return PayPalTypePaymentDetailsType
	 */
	public function getPaymentDetails()
	{
		return $this->PaymentDetails;
	}
	/**
	 * Set CreditCard
	 * @param ReferenceCreditCardDetailsType CreditCard
	 * @return ReferenceCreditCardDetailsType
	 */
	public function setCreditCard($_CreditCard)
	{
		return ($this->CreditCard = $_CreditCard);
	}
	/**
	 * Get CreditCard
	 * @return PayPalTypeReferenceCreditCardDetailsType
	 */
	public function getCreditCard()
	{
		return $this->CreditCard;
	}
	/**
	 * Set IPAddress
	 * @param string IPAddress
	 * @return string
	 */
	public function setIPAddress($_IPAddress)
	{
		return ($this->IPAddress = $_IPAddress);
	}
	/**
	 * Get IPAddress
	 * @return string
	 */
	public function getIPAddress()
	{
		return $this->IPAddress;
	}
	/**
	 * Set MerchantSessionId
	 * @param string MerchantSessionId
	 * @return string
	 */
	public function setMerchantSessionId($_MerchantSessionId)
	{
		return ($this->MerchantSessionId = $_MerchantSessionId);
	}
	/**
	 * Get MerchantSessionId
	 * @return string
	 */
	public function getMerchantSessionId()
	{
		return $this->MerchantSessionId;
	}
	/**
	 * Set ReqConfirmShipping
	 * @param string ReqConfirmShipping
	 * @return string
	 */
	public function setReqConfirmShipping($_ReqConfirmShipping)
	{
		return ($this->ReqConfirmShipping = $_ReqConfirmShipping);
	}
	/**
	 * Get ReqConfirmShipping
	 * @return string
	 */
	public function getReqConfirmShipping()
	{
		return $this->ReqConfirmShipping;
	}
	/**
	 * Set SoftDescriptor
	 * @param string SoftDescriptor
	 * @return string
	 */
	public function setSoftDescriptor($_SoftDescriptor)
	{
		return ($this->SoftDescriptor = $_SoftDescriptor);
	}
	/**
	 * Get SoftDescriptor
	 * @return string
	 */
	public function getSoftDescriptor()
	{
		return $this->SoftDescriptor;
	}
	/**
	 * Set SenderDetails
	 * @param SenderDetailsType SenderDetails
	 * @return SenderDetailsType
	 */
	public function setSenderDetails($_SenderDetails)
	{
		return ($this->SenderDetails = $_SenderDetails);
	}
	/**
	 * Get SenderDetails
	 * @return PayPalTypeSenderDetailsType
	 */
	public function getSenderDetails()
	{
		return $this->SenderDetails;
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