<?php
/**
 * Class file for EbayTradingTypeGetOrdersResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetOrdersResponseType
 * Documentation : Returns the set of orders that match the order IDs or filter criteria specified.
 * @date 04/07/2012
 */
class EbayTradingTypeGetOrdersResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The PaginationResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains information regarding the pagination of data, including the total number of pages and the total number of orders.
	 * @var EbayTradingTypePaginationResultType
	 */
	public $PaginationResult;
	/**
	 * The HasMoreOrders
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A true value indicates that there are more orders to be retrieved. Additional GetOrders calls with higher page numbers or more entries per page must be made to retrieve these orders. If false, no more orders are available or no orders match the request (based on the input filters).
	 * @var boolean
	 */
	public $HasMoreOrders;
	/**
	 * The OrderArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The set of orders that match the order IDs or filter criteria specified. Also applicable to Half.com (only returns orders that have not been marked as shipped).
	 * @var EbayTradingTypeOrderArrayType
	 */
	public $OrderArray;
	/**
	 * The OrdersPerPage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the number of orders that can be returned per page of data (i.e., per call). This is the same value specified in the Pagination.EntriesPerPage input (or the default value, if EntriesPerPage was not specified). This is not necessarily the actual number of orders returned per page (see ReturnedOrderCountActual).
	 * @var int
	 */
	public $OrdersPerPage;
	/**
	 * The PageNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the page number of data returned in the response. This is the same value specified in the Pagination.PageNumber input. If orders are returned, the first page is 1.
	 * @var int
	 */
	public $PageNumber;
	/**
	 * The ReturnedOrderCountActual
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the total number of orders returned.
	 * @var int
	 */
	public $ReturnedOrderCountActual;
	/**
	 * Constructor
	 * @param EbayTradingTypePaginationResultType PaginationResult
	 * @param boolean HasMoreOrders
	 * @param EbayTradingTypeOrderArrayType OrderArray
	 * @param int OrdersPerPage
	 * @param int PageNumber
	 * @param int ReturnedOrderCountActual
	 * @return EbayTradingTypeGetOrdersResponseType
	 */
	public function __construct($_PaginationResult = null,$_HasMoreOrders = null,$_OrderArray = null,$_OrdersPerPage = null,$_PageNumber = null,$_ReturnedOrderCountActual = null)
	{
		EbayTradingWsdlClass::__construct(array('PaginationResult'=>$_PaginationResult,'HasMoreOrders'=>$_HasMoreOrders,'OrderArray'=>$_OrderArray,'OrdersPerPage'=>$_OrdersPerPage,'PageNumber'=>$_PageNumber,'ReturnedOrderCountActual'=>$_ReturnedOrderCountActual));
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
	 * Set HasMoreOrders
	 * @param boolean HasMoreOrders
	 * @return boolean
	 */
	public function setHasMoreOrders($_HasMoreOrders)
	{
		return ($this->HasMoreOrders = $_HasMoreOrders);
	}
	/**
	 * Get HasMoreOrders
	 * @return boolean
	 */
	public function getHasMoreOrders()
	{
		return $this->HasMoreOrders;
	}
	/**
	 * Set OrderArray
	 * @param OrderArrayType OrderArray
	 * @return OrderArrayType
	 */
	public function setOrderArray($_OrderArray)
	{
		return ($this->OrderArray = $_OrderArray);
	}
	/**
	 * Get OrderArray
	 * @return EbayTradingTypeOrderArrayType
	 */
	public function getOrderArray()
	{
		return $this->OrderArray;
	}
	/**
	 * Set OrdersPerPage
	 * @param int OrdersPerPage
	 * @return int
	 */
	public function setOrdersPerPage($_OrdersPerPage)
	{
		return ($this->OrdersPerPage = $_OrdersPerPage);
	}
	/**
	 * Get OrdersPerPage
	 * @return int
	 */
	public function getOrdersPerPage()
	{
		return $this->OrdersPerPage;
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
	 * Set ReturnedOrderCountActual
	 * @param int ReturnedOrderCountActual
	 * @return int
	 */
	public function setReturnedOrderCountActual($_ReturnedOrderCountActual)
	{
		return ($this->ReturnedOrderCountActual = $_ReturnedOrderCountActual);
	}
	/**
	 * Get ReturnedOrderCountActual
	 * @return int
	 */
	public function getReturnedOrderCountActual()
	{
		return $this->ReturnedOrderCountActual;
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