<?php
/**
 * Class file for EbayTradingTypeGetAccountRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetAccountRequestType
 * Documentation : Returns a seller's invoice data for their eBay account, including the account's summary data.
 * @date 04/07/2012
 */
class EbayTradingTypeGetAccountRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The AccountHistorySelection
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the report format in which to return account entries.
	 * @var EbayTradingTypeAccountHistorySelectionCodeType
	 */
	public $AccountHistorySelection;
	/**
	 * The InvoiceDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the month and year of the invoice requested. The report includes only the entries that appear on the seller's invoice in the specified month and year. An entry can occur in one month and appear on the next month's invoice. Used with SpecifiedInvoice reports.
	 * @var dateTime
	 */
	public $InvoiceDate;
	/**
	 * The BeginDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the beginning of a date range during which a credit or debit occurred. Used when AccountHistorySelection is BetweenSpecifiedDates. Value must be less than or equal to the value specified in EndDate. The allowed date formats are YYYY-MM-DD and YYYY-MM-DD HH:mm:ss. You can retrieve information that is up to 4 months old.
	 * @var dateTime
	 */
	public $BeginDate;
	/**
	 * The EndDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the end of a date range during which a credit or debit occurred. Used when AccountHistorySelection is BetweenSpecifiedDates. Value must be greater than or equal to the value specified in BeginDate. The allowed date formats are YYYY-MM-DD and YYYY-MM-DD HH:mm:ss.
	 * @var dateTime
	 */
	public $EndDate;
	/**
	 * The Pagination
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Controls pagination of the response. For this request, the valid values of Pagination.EntriesPerPage are 0 to 2000, with a default of 500.
	 * @var EbayTradingTypePaginationType
	 */
	public $Pagination;
	/**
	 * The ExcludeBalance
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies whether to calculate balances. Default is false, which calculates balances. The value true means do not calculate balances. If true, AccountEntry.Balance and AccountSummary.CurrentBalance are never returned in the response.
	 * @var boolean
	 */
	public $ExcludeBalance;
	/**
	 * The ExcludeSummary
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies whether to return account summary information in an AccountSummary node. Default is true, to return AccountSummary.
	 * @var boolean
	 */
	public $ExcludeSummary;
	/**
	 * The IncludeConversionRate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies whether to retrieve the rate used for the currency conversion for usage transactions.
	 * @var boolean
	 */
	public $IncludeConversionRate;
	/**
	 * The AccountEntrySortType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies how account entries should be sorted in the response, by an element and then in ascending or descending order.
	 * @var EbayTradingTypeAccountEntrySortTypeCodeType
	 */
	public $AccountEntrySortType;
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the currency used in the account report. Do not specify Currency in the request unless the following conditions are met. First, the user has or had multiple accounts under the same UserID. Second, the account identified in the request uses the currency you specify in the request. An error is returned if no account is found that uses the currency you specify in the request.
	 * @var EbayTradingTypeCurrencyCodeType
	 */
	public $Currency;
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the item ID for which to return account entries. If ItemID is used, all other filters in the request are ignored. If the specified item does not exist or if the requesting user is not the seller of the item, an error is returned.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * Constructor
	 * @param EbayTradingTypeAccountHistorySelectionCodeType AccountHistorySelection
	 * @param dateTime InvoiceDate
	 * @param dateTime BeginDate
	 * @param dateTime EndDate
	 * @param EbayTradingTypePaginationType Pagination
	 * @param boolean ExcludeBalance
	 * @param boolean ExcludeSummary
	 * @param boolean IncludeConversionRate
	 * @param EbayTradingTypeAccountEntrySortTypeCodeType AccountEntrySortType
	 * @param EbayTradingTypeCurrencyCodeType Currency
	 * @param EbayTradingTypeItemIDType ItemID
	 * @return EbayTradingTypeGetAccountRequestType
	 */
	public function __construct($_AccountHistorySelection = null,$_InvoiceDate = null,$_BeginDate = null,$_EndDate = null,$_Pagination = null,$_ExcludeBalance = null,$_ExcludeSummary = null,$_IncludeConversionRate = null,$_AccountEntrySortType = null,$_Currency = null,$_ItemID = null)
	{
		EbayTradingWsdlClass::__construct(array('AccountHistorySelection'=>$_AccountHistorySelection,'InvoiceDate'=>$_InvoiceDate,'BeginDate'=>$_BeginDate,'EndDate'=>$_EndDate,'Pagination'=>$_Pagination,'ExcludeBalance'=>$_ExcludeBalance,'ExcludeSummary'=>$_ExcludeSummary,'IncludeConversionRate'=>$_IncludeConversionRate,'AccountEntrySortType'=>$_AccountEntrySortType,'Currency'=>$_Currency,'ItemID'=>$_ItemID));
	}
	/**
	 * Set AccountHistorySelection
	 * @param AccountHistorySelectionCodeType AccountHistorySelection
	 * @return AccountHistorySelectionCodeType
	 */
	public function setAccountHistorySelection($_AccountHistorySelection)
	{
		return ($this->AccountHistorySelection = EbayTradingTypeAccountHistorySelectionCodeType::valueIsValid($_AccountHistorySelection)?$_AccountHistorySelection:null);
	}
	/**
	 * Get AccountHistorySelection
	 * @return EbayTradingTypeAccountHistorySelectionCodeType
	 */
	public function getAccountHistorySelection()
	{
		return $this->AccountHistorySelection;
	}
	/**
	 * Set InvoiceDate
	 * @param dateTime InvoiceDate
	 * @return dateTime
	 */
	public function setInvoiceDate($_InvoiceDate)
	{
		return ($this->InvoiceDate = $_InvoiceDate);
	}
	/**
	 * Get InvoiceDate
	 * @return dateTime
	 */
	public function getInvoiceDate()
	{
		return $this->InvoiceDate;
	}
	/**
	 * Set BeginDate
	 * @param dateTime BeginDate
	 * @return dateTime
	 */
	public function setBeginDate($_BeginDate)
	{
		return ($this->BeginDate = $_BeginDate);
	}
	/**
	 * Get BeginDate
	 * @return dateTime
	 */
	public function getBeginDate()
	{
		return $this->BeginDate;
	}
	/**
	 * Set EndDate
	 * @param dateTime EndDate
	 * @return dateTime
	 */
	public function setEndDate($_EndDate)
	{
		return ($this->EndDate = $_EndDate);
	}
	/**
	 * Get EndDate
	 * @return dateTime
	 */
	public function getEndDate()
	{
		return $this->EndDate;
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
	 * Set ExcludeBalance
	 * @param boolean ExcludeBalance
	 * @return boolean
	 */
	public function setExcludeBalance($_ExcludeBalance)
	{
		return ($this->ExcludeBalance = $_ExcludeBalance);
	}
	/**
	 * Get ExcludeBalance
	 * @return boolean
	 */
	public function getExcludeBalance()
	{
		return $this->ExcludeBalance;
	}
	/**
	 * Set ExcludeSummary
	 * @param boolean ExcludeSummary
	 * @return boolean
	 */
	public function setExcludeSummary($_ExcludeSummary)
	{
		return ($this->ExcludeSummary = $_ExcludeSummary);
	}
	/**
	 * Get ExcludeSummary
	 * @return boolean
	 */
	public function getExcludeSummary()
	{
		return $this->ExcludeSummary;
	}
	/**
	 * Set IncludeConversionRate
	 * @param boolean IncludeConversionRate
	 * @return boolean
	 */
	public function setIncludeConversionRate($_IncludeConversionRate)
	{
		return ($this->IncludeConversionRate = $_IncludeConversionRate);
	}
	/**
	 * Get IncludeConversionRate
	 * @return boolean
	 */
	public function getIncludeConversionRate()
	{
		return $this->IncludeConversionRate;
	}
	/**
	 * Set AccountEntrySortType
	 * @param AccountEntrySortTypeCodeType AccountEntrySortType
	 * @return AccountEntrySortTypeCodeType
	 */
	public function setAccountEntrySortType($_AccountEntrySortType)
	{
		return ($this->AccountEntrySortType = EbayTradingTypeAccountEntrySortTypeCodeType::valueIsValid($_AccountEntrySortType)?$_AccountEntrySortType:null);
	}
	/**
	 * Get AccountEntrySortType
	 * @return EbayTradingTypeAccountEntrySortTypeCodeType
	 */
	public function getAccountEntrySortType()
	{
		return $this->AccountEntrySortType;
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
	 * Set ItemID
	 * @param ItemIDType ItemID
	 * @return ItemIDType
	 */
	public function setItemID($_ItemID)
	{
		return ($this->ItemID = EbayTradingTypeItemIDType::valueIsValid($_ItemID)?$_ItemID:null);
	}
	/**
	 * Get ItemID
	 * @return EbayTradingTypeItemIDType
	 */
	public function getItemID()
	{
		return $this->ItemID;
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