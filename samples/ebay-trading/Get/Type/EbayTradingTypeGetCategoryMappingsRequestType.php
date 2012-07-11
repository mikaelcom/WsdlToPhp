<?php
/**
 * Class file for EbayTradingTypeGetCategoryMappingsRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetCategoryMappingsRequestType
 * Documentation : Retrieves a map of old category IDs and corresponding active category IDs defined for the site to which the request is sent.
 * @date 04/07/2012
 */
class EbayTradingTypeGetCategoryMappingsRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The CategoryVersion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A version of the category mapping for the site. Filters out data from the call to return only the category mappings for which the data has changed since the specified version. If not specified, all category mappings are returned. Typically, an application passes the version value of the last set of category mappings that the application stored locally. The latest version value is not necessarily greater than the previous value that was returned. Therefore, when comparing versions, only compare whether the value has changed.
	 * @var string
	 */
	public $CategoryVersion;
	/**
	 * Constructor
	 * @param string CategoryVersion
	 * @return EbayTradingTypeGetCategoryMappingsRequestType
	 */
	public function __construct($_CategoryVersion = null)
	{
		EbayTradingWsdlClass::__construct(array('CategoryVersion'=>$_CategoryVersion));
	}
	/**
	 * Set CategoryVersion
	 * @param string CategoryVersion
	 * @return string
	 */
	public function setCategoryVersion($_CategoryVersion)
	{
		return ($this->CategoryVersion = $_CategoryVersion);
	}
	/**
	 * Get CategoryVersion
	 * @return string
	 */
	public function getCategoryVersion()
	{
		return $this->CategoryVersion;
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