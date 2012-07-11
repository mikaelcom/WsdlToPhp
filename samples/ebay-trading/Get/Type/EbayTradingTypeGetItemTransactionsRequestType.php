<?php
/**
 * Class file for EbayTradingTypeGetItemTransactionsRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetItemTransactionsRequestType
 * Documentation : Retrieves order line item (transaction) information for a specified <b>ItemID</b>. & nbsp;<b>Also for Half.com</b>. The call returns zero, one, or multiple order line items, depending on the number of items sold from the listing. <br><br> You can retrieve order line item data for a specific time range or number of days. If you don't specify a range or number of days, order line item data will be returned for the past 30 days.
 * @date 04/07/2012
 */
class EbayTradingTypeGetItemTransactionsRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for an eBay item listing. A listing can have multiple order line items (transactions), but only one <b>ItemID</b>. When you use <b>ItemID</b> alone, eBay returns all order line items that are associated with the <b>ItemID</b> (listing). If you pair <b>ItemID</b> with a specific <b>TransactionID</b>, data on a specific order line item is returned. If <b>OrderLineItemID</b> is specified in the request, any <b>ItemID</b>/<b>TransactionID</b> pair specified in the same request will be ignored. <br> <br> <span class="tablenote"><b>Note:</b> <b>GetItemTransactions</b> doesn't support SKU as an input because this call requires an identifier that is unique across your active and ended listings. Even when <b>InventoryTrackingMethod</b> is set to <b>SKU</b> in a listing, the SKU is only unique across your active listings (not your ended listings). To retrieve order line items by SKU, use <b>GetSellerTransactions</b> or <b>GetOrderTransactions</b> instead. </span>
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The ModTimeFrom
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The <b>ModTimeFrom</b> and <b>ModTimeTo</b> fields specify a date range for retrieving order line items associated with the specified <b>ItemID</b>. The <b>ModTimeFrom</b> field is the starting date range. All eBay order line items that were last modified within this date range are returned in the output. The maximum date range that may be specified is 30 days. This field is not applicable if a specific <b>TransactionID</b> or <b>OrderLineItemID</b> is included in the request or if the <b>NumberOfDays</b> date filter is used. <br><br> If you don't specify a <b>ModTimeFrom</b>/<b>ModTimeTo</b> filter, the <b>NumberOfDays</b> time filter is used and it defaults to 30 (days).
	 * @var dateTime
	 */
	public $ModTimeFrom;
	/**
	 * The ModTimeTo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The <b>ModTimeFrom</b> and <b>ModTimeTo</b> fields specify a date range for retrieving order line items associated with the specified <b>ItemID</b>. The <b>ModTimeTo</b> field is the ending date range. All eBay order line items that were last modified within this date range are returned in the output. The maximum date range that may be specified is 30 days. If the <b>ModTimeFrom</b> field is used and the <b>ModTimeTo</b> field is omitted, the <b>ModTimeTo</b> value defaults to the present time or to 30 days past the <b>ModTimeFrom</b> value (if <b>ModTimeFrom</b> value is more than 30 days in the past). This field is not applicable if a specific <b>TransactionID</b> or <b>OrderLineItemID</b> is included in the request or if the <b>NumberOfDays</b> date filter is used. <br><br> If you don't specify a <b>ModTimeFrom</b>/<b>ModTimeTo</b> filter, the <b>NumberOfDays</b> time filter is used and it defaults to 30 (days).
	 * @var dateTime
	 */
	public $ModTimeTo;
	/**
	 * The TransactionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Include a <b>TransactionID</b> field in the request if you want to retrieve the data for a specific order line item (transaction). If a <b>TransactionID</b> is provided, any specified time filter is ignored.
	 * @var string
	 */
	public $TransactionID;
	/**
	 * The Pagination
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Child elements control pagination of the output. Use the <b>EntriesPerPage</b> property to control the number of order line items to return per call and the <b>PageNumber</b> property to specify the specific page of data to return. If multiple pages of order line items are returned based on input criteria and Pagination properties, <b>GetItemTransactions</b> will need to be called multiple times (with the <b>PageNumber</b> value being increased by 1 each time) to scroll through all results.
	 * @var EbayTradingTypePaginationType
	 */
	public $Pagination;
	/**
	 * The IncludeFinalValueFee
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether to include the Final Value Fee (FVF) for all order line items in the response. The Final Value Fee is returned in the <b>Transaction.FinalValueFee</b> field. The Final Value Fee is assessed right after the creation of an order line item. <br>
	 * @var boolean
	 */
	public $IncludeFinalValueFee;
	/**
	 * The IncludeContainingOrder
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Include this field and set it to True if you want the <b>ContainingOrder</b> container to be returned in the response under each <b>Transaction</b> node. For single line item orders, the <b>ContainingOrder.OrderID</b> value takes the value of the <b>OrderLineItemID</b> value for the order line item. For Combined Payment orders, the <b>ContainingOrder.OrderID</b> value will be shared by at least two order line items (transactions) that are part of the same order.
	 * @var boolean
	 */
	public $IncludeContainingOrder;
	/**
	 * The Platform
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Name of the eBay co-branded site upon which the order line item was created. This filter can be used to limit the number of results that are returned.
	 * @var EbayTradingTypeTransactionPlatformCodeType
	 */
	public $Platform;
	/**
	 * The NumberOfDays
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This time filter specifies the number of days (24-hour periods) in the past to search for order line items. All eBay order line items that were either created or modified within this period are returned in the response. If specified, <b>NumberOfDays</b> will override any date range specified with the <b>ModTimeFrom</b>/<b>ModTimeTo</b> time filters. This field is not applicable if a specific <b>TransactionID</b> or <b>OrderLineItemID</b> is included in the request.
	 * @var int
	 */
	public $NumberOfDays;
	/**
	 * The IncludeVariations
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If included in the request and set to True, all variations defined for the item are returned at the root level, including variations that have no sales. If not included in the request or set to false, the variations with sales are still returned in separate <b>Transaction</b> nodes. This information is intended to help sellers to reconcile their local inventory with eBay's records, while processing order line items (without requiring a separate call to <b>GetItem</b>).
	 * @var boolean
	 */
	public $IncludeVariations;
	/**
	 * The OrderLineItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A unique identifier for an eBay order line item. This field is created as soon as there is a commitment to buy from the seller, and its value is based upon the concatenation of <b>ItemID</b> and <b>TransactionID</b>, with a hyphen in between these two IDs. If you want to retrieve data on a specific order line item, you can use an <b>OrderLineItemID</b> value in the request instead of the <b>ItemID</b>/<b>TransactionID</b> pair. If an <b>OrderLineItemID</b> is provided, any specified time filter is ignored.
	 * @var string
	 */
	public $OrderLineItemID;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param dateTime ModTimeFrom
	 * @param dateTime ModTimeTo
	 * @param string TransactionID
	 * @param EbayTradingTypePaginationType Pagination
	 * @param boolean IncludeFinalValueFee
	 * @param boolean IncludeContainingOrder
	 * @param EbayTradingTypeTransactionPlatformCodeType Platform
	 * @param int NumberOfDays
	 * @param boolean IncludeVariations
	 * @param string OrderLineItemID
	 * @return EbayTradingTypeGetItemTransactionsRequestType
	 */
	public function __construct($_ItemID = null,$_ModTimeFrom = null,$_ModTimeTo = null,$_TransactionID = null,$_Pagination = null,$_IncludeFinalValueFee = null,$_IncludeContainingOrder = null,$_Platform = null,$_NumberOfDays = null,$_IncludeVariations = null,$_OrderLineItemID = null)
	{
		EbayTradingWsdlClass::__construct(array('ItemID'=>$_ItemID,'ModTimeFrom'=>$_ModTimeFrom,'ModTimeTo'=>$_ModTimeTo,'TransactionID'=>$_TransactionID,'Pagination'=>$_Pagination,'IncludeFinalValueFee'=>$_IncludeFinalValueFee,'IncludeContainingOrder'=>$_IncludeContainingOrder,'Platform'=>$_Platform,'NumberOfDays'=>$_NumberOfDays,'IncludeVariations'=>$_IncludeVariations,'OrderLineItemID'=>$_OrderLineItemID));
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
	 * Set ModTimeFrom
	 * @param dateTime ModTimeFrom
	 * @return dateTime
	 */
	public function setModTimeFrom($_ModTimeFrom)
	{
		return ($this->ModTimeFrom = $_ModTimeFrom);
	}
	/**
	 * Get ModTimeFrom
	 * @return dateTime
	 */
	public function getModTimeFrom()
	{
		return $this->ModTimeFrom;
	}
	/**
	 * Set ModTimeTo
	 * @param dateTime ModTimeTo
	 * @return dateTime
	 */
	public function setModTimeTo($_ModTimeTo)
	{
		return ($this->ModTimeTo = $_ModTimeTo);
	}
	/**
	 * Get ModTimeTo
	 * @return dateTime
	 */
	public function getModTimeTo()
	{
		return $this->ModTimeTo;
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
	 * Set Pagination
	 * @param PaginationType Pagination
	 * @return PaginationType
	 */
	public function setPagination($_Pagination)
	{
		return ($this->Pagination = $_Pagination);
	}
	/**
	 * Get Pagination
	 * @return EbayTradingTypePaginationType
	 */
	public function getPagination()
	{
		return $this->Pagination;
	}
	/**
	 * Set IncludeFinalValueFee
	 * @param boolean IncludeFinalValueFee
	 * @return boolean
	 */
	public function setIncludeFinalValueFee($_IncludeFinalValueFee)
	{
		return ($this->IncludeFinalValueFee = $_IncludeFinalValueFee);
	}
	/**
	 * Get IncludeFinalValueFee
	 * @return boolean
	 */
	public function getIncludeFinalValueFee()
	{
		return $this->IncludeFinalValueFee;
	}
	/**
	 * Set IncludeContainingOrder
	 * @param boolean IncludeContainingOrder
	 * @return boolean
	 */
	public function setIncludeContainingOrder($_IncludeContainingOrder)
	{
		return ($this->IncludeContainingOrder = $_IncludeContainingOrder);
	}
	/**
	 * Get IncludeContainingOrder
	 * @return boolean
	 */
	public function getIncludeContainingOrder()
	{
		return $this->IncludeContainingOrder;
	}
	/**
	 * Set Platform
	 * @param TransactionPlatformCodeType Platform
	 * @return TransactionPlatformCodeType
	 */
	public function setPlatform($_Platform)
	{
		return ($this->Platform = EbayTradingTypeTransactionPlatformCodeType::valueIsValid($_Platform)?$_Platform:null);
	}
	/**
	 * Get Platform
	 * @return EbayTradingTypeTransactionPlatformCodeType
	 */
	public function getPlatform()
	{
		return $this->Platform;
	}
	/**
	 * Set NumberOfDays
	 * @param int NumberOfDays
	 * @return int
	 */
	public function setNumberOfDays($_NumberOfDays)
	{
		return ($this->NumberOfDays = $_NumberOfDays);
	}
	/**
	 * Get NumberOfDays
	 * @return int
	 */
	public function getNumberOfDays()
	{
		return $this->NumberOfDays;
	}
	/**
	 * Set IncludeVariations
	 * @param boolean IncludeVariations
	 * @return boolean
	 */
	public function setIncludeVariations($_IncludeVariations)
	{
		return ($this->IncludeVariations = $_IncludeVariations);
	}
	/**
	 * Get IncludeVariations
	 * @return boolean
	 */
	public function getIncludeVariations()
	{
		return $this->IncludeVariations;
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