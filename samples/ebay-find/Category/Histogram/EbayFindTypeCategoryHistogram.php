<?php
/**
 * Class file for EbayFindTypeCategoryHistogram
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeCategoryHistogram
 * Documentation : Statistical (histogram) information about categories that contain items that match the query, if any. For categories associated with specific items, see items returned in each search result. Shows the distribution of items across each category. Not returned if there is no match.
 * @date 04/07/2012
 */
class EbayFindTypeCategoryHistogram extends EbayFindTypeCategory
{
	/**
	 * The count
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The total number of items in the associated category that match the search criteria.
	 * @var long
	 */
	public $count;
	/**
	 * The childCategoryHistogram
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- documentation : Container for histogram information pertaining to a child of the category specified in the request. Histograms return data on up to 10 children. Histograms are only a single level deep. That is, a given category histogram contains only immediate children.
	 * @var EbayFindTypeCategoryHistogram
	 */
	public $childCategoryHistogram;
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
	 * @param long count
	 * @param EbayFindTypeCategoryHistogram childCategoryHistogram
	 * @param string delimiter
	 * @param DOMDocument any
	 * @return EbayFindTypeCategoryHistogram
	 */
	public function __construct($_count = null,$_childCategoryHistogram = null,$_delimiter = null,$_any = null)
	{
		EbayFindWsdlClass::__construct(array('count'=>$_count,'childCategoryHistogram'=>$_childCategoryHistogram,'delimiter'=>$_delimiter,'any'=>$_any));
	}
	/**
	 * Set count
	 * @param long count
	 * @return long
	 */
	public function setCount($_count)
	{
		return ($this->count = $_count);
	}
	/**
	 * Get count
	 * @return long
	 */
	public function getCount()
	{
		return $this->count;
	}
	/**
	 * Set childCategoryHistogram
	 * @param CategoryHistogram childCategoryHistogram
	 * @return CategoryHistogram
	 */
	public function setChildCategoryHistogram($_childCategoryHistogram)
	{
		return ($this->childCategoryHistogram = $_childCategoryHistogram);
	}
	/**
	 * Get childCategoryHistogram
	 * @return EbayFindTypeCategoryHistogram
	 */
	public function getChildCategoryHistogram()
	{
		return $this->childCategoryHistogram;
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