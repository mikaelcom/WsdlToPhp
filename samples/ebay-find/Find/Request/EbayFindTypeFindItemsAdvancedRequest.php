<?php
/**
 * Class file for EbayFindTypeFindItemsAdvancedRequest
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeFindItemsAdvancedRequest
 * Documentation : Request container for the findItemsAdvanced call.
 * @date 04/07/2012
 */
class EbayFindTypeFindItemsAdvancedRequest extends EbayFindTypeBaseFindingServiceRequest
{
	/**
	 * The keywords
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Specify one or more words to use in a search query for finding items on eBay. By default, queries search item titles only. When running queries, it is best to include complete keywords values--eBay checks words in context with each other. If you are using a URL request and your keyword query consists of multiple words, use "%20" to separate the words. For example, use "Harry%20Potter" to search for items containing those words in any order. Queries aren't case-sensitive, so it doesn't matter whether you use uppercase or lowercase letters. <br><br> You can incorporate wildcards in a multi-word search. For example, "ap*%20ip*" returns results for "apple ipod" among other matches. The words "and" and "or" are treated like any other word (and not their logical connotation). Only use "and", "or", or "the" if you are searching for listings containing those specific words. <br><br> <b class="con">findItemsAdvanced</b> requires that you specify <b class="con">keywords</b> and/or a <b class="con">categoryId</b> in the request. The exception to this rule is when the Seller item filter is used. The Seller item filter can be used without specifying either <b class="con"> keywords</b> or <b class="con">categoryId</b> to retrieve all active items for the specified seller. <br><br>
	 * @var string
	 */
	public $keywords;
	/**
	 * The categoryId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Specifies the category from which you want to retrieve item listings. This field can be repeated to include multiple categories. Up to three (3) categories can be specified. <br><br> If a specified category ID doesn't match an existing category for the site, eBay returns an invalid-category error message. To determine valid categories, use the Trading API <b class="con">GetCategories</b> call. <br><br> <b class="con">findItemsAdvanced</b> requires that you specify <b class="con">keywords</b> and/or a <b class="con">categoryId</b> in the request. The exception to this rule is when the Seller item filter is used. The Seller item filter can be used without specifying either <b class="con"> keywords</b> or <b class="con">categoryId</b> to retrieve all active items for the specified seller. <br><br> Category searches are not supported on the eBay Italy site (global ID EBAY-IT) at this time.
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
	 * The descriptionSearch
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Specifies whether your keyword query should be applied to item descriptions in addition to titles. Searching the text of item descriptions incurs a performance hit (it can take longer than searches that don't include description searches). If true, the text of the item's description and subtitles will be included in the search. If false, only item titles are included in keyword searches.
	 * @var boolean
	 */
	public $descriptionSearch;
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
	 * @param string keywords
	 * @param string categoryId
	 * @param EbayFindTypeItemFilter itemFilter
	 * @param EbayFindTypeAspectFilter aspectFilter
	 * @param EbayFindTypeOutputSelectorType outputSelector
	 * @param boolean descriptionSearch
	 * @param EbayFindTypeDomainFilter domainFilter
	 * @return EbayFindTypeFindItemsAdvancedRequest
	 */
	public function __construct($_keywords = null,$_categoryId = null,$_itemFilter = null,$_aspectFilter = null,$_outputSelector = null,$_descriptionSearch = null,$_domainFilter = null)
	{
		EbayFindWsdlClass::__construct(array('keywords'=>$_keywords,'categoryId'=>$_categoryId,'itemFilter'=>$_itemFilter,'aspectFilter'=>$_aspectFilter,'outputSelector'=>$_outputSelector,'descriptionSearch'=>$_descriptionSearch,'domainFilter'=>$_domainFilter));
	}
	/**
	 * Set keywords
	 * @param string keywords
	 * @return string
	 */
	public function setKeywords($_keywords)
	{
		return ($this->keywords = $_keywords);
	}
	/**
	 * Get keywords
	 * @return string
	 */
	public function getKeywords()
	{
		return $this->keywords;
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
	 * Set descriptionSearch
	 * @param boolean descriptionSearch
	 * @return boolean
	 */
	public function setDescriptionSearch($_descriptionSearch)
	{
		return ($this->descriptionSearch = $_descriptionSearch);
	}
	/**
	 * Get descriptionSearch
	 * @return boolean
	 */
	public function getDescriptionSearch()
	{
		return $this->descriptionSearch;
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