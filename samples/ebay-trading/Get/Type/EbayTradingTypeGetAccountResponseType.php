<?php
/**
 * Class file for EbayTradingTypeGetAccountResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetAccountResponseType
 * Documentation : Returns information about an eBay seller's own account.
 * @date 04/07/2012
 */
class EbayTradingTypeGetAccountResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The AccountID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the seller's unique account number.
	 * @var string
	 */
	public $AccountID;
	/**
	 * The AccountSummary
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains summary data for the seller's account, such as the overall balance, bank account and credit card information, and amount and date of any past due balances. Can also contain data for one or more additional accounts, if the user has changed country of residence.
	 * @var EbayTradingTypeAccountSummaryType
	 */
	public $AccountSummary;
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the currency used for monetary amounts in the report.
	 * @var EbayTradingTypeCurrencyCodeType
	 */
	public $Currency;
	/**
	 * The AccountEntries
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains individual account entries, according to the report's scope and date range. Each account entry represents one credit, debit, or administrative account action.
	 * @var EbayTradingTypeAccountEntriesType
	 */
	public $AccountEntries;
	/**
	 * The PaginationResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the total number of pages (TotalNumberOfPages) and the total number of account entries (TotalNumberOfEntries) that can be returned on repeated calls with the same format and report criteria.
	 * @var EbayTradingTypePaginationResultType
	 */
	public $PaginationResult;
	/**
	 * The HasMoreEntries
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether there are more items yet to be retrieved. Additional calls must be made to retrieve those items.
	 * @var boolean
	 */
	public $HasMoreEntries;
	/**
	 * The EntriesPerPage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the number of items that are being returned per virtual page of date. Value is the same as that specified in Pagination.EntriesPerPage.
	 * @var int
	 */
	public $EntriesPerPage;
	/**
	 * The PageNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates which page of data was just returned. Value is the same as the value specified in Pagination.PageNumber. If PageNumber in the request is higher than the total number of pages, the call fails with an error.)
	 * @var int
	 */
	public $PageNumber;
	/**
	 * Constructor
	 * @param string AccountID
	 * @param EbayTradingTypeAccountSummaryType AccountSummary
	 * @param EbayTradingTypeCurrencyCodeType Currency
	 * @param EbayTradingTypeAccountEntriesType AccountEntries
	 * @param EbayTradingTypePaginationResultType PaginationResult
	 * @param boolean HasMoreEntries
	 * @param int EntriesPerPage
	 * @param int PageNumber
	 * @return EbayTradingTypeGetAccountResponseType
	 */
	public function __construct($_AccountID = null,$_AccountSummary = null,$_Currency = null,$_AccountEntries = null,$_PaginationResult = null,$_HasMoreEntries = null,$_EntriesPerPage = null,$_PageNumber = null)
	{
		EbayTradingWsdlClass::__construct(array('AccountID'=>$_AccountID,'AccountSummary'=>$_AccountSummary,'Currency'=>$_Currency,'AccountEntries'=>$_AccountEntries,'PaginationResult'=>$_PaginationResult,'HasMoreEntries'=>$_HasMoreEntries,'EntriesPerPage'=>$_EntriesPerPage,'PageNumber'=>$_PageNumber));
	}
	/**
	 * Set AccountID
	 * @param string AccountID
	 * @return string
	 */
	public function setAccountID($_AccountID)
	{
		return ($this->AccountID = $_AccountID);
	}
	/**
	 * Get AccountID
	 * @return string
	 */
	public function getAccountID()
	{
		return $this->AccountID;
	}
	/**
	 * Set AccountSummary
	 * @param AccountSummaryType AccountSummary
	 * @return AccountSummaryType
	 */
	public function setAccountSummary($_AccountSummary)
	{
		return ($this->AccountSummary = $_AccountSummary);
	}
	/**
	 * Get AccountSummary
	 * @return EbayTradingTypeAccountSummaryType
	 */
	public function getAccountSummary()
	{
		return $this->AccountSummary;
	}
	/**
	 * Set Currency
	 * @param CurrencyCodeType Currency
	 * @return CurrencyCodeType
	 */
	public function setCurrency($_Currency)
	{
		return ($this->Currency = EbayTradingTypeCurrencyCodeType::valueIsValid($_Currency)?$_Currency:null);
	}
	/**
	 * Get Currency
	 * @return EbayTradingTypeCurrencyCodeType
	 */
	public function getCurrency()
	{
		return $this->Currency;
	}
	/**
	 * Set AccountEntries
	 * @param AccountEntriesType AccountEntries
	 * @return AccountEntriesType
	 */
	public function setAccountEntries($_AccountEntries)
	{
		return ($this->AccountEntries = $_AccountEntries);
	}
	/**
	 * Get AccountEntries
	 * @return EbayTradingTypeAccountEntriesType
	 */
	public function getAccountEntries()
	{
		return $this->AccountEntries;
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
	 * Set HasMoreEntries
	 * @param boolean HasMoreEntries
	 * @return boolean
	 */
	public function setHasMoreEntries($_HasMoreEntries)
	{
		return ($this->HasMoreEntries = $_HasMoreEntries);
	}
	/**
	 * Get HasMoreEntries
	 * @return boolean
	 */
	public function getHasMoreEntries()
	{
		return $this->HasMoreEntries;
	}
	/**
	 * Set EntriesPerPage
	 * @param int EntriesPerPage
	 * @return int
	 */
	public function setEntriesPerPage($_EntriesPerPage)
	{
		return ($this->EntriesPerPage = $_EntriesPerPage);
	}
	/**
	 * Get EntriesPerPage
	 * @return int
	 */
	public function getEntriesPerPage()
	{
		return $this->EntriesPerPage;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>