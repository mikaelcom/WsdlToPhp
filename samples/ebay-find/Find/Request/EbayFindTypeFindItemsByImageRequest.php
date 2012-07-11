<?php
/**
 * Class file for EbayFindTypeFindItemsByImageRequest
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeFindItemsByImageRequest
 * Documentation : Find items based on the image similarity to the specified item.
 * @date 04/07/2012
 */
class EbayFindTypeFindItemsByImageRequest extends EbayFindTypeBestMatchFindingServiceRequest
{
	/**
	 * The itemId
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 1
	 * 	- documentation : Specifies the item that the customer wants to use for retrieving more listings with similar images. The item must active and it must be listed in a Clothing, Shoes & Accessories category (parent category ID 11450 on the eBay US site). In addition, the item ID you specify must exist on either the US, UK, or DE the sites.
	 * @var string
	 */
	public $itemId;
	/**
	 * The categoryId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Specifies the leaf category from which you want to retrieve item listings with similar images. If no category is specified, search results can come from any Clothing, Shoes & Accessories leaf category. This field can be repeated (up to 3 times) to include multiple categories. <br><br> Image similarity searches are only supported in Clothing, Shoes & Accessories leaf categories on the eBay US, UK, and Germany sites. <br><br> If a specified category ID doesn't match an existing category for the site, eBay returns an invalid-category error message. To determine valid leaf categories, use the Trading API <b class="con">GetCategories</b> call.
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
	 * The domainFilter
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- documentation : Restricts results to items listed within the specified domain. Domains are a buy-side grouping of items. such as shoes or digital cameras. A domain can span multiple eBay categories.
	 * @var EbayFindTypeDomainFilter
	 */
	public $domainFilter;
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
	 * Constructor
	 * @param string itemId
	 * @param string categoryId
	 * @param EbayFindTypeItemFilter itemFilter
	 * @param EbayFindTypeAspectFilter aspectFilter
	 * @param EbayFindTypeDomainFilter domainFilter
	 * @param EbayFindTypeOutputSelectorType outputSelector
	 * @return EbayFindTypeFindItemsByImageRequest
	 */
	public function __construct($_itemId,$_categoryId = null,$_itemFilter = null,$_aspectFilter = null,$_domainFilter = null,$_outputSelector = null)
	{
		EbayFindWsdlClass::__construct(array('itemId'=>$_itemId,'categoryId'=>$_categoryId,'itemFilter'=>$_itemFilter,'aspectFilter'=>$_aspectFilter,'domainFilter'=>$_domainFilter,'outputSelector'=>$_outputSelector));
	}
	/**
	 * Set itemId
	 * @param string itemId
	 * @return string
	 */
	public function setItemId($_itemId)
	{
		return ($this->itemId = $_itemId);
	}
	/**
	 * Get itemId
	 * @return string
	 */
	public function getItemId()
	{
		return $this->itemId;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>