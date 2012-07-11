<?php
/**
 * Class file for EbayTradingTypeResponseAttributeSetType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeResponseAttributeSetType
 * Documentation : A single set of one or more product families and related information returned in the results of a product search. Supports Pre-filled Item Information functionality. See the Developer's Guide for more information about working with this data.
 * @date 04/07/2012
 */
class EbayTradingTypeResponseAttributeSetType extends EbayTradingWsdlClass
{
	/**
	 * The ApproximatePages
	 * Meta informations :
	 * 	- documentation : As calculating the potentially large number of pages can affect this call's performance, and since the actual number of products returned per page can vary in each response, we cannot provide a precise total page count. Therefore, this is an estimated page count based on TotalProducts and other factors, such as the number of records eBay's search engine has examined so far in the product database. Once PageNumber approaches or exceeds this page count, we examine more records in the database and we may recalculate this value. If you estimate the number of pages yourself by using TotalProducts, EntriesPerPage, and MaxChildrenPerFamily (which is also an approximate value), your result will not necessarily match ApproximatePages.
	 * @var int
	 */
	public $ApproximatePages;
	/**
	 * The AttributeSetID
	 * Meta informations :
	 * 	- documentation : Numeric value that identifies the attribute set in a language-independent way. Unique across all eBay sites. Corresponds to a characteristic set associated with the current set of search results. Always returned when AttributeSet is returned.
	 * @var int
	 */
	public $AttributeSetID;
	/**
	 * The HasMore
	 * Meta informations :
	 * 	- documentation : If true, the query results contain additional pages (higher than the current page number). You can retrieve more results by incrementing the PageNumber value that was passed in the request.
	 * @var boolean
	 */
	public $HasMore;
	/**
	 * The ProductFamilies
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : ProductFamilies represents one product family. Multiple ProductFamilies properties can be returned. A product family identifies a group of related products. For example, the movie "My Favorite Movie: The Sequel" might be released on DVD, but there might be several editions of the DVD (e.g., in different languages) with different ISBN numbers. All variations are part of the same product family ("My Favorite Movie: The Sequel" in the DVD format). See "Limit the Quantity of Products Returned Per Family" in the eBay Web Services Guide. Always returned when AttributeSet is returned.
	 * @var EbayTradingTypeProductFamilyType
	 */
	public $ProductFamilies;
	/**
	 * The ProductFinderConstraints
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A list of attributes (constraints) that were specified in the search request. This information is useful when multiple queries were specified in a GetProductSearchResults request. Use this information to map each query to each result in the response object. Applicable when the search request was constructed based on a product finder.
	 * @var EbayTradingTypeProductFinderConstraintType
	 */
	public $ProductFinderConstraints;
	/**
	 * The TooManyMatchesFound
	 * Meta informations :
	 * 	- documentation : If too many search results match the query, the TooManyMatchesFound tag is returned with a value of true, and a warning is returned. If this occurs, it may be a good idea to ask the user to specify more details to narrow the search (e.g., specify "My Favorite Movie" instead of "My"). Always returns false for GetProductFamilyMembers.
	 * @var boolean
	 */
	public $TooManyMatchesFound;
	/**
	 * The TotalProducts
	 * Meta informations :
	 * 	- documentation : The total quantity of products that match the query (within the characteristic set). This can exceed the actual number of products returned in the current virtual page. Always returned when AttributeSet is returned.
	 * @var int
	 */
	public $TotalProducts;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int ApproximatePages
	 * @param int AttributeSetID
	 * @param boolean HasMore
	 * @param EbayTradingTypeProductFamilyType ProductFamilies
	 * @param EbayTradingTypeProductFinderConstraintType ProductFinderConstraints
	 * @param boolean TooManyMatchesFound
	 * @param int TotalProducts
	 * @param DOMDocument any
	 * @return EbayTradingTypeResponseAttributeSetType
	 */
	public function __construct($_ApproximatePages = null,$_AttributeSetID = null,$_HasMore = null,$_ProductFamilies = null,$_ProductFinderConstraints = null,$_TooManyMatchesFound = null,$_TotalProducts = null,$_any = null)
	{
		parent::__construct(array('ApproximatePages'=>$_ApproximatePages,'AttributeSetID'=>$_AttributeSetID,'HasMore'=>$_HasMore,'ProductFamilies'=>$_ProductFamilies,'ProductFinderConstraints'=>$_ProductFinderConstraints,'TooManyMatchesFound'=>$_TooManyMatchesFound,'TotalProducts'=>$_TotalProducts,'any'=>$_any));
	}
	/**
	 * Set ApproximatePages
	 * @param int ApproximatePages
	 * @return int
	 */
	public function setApproximatePages($_ApproximatePages)
	{
		return ($this->ApproximatePages = $_ApproximatePages);
	}
	/**
	 * Get ApproximatePages
	 * @return int
	 */
	public function getApproximatePages()
	{
		return $this->ApproximatePages;
	}
	/**
	 * Set AttributeSetID
	 * @param int AttributeSetID
	 * @return int
	 */
	public function setAttributeSetID($_AttributeSetID)
	{
		return ($this->AttributeSetID = $_AttributeSetID);
	}
	/**
	 * Get AttributeSetID
	 * @return int
	 */
	public function getAttributeSetID()
	{
		return $this->AttributeSetID;
	}
	/**
	 * Set HasMore
	 * @param boolean HasMore
	 * @return boolean
	 */
	public function setHasMore($_HasMore)
	{
		return ($this->HasMore = $_HasMore);
	}
	/**
	 * Get HasMore
	 * @return boolean
	 */
	public function getHasMore()
	{
		return $this->HasMore;
	}
	/**
	 * Set ProductFamilies
	 * @param ProductFamilyType ProductFamilies
	 * @return ProductFamilyType
	 */
	public function setProductFamilies($_ProductFamilies)
	{
		return ($this->ProductFamilies = $_ProductFamilies);
	}
	/**
	 * Get ProductFamilies
	 * @return EbayTradingTypeProductFamilyType
	 */
	public function getProductFamilies()
	{
		return $this->ProductFamilies;
	}
	/**
	 * Set ProductFinderConstraints
	 * @param ProductFinderConstraintType ProductFinderConstraints
	 * @return ProductFinderConstraintType
	 */
	public function setProductFinderConstraints($_ProductFinderConstraints)
	{
		return ($this->ProductFinderConstraints = $_ProductFinderConstraints);
	}
	/**
	 * Get ProductFinderConstraints
	 * @return EbayTradingTypeProductFinderConstraintType
	 */
	public function getProductFinderConstraints()
	{
		return $this->ProductFinderConstraints;
	}
	/**
	 * Set TooManyMatchesFound
	 * @param boolean TooManyMatchesFound
	 * @return boolean
	 */
	public function setTooManyMatchesFound($_TooManyMatchesFound)
	{
		return ($this->TooManyMatchesFound = $_TooManyMatchesFound);
	}
	/**
	 * Get TooManyMatchesFound
	 * @return boolean
	 */
	public function getTooManyMatchesFound()
	{
		return $this->TooManyMatchesFound;
	}
	/**
	 * Set TotalProducts
	 * @param int TotalProducts
	 * @return int
	 */
	public function setTotalProducts($_TotalProducts)
	{
		return ($this->TotalProducts = $_TotalProducts);
	}
	/**
	 * Get TotalProducts
	 * @return int
	 */
	public function getTotalProducts()
	{
		return $this->TotalProducts;
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