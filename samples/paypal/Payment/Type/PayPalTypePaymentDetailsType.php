<?php
/**
 * Class file for PayPalTypePaymentDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypePaymentDetailsType
 * Documentation : PaymentDetailsType Information about a payment. Used by DCC and Express Checkout.
 * @date 14/07/2012
 */
class PayPalTypePaymentDetailsType extends PayPalWsdlClass
{
	/**
	 * The OrderTotal
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Total of order, including shipping, handling, and tax. You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
	 * @var PayPalTypeBasicAmountType
	 */
	public $OrderTotal;
	/**
	 * The ItemTotal
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Sum of cost of all items in this order. You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. Optional separator must be a comma (,).
	 * @var PayPalTypeBasicAmountType
	 */
	public $ItemTotal;
	/**
	 * The ShippingTotal
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Total shipping costs for this order. You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. Optional Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
	 * @var PayPalTypeBasicAmountType
	 */
	public $ShippingTotal;
	/**
	 * The HandlingTotal
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Total handling costs for this order. You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. Optional Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
	 * @var PayPalTypeBasicAmountType
	 */
	public $HandlingTotal;
	/**
	 * The TaxTotal
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Sum of tax for all items in this order. You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. Optional Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
	 * @var PayPalTypeBasicAmountType
	 */
	public $TaxTotal;
	/**
	 * The OrderDescription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Description of items the customer is purchasing. Optional Character length and limitations: 127 single-byte alphanumeric characters
	 * @var string
	 */
	public $OrderDescription;
	/**
	 * The Custom
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A free-form field for your own use. Optional Character length and limitations: 256 single-byte alphanumeric characters
	 * @var string
	 */
	public $Custom;
	/**
	 * The InvoiceID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Your own invoice or tracking number. Optional Character length and limitations: 127 single-byte alphanumeric characters
	 * @var string
	 */
	public $InvoiceID;
	/**
	 * The ButtonSource
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An identification code for use by third-party applications to identify transactions. Optional Character length and limitations: 32 single-byte alphanumeric characters
	 * @var string
	 */
	public $ButtonSource;
	/**
	 * The NotifyURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Your URL for receiving Instant Payment Notification (IPN) about this transaction. Optional If you do not specify NotifyURL in the request, the notification URL from your Merchant Profile is used, if one exists. Character length and limitations: 2,048 single-byte alphanumeric characters
	 * @var string
	 */
	public $NotifyURL;
	/**
	 * The ShipToAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Address the order will be shipped to. Optional If you include the ShipToAddress element, the AddressType elements are required: Name Street1 CityName CountryCode Do not set set the CountryName element.
	 * @var PayPalTypeAddressType
	 */
	public $ShipToAddress;
	/**
	 * The ShippingMethod
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : 
	 * @var PayPalTypeShippingServiceCodeType
	 */
	public $ShippingMethod;
	/**
	 * The ProfileAddressChangeDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Date and time (in GMT in the format yyyy-MM-ddTHH:mm:ssZ) at which address was changed by the user.
	 * @var dateTime
	 */
	public $ProfileAddressChangeDate;
	/**
	 * The PaymentDetailsItem
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Information about the individual purchased items
	 * @var PayPalTypePaymentDetailsItemType
	 */
	public $PaymentDetailsItem;
	/**
	 * The InsuranceTotal
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Total shipping insurance costs for this order. Optional
	 * @var PayPalTypeBasicAmountType
	 */
	public $InsuranceTotal;
	/**
	 * The ShippingDiscount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Shipping discount for this order, specified as a negative number. Optional
	 * @var PayPalTypeBasicAmountType
	 */
	public $ShippingDiscount;
	/**
	 * The InsuranceOptionOffered
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Information about the Insurance options.
	 * @var string
	 */
	public $InsuranceOptionOffered;
	/**
	 * The AllowedPaymentMethod
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Allowed payment methods for this transaction.
	 * @var PayPalTypeAllowedPaymentMethodType
	 */
	public $AllowedPaymentMethod;
	/**
	 * The EnhancedPaymentData
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Enhanced Data section to accept channel specific data. Optional Refer to EnhancedPaymentDataType for details.
	 * @var PayPalTypeEnhancedPaymentDataType
	 */
	public $EnhancedPaymentData;
	/**
	 * The SellerDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Details about the seller. Optional
	 * @var PayPalTypeSellerDetailsType
	 */
	public $SellerDetails;
	/**
	 * The NoteText
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Note to recipient/seller. Optional Character length and limitations: 127 single-byte alphanumeric characters.
	 * @var string
	 */
	public $NoteText;
	/**
	 * The TransactionId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : PayPal Transaction Id, returned once DoExpressCheckout is completed.
	 * @var string
	 */
	public $TransactionId;
	/**
	 * The PaymentAction
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : How you want to obtain payment. This payment action input will be used for split payments Authorization indicates that this payment is a basic authorization subject to settlement with PayPal Authorization and Capture. Order indicates that this payment is is an order authorization subject to settlement with PayPal Authorization and Capture. Sale indicates that this is a final sale for which you are requesting payment. IMPORTANT: You cannot set PaymentAction to Sale on SetExpressCheckoutRequest and then change PaymentAction to Authorization on the final Express Checkout API, DoExpressCheckoutPaymentRequest. Character length and limit: Up to 13 single-byte alphabetic characters
	 * @var PayPalTypePaymentActionCodeType
	 */
	public $PaymentAction;
	/**
	 * The PaymentRequestID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier and mandatory for the particular payment request in case of multiple payment
	 * @var string
	 */
	public $PaymentRequestID;
	/**
	 * The OrderURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : URL on Merchant site pertaining to this invoice. Optional
	 * @var string
	 */
	public $OrderURL;
	/**
	 * The SoftDescriptor
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Soft Descriptor supported for Sale and Auth in DEC only. For Order this will be ignored.
	 * @var string
	 */
	public $SoftDescriptor;
	/**
	 * The BranchLevel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : BranchLevel is used to identify chain payment. If BranchLevel is 0 or 1, this payment is where money moves to. If BranchLevel greater than 1, this payment contains the actual seller info. Optional
	 * @var integer
	 */
	public $BranchLevel;
	/**
	 * The OfferDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Soft Descriptor supported for Sale and Auth in DEC only. For Order this will be ignored.
	 * @var PayPalTypeOfferDetailsType
	 */
	public $OfferDetails;
	/**
	 * The Recurring
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Flag to indicate the recurring transaction
	 * @var PayPalTypeRecurringFlagType
	 */
	public $Recurring;
	/**
	 * The PaymentReason
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Indicates the purpose of this payment like Refund
	 * @var PayPalTypePaymentReasonType
	 */
	public $PaymentReason;
	/**
	 * Constructor
	 * @param PayPalTypeBasicAmountType OrderTotal
	 * @param PayPalTypeBasicAmountType ItemTotal
	 * @param PayPalTypeBasicAmountType ShippingTotal
	 * @param PayPalTypeBasicAmountType HandlingTotal
	 * @param PayPalTypeBasicAmountType TaxTotal
	 * @param string OrderDescription
	 * @param string Custom
	 * @param string InvoiceID
	 * @param string ButtonSource
	 * @param string NotifyURL
	 * @param PayPalTypeAddressType ShipToAddress
	 * @param PayPalTypeShippingServiceCodeType ShippingMethod
	 * @param dateTime ProfileAddressChangeDate
	 * @param PayPalTypePaymentDetailsItemType PaymentDetailsItem
	 * @param PayPalTypeBasicAmountType InsuranceTotal
	 * @param PayPalTypeBasicAmountType ShippingDiscount
	 * @param string InsuranceOptionOffered
	 * @param PayPalTypeAllowedPaymentMethodType AllowedPaymentMethod
	 * @param PayPalTypeEnhancedPaymentDataType EnhancedPaymentData
	 * @param PayPalTypeSellerDetailsType SellerDetails
	 * @param string NoteText
	 * @param string TransactionId
	 * @param PayPalTypePaymentActionCodeType PaymentAction
	 * @param string PaymentRequestID
	 * @param string OrderURL
	 * @param string SoftDescriptor
	 * @param integer BranchLevel
	 * @param PayPalTypeOfferDetailsType OfferDetails
	 * @param PayPalTypeRecurringFlagType Recurring
	 * @param PayPalTypePaymentReasonType PaymentReason
	 * @return PayPalTypePaymentDetailsType
	 */
	public function __construct($_OrderTotal = null,$_ItemTotal = null,$_ShippingTotal = null,$_HandlingTotal = null,$_TaxTotal = null,$_OrderDescription = null,$_Custom = null,$_InvoiceID = null,$_ButtonSource = null,$_NotifyURL = null,$_ShipToAddress = null,$_ShippingMethod = null,$_ProfileAddressChangeDate = null,$_PaymentDetailsItem = null,$_InsuranceTotal = null,$_ShippingDiscount = null,$_InsuranceOptionOffered = null,$_AllowedPaymentMethod = null,$_EnhancedPaymentData = null,$_SellerDetails = null,$_NoteText = null,$_TransactionId = null,$_PaymentAction = null,$_PaymentRequestID = null,$_OrderURL = null,$_SoftDescriptor = null,$_BranchLevel = null,$_OfferDetails = null,$_Recurring = null,$_PaymentReason = null)
	{
		parent::__construct(array('OrderTotal'=>$_OrderTotal,'ItemTotal'=>$_ItemTotal,'ShippingTotal'=>$_ShippingTotal,'HandlingTotal'=>$_HandlingTotal,'TaxTotal'=>$_TaxTotal,'OrderDescription'=>$_OrderDescription,'Custom'=>$_Custom,'InvoiceID'=>$_InvoiceID,'ButtonSource'=>$_ButtonSource,'NotifyURL'=>$_NotifyURL,'ShipToAddress'=>$_ShipToAddress,'ShippingMethod'=>$_ShippingMethod,'ProfileAddressChangeDate'=>$_ProfileAddressChangeDate,'PaymentDetailsItem'=>$_PaymentDetailsItem,'InsuranceTotal'=>$_InsuranceTotal,'ShippingDiscount'=>$_ShippingDiscount,'InsuranceOptionOffered'=>$_InsuranceOptionOffered,'AllowedPaymentMethod'=>$_AllowedPaymentMethod,'EnhancedPaymentData'=>$_EnhancedPaymentData,'SellerDetails'=>$_SellerDetails,'NoteText'=>$_NoteText,'TransactionId'=>$_TransactionId,'PaymentAction'=>$_PaymentAction,'PaymentRequestID'=>$_PaymentRequestID,'OrderURL'=>$_OrderURL,'SoftDescriptor'=>$_SoftDescriptor,'BranchLevel'=>$_BranchLevel,'OfferDetails'=>$_OfferDetails,'Recurring'=>$_Recurring,'PaymentReason'=>$_PaymentReason));
	}
	/**
	 * Set OrderTotal
	 * @param BasicAmountType OrderTotal
	 * @return BasicAmountType
	 */
	public function setOrderTotal($_OrderTotal)
	{
		return ($this->OrderTotal = $_OrderTotal);
	}
	/**
	 * Get OrderTotal
	 * @return PayPalTypeBasicAmountType
	 */
	public function getOrderTotal()
	{
		return $this->OrderTotal;
	}
	/**
	 * Set ItemTotal
	 * @param BasicAmountType ItemTotal
	 * @return BasicAmountType
	 */
	public function setItemTotal($_ItemTotal)
	{
		return ($this->ItemTotal = $_ItemTotal);
	}
	/**
	 * Get ItemTotal
	 * @return PayPalTypeBasicAmountType
	 */
	public function getItemTotal()
	{
		return $this->ItemTotal;
	}
	/**
	 * Set ShippingTotal
	 * @param BasicAmountType ShippingTotal
	 * @return BasicAmountType
	 */
	public function setShippingTotal($_ShippingTotal)
	{
		return ($this->ShippingTotal = $_ShippingTotal);
	}
	/**
	 * Get ShippingTotal
	 * @return PayPalTypeBasicAmountType
	 */
	public function getShippingTotal()
	{
		return $this->ShippingTotal;
	}
	/**
	 * Set HandlingTotal
	 * @param BasicAmountType HandlingTotal
	 * @return BasicAmountType
	 */
	public function setHandlingTotal($_HandlingTotal)
	{
		return ($this->HandlingTotal = $_HandlingTotal);
	}
	/**
	 * Get HandlingTotal
	 * @return PayPalTypeBasicAmountType
	 */
	public function getHandlingTotal()
	{
		return $this->HandlingTotal;
	}
	/**
	 * Set TaxTotal
	 * @param BasicAmountType TaxTotal
	 * @return BasicAmountType
	 */
	public function setTaxTotal($_TaxTotal)
	{
		return ($this->TaxTotal = $_TaxTotal);
	}
	/**
	 * Get TaxTotal
	 * @return PayPalTypeBasicAmountType
	 */
	public function getTaxTotal()
	{
		return $this->TaxTotal;
	}
	/**
	 * Set OrderDescription
	 * @param string OrderDescription
	 * @return string
	 */
	public function setOrderDescription($_OrderDescription)
	{
		return ($this->OrderDescription = $_OrderDescription);
	}
	/**
	 * Get OrderDescription
	 * @return string
	 */
	public function getOrderDescription()
	{
		return $this->OrderDescription;
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
	 * Set NotifyURL
	 * @param string NotifyURL
	 * @return string
	 */
	public function setNotifyURL($_NotifyURL)
	{
		return ($this->NotifyURL = $_NotifyURL);
	}
	/**
	 * Get NotifyURL
	 * @return string
	 */
	public function getNotifyURL()
	{
		return $this->NotifyURL;
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
	 * Set ShippingMethod
	 * @param ShippingServiceCodeType ShippingMethod
	 * @return ShippingServiceCodeType
	 */
	public function setShippingMethod($_ShippingMethod)
	{
		return ($this->ShippingMethod = PayPalTypeShippingServiceCodeType::valueIsValid($_ShippingMethod)?$_ShippingMethod:null);
	}
	/**
	 * Get ShippingMethod
	 * @return PayPalTypeShippingServiceCodeType
	 */
	public function getShippingMethod()
	{
		return $this->ShippingMethod;
	}
	/**
	 * Set ProfileAddressChangeDate
	 * @param dateTime ProfileAddressChangeDate
	 * @return dateTime
	 */
	public function setProfileAddressChangeDate($_ProfileAddressChangeDate)
	{
		return ($this->ProfileAddressChangeDate = $_ProfileAddressChangeDate);
	}
	/**
	 * Get ProfileAddressChangeDate
	 * @return dateTime
	 */
	public function getProfileAddressChangeDate()
	{
		return $this->ProfileAddressChangeDate;
	}
	/**
	 * Set PaymentDetailsItem
	 * @param PaymentDetailsItemType PaymentDetailsItem
	 * @return PaymentDetailsItemType
	 */
	public function setPaymentDetailsItem($_PaymentDetailsItem)
	{
		return ($this->PaymentDetailsItem = $_PaymentDetailsItem);
	}
	/**
	 * Get PaymentDetailsItem
	 * @return PayPalTypePaymentDetailsItemType
	 */
	public function getPaymentDetailsItem()
	{
		return $this->PaymentDetailsItem;
	}
	/**
	 * Set InsuranceTotal
	 * @param BasicAmountType InsuranceTotal
	 * @return BasicAmountType
	 */
	public function setInsuranceTotal($_InsuranceTotal)
	{
		return ($this->InsuranceTotal = $_InsuranceTotal);
	}
	/**
	 * Get InsuranceTotal
	 * @return PayPalTypeBasicAmountType
	 */
	public function getInsuranceTotal()
	{
		return $this->InsuranceTotal;
	}
	/**
	 * Set ShippingDiscount
	 * @param BasicAmountType ShippingDiscount
	 * @return BasicAmountType
	 */
	public function setShippingDiscount($_ShippingDiscount)
	{
		return ($this->ShippingDiscount = $_ShippingDiscount);
	}
	/**
	 * Get ShippingDiscount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getShippingDiscount()
	{
		return $this->ShippingDiscount;
	}
	/**
	 * Set InsuranceOptionOffered
	 * @param string InsuranceOptionOffered
	 * @return string
	 */
	public function setInsuranceOptionOffered($_InsuranceOptionOffered)
	{
		return ($this->InsuranceOptionOffered = $_InsuranceOptionOffered);
	}
	/**
	 * Get InsuranceOptionOffered
	 * @return string
	 */
	public function getInsuranceOptionOffered()
	{
		return $this->InsuranceOptionOffered;
	}
	/**
	 * Set AllowedPaymentMethod
	 * @param AllowedPaymentMethodType AllowedPaymentMethod
	 * @return AllowedPaymentMethodType
	 */
	public function setAllowedPaymentMethod($_AllowedPaymentMethod)
	{
		return ($this->AllowedPaymentMethod = PayPalTypeAllowedPaymentMethodType::valueIsValid($_AllowedPaymentMethod)?$_AllowedPaymentMethod:null);
	}
	/**
	 * Get AllowedPaymentMethod
	 * @return PayPalTypeAllowedPaymentMethodType
	 */
	public function getAllowedPaymentMethod()
	{
		return $this->AllowedPaymentMethod;
	}
	/**
	 * Set EnhancedPaymentData
	 * @param EnhancedPaymentDataType EnhancedPaymentData
	 * @return EnhancedPaymentDataType
	 */
	public function setEnhancedPaymentData($_EnhancedPaymentData)
	{
		return ($this->EnhancedPaymentData = $_EnhancedPaymentData);
	}
	/**
	 * Get EnhancedPaymentData
	 * @return PayPalTypeEnhancedPaymentDataType
	 */
	public function getEnhancedPaymentData()
	{
		return $this->EnhancedPaymentData;
	}
	/**
	 * Set SellerDetails
	 * @param SellerDetailsType SellerDetails
	 * @return SellerDetailsType
	 */
	public function setSellerDetails($_SellerDetails)
	{
		return ($this->SellerDetails = $_SellerDetails);
	}
	/**
	 * Get SellerDetails
	 * @return PayPalTypeSellerDetailsType
	 */
	public function getSellerDetails()
	{
		return $this->SellerDetails;
	}
	/**
	 * Set NoteText
	 * @param string NoteText
	 * @return string
	 */
	public function setNoteText($_NoteText)
	{
		return ($this->NoteText = $_NoteText);
	}
	/**
	 * Get NoteText
	 * @return string
	 */
	public function getNoteText()
	{
		return $this->NoteText;
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
	 * Set PaymentRequestID
	 * @param string PaymentRequestID
	 * @return string
	 */
	public function setPaymentRequestID($_PaymentRequestID)
	{
		return ($this->PaymentRequestID = $_PaymentRequestID);
	}
	/**
	 * Get PaymentRequestID
	 * @return string
	 */
	public function getPaymentRequestID()
	{
		return $this->PaymentRequestID;
	}
	/**
	 * Set OrderURL
	 * @param string OrderURL
	 * @return string
	 */
	public function setOrderURL($_OrderURL)
	{
		return ($this->OrderURL = $_OrderURL);
	}
	/**
	 * Get OrderURL
	 * @return string
	 */
	public function getOrderURL()
	{
		return $this->OrderURL;
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
	 * Set BranchLevel
	 * @param integer BranchLevel
	 * @return integer
	 */
	public function setBranchLevel($_BranchLevel)
	{
		return ($this->BranchLevel = $_BranchLevel);
	}
	/**
	 * Get BranchLevel
	 * @return integer
	 */
	public function getBranchLevel()
	{
		return $this->BranchLevel;
	}
	/**
	 * Set OfferDetails
	 * @param OfferDetailsType OfferDetails
	 * @return OfferDetailsType
	 */
	public function setOfferDetails($_OfferDetails)
	{
		return ($this->OfferDetails = $_OfferDetails);
	}
	/**
	 * Get OfferDetails
	 * @return PayPalTypeOfferDetailsType
	 */
	public function getOfferDetails()
	{
		return $this->OfferDetails;
	}
	/**
	 * Set Recurring
	 * @param RecurringFlagType Recurring
	 * @return RecurringFlagType
	 */
	public function setRecurring($_Recurring)
	{
		return ($this->Recurring = PayPalTypeRecurringFlagType::valueIsValid($_Recurring)?$_Recurring:null);
	}
	/**
	 * Get Recurring
	 * @return PayPalTypeRecurringFlagType
	 */
	public function getRecurring()
	{
		return $this->Recurring;
	}
	/**
	 * Set PaymentReason
	 * @param PaymentReasonType PaymentReason
	 * @return PaymentReasonType
	 */
	public function setPaymentReason($_PaymentReason)
	{
		return ($this->PaymentReason = PayPalTypePaymentReasonType::valueIsValid($_PaymentReason)?$_PaymentReason:null);
	}
	/**
	 * Get PaymentReason
	 * @return PayPalTypePaymentReasonType
	 */
	public function getPaymentReason()
	{
		return $this->PaymentReason;
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