<?php
/**
 * Class file for EbayTradingTypeGetSellingManagerInventoryRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetSellingManagerInventoryRequestType
 * Documentation : Retrieves a paginated list containing details of a user's Selling Manager inventory. This call is subject to change without notice; the deprecation process is inapplicable to this call.
 * @date 04/07/2012
 */
class EbayTradingTypeGetSellingManagerInventoryRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The Sort
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Sets the sorting method for the results.
	 * @var EbayTradingTypeSellingManagerProductSortCodeType
	 */
	public $Sort;
	/**
	 * The FolderID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the inventory folder containing the requested inventory information.
	 * @var long
	 */
	public $FolderID;
	/**
	 * The Pagination
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Details about how many Products to return per page and which page to view.
	 * @var EbayTradingTypePaginationType
	 */
	public $Pagination;
	/**
	 * The SortOrder
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Order to be used for sorting retrieved product lists.
	 * @var EbayTradingTypeSortOrderCodeType
	 */
	public $SortOrder;
	/**
	 * The Search
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies types and values to search for in the seller's listings.
	 * @var EbayTradingTypeSellingManagerSearchType
	 */
	public $Search;
	/**
	 * The StoreCategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies a store category whose products will be returned.
	 * @var long
	 */
	public $StoreCategoryID;
	/**
	 * The Filter
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Container for the list of filters that can be applied to the inventory information requested.
	 * @var EbayTradingTypeSellingManagerInventoryPropertyTypeCodeType
	 */
	public $Filter;
	/**
	 * Constructor
	 * @param EbayTradingTypeSellingManagerProductSortCodeType Sort
	 * @param long FolderID
	 * @param EbayTradingTypePaginationType Pagination
	 * @param EbayTradingTypeSortOrderCodeType SortOrder
	 * @param EbayTradingTypeSellingManagerSearchType Search
	 * @param long StoreCategoryID
	 * @param EbayTradingTypeSellingManagerInventoryPropertyTypeCodeType Filter
	 * @return EbayTradingTypeGetSellingManagerInventoryRequestType
	 */
	public function __construct($_Sort = null,$_FolderID = null,$_Pagination = null,$_SortOrder = null,$_Search = null,$_StoreCategoryID = null,$_Filter = null)
	{
		EbayTradingWsdlClass::__construct(array('Sort'=>$_Sort,'FolderID'=>$_FolderID,'Pagination'=>$_Pagination,'SortOrder'=>$_SortOrder,'Search'=>$_Search,'StoreCategoryID'=>$_StoreCategoryID,'Filter'=>$_Filter));
	}
	/**
	 * Set Sort
	 * @param SellingManagerProductSortCodeType Sort
	 * @return SellingManagerProductSortCodeType
	 */
	public function setSort($_Sort)
	{
		return ($this->Sort = EbayTradingTypeSellingManagerProductSortCodeType::valueIsValid($_Sort)?$_Sort:null);
	}
	/**
	 * Get Sort
	 * @return EbayTradingTypeSellingManagerProductSortCodeType
	 */
	public function getSort()
	{
		return $this->Sort;
	}
	/**
	 * Set FolderID
	 * @param long FolderID
	 * @return long
	 */
	public function setFolderID($_FolderID)
	{
		return ($this->FolderID = $_FolderID);
	}
	/**
	 * Get FolderID
	 * @return long
	 */
	public function getFolderID()
	{
		return $this->FolderID;
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
	 * @param SellingManagerInventoryPropertyTypeCodeType Filter
	 * @return SellingManagerInventoryPropertyTypeCodeType
	 */
	public function setFilter($_Filter)
	{
		return ($this->Filter = EbayTradingTypeSellingManagerInventoryPropertyTypeCodeType::valueIsValid($_Filter)?$_Filter:null);
	}
	/**
	 * Get Filter
	 * @return EbayTradingTypeSellingManagerInventoryPropertyTypeCodeType
	 */
	public function getFilter()
	{
		return $this->Filter;
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