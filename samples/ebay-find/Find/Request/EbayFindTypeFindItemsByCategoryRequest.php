<?php
/**
 * Class file for EbayFindTypeFindItemsByCategoryRequest
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeFindItemsByCategoryRequest
 * Documentation : Returns items in one or more specified categories. Filters can be used to restrict the results.
 * @date 04/07/2012
 */
class EbayFindTypeFindItemsByCategoryRequest extends EbayFindTypeBaseFindingServiceRequest
{
	/**
	 * The categoryId
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Specifies the category from which you want to retrieve item listings. This field can be repeated to include multiple categories. <br><br> If a specified category ID doesn't match an existing category for the site, eBay returns an invalid-category error message. To determine valid categories, use the Trading API <b class="con">GetCategories</b> call. <br><br> Up to three (3) categories can be specified. <br><br> Category searches are not supported on the eBay Italy site (global ID EBAY-IT) at this time.
	 * @var string
	 */
	public $categoryId;
	/**
	 * The itemFilter
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Reduce the number of items returned by a find request using item filters. Use <b class="con">itemFilter</b> to specify name/value pairs. You can include multiple item filters in a single request.
	 * @var EbayFindTypeItemFilter
	 */
	public $itemFilter;
	/**
	 * The aspectFilter
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Aspect filters refine (limit) the number of items returned by a find request. Obtain input values for aspectFilter fields from an aspectHistogramContainer returned in the response of a previous query. <br><br> By issuing a series of find queries, you can continually refine the items returned in your responses. Do this by repeating a query using the aspect values returned in one response as the input values to your next query. <br><br> For example, the aspectHistogramContainer in a response on Men's Shoes could contain an aspect of Size, along with "aspect values" for the different sizes currently available in Men's Shoes. By populating aspectFilter fields with the values returned in an aspectHistogramContainer, you can refine the item results returned by your new query.
	 * @var EbayFindTypeAspectFilter
	 */
	public $aspectFilter;
	/**
	 * The outputSelector
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Defines what data to return, in addition to the default set of data, in a response. <br><br> If you don't specify this field, eBay returns a default set of item fields. Use outputSelector to include more information in the response. The additional data is grouped into discrete nodes. You can specify multiple nodes by including this field multiple times, as needed, in the request. <br><br> If you specify this field, the additional fields returned can affect the call's response time (performance), including in the case with feedback data.
	 * @var EbayFindTypeOutputSelectorType
	 */
	public $outputSelector;
	/**
	 * The domainFilter
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- documentation : Restricts results to items listed within the specified domain. Domains are a buy-side grouping of items. such as shoes or digital cameras. A domain can span multiple eBay categories.
	 * @var EbayFindTypeDomainFilter
	 */
	public $domainFilter;
	/**
	 * Constructor
	 * @param string categoryId
	 * @param EbayFindTypeItemFilter itemFilter
	 * @param EbayFindTypeAspectFilter aspectFilter
	 * @param EbayFindTypeOutputSelectorType outputSelector
	 * @param EbayFindTypeDomainFilter domainFilter
	 * @return EbayFindTypeFindItemsByCategoryRequest
	 */
	public function __construct($_categoryId,$_itemFilter = null,$_aspectFilter = null,$_outputSelector = null,$_domainFilter = null)
	{
		EbayFindWsdlClass::__construct(array('categoryId'=>$_categoryId,'itemFilter'=>$_itemFilter,'aspectFilter'=>$_aspectFilter,'outputSelector'=>$_outputSelector,'domainFilter'=>$_domainFilter));
	}
	/**
	 * Set categoryId
	 * @param string categoryId
	 * @return string
	 */
	public function setCategoryId($_categoryId)
	{
		return ($this->categoryId = $_categoryId);
	}
	/**
	 * Get categoryId
	 * @return string
	 */
	public function getCategoryId()
	{
		return $this->categoryId;
	}
	/**
	 * Set itemFilter
	 * @param ItemFilter itemFilter
	 * @return ItemFilter
	 */
	public function setItemFilter($_itemFilter)
	{
		return ($this->itemFilter = $_itemFilter);
	}
	/**
	 * Get itemFilter
	 * @return EbayFindTypeItemFilter
	 */
	public function getItemFilter()
	{
		return $this->itemFilter;
	}
	/**
	 * Set aspectFilter
	 * @param AspectFilter aspectFilter
	 * @return AspectFilter
	 */
	public function setAspectFilter($_aspectFilter)
	{
		return ($this->aspectFilter = $_aspectFilter);
	}
	/**
	 * Get aspectFilter
	 * @return EbayFindTypeAspectFilter
	 */
	public function getAspectFilter()
	{
		return $this->aspectFilter;
	}
	/**
	 * Set outputSelector
	 * @param OutputSelectorType outputSelector
	 * @return OutputSelectorType
	 */
	public function setOutputSelector($_outputSelector)
	{
		return ($this->outputSelector = EbayFindTypeOutputSelectorType::valueIsValid($_outputSelector)?$_outputSelector:null);
	}
	/**
	 * Get outputSelector
	 * @return EbayFindTypeOutputSelectorType
	 */
	public function getOutputSelector()
	{
		return $this->outputSelector;
	}
	/**
	 * Set domainFilter
	 * @param DomainFilter domainFilter
	 * @return DomainFilter
	 */
	public function setDomainFilter($_domainFilter)
	{
		return ($this->domainFilter = $_domainFilter);
	}
	/**
	 * Get domainFilter
	 * @return EbayFindTypeDomainFilter
	 */
	public function getDomainFilter()
	{
		return $this->domainFilter;
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