<?php
/**
 * Class file for EbayTradingTypeGetOrdersRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetOrdersRequestType
 * Documentation : Retrieves the orders for which the authenticated user is a participant, either as the buyer or the seller.&nbsp;<b>Also for Half.com</b>. The call returns all the orders that meet the request specifications.
 * @date 04/07/2012
 */
class EbayTradingTypeGetOrdersRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The OrderIDArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A container for eBay order IDs. If one or more order IDs are specified in this container, no other call-specific input fields are applicable. <br><br> Not applicable to Half.com.
	 * @var EbayTradingTypeOrderIDArrayType
	 */
	public $OrderIDArray;
	/**
	 * The CreateTimeFrom
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The CreateTimeFrom and CreateTimeTo fields specify a date range for retrieving orders. The CreateTimeFrom field is the starting date range. All eBay orders that were created within this date range are returned in the output. The maximum date range that may be specified is 30 days. This field is not applicable if one or more order IDs are passed in the request. <br> Applicable to Half.com.
	 * @var dateTime
	 */
	public $CreateTimeFrom;
	/**
	 * The CreateTimeTo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The CreateTimeFrom and CreateTimeTo fields specify a date range for retrieving orders. The CreateTimeTo field is the ending date range. All eBay orders that were created within this date range are returned in the output. The maximum date range that may be specified is 30 days. If the CreateTimeFrom field is used and the CreateTimeTo field is omitted, the "TimeTo" value defaults to the present time or to 30 days past the CreateTimeFrom value (if CreateTimeFrom value is more than 30 days in the past). This field is not applicable if one or more order IDs are passed in the request. <br><br> <span class="tablenote"><strong>Note:</strong> If a GetOrders call is made within a few seconds after the creation of a multiple line item order, the caller runs the risk of retrieiving orders that are in an inconsistent state, since the order consolidation involved in a multi-line item order may not have been completed. For this reason, it is recommended that sellers include the <b>CreateTimeTo</b> field in the call, and set its value to: <i> Current Time</i> - 2 minutes. <br><br> Applicable to Half.com.
	 * @var dateTime
	 */
	public $CreateTimeTo;
	/**
	 * The OrderRole
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Filters the returned orders based on the role of the user. The user's role is either buyer or seller. If this field is used with a date filter, returned orders must satisfy both the date range and the OrderRole value. <br> Applicable to eBay.com and Half.com.
	 * @var EbayTradingTypeTradingRoleCodeType
	 */
	public $OrderRole;
	/**
	 * The OrderStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Filters the returned orders by order status. For eBay orders, only the Active and Completed values are applicable. The Shipping value can be used for Half.com orders. If this field is used with a date filter, returned orders must satisfy both the date range and the OrderStatus value. <br><br> To retrieve orders with a status of Inactive or Cancelled, you must specify the order IDs (OrderIDArray.OrderID). When you specify order IDs, no other filters may be used. <br><br> For Half.com, you can get some, but not all orders. Orders on Half.com have different order status values from eBay orders. When you set ListingType to Half, set OrderStatus to Shipped. Otherwise, GetOrders may return incomplete information or have indeterminate results.
	 * @var EbayTradingTypeOrderStatusCodeType
	 */
	public $OrderStatus;
	/**
	 * The ListingType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specify Half to retrieve Half.com orders. <br><br> <span class="tablenote"><strong>Note:</strong> Do not use this field if you are retrieving eBay orders. <br><br> This field cannnot be used as a listing type filter on eBay.com. If not provided, or if you specify any value other than Half, this field has no useful effect and the call retrieves eBay orders of all types. Also, you can't retrieve both eBay and Half.com orders in the same response. </span>
	 * @var EbayTradingTypeListingTypeCodeType
	 */
	public $ListingType;
	/**
	 * The Pagination
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If many orders are available to retrieve, you may need to call GetOrders multiple times to retrieve all the data. Each result set is returned as a page of entries. Use the Pagination filters to control the maximum number of entries to retrieve per page (i.e., per call), the page number to retrieve, and other data.
	 * @var EbayTradingTypePaginationType
	 */
	public $Pagination;
	/**
	 * The ModTimeFrom
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ModTimeFrom and ModTimeTo fields specify a date range for retrieving orders. The ModTimeFrom field is the starting date range. All eBay orders that were last modified within this date range are returned in the output. The maximum date range that may be specified is 30 days. This field is not applicable if one or more order IDs are passed in the request, or if the CreateTimeFrom/CreateTimeTo or NumberOfDays date filters are used in the request. <br><br> Applicable to Half.com.
	 * @var dateTime
	 */
	public $ModTimeFrom;
	/**
	 * The ModTimeTo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ModTimeFrom and ModTimeTo fields specify a date range for retrieving orders. The ModTimeTo field is the ending date range. All eBay orders that were last modified within this date range are returned in the output. The maximum date range that may be specified is 30 days. If the ModTimeFrom field is used and the ModTimeTo field is omitted, the "TimeTo" value defaults to the present time or to 30 days past the ModTimeFrom value (if ModTimeFrom value is more than 30 days in the past). This field is not applicable if one or more order IDs are passed in the request, or if the CreateTimeFrom/CreateTimeTo or NumberOfDays date filters are used in the request. <br><br> Applicable to Half.com.
	 * @var dateTime
	 */
	public $ModTimeTo;
	/**
	 * The NumberOfDays
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This filter specifies the number of days (24-hour periods) in the past to search for orders. All eBay orders that were either created or modified within this period are returned in the output. This field cannot be used in conjunction with the CreateTimeFrom/CreateTimeTo or ModTimeFrom/ModTimeTo date filters. <br><br> Applicable to Half.com.
	 * @var int
	 */
	public $NumberOfDays;
	/**
	 * The IncludeFinalValueFee
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether to include the Final Value Fee (FVF) for all Transaction objects in the response. The Final Value Fee is returned in Transaction.FinalValueFee. The Final Value Fee is assessed right after the creation of an eBay order line item. <br>
	 * @var boolean
	 */
	public $IncludeFinalValueFee;
	/**
	 * Constructor
	 * @param EbayTradingTypeOrderIDArrayType OrderIDArray
	 * @param dateTime CreateTimeFrom
	 * @param dateTime CreateTimeTo
	 * @param EbayTradingTypeTradingRoleCodeType OrderRole
	 * @param EbayTradingTypeOrderStatusCodeType OrderStatus
	 * @param EbayTradingTypeListingTypeCodeType ListingType
	 * @param EbayTradingTypePaginationType Pagination
	 * @param dateTime ModTimeFrom
	 * @param dateTime ModTimeTo
	 * @param int NumberOfDays
	 * @param boolean IncludeFinalValueFee
	 * @return EbayTradingTypeGetOrdersRequestType
	 */
	public function __construct($_OrderIDArray = null,$_CreateTimeFrom = null,$_CreateTimeTo = null,$_OrderRole = null,$_OrderStatus = null,$_ListingType = null,$_Pagination = null,$_ModTimeFrom = null,$_ModTimeTo = null,$_NumberOfDays = null,$_IncludeFinalValueFee = null)
	{
		EbayTradingWsdlClass::__construct(array('OrderIDArray'=>$_OrderIDArray,'CreateTimeFrom'=>$_CreateTimeFrom,'CreateTimeTo'=>$_CreateTimeTo,'OrderRole'=>$_OrderRole,'OrderStatus'=>$_OrderStatus,'ListingType'=>$_ListingType,'Pagination'=>$_Pagination,'ModTimeFrom'=>$_ModTimeFrom,'ModTimeTo'=>$_ModTimeTo,'NumberOfDays'=>$_NumberOfDays,'IncludeFinalValueFee'=>$_IncludeFinalValueFee));
	}
	/**
	 * Set OrderIDArray
	 * @param OrderIDArrayType OrderIDArray
	 * @return OrderIDArrayType
	 */
	public function setOrderIDArray($_OrderIDArray)
	{
		return ($this->OrderIDArray = $_OrderIDArray);
	}
	/**
	 * Get OrderIDArray
	 * @return EbayTradingTypeOrderIDArrayType
	 */
	public function getOrderIDArray()
	{
		return $this->OrderIDArray;
	}
	/**
	 * Set CreateTimeFrom
	 * @param dateTime CreateTimeFrom
	 * @return dateTime
	 */
	public function setCreateTimeFrom($_CreateTimeFrom)
	{
		return ($this->CreateTimeFrom = $_CreateTimeFrom);
	}
	/**
	 * Get CreateTimeFrom
	 * @return dateTime
	 */
	public function getCreateTimeFrom()
	{
		return $this->CreateTimeFrom;
	}
	/**
	 * Set CreateTimeTo
	 * @param dateTime CreateTimeTo
	 * @return dateTime
	 */
	public function setCreateTimeTo($_CreateTimeTo)
	{
		return ($this->CreateTimeTo = $_CreateTimeTo);
	}
	/**
	 * Get CreateTimeTo
	 * @return dateTime
	 */
	public function getCreateTimeTo()
	{
		return $this->CreateTimeTo;
	}
	/**
	 * Set OrderRole
	 * @param TradingRoleCodeType OrderRole
	 * @return TradingRoleCodeType
	 */
	public function setOrderRole($_OrderRole)
	{
		return ($this->OrderRole = EbayTradingTypeTradingRoleCodeType::valueIsValid($_OrderRole)?$_OrderRole:null);
	}
	/**
	 * Get OrderRole
	 * @return EbayTradingTypeTradingRoleCodeType
	 */
	public function getOrderRole()
	{
		return $this->OrderRole;
	}
	/**
	 * Set OrderStatus
	 * @param OrderStatusCodeType OrderStatus
	 * @return OrderStatusCodeType
	 */
	public function setOrderStatus($_OrderStatus)
	{
		return ($this->OrderStatus = EbayTradingTypeOrderStatusCodeType::valueIsValid($_OrderStatus)?$_OrderStatus:null);
	}
	/**
	 * Get OrderStatus
	 * @return EbayTradingTypeOrderStatusCodeType
	 */
	public function getOrderStatus()
	{
		return $this->OrderStatus;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>