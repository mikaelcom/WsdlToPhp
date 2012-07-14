<?php
/**
 * Class file for PayPalTypePaymentInfoType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypePaymentInfoType
 * Documentation : PaymentInfoType Payment information.
 * @date 14/07/2012
 */
class PayPalTypePaymentInfoType extends PayPalWsdlClass
{
	/**
	 * The TransactionID
	 * @var string
	 */
	public $TransactionID;
	/**
	 * The EbayTransactionID
	 * @var string
	 */
	public $EbayTransactionID;
	/**
	 * The ParentTransactionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Parent or related transaction identification number. This field is populated for the following transaction types: ReversalCapture of an authorized transaction.Reauthorization of a transaction.Capture of an order. The value of ParentTransactionID is the original OrderID.Authorization of an order. The value of ParentTransactionID is the original OrderID.Capture of an order authorization.Void of an order. The value of ParentTransactionID is the original OrderID. Character length and limits: 19 single-byte characters maximum
	 * @var PayPalTypeTransactionId
	 */
	public $ParentTransactionID;
	/**
	 * The ReceiptID
	 * @var string
	 */
	public $ReceiptID;
	/**
	 * The TransactionType
	 * Meta informations :
	 * 	- documentation : The type of transaction cart: Transaction created via the PayPal Shopping Cart feature or by Express Checkout with multiple purchased item express-checkout: Transaction created by Express Checkout with a single purchased items send-money: Transaction created by customer from the Send Money tab on the PayPal website. web-accept: Transaction created by customer via Buy Now, Donation, or Auction Smart Logos. subscr-*: Transaction created by customer via Subscription. eot means "end of subscription term." merch-pmt: preapproved payment. mass-pay: Transaction created via MassPay. virtual-terminal: Transaction created via merchant virtual terminal. credit: Transaction created via merchant virtual terminal or API to credit a customer.
	 * @var PayPalTypePaymentTransactionCodeType
	 */
	public $TransactionType;
	/**
	 * The PaymentType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The type of payment
	 * @var PayPalTypePaymentCodeType
	 */
	public $PaymentType;
	/**
	 * The RefundSourceCodeType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The type of funding source
	 * @var PayPalTypeRefundSourceCodeType
	 */
	public $RefundSourceCodeType;
	/**
	 * The ExpectedeCheckClearDate
	 * Meta informations :
	 * 	- documentation : eCheck latest expected clear date
	 * @var dateTime
	 */
	public $ExpectedeCheckClearDate;
	/**
	 * The PaymentDate
	 * Meta informations :
	 * 	- documentation : Date and time of payment
	 * @var dateTime
	 */
	public $PaymentDate;
	/**
	 * The GrossAmount
	 * Meta informations :
	 * 	- documentation : Full amount of the customer's payment, before transaction fee is subtracted
	 * @var PayPalTypeBasicAmountType
	 */
	public $GrossAmount;
	/**
	 * The FeeAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Transaction fee associated with the payment
	 * @var PayPalTypeBasicAmountType
	 */
	public $FeeAmount;
	/**
	 * The SettleAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Amount deposited into the account's primary balance after a currency conversion from automatic conversion through your Payment Receiving Preferences or manual conversion through manually accepting a payment. This amount is calculated after fees and taxes have been assessed.
	 * @var PayPalTypeBasicAmountType
	 */
	public $SettleAmount;
	/**
	 * The TaxAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Amount of tax for transaction
	 * @var PayPalTypeBasicAmountType
	 */
	public $TaxAmount;
	/**
	 * The ExchangeRate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Exchange rate for transaction
	 * @var string
	 */
	public $ExchangeRate;
	/**
	 * The PaymentStatus
	 * Meta informations :
	 * 	- documentation : The status of the payment: None: No status Created: A giropay payment has been initiated. Canceled-Reversal: A reversal has been canceled. For example, you won a dispute with the customer, and the funds for the transaction that was reversed have been returned to you. Completed: The payment has been completed, and the funds have been added successfully to your account balance. Denied: You denied the payment. This happens only if the payment was previously pending because of possible reasons described for the PendingReason element. Expired: This authorization has expired and cannot be captured. Failed: The payment has failed. This happens only if the payment was made from your customer's bank account. In-Progress: The transaction is in process of authorization and capture. Partially-Refunded: The transaction has been partially refunded. Pending: The payment is pending. See "PendingReason" for more information. Refunded: You refunded the payment. Reversed: A payment was reversed due to a chargeback or other type of reversal. The funds have been removed from your account balance and returned to the buyer. The reason for the reversal is specified in the ReasonCode element. Processed: A payment has been accepted. Voided: This authorization has been voided. Completed-Funds-Held: The payment has been completed, and the funds have been added successfully to your pending balance. See the "HoldDecision" field for more information.
	 * @var PayPalTypePaymentStatusCodeType
	 */
	public $PaymentStatus;
	/**
	 * The PendingReason
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The reason the payment is pending: none: No pending reason address: The payment is pending because your customer did not include a confirmed shipping address and your Payment Receiving Preferences is set such that you want to manually accept or deny each of these payments. To change your preference, go to the Preferences section of your Profile. authorization: You set PaymentAction to Authorization on SetExpressCheckoutRequest and have not yet captured funds. echeck: The payment is pending because it was made by an eCheck that has not yet cleared. intl: The payment is pending because you hold a non-U.S. account and do not have a withdrawal mechanism. You must manually accept or deny this payment from your Account Overview. multi-currency: You do not have a balance in the currency sent, and you do not have your Payment Receiving Preferences set to automatically convert and accept this payment. You must manually accept or deny this payment. unilateral: The payment is pending because it was made to an email address that is not yet registered or confirmed. upgrade: The payment is pending because it was made via credit card and you must upgrade your account to Business or Premier status in order to receive the funds. upgrade can also mean that you have reached the monthly limit for transactions on your account. verify: The payment is pending because you are not yet verified. You must verify your account before you can accept this payment. other: The payment is pending for a reason other than those listed above. For more information, contact PayPal Customer Service.
	 * @var PayPalTypePendingStatusCodeType
	 */
	public $PendingReason;
	/**
	 * The ReasonCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The reason for a reversal if TransactionType is reversal: none: No reason code chargeback: A reversal has occurred on this transaction due to a chargeback by your customer. guarantee: A reversal has occurred on this transaction due to your customer triggering a money-back guarantee. buyer-complaint: A reversal has occurred on this transaction due to a complaint about the transaction from your customer. refund: A reversal has occurred on this transaction because you have given the customer a refund. other: A reversal has occurred on this transaction due to a reason not listed above.
	 * @var PayPalTypeReversalReasonCodeType
	 */
	public $ReasonCode;
	/**
	 * The HoldDecision
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : HoldDecision is returned in the response only if PaymentStatus is Completed-Funds-Held. The reason the funds are kept in pending balance: newsellerpaymenthold: The seller is new. paymenthold: A hold is placed on your transaction due to a reason not listed above.
	 * @var string
	 */
	public $HoldDecision;
	/**
	 * The ShippingMethod
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Shipping method selected by the user during check-out.
	 * @var string
	 */
	public $ShippingMethod;
	/**
	 * The ProtectionEligibility
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Protection Eligibility for this Transaction - None, SPP or ESPP
	 * @var string
	 */
	public $ProtectionEligibility;
	/**
	 * The ProtectionEligibilityType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Protection Eligibility details for this Transaction
	 * @var string
	 */
	public $ProtectionEligibilityType;
	/**
	 * The ShipAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Amount of shipping charged on transaction
	 * @var string
	 */
	public $ShipAmount;
	/**
	 * The ShipHandleAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Amount of ship handling charged on transaction
	 * @var string
	 */
	public $ShipHandleAmount;
	/**
	 * The ShipDiscount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Amount of shipping discount on transaction
	 * @var string
	 */
	public $ShipDiscount;
	/**
	 * The InsuranceAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Amount of Insurance amount on transaction
	 * @var string
	 */
	public $InsuranceAmount;
	/**
	 * The Subject
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Subject as entered in the transaction
	 * @var string
	 */
	public $Subject;
	/**
	 * The StoreID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : StoreID as entered in the transaction
	 * @var string
	 */
	public $StoreID;
	/**
	 * The TerminalID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : TerminalID as entered in the transaction
	 * @var string
	 */
	public $TerminalID;
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
	 * The PaymentRequestID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier and mandatory for each bucket in case of split payement
	 * @var string
	 */
	public $PaymentRequestID;
	/**
	 * The FMFDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Thes are filters that could result in accept/deny/pending action.
	 * @var PayPalTypeFMFDetailsType
	 */
	public $FMFDetails;
	/**
	 * The EnhancedPaymentInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : This will be enhanced info for the payment: Example: UATP details
	 * @var PayPalTypeEnhancedPaymentInfoType
	 */
	public $EnhancedPaymentInfo;
	/**
	 * The PaymentError
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : This will indicate the payment status for individual payment request in case of split payment
	 * @var PayPalTypeErrorType
	 */
	public $PaymentError;
	/**
	 * The InstrumentDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Type of the payment instrument.
	 * @var PayPalTypeInstrumentDetailsType
	 */
	public $InstrumentDetails;
	/**
	 * The OfferDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Offer Details.
	 * @var PayPalTypeOfferDetailsType
	 */
	public $OfferDetails;
	/**
	 * Constructor
	 * @param string TransactionID
	 * @param string EbayTransactionID
	 * @param PayPalTypeTransactionId ParentTransactionID
	 * @param string ReceiptID
	 * @param PayPalTypePaymentTransactionCodeType TransactionType
	 * @param PayPalTypePaymentCodeType PaymentType
	 * @param PayPalTypeRefundSourceCodeType RefundSourceCodeType
	 * @param dateTime ExpectedeCheckClearDate
	 * @param dateTime PaymentDate
	 * @param PayPalTypeBasicAmountType GrossAmount
	 * @param PayPalTypeBasicAmountType FeeAmount
	 * @param PayPalTypeBasicAmountType SettleAmount
	 * @param PayPalTypeBasicAmountType TaxAmount
	 * @param string ExchangeRate
	 * @param PayPalTypePaymentStatusCodeType PaymentStatus
	 * @param PayPalTypePendingStatusCodeType PendingReason
	 * @param PayPalTypeReversalReasonCodeType ReasonCode
	 * @param string HoldDecision
	 * @param string ShippingMethod
	 * @param string ProtectionEligibility
	 * @param string ProtectionEligibilityType
	 * @param string ShipAmount
	 * @param string ShipHandleAmount
	 * @param string ShipDiscount
	 * @param string InsuranceAmount
	 * @param string Subject
	 * @param string StoreID
	 * @param string TerminalID
	 * @param PayPalTypeSellerDetailsType SellerDetails
	 * @param string PaymentRequestID
	 * @param PayPalTypeFMFDetailsType FMFDetails
	 * @param PayPalTypeEnhancedPaymentInfoType EnhancedPaymentInfo
	 * @param PayPalTypeErrorType PaymentError
	 * @param PayPalTypeInstrumentDetailsType InstrumentDetails
	 * @param PayPalTypeOfferDetailsType OfferDetails
	 * @return PayPalTypePaymentInfoType
	 */
	public function __construct($_TransactionID = null,$_EbayTransactionID = null,$_ParentTransactionID = null,$_ReceiptID = null,$_TransactionType = null,$_PaymentType = null,$_RefundSourceCodeType = null,$_ExpectedeCheckClearDate = null,$_PaymentDate = null,$_GrossAmount = null,$_FeeAmount = null,$_SettleAmount = null,$_TaxAmount = null,$_ExchangeRate = null,$_PaymentStatus = null,$_PendingReason = null,$_ReasonCode = null,$_HoldDecision = null,$_ShippingMethod = null,$_ProtectionEligibility = null,$_ProtectionEligibilityType = null,$_ShipAmount = null,$_ShipHandleAmount = null,$_ShipDiscount = null,$_InsuranceAmount = null,$_Subject = null,$_StoreID = null,$_TerminalID = null,$_SellerDetails = null,$_PaymentRequestID = null,$_FMFDetails = null,$_EnhancedPaymentInfo = null,$_PaymentError = null,$_InstrumentDetails = null,$_OfferDetails = null)
	{
		parent::__construct(array('TransactionID'=>$_TransactionID,'EbayTransactionID'=>$_EbayTransactionID,'ParentTransactionID'=>$_ParentTransactionID,'ReceiptID'=>$_ReceiptID,'TransactionType'=>$_TransactionType,'PaymentType'=>$_PaymentType,'RefundSourceCodeType'=>$_RefundSourceCodeType,'ExpectedeCheckClearDate'=>$_ExpectedeCheckClearDate,'PaymentDate'=>$_PaymentDate,'GrossAmount'=>$_GrossAmount,'FeeAmount'=>$_FeeAmount,'SettleAmount'=>$_SettleAmount,'TaxAmount'=>$_TaxAmount,'ExchangeRate'=>$_ExchangeRate,'PaymentStatus'=>$_PaymentStatus,'PendingReason'=>$_PendingReason,'ReasonCode'=>$_ReasonCode,'HoldDecision'=>$_HoldDecision,'ShippingMethod'=>$_ShippingMethod,'ProtectionEligibility'=>$_ProtectionEligibility,'ProtectionEligibilityType'=>$_ProtectionEligibilityType,'ShipAmount'=>$_ShipAmount,'ShipHandleAmount'=>$_ShipHandleAmount,'ShipDiscount'=>$_ShipDiscount,'InsuranceAmount'=>$_InsuranceAmount,'Subject'=>$_Subject,'StoreID'=>$_StoreID,'TerminalID'=>$_TerminalID,'SellerDetails'=>$_SellerDetails,'PaymentRequestID'=>$_PaymentRequestID,'FMFDetails'=>$_FMFDetails,'EnhancedPaymentInfo'=>$_EnhancedPaymentInfo,'PaymentError'=>$_PaymentError,'InstrumentDetails'=>$_InstrumentDetails,'OfferDetails'=>$_OfferDetails));
	}
	/**
	 * Set TransactionID
	 * @param string TransactionID
	 * @return string
	 */
	public function setTransactionID($_TransactionID)
	{
		return ($this->TransactionID = $_TransactionID);
	}
	/**
	 * Get TransactionID
	 * @return string
	 */
	public function getTransactionID()
	{
		return $this->TransactionID;
	}
	/**
	 * Set EbayTransactionID
	 * @param string EbayTransactionID
	 * @return string
	 */
	public function setEbayTransactionID($_EbayTransactionID)
	{
		return ($this->EbayTransactionID = $_EbayTransactionID);
	}
	/**
	 * Get EbayTransactionID
	 * @return string
	 */
	public function getEbayTransactionID()
	{
		return $this->EbayTransactionID;
	}
	/**
	 * Set ParentTransactionID
	 * @param TransactionId ParentTransactionID
	 * @return TransactionId
	 */
	public function setParentTransactionID($_ParentTransactionID)
	{
		return ($this->ParentTransactionID = PayPalTypeTransactionId::valueIsValid($_ParentTransactionID)?$_ParentTransactionID:null);
	}
	/**
	 * Get ParentTransactionID
	 * @return PayPalTypeTransactionId
	 */
	public function getParentTransactionID()
	{
		return $this->ParentTransactionID;
	}
	/**
	 * Set ReceiptID
	 * @param string ReceiptID
	 * @return string
	 */
	public function setReceiptID($_ReceiptID)
	{
		return ($this->ReceiptID = $_ReceiptID);
	}
	/**
	 * Get ReceiptID
	 * @return string
	 */
	public function getReceiptID()
	{
		return $this->ReceiptID;
	}
	/**
	 * Set TransactionType
	 * @param PaymentTransactionCodeType TransactionType
	 * @return PaymentTransactionCodeType
	 */
	public function setTransactionType($_TransactionType)
	{
		return ($this->TransactionType = PayPalTypePaymentTransactionCodeType::valueIsValid($_TransactionType)?$_TransactionType:null);
	}
	/**
	 * Get TransactionType
	 * @return PayPalTypePaymentTransactionCodeType
	 */
	public function getTransactionType()
	{
		return $this->TransactionType;
	}
	/**
	 * Set PaymentType
	 * @param PaymentCodeType PaymentType
	 * @return PaymentCodeType
	 */
	public function setPaymentType($_PaymentType)
	{
		return ($this->PaymentType = PayPalTypePaymentCodeType::valueIsValid($_PaymentType)?$_PaymentType:null);
	}
	/**
	 * Get PaymentType
	 * @return PayPalTypePaymentCodeType
	 */
	public function getPaymentType()
	{
		return $this->PaymentType;
	}
	/**
	 * Set RefundSourceCodeType
	 * @param RefundSourceCodeType RefundSourceCodeType
	 * @return RefundSourceCodeType
	 */
	public function setRefundSourceCodeType($_RefundSourceCodeType)
	{
		return ($this->RefundSourceCodeType = PayPalTypeRefundSourceCodeType::valueIsValid($_RefundSourceCodeType)?$_RefundSourceCodeType:null);
	}
	/**
	 * Get RefundSourceCodeType
	 * @return PayPalTypeRefundSourceCodeType
	 */
	public function getRefundSourceCodeType()
	{
		return $this->RefundSourceCodeType;
	}
	/**
	 * Set ExpectedeCheckClearDate
	 * @param dateTime ExpectedeCheckClearDate
	 * @return dateTime
	 */
	public function setExpectedeCheckClearDate($_ExpectedeCheckClearDate)
	{
		return ($this->ExpectedeCheckClearDate = $_ExpectedeCheckClearDate);
	}
	/**
	 * Get ExpectedeCheckClearDate
	 * @return dateTime
	 */
	public function getExpectedeCheckClearDate()
	{
		return $this->ExpectedeCheckClearDate;
	}
	/**
	 * Set PaymentDate
	 * @param dateTime PaymentDate
	 * @return dateTime
	 */
	public function setPaymentDate($_PaymentDate)
	{
		return ($this->PaymentDate = $_PaymentDate);
	}
	/**
	 * Get PaymentDate
	 * @return dateTime
	 */
	public function getPaymentDate()
	{
		return $this->PaymentDate;
	}
	/**
	 * Set GrossAmount
	 * @param BasicAmountType GrossAmount
	 * @return BasicAmountType
	 */
	public function setGrossAmount($_GrossAmount)
	{
		return ($this->GrossAmount = $_GrossAmount);
	}
	/**
	 * Get GrossAmount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getGrossAmount()
	{
		return $this->GrossAmount;
	}
	/**
	 * Set FeeAmount
	 * @param BasicAmountType FeeAmount
	 * @return BasicAmountType
	 */
	public function setFeeAmount($_FeeAmount)
	{
		return ($this->FeeAmount = $_FeeAmount);
	}
	/**
	 * Get FeeAmount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getFeeAmount()
	{
		return $this->FeeAmount;
	}
	/**
	 * Set SettleAmount
	 * @param BasicAmountType SettleAmount
	 * @return BasicAmountType
	 */
	public function setSettleAmount($_SettleAmount)
	{
		return ($this->SettleAmount = $_SettleAmount);
	}
	/**
	 * Get SettleAmount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getSettleAmount()
	{
		return $this->SettleAmount;
	}
	/**
	 * Set TaxAmount
	 * @param BasicAmountType TaxAmount
	 * @return BasicAmountType
	 */
	public function setTaxAmount($_TaxAmount)
	{
		return ($this->TaxAmount = $_TaxAmount);
	}
	/**
	 * Get TaxAmount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getTaxAmount()
	{
		return $this->TaxAmount;
	}
	/**
	 * Set ExchangeRate
	 * @param string ExchangeRate
	 * @return string
	 */
	public function setExchangeRate($_ExchangeRate)
	{
		return ($this->ExchangeRate = $_ExchangeRate);
	}
	/**
	 * Get ExchangeRate
	 * @return string
	 */
	public function getExchangeRate()
	{
		return $this->ExchangeRate;
	}
	/**
	 * Set PaymentStatus
	 * @param PaymentStatusCodeType PaymentStatus
	 * @return PaymentStatusCodeType
	 */
	public function setPaymentStatus($_PaymentStatus)
	{
		return ($this->PaymentStatus = PayPalTypePaymentStatusCodeType::valueIsValid($_PaymentStatus)?$_PaymentStatus:null);
	}
	/**
	 * Get PaymentStatus
	 * @return PayPalTypePaymentStatusCodeType
	 */
	public function getPaymentStatus()
	{
		return $this->PaymentStatus;
	}
	/**
	 * Set PendingReason
	 * @param PendingStatusCodeType PendingReason
	 * @return PendingStatusCodeType
	 */
	public function setPendingReason($_PendingReason)
	{
		return ($this->PendingReason = PayPalTypePendingStatusCodeType::valueIsValid($_PendingReason)?$_PendingReason:null);
	}
	/**
	 * Get PendingReason
	 * @return PayPalTypePendingStatusCodeType
	 */
	public function getPendingReason()
	{
		return $this->PendingReason;
	}
	/**
	 * Set ReasonCode
	 * @param ReversalReasonCodeType ReasonCode
	 * @return ReversalReasonCodeType
	 */
	public function setReasonCode($_ReasonCode)
	{
		return ($this->ReasonCode = PayPalTypeReversalReasonCodeType::valueIsValid($_ReasonCode)?$_ReasonCode:null);
	}
	/**
	 * Get ReasonCode
	 * @return PayPalTypeReversalReasonCodeType
	 */
	public function getReasonCode()
	{
		return $this->ReasonCode;
	}
	/**
	 * Set HoldDecision
	 * @param string HoldDecision
	 * @return string
	 */
	public function setHoldDecision($_HoldDecision)
	{
		return ($this->HoldDecision = $_HoldDecision);
	}
	/**
	 * Get HoldDecision
	 * @return string
	 */
	public function getHoldDecision()
	{
		return $this->HoldDecision;
	}
	/**
	 * Set ShippingMethod
	 * @param string ShippingMethod
	 * @return string
	 */
	public function setShippingMethod($_ShippingMethod)
	{
		return ($this->ShippingMethod = $_ShippingMethod);
	}
	/**
	 * Get ShippingMethod
	 * @return string
	 */
	public function getShippingMethod()
	{
		return $this->ShippingMethod;
	}
	/**
	 * Set ProtectionEligibility
	 * @param string ProtectionEligibility
	 * @return string
	 */
	public function setProtectionEligibility($_ProtectionEligibility)
	{
		return ($this->ProtectionEligibility = $_ProtectionEligibility);
	}
	/**
	 * Get ProtectionEligibility
	 * @return string
	 */
	public function getProtectionEligibility()
	{
		return $this->ProtectionEligibility;
	}
	/**
	 * Set ProtectionEligibilityType
	 * @param string ProtectionEligibilityType
	 * @return string
	 */
	public function setProtectionEligibilityType($_ProtectionEligibilityType)
	{
		return ($this->ProtectionEligibilityType = $_ProtectionEligibilityType);
	}
	/**
	 * Get ProtectionEligibilityType
	 * @return string
	 */
	public function getProtectionEligibilityType()
	{
		return $this->ProtectionEligibilityType;
	}
	/**
	 * Set ShipAmount
	 * @param string ShipAmount
	 * @return string
	 */
	public function setShipAmount($_ShipAmount)
	{
		return ($this->ShipAmount = $_ShipAmount);
	}
	/**
	 * Get ShipAmount
	 * @return string
	 */
	public function getShipAmount()
	{
		return $this->ShipAmount;
	}
	/**
	 * Set ShipHandleAmount
	 * @param string ShipHandleAmount
	 * @return string
	 */
	public function setShipHandleAmount($_ShipHandleAmount)
	{
		return ($this->ShipHandleAmount = $_ShipHandleAmount);
	}
	/**
	 * Get ShipHandleAmount
	 * @return string
	 */
	public function getShipHandleAmount()
	{
		return $this->ShipHandleAmount;
	}
	/**
	 * Set ShipDiscount
	 * @param string ShipDiscount
	 * @return string
	 */
	public function setShipDiscount($_ShipDiscount)
	{
		return ($this->ShipDiscount = $_ShipDiscount);
	}
	/**
	 * Get ShipDiscount
	 * @return string
	 */
	public function getShipDiscount()
	{
		return $this->ShipDiscount;
	}
	/**
	 * Set InsuranceAmount
	 * @param string InsuranceAmount
	 * @return string
	 */
	public function setInsuranceAmount($_InsuranceAmount)
	{
		return ($this->InsuranceAmount = $_InsuranceAmount);
	}
	/**
	 * Get InsuranceAmount
	 * @return string
	 */
	public function getInsuranceAmount()
	{
		return $this->InsuranceAmount;
	}
	/**
	 * Set Subject
	 * @param string Subject
	 * @return string
	 */
	public function setSubject($_Subject)
	{
		return ($this->Subject = $_Subject);
	}
	/**
	 * Get Subject
	 * @return string
	 */
	public function getSubject()
	{
		return $this->Subject;
	}
	/**
	 * Set StoreID
	 * @param string StoreID
	 * @return string
	 */
	public function setStoreID($_StoreID)
	{
		return ($this->StoreID = $_StoreID);
	}
	/**
	 * Get StoreID
	 * @return string
	 */
	public function getStoreID()
	{
		return $this->StoreID;
	}
	/**
	 * Set TerminalID
	 * @param string TerminalID
	 * @return string
	 */
	public function setTerminalID($_TerminalID)
	{
		return ($this->TerminalID = $_TerminalID);
	}
	/**
	 * Get TerminalID
	 * @return string
	 */
	public function getTerminalID()
	{
		return $this->TerminalID;
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
	 * Set FMFDetails
	 * @param FMFDetailsType FMFDetails
	 * @return FMFDetailsType
	 */
	public function setFMFDetails($_FMFDetails)
	{
		return ($this->FMFDetails = $_FMFDetails);
	}
	/**
	 * Get FMFDetails
	 * @return PayPalTypeFMFDetailsType
	 */
	public function getFMFDetails()
	{
		return $this->FMFDetails;
	}
	/**
	 * Set EnhancedPaymentInfo
	 * @param EnhancedPaymentInfoType EnhancedPaymentInfo
	 * @return EnhancedPaymentInfoType
	 */
	public function setEnhancedPaymentInfo($_EnhancedPaymentInfo)
	{
		return ($this->EnhancedPaymentInfo = $_EnhancedPaymentInfo);
	}
	/**
	 * Get EnhancedPaymentInfo
	 * @return PayPalTypeEnhancedPaymentInfoType
	 */
	public function getEnhancedPaymentInfo()
	{
		return $this->EnhancedPaymentInfo;
	}
	/**
	 * Set PaymentError
	 * @param ErrorType PaymentError
	 * @return ErrorType
	 */
	public function setPaymentError($_PaymentError)
	{
		return ($this->PaymentError = $_PaymentError);
	}
	/**
	 * Get PaymentError
	 * @return PayPalTypeErrorType
	 */
	public function getPaymentError()
	{
		return $this->PaymentError;
	}
	/**
	 * Set InstrumentDetails
	 * @param InstrumentDetailsType InstrumentDetails
	 * @return InstrumentDetailsType
	 */
	public function setInstrumentDetails($_InstrumentDetails)
	{
		return ($this->InstrumentDetails = $_InstrumentDetails);
	}
	/**
	 * Get InstrumentDetails
	 * @return PayPalTypeInstrumentDetailsType
	 */
	public function getInstrumentDetails()
	{
		return $this->InstrumentDetails;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>