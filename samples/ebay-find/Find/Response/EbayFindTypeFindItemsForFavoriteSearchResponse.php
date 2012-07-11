<?php
/**
 * Class file for EbayFindTypeFindItemsForFavoriteSearchResponse
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeFindItemsForFavoriteSearchResponse
 * Documentation : Reserved for future use.
 * @date 04/07/2012
 */
class EbayFindTypeFindItemsForFavoriteSearchResponse extends EbayFindTypeBaseFindingServiceResponse
{
	/**
	 * The categoryHistogramContainer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Reserved for future use.
	 * @var EbayFindTypeCategoryHistogramContainer
	 */
	public $categoryHistogramContainer;
	/**
	 * The aspectHistogramContainer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Reserved for future use.
	 * @var EbayFindTypeAspectHistogramContainer
	 */
	public $aspectHistogramContainer;
	/**
	 * The conditionHistogramContainer
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Reserved for future use.
	 * @var EbayFindTypeConditionHistogramContainer
	 */
	public $conditionHistogramContainer;
	/**
	 * Constructor
	 * @param EbayFindTypeCategoryHistogramContainer categoryHistogramContainer
	 * @param EbayFindTypeAspectHistogramContainer aspectHistogramContainer
	 * @param EbayFindTypeConditionHistogramContainer conditionHistogramContainer
	 * @return EbayFindTypeFindItemsForFavoriteSearchResponse
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