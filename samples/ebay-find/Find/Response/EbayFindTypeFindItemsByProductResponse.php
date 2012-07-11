<?php
/**
 * Class file for EbayFindTypeFindItemsByProductResponse
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeFindItemsByProductResponse
 * Documentation : Response container for the findItemsByProduct call.
 * @date 04/07/2012
 */
class EbayFindTypeFindItemsByProductResponse extends EbayFindTypeBaseFindingServiceResponse
{
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
	 * 	- documentation : Response container for condition histograms.<br> <br> Not returned when Condition is specified in itemFilter. That is, only returned when you have not yet narrowed your search based on specific conditions.<br> <br> Only returned when you search the eBay US site (as of February 2011). International items in US search results are included in the histogram counts.
	 * @var EbayFindTypeConditionHistogramContainer
	 */
	public $conditionHistogramContainer;
	/**
	 * Constructor
	 * @param EbayFindTypeAspectHistogramContainer aspectHistogramContainer
	 * @param EbayFindTypeConditionHistogramContainer conditionHistogramContainer
	 * @return EbayFindTypeFindItemsByProductResponse
	 */
	public function __construct($_aspectHistogramContainer = null,$_conditionHistogramContainer = null)
	{
		EbayFindWsdlClass::__construct(array('aspectHistogramContainer'=>$_aspectHistogramContainer,'conditionHistogramContainer'=>$_conditionHistogramContainer));
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