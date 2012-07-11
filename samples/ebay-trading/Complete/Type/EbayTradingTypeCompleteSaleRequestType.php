<?php
/**
 * Class file for EbayTradingTypeCompleteSaleRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCompleteSaleRequestType
 * Documentation : Enables a seller to do various tasks after the creation of a single line item or multiple line item order. Typically, this call is used after the buyer has paid for the order, but it can be called by the seller beforehand. Typical post-payment tasks available to this call include marking the order as paid, marking the order as shipped, providing shipment tracking details, and leaving feedback for the buyer.
 * @date 04/07/2012
 */
class EbayTradingTypeCompleteSaleRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for an eBay item listing. An <b>ItemID</b> can be paired up with a corresponding <b>TransactionID</b> and used in the <b>CompleteSale</b> request to identify a single line item order. <br><br> Unless an <b>OrderLineItemID</b> is used to identify a single line item order, or the <b>OrderID</b> is used to identify a single or multiple line item order, the <b>ItemID</b>/<b>TransactionID</b> pair must be specified. For a multiple line item order, <b>OrderID</b> must be used. If <b>OrderID</b> or <b>OrderLineItemID</b> are specified, the <b>ItemID</b>/<b>TransactionID</b> pair is ignored if present in the same request.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The TransactionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for an eBay order line item (transaction). The <b>TransactionID</b> can be paired up with the corresponding <b>ItemID</b> and used in the <b>CompleteSale</b> request to identify a single line item order. <br><br> Unless an <b>OrderLineItemID</b> is used to identify a single line item order, or the <b>OrderID</b> is used to identify a single or multiple line item order, the <b>ItemID</b>/<b>TransactionID</b> pair must be specified. For a multiple line item order, <b>OrderID</b> must be used. If <b>OrderID</b> or <b>OrderLineItemID</b> are specified, the <b>ItemID</b>/<b>TransactionID</b> pair is ignored if present in the same request.
	 * @var string
	 */
	public $TransactionID;
	/**
	 * The FeedbackInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of the feedback text and the buyer's eBay user ID. Since there can only be one feedback entry per order line item, this container should not be used if feedback for the buyer has already been left for this item. Call <b class="con">GetFeedback</b> to determine whether feedback has already been left for the item. If this container is used, all of its child fields are required.
	 * @var EbayTradingTypeFeedbackInfoType
	 */
	public $FeedbackInfo;
	/**
	 * The Shipped
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The seller includes and sets this field to true if the order has been shipped. If the call is successful, the order line item(s) are marked as Shipped in My eBay. <br><br> If the seller includes and sets this field to false, the order line item(s) are marked (or remain) as Not Shipped in My eBay. <br><br> If this field is not included, the shipped status of the order line item(s) remain unchanged in My eBay. <br><br> If shipment tracking information is provided for an order line item through the Shipment container in the same request, the order line item is marked as shipped automatically and the <b>Shipped</b> field is not required. <br><br> For orders going through the new payment process, DE and AT sellers mark an order as shipped to expedite the seller payout process.
	 * @var boolean
	 */
	public $Shipped;
	/**
	 * The Paid
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The seller includes and sets this field to true if the buyer has paid for the order. If the call is successful, the order line item(s) are marked as Paid in My eBay. <br><br> If the seller includes and sets this field to false, the order line item(s) are marked (or remain) as Not Paid in My eBay. <br><br> If this field is not included, the paid status of the order line item(s) remain unchanged in My eBay. <br><br> If an order is going through the new eBay payment process, DE and AT sellers cannot use this field to mark the order as paid, as this can only be done by eBay.
	 * @var boolean
	 */
	public $Paid;
	/**
	 * The ListingType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field is required if <b>CompleteSale</b> is being used for a Half.com order. The value should be set to <i>Half</i>, which is the only applicable <b>ListingType</b> value for this call.
	 * @var EbayTradingTypeListingTypeCodeType
	 */
	public $ListingType;
	/**
	 * The Shipment
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of shipment tracking information, shipped time, and an optional text field to provide additional details to the buyer. Setting the tracking number and shipping carrier automatically marks the item as shipped and the <b>Shipped</b> field is not required. <br><br> (If you supply <b>ShipmentTrackingNumber</b> you must also supply <b>ShippingCarrierUsed</b>, otherwise you will get an error. <br><br> To modify the shipping tracking number and/or carrier, supply the new number in <b>ShipmentTrackingNumber</b> or supply the value for <b>ShippingCarrierUsed</b> or both. The old number and carrier are deleted and the new ones are added. <br><br> To simply delete the current tracking details altogether, supply empty <b>Shipment</b> tags. <br> <br> <span class="tablenote"><b>Note:</b> Starting June 20, 2012, Top-rated sellers must have a record of uploading shipment tracking information (through site or through API) for at least 90 percent of their order line items (purchased by U.S. buyers) to keep their status as Top-rated sellers. For more information on changes to eBay's Top-rated seller program, see the <a href="http://pages.ebay.com/sellerinformation/news/eTRSupdate.html">2012 Spring Seller Update</a> page. </span> <br>
	 * @var EbayTradingTypeShipmentType
	 */
	public $Shipment;
	/**
	 * The OrderID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A unique identifier that identifies a single line item or multiple line item order. <br><br> For a single line item order, the <b>OrderID</b> value is identical to the <b>OrderLineItemID</b> value that is generated upon creation of the order line item. For multiple line item orders, the <b>OrderID</b> value is created by eBay when the buyer is purchasing multiple order line items from the same seller at the same time. For multiple line item orders not going through the eBay Cart flow, a Combined Payment order can be created by the seller through the <b>AddOrder</b> call. The <b>OrderID</b> can be used in the <b>CompleteSale</b> request to identify a single or multiple line item order. <br><br> <b>OrderID</b> overrides an <b>OrderLineItemID</b> or <b>ItemID</b>/<b>TransactionID</b> pair if these fields are also specified in the same request.
	 * @var string
	 */
	public $OrderID;
	/**
	 * The OrderLineItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <b>OrderLineItemID</b> is a unique identifier for an eBay order line item and is based upon the concatenation of <b>ItemID</b> and <b>TransactionID</b>, with a hyphen in between these two IDs. For a single line item order, the <b>OrderLineItemID</b> value can be passed into the <b>OrderID</b> field in the <b>CompleteSale</b> request. <br><br> Unless an <b>ItemID</b>/<b>TransactionID</b> pair is used to identify a single line item order, or the <b>OrderID</b> is used to identify a single or multiple line item order, the <b>OrderLineItemID</b> must be specified. For a multiple line item order, <b>OrderID</b> must be used. If <b>OrderLineItemID</b> is specified, the <b>ItemID</b>/<b>TransactionID</b> pair are ignored if present in the same request.
	 * @var string
	 */
	public $OrderLineItemID;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param string TransactionID
	 * @param EbayTradingTypeFeedbackInfoType FeedbackInfo
	 * @param boolean Shipped
	 * @param boolean Paid
	 * @param EbayTradingTypeListingTypeCodeType ListingType
	 * @param EbayTradingTypeShipmentType Shipment
	 * @param string OrderID
	 * @param string OrderLineItemID
	 * @return EbayTradingTypeCompleteSaleRequestType
	 */
	public function __construct($_ItemID = null,$_TransactionID = null,$_FeedbackInfo = null,$_Shipped = null,$_Paid = null,$_ListingType = null,$_Shipment = null,$_OrderID = null,$_OrderLineItemID = null)
	{
		EbayTradingWsdlClass::__construct(array('ItemID'=>$_ItemID,'TransactionID'=>$_TransactionID,'FeedbackInfo'=>$_FeedbackInfo,'Shipped'=>$_Shipped,'Paid'=>$_Paid,'ListingType'=>$_ListingType,'Shipment'=>$_Shipment,'OrderID'=>$_OrderID,'OrderLineItemID'=>$_OrderLineItemID));
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
	 * Set FeedbackInfo
	 * @param FeedbackInfoType FeedbackInfo
	 * @return FeedbackInfoType
	 */
	public function setFeedbackInfo($_FeedbackInfo)
	{
		return ($this->FeedbackInfo = $_FeedbackInfo);
	}
	/**
	 * Get FeedbackInfo
	 * @return EbayTradingTypeFeedbackInfoType
	 */
	public function getFeedbackInfo()
	{
		return $this->FeedbackInfo;
	}
	/**
	 * Set Shipped
	 * @param boolean Shipped
	 * @return boolean
	 */
	public function setShipped($_Shipped)
	{
		return ($this->Shipped = $_Shipped);
	}
	/**
	 * Get Shipped
	 * @return boolean
	 */
	public function getShipped()
	{
		return $this->Shipped;
	}
	/**
	 * Set Paid
	 * @param boolean Paid
	 * @return boolean
	 */
	public function setPaid($_Paid)
	{
		return ($this->Paid = $_Paid);
	}
	/**
	 * Get Paid
	 * @return boolean
	 */
	public function getPaid()
	{
		return $this->Paid;
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
	 * Set OrderID
	 * @param string OrderID
	 * @return string
	 */
	public function setOrderID($_OrderID)
	{
		return ($this->OrderID = $_OrderID);
	}
	/**
	 * Get OrderID
	 * @return string
	 */
	public function getOrderID()
	{
		return $this->OrderID;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>