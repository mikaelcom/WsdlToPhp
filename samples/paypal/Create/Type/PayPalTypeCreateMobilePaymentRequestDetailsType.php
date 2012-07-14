<?php
/**
 * Class file for PayPalTypeCreateMobilePaymentRequestDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeCreateMobilePaymentRequestDetailsType
 * @date 14/07/2012
 */
class PayPalTypeCreateMobilePaymentRequestDetailsType extends PayPalWsdlClass
{
	/**
	 * The PaymentType
	 * Meta informations :
	 * 	- documentation : Type of the payment Required
	 * @var PayPalTypeMobilePaymentCodeType
	 */
	public $PaymentType;
	/**
	 * The PaymentAction
	 * Meta informations :
	 * 	- documentation : How you want to obtain payment. Defaults to Sale. Optional Authorization indicates that this payment is a basic authorization subject to settlement with PayPal Authorization and Capture. Sale indicates that this is a final sale for which you are requesting payment.
	 * @var PayPalTypePaymentActionCodeType
	 */
	public $PaymentAction;
	/**
	 * The SenderPhone
	 * Meta informations :
	 * 	- documentation : Phone number of the user making the payment. Required
	 * @var PayPalTypePhoneNumberType
	 */
	public $SenderPhone;
	/**
	 * The RecipientType
	 * Meta informations :
	 * 	- documentation : Type of recipient specified, i.e., phone number or email address Required
	 * @var PayPalTypeMobileRecipientCodeType
	 */
	public $RecipientType;
	/**
	 * The RecipientEmail
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Email address of the recipient
	 * @var string
	 */
	public $RecipientEmail;
	/**
	 * The RecipientPhone
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Phone number of the recipipent Required
	 * @var PayPalTypePhoneNumberType
	 */
	public $RecipientPhone;
	/**
	 * The ItemAmount
	 * Meta informations :
	 * 	- documentation : Amount of item before tax and shipping
	 * @var PayPalTypeBasicAmountType
	 */
	public $ItemAmount;
	/**
	 * The Tax
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The tax charged on the transactionTax Optional
	 * @var PayPalTypeBasicAmountType
	 */
	public $Tax;
	/**
	 * The Shipping
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Per-transaction shipping charge Optional
	 * @var PayPalTypeBasicAmountType
	 */
	public $Shipping;
	/**
	 * The ItemName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Name of the item being ordered Optional Character length and limitations: 255 single-byte alphanumeric characters
	 * @var string
	 */
	public $ItemName;
	/**
	 * The ItemNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : SKU of the item being ordered Optional Character length and limitations: 255 single-byte alphanumeric characters
	 * @var string
	 */
	public $ItemNumber;
	/**
	 * The Note
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Memo entered by sender in PayPal Website Payments note field. Optional Character length and limitations: 255 single-byte alphanumeric characters
	 * @var string
	 */
	public $Note;
	/**
	 * The CustomID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique ID for the order. Required for non-P2P transactions Optional Character length and limitations: 255 single-byte alphanumeric characters
	 * @var string
	 */
	public $CustomID;
	/**
	 * The SharePhoneNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the sender's phone number will be shared with recipient Optional
	 * @var integer
	 */
	public $SharePhoneNumber;
	/**
	 * The ShareHomeAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the sender's home address will be shared with recipient Optional
	 * @var integer
	 */
	public $ShareHomeAddress;
	/**
	 * Constructor
	 * @param PayPalTypeMobilePaymentCodeType PaymentType
	 * @param PayPalTypePaymentActionCodeType PaymentAction
	 * @param PayPalTypePhoneNumberType SenderPhone
	 * @param PayPalTypeMobileRecipientCodeType RecipientType
	 * @param string RecipientEmail
	 * @param PayPalTypePhoneNumberType RecipientPhone
	 * @param PayPalTypeBasicAmountType ItemAmount
	 * @param PayPalTypeBasicAmountType Tax
	 * @param PayPalTypeBasicAmountType Shipping
	 * @param string ItemName
	 * @param string ItemNumber
	 * @param string Note
	 * @param string CustomID
	 * @param integer SharePhoneNumber
	 * @param integer ShareHomeAddress
	 * @return PayPalTypeCreateMobilePaymentRequestDetailsType
	 */
	public function __construct($_PaymentType = null,$_PaymentAction = null,$_SenderPhone = null,$_RecipientType = null,$_RecipientEmail = null,$_RecipientPhone = null,$_ItemAmount = null,$_Tax = null,$_Shipping = null,$_ItemName = null,$_ItemNumber = null,$_Note = null,$_CustomID = null,$_SharePhoneNumber = null,$_ShareHomeAddress = null)
	{
		parent::__construct(array('PaymentType'=>$_PaymentType,'PaymentAction'=>$_PaymentAction,'SenderPhone'=>$_SenderPhone,'RecipientType'=>$_RecipientType,'RecipientEmail'=>$_RecipientEmail,'RecipientPhone'=>$_RecipientPhone,'ItemAmount'=>$_ItemAmount,'Tax'=>$_Tax,'Shipping'=>$_Shipping,'ItemName'=>$_ItemName,'ItemNumber'=>$_ItemNumber,'Note'=>$_Note,'CustomID'=>$_CustomID,'SharePhoneNumber'=>$_SharePhoneNumber,'ShareHomeAddress'=>$_ShareHomeAddress));
	}
	/**
	 * Set PaymentType
	 * @param MobilePaymentCodeType PaymentType
	 * @return MobilePaymentCodeType
	 */
	public function setPaymentType($_PaymentType)
	{
		return ($this->PaymentType = PayPalTypeMobilePaymentCodeType::valueIsValid($_PaymentType)?$_PaymentType:null);
	}
	/**
	 * Get PaymentType
	 * @return PayPalTypeMobilePaymentCodeType
	 */
	public function getPaymentType()
	{
		return $this->PaymentType;
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
	 * Set SenderPhone
	 * @param PhoneNumberType SenderPhone
	 * @return PhoneNumberType
	 */
	public function setSenderPhone($_SenderPhone)
	{
		return ($this->SenderPhone = $_SenderPhone);
	}
	/**
	 * Get SenderPhone
	 * @return PayPalTypePhoneNumberType
	 */
	public function getSenderPhone()
	{
		return $this->SenderPhone;
	}
	/**
	 * Set RecipientType
	 * @param MobileRecipientCodeType RecipientType
	 * @return MobileRecipientCodeType
	 */
	public function setRecipientType($_RecipientType)
	{
		return ($this->RecipientType = PayPalTypeMobileRecipientCodeType::valueIsValid($_RecipientType)?$_RecipientType:null);
	}
	/**
	 * Get RecipientType
	 * @return PayPalTypeMobileRecipientCodeType
	 */
	public function getRecipientType()
	{
		return $this->RecipientType;
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
	 * Set RecipientPhone
	 * @param PhoneNumberType RecipientPhone
	 * @return PhoneNumberType
	 */
	public function setRecipientPhone($_RecipientPhone)
	{
		return ($this->RecipientPhone = $_RecipientPhone);
	}
	/**
	 * Get RecipientPhone
	 * @return PayPalTypePhoneNumberType
	 */
	public function getRecipientPhone()
	{
		return $this->RecipientPhone;
	}
	/**
	 * Set ItemAmount
	 * @param BasicAmountType ItemAmount
	 * @return BasicAmountType
	 */
	public function setItemAmount($_ItemAmount)
	{
		return ($this->ItemAmount = $_ItemAmount);
	}
	/**
	 * Get ItemAmount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getItemAmount()
	{
		return $this->ItemAmount;
	}
	/**
	 * Set Tax
	 * @param BasicAmountType Tax
	 * @return BasicAmountType
	 */
	public function setTax($_Tax)
	{
		return ($this->Tax = $_Tax);
	}
	/**
	 * Get Tax
	 * @return PayPalTypeBasicAmountType
	 */
	public function getTax()
	{
		return $this->Tax;
	}
	/**
	 * Set Shipping
	 * @param BasicAmountType Shipping
	 * @return BasicAmountType
	 */
	public function setShipping($_Shipping)
	{
		return ($this->Shipping = $_Shipping);
	}
	/**
	 * Get Shipping
	 * @return PayPalTypeBasicAmountType
	 */
	public function getShipping()
	{
		return $this->Shipping;
	}
	/**
	 * Set ItemName
	 * @param string ItemName
	 * @return string
	 */
	public function setItemName($_ItemName)
	{
		return ($this->ItemName = $_ItemName);
	}
	/**
	 * Get ItemName
	 * @return string
	 */
	public function getItemName()
	{
		return $this->ItemName;
	}
	/**
	 * Set ItemNumber
	 * @param string ItemNumber
	 * @return string
	 */
	public function setItemNumber($_ItemNumber)
	{
		return ($this->ItemNumber = $_ItemNumber);
	}
	/**
	 * Get ItemNumber
	 * @return string
	 */
	public function getItemNumber()
	{
		return $this->ItemNumber;
	}
	/**
	 * Set Note
	 * @param string Note
	 * @return string
	 */
	public function setNote($_Note)
	{
		return ($this->Note = $_Note);
	}
	/**
	 * Get Note
	 * @return string
	 */
	public function getNote()
	{
		return $this->Note;
	}
	/**
	 * Set CustomID
	 * @param string CustomID
	 * @return string
	 */
	public function setCustomID($_CustomID)
	{
		return ($this->CustomID = $_CustomID);
	}
	/**
	 * Get CustomID
	 * @return string
	 */
	public function getCustomID()
	{
		return $this->CustomID;
	}
	/**
	 * Set SharePhoneNumber
	 * @param integer SharePhoneNumber
	 * @return integer
	 */
	public function setSharePhoneNumber($_SharePhoneNumber)
	{
		return ($this->SharePhoneNumber = $_SharePhoneNumber);
	}
	/**
	 * Get SharePhoneNumber
	 * @return integer
	 */
	public function getSharePhoneNumber()
	{
		return $this->SharePhoneNumber;
	}
	/**
	 * Set ShareHomeAddress
	 * @param integer ShareHomeAddress
	 * @return integer
	 */
	public function setShareHomeAddress($_ShareHomeAddress)
	{
		return ($this->ShareHomeAddress = $_ShareHomeAddress);
	}
	/**
	 * Get ShareHomeAddress
	 * @return integer
	 */
	public function getShareHomeAddress()
	{
		return $this->ShareHomeAddress;
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