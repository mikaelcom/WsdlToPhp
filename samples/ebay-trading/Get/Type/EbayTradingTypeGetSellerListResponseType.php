<?php
/**
 * Class file for EbayTradingTypeGetSellerListResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetSellerListResponseType
 * Documentation : Contains a list of the items listed by the seller specified as input. The list of items is returned in an ItemArrayType object, in which are returned zero, one, or multiple ItemType objects. Each ItemType object contains the detail data for one item listing.
 * @date 04/07/2012
 */
class EbayTradingTypeGetSellerListResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The PaginationResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains information regarding the pagination of data (if pagination is used), including total number of pages and total number of entries.
	 * @var EbayTradingTypePaginationResultType
	 */
	public $PaginationResult;
	/**
	 * The HasMoreItems
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, there are more items yet to be retrieved. Additional GetSellerList calls with higher page numbers or more items per page must be made to retrieve these items. Not returned if no items match the request.
	 * @var boolean
	 */
	public $HasMoreItems;
	/**
	 * The ItemArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the list of the seller's items, one ItemType object per item. Returns empty if no items are available that match the request.
	 * @var EbayTradingTypeItemArrayType
	 */
	public $ItemArray;
	/**
	 * The ItemsPerPage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the number of items that are being returned per page of data (i.e., per call). Will be the same as the value specified in the Pagination.EntriesPerPage input. Only returned if items are returned.
	 * @var int
	 */
	public $ItemsPerPage;
	/**
	 * The PageNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates which page of data was just returned. Will be the same as the value specified in the Pagination.PageNumber input. (If the input is higher than the total number of pages, the call fails with an error.) Only returned if items are returned.
	 * @var int
	 */
	public $PageNumber;
	/**
	 * The ReturnedItemCountActual
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the total number of items returned (i.e., the number of ItemType objects in ItemArray).
	 * @var int
	 */
	public $ReturnedItemCountActual;
	/**
	 * The Seller
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the seller whose items are returned. The seller is the eBay member whose UserID was passed in the request. If UserID was not specified, the seller is the user who made the request (identified by eBayAuthToken).
	 * @var EbayTradingTypeUserType
	 */
	public $Seller;
	/**
	 * Constructor
	 * @param EbayTradingTypePaginationResultType PaginationResult
	 * @param boolean HasMoreItems
	 * @param EbayTradingTypeItemArrayType ItemArray
	 * @param int ItemsPerPage
	 * @param int PageNumber
	 * @param int ReturnedItemCountActual
	 * @param EbayTradingTypeUserType Seller
	 * @return EbayTradingTypeGetSellerListResponseType
	 */
	public function __construct($_PaginationResult = null,$_HasMoreItems = null,$_ItemArray = null,$_ItemsPerPage = null,$_PageNumber = null,$_ReturnedItemCountActual = null,$_Seller = null)
	{
		EbayTradingWsdlClass::__construct(array('PaginationResult'=>$_PaginationResult,'HasMoreItems'=>$_HasMoreItems,'ItemArray'=>$_ItemArray,'ItemsPerPage'=>$_ItemsPerPage,'PageNumber'=>$_PageNumber,'ReturnedItemCountActual'=>$_ReturnedItemCountActual,'Seller'=>$_Seller));
	}
	/**
	 * Set PaginationResult
	 * @param PaginationResultType PaginationResult
	 * @return PaginationResultType
	 */
	public function setPaginationResult($_PaginationResult)
	{
		return ($this->PaginationResult = $_PaginationResult);
	}
	/**
	 * Get PaginationResult
	 * @return EbayTradingTypePaginationResultType
	 */
	public function getPaginationResult()
	{
		return $this->PaginationResult;
	}
	/**
	 * Set HasMoreItems
	 * @param boolean HasMoreItems
	 * @return boolean
	 */
	public function setHasMoreItems($_HasMoreItems)
	{
		return ($this->HasMoreItems = $_HasMoreItems);
	}
	/**
	 * Get HasMoreItems
	 * @return boolean
	 */
	public function getHasMoreItems()
	{
		return $this->HasMoreItems;
	}
	/**
	 * Set ItemArray
	 * @param ItemArrayType ItemArray
	 * @return ItemArrayType
	 */
	public function setItemArray($_ItemArray)
	{
		return ($this->ItemArray = $_ItemArray);
	}
	/**
	 * Get ItemArray
	 * @return EbayTradingTypeItemArrayType
	 */
	public function getItemArray()
	{
		return $this->ItemArray;
	}
	/**
	 * Set ItemsPerPage
	 * @param int ItemsPerPage
	 * @return int
	 */
	public function setItemsPerPage($_ItemsPerPage)
	{
		return ($this->ItemsPerPage = $_ItemsPerPage);
	}
	/**
	 * Get ItemsPerPage
	 * @return int
	 */
	public function getItemsPerPage()
	{
		return $this->ItemsPerPage;
	}
	/**
	 * Set PageNumber
	 * @param int PageNumber
	 * @return int
	 */
	public function setPageNumber($_PageNumber)
	{
		return ($this->PageNumber = $_PageNumber);
	}
	/**
	 * Get PageNumber
	 * @return int
	 */
	public function getPageNumber()
	{
		return $this->PageNumber;
	}
	/**
	 * Set ReturnedItemCountActual
	 * @param int ReturnedItemCountActual
	 * @return int
	 */
	public function setReturnedItemCountActual($_ReturnedItemCountActual)
	{
		return ($this->ReturnedItemCountActual = $_ReturnedItemCountActual);
	}
	/**
	 * Get ReturnedItemCountActual
	 * @return int
	 */
	public function getReturnedItemCountActual()
	{
		return $this->ReturnedItemCountActual;
	}
	/**
	 * Set Seller
	 * @param UserType Seller
	 * @return UserType
	 */
	public function setSeller($_Seller)
	{
		return ($this->Seller = $_Seller);
	}
	/**
	 * Get Seller
	 * @return EbayTradingTypeUserType
	 */
	public function getSeller()
	{
		return $this->Seller;
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