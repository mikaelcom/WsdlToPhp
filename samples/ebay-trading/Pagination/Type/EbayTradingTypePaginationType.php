<?php
/**
 * Class file for EbayTradingTypePaginationType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePaginationType
 * Documentation : Contains data for controlling pagination in API requests. Pagination of returned data is required for some calls and not needed in or not supported for some calls. See the documentation for individual calls to determine whether pagination is supported, required, or desirable.
 * @date 04/07/2012
 */
class EbayTradingTypePaginationType extends EbayTradingWsdlClass
{
	/**
	 * The EntriesPerPage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This integer value is used to specify the maximum number of entries to return in a single "page" of data. This value, along with the number of entries that match the input criteria, will determine the total pages (see PaginationResult.TotalNumberOfPages) in the result set. For most Trading API calls, the maximum value is 200 and the default value is 25 entries per page. <br><br> For GetOrders, the maximum value is 100 and the default value is 25 orders per page. <br><br> For GetUserDisputes, this value is hard-coded at 200, and any pagination input is ignored. <br><br> For GetProducts, the maximum value is 20, and any higher values are ignored.
	 * @var int
	 */
	public $EntriesPerPage;
	/**
	 * The PageNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the number of the page of data to return in the current call. Default is 1 for most calls. For some calls, the default is 0. Specify a positive value equal to or lower than the number of pages available (which you determine by examining the results of your initial request). See the documentation for other individual calls to determine the correct default value.
	 * @var int
	 */
	public $PageNumber;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int EntriesPerPage
	 * @param int PageNumber
	 * @param DOMDocument any
	 * @return EbayTradingTypePaginationType
	 */
	public function __construct($_EntriesPerPage = null,$_PageNumber = null,$_any = null)
	{
		parent::__construct(array('EntriesPerPage'=>$_EntriesPerPage,'PageNumber'=>$_PageNumber,'any'=>$_any));
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