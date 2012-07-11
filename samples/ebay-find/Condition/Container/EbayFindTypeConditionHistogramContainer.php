<?php
/**
 * Class file for EbayFindTypeConditionHistogramContainer
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeConditionHistogramContainer
 * Documentation : Container for condition histograms.
 * @date 04/07/2012
 */
class EbayFindTypeConditionHistogramContainer extends EbayFindWsdlClass
{
	/**
	 * The conditionHistogram
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- documentation : Statistical (item count) information on the condition of items that match the search criteria (or specified category). For example, the number of brand new items that match the query. <br> <br> Each conditionHistogram specifies one condition and the number of matching items found. The list of all conditionHistogram containers returned represents the union of all conditions that were found in the item results. For example, if items were found in different categories, and if those categories support different sets of item conditions, then all those conditions are returned in the list, regardless of category.<br> <br> If multiple items use the same condition ID, but some items use different display names for that condition, the histogram shows the site's default display name for that condition. This means that the condition name in a histogram may not always exactly match the condition names on the counted items.
	 * @var EbayFindTypeConditionHistogram
	 */
	public $conditionHistogram;
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
	 * @param EbayFindTypeConditionHistogram conditionHistogram
	 * @param string delimiter
	 * @param DOMDocument any
	 * @return EbayFindTypeConditionHistogramContainer
	 */
	public function __construct($_conditionHistogram = null,$_delimiter = null,$_any = null)
	{
		parent::__construct(array('conditionHistogram'=>$_conditionHistogram,'delimiter'=>$_delimiter,'any'=>$_any));
	}
	/**
	 * Set conditionHistogram
	 * @param ConditionHistogram conditionHistogram
	 * @return ConditionHistogram
	 */
	public function setConditionHistogram($_conditionHistogram)
	{
		return ($this->conditionHistogram = $_conditionHistogram);
	}
	/**
	 * Get conditionHistogram
	 * @return EbayFindTypeConditionHistogram
	 */
	public function getConditionHistogram()
	{
		return $this->conditionHistogram;
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