<?php
/**
 * Class file for EbayFindTypeFindItemsAdvancedResponse
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeFindItemsAdvancedResponse
 * Documentation : Response container for the findItemsAdvanced call.
 * @date 04/07/2012
 */
class EbayFindTypeFindItemsAdvancedResponse extends EbayFindTypeBaseFindingServiceResponse
{
	/**
	 * The categoryHistogramContainer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Response container for category histograms. Only returned when one or more category histograms are returned. A category histogram is not returned if there are no matching items or if the search is restricted to a single leaf category. <br><br> <span class="tablenote"><strong>Note:</strong> The category IDs returned for items in search results are for the leaf categories in which the items are listed. If you use these category IDs as input, the response will not return a category histogram. </span> <br><br> <span class="tablenote"><strong>Note:</strong> When searching the eBay Motors site, category histograms may not be available for some parent categories. In these cases, aspect histograms should be used to refine search results. This behavior is consistent with eBay Motors site search behavior. </span>
	 * @var EbayFindTypeCategoryHistogramContainer
	 */
	public $categoryHistogramContainer;
	/**
	 * The aspectHistogramContainer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Response container for aspect histograms. Aspect histograms are returned for categories that have been mapped to domains only. In most cases, just leaf categories are mapped to domains, but there are exceptions.
	 * @var EbayFindTypeAspectHistogramContainer
	 */
	public $aspectHistogramContainer;
	/**
	 * The conditionHistogramContainer
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Response container for condition histograms. <br> <br> Not returned when Condition is specified in itemFilter. That is, only returned when you have not yet narrowed your search based on specific conditions.<br> <br> Only returned when you search the eBay US site (as of February 2011). International items in US search results are included in the histogram counts.
	 * @var EbayFindTypeConditionHistogramContainer
	 */
	public $conditionHistogramContainer;
	/**
	 * Constructor
	 * @param EbayFindTypeCategoryHistogramContainer categoryHistogramContainer
	 * @param EbayFindTypeAspectHistogramContainer aspectHistogramContainer
	 * @param EbayFindTypeConditionHistogramContainer conditionHistogramContainer
	 * @return EbayFindTypeFindItemsAdvancedResponse
	 */
	public function __construct($_categoryHistogramContainer = null,$_aspectHistogramContainer = null,$_conditionHistogramContainer = null)
	{
		EbayFindWsdlClass::__construct(array('categoryHistogramContainer'=>$_categoryHistogramContainer,'aspectHistogramContainer'=>$_aspectHistogramContainer,'conditionHistogramContainer'=>$_conditionHistogramContainer));
	}
	/**
	 * Set categoryHistogramContainer
	 * @param CategoryHistogramContainer categoryHistogramContainer
	 * @return CategoryHistogramContainer
	 */
	public function setCategoryHistogramContainer($_categoryHistogramContainer)
	{
		return ($this->categoryHistogramContainer = $_categoryHistogramContainer);
	}
	/**
	 * Get categoryHistogramContainer
	 * @return EbayFindTypeCategoryHistogramContainer
	 */
	public function getCategoryHistogramContainer()
	{
		return $this->categoryHistogramContainer;
	}
	/**
	 * Set aspectHistogramContainer
	 * @param AspectHistogramContainer aspectHistogramContainer
	 * @return AspectHistogramContainer
	 */
	public function setAspectHistogramContainer($_aspectHistogramContainer)
	{
		return ($this->aspectHistogramContainer = $_aspectHistogramContainer);
	}
	/**
	 * Get aspectHistogramContainer
	 * @return EbayFindTypeAspectHistogramContainer
	 */
	public function getAspectHistogramContainer()
	{
		return $this->aspectHistogramContainer;
	}
	/**
	 * Set conditionHistogramContainer
	 * @param ConditionHistogramContainer conditionHistogramContainer
	 * @return ConditionHistogramContainer
	 */
	public function setConditionHistogramContainer($_conditionHistogramContainer)
	{
		return ($this->conditionHistogramContainer = $_conditionHistogramContainer);
	}
	/**
	 * Get conditionHistogramContainer
	 * @return EbayFindTypeConditionHistogramContainer
	 */
	public function getConditionHistogramContainer()
	{
		return $this->conditionHistogramContainer;
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