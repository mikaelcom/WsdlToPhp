<?php
/**
 * Class file for PayPalTypeTransactionType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeTransactionType
 * Documentation : Contains information about a single transaction. A transaction contains information about the sale of a particular item. The system creates a transaction when a buyer has made a purchase (Fixed Price items) or is the winning bidder (BIN and auction items). A listing can be associated with one or more transactions in these cases: Multi-Item Fixed Price Listings Dutch Auction Listings A listing is associated with a single transaction in these cases: Single-Item Fixed Price Listings Single-Item Auction Listings
 * @date 14/07/2012
 */
class PayPalTypeTransactionType extends PayPalWsdlClass
{
	/**
	 * The AmountPaid
	 * @var PayPalTypeAmountType
	 */
	public $AmountPaid;
	/**
	 * The Buyer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container for buyer data.
	 * @var PayPalTypeUserType
	 */
	public $Buyer;
	/**
	 * The ShippingDetails
	 * @var PayPalTypeShippingDetailsType
	 */
	public $ShippingDetails;
	/**
	 * The ConvertedAmountPaid
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Value returned in the Transaction/AmountPaid element, converted to the currency indicated by SiteCurrency.
	 * @var PayPalTypeAmountType
	 */
	public $ConvertedAmountPaid;
	/**
	 * The ConvertedTransactionPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Value returned in the Transaction/TransactionPrice element, converted to the currency indicated by SiteCurrency.
	 * @var PayPalTypeAmountType
	 */
	public $ConvertedTransactionPrice;
	/**
	 * The CreatedDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : For fixed-price, Stores, and BIN items indicates when the purchase (or BIN) occurred. For all other item types indicates when the transaction was created (the time when checkout was initiated).
	 * @var dateTime
	 */
	public $CreatedDate;
	/**
	 * The DepositType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Deposit type for Motors items. If item is not a Motors item, then returns a DepositType of None. Possible values: None Other Method Fast Deposit
	 * @var PayPalTypeDepositTypeCodeType
	 */
	public $DepositType;
	/**
	 * The Item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Item info associated with the transaction.
	 * @var PayPalTypeItemType
	 */
	public $Item;
	/**
	 * The QuantityPurchased
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the number of individual items the buyer purchased in the transaction.
	 * @var int
	 */
	public $QuantityPurchased;
	/**
	 * The ShippingHandlingTotal
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Shipping cost totals shown to user (for both flat and calculated rates).
	 * @var PayPalTypeAmountType
	 */
	public $ShippingHandlingTotal;
	/**
	 * The Status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container node for transaction status data.
	 * @var PayPalTypeTransactionStatusType
	 */
	public $Status;
	/**
	 * The TransactionID
	 * @var string
	 */
	public $TransactionID;
	/**
	 * The AuthorizationID
	 * @var string
	 */
	public $AuthorizationID;
	/**
	 * The TransactionPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Price of the item, before shipping and sales tax. For Motors, TransactionPrice is the deposit amount.
	 * @var PayPalTypeAmountType
	 */
	public $TransactionPrice;
	/**
	 * The VATPercent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : VAT rate for the item, if the item price includes the VAT rate. Specify the VATPercent if you want include the net price in addition to the gross price in the listing. VAT rates vary depending on the item and on the user's country of residence; therefore a business seller is responsible for entering the correct VAT rate (it will not be calculated by eBay).
	 * @var decimal
	 */
	public $VATPercent;
	/**
	 * Constructor
	 * @param PayPalTypeAmountType AmountPaid
	 * @param PayPalTypeUserType Buyer
	 * @param PayPalTypeShippingDetailsType ShippingDetails
	 * @param PayPalTypeAmountType ConvertedAmountPaid
	 * @param PayPalTypeAmountType ConvertedTransactionPrice
	 * @param dateTime CreatedDate
	 * @param PayPalTypeDepositTypeCodeType DepositType
	 * @param PayPalTypeItemType Item
	 * @param int QuantityPurchased
	 * @param PayPalTypeAmountType ShippingHandlingTotal
	 * @param PayPalTypeTransactionStatusType Status
	 * @param string TransactionID
	 * @param string AuthorizationID
	 * @param PayPalTypeAmountType TransactionPrice
	 * @param decimal VATPercent
	 * @return PayPalTypeTransactionType
	 */
	public function __construct($_AmountPaid = null,$_Buyer = null,$_ShippingDetails = null,$_ConvertedAmountPaid = null,$_ConvertedTransactionPrice = null,$_CreatedDate = null,$_DepositType = null,$_Item = null,$_QuantityPurchased = null,$_ShippingHandlingTotal = null,$_Status = null,$_TransactionID = null,$_AuthorizationID = null,$_TransactionPrice = null,$_VATPercent = null)
	{
		parent::__construct(array('AmountPaid'=>$_AmountPaid,'Buyer'=>$_Buyer,'ShippingDetails'=>$_ShippingDetails,'ConvertedAmountPaid'=>$_ConvertedAmountPaid,'ConvertedTransactionPrice'=>$_ConvertedTransactionPrice,'CreatedDate'=>$_CreatedDate,'DepositType'=>$_DepositType,'Item'=>$_Item,'QuantityPurchased'=>$_QuantityPurchased,'ShippingHandlingTotal'=>$_ShippingHandlingTotal,'Status'=>$_Status,'TransactionID'=>$_TransactionID,'AuthorizationID'=>$_AuthorizationID,'TransactionPrice'=>$_TransactionPrice,'VATPercent'=>$_VATPercent));
	}
	/**
	 * Set AmountPaid
	 * @param AmountType AmountPaid
	 * @return AmountType
	 */
	public function setAmountPaid($_AmountPaid)
	{
		return ($this->AmountPaid = $_AmountPaid);
	}
	/**
	 * Get AmountPaid
	 * @return PayPalTypeAmountType
	 */
	public function getAmountPaid()
	{
		return $this->AmountPaid;
	}
	/**
	 * Set Buyer
	 * @param UserType Buyer
	 * @return UserType
	 */
	public function setBuyer($_Buyer)
	{
		return ($this->Buyer = $_Buyer);
	}
	/**
	 * Get Buyer
	 * @return PayPalTypeUserType
	 */
	public function getBuyer()
	{
		return $this->Buyer;
	}
	/**
	 * Set ShippingDetails
	 * @param ShippingDetailsType ShippingDetails
	 * @return ShippingDetailsType
	 */
	public function setShippingDetails($_ShippingDetails)
	{
		return ($this->ShippingDetails = $_ShippingDetails);
	}
	/**
	 * Get ShippingDetails
	 * @return PayPalTypeShippingDetailsType
	 */
	public function getShippingDetails()
	{
		return $this->ShippingDetails;
	}
	/**
	 * Set ConvertedAmountPaid
	 * @param AmountType ConvertedAmountPaid
	 * @return AmountType
	 */
	public function setConvertedAmountPaid($_ConvertedAmountPaid)
	{
		return ($this->ConvertedAmountPaid = $_ConvertedAmountPaid);
	}
	/**
	 * Get ConvertedAmountPaid
	 * @return PayPalTypeAmountType
	 */
	public function getConvertedAmountPaid()
	{
		return $this->ConvertedAmountPaid;
	}
	/**
	 * Set ConvertedTransactionPrice
	 * @param AmountType ConvertedTransactionPrice
	 * @return AmountType
	 */
	public function setConvertedTransactionPrice($_ConvertedTransactionPrice)
	{
		return ($this->ConvertedTransactionPrice = $_ConvertedTransactionPrice);
	}
	/**
	 * Get ConvertedTransactionPrice
	 * @return PayPalTypeAmountType
	 */
	public function getConvertedTransactionPrice()
	{
		return $this->ConvertedTransactionPrice;
	}
	/**
	 * Set CreatedDate
	 * @param dateTime CreatedDate
	 * @return dateTime
	 */
	public function setCreatedDate($_CreatedDate)
	{
		return ($this->CreatedDate = $_CreatedDate);
	}
	/**
	 * Get CreatedDate
	 * @return dateTime
	 */
	public function getCreatedDate()
	{
		return $this->CreatedDate;
	}
	/**
	 * Set DepositType
	 * @param DepositTypeCodeType DepositType
	 * @return DepositTypeCodeType
	 */
	public function setDepositType($_DepositType)
	{
		return ($this->DepositType = PayPalTypeDepositTypeCodeType::valueIsValid($_DepositType)?$_DepositType:null);
	}
	/**
	 * Get DepositType
	 * @return PayPalTypeDepositTypeCodeType
	 */
	public function getDepositType()
	{
		return $this->DepositType;
	}
	/**
	 * Set Item
	 * @param ItemType Item
	 * @return ItemType
	 */
	public function setItem($_Item)
	{
		return ($this->Item = $_Item);
	}
	/**
	 * Get Item
	 * @return PayPalTypeItemType
	 */
	public function getItem()
	{
		return $this->Item;
	}
	/**
	 * Set QuantityPurchased
	 * @param int QuantityPurchased
	 * @return int
	 */
	public function setQuantityPurchased($_QuantityPurchased)
	{
		return ($this->QuantityPurchased = $_QuantityPurchased);
	}
	/**
	 * Get QuantityPurchased
	 * @return int
	 */
	public function getQuantityPurchased()
	{
		return $this->QuantityPurchased;
	}
	/**
	 * Set ShippingHandlingTotal
	 * @param AmountType ShippingHandlingTotal
	 * @return AmountType
	 */
	public function setShippingHandlingTotal($_ShippingHandlingTotal)
	{
		return ($this->ShippingHandlingTotal = $_ShippingHandlingTotal);
	}
	/**
	 * Get ShippingHandlingTotal
	 * @return PayPalTypeAmountType
	 */
	public function getShippingHandlingTotal()
	{
		return $this->ShippingHandlingTotal;
	}
	/**
	 * Set Status
	 * @param TransactionStatusType Status
	 * @return TransactionStatusType
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = $_Status);
	}
	/**
	 * Get Status
	 * @return PayPalTypeTransactionStatusType
	 */
	public function getStatus()
	{
		return $this->Status;
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
	 * Set AuthorizationID
	 * @param string AuthorizationID
	 * @return string
	 */
	public function setAuthorizationID($_AuthorizationID)
	{
		return ($this->AuthorizationID = $_AuthorizationID);
	}
	/**
	 * Get AuthorizationID
	 * @return string
	 */
	public function getAuthorizationID()
	{
		return $this->AuthorizationID;
	}
	/**
	 * Set TransactionPrice
	 * @param AmountType TransactionPrice
	 * @return AmountType
	 */
	public function setTransactionPrice($_TransactionPrice)
	{
		return ($this->TransactionPrice = $_TransactionPrice);
	}
	/**
	 * Get TransactionPrice
	 * @return PayPalTypeAmountType
	 */
	public function getTransactionPrice()
	{
		return $this->TransactionPrice;
	}
	/**
	 * Set VATPercent
	 * @param decimal VATPercent
	 * @return decimal
	 */
	public function setVATPercent($_VATPercent)
	{
		return ($this->VATPercent = $_VATPercent);
	}
	/**
	 * Get VATPercent
	 * @return decimal
	 */
	public function getVATPercent()
	{
		return $this->VATPercent;
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