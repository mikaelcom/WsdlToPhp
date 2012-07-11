<?php
/**
 * Class file for EbayFindTypeSearchResult
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeSearchResult
 * Documentation : The total number of items returned in the search response. This is often equal to the <b class="con">entriesPerPage</b> value. If the count is less than the specified <b class="con">entriesPerPage</b>, it indicates the end of the result set.
 * @date 04/07/2012
 */
class EbayFindTypeSearchResult extends EbayFindWsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Container for the data of a single item that matches the search criteria.
	 * @var EbayFindTypeSearchItem
	 */
	public $item;
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
	 * The count
	 * Meta informations :
	 * 	- use : required
	 * @var int
	 */
	public $count;
	/**
	 * Constructor
	 * @param EbayFindTypeSearchItem item
	 * @param string delimiter
	 * @param DOMDocument any
	 * @param int count
	 * @return EbayFindTypeSearchResult
	 */
	public function __construct($_item = null,$_delimiter = null,$_any = null,$_count = null)
	{
		parent::__construct(array('item'=>$_item,'delimiter'=>$_delimiter,'any'=>$_any,'count'=>$_count));
	}
	/**
	 * Set item
	 * @param SearchItem item
	 * @return SearchItem
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return EbayFindTypeSearchItem
	 */
	public function getItem()
	{
		return $this->item;
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
	 * Set count
	 * @param int count
	 * @return int
	 */
	public function setCount($_count)
	{
		return ($this->count = $_count);
	}
	/**
	 * Get count
	 * @return int
	 */
	public function getCount()
	{
		return $this->count;
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