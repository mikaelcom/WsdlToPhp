<?php
/**
 * Class file for EbayTradingTypePaginationResultType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePaginationResultType
 * Documentation : Shows the pagination of data returned by call requests. Pagination of returned data is not needed nor supported for every Trading API call. See the documentation for individual calls to determine whether pagination is supported, required, or desirable.
 * @date 04/07/2012
 */
class EbayTradingTypePaginationResultType extends EbayTradingWsdlClass
{
	/**
	 * The TotalNumberOfPages
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the total number of pages of data that could be returned by repeated requests. Returned with a value of 0 if no pages are available.
	 * @var int
	 */
	public $TotalNumberOfPages;
	/**
	 * The TotalNumberOfEntries
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates the total number of entries that could be returned by repeated call requests. Returned with a value of 0 if no entries are available.
	 * @var int
	 */
	public $TotalNumberOfEntries;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int TotalNumberOfPages
	 * @param int TotalNumberOfEntries
	 * @param DOMDocument any
	 * @return EbayTradingTypePaginationResultType
	 */
	public function __construct($_TotalNumberOfPages = null,$_TotalNumberOfEntries = null,$_any = null)
	{
		parent::__construct(array('TotalNumberOfPages'=>$_TotalNumberOfPages,'TotalNumberOfEntries'=>$_TotalNumberOfEntries,'any'=>$_any));
	}
	/**
	 * Set TotalNumberOfPages
	 * @param int TotalNumberOfPages
	 * @return int
	 */
	public function setTotalNumberOfPages($_TotalNumberOfPages)
	{
		return ($this->TotalNumberOfPages = $_TotalNumberOfPages);
	}
	/**
	 * Get TotalNumberOfPages
	 * @return int
	 */
	public function getTotalNumberOfPages()
	{
		return $this->TotalNumberOfPages;
	}
	/**
	 * Set TotalNumberOfEntries
	 * @param int TotalNumberOfEntries
	 * @return int
	 */
	public function setTotalNumberOfEntries($_TotalNumberOfEntries)
	{
		return ($this->TotalNumberOfEntries = $_TotalNumberOfEntries);
	}
	/**
	 * Get TotalNumberOfEntries
	 * @return int
	 */
	public function getTotalNumberOfEntries()
	{
		return $this->TotalNumberOfEntries;
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