<?php
/**
 * Class file for EbayFindTypePaginationInput
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypePaginationInput
 * Documentation : Controls the pagination of the result set. Child elements specify the maximum number of item listings to return per call and which page of data to return. Controls which listings are returned in the response, but does not control the details associated with the returned items.
 * @date 04/07/2012
 */
class EbayFindTypePaginationInput extends EbayFindWsdlClass
{
	/**
	 * The pageNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies which subset of data (or "page") to return in the call response. The number of data pages is determined by the total number of items matching the request search criteria (returned in paginationOutput.totalEntries) divided by the number of entries to display in each response (entriesPerPage). You can return up to the first 100 pages of the result set by issuing multiple requests and specifying, in sequence, the pages to return.
	 * @var int
	 */
	public $pageNumber;
	/**
	 * The entriesPerPage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the maximum number of entries to return in a single call. If the number of entries found on the specified pageNumber is less than the value specified here, the number of items returned will be less than the value of entriesPerPage. This indicates the end of the result set. <br><br> If entriesPerPage is set to a number greater than 100, the default value, 100, will be used.
	 * @var int
	 */
	public $entriesPerPage;
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
	 * @param string delimiter
	 * @param DOMDocument any
	 * @return EbayFindTypePaginationInput
	 */
	public function __construct($_pageNumber = null,$_entriesPerPage = null,$_delimiter = null,$_any = null)
	{
		parent::__construct(array('pageNumber'=>$_pageNumber,'entriesPerPage'=>$_entriesPerPage,'delimiter'=>$_delimiter,'any'=>$_any));
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