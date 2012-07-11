<?php
/**
 * Class file for EbayTradingTypeAccountEntryType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAccountEntryType
 * Documentation : Contains the data for a single account detail entry. Each detail entry is a transaction posted to the account and may be: a credit, a debit, or an administrative action (such as an update putting a credit card on file for the account). You can uniquely identify the entries that the <b>GetAccount</b> call returns within the <b>AccountEntries</b> tag. Specifically, the following fields, returned within the <b>AccountEntries</b> tag, can be used in combination as a unique key: AccountEntry.Date, AccountEntry.AccountDetailsEntryType, AccountEntry.ItemID, and AccountEntry.RefNumber.
 * @date 04/07/2012
 */
class EbayTradingTypeAccountEntryType extends EbayTradingWsdlClass
{
	/**
	 * The AccountDetailsEntryType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the type of transaction or reason for the transaction. For example, a value of <b>FeeGallery</b> indicates a debit for listing an item in the Gallery. Possible values are enumerated in the <b>AccountDetailEntryCodeType</b> code list.
	 * @var EbayTradingTypeAccountDetailEntryCodeType
	 */
	public $AccountDetailsEntryType;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A description of the monetary transaction or administrative action applied to an eBay account.
	 * @var string
	 */
	public $Description;
	/**
	 * The Balance
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Balance after the account entry's credit or debit amount has been applied. Can be 0.00. The value is positive for debits and negative for credits.
	 * @var EbayTradingTypeAmountType
	 */
	public $Balance;
	/**
	 * The Date
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Date entry was posted to the account, in GMT. (Also see the Data Types appendix for more information on how GMT dates are handled in SOAP.)
	 * @var dateTime
	 */
	public $Date;
	/**
	 * The GrossDetailAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Gross fees that are assessed by eBay (net fees plus VAT, if any). Returned even if VAT does not apply. The value is positive for debits and negative for credits.
	 * @var EbayTradingTypeAmountType
	 */
	public $GrossDetailAmount;
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If the account detail entry is associated with an item listing, this field shows the eBay <b>ItemID</b> value. Otherwise, 0 is returned in this field.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The Memo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Memo line for the account entry. It can be an empty string.
	 * @var string
	 */
	public $Memo;
	/**
	 * The ConversionRate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The rate used for the currency conversion for a transaction.
	 * @var EbayTradingTypeAmountType
	 */
	public $ConversionRate;
	/**
	 * The NetDetailAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Net fees that are assessed by eBay, excluding additional surchargesand VAT (if any). Returned even if VAT does not apply. The value is positive for debits (user pays eBay) and negative for credits (eBay pays user).
	 * @var EbayTradingTypeAmountType
	 */
	public $NetDetailAmount;
	/**
	 * The RefNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : eBay reference number for the account entry. May return no value for some account transactions, such as an administrative action like placing the user's credit card on file. You can uniquely identify the entries that the <b>GetAccount</b> call returns within the <b>AccountEntries</b> tag. Specifically, the following fields, returned within the <b>AccountEntries</b> tag, can be used in combination as a unique key: AccountEntry.Date, AccountEntry.AccountDetailsEntryType, AccountEntry.ItemID, and AccountEntry.RefNumber.
	 * @var string
	 */
	public $RefNumber;
	/**
	 * The VATPercent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : VAT rate for the item. When the VATPercent is specified, the item's VAT information appears on the item's listing page. In addition, the seller can choose to print an invoice that includes the item's net price, VAT percent, VAT amount, and total price. Since VAT rates vary depending on the item and on the user's country of residence, a seller is responsible for entering the correct VAT rate; it is not calculated by eBay. To specify a <b>VATPercent</b>, a seller must have a VAT-ID registered with eBay and must be listing the item on a VAT-enabled site. Max precision 3 decimal places. Max length 5 characters. Note: The View Item page displays the precision to 2 decimal places with no trailing zeros. However, the full value you send in is stored. Returned for all users, not just VAT users, with GetAccountResponse.
	 * @var decimal
	 */
	public $VATPercent;
	/**
	 * The Title
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Title of the entry, or explanation of why the debit or credit was applied.
	 * @var string
	 */
	public $Title;
	/**
	 * The OrderLineItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <b>OrderLineItemID</b> is a unique identifier for an eBay order line item and is based upon the concatenation of <b>ItemID</b> and <b>TransactionID</b>, with a hyphen in between these two IDs. If the account detail entry is associated with an order line item, this field shows the <b>OrderLineItemID</b> value. Otherwise, 0 is returned in this field.
	 * @var string
	 */
	public $OrderLineItemID;
	/**
	 * The TransactionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The unique identifier of an order line item (transaction). If the account detail entry is associated with an order line item, this field shows the eBay <b>TransactionID</b> value. Otherwise, 0 is returned in this field.
	 * @var string
	 */
	public $TransactionID;
	/**
	 * The ReceivedTopRatedDiscount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This boolean is returned as 'true' if the seller received a top-rated seller 20 percent discount on the final value fee for the order line item.
	 * @var boolean
	 */
	public $ReceivedTopRatedDiscount;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeAccountDetailEntryCodeType AccountDetailsEntryType
	 * @param string Description
	 * @param EbayTradingTypeAmountType Balance
	 * @param dateTime Date
	 * @param EbayTradingTypeAmountType GrossDetailAmount
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param string Memo
	 * @param EbayTradingTypeAmountType ConversionRate
	 * @param EbayTradingTypeAmountType NetDetailAmount
	 * @param string RefNumber
	 * @param decimal VATPercent
	 * @param string Title
	 * @param string OrderLineItemID
	 * @param string TransactionID
	 * @param boolean ReceivedTopRatedDiscount
	 * @param DOMDocument any
	 * @return EbayTradingTypeAccountEntryType
	 */
	public function __construct($_AccountDetailsEntryType = null,$_Description = null,$_Balance = null,$_Date = null,$_GrossDetailAmount = null,$_ItemID = null,$_Memo = null,$_ConversionRate = null,$_NetDetailAmount = null,$_RefNumber = null,$_VATPercent = null,$_Title = null,$_OrderLineItemID = null,$_TransactionID = null,$_ReceivedTopRatedDiscount = null,$_any = null)
	{
		parent::__construct(array('AccountDetailsEntryType'=>$_AccountDetailsEntryType,'Description'=>$_Description,'Balance'=>$_Balance,'Date'=>$_Date,'GrossDetailAmount'=>$_GrossDetailAmount,'ItemID'=>$_ItemID,'Memo'=>$_Memo,'ConversionRate'=>$_ConversionRate,'NetDetailAmount'=>$_NetDetailAmount,'RefNumber'=>$_RefNumber,'VATPercent'=>$_VATPercent,'Title'=>$_Title,'OrderLineItemID'=>$_OrderLineItemID,'TransactionID'=>$_TransactionID,'ReceivedTopRatedDiscount'=>$_ReceivedTopRatedDiscount,'any'=>$_any));
	}
	/**
	 * Set AccountDetailsEntryType
	 * @param AccountDetailEntryCodeType AccountDetailsEntryType
	 * @return AccountDetailEntryCodeType
	 */
	public function setAccountDetailsEntryType($_AccountDetailsEntryType)
	{
		return ($this->AccountDetailsEntryType = EbayTradingTypeAccountDetailEntryCodeType::valueIsValid($_AccountDetailsEntryType)?$_AccountDetailsEntryType:null);
	}
	/**
	 * Get AccountDetailsEntryType
	 * @return EbayTradingTypeAccountDetailEntryCodeType
	 */
	public function getAccountDetailsEntryType()
	{
		return $this->AccountDetailsEntryType;
	}
	/**
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set Balance
	 * @param AmountType Balance
	 * @return AmountType
	 */
	public function setBalance($_Balance)
	{
		return ($this->Balance = $_Balance);
	}
	/**
	 * Get Balance
	 * @return EbayTradingTypeAmountType
	 */
	public function getBalance()
	{
		return $this->Balance;
	}
	/**
	 * Set Date
	 * @param dateTime Date
	 * @return dateTime
	 */
	public function setDate($_Date)
	{
		return ($this->Date = $_Date);
	}
	/**
	 * Get Date
	 * @return dateTime
	 */
	public function getDate()
	{
		return $this->Date;
	}
	/**
	 * Set GrossDetailAmount
	 * @param AmountType GrossDetailAmount
	 * @return AmountType
	 */
	public function setGrossDetailAmount($_GrossDetailAmount)
	{
		return ($this->GrossDetailAmount = $_GrossDetailAmount);
	}
	/**
	 * Get GrossDetailAmount
	 * @return EbayTradingTypeAmountType
	 */
	public function getGrossDetailAmount()
	{
		return $this->GrossDetailAmount;
	}
	/**
	 * Set ItemID
	 * @param ItemIDType ItemID
	 * @return ItemIDType
	 */
	public function setItemID($_ItemID)
	{
		return ($this->ItemID = EbayTradingTypeItemIDType::valueIsValid($_ItemID)?$_ItemID:null);
	}
	/**
	 * Get ItemID
	 * @return EbayTradingTypeItemIDType
	 */
	public function getItemID()
	{
		return $this->ItemID;
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
	 * Set ConversionRate
	 * @param AmountType ConversionRate
	 * @return AmountType
	 */
	public function setConversionRate($_ConversionRate)
	{
		return ($this->ConversionRate = $_ConversionRate);
	}
	/**
	 * Get ConversionRate
	 * @return EbayTradingTypeAmountType
	 */
	public function getConversionRate()
	{
		return $this->ConversionRate;
	}
	/**
	 * Set NetDetailAmount
	 * @param AmountType NetDetailAmount
	 * @return AmountType
	 */
	public function setNetDetailAmount($_NetDetailAmount)
	{
		return ($this->NetDetailAmount = $_NetDetailAmount);
	}
	/**
	 * Get NetDetailAmount
	 * @return EbayTradingTypeAmountType
	 */
	public function getNetDetailAmount()
	{
		return $this->NetDetailAmount;
	}
	/**
	 * Set RefNumber
	 * @param string RefNumber
	 * @return string
	 */
	public function setRefNumber($_RefNumber)
	{
		return ($this->RefNumber = $_RefNumber);
	}
	/**
	 * Get RefNumber
	 * @return string
	 */
	public function getRefNumber()
	{
		return $this->RefNumber;
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
	 * Set Title
	 * @param string Title
	 * @return string
	 */
	public function setTitle($_Title)
	{
		return ($this->Title = $_Title);
	}
	/**
	 * Get Title
	 * @return string
	 */
	public function getTitle()
	{
		return $this->Title;
	}
	/**
	 * Set OrderLineItemID
	 * @param string OrderLineItemID
	 * @return string
	 */
	public function setOrderLineItemID($_OrderLineItemID)
	{
		return ($this->OrderLineItemID = $_OrderLineItemID);
	}
	/**
	 * Get OrderLineItemID
	 * @return string
	 */
	public function getOrderLineItemID()
	{
		return $this->OrderLineItemID;
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
	 * Set ReceivedTopRatedDiscount
	 * @param boolean ReceivedTopRatedDiscount
	 * @return boolean
	 */
	public function setReceivedTopRatedDiscount($_ReceivedTopRatedDiscount)
	{
		return ($this->ReceivedTopRatedDiscount = $_ReceivedTopRatedDiscount);
	}
	/**
	 * Get ReceivedTopRatedDiscount
	 * @return boolean
	 */
	public function getReceivedTopRatedDiscount()
	{
		return $this->ReceivedTopRatedDiscount;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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