<?php
/**
 * Class file for EbayTradingTypeReviseSellingManagerSaleRecordRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeReviseSellingManagerSaleRecordRequestType
 * Documentation : Request type containing the input fields for the <b>ReviseSellingManagerSaleRecord</b> call. The standard Trading API deprecation process is not applicable to this call.
 * @date 04/07/2012
 */
class EbayTradingTypeReviseSellingManagerSaleRecordRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for an eBay item listing. A listing can have multiple order line items (transactions), but only one <b>ItemID</b>. An <b>ItemID</b> can be paired up with a corresponding <b>TransactionID</b> and used as an input filter for <b>ReviseSellingManagerSaleRecord</b>. The <b>ItemID</b>/<b>TransactionID</b> pair corresponds to a Selling Manager <b>SaleRecordID</b>, which can be retrieved with the <b>GetSellingManagerSaleRecord</b> call. <br><br> Unless an <b>OrderLineItemID</b> is used to identify a single line item order, or the <b>OrderID</b> is used to identify a single or multiple line item (Combined Payment) order, the <b>ItemID</b>/<b>TransactionID</b> pair must be specified. For a multiple line item (Combined Payment) order, <b>OrderID</b> should be used. If <b>OrderID</b> or <b>OrderLineItemID</b> are specified, the <b>ItemID</b>/<b>TransactionID</b> pair is ignored if present in the same request.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The TransactionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for an eBay order line item (transaction). An order line item is created once there is a commitment from a buyer to purchase an item. Since an auction listing can only have one order line item during the duration of the listing, the <b>TransactionID</b> for auction listings is always 0. Along with its corresponding <b>ItemID</b>, a <b>TransactionID</b> is used and referenced during an order checkout flow and after checkout has been completed. The <b>ItemID</b>/<b>TransactionID</b> pair can be used as an input filter for <b>ReviseSellingManagerSaleRecord</b>. The <b>ItemID</b>/<b>TransactionID</b> pair corresponds to a Selling Manager <b>SaleRecordID</b>, which can be retrieved with the <b>GetSellingManagerSaleRecord</b> call. <br><br> Unless an <b>OrderLineItemID</b> is used to identify a single line item order, or the <b>OrderID</b> is used to identify a single or multiple line item (Combined Payment) order, the <b>ItemID</b>/<b>TransactionID</b> pair must be specified. For a multiple line item (Combined Payment) order, <b>OrderID</b> must be used. If <b>OrderID</b> or <b>OrderLineItemID</b> are specified, the <b>ItemID</b>/<b>TransactionID</b> pair is ignored if present in the same request.
	 * @var string
	 */
	public $TransactionID;
	/**
	 * The OrderID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A unique identifier that identifies a single line item or multiple line item (Combined Payment) order. <br><br> For a single line item order, the <b>OrderID</b> value is identical to the <b>OrderLineItemID</b> value that is generated upon creation of the order line item. For a Combined Payment order, the <b>OrderID</b> value is created by eBay when the buyer or seller (sharing multiple, common order line items) combines multiple order line items into a Combined Payment order through the eBay site. A Combined Payment order can also be created by the seller through the <b>AddOrder</b> call. The <b>OrderID</b> can be used as an input filter for <b>ReviseSellingManagerSaleRecord</b>. The <b>OrderID</b> is linked to a Selling Manager <b>SaleRecordID</b>, and can be retrieved with the <b>GetSellingManagerSaleRecord</b> call. <br><br> <b>OrderID</b> overrides an <b>OrderLineItemID</b> or <b>ItemID</b>/<b>TransactionID</b> pair if these fields are also specified in the same request.
	 * @var EbayTradingTypeOrderIDType
	 */
	public $OrderID;
	/**
	 * The SellingManagerSoldOrder
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of order costs, shipping details, order status, and other information. The changes made under this container will update the order in Selling Manager.
	 * @var EbayTradingTypeSellingManagerSoldOrderType
	 */
	public $SellingManagerSoldOrder;
	/**
	 * The OrderLineItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <b>OrderLineItemID</b> is a unique identifier for an eBay order line item and is based upon the concatenation of <b>ItemID</b> and <b>TransactionID</b>, with a hyphen in between these two IDs. For a single line item order, the <b>OrderLineItemID</b> value can be passed into the <b>OrderID</b> field to revise the order in Selling Manager. <br><br> Unless an <b>ItemID</b>/<b>TransactionID</b> pair is used to identify a single line item order, or the <b>OrderID</b> is used to identify a single or multiple line item (Combined Payment) order, the <b>OrderLineItemID</b> must be specified. For a multiple line item (Combined Payment) order, <b>OrderID</b> should be used. If <b>OrderLineItemID</b> is specified, the <b>ItemID</b>/<b>TransactionID</b> pair are ignored if present in the same request.
	 * @var string
	 */
	public $OrderLineItemID;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param string TransactionID
	 * @param EbayTradingTypeOrderIDType OrderID
	 * @param EbayTradingTypeSellingManagerSoldOrderType SellingManagerSoldOrder
	 * @param string OrderLineItemID
	 * @return EbayTradingTypeReviseSellingManagerSaleRecordRequestType
	 */
	public function __construct($_ItemID = null,$_TransactionID = null,$_OrderID = null,$_SellingManagerSoldOrder = null,$_OrderLineItemID = null)
	{
		EbayTradingWsdlClass::__construct(array('ItemID'=>$_ItemID,'TransactionID'=>$_TransactionID,'OrderID'=>$_OrderID,'SellingManagerSoldOrder'=>$_SellingManagerSoldOrder,'OrderLineItemID'=>$_OrderLineItemID));
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
	 * Set SellingManagerSoldOrder
	 * @param SellingManagerSoldOrderType SellingManagerSoldOrder
	 * @return SellingManagerSoldOrderType
	 */
	public function setSellingManagerSoldOrder($_SellingManagerSoldOrder)
	{
		return ($this->SellingManagerSoldOrder = $_SellingManagerSoldOrder);
	}
	/**
	 * Get SellingManagerSoldOrder
	 * @return EbayTradingTypeSellingManagerSoldOrderType
	 */
	public function getSellingManagerSoldOrder()
	{
		return $this->SellingManagerSoldOrder;
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