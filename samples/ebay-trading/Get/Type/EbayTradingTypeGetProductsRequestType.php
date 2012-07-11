<?php
/**
 * Class file for EbayTradingTypeGetProductsRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetProductsRequestType
 * Documentation : No longer recommended. This supports an older ID-based format for describing item specifics and product details. Most eBay categories no longer support ID-based attributes. The remaining categories (e.g., US eBay Motors) will drop support for ID-based attributes by May 2012. New applications should not use ID-based attributes. Existing applications should be updated to remove all dependencies on ID-based attributes now. Instead, use FindProducts in eBay's Shopping API to search for product details.<br> <br> Searches for stock information and reviews for certain kinds of products, such as a particular digital camera model. <p> GetProducts is designed to be useful to applications that support shopping comparison, product reviews, or basic supply and demand data. </p> <p> GetProducts also supports tracking so that members of the eBay Affiliates Program can get commissions for driving traffic to eBay. </p> <p class="tablenote"><b>Note:</b> For selling use cases, use GetProductSearchResults and GetProductSellingPages instead. </p> <p> To use this call, you typically pass in keywords, and GetProducts finds products with matching words in the product title, description, and/or Item Specifics. <p> For each product of interest, you call GetProducts again to retrieve additional details that would be useful to buyers: </p> <ul> <li>Top reviews of the product by eBay members, including part of the review text, plus links to the full text on the eBay Web site.</li> <li>Relevant buying guides (shopping advice) written by eBay members and by eBay staff, including part of the guide text, plus links to the full text on the eBay Web site.</li> <li>Up to 200 matching items on eBay (if any). (To find more matching items, use the <a href="http://www.developer.ebay.com/DevZone/finding/CallRef/index.html">Finding API</a>.)</li> </ul> <p> <span class="tablenote"><b>Note:</b> As catalog queries can take longer than item queries. Also, due to the way product data is cached, you may get a faster response when you run the same query a second time.</span>
 * @date 04/07/2012
 */
class EbayTradingTypeGetProductsRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ProductSearch
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the fields that form the search query. You can query against keywords, an eBay product reference ID (not to be confused with an eBay product ID), or external product ID (like an ISBN).
	 * @var EbayTradingTypeProductSearchType
	 */
	public $ProductSearch;
	/**
	 * The ProductSort
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Sorts the list of products returned. This is mostly only useful with QueryKeywords. (When you use ExternalProductID or ProductReferenceID, eBay usually only returns one product.)
	 * @var EbayTradingTypeProductSortCodeType
	 */
	public $ProductSort;
	/**
	 * The IncludeItemArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, the response includes items (if any) that match the product specified in ExternalProductID or ProductReferenceID. Not applicable with QueryKeywords.
	 * @var boolean
	 */
	public $IncludeItemArray;
	/**
	 * The IncludeReviewDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, the response includes up to 20 reviews (if any) for the product specified in ExternalProductID or ProductReferenceID. The reviews are sorted by most helpful (most votes) first. When you include review details, please note that response times may be longer than 60 seconds. Not applicable with QueryKeywords.
	 * @var boolean
	 */
	public $IncludeReviewDetails;
	/**
	 * The IncludeBuyingGuideDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, the response includes up to 5 buying guides (if any) for the product specified in ExternalProductID or ProductReferenceID. Not applicable with QueryKeywords.
	 * @var boolean
	 */
	public $IncludeBuyingGuideDetails;
	/**
	 * The IncludeHistogram
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, the response includes a histogram that lists the number of matching products found and the domains in which they were found. (A domain is like a high-level category.) Including the histogram can affect the call's performance. You may see significantly slower response times when many matching products are found.
	 * @var boolean
	 */
	public $IncludeHistogram;
	/**
	 * The AffiliateTrackingDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : See the <a href="https://www.ebaypartnernetwork.com/" target="_blank">eBay Partner Network</a>. eBay uses the values in AffiliateTrackingDetails to build a View Item URL string, in order to include that string in the response. When a user clicks through the URL to eBay, you may get a commission (see the URL above). Only applicable when IncludeItemArray is specified (because the View Item URL is only returned in item information, not in product information).
	 * @var EbayTradingTypeAffiliateTrackingDetailsType
	 */
	public $AffiliateTrackingDetails;
	/**
	 * The HideDuplicateItems
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies whether or not to remove duplicate items from search results. When set to true, and there are duplicate items for an item in the search results, the subsequent duplicates will not appear in the results. Item listings are considered duplicates in the following conditions: <br> <ul> <li>Items are listed by the same seller</li> <li>Items have exactly the same item title</li> <li>Items have similar listing formats</li> <ul> <li>Auctions: Auction Items, Auction BIN items, Multi-Quantity Auctions, and Multi-Quantity Auctions BIN items</li> <li>Fixed Price: Fixed Price, Multi-quantity Fixed Price, Fixed Price with Best Offer, and Store Inventory Format items</li> <li>Classified Ads</li> </ul> </ul><br> For Auctions, items must also have the same price and number of bids to be considered duplicates. <br> Filtering of duplicate item listings is not supported on all sites. For GetProducts, this filter only works when IncludeItemArray is set to true.
	 * @var boolean
	 */
	public $HideDuplicateItems;
	/**
	 * Constructor
	 * @param EbayTradingTypeProductSearchType ProductSearch
	 * @param EbayTradingTypeProductSortCodeType ProductSort
	 * @param boolean IncludeItemArray
	 * @param boolean IncludeReviewDetails
	 * @param boolean IncludeBuyingGuideDetails
	 * @param boolean IncludeHistogram
	 * @param EbayTradingTypeAffiliateTrackingDetailsType AffiliateTrackingDetails
	 * @param boolean HideDuplicateItems
	 * @return EbayTradingTypeGetProductsRequestType
	 */
	public function __construct($_ProductSearch = null,$_ProductSort = null,$_IncludeItemArray = null,$_IncludeReviewDetails = null,$_IncludeBuyingGuideDetails = null,$_IncludeHistogram = null,$_AffiliateTrackingDetails = null,$_HideDuplicateItems = null)
	{
		EbayTradingWsdlClass::__construct(array('ProductSearch'=>$_ProductSearch,'ProductSort'=>$_ProductSort,'IncludeItemArray'=>$_IncludeItemArray,'IncludeReviewDetails'=>$_IncludeReviewDetails,'IncludeBuyingGuideDetails'=>$_IncludeBuyingGuideDetails,'IncludeHistogram'=>$_IncludeHistogram,'AffiliateTrackingDetails'=>$_AffiliateTrackingDetails,'HideDuplicateItems'=>$_HideDuplicateItems));
	}
	/**
	 * Set ProductSearch
	 * @param ProductSearchType ProductSearch
	 * @return ProductSearchType
	 */
	public function setProductSearch($_ProductSearch)
	{
		return ($this->ProductSearch = $_ProductSearch);
	}
	/**
	 * Get ProductSearch
	 * @return EbayTradingTypeProductSearchType
	 */
	public function getProductSearch()
	{
		return $this->ProductSearch;
	}
	/**
	 * Set ProductSort
	 * @param ProductSortCodeType ProductSort
	 * @return ProductSortCodeType
	 */
	public function setProductSort($_ProductSort)
	{
		return ($this->ProductSort = EbayTradingTypeProductSortCodeType::valueIsValid($_ProductSort)?$_ProductSort:null);
	}
	/**
	 * Get ProductSort
	 * @return EbayTradingTypeProductSortCodeType
	 */
	public function getProductSort()
	{
		return $this->ProductSort;
	}
	/**
	 * Set IncludeItemArray
	 * @param boolean IncludeItemArray
	 * @return boolean
	 */
	public function setIncludeItemArray($_IncludeItemArray)
	{
		return ($this->IncludeItemArray = $_IncludeItemArray);
	}
	/**
	 * Get IncludeItemArray
	 * @return boolean
	 */
	public function getIncludeItemArray()
	{
		return $this->IncludeItemArray;
	}
	/**
	 * Set IncludeReviewDetails
	 * @param boolean IncludeReviewDetails
	 * @return boolean
	 */
	public function setIncludeReviewDetails($_IncludeReviewDetails)
	{
		return ($this->IncludeReviewDetails = $_IncludeReviewDetails);
	}
	/**
	 * Get IncludeReviewDetails
	 * @return boolean
	 */
	public function getIncludeReviewDetails()
	{
		return $this->IncludeReviewDetails;
	}
	/**
	 * Set IncludeBuyingGuideDetails
	 * @param boolean IncludeBuyingGuideDetails
	 * @return boolean
	 */
	public function setIncludeBuyingGuideDetails($_IncludeBuyingGuideDetails)
	{
		return ($this->IncludeBuyingGuideDetails = $_IncludeBuyingGuideDetails);
	}
	/**
	 * Get IncludeBuyingGuideDetails
	 * @return boolean
	 */
	public function getIncludeBuyingGuideDetails()
	{
		return $this->IncludeBuyingGuideDetails;
	}
	/**
	 * Set IncludeHistogram
	 * @param boolean IncludeHistogram
	 * @return boolean
	 */
	public function setIncludeHistogram($_IncludeHistogram)
	{
		return ($this->IncludeHistogram = $_IncludeHistogram);
	}
	/**
	 * Get IncludeHistogram
	 * @return boolean
	 */
	public function getIncludeHistogram()
	{
		return $this->IncludeHistogram;
	}
	/**
	 * Set AffiliateTrackingDetails
	 * @param AffiliateTrackingDetailsType AffiliateTrackingDetails
	 * @return AffiliateTrackingDetailsType
	 */
	public function setAffiliateTrackingDetails($_AffiliateTrackingDetails)
	{
		return ($this->AffiliateTrackingDetails = $_AffiliateTrackingDetails);
	}
	/**
	 * Get AffiliateTrackingDetails
	 * @return EbayTradingTypeAffiliateTrackingDetailsType
	 */
	public function getAffiliateTrackingDetails()
	{
		return $this->AffiliateTrackingDetails;
	}
	/**
	 * Set HideDuplicateItems
	 * @param boolean HideDuplicateItems
	 * @return boolean
	 */
	public function setHideDuplicateItems($_HideDuplicateItems)
	{
		return ($this->HideDuplicateItems = $_HideDuplicateItems);
	}
	/**
	 * Get HideDuplicateItems
	 * @return boolean
	 */
	public function getHideDuplicateItems()
	{
		return $this->HideDuplicateItems;
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