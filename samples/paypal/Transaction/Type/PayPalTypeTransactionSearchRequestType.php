<?php
/**
 * Class file for PayPalTypeTransactionSearchRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeTransactionSearchRequestType
 * @date 14/07/2012
 */
class PayPalTypeTransactionSearchRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The StartDate
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : The earliest transaction date at which to start the search. No wildcards are allowed. Required
	 * @var dateTime
	 */
	public $StartDate;
	/**
	 * The EndDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The latest transaction date to be included in the search Optional
	 * @var dateTime
	 */
	public $EndDate;
	/**
	 * The Payer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Search by the buyer's email address OptionalCharacter length and limitations: 127 single-byte alphanumeric characters
	 * @var PayPalTypeEmailAddressType
	 */
	public $Payer;
	/**
	 * The Receiver
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Search by the receiver's email address. If the merchant account has only one email, this is the primary email. Can also be a non-primary email.Optional
	 * @var PayPalTypeEmailAddressType
	 */
	public $Receiver;
	/**
	 * The ReceiptID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Search by the PayPal Account Optional receipt IDOptional
	 * @var string
	 */
	public $ReceiptID;
	/**
	 * The TransactionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Search by the transaction ID. OptionalThe returned results are from the merchant's transaction records. Character length and limitations: 19 single-byte characters maximum
	 * @var PayPalTypeTransactionId
	 */
	public $TransactionID;
	/**
	 * The ProfileID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Search by Recurring Payment Profile id. The ProfileID is returned as part of the CreateRecurringPaymentsProfile API response. Optional
	 * @var string
	 */
	public $ProfileID;
	/**
	 * The PayerName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Search by the buyer's name OptionalSalutation: 20 single-byte character limit.FirstName: 25 single-byte character limit.MiddleName: 25 single-byte character limit.LastName: 25 single-byte character limit.Suffix: 12 single-byte character limit.
	 * @var PayPalTypePersonNameType
	 */
	public $PayerName;
	/**
	 * The AuctionItemNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Search by item number of the purchased goods.OptionalTo search for purchased items not related to auctions, set the AuctionItemNumber element to the value of the HTML item_number variable set in the shopping cart for the original transaction.
	 * @var string
	 */
	public $AuctionItemNumber;
	/**
	 * The InvoiceID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Search by invoice identification key, as set by you for the original transaction. InvoiceID searches the invoice records for items sold by the merchant, not the items purchased. OptionalThe value for InvoiceID must exactly match an invoice identification number. No wildcards are allowed. Character length and limitations: 127 single-byte characters maximum
	 * @var string
	 */
	public $InvoiceID;
	/**
	 * The CardNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CardNumber;
	/**
	 * The TransactionClass
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Search by classification of transaction. Some kinds of possible classes of transactions are not searchable with TransactionSearchRequest. You cannot search for bank transfer withdrawals, for example. OptionalAll: all transaction classifications.Sent: only payments sent.Received: only payments received.MassPay: only mass payments.MoneyRequest: only money requests.FundsAdded: only funds added to balance.FundsWithdrawn: only funds withdrawn from balance.Referral: only transactions involving referrals.Fee: only transactions involving fees.Subscription: only transactions involving subscriptions.Dividend: only transactions involving dividends.Billpay: only transactions involving BillPay Transactions.Refund: only transactions involving funds.CurrencyConversions: only transactions involving currency conversions.BalanceTransfer: only transactions involving balance transfers.Reversal: only transactions involving BillPay reversals.Shipping: only transactions involving UPS shipping fees.BalanceAffecting: only transactions that affect the account balance.ECheck: only transactions involving eCheck
	 * @var PayPalTypePaymentTransactionClassCodeType
	 */
	public $TransactionClass;
	/**
	 * The Amount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Search by transaction amount OptionalYou must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies.
	 * @var PayPalTypeBasicAmountType
	 */
	public $Amount;
	/**
	 * The CurrencyCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Search by currency codeOptional
	 * @var PayPalTypeCurrencyCodeType
	 */
	public $CurrencyCode;
	/**
	 * The Status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Search by transaction status OptionalPending: The payment is pending. The specific reason the payment is pending is returned by the GetTransactionDetails APIPendingReason element. For more information, see PendingReason.Processing: The payment is being processed.Success: The payment has been completed and the funds have been added successfully to your account balance.Denied: You denied the payment. This happens only if the payment was previously pending.Reversed: A payment was reversed due to a chargeback or other type of reversal. The funds have been removed from your account balance and returned to the buyer.
	 * @var PayPalTypePaymentTransactionStatusCodeType
	 */
	public $Status;
	/**
	 * Constructor
	 * @param dateTime StartDate
	 * @param dateTime EndDate
	 * @param PayPalTypeEmailAddressType Payer
	 * @param PayPalTypeEmailAddressType Receiver
	 * @param string ReceiptID
	 * @param PayPalTypeTransactionId TransactionID
	 * @param string ProfileID
	 * @param PayPalTypePersonNameType PayerName
	 * @param string AuctionItemNumber
	 * @param string InvoiceID
	 * @param string CardNumber
	 * @param PayPalTypePaymentTransactionClassCodeType TransactionClass
	 * @param PayPalTypeBasicAmountType Amount
	 * @param PayPalTypeCurrencyCodeType CurrencyCode
	 * @param PayPalTypePaymentTransactionStatusCodeType Status
	 * @return PayPalTypeTransactionSearchRequestType
	 */
	public function __construct($_StartDate,$_EndDate = null,$_Payer = null,$_Receiver = null,$_ReceiptID = null,$_TransactionID = null,$_ProfileID = null,$_PayerName = null,$_AuctionItemNumber = null,$_InvoiceID = null,$_CardNumber = null,$_TransactionClass = null,$_Amount = null,$_CurrencyCode = null,$_Status = null)
	{
		PayPalWsdlClass::__construct(array('StartDate'=>$_StartDate,'EndDate'=>$_EndDate,'Payer'=>$_Payer,'Receiver'=>$_Receiver,'ReceiptID'=>$_ReceiptID,'TransactionID'=>$_TransactionID,'ProfileID'=>$_ProfileID,'PayerName'=>$_PayerName,'AuctionItemNumber'=>$_AuctionItemNumber,'InvoiceID'=>$_InvoiceID,'CardNumber'=>$_CardNumber,'TransactionClass'=>$_TransactionClass,'Amount'=>$_Amount,'CurrencyCode'=>$_CurrencyCode,'Status'=>$_Status));
	}
	/**
	 * Set StartDate
	 * @param dateTime StartDate
	 * @return dateTime
	 */
	public function setStartDate($_StartDate)
	{
		return ($this->StartDate = $_StartDate);
	}
	/**
	 * Get StartDate
	 * @return dateTime
	 */
	public function getStartDate()
	{
		return $this->StartDate;
	}
	/**
	 * Set EndDate
	 * @param dateTime EndDate
	 * @return dateTime
	 */
	public function setEndDate($_EndDate)
	{
		return ($this->EndDate = $_EndDate);
	}
	/**
	 * Get EndDate
	 * @return dateTime
	 */
	public function getEndDate()
	{
		return $this->EndDate;
	}
	/**
	 * Set Payer
	 * @param EmailAddressType Payer
	 * @return EmailAddressType
	 */
	public function setPayer($_Payer)
	{
		return ($this->Payer = PayPalTypeEmailAddressType::valueIsValid($_Payer)?$_Payer:null);
	}
	/**
	 * Get Payer
	 * @return PayPalTypeEmailAddressType
	 */
	public function getPayer()
	{
		return $this->Payer;
	}
	/**
	 * Set Receiver
	 * @param EmailAddressType Receiver
	 * @return EmailAddressType
	 */
	public function setReceiver($_Receiver)
	{
		return ($this->Receiver = PayPalTypeEmailAddressType::valueIsValid($_Receiver)?$_Receiver:null);
	}
	/**
	 * Get Receiver
	 * @return PayPalTypeEmailAddressType
	 */
	public function getReceiver()
	{
		return $this->Receiver;
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
	 * Set ProfileID
	 * @param string ProfileID
	 * @return string
	 */
	public function setProfileID($_ProfileID)
	{
		return ($this->ProfileID = $_ProfileID);
	}
	/**
	 * Get ProfileID
	 * @return string
	 */
	public function getProfileID()
	{
		return $this->ProfileID;
	}
	/**
	 * Set PayerName
	 * @param PersonNameType PayerName
	 * @return PersonNameType
	 */
	public function setPayerName($_PayerName)
	{
		return ($this->PayerName = $_PayerName);
	}
	/**
	 * Get PayerName
	 * @return PayPalTypePersonNameType
	 */
	public function getPayerName()
	{
		return $this->PayerName;
	}
	/**
	 * Set AuctionItemNumber
	 * @param string AuctionItemNumber
	 * @return string
	 */
	public function setAuctionItemNumber($_AuctionItemNumber)
	{
		return ($this->AuctionItemNumber = $_AuctionItemNumber);
	}
	/**
	 * Get AuctionItemNumber
	 * @return string
	 */
	public function getAuctionItemNumber()
	{
		return $this->AuctionItemNumber;
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
	 * Set CardNumber
	 * @param string CardNumber
	 * @return string
	 */
	public function setCardNumber($_CardNumber)
	{
		return ($this->CardNumber = $_CardNumber);
	}
	/**
	 * Get CardNumber
	 * @return string
	 */
	public function getCardNumber()
	{
		return $this->CardNumber;
	}
	/**
	 * Set TransactionClass
	 * @param PaymentTransactionClassCodeType TransactionClass
	 * @return PaymentTransactionClassCodeType
	 */
	public function setTransactionClass($_TransactionClass)
	{
		return ($this->TransactionClass = PayPalTypePaymentTransactionClassCodeType::valueIsValid($_TransactionClass)?$_TransactionClass:null);
	}
	/**
	 * Get TransactionClass
	 * @return PayPalTypePaymentTransactionClassCodeType
	 */
	public function getTransactionClass()
	{
		return $this->TransactionClass;
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
	 * Set CurrencyCode
	 * @param CurrencyCodeType CurrencyCode
	 * @return CurrencyCodeType
	 */
	public function setCurrencyCode($_CurrencyCode)
	{
		return ($this->CurrencyCode = PayPalTypeCurrencyCodeType::valueIsValid($_CurrencyCode)?$_CurrencyCode:null);
	}
	/**
	 * Get CurrencyCode
	 * @return PayPalTypeCurrencyCodeType
	 */
	public function getCurrencyCode()
	{
		return $this->CurrencyCode;
	}
	/**
	 * Set Status
	 * @param PaymentTransactionStatusCodeType Status
	 * @return PaymentTransactionStatusCodeType
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = PayPalTypePaymentTransactionStatusCodeType::valueIsValid($_Status)?$_Status:null);
	}
	/**
	 * Get Status
	 * @return PayPalTypePaymentTransactionStatusCodeType
	 */
	public function getStatus()
	{
		return $this->Status;
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