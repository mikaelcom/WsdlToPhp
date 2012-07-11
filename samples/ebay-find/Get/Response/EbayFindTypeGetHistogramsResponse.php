<?php
/**
 * Class file for EbayFindTypeGetHistogramsResponse
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeGetHistogramsResponse
 * Documentation : Response container for the getHistogram call.
 * @date 04/07/2012
 */
class EbayFindTypeGetHistogramsResponse extends EbayFindTypeBaseServiceResponse
{
	/**
	 * The categoryHistogramContainer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Response container for category histograms. This container is returned only when the specified category has children categories. <br><br> <span class="tablenote"><strong>Note:</strong> Category histograms may not be available for some parent categories on the eBay Motors site. </span>
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
	 * 	- documentation : Response container for condition histograms. Returned for leaf and parent categories.<br> <br> Only returned when you search the eBay US site (as of February 2011). International items in US search results are included in the histogram counts.
	 * @var EbayFindTypeConditionHistogramContainer
	 */
	public $conditionHistogramContainer;
	/**
	 * The extension
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Reserved for future use.
	 * @var EbayFindTypeExtensionType
	 */
	public $extension;
	/**
	 * Constructor
	 * @param EbayFindTypeCategoryHistogramContainer categoryHistogramContainer
	 * @param EbayFindTypeAspectHistogramContainer aspectHistogramContainer
	 * @param EbayFindTypeConditionHistogramContainer conditionHistogramContainer
	 * @param EbayFindTypeExtensionType extension
	 * @return EbayFindTypeGetHistogramsResponse
	 */
	public function __construct($_categoryHistogramContainer = null,$_aspectHistogramContainer = null,$_conditionHistogramContainer = null,$_extension = null)
	{
		EbayFindWsdlClass::__construct(array('categoryHistogramContainer'=>$_categoryHistogramContainer,'aspectHistogramContainer'=>$_aspectHistogramContainer,'conditionHistogramContainer'=>$_conditionHistogramContainer,'extension'=>$_extension));
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
	 * Set extension
	 * @param ExtensionType extension
	 * @return ExtensionType
	 */
	public function setExtension($_extension)
	{
		return ($this->extension = $_extension);
	}
	/**
	 * Get extension
	 * @return EbayFindTypeExtensionType
	 */
	public function getExtension()
	{
		return $this->extension;
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