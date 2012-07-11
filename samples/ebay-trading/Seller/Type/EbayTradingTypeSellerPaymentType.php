<?php
/**
 * Class file for EbayTradingTypeSellerPaymentType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellerPaymentType
 * Documentation : A payment between Half.com and a seller. The financial value of a payment is typically based on an amount that a buyer paid to Half.com for one order line item, plus the buyer's shipping cost, minus Half.com's commission.
 * @date 04/07/2012
 */
class EbayTradingTypeSellerPaymentType extends EbayTradingWsdlClass
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for the Half.com item listing.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The TransactionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for a Half.com order line item (transaction). An order line item is created once there is a commitment from a buyer to purchase an item. Along with its corresponding <b>ItemID</b>, a <b>TransactionID</b> is used and referenced during an order checkout flow and after checkout has been completed.
	 * @var string
	 */
	public $TransactionID;
	/**
	 * The OrderID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A unique identifier that identifies a single line item or multiple line item (Combined Payment) Half.com order. <br><br> For a single line item order, the <b>OrderID</b> value is identical to the <b>OrderLineItemID</b> value that is generated upon creation of the order line item. For a Combined Payment order, the <b>OrderID</b> value is created by eBay when the buyer or seller (sharing multiple, common order line items) combines multiple order line items into a Combined Payment order through the Half.com site.
	 * @var EbayTradingTypeOrderIDType
	 */
	public $OrderID;
	/**
	 * The SellerInventoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An ID that the seller specified when they listed the Half.com item, if any. It can be used for the seller's SKU. Note that <b>SellerInventoryID</b> is not returned if no ID was specified. (Note: The SKU field used for eBay.com listings is not applicable to Half.com listings.)
	 * @var string
	 */
	public $SellerInventoryID;
	/**
	 * The PrivateNotes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A text note that the seller specified for the Half.com item, if any. Only visible to the seller. Not returned if the seller specified no notes.
	 * @var string
	 */
	public $PrivateNotes;
	/**
	 * The ExternalProductID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains an ISBN, UPC, or EAN value from the catalog product associated with the Half.com item. All Half.com items are listed with Pre-filled Item Information.
	 * @var EbayTradingTypeExternalProductIDType
	 */
	public $ExternalProductID;
	/**
	 * The Title
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The title of the item listing as it appears on Half.com. <br><br> <span class="tablenote"><b>Note:</b> The maximum length of an eBay Item Title has increased to 80 characters as of September 2011. </span>
	 * @var string
	 */
	public $Title;
	/**
	 * The PaymentType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the payment is for a Half.com sale or a refund.
	 * @var EbayTradingTypePaymentTypeCodeType
	 */
	public $PaymentType;
	/**
	 * The TransactionPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Price of the order line item (transaction) before shipping and other costs.
	 * @var EbayTradingTypeAmountType
	 */
	public $TransactionPrice;
	/**
	 * The ShippingReimbursement
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The adjusted shipping cost that Half.com pays the seller. For a multiple line item (Combined Payment) order, the total shipping cost may be less than the cost to ship the items individually, which makes the adjustment necessary. The shipping cost may also be adjusted due to Half.com handling charges. <br><br> <b>Note</b>: Due to the way shipping costs are calculated, this value may be different for identical items in different orders.
	 * @var EbayTradingTypeAmountType
	 */
	public $ShippingReimbursement;
	/**
	 * The Commission
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Amount of commission charged by Half.com.
	 * @var EbayTradingTypeAmountType
	 */
	public $Commission;
	/**
	 * The AmountPaid
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Total amount paid by buyer for the Half.com order.
	 * @var EbayTradingTypeAmountType
	 */
	public $AmountPaid;
	/**
	 * The PaidTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The time and date when Half.com created the payment. Half.com creates a payment when the buyer pays for an order. This time is specified in GMT (not Pacific time). See "Time Values" in the eBay Web Services guide for information about converting between GMT and other time zones.
	 * @var dateTime
	 */
	public $PaidTime;
	/**
	 * The OrderLineItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A unique identifier for a Half.com order line item. This field is created as soon as there is a commitment to buy from the seller, and its value is based upon the concatenation of <b>ItemID</b> and <b>TransactionID</b>, with a hyphen in between these two IDs. For a single line item order, the <b>OrderLineItemID</b> value is identical to the <b>OrderID</b> value.
	 * @var string
	 */
	public $OrderLineItemID;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param string TransactionID
	 * @param EbayTradingTypeOrderIDType OrderID
	 * @param string SellerInventoryID
	 * @param string PrivateNotes
	 * @param EbayTradingTypeExternalProductIDType ExternalProductID
	 * @param string Title
	 * @param EbayTradingTypePaymentTypeCodeType PaymentType
	 * @param EbayTradingTypeAmountType TransactionPrice
	 * @param EbayTradingTypeAmountType ShippingReimbursement
	 * @param EbayTradingTypeAmountType Commission
	 * @param EbayTradingTypeAmountType AmountPaid
	 * @param dateTime PaidTime
	 * @param string OrderLineItemID
	 * @param DOMDocument any
	 * @return EbayTradingTypeSellerPaymentType
	 */
	public function __construct($_ItemID = null,$_TransactionID = null,$_OrderID = null,$_SellerInventoryID = null,$_PrivateNotes = null,$_ExternalProductID = null,$_Title = null,$_PaymentType = null,$_TransactionPrice = null,$_ShippingReimbursement = null,$_Commission = null,$_AmountPaid = null,$_PaidTime = null,$_OrderLineItemID = null,$_any = null)
	{
		parent::__construct(array('ItemID'=>$_ItemID,'TransactionID'=>$_TransactionID,'OrderID'=>$_OrderID,'SellerInventoryID'=>$_SellerInventoryID,'PrivateNotes'=>$_PrivateNotes,'ExternalProductID'=>$_ExternalProductID,'Title'=>$_Title,'PaymentType'=>$_PaymentType,'TransactionPrice'=>$_TransactionPrice,'ShippingReimbursement'=>$_ShippingReimbursement,'Commission'=>$_Commission,'AmountPaid'=>$_AmountPaid,'PaidTime'=>$_PaidTime,'OrderLineItemID'=>$_OrderLineItemID,'any'=>$_any));
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
	 * Set OrderID
	 * @param OrderIDType OrderID
	 * @return OrderIDType
	 */
	public function setOrderID($_OrderID)
	{
		return ($this->OrderID = EbayTradingTypeOrderIDType::valueIsValid($_OrderID)?$_OrderID:null);
	}
	/**
	 * Get OrderID
	 * @return EbayTradingTypeOrderIDType
	 */
	public function getOrderID()
	{
		return $this->OrderID;
	}
	/**
	 * Set SellerInventoryID
	 * @param string SellerInventoryID
	 * @return string
	 */
	public function setSellerInventoryID($_SellerInventoryID)
	{
		return ($this->SellerInventoryID = $_SellerInventoryID);
	}
	/**
	 * Get SellerInventoryID
	 * @return string
	 */
	public function getSellerInventoryID()
	{
		return $this->SellerInventoryID;
	}
	/**
	 * Set PrivateNotes
	 * @param string PrivateNotes
	 * @return string
	 */
	public function setPrivateNotes($_PrivateNotes)
	{
		return ($this->PrivateNotes = $_PrivateNotes);
	}
	/**
	 * Get PrivateNotes
	 * @return string
	 */
	public function getPrivateNotes()
	{
		return $this->PrivateNotes;
	}
	/**
	 * Set ExternalProductID
	 * @param ExternalProductIDType ExternalProductID
	 * @return ExternalProductIDType
	 */
	public function setExternalProductID($_ExternalProductID)
	{
		return ($this->ExternalProductID = $_ExternalProductID);
	}
	/**
	 * Get ExternalProductID
	 * @return EbayTradingTypeExternalProductIDType
	 */
	public function getExternalProductID()
	{
		return $this->ExternalProductID;
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
	 * Set PaymentType
	 * @param PaymentTypeCodeType PaymentType
	 * @return PaymentTypeCodeType
	 */
	public function setPaymentType($_PaymentType)
	{
		return ($this->PaymentType = EbayTradingTypePaymentTypeCodeType::valueIsValid($_PaymentType)?$_PaymentType:null);
	}
	/**
	 * Get PaymentType
	 * @return EbayTradingTypePaymentTypeCodeType
	 */
	public function getPaymentType()
	{
		return $this->PaymentType;
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
	 * @return EbayTradingTypeAmountType
	 */
	public function getTransactionPrice()
	{
		return $this->TransactionPrice;
	}
	/**
	 * Set ShippingReimbursement
	 * @param AmountType ShippingReimbursement
	 * @return AmountType
	 */
	public function setShippingReimbursement($_ShippingReimbursement)
	{
		return ($this->ShippingReimbursement = $_ShippingReimbursement);
	}
	/**
	 * Get ShippingReimbursement
	 * @return EbayTradingTypeAmountType
	 */
	public function getShippingReimbursement()
	{
		return $this->ShippingReimbursement;
	}
	/**
	 * Set Commission
	 * @param AmountType Commission
	 * @return AmountType
	 */
	public function setCommission($_Commission)
	{
		return ($this->Commission = $_Commission);
	}
	/**
	 * Get Commission
	 * @return EbayTradingTypeAmountType
	 */
	public function getCommission()
	{
		return $this->Commission;
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
	 * @return EbayTradingTypeAmountType
	 */
	public function getAmountPaid()
	{
		return $this->AmountPaid;
	}
	/**
	 * Set PaidTime
	 * @param dateTime PaidTime
	 * @return dateTime
	 */
	public function setPaidTime($_PaidTime)
	{
		return ($this->PaidTime = $_PaidTime);
	}
	/**
	 * Get PaidTime
	 * @return dateTime
	 */
	public function getPaidTime()
	{
		return $this->PaidTime;
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