<?php
/**
 * Class file for EbayTradingTypeGetAttributesCSRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetAttributesCSRequestType
 * Documentation : No longer recommended. This is an older format for describing item specifics using an ID-based model. Most eBay categories no longer support ID-based attributes. The remaining categories (e.g., US eBay Motors) will drop support for ID-based attributes by May 2012. New applications should not use ID-based attributes. Existing applications should be updated to remove all dependencies on ID-based attributes now. Instead, use GetCategorySpecifics for the newer Custom Item Specifics model.<br> <br> Retrieves an XML string that describes how to present Item Specifics to a seller who is creating a new listing. Use this information to present users with the equivalent of the Item Specifics portion of the eBay Title and Description pages and to validate selected eBay attributes on the client before including them in an AddItem call or related calls. The XML string contains a list of all the attributes that are applicable for one or more requested categories, along with related meta-data. The meta-data specifies all the possible values of each attribute, the logic for presenting the attributes to a user, and rules for validating the user's selections. <br> <br> See the eBay Web Services Guide for an overview of Item Specifics and details about the eBay attribute model.
 * @date 04/07/2012
 */
class EbayTradingTypeGetAttributesCSRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The AttributeSystemVersion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A version of the Item Specifics definitions (attribute meta-data) for the site. Typically, an application passes the version value that was returned the last time the application executed this call. Filter that causes the call to return only the characteristic sets for which the attribute meta-data has changed since the specified version. If not specified, all characteristics sets are returned. The latest version value is not necessarily greater than the previous value that was returned. Therefore, when comparing versions, only compare whether the value has changed.
	 * @var string
	 */
	public $AttributeSystemVersion;
	/**
	 * The AttributeSetID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : An array of characteristic setIDs (which always correspond to attribute set IDs). Each characteristic setcorresponds to a level in the eBay category hierarchy at which all items share common characteristics. Multiple categories can be mapped to the same characteristic set. AttributeSetIDs is an optional input. When IDs are specified, the call only returns meta-data for the corresponding characteristic sets. When no IDs are specified, the call returns all the current attribute meta-data in the system.
	 * @var int
	 */
	public $AttributeSetID;
	/**
	 * The IncludeCategoryMappingDetails
	 * Meta informations :
	 * 	- default : false
	 * 	- minOccurs : 0
	 * 	- documentation : If true, includes a list of CategoryMapping nodes in the response. Each CategoryMapping node specifies category information as well as attributes and values that your application can auto-fill for items listed in that category. See the eBay Web Services Guide for more information about options for maintaining category data and auto-filling Item Specifics.
	 * @var boolean
	 */
	public $IncludeCategoryMappingDetails;
	/**
	 * Constructor
	 * @param string AttributeSystemVersion
	 * @param int AttributeSetID
	 * @param boolean IncludeCategoryMappingDetails
	 * @return EbayTradingTypeGetAttributesCSRequestType
	 */
	public function __construct($_AttributeSystemVersion = null,$_AttributeSetID = null,$_IncludeCategoryMappingDetails = false)
	{
		EbayTradingWsdlClass::__construct(array('AttributeSystemVersion'=>$_AttributeSystemVersion,'AttributeSetID'=>$_AttributeSetID,'IncludeCategoryMappingDetails'=>$_IncludeCategoryMappingDetails));
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
	 * Set IncludeCategoryMappingDetails
	 * @param boolean IncludeCategoryMappingDetails
	 * @return boolean
	 */
	public function setIncludeCategoryMappingDetails($_IncludeCategoryMappingDetails)
	{
		return ($this->IncludeCategoryMappingDetails = $_IncludeCategoryMappingDetails);
	}
	/**
	 * Get IncludeCategoryMappingDetails
	 * @return boolean
	 */
	public function getIncludeCategoryMappingDetails()
	{
		return $this->IncludeCategoryMappingDetails;
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