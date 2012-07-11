<?php
/**
 * Class file for EbayFindTypeCategoryHistogramContainer
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeCategoryHistogramContainer
 * Documentation : Base container for histogram information.
 * @date 04/07/2012
 */
class EbayFindTypeCategoryHistogramContainer extends EbayFindWsdlClass
{
	/**
	 * The categoryHistogram
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Statistical (item count) information on the categories that contain items that match the search criteria or specified category or categories. A category histogram contains information for up to 10 child categories. Search result total entries may not necessarily match the sum of category histogram item counts. <br><br> For search calls, the item count shows the distribution of matching items across each of the returned categories. A category histogram is not returned if there are no matching items or if the search is restricted to a single leaf category. <br><br> For getHistograms, the category histogram contains the total item count for the specified category and item counts for the child categories containing the most item listings. A category histogram is not returned if the specified category is a leaf category. <br><br> For categories associated with specific items, review the individual item containers returned in the search result.
	 * @var EbayFindTypeCategoryHistogram
	 */
	public $categoryHistogram;
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
	 * @param EbayFindTypeCategoryHistogram categoryHistogram
	 * @param string delimiter
	 * @param DOMDocument any
	 * @return EbayFindTypeCategoryHistogramContainer
	 */
	public function __construct($_categoryHistogram = null,$_delimiter = null,$_any = null)
	{
		parent::__construct(array('categoryHistogram'=>$_categoryHistogram,'delimiter'=>$_delimiter,'any'=>$_any));
	}
	/**
	 * Set categoryHistogram
	 * @param CategoryHistogram categoryHistogram
	 * @return CategoryHistogram
	 */
	public function setCategoryHistogram($_categoryHistogram)
	{
		return ($this->categoryHistogram = $_categoryHistogram);
	}
	/**
	 * Get categoryHistogram
	 * @return EbayFindTypeCategoryHistogram
	 */
	public function getCategoryHistogram()
	{
		return $this->categoryHistogram;
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