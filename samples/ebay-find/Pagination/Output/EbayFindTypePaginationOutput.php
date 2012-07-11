<?php
/**
 * Class file for EbayFindTypePaginationOutput
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypePaginationOutput
 * Documentation : Shows the pagination data for the item search. Child elements include the page number returned, the maximum entries returned per page, the total number of pages that can be returned, and the total number of items that match the search criteria.
 * @date 04/07/2012
 */
class EbayFindTypePaginationOutput extends EbayFindWsdlClass
{
	/**
	 * The pageNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The subset of item data returned in the current response. Search results are divided into sets, or "pages," of item data. The number of pages is equal to the total number of items matching the search criteria divided by the value specified for entriesPerPage in the request. The response for a request contains one "page" of item data. <br> <br> This returned value indicates the page number of item data returned (a subset of the complete result set). If this field contains 1, the response contains the first page of item data (the default). If the value returned in totalEntries is less than the value for entriesPerPage, pageNumber returns 1 and the response contains the entire result set. <br> <br> The value of pageNumber is normally equal to the value input for paginationInput.pageNumber. However, if the number input for pageNumber is greater than the total possible pages of output, eBay returns the last page of item data in the result set, and the value for pageNumber is set to the respective (last) page number.
	 * @var int
	 */
	public $pageNumber;
	/**
	 * The entriesPerPage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The maximum number of items that can be returned in the response. This number is always equal to the value input for paginationInput.entriesPerPage. <br> <br> The end of the result set has been reached if the number specified for entriesPerPage is greater than the number of items found on the specified pageNumber. In this case, there will be fewer items returned than the number specified in entriesPerPage. This can be determined by comparing the entriesPerPage value with the value returned in the count attribute for the searchResult field.
	 * @var int
	 */
	public $entriesPerPage;
	/**
	 * The totalPages
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total number of pages of data that could be returned by repeated search requests. Note that if you modify the value of inputPagination.entriesPerPage in a request, the value output for totalPages will change. A value of "0" is returned if eBay does not find any items that match the search criteria.
	 * @var int
	 */
	public $totalPages;
	/**
	 * The totalEntries
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total number of items found that match the search criteria in your request. Depending on the input value for entriesPerPage, the response might include only a portion (a page) of the entire result set. A value of "0" is returned if eBay does not find any items that match the search criteria.
	 * @var int
	 */
	public $totalEntries;
	/**
	 * The delimiter
	 * @var string
	 */
	public $delimiter;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int pageNumber
	 * @param int entriesPerPage
	 * @param int totalPages
	 * @param int totalEntries
	 * @param string delimiter
	 * @param DOMDocument any
	 * @return EbayFindTypePaginationOutput
	 */
	public function __construct($_pageNumber = null,$_entriesPerPage = null,$_totalPages = null,$_totalEntries = null,$_delimiter = null,$_any = null)
	{
		parent::__construct(array('pageNumber'=>$_pageNumber,'entriesPerPage'=>$_entriesPerPage,'totalPages'=>$_totalPages,'totalEntries'=>$_totalEntries,'delimiter'=>$_delimiter,'any'=>$_any));
	}
	/**
	 * Set pageNumber
	 * @param int pageNumber
	 * @return int
	 */
	public function setPageNumber($_pageNumber)
	{
		return ($this->pageNumber = $_pageNumber);
	}
	/**
	 * Get pageNumber
	 * @return int
	 */
	public function getPageNumber()
	{
		return $this->pageNumber;
	}
	/**
	 * Set entriesPerPage
	 * @param int entriesPerPage
	 * @return int
	 */
	public function setEntriesPerPage($_entriesPerPage)
	{
		return ($this->entriesPerPage = $_entriesPerPage);
	}
	/**
	 * Get entriesPerPage
	 * @return int
	 */
	public function getEntriesPerPage()
	{
		return $this->entriesPerPage;
	}
	/**
	 * Set totalPages
	 * @param int totalPages
	 * @return int
	 */
	public function setTotalPages($_totalPages)
	{
		return ($this->totalPages = $_totalPages);
	}
	/**
	 * Get totalPages
	 * @return int
	 */
	public function getTotalPages()
	{
		return $this->totalPages;
	}
	/**
	 * Set totalEntries
	 * @param int totalEntries
	 * @return int
	 */
	public function setTotalEntries($_totalEntries)
	{
		return ($this->totalEntries = $_totalEntries);
	}
	/**
	 * Get totalEntries
	 * @return int
	 */
	public function getTotalEntries()
	{
		return $this->totalEntries;
	}
	/**
	 * Set delimiter
	 * @param string delimiter
	 * @return string
	 */
	public function setDelimiter($_delimiter)
	{
		return ($this->delimiter = $_delimiter);
	}
	/**
	 * Get delimiter
	 * @return string
	 */
	public function getDelimiter()
	{
		return $this->delimiter;
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