<?php
/**
 * Class file for EbayTradingTypeGetItemTransactionsResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetItemTransactionsResponseType
 * Documentation : Returns an array of order line item (transaction) data for the item specified in the request. The results can be used to create a report of data that is commonly necessary for order processing. Zero, one, or many <b>Transaction</b> objects can be returned in the <b>TransactionArray</b>. The set of order line items returned is limited to those that were modified between the times specified in the request's <b>ModTimeFrom</b> and <b>ModTime</b> filters. Also returns the <b>Item</b> object that spawned the order line items. If pagination filters were specified in the request, returns meta-data describing the effects of those filters on the current response and the estimated effects if the same filters are used in subsequent calls. <br><br> Data from the <b>TransactionArray</b> may be used to trigger the following Platform Notifications: EndOfAuction, AuctionCheckoutComplete, FixedPriceEndOfTransaction, CheckoutBuyerRequestTotal, FixedPriceTransaction, Checkout, FixedPriceTransactionForSeller, FixedPriceTransactionForBuyer, ItemMarkedAsShipped, and ItemMarkedAsPaid. Each notification will be based on the state of the item (a 'snapshot' of the item) at the time the order line item was created.
 * @date 04/07/2012
 */
class EbayTradingTypeGetItemTransactionsResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The PaginationResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the total number of pages (<b>TotalNumberOfPages</b>) and the total number of entries (<b>TotalNumberOfEntries</b>) that could be returned given repeated calls that use the same selection criteria as the call that returned this response.
	 * @var EbayTradingTypePaginationResultType
	 */
	public $PaginationResult;
	/**
	 * The HasMoreTransactions
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether there are additional order line items (transactions) to retrieve. That is, indicates whether more pages of data are available to be returned, given the filters that were specified in the request. Returns false for the last page of data.
	 * @var boolean
	 */
	public $HasMoreTransactions;
	/**
	 * The TransactionsPerPage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Number of order line items (transactions) returned per page (per call). May be a higher value than <b>ReturnedTransactionCountActual</b> if the page returned is the last page and more than one page of data exists.
	 * @var int
	 */
	public $TransactionsPerPage;
	/**
	 * The PageNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Page number for the page of order line items the response returned.
	 * @var int
	 */
	public $PageNumber;
	/**
	 * The ReturnedTransactionCountActual
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Number of order line items retrieved in the current page of results just returned. May be a lower value than <b>TransactionsPerPage</b> if the page returned is the last page and more than one page of data exists.
	 * @var int
	 */
	public $ReturnedTransactionCountActual;
	/**
	 * The Item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <b>Item</b> object that spawned the order line item. It is a purchase from this item's listing that the order line item represents.
	 * @var EbayTradingTypeItemType
	 */
	public $Item;
	/**
	 * The TransactionArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : List of <b>Transaction</b> objects representing the order line items resulting from the listing. Each <b>Transaction</b> object contains the data for one purchase (of one or more items in the same listing). The <b>Transaction.Item</b> field is not returned because the <b>Item</b> object is returned at the root level of the response. See the reference guide for more information about the fields that are returned.
	 * @var EbayTradingTypeTransactionArrayType
	 */
	public $TransactionArray;
	/**
	 * The PayPalPreferred
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the item's seller has the preference enabled that shows that the seller prefers PayPal as the method of payment for an item. This preference is indicated on an item's View Item page and is intended to influence a buyer to use PayPal to pay for the item.
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
	 * @param EbayTradingTypeItemType Item
	 * @param EbayTradingTypeTransactionArrayType TransactionArray
	 * @param boolean PayPalPreferred
	 * @return EbayTradingTypeGetItemTransactionsResponseType
	 */
	public function __construct($_PaginationResult = null,$_HasMoreTransactions = null,$_TransactionsPerPage = null,$_PageNumber = null,$_ReturnedTransactionCountActual = null,$_Item = null,$_TransactionArray = null,$_PayPalPreferred = null)
	{
		EbayTradingWsdlClass::__construct(array('PaginationResult'=>$_PaginationResult,'HasMoreTransactions'=>$_HasMoreTransactions,'TransactionsPerPage'=>$_TransactionsPerPage,'PageNumber'=>$_PageNumber,'ReturnedTransactionCountActual'=>$_ReturnedTransactionCountActual,'Item'=>$_Item,'TransactionArray'=>$_TransactionArray,'PayPalPreferred'=>$_PayPalPreferred));
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
	 * Set Item
	 * @param ItemType Item
	 * @return ItemType
	 */
	public function setItem($_Item)
	{
		return ($this->Item = $_Item);
	}
	/**
	 * Get Item
	 * @return EbayTradingTypeItemType
	 */
	public function getItem()
	{
		return $this->Item;
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