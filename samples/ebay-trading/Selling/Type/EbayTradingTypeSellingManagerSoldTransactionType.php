<?php
/**
 * Class file for EbayTradingTypeSellingManagerSoldTransactionType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellingManagerSoldTransactionType
 * Documentation : Contains information about a single line item (transaction) in an order created through Selling Manager.
 * @date 04/07/2012
 */
class EbayTradingTypeSellingManagerSoldTransactionType extends EbayTradingWsdlClass
{
	/**
	 * The InvoiceNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Seller's customized invoice number.
	 * @var string
	 */
	public $InvoiceNumber;
	/**
	 * The TransactionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for an eBay order line item (transaction). An order line item is created once there is a commitment from a buyer to purchase an item. Since an auction listing can only have one order line item during the duration of the listing, the <b>TransactionID</b> for auction listings is always 0. Along with its corresponding <b>ItemID</b>, a <b>TransactionID</b> is used and referenced during an order checkout flow and after checkout has been completed.
	 * @var long
	 */
	public $TransactionID;
	/**
	 * The SaleRecordID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for a Selling Manager sale record. This field is created at the same time as the order line item (transaction). A sale record is displayed in the Sold view in Selling Manager and contains information on the buyer and shipping. In the <b>GetItemTransactions</b>, <b>GetSellerTransactions</b>, <b>GetOrders</b>, and <b>GetOrderTransactions</b> calls, the <b>SaleRecordID</b> value is reflected in the <b>ShippingDetails.SellingManagerSalesRecordNumber</b> field. <br/><br/> For orders that occurred within the last 30 days, passing only the SaleRecordID into the GetSellingManagerSoldListings request will return the sale record. However, for sales that occurred more than 30 days ago, the SaleDateRange container must also be used, passing in a date range that includes the date on which the specific sale occurred.
	 * @var long
	 */
	public $SaleRecordID;
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for an eBay item listing.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The QuantitySold
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Total number of identical items sold in the order line item.
	 * @var int
	 */
	public $QuantitySold;
	/**
	 * The ItemPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Price per item.
	 * @var EbayTradingTypeAmountType
	 */
	public $ItemPrice;
	/**
	 * The SubtotalAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This value is calculated by multplying the <b>ItemPrice</b> value by the <b>QuantitySold</b> value.
	 * @var EbayTradingTypeAmountType
	 */
	public $SubtotalAmount;
	/**
	 * The ItemTitle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The title of the item listing. <br><br> <span class="tablenote"><b>Note:</b> The maximum length of an eBay Item Title is increasing to 80 characters in Version 735. </span>
	 * @var string
	 */
	public $ItemTitle;
	/**
	 * The ListingType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The item listing type.
	 * @var EbayTradingTypeListingTypeCodeType
	 */
	public $ListingType;
	/**
	 * The Relisted
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Boolean value indicating whether the item is a relisted item.
	 * @var boolean
	 */
	public $Relisted;
	/**
	 * The WatchCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Number of users watching the item.
	 * @var int
	 */
	public $WatchCount;
	/**
	 * The StartPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Start price of the item.
	 * @var EbayTradingTypeAmountType
	 */
	public $StartPrice;
	/**
	 * The ReservePrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Reserve Price of the item (if a Reserve Price was set for the item).
	 * @var EbayTradingTypeAmountType
	 */
	public $ReservePrice;
	/**
	 * The SecondChanceOfferSent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Boolean value indicating whether or not a Second Chance offer was sent by the seller to an eligible bidder.
	 * @var boolean
	 */
	public $SecondChanceOfferSent;
	/**
	 * The CustomLabel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Custom label associated with this order line item.
	 * @var string
	 */
	public $CustomLabel;
	/**
	 * The SoldOn
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The platform on which the item was sold.
	 * @var EbayTradingTypeTransactionPlatformCodeType
	 */
	public $SoldOn;
	/**
	 * The ListedOn
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The platform on which the item was listed.
	 * @var EbayTradingTypeTransactionPlatformCodeType
	 */
	public $ListedOn;
	/**
	 * The Shipment
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of tracking information for the shipment.
	 * @var EbayTradingTypeShipmentType
	 */
	public $Shipment;
	/**
	 * The CharityListing
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field is returned as True if the item is listed as a charity item.
	 * @var boolean
	 */
	public $CharityListing;
	/**
	 * The Variation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : In a fixed-priced listing, a seller can offer variations of the same item. For example, the seller could create a fixed-priced listing for a t-shirt design and offer the shirt in different colors and sizes. In this case, each color and size combination is a separate variation. Each variation can have a different quantity and price. Due to the possible price differentiation, buyers can buy multiple items from this listing at the same time, but all of the items must be of the same variation. One order line item is created whether one or multiple items of the same variation are purchased. <br><br> The <b>Variation</b> node contains information about which variation was purchased. Therefore, applications that process order line items should always check to see if this node is present.
	 * @var EbayTradingTypeVariationType
	 */
	public $Variation;
	/**
	 * The OrderLineItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A unique identifier for an eBay order line item. This field is created as soon as there is a commitment to buy from the seller, and its value is based upon the concatenation of <b>ItemID</b> and <b>TransactionID</b>, with a hyphen in between these two IDs.
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
	 * @param string InvoiceNumber
	 * @param long TransactionID
	 * @param long SaleRecordID
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param int QuantitySold
	 * @param EbayTradingTypeAmountType ItemPrice
	 * @param EbayTradingTypeAmountType SubtotalAmount
	 * @param string ItemTitle
	 * @param EbayTradingTypeListingTypeCodeType ListingType
	 * @param boolean Relisted
	 * @param int WatchCount
	 * @param EbayTradingTypeAmountType StartPrice
	 * @param EbayTradingTypeAmountType ReservePrice
	 * @param boolean SecondChanceOfferSent
	 * @param string CustomLabel
	 * @param EbayTradingTypeTransactionPlatformCodeType SoldOn
	 * @param EbayTradingTypeTransactionPlatformCodeType ListedOn
	 * @param EbayTradingTypeShipmentType Shipment
	 * @param boolean CharityListing
	 * @param EbayTradingTypeVariationType Variation
	 * @param string OrderLineItemID
	 * @param DOMDocument any
	 * @return EbayTradingTypeSellingManagerSoldTransactionType
	 */
	public function __construct($_InvoiceNumber = null,$_TransactionID = null,$_SaleRecordID = null,$_ItemID = null,$_QuantitySold = null,$_ItemPrice = null,$_SubtotalAmount = null,$_ItemTitle = null,$_ListingType = null,$_Relisted = null,$_WatchCount = null,$_StartPrice = null,$_ReservePrice = null,$_SecondChanceOfferSent = null,$_CustomLabel = null,$_SoldOn = null,$_ListedOn = null,$_Shipment = null,$_CharityListing = null,$_Variation = null,$_OrderLineItemID = null,$_any = null)
	{
		parent::__construct(array('InvoiceNumber'=>$_InvoiceNumber,'TransactionID'=>$_TransactionID,'SaleRecordID'=>$_SaleRecordID,'ItemID'=>$_ItemID,'QuantitySold'=>$_QuantitySold,'ItemPrice'=>$_ItemPrice,'SubtotalAmount'=>$_SubtotalAmount,'ItemTitle'=>$_ItemTitle,'ListingType'=>$_ListingType,'Relisted'=>$_Relisted,'WatchCount'=>$_WatchCount,'StartPrice'=>$_StartPrice,'ReservePrice'=>$_ReservePrice,'SecondChanceOfferSent'=>$_SecondChanceOfferSent,'CustomLabel'=>$_CustomLabel,'SoldOn'=>$_SoldOn,'ListedOn'=>$_ListedOn,'Shipment'=>$_Shipment,'CharityListing'=>$_CharityListing,'Variation'=>$_Variation,'OrderLineItemID'=>$_OrderLineItemID,'any'=>$_any));
	}
	/**
	 * Set InvoiceNumber
	 * @param string InvoiceNumber
	 * @return string
	 */
	public function setInvoiceNumber($_InvoiceNumber)
	{
		return ($this->InvoiceNumber = $_InvoiceNumber);
	}
	/**
	 * Get InvoiceNumber
	 * @return string
	 */
	public function getInvoiceNumber()
	{
		return $this->InvoiceNumber;
	}
	/**
	 * Set TransactionID
	 * @param long TransactionID
	 * @return long
	 */
	public function setTransactionID($_TransactionID)
	{
		return ($this->TransactionID = $_TransactionID);
	}
	/**
	 * Get TransactionID
	 * @return long
	 */
	public function getTransactionID()
	{
		return $this->TransactionID;
	}
	/**
	 * Set SaleRecordID
	 * @param long SaleRecordID
	 * @return long
	 */
	public function setSaleRecordID($_SaleRecordID)
	{
		return ($this->SaleRecordID = $_SaleRecordID);
	}
	/**
	 * Get SaleRecordID
	 * @return long
	 */
	public function getSaleRecordID()
	{
		return $this->SaleRecordID;
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
	 * Set QuantitySold
	 * @param int QuantitySold
	 * @return int
	 */
	public function setQuantitySold($_QuantitySold)
	{
		return ($this->QuantitySold = $_QuantitySold);
	}
	/**
	 * Get QuantitySold
	 * @return int
	 */
	public function getQuantitySold()
	{
		return $this->QuantitySold;
	}
	/**
	 * Set ItemPrice
	 * @param AmountType ItemPrice
	 * @return AmountType
	 */
	public function setItemPrice($_ItemPrice)
	{
		return ($this->ItemPrice = $_ItemPrice);
	}
	/**
	 * Get ItemPrice
	 * @return EbayTradingTypeAmountType
	 */
	public function getItemPrice()
	{
		return $this->ItemPrice;
	}
	/**
	 * Set SubtotalAmount
	 * @param AmountType SubtotalAmount
	 * @return AmountType
	 */
	public function setSubtotalAmount($_SubtotalAmount)
	{
		return ($this->SubtotalAmount = $_SubtotalAmount);
	}
	/**
	 * Get SubtotalAmount
	 * @return EbayTradingTypeAmountType
	 */
	public function getSubtotalAmount()
	{
		return $this->SubtotalAmount;
	}
	/**
	 * Set ItemTitle
	 * @param string ItemTitle
	 * @return string
	 */
	public function setItemTitle($_ItemTitle)
	{
		return ($this->ItemTitle = $_ItemTitle);
	}
	/**
	 * Get ItemTitle
	 * @return string
	 */
	public function getItemTitle()
	{
		return $this->ItemTitle;
	}
	/**
	 * Set ListingType
	 * @param ListingTypeCodeType ListingType
	 * @return ListingTypeCodeType
	 */
	public function setListingType($_ListingType)
	{
		return ($this->ListingType = EbayTradingTypeListingTypeCodeType::valueIsValid($_ListingType)?$_ListingType:null);
	}
	/**
	 * Get ListingType
	 * @return EbayTradingTypeListingTypeCodeType
	 */
	public function getListingType()
	{
		return $this->ListingType;
	}
	/**
	 * Set Relisted
	 * @param boolean Relisted
	 * @return boolean
	 */
	public function setRelisted($_Relisted)
	{
		return ($this->Relisted = $_Relisted);
	}
	/**
	 * Get Relisted
	 * @return boolean
	 */
	public function getRelisted()
	{
		return $this->Relisted;
	}
	/**
	 * Set WatchCount
	 * @param int WatchCount
	 * @return int
	 */
	public function setWatchCount($_WatchCount)
	{
		return ($this->WatchCount = $_WatchCount);
	}
	/**
	 * Get WatchCount
	 * @return int
	 */
	public function getWatchCount()
	{
		return $this->WatchCount;
	}
	/**
	 * Set StartPrice
	 * @param AmountType StartPrice
	 * @return AmountType
	 */
	public function setStartPrice($_StartPrice)
	{
		return ($this->StartPrice = $_StartPrice);
	}
	/**
	 * Get StartPrice
	 * @return EbayTradingTypeAmountType
	 */
	public function getStartPrice()
	{
		return $this->StartPrice;
	}
	/**
	 * Set ReservePrice
	 * @param AmountType ReservePrice
	 * @return AmountType
	 */
	public function setReservePrice($_ReservePrice)
	{
		return ($this->ReservePrice = $_ReservePrice);
	}
	/**
	 * Get ReservePrice
	 * @return EbayTradingTypeAmountType
	 */
	public function getReservePrice()
	{
		return $this->ReservePrice;
	}
	/**
	 * Set SecondChanceOfferSent
	 * @param boolean SecondChanceOfferSent
	 * @return boolean
	 */
	public function setSecondChanceOfferSent($_SecondChanceOfferSent)
	{
		return ($this->SecondChanceOfferSent = $_SecondChanceOfferSent);
	}
	/**
	 * Get SecondChanceOfferSent
	 * @return boolean
	 */
	public function getSecondChanceOfferSent()
	{
		return $this->SecondChanceOfferSent;
	}
	/**
	 * Set CustomLabel
	 * @param string CustomLabel
	 * @return string
	 */
	public function setCustomLabel($_CustomLabel)
	{
		return ($this->CustomLabel = $_CustomLabel);
	}
	/**
	 * Get CustomLabel
	 * @return string
	 */
	public function getCustomLabel()
	{
		return $this->CustomLabel;
	}
	/**
	 * Set SoldOn
	 * @param TransactionPlatformCodeType SoldOn
	 * @return TransactionPlatformCodeType
	 */
	public function setSoldOn($_SoldOn)
	{
		return ($this->SoldOn = EbayTradingTypeTransactionPlatformCodeType::valueIsValid($_SoldOn)?$_SoldOn:null);
	}
	/**
	 * Get SoldOn
	 * @return EbayTradingTypeTransactionPlatformCodeType
	 */
	public function getSoldOn()
	{
		return $this->SoldOn;
	}
	/**
	 * Set ListedOn
	 * @param TransactionPlatformCodeType ListedOn
	 * @return TransactionPlatformCodeType
	 */
	public function setListedOn($_ListedOn)
	{
		return ($this->ListedOn = EbayTradingTypeTransactionPlatformCodeType::valueIsValid($_ListedOn)?$_ListedOn:null);
	}
	/**
	 * Get ListedOn
	 * @return EbayTradingTypeTransactionPlatformCodeType
	 */
	public function getListedOn()
	{
		return $this->ListedOn;
	}
	/**
	 * Set Shipment
	 * @param ShipmentType Shipment
	 * @return ShipmentType
	 */
	public function setShipment($_Shipment)
	{
		return ($this->Shipment = $_Shipment);
	}
	/**
	 * Get Shipment
	 * @return EbayTradingTypeShipmentType
	 */
	public function getShipment()
	{
		return $this->Shipment;
	}
	/**
	 * Set CharityListing
	 * @param boolean CharityListing
	 * @return boolean
	 */
	public function setCharityListing($_CharityListing)
	{
		return ($this->CharityListing = $_CharityListing);
	}
	/**
	 * Get CharityListing
	 * @return boolean
	 */
	public function getCharityListing()
	{
		return $this->CharityListing;
	}
	/**
	 * Set Variation
	 * @param VariationType Variation
	 * @return VariationType
	 */
	public function setVariation($_Variation)
	{
		return ($this->Variation = $_Variation);
	}
	/**
	 * Get Variation
	 * @return EbayTradingTypeVariationType
	 */
	public function getVariation()
	{
		return $this->Variation;
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