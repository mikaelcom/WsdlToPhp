<?php
/**
 * Class file for EbayFindTypeFindItemsByKeywordsRequest
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeFindItemsByKeywordsRequest
 * Documentation : Searches for items based on a keyword query and returns details for matching items. Item filters can be used to restrict search results. Aspect filters can be used to further refine results. Use outputSelector to expand the amount of data returned for each matching item.
 * @date 04/07/2012
 */
class EbayFindTypeFindItemsByKeywordsRequest extends EbayFindTypeBaseFindingServiceRequest
{
	/**
	 * The keywords
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Specify one or more words to use in a search query for finding items on eBay. By default, queries search item titles only. When running queries, it is best to include complete keywords values--eBay checks words in context with each other. If you are using a URL request and your keyword query consists of multiple words, use "%20" to separate the words. For example, use "Harry%20Potter" to search for items containing those words in any order. Queries aren't case-sensitive, so it doesn't matter whether you use uppercase or lowercase letters. <br><br> You can incorporate wildcards in a multi-word search. For example, "ap*%20ip*" returns results for "apple ipod" among other matches. The words "and" and "or" are treated like any other word (and not their logical connotation). Only use "and", "or", or "the" if you are searching for listings containing those specific words.
	 * @var string
	 */
	public $keywords;
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
	 * 	- documentation : Aspect filters refine (limit) the number of items returned by a find request. Obtain input values for aspectFilter fields from an aspectHistogramContainer returned in the response of a previous query. <br><br> By issuing a series of find queries, you can continually refine the items returned in your responses. Do this by repeating a query using the aspect values returned in one response as the input values to your next query. <br><br/> For example, the aspectHistogramContainer in a response on Men's Shoes could contain an aspect of Size, along with "aspect values" for the different sizes currently available in Men's Shoes. By populating aspectFilter fields with the values returned in an aspectHistogramContainer, you can refine the item results returned by your new query.
	 * @var EbayFindTypeAspectFilter
	 */
	public $aspectFilter;
	/**
	 * The outputSelector
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Specifies what item data to return in a response in addition to the default set of data. <br><br> If you don't specify this field, eBay returns a default set of item fields. Use outputSelector to include more item information in the response. The additional data is grouped into discrete nodes. You can specify multiple nodes by including this field multiple times, as needed, in the request. <br><br> If you specify this field, the additional fields returned can affect the call's performance (response time), as is the case with including seller feedback data.
	 * @var EbayFindTypeOutputSelectorType
	 */
	public $outputSelector;
	/**
	 * The domainFilter
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- documentation : Restricts results to items listed within the specified domain. Domains are a buy-side grouping of items, such as shoes or digital cameras. A domain can span multiple eBay categories.
	 * @var EbayFindTypeDomainFilter
	 */
	public $domainFilter;
	/**
	 * Constructor
	 * @param string keywords
	 * @param EbayFindTypeItemFilter itemFilter
	 * @param EbayFindTypeAspectFilter aspectFilter
	 * @param EbayFindTypeOutputSelectorType outputSelector
	 * @param EbayFindTypeDomainFilter domainFilter
	 * @return EbayFindTypeFindItemsByKeywordsRequest
	 */
	public function __construct($_keywords,$_itemFilter = null,$_aspectFilter = null,$_outputSelector = null,$_domainFilter = null)
	{
		EbayFindWsdlClass::__construct(array('keywords'=>$_keywords,'itemFilter'=>$_itemFilter,'aspectFilter'=>$_aspectFilter,'outputSelector'=>$_outputSelector,'domainFilter'=>$_domainFilter));
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