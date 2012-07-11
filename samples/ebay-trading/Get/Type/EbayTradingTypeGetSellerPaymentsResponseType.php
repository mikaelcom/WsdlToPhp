<?php
/**
 * Class file for EbayTradingTypeGetSellerPaymentsResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetSellerPaymentsResponseType
 * Documentation : Returns a summary of pending or paid payments that Half.com created for the seller identified by the authentication token in the request. Only returns payments that occurred within a particular pay period. Each payment is for one transaction for one item in one order. An order can contain transactions for multiple items from multiple sellers, but this call only retrieves payments that are relevant to one seller. Payments are only issued for items and transactions that the seller has confirmed (see the Half.com online help for details). The financial value of a payment is typically based on an amount that a buyer paid to Half.com for a transaction, plus the shipping cost the buyer paid to Half.com for the item, minus Half.com's commission. For most sellers, each month contains two pay periods: One from the 1st to the 15th of the month, and one from the 16th to the last day of the month. Payments are submitted to the seller's financial institution a certain number of days after the current pay period ends (see the Half.com online help for details).
 * @date 04/07/2012
 */
class EbayTradingTypeGetSellerPaymentsResponseType extends EbayTradingTypeAbstractResponseType
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
	 * The HasMorePayments
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, there are more payments yet to be retrieved. Additional GetSellerPayments calls with higher page numbers or more entries per page must be made to retrieve these payments. If false, no more payments are available or no payments match the request (based on the payment status and time filter).
	 * @var boolean
	 */
	public $HasMorePayments;
	/**
	 * The SellerPayment
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Information about a single payment that matches the criteria in the request. A payment is between Half.com and a seller. Each payment is for one transaction for one item in one order. An order can contain transactions for multiple items from multiple sellers, but this call only retrieves payments that are relevant to one seller. The financial value of a payment is typically based on an amount that a buyer paid to Half.com for a transaction, plus the shipping cost the buyer paid for the item, minus Half.com's commission. Payments can also describe refunds that the seller has issued. Multiple SellerPayment entries can be returned per page of results. Typically, they are returned in reverse chronological order (most recent PaidTime first). Only returned if payments exist that match the request.
	 * @var EbayTradingTypeSellerPaymentType
	 */
	public $SellerPayment;
	/**
	 * The PaymentsPerPage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the number of payments that can be returned per page of data (i.e., per call). This is the same as the value specified in the Pagination.EntriesPerPage input (or the default value, if EntriesPerPage was not specified). This is not necessarily the actual number of payments returned per page (see ReturnedPaymentCountActual).
	 * @var int
	 */
	public $PaymentsPerPage;
	/**
	 * The PageNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates which page of data holds the current result set. Will be the same as the value specified in the Pagination.PageNumber input. (If the input is higher than the total number of pages, the call fails with an error.) If no payments are returned, the value is 0. If payments are returned, the first page number is 1.
	 * @var int
	 */
	public $PageNumber;
	/**
	 * The ReturnedPaymentCountActual
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the total number of payments returned (i.e., the number of SellerPayment entries returned.
	 * @var int
	 */
	public $ReturnedPaymentCountActual;
	/**
	 * Constructor
	 * @param EbayTradingTypePaginationResultType PaginationResult
	 * @param boolean HasMorePayments
	 * @param EbayTradingTypeSellerPaymentType SellerPayment
	 * @param int PaymentsPerPage
	 * @param int PageNumber
	 * @param int ReturnedPaymentCountActual
	 * @return EbayTradingTypeGetSellerPaymentsResponseType
	 */
	public function __construct($_PaginationResult = null,$_HasMorePayments = null,$_SellerPayment = null,$_PaymentsPerPage = null,$_PageNumber = null,$_ReturnedPaymentCountActual = null)
	{
		EbayTradingWsdlClass::__construct(array('PaginationResult'=>$_PaginationResult,'HasMorePayments'=>$_HasMorePayments,'SellerPayment'=>$_SellerPayment,'PaymentsPerPage'=>$_PaymentsPerPage,'PageNumber'=>$_PageNumber,'ReturnedPaymentCountActual'=>$_ReturnedPaymentCountActual));
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
	 * Set HasMorePayments
	 * @param boolean HasMorePayments
	 * @return boolean
	 */
	public function setHasMorePayments($_HasMorePayments)
	{
		return ($this->HasMorePayments = $_HasMorePayments);
	}
	/**
	 * Get HasMorePayments
	 * @return boolean
	 */
	public function getHasMorePayments()
	{
		return $this->HasMorePayments;
	}
	/**
	 * Set SellerPayment
	 * @param SellerPaymentType SellerPayment
	 * @return SellerPaymentType
	 */
	public function setSellerPayment($_SellerPayment)
	{
		return ($this->SellerPayment = $_SellerPayment);
	}
	/**
	 * Get SellerPayment
	 * @return EbayTradingTypeSellerPaymentType
	 */
	public function getSellerPayment()
	{
		return $this->SellerPayment;
	}
	/**
	 * Set PaymentsPerPage
	 * @param int PaymentsPerPage
	 * @return int
	 */
	public function setPaymentsPerPage($_PaymentsPerPage)
	{
		return ($this->PaymentsPerPage = $_PaymentsPerPage);
	}
	/**
	 * Get PaymentsPerPage
	 * @return int
	 */
	public function getPaymentsPerPage()
	{
		return $this->PaymentsPerPage;
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
	 * Set ReturnedPaymentCountActual
	 * @param int ReturnedPaymentCountActual
	 * @return int
	 */
	public function setReturnedPaymentCountActual($_ReturnedPaymentCountActual)
	{
		return ($this->ReturnedPaymentCountActual = $_ReturnedPaymentCountActual);
	}
	/**
	 * Get ReturnedPaymentCountActual
	 * @return int
	 */
	public function getReturnedPaymentCountActual()
	{
		return $this->ReturnedPaymentCountActual;
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