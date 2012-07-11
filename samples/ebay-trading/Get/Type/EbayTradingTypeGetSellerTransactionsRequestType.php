<?php
/**
 * Class file for EbayTradingTypeGetSellerTransactionsRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetSellerTransactionsRequestType
 * Documentation : Retrieves order line item (transaction) information for the user for which the call is made, and not for any other user.&nbsp;<b>Also for Half.com</b>. (To retrieve order line items for another seller's listings, use GetItemTransactions.)
 * @date 04/07/2012
 */
class EbayTradingTypeGetSellerTransactionsRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ModTimeFrom
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ModTimeFrom and ModTimeTo fields specify a date range for retrieving order line items associated with the seller. The ModTimeFrom field is the starting date range. All of the seller's order line items that were last modified within this date range are returned in the output. The maximum date range that may be specified is 30 days. This field is not applicable if the NumberOfDays date filter is used. <br><br> If you don't specify a ModTimeFrom/ModTimeTo filter, the NumberOfDays time filter is used and it defaults to 30 (days).
	 * @var dateTime
	 */
	public $ModTimeFrom;
	/**
	 * The ModTimeTo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ModTimeFrom and ModTimeTo fields specify a date range for retrieving order line items associated with the seller. The ModTimeTo field is the ending date range. All of the seller's order line items that were last modified within this date range are returned in the output. The maximum date range that may be specified is 30 days. If the ModTimeFrom field is used and the ModTimeTo field is omitted, the ModTimeTo value defaults to the present time or to 30 days past the ModTimeFrom value (if ModTimeFrom value is more than 30 days in the past). This field is not applicable if the NumberOfDays date filter is used. <br><br> If you don't specify a ModTimeFrom/ModTimeTo filter, the NumberOfDays time filter is used and it defaults to 30 (days).
	 * @var dateTime
	 */
	public $ModTimeTo;
	/**
	 * The Pagination
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Child elements control pagination of the output. Use EntriesPerPage property to control the number of transactions to return per call and PageNumber property to specify the page of data to return.
	 * @var EbayTradingTypePaginationType
	 */
	public $Pagination;
	/**
	 * The IncludeFinalValueFee
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether to include Final Value Fee (FVF) in the response. For most listing types, the Final Value Fee is returned in Transaction.FinalValueFee. The Final Value Fee is returned for each order line item. <br>
	 * @var boolean
	 */
	public $IncludeFinalValueFee;
	/**
	 * The IncludeContainingOrder
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Include this field and set it to True if you want the ContainingOrder container to be returned in the response under each Transaction node. For single line item orders, the ContainingOrder.OrderID value takes the value of the OrderLineItemID value for the order line item. For Combined Payment orders, the ContainingOrder.OrderID value will be shared by at least two order line items (transactions) that are part of the same order.
	 * @var boolean
	 */
	public $IncludeContainingOrder;
	/**
	 * The SKUArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container for a set of SKUs. Filters (reduces) the response to only include order line items for listings that include any of the specified SKUs. If multiple listings include the same SKU, order line items for all of them are returned (assuming they also match the other criteria in the GetSellerTransactions request).<br> <br> You can combine SKUArray with InventoryTrackingMethod. For example, if you also pass in InventoryTrackingMethod=SKU, the response only includes order line items for listings that include InventoryTrackingMethod=SKU and one of the requested SKUs.
	 * @var EbayTradingTypeSKUArrayType
	 */
	public $SKUArray;
	/**
	 * The Platform
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Name of the eBay co-branded site upon which the order line item was made. This will serve as a filter for the order line items to get emitted in the response.
	 * @var EbayTradingTypeTransactionPlatformCodeType
	 */
	public $Platform;
	/**
	 * The NumberOfDays
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : NumberOfDays enables you to specify the number of days' worth of new and modified order line items that you want to retrieve. The call response contains the order line items whose status was modified within the specified number of days since the API call was made. NumberOfDays is often preferable to using the ModTimeFrom and ModTimeTo filters because you only need to specify one value. If you use NumberOfDays, then ModTimeFrom and ModTimeTo are ignored. For this field, one day is defined as 24 hours.
	 * @var int
	 */
	public $NumberOfDays;
	/**
	 * The InventoryTrackingMethod
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Filters the response to only include order line items for listings that match this InventoryTrackingMethod setting. <br> <br> For example, if you set this to SKU, the call returns order line items for your listings that are tracked by SKU. If you set this to ItemID, the call omits order line items for your listings that are tracked by SKU. If you don't pass this in, the call returns all order line items, regardless of whether they are tracked by SKU or ItemID.<br> <br> <span class="tablenote"><b>Note:</b> To specify InventoryTrackingMethod when you create a listing, use AddFixedPriceItem or RelistFixedPriceItem. AddFixedPriceItem and RelistFixedPriceItem are defined in the Merchant Data API (part of Large Merchant Services). </span> <br> <br> You can combine SKUArray with InventoryTrackingMethod. For example, if you set this to SKU and you also pass in SKUArray, the response only includes order line items for listings that include InventoryTrackingMethod=SKU and one of the requested SKUs.
	 * @var EbayTradingTypeInventoryTrackingMethodCodeType
	 */
	public $InventoryTrackingMethod;
	/**
	 * The IncludeCodiceFiscale
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If this flag is included in the request and set to 'true', the buyer's Codice Fiscale number is returned in the response (if provided by the buyer). <br/><br/> This field is only applicable to Italian sellers. The Codice Fiscale number is unique for each Italian citizen and is used for tax purposes.
	 * @var boolean
	 */
	public $IncludeCodiceFiscale;
	/**
	 * Constructor
	 * @param dateTime ModTimeFrom
	 * @param dateTime ModTimeTo
	 * @param EbayTradingTypePaginationType Pagination
	 * @param boolean IncludeFinalValueFee
	 * @param boolean IncludeContainingOrder
	 * @param EbayTradingTypeSKUArrayType SKUArray
	 * @param EbayTradingTypeTransactionPlatformCodeType Platform
	 * @param int NumberOfDays
	 * @param EbayTradingTypeInventoryTrackingMethodCodeType InventoryTrackingMethod
	 * @param boolean IncludeCodiceFiscale
	 * @return EbayTradingTypeGetSellerTransactionsRequestType
	 */
	public function __construct($_ModTimeFrom = null,$_ModTimeTo = null,$_Pagination = null,$_IncludeFinalValueFee = null,$_IncludeContainingOrder = null,$_SKUArray = null,$_Platform = null,$_NumberOfDays = null,$_InventoryTrackingMethod = null,$_IncludeCodiceFiscale = null)
	{
		EbayTradingWsdlClass::__construct(array('ModTimeFrom'=>$_ModTimeFrom,'ModTimeTo'=>$_ModTimeTo,'Pagination'=>$_Pagination,'IncludeFinalValueFee'=>$_IncludeFinalValueFee,'IncludeContainingOrder'=>$_IncludeContainingOrder,'SKUArray'=>$_SKUArray,'Platform'=>$_Platform,'NumberOfDays'=>$_NumberOfDays,'InventoryTrackingMethod'=>$_InventoryTrackingMethod,'IncludeCodiceFiscale'=>$_IncludeCodiceFiscale));
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
	 * Set SKUArray
	 * @param SKUArrayType SKUArray
	 * @return SKUArrayType
	 */
	public function setSKUArray($_SKUArray)
	{
		return ($this->SKUArray = $_SKUArray);
	}
	/**
	 * Get SKUArray
	 * @return EbayTradingTypeSKUArrayType
	 */
	public function getSKUArray()
	{
		return $this->SKUArray;
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
	 * Set InventoryTrackingMethod
	 * @param InventoryTrackingMethodCodeType InventoryTrackingMethod
	 * @return InventoryTrackingMethodCodeType
	 */
	public function setInventoryTrackingMethod($_InventoryTrackingMethod)
	{
		return ($this->InventoryTrackingMethod = EbayTradingTypeInventoryTrackingMethodCodeType::valueIsValid($_InventoryTrackingMethod)?$_InventoryTrackingMethod:null);
	}
	/**
	 * Get InventoryTrackingMethod
	 * @return EbayTradingTypeInventoryTrackingMethodCodeType
	 */
	public function getInventoryTrackingMethod()
	{
		return $this->InventoryTrackingMethod;
	}
	/**
	 * Set IncludeCodiceFiscale
	 * @param boolean IncludeCodiceFiscale
	 * @return boolean
	 */
	public function setIncludeCodiceFiscale($_IncludeCodiceFiscale)
	{
		return ($this->IncludeCodiceFiscale = $_IncludeCodiceFiscale);
	}
	/**
	 * Get IncludeCodiceFiscale
	 * @return boolean
	 */
	public function getIncludeCodiceFiscale()
	{
		return $this->IncludeCodiceFiscale;
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