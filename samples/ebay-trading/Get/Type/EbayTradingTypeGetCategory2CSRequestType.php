<?php
/**
 * Class file for EbayTradingTypeGetCategory2CSRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetCategory2CSRequestType
 * Documentation : No longer recommended. This supports an older ID-based format for describing item specifics and product details. Most eBay categories no longer support ID-based attributes. The remaining categories (e.g., US eBay Motors) will drop support for ID-based attributes by May 2012. New applications should not use ID-based attributes. Existing applications should be updated to remove all dependencies on ID-based attributes now. Instead, use GetCategoryFeatures for the newer Custom Item Specifics model, and use FindProducts in eBay's Shopping API to search for product details.<br> <br> Retrieves mappings between categories and characteristic sets that are available for an eBay site.
 * @date 04/07/2012
 */
class EbayTradingTypeGetCategory2CSRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The CategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : ID of a category for which to retrieve mappings. If not specified, the call retrieves a map for all categories.
	 * @var string
	 */
	public $CategoryID;
	/**
	 * The AttributeSystemVersion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A version of the mappings for the site. Typically, an application passes the version value that was returned the last time the application executed this call. Filter that causes the call to return only the categories for which the mappings have changed since the specified version. If not specified, all category-to-characteristics set mappings are returned. This value changes each time changes are made to the mappings. The current version value is not necessarily greater than the previous value. Therefore, when comparing versions, only compare whether the value has changed.
	 * @var string
	 */
	public $AttributeSystemVersion;
	/**
	 * Constructor
	 * @param string CategoryID
	 * @param string AttributeSystemVersion
	 * @return EbayTradingTypeGetCategory2CSRequestType
	 */
	public function __construct($_CategoryID = null,$_AttributeSystemVersion = null)
	{
		EbayTradingWsdlClass::__construct(array('CategoryID'=>$_CategoryID,'AttributeSystemVersion'=>$_AttributeSystemVersion));
	}
	/**
	 * Set CategoryID
	 * @param string CategoryID
	 * @return string
	 */
	public function setCategoryID($_CategoryID)
	{
		return ($this->CategoryID = $_CategoryID);
	}
	/**
	 * Get CategoryID
	 * @return string
	 */
	public function getCategoryID()
	{
		return $this->CategoryID;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>