<?php
/**
 * Class file for PayPalTypeSetMobileCheckoutRequestDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeSetMobileCheckoutRequestDetailsType
 * @date 14/07/2012
 */
class PayPalTypeSetMobileCheckoutRequestDetailsType extends PayPalWsdlClass
{
	/**
	 * The BuyerPhone
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The phone number of the buyer's mobile device, if available. Optional
	 * @var PayPalTypePhoneNumberType
	 */
	public $BuyerPhone;
	/**
	 * The ItemAmount
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- documentation : Cost of this item before tax and shipping.You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. Required
	 * @var PayPalTypeBasicAmountType
	 */
	public $ItemAmount;
	/**
	 * The Tax
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Tax amount for this item.You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. Optional
	 * @var PayPalTypeBasicAmountType
	 */
	public $Tax;
	/**
	 * The Shipping
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Shipping amount for this item.You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. Optional
	 * @var PayPalTypeBasicAmountType
	 */
	public $Shipping;
	/**
	 * The ItemName
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- documentation : Description of the item that the customer is purchasing. Required Character length and limitations: 127 single-byte alphanumeric characters
	 * @var string
	 */
	public $ItemName;
	/**
	 * The ItemNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Reference number of the item that the customer is purchasing. Optional Character length and limitations: 127 single-byte alphanumeric characters
	 * @var string
	 */
	public $ItemNumber;
	/**
	 * The Custom
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A free-form field for your own use, such as a tracking number or other value you want returned to you in IPN. Optional Character length and limitations: 256 single-byte alphanumeric characters
	 * @var string
	 */
	public $Custom;
	/**
	 * The InvoiceID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Your own unique invoice or tracking number. Optional Character length and limitations: 127 single-byte alphanumeric characters
	 * @var string
	 */
	public $InvoiceID;
	/**
	 * The ReturnURL
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- documentation : URL to which the customer's browser is returned after choosing to pay with PayPal. PayPal recommends that the value of ReturnURL be the final review page on which the customer confirms the order and payment. Required Character length and limitations: no limit.
	 * @var string
	 */
	public $ReturnURL;
	/**
	 * The CancelURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : URL to which the customer is returned if he does not approve the use of PayPal to pay you. PayPal recommends that the value of CancelURL be the original page on which the customer chose to pay with PayPal. Optional Character length and limitations: no limit
	 * @var string
	 */
	public $CancelURL;
	/**
	 * The AddressDisplayOptions
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The value 1 indicates that you require that the customer's shipping address on file with PayPal be a confirmed address. Setting this element overrides the setting you have specified in your Merchant Account Profile. Optional
	 * @var int
	 */
	public $AddressDisplayOptions;
	/**
	 * The SharePhone
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The value 1 indicates that you require that the customer specifies a contact phone for the transactxion. Default is 0 / none required. Optional
	 * @var int
	 */
	public $SharePhone;
	/**
	 * The ShipToAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Customer's shipping address. Optional
	 * @var PayPalTypeAddressType
	 */
	public $ShipToAddress;
	/**
	 * The BuyerEmail
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Email address of the buyer as entered during checkout. PayPal uses this value to pre-fill the login portion of the PayPal login page. Optional Character length and limit: 127 single-byte alphanumeric characters
	 * @var PayPalTypeEmailAddressType
	 */
	public $BuyerEmail;
	/**
	 * Constructor
	 * @param PayPalTypePhoneNumberType BuyerPhone
	 * @param PayPalTypeBasicAmountType ItemAmount
	 * @param PayPalTypeBasicAmountType Tax
	 * @param PayPalTypeBasicAmountType Shipping
	 * @param string ItemName
	 * @param string ItemNumber
	 * @param string Custom
	 * @param string InvoiceID
	 * @param string ReturnURL
	 * @param string CancelURL
	 * @param int AddressDisplayOptions
	 * @param int SharePhone
	 * @param PayPalTypeAddressType ShipToAddress
	 * @param PayPalTypeEmailAddressType BuyerEmail
	 * @return PayPalTypeSetMobileCheckoutRequestDetailsType
	 */
	public function __construct($_BuyerPhone = null,$_ItemAmount,$_Tax = null,$_Shipping = null,$_ItemName,$_ItemNumber = null,$_Custom = null,$_InvoiceID = null,$_ReturnURL,$_CancelURL = null,$_AddressDisplayOptions = null,$_SharePhone = null,$_ShipToAddress = null,$_BuyerEmail = null)
	{
		parent::__construct(array('BuyerPhone'=>$_BuyerPhone,'ItemAmount'=>$_ItemAmount,'Tax'=>$_Tax,'Shipping'=>$_Shipping,'ItemName'=>$_ItemName,'ItemNumber'=>$_ItemNumber,'Custom'=>$_Custom,'InvoiceID'=>$_InvoiceID,'ReturnURL'=>$_ReturnURL,'CancelURL'=>$_CancelURL,'AddressDisplayOptions'=>$_AddressDisplayOptions,'SharePhone'=>$_SharePhone,'ShipToAddress'=>$_ShipToAddress,'BuyerEmail'=>$_BuyerEmail));
	}
	/**
	 * Set BuyerPhone
	 * @param PhoneNumberType BuyerPhone
	 * @return PhoneNumberType
	 */
	public function setBuyerPhone($_BuyerPhone)
	{
		return ($this->BuyerPhone = $_BuyerPhone);
	}
	/**
	 * Get BuyerPhone
	 * @return PayPalTypePhoneNumberType
	 */
	public function getBuyerPhone()
	{
		return $this->BuyerPhone;
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
	 * Set ReturnURL
	 * @param string ReturnURL
	 * @return string
	 */
	public function setReturnURL($_ReturnURL)
	{
		return ($this->ReturnURL = $_ReturnURL);
	}
	/**
	 * Get ReturnURL
	 * @return string
	 */
	public function getReturnURL()
	{
		return $this->ReturnURL;
	}
	/**
	 * Set CancelURL
	 * @param string CancelURL
	 * @return string
	 */
	public function setCancelURL($_CancelURL)
	{
		return ($this->CancelURL = $_CancelURL);
	}
	/**
	 * Get CancelURL
	 * @return string
	 */
	public function getCancelURL()
	{
		return $this->CancelURL;
	}
	/**
	 * Set AddressDisplayOptions
	 * @param int AddressDisplayOptions
	 * @return int
	 */
	public function setAddressDisplayOptions($_AddressDisplayOptions)
	{
		return ($this->AddressDisplayOptions = $_AddressDisplayOptions);
	}
	/**
	 * Get AddressDisplayOptions
	 * @return int
	 */
	public function getAddressDisplayOptions()
	{
		return $this->AddressDisplayOptions;
	}
	/**
	 * Set SharePhone
	 * @param int SharePhone
	 * @return int
	 */
	public function setSharePhone($_SharePhone)
	{
		return ($this->SharePhone = $_SharePhone);
	}
	/**
	 * Get SharePhone
	 * @return int
	 */
	public function getSharePhone()
	{
		return $this->SharePhone;
	}
	/**
	 * Set ShipToAddress
	 * @param AddressType ShipToAddress
	 * @return AddressType
	 */
	public function setShipToAddress($_ShipToAddress)
	{
		return ($this->ShipToAddress = $_ShipToAddress);
	}
	/**
	 * Get ShipToAddress
	 * @return PayPalTypeAddressType
	 */
	public function getShipToAddress()
	{
		return $this->ShipToAddress;
	}
	/**
	 * Set BuyerEmail
	 * @param EmailAddressType BuyerEmail
	 * @return EmailAddressType
	 */
	public function setBuyerEmail($_BuyerEmail)
	{
		return ($this->BuyerEmail = PayPalTypeEmailAddressType::valueIsValid($_BuyerEmail)?$_BuyerEmail:null);
	}
	/**
	 * Get BuyerEmail
	 * @return PayPalTypeEmailAddressType
	 */
	public function getBuyerEmail()
	{
		return $this->BuyerEmail;
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