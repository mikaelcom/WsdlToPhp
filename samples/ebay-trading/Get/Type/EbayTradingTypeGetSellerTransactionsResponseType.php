<?php
/**
 * Class file for EbayTradingTypeGetSellerTransactionsResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetSellerTransactionsResponseType
 * Documentation : Returns an array of order line item (transaction) data for the seller specified in the request. The results can be used to create a report of data that is commonly necessary for order processing. Zero, one, or many <b>Transaction</b> objects can be returned in the <b>TransactionArray</b>. The set of order line items returned is limited to those that were modified between the times specified in the request's <b>ModTimeFrom</b> and <b>ModTimeTo</b> filters. The order line items returned are sorted by <b>Transaction.Status.LastTimeModified</b>, ascending order (that is, order line items that more recently were modified are returned last). Also returns information about the seller whose order line items were requested. If pagination filters were specified in the request, returns meta-data describing the effects of those filters on the current response and the estimated effects if the same filters are used in subsequent calls.
 * @date 04/07/2012
 */
class EbayTradingTypeGetSellerTransactionsResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The PaginationResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of the total number of order line items that match the input criteria and the total number of pages that must be scrolled through to view all order line items. To scroll through each page of order line item data, make subsequent <b>GetSellerTransactions</b> calls, incrementing the <b>Pagination.PageNumber</b> field by a value of '1' each time.
	 * @var EbayTradingTypePaginationResultType
	 */
	public $PaginationResult;
	/**
	 * The HasMoreTransactions
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This flag indicates whether there are additional pages of order line items to view. This field will be returned as 'true' if there are additional pages or order line items to view, or 'false' if the current page of order line item data is the last page of data.
	 * @var boolean
	 */
	public $HasMoreTransactions;
	/**
	 * The TransactionsPerPage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This value indicates the number of order line items returned per page (per call) and is controlled by the <b>Pagination.EntriesPerPage</b> value passed in the call request. Unless it is the last (or possibly only) page of data (<b>HasMoreTransactions=false</b>), the <b>TransactionsPerPage</b> value should equal the <b>Pagination.EntriesPerPage</b> value passed in the call request. <br> <br> <span class="tablenote"><b>Note:</b> Due to the fact that item data on the eBay platform has a shorter retention period than order data, it is possible that some retrieved pages will contain no data. For pages that contain no data, the <b>ReturnedTransactionCountActual</b> value will be '0'. It is also possible that pages 2, 3, and 4 have no data, but pages 1 and 5 do have data. Therefore, we recommend that you scroll through each page of data (making subsequent <b>GetSellerTransactions</b> calls and incrementing the <b>Pagination.PageNumber</b> value by '1' each time) until you reach the last page, indicated by <b>HasMoreTransactions=false</b>. </span>
	 * @var int
	 */
	public $TransactionsPerPage;
	/**
	 * The PageNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This value indicates the page number of retrieved order line items that match the input criteria. This value is controlled by the <b>Pagination.PageNumber</b> value passed in the call request. To scroll through all pages of order line items that match the input criteria, you increment the <b>Pagination.PageNumber</b> value by '1' with each subsequent <b>GetSellerTransactions</b> call.
	 * @var int
	 */
	public $PageNumber;
	/**
	 * The ReturnedTransactionCountActual
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This value indicates the total number of (non-empty) order line items retrieved in the current page of results. The <b>ReturnedTransactionCountActual</b> value will be lower than the <b>TransactionsPerPage</b> value if one or more empty order line items are retreived on the page. <br> <br> <span class="tablenote"><b>Note:</b> Due to the fact that item data on the eBay platform has a shorter retention period than order data, it is possible that some retrieved pages will contain no data. For pages that contain no order line item data, the <b>ReturnedTransactionCountActual</b> value will be '0'. It is also possible that pages 2, 3, and 4 have no data, but pages 1 and 5 do have data. Therefore, we recommend that you scroll through each page of data (making subsequent <b>GetSellerTransactions</b> calls and incrementing the <b>Pagination.PageNumber</b> value by '1' each time) until you reach the last page, indicated by <b>HasMoreTransactions=false</b>. </span>
	 * @var int
	 */
	public $ReturnedTransactionCountActual;
	/**
	 * The Seller
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains information about the seller whose order line items are being returned. See the reference guide for information about the <b>Seller</b> object fields that are returned.
	 * @var EbayTradingTypeUserType
	 */
	public $Seller;
	/**
	 * The TransactionArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : List of <b>Transaction</b> objects representing the seller's recent sales. Each <b>Transaction</b> object contains the data for one purchase (of one or more items in the same listing). See the reference guide for more information about the fields that are returned for each order line item.
	 * @var EbayTradingTypeTransactionArrayType
	 */
	public $TransactionArray;
	/**
	 * The PayPalPreferred
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the seller has the preference enabled that shows that the seller prefers PayPal as the method of payment for an item. This preference is indicated on an item's View Item page and is intended to influence a buyer to use PayPal to pay for the item.
	 * @var boolean
	 */
	public $PayPalPreferred;
	/**
	 * Constructor
	 * @param EbayTradingTypePaginationResultType PaginationResult
	 * @param boolean HasMoreTransactions
	 * @param int TransactionsPerPage
	 * @param int PageNumber
	 * @param int ReturnedTransactionCountActual
	 * @param EbayTradingTypeUserType Seller
	 * @param EbayTradingTypeTransactionArrayType TransactionArray
	 * @param boolean PayPalPreferred
	 * @return EbayTradingTypeGetSellerTransactionsResponseType
	 */
	public function __construct($_PaginationResult = null,$_HasMoreTransactions = null,$_TransactionsPerPage = null,$_PageNumber = null,$_ReturnedTransactionCountActual = null,$_Seller = null,$_TransactionArray = null,$_PayPalPreferred = null)
	{
		EbayTradingWsdlClass::__construct(array('PaginationResult'=>$_PaginationResult,'HasMoreTransactions'=>$_HasMoreTransactions,'TransactionsPerPage'=>$_TransactionsPerPage,'PageNumber'=>$_PageNumber,'ReturnedTransactionCountActual'=>$_ReturnedTransactionCountActual,'Seller'=>$_Seller,'TransactionArray'=>$_TransactionArray,'PayPalPreferred'=>$_PayPalPreferred));
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
	 * Set HasMoreTransactions
	 * @param boolean HasMoreTransactions
	 * @return boolean
	 */
	public function setHasMoreTransactions($_HasMoreTransactions)
	{
		return ($this->HasMoreTransactions = $_HasMoreTransactions);
	}
	/**
	 * Get HasMoreTransactions
	 * @return boolean
	 */
	public function getHasMoreTransactions()
	{
		return $this->HasMoreTransactions;
	}
	/**
	 * Set TransactionsPerPage
	 * @param int TransactionsPerPage
	 * @return int
	 */
	public function setTransactionsPerPage($_TransactionsPerPage)
	{
		return ($this->TransactionsPerPage = $_TransactionsPerPage);
	}
	/**
	 * Get TransactionsPerPage
	 * @return int
	 */
	public function getTransactionsPerPage()
	{
		return $this->TransactionsPerPage;
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
	 * Set ReturnedTransactionCountActual
	 * @param int ReturnedTransactionCountActual
	 * @return int
	 */
	public function setReturnedTransactionCountActual($_ReturnedTransactionCountActual)
	{
		return ($this->ReturnedTransactionCountActual = $_ReturnedTransactionCountActual);
	}
	/**
	 * Get ReturnedTransactionCountActual
	 * @return int
	 */
	public function getReturnedTransactionCountActual()
	{
		return $this->ReturnedTransactionCountActual;
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
	 * Set TransactionArray
	 * @param TransactionArrayType TransactionArray
	 * @return TransactionArrayType
	 */
	public function setTransactionArray($_TransactionArray)
	{
		return ($this->TransactionArray = $_TransactionArray);
	}
	/**
	 * Get TransactionArray
	 * @return EbayTradingTypeTransactionArrayType
	 */
	public function getTransactionArray()
	{
		return $this->TransactionArray;
	}
	/**
	 * Set PayPalPreferred
	 * @param boolean PayPalPreferred
	 * @return boolean
	 */
	public function setPayPalPreferred($_PayPalPreferred)
	{
		return ($this->PayPalPreferred = $_PayPalPreferred);
	}
	/**
	 * Get PayPalPreferred
	 * @return boolean
	 */
	public function getPayPalPreferred()
	{
		return $this->PayPalPreferred;
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