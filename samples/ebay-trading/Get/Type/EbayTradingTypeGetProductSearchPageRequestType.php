<?php
/**
 * Class file for EbayTradingTypeGetProductSearchPageRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetProductSearchPageRequestType
 * Documentation : No longer recommended. This supports an older ID-based format for describing item specifics and product details. Most eBay categories no longer support ID-based attributes. The remaining categories (e.g., US eBay Motors) will drop support for ID-based attributes by May 2012. New applications should not use ID-based attributes. Existing applications should be updated to remove all dependencies on ID-based attributes now. Instead, use FindProducts in eBay's Shopping API to search for product details.<br> <br> Retrieves the attributes a seller can use to form a query when searching for Pre-filled Item Information to use in a listing for a category that is catalog-enabled. This call is applicable for use cases related to listing items with Pre-filled Item Information. Specifically, it retrieves data that you use to construct valid "single-attribute" queries. The attributes describe search criteria (e.g., Author) and sorting criteria (e.g., Publication Year), as appropriate for the category. GetProductSearchPage does not conduct the actual product search. It only returns data about what you can search on. Use the data as input to GetProductSearchResults to conduct the actual search for product information. To retrieve Product Finder search criteria (querying against multiple attributes), use GetProductFinder instead. See the eBay Web Services guide for an overview of Pre-filled Item Information and details about searching for catalog products.
 * @date 04/07/2012
 */
class EbayTradingTypeGetProductSearchPageRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The AttributeSystemVersion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A version of the search page definitions for the site. Typically, an application passes the version value that was returned the last time the application executed this call. Filter that causes the call to return only the search pages for which the attribute meta-data has changed since the specified version. The latest version value is not necessarily greater than the previous value that was returned. Therefore, when comparing versions, only compare whether the value has changed.
	 * @var string
	 */
	public $AttributeSystemVersion;
	/**
	 * The AttributeSetID
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A characteristic set ID that is associated with a catalog-enabled category that supports product search pages. You can pass an array of these IDs in the request. Each characteristic set corresponds to a level in the eBay category hierarchy at which all items share common characteristics. Multiple categories can be mapped to the same characteristic set. Each ID is used as a filter to limit the response content to fewer characteristic sets. When IDs are specified, the call only returns search page data for the corresponding characteristic sets. When no IDs are specified, the call returns all the current search page data in the system.
	 * @var int
	 */
	public $AttributeSetID;
	/**
	 * Constructor
	 * @param string AttributeSystemVersion
	 * @param int AttributeSetID
	 * @return EbayTradingTypeGetProductSearchPageRequestType
	 */
	public function __construct($_AttributeSystemVersion = null,$_AttributeSetID = null)
	{
		EbayTradingWsdlClass::__construct(array('AttributeSystemVersion'=>$_AttributeSystemVersion,'AttributeSetID'=>$_AttributeSetID));
	}
	/**
	 * Set AttributeSystemVersion
	 * @param string AttributeSystemVersion
	 * @return string
	 */
	public function setAttributeSystemVersion($_AttributeSystemVersion)
	{
		return ($this->AttributeSystemVersion = $_AttributeSystemVersion);
	}
	/**
	 * Get AttributeSystemVersion
	 * @return string
	 */
	public function getAttributeSystemVersion()
	{
		return $this->AttributeSystemVersion;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>