<?php
/**
 * Class file for EbayTradingTypeGetProductFinderRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetProductFinderRequestType
 * Documentation : No longer recommended. This supports an older ID-based format for describing item specifics and product details. Most eBay categories no longer support ID-based attributes. The remaining categories (e.g., US eBay Motors) will drop support for ID-based attributes by May 2012. New applications should not use ID-based attributes. Existing applications should be updated to remove all dependencies on ID-based attributes now. Instead, use FindProducts in eBay's Shopping API to search for product details.<br> <br> Retrieves data that you use to construct valid "product finder" queries (queries against multiple attributes) against catalog products or (in some cases) listed items. The attributes describe search criteria (e.g., Manufacturer), as appropriate for the category. Use the results in combination with GetProductFinderXSL to render the Product Finder in a graphical user interface.<br> <br> GetProductFinder does not conduct the actual product or listing search. It only returns data about what you can search on. Use the data as input to GetProductSearchResults to conduct the actual search for product information. <br> <br> To retrieve single-attribute search criteria (querying against a single attribute, like UPC), use GetProductSearchPage instead (only applicable for catalog searches).<br> <br> See the eBay Web Services Guide for an overview of Pre-filled Item Information and details about searching for catalog products and for information about searching for listed items.
 * @date 04/07/2012
 */
class EbayTradingTypeGetProductFinderRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The AttributeSystemVersion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A version of the product finder attribute definitions for the site. Typically, an application passes the version value that was returned the last time the application executed this call. Filter that causes the call to return only the Product Finders for which the attribute meta-data has changed since the specified version. The latest version value is not necessarily greater than the previous value that was returned. Therefore, when comparing versions, only compare whether the value has changed.
	 * @var string
	 */
	public $AttributeSystemVersion;
	/**
	 * The ProductFinderID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A number that uniquely identifies a product finder. <br> <br> For sell-side searches, you can determine the product finder IDs for a category by calling GetCategory2CS.<br> <br> For buy-side searches, you can't use GetCategory2CS to reliably determine the product finder IDs for an eBay category. GetProductFinder may work for some attributes. Alternatively, you can use the pfid parameter from the URL of the Product Finder search page on the site you're interested in. See the Knowledge Base article referenced below for more details.<br> <br> Multiple categories can be mapped to the same product finder ID. You can pass zero or multiple IDs in the request. When IDs are specified, the call only returns product finder meta-data for the specified product finders. When no IDs are specified, the call returns all the current product finder meta-data available on the site.
	 * @var int
	 */
	public $ProductFinderID;
	/**
	 * Constructor
	 * @param string AttributeSystemVersion
	 * @param int ProductFinderID
	 * @return EbayTradingTypeGetProductFinderRequestType
	 */
	public function __construct($_AttributeSystemVersion = null,$_ProductFinderID = null)
	{
		EbayTradingWsdlClass::__construct(array('AttributeSystemVersion'=>$_AttributeSystemVersion,'ProductFinderID'=>$_ProductFinderID));
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
	 * Set ProductFinderID
	 * @param int ProductFinderID
	 * @return int
	 */
	public function setProductFinderID($_ProductFinderID)
	{
		return ($this->ProductFinderID = $_ProductFinderID);
	}
	/**
	 * Get ProductFinderID
	 * @return int
	 */
	public function getProductFinderID()
	{
		return $this->ProductFinderID;
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