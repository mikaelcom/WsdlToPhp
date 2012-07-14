<?php
/**
 * Class file for PayPalTypePaymentItemInfoType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypePaymentItemInfoType
 * Documentation : PaymentItemInfoType Information about a PayPal item.
 * @date 14/07/2012
 */
class PayPalTypePaymentItemInfoType extends PayPalWsdlClass
{
	/**
	 * The InvoiceID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Invoice number you set in the original transaction. Character length and limitations: 127 single-byte alphanumeric characters
	 * @var string
	 */
	public $InvoiceID;
	/**
	 * The Custom
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Custom field you set in the original transaction. Character length and limitations: 127 single-byte alphanumeric characters
	 * @var string
	 */
	public $Custom;
	/**
	 * The Memo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Memo entered by your customer in PayPal Website Payments note field. Character length and limitations: 255 single-byte alphanumeric characters
	 * @var string
	 */
	public $Memo;
	/**
	 * The SalesTax
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Amount of tax charged on transaction
	 * @var string
	 */
	public $SalesTax;
	/**
	 * The PaymentItem
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Details about the indivudal purchased item
	 * @var PayPalTypePaymentItemType
	 */
	public $PaymentItem;
	/**
	 * The Subscription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Information about the transaction if it was created via PayPal Subcriptions
	 * @var PayPalTypeSubscriptionInfoType
	 */
	public $Subscription;
	/**
	 * The Auction
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Information about the transaction if it was created via an auction
	 * @var PayPalTypeAuctionInfoType
	 */
	public $Auction;
	/**
	 * Constructor
	 * @param string InvoiceID
	 * @param string Custom
	 * @param string Memo
	 * @param string SalesTax
	 * @param PayPalTypePaymentItemType PaymentItem
	 * @param PayPalTypeSubscriptionInfoType Subscription
	 * @param PayPalTypeAuctionInfoType Auction
	 * @return PayPalTypePaymentItemInfoType
	 */
	public function __construct($_InvoiceID = null,$_Custom = null,$_Memo = null,$_SalesTax = null,$_PaymentItem = null,$_Subscription = null,$_Auction = null)
	{
		parent::__construct(array('InvoiceID'=>$_InvoiceID,'Custom'=>$_Custom,'Memo'=>$_Memo,'SalesTax'=>$_SalesTax,'PaymentItem'=>$_PaymentItem,'Subscription'=>$_Subscription,'Auction'=>$_Auction));
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
	 * Set SalesTax
	 * @param string SalesTax
	 * @return string
	 */
	public function setSalesTax($_SalesTax)
	{
		return ($this->SalesTax = $_SalesTax);
	}
	/**
	 * Get SalesTax
	 * @return string
	 */
	public function getSalesTax()
	{
		return $this->SalesTax;
	}
	/**
	 * Set PaymentItem
	 * @param PaymentItemType PaymentItem
	 * @return PaymentItemType
	 */
	public function setPaymentItem($_PaymentItem)
	{
		return ($this->PaymentItem = $_PaymentItem);
	}
	/**
	 * Get PaymentItem
	 * @return PayPalTypePaymentItemType
	 */
	public function getPaymentItem()
	{
		return $this->PaymentItem;
	}
	/**
	 * Set Subscription
	 * @param SubscriptionInfoType Subscription
	 * @return SubscriptionInfoType
	 */
	public function setSubscription($_Subscription)
	{
		return ($this->Subscription = $_Subscription);
	}
	/**
	 * Get Subscription
	 * @return PayPalTypeSubscriptionInfoType
	 */
	public function getSubscription()
	{
		return $this->Subscription;
	}
	/**
	 * Set Auction
	 * @param AuctionInfoType Auction
	 * @return AuctionInfoType
	 */
	public function setAuction($_Auction)
	{
		return ($this->Auction = $_Auction);
	}
	/**
	 * Get Auction
	 * @return PayPalTypeAuctionInfoType
	 */
	public function getAuction()
	{
		return $this->Auction;
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