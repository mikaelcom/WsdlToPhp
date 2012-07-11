<?php
/**
 * Class file for EbayTradingTypeGetSellingManagerSoldListingsRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetSellingManagerSoldListingsRequestType
 * Documentation : Returns a Selling Manager user's sold listings. <br><br> This call is subject to change without notice; the deprecation process is inapplicable to this call.
 * @date 04/07/2012
 */
class EbayTradingTypeGetSellingManagerSoldListingsRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The Search
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Search filters for sold listings.
	 * @var EbayTradingTypeSellingManagerSearchType
	 */
	public $Search;
	/**
	 * The StoreCategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Listings with this store category ID will be listed.
	 * @var long
	 */
	public $StoreCategoryID;
	/**
	 * The Filter
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : This holds the list of filters that can be applicable for sold listings.
	 * @var EbayTradingTypeSellingManagerSoldListingsPropertyTypeCodeType
	 */
	public $Filter;
	/**
	 * The Archived
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Requests listing records that are more than 90 days old. Records are archived between 90 and 120 days after being created, and thereafter can only be retrieved using this tag.
	 * @var boolean
	 */
	public $Archived;
	/**
	 * The Sort
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Field to be used to sort the response.
	 * @var EbayTradingTypeSellingManagerSoldListingsSortTypeCodeType
	 */
	public $Sort;
	/**
	 * The SortOrder
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Order to be used for sorting the requested listings.
	 * @var EbayTradingTypeSortOrderCodeType
	 */
	public $SortOrder;
	/**
	 * The Pagination
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Details about how many listings to return per page and which page to view.
	 * @var EbayTradingTypePaginationType
	 */
	public $Pagination;
	/**
	 * The SaleDateRange
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the earliest (oldest) and latest (most recent) dates to use in a date range filter based on item start time. A time range can be up to 120 days.
	 * @var EbayTradingTypeTimeRangeType
	 */
	public $SaleDateRange;
	/**
	 * Constructor
	 * @param EbayTradingTypeSellingManagerSearchType Search
	 * @param long StoreCategoryID
	 * @param EbayTradingTypeSellingManagerSoldListingsPropertyTypeCodeType Filter
	 * @param boolean Archived
	 * @param EbayTradingTypeSellingManagerSoldListingsSortTypeCodeType Sort
	 * @param EbayTradingTypeSortOrderCodeType SortOrder
	 * @param EbayTradingTypePaginationType Pagination
	 * @param EbayTradingTypeTimeRangeType SaleDateRange
	 * @return EbayTradingTypeGetSellingManagerSoldListingsRequestType
	 */
	public function __construct($_Search = null,$_StoreCategoryID = null,$_Filter = null,$_Archived = null,$_Sort = null,$_SortOrder = null,$_Pagination = null,$_SaleDateRange = null)
	{
		EbayTradingWsdlClass::__construct(array('Search'=>$_Search,'StoreCategoryID'=>$_StoreCategoryID,'Filter'=>$_Filter,'Archived'=>$_Archived,'Sort'=>$_Sort,'SortOrder'=>$_SortOrder,'Pagination'=>$_Pagination,'SaleDateRange'=>$_SaleDateRange));
	}
	/**
	 * Set Search
	 * @param SellingManagerSearchType Search
	 * @return SellingManagerSearchType
	 */
	public function setSearch($_Search)
	{
		return ($this->Search = $_Search);
	}
	/**
	 * Get Search
	 * @return EbayTradingTypeSellingManagerSearchType
	 */
	public function getSearch()
	{
		return $this->Search;
	}
	/**
	 * Set StoreCategoryID
	 * @param long StoreCategoryID
	 * @return long
	 */
	public function setStoreCategoryID($_StoreCategoryID)
	{
		return ($this->StoreCategoryID = $_StoreCategoryID);
	}
	/**
	 * Get StoreCategoryID
	 * @return long
	 */
	public function getStoreCategoryID()
	{
		return $this->StoreCategoryID;
	}
	/**
	 * Set Filter
	 * @param SellingManagerSoldListingsPropertyTypeCodeType Filter
	 * @return SellingManagerSoldListingsPropertyTypeCodeType
	 */
	public function setFilter($_Filter)
	{
		return ($this->Filter = EbayTradingTypeSellingManagerSoldListingsPropertyTypeCodeType::valueIsValid($_Filter)?$_Filter:null);
	}
	/**
	 * Get Filter
	 * @return EbayTradingTypeSellingManagerSoldListingsPropertyTypeCodeType
	 */
	public function getFilter()
	{
		return $this->Filter;
	}
	/**
	 * Set Archived
	 * @param boolean Archived
	 * @return boolean
	 */
	public function setArchived($_Archived)
	{
		return ($this->Archived = $_Archived);
	}
	/**
	 * Get Archived
	 * @return boolean
	 */
	public function getArchived()
	{
		return $this->Archived;
	}
	/**
	 * Set Sort
	 * @param SellingManagerSoldListingsSortTypeCodeType Sort
	 * @return SellingManagerSoldListingsSortTypeCodeType
	 */
	public function setSort($_Sort)
	{
		return ($this->Sort = EbayTradingTypeSellingManagerSoldListingsSortTypeCodeType::valueIsValid($_Sort)?$_Sort:null);
	}
	/**
	 * Get Sort
	 * @return EbayTradingTypeSellingManagerSoldListingsSortTypeCodeType
	 */
	public function getSort()
	{
		return $this->Sort;
	}
	/**
	 * Set SortOrder
	 * @param SortOrderCodeType SortOrder
	 * @return SortOrderCodeType
	 */
	public function setSortOrder($_SortOrder)
	{
		return ($this->SortOrder = EbayTradingTypeSortOrderCodeType::valueIsValid($_SortOrder)?$_SortOrder:null);
	}
	/**
	 * Get SortOrder
	 * @return EbayTradingTypeSortOrderCodeType
	 */
	public function getSortOrder()
	{
		return $this->SortOrder;
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
	 * Set SaleDateRange
	 * @param TimeRangeType SaleDateRange
	 * @return TimeRangeType
	 */
	public function setSaleDateRange($_SaleDateRange)
	{
		return ($this->SaleDateRange = $_SaleDateRange);
	}
	/**
	 * Get SaleDateRange
	 * @return EbayTradingTypeTimeRangeType
	 */
	public function getSaleDateRange()
	{
		return $this->SaleDateRange;
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