<?php
/**
 * Class file for EbayTradingTypeItemListCustomizationType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeItemListCustomizationType
 * Documentation : Defines how a list of items should be returned.
 * @date 04/07/2012
 */
class EbayTradingTypeItemListCustomizationType extends EbayTradingWsdlClass
{
	/**
	 * The Include
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies whether or not to include the container in the response. Set the value to true to return the default set of fields for the container. Not needed if you set a value for at least one other field in the container. <br><br> If you set DetailLevel to ReturnAll, set Include to false to exclude the container from the response.
	 * @var boolean
	 */
	public $Include;
	/**
	 * The ListingType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the listing type of items in the returned list.
	 * @var EbayTradingTypeListingTypeCodeType
	 */
	public $ListingType;
	/**
	 * The Sort
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the sort order of the result. Default is Ascending.
	 * @var EbayTradingTypeItemSortTypeCodeType
	 */
	public $Sort;
	/**
	 * The DurationInDays
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the time period during which an item was won or lost. Similar to the period drop-down menu in the My eBay user interface. For example, to return the items won or lost in the last week, specify a DurationInDays of 7.
	 * @var int
	 */
	public $DurationInDays;
	/**
	 * The IncludeNotes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies whether or not to include Item.PrivateNotes and Item.eBayNotes in the response.
	 * @var boolean
	 */
	public $IncludeNotes;
	/**
	 * The Pagination
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies how to create virtual pages in the returned list. <br> Default for EntriesPerPage with GetMyeBayBuying is 200.
	 * @var EbayTradingTypePaginationType
	 */
	public $Pagination;
	/**
	 * The OrderStatusFilter
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Filter to reduce the SoldList response based on whether the seller (or eBay) marked the applicable order as Paid and/or Shipped in My eBay.<br> <br> (Sellers can use CompleteSale or the eBay Web site UI to mark an order as Paid or Shipped in My eBay. Sellers can also specify PaymentStatus in ReviseCheckoutStatus to mark an order as Paid or awaiting payment in My eBay.)
	 * @var EbayTradingTypeOrderStatusFilterCodeType
	 */
	public $OrderStatusFilter;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param boolean Include
	 * @param EbayTradingTypeListingTypeCodeType ListingType
	 * @param EbayTradingTypeItemSortTypeCodeType Sort
	 * @param int DurationInDays
	 * @param boolean IncludeNotes
	 * @param EbayTradingTypePaginationType Pagination
	 * @param EbayTradingTypeOrderStatusFilterCodeType OrderStatusFilter
	 * @param DOMDocument any
	 * @return EbayTradingTypeItemListCustomizationType
	 */
	public function __construct($_Include = null,$_ListingType = null,$_Sort = null,$_DurationInDays = null,$_IncludeNotes = null,$_Pagination = null,$_OrderStatusFilter = null,$_any = null)
	{
		parent::__construct(array('Include'=>$_Include,'ListingType'=>$_ListingType,'Sort'=>$_Sort,'DurationInDays'=>$_DurationInDays,'IncludeNotes'=>$_IncludeNotes,'Pagination'=>$_Pagination,'OrderStatusFilter'=>$_OrderStatusFilter,'any'=>$_any));
	}
	/**
	 * Set Include
	 * @param boolean Include
	 * @return boolean
	 */
	public function setInclude($_Include)
	{
		return ($this->Include = $_Include);
	}
	/**
	 * Get Include
	 * @return boolean
	 */
	public function getInclude()
	{
		return $this->Include;
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
	 * Set Sort
	 * @param ItemSortTypeCodeType Sort
	 * @return ItemSortTypeCodeType
	 */
	public function setSort($_Sort)
	{
		return ($this->Sort = EbayTradingTypeItemSortTypeCodeType::valueIsValid($_Sort)?$_Sort:null);
	}
	/**
	 * Get Sort
	 * @return EbayTradingTypeItemSortTypeCodeType
	 */
	public function getSort()
	{
		return $this->Sort;
	}
	/**
	 * Set DurationInDays
	 * @param int DurationInDays
	 * @return int
	 */
	public function setDurationInDays($_DurationInDays)
	{
		return ($this->DurationInDays = $_DurationInDays);
	}
	/**
	 * Get DurationInDays
	 * @return int
	 */
	public function getDurationInDays()
	{
		return $this->DurationInDays;
	}
	/**
	 * Set IncludeNotes
	 * @param boolean IncludeNotes
	 * @return boolean
	 */
	public function setIncludeNotes($_IncludeNotes)
	{
		return ($this->IncludeNotes = $_IncludeNotes);
	}
	/**
	 * Get IncludeNotes
	 * @return boolean
	 */
	public function getIncludeNotes()
	{
		return $this->IncludeNotes;
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
	 * Set OrderStatusFilter
	 * @param OrderStatusFilterCodeType OrderStatusFilter
	 * @return OrderStatusFilterCodeType
	 */
	public function setOrderStatusFilter($_OrderStatusFilter)
	{
		return ($this->OrderStatusFilter = EbayTradingTypeOrderStatusFilterCodeType::valueIsValid($_OrderStatusFilter)?$_OrderStatusFilter:null);
	}
	/**
	 * Get OrderStatusFilter
	 * @return EbayTradingTypeOrderStatusFilterCodeType
	 */
	public function getOrderStatusFilter()
	{
		return $this->OrderStatusFilter;
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