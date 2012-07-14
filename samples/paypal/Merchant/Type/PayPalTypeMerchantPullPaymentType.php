<?php
/**
 * Class file for PayPalTypeMerchantPullPaymentType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeMerchantPullPaymentType
 * Documentation : MerchantPullPayment Parameters to make initiate a pull payment
 * @date 14/07/2012
 */
class PayPalTypeMerchantPullPaymentType extends PayPalWsdlClass
{
	/**
	 * The Amount
	 * Meta informations :
	 * 	- documentation : The amount to charge to the customer. Required Only numeric characters and a decimal separator are allowed. Limit: 10 single-byte characters, including two for decimals You must set the currencyID attribute to one of the three-character currency code for any of the supported PayPal currencies.
	 * @var PayPalTypeBasicAmountType
	 */
	public $Amount;
	/**
	 * The MpID
	 * Meta informations :
	 * 	- documentation : Preapproved Payments billing agreement identification number between the PayPal customer and you. Required Character limit: 19 single-byte alphanumeric characters. The format of a billing agreement identification number is the single-character prefix B, followed by a hyphen and an alphanumeric character string: B-unique_alphanumeric_string
	 * @var PayPalTypeMerchantPullIDType
	 */
	public $MpID;
	/**
	 * The PaymentType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies type of PayPal payment you require Optional
	 * @var PayPalTypeMerchantPullPaymentCodeType
	 */
	public $PaymentType;
	/**
	 * The Memo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Text entered by the customer in the Note field during enrollment Optional
	 * @var string
	 */
	public $Memo;
	/**
	 * The EmailSubject
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Subject line of confirmation email sent to recipient Optional
	 * @var string
	 */
	public $EmailSubject;
	/**
	 * The Tax
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The tax charged on the transaction Optional
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
	 * The Handling
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Per-transaction handling charge Optional
	 * @var PayPalTypeBasicAmountType
	 */
	public $Handling;
	/**
	 * The ItemName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Name of purchased item Optional
	 * @var string
	 */
	public $ItemName;
	/**
	 * The ItemNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Reference number of purchased item Optional
	 * @var string
	 */
	public $ItemNumber;
	/**
	 * The Invoice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Your invoice number Optional
	 * @var string
	 */
	public $Invoice;
	/**
	 * The Custom
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Custom annotation field for tracking or other use Optional
	 * @var string
	 */
	public $Custom;
	/**
	 * The ButtonSource
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An identification code for use by third-party applications to identify transactions. Optional Character length and limitations: 32 single-byte alphanumeric characters
	 * @var string
	 */
	public $ButtonSource;
	/**
	 * The SoftDescriptor
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Passed in soft descriptor string to be appended. Optional Character length and limitations: single-byte alphanumeric characters
	 * @var string
	 */
	public $SoftDescriptor;
	/**
	 * Constructor
	 * @param PayPalTypeBasicAmountType Amount
	 * @param PayPalTypeMerchantPullIDType MpID
	 * @param PayPalTypeMerchantPullPaymentCodeType PaymentType
	 * @param string Memo
	 * @param string EmailSubject
	 * @param PayPalTypeBasicAmountType Tax
	 * @param PayPalTypeBasicAmountType Shipping
	 * @param PayPalTypeBasicAmountType Handling
	 * @param string ItemName
	 * @param string ItemNumber
	 * @param string Invoice
	 * @param string Custom
	 * @param string ButtonSource
	 * @param string SoftDescriptor
	 * @return PayPalTypeMerchantPullPaymentType
	 */
	public function __construct($_Amount = null,$_MpID = null,$_PaymentType = null,$_Memo = null,$_EmailSubject = null,$_Tax = null,$_Shipping = null,$_Handling = null,$_ItemName = null,$_ItemNumber = null,$_Invoice = null,$_Custom = null,$_ButtonSource = null,$_SoftDescriptor = null)
	{
		parent::__construct(array('Amount'=>$_Amount,'MpID'=>$_MpID,'PaymentType'=>$_PaymentType,'Memo'=>$_Memo,'EmailSubject'=>$_EmailSubject,'Tax'=>$_Tax,'Shipping'=>$_Shipping,'Handling'=>$_Handling,'ItemName'=>$_ItemName,'ItemNumber'=>$_ItemNumber,'Invoice'=>$_Invoice,'Custom'=>$_Custom,'ButtonSource'=>$_ButtonSource,'SoftDescriptor'=>$_SoftDescriptor));
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
	 * Set MpID
	 * @param MerchantPullIDType MpID
	 * @return MerchantPullIDType
	 */
	public function setMpID($_MpID)
	{
		return ($this->MpID = PayPalTypeMerchantPullIDType::valueIsValid($_MpID)?$_MpID:null);
	}
	/**
	 * Get MpID
	 * @return PayPalTypeMerchantPullIDType
	 */
	public function getMpID()
	{
		return $this->MpID;
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
	 * Set EmailSubject
	 * @param string EmailSubject
	 * @return string
	 */
	public function setEmailSubject($_EmailSubject)
	{
		return ($this->EmailSubject = $_EmailSubject);
	}
	/**
	 * Get EmailSubject
	 * @return string
	 */
	public function getEmailSubject()
	{
		return $this->EmailSubject;
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
	 * Set Handling
	 * @param BasicAmountType Handling
	 * @return BasicAmountType
	 */
	public function setHandling($_Handling)
	{
		return ($this->Handling = $_Handling);
	}
	/**
	 * Get Handling
	 * @return PayPalTypeBasicAmountType
	 */
	public function getHandling()
	{
		return $this->Handling;
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
	 * Set Invoice
	 * @param string Invoice
	 * @return string
	 */
	public function setInvoice($_Invoice)
	{
		return ($this->Invoice = $_Invoice);
	}
	/**
	 * Get Invoice
	 * @return string
	 */
	public function getInvoice()
	{
		return $this->Invoice;
	}
	/**
	 * Set Custom
	 * @param string Custom
	 * @return string
	 */
	public function setCustom($_Custom)
	{
		return ($this->Custom = $_Custom);
	}
	/**
	 * Get Custom
	 * @return string
	 */
	public function getCustom()
	{
		return $this->Custom;
	}
	/**
	 * Set ButtonSource
	 * @param string ButtonSource
	 * @return string
	 */
	public function setButtonSource($_ButtonSource)
	{
		return ($this->ButtonSource = $_ButtonSource);
	}
	/**
	 * Get ButtonSource
	 * @return string
	 */
	public function getButtonSource()
	{
		return $this->ButtonSource;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>