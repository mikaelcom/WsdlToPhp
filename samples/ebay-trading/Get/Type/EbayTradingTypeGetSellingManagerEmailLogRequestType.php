<?php
/**
 * Class file for EbayTradingTypeGetSellingManagerEmailLogRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetSellingManagerEmailLogRequestType
 * Documentation : Retrieves a log of emails sent, or scheduled to be sent, to buyers. <br><br> The standard Trading API deprecation process is not applicable to this call.
 * @date 04/07/2012
 */
class EbayTradingTypeGetSellingManagerEmailLogRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for the eBay item listing associated with the Selling Manager email log. Unless the <b>OrderID</b> or <b>OrderLineItemID</b> value is specified in the request, the <b>ItemID</b> and <b>TransactionID</b> fields must be used to identify the Selling Manager email log to retrieve. You can use <b>GetSellingManagerSoldListings</b> to retrieve the <b>ItemID</b>, <b>TransactionID</b> or <b>OrderLineItemID</b> values that correspond to the Selling Manager sale record (<b>SaleRecordID</b>). All four of these fields are returned under the <b>SellingManagerSoldTransaction</b> container of the <b>GetSellingManagerSoldListings</b> request.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The TransactionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for the order line item (transaction) associated with the Selling Manager email log. Unless the <b>OrderID</b> or <b>OrderLineItemID</b> value is specified in the request, the <b>ItemID</b> and <b>TransactionID</b> fields must be used to identify the Selling Manager email log to retrieve. You can use <b>GetSellingManagerSoldListings</b> to retrieve the <b>ItemID</b>, <b>TransactionID</b> or <b>OrderLineItemID</b> values that correspond to the Selling Manager sale record (<b>SaleRecordID</b>). All four of these fields are returned under the <b>SellingManagerSoldTransaction</b> container of the <b>GetSellingManagerSoldListings</b> request.
	 * @var long
	 */
	public $TransactionID;
	/**
	 * The OrderID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A unique identifier that identifies a single line item or multiple line item (Combined Payment) order associated with the Selling Manager email log. <br><br> For a single line item order, the <b>OrderID</b> value is identical to the <b>OrderLineItemID</b> value that is generated upon creation of the order line item. For a Combined Payment order, the <b>OrderID</b> value is created by eBay when the buyer or seller (sharing multiple, common order line items) combines multiple order line items into a Combined Payment order through the eBay site (or when the seller creates Combined Payment order through <b>AddOrder</b>). If an <b>OrderID</b> is used in the request, the <b>OrderLineItemID</b> and <b>ItemID</b>/<b>TransactionID</b> pair are not required.
	 * @var EbayTradingTypeOrderIDType
	 */
	public $OrderID;
	/**
	 * The EmailDateRange
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the earliest (oldest) and latest (most recent) dates to use in a date range filter based on email sent date. Each of the time ranges can be up to 90 days.
	 * @var EbayTradingTypeTimeRangeType
	 */
	public $EmailDateRange;
	/**
	 * The OrderLineItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A unique identifier for an eBay order line item that is associated with the Selling Manager email log. This field is created as soon as there is a commitment to buy from the seller, and its value is based upon the concatenation of <b>ItemID</b> and <b>TransactionID</b>, with a hyphen in between these two IDs. You can use <b>GetSellingManagerSoldListings</b> to retrieve the <b>ItemID</b>, <b>TransactionID</b> or <b>OrderLineItemID</b> values that correspond to the Selling Manager sale record (<b>SaleRecordID</b>). All four of these fields are returned under the <b>SellingManagerSoldTransaction</b> container of the <b>GetSellingManagerSoldListings</b> request. Unless an <b>OrderID</b> or an <b>ItemID</b>/<b>TransactionID</b> pair is specified in the <b>GetSellingManagerSaleRecord</b> request, the <b>OrderLineItemID</b> is required. <br>
	 * @var string
	 */
	public $OrderLineItemID;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param long TransactionID
	 * @param EbayTradingTypeOrderIDType OrderID
	 * @param EbayTradingTypeTimeRangeType EmailDateRange
	 * @param string OrderLineItemID
	 * @return EbayTradingTypeGetSellingManagerEmailLogRequestType
	 */
	public function __construct($_ItemID = null,$_TransactionID = null,$_OrderID = null,$_EmailDateRange = null,$_OrderLineItemID = null)
	{
		EbayTradingWsdlClass::__construct(array('ItemID'=>$_ItemID,'TransactionID'=>$_TransactionID,'OrderID'=>$_OrderID,'EmailDateRange'=>$_EmailDateRange,'OrderLineItemID'=>$_OrderLineItemID));
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
	 * Set EmailDateRange
	 * @param TimeRangeType EmailDateRange
	 * @return TimeRangeType
	 */
	public function setEmailDateRange($_EmailDateRange)
	{
		return ($this->EmailDateRange = $_EmailDateRange);
	}
	/**
	 * Get EmailDateRange
	 * @return EbayTradingTypeTimeRangeType
	 */
	public function getEmailDateRange()
	{
		return $this->EmailDateRange;
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