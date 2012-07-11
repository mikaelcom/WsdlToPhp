<?php
/**
 * Class file for EbayTradingTypeGetCategoryMappingsResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetCategoryMappingsResponseType
 * Documentation : Returns a map of old category IDs and corresponding active category IDs defined for the site to which the request was sent. Typically used to update an older item definition with a new category ID prior to listing the item.
 * @date 04/07/2012
 */
class EbayTradingTypeGetCategoryMappingsResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The CategoryMapping
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Mapping between an old category ID and an active category ID. Returned when category mappings exist and the value of CategoryVersion is different from the current version on the site.
	 * @var EbayTradingTypeCategoryMappingType
	 */
	public $CategoryMapping;
	/**
	 * The CategoryVersion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Version value assigned to the current category mapping data for the site. Compare this value to the version value the application stored with the mappings the last time the application executed the call. If the versions are the same, the data has not changed since the last time the data was retrieved and stored.
	 * @var string
	 */
	public $CategoryVersion;
	/**
	 * Constructor
	 * @param EbayTradingTypeCategoryMappingType CategoryMapping
	 * @param string CategoryVersion
	 * @return EbayTradingTypeGetCategoryMappingsResponseType
	 */
	public function __construct($_CategoryMapping = null,$_CategoryVersion = null)
	{
		EbayTradingWsdlClass::__construct(array('CategoryMapping'=>$_CategoryMapping,'CategoryVersion'=>$_CategoryVersion));
	}
	/**
	 * Set CategoryMapping
	 * @param CategoryMappingType CategoryMapping
	 * @return CategoryMappingType
	 */
	public function setCategoryMapping($_CategoryMapping)
	{
		return ($this->CategoryMapping = $_CategoryMapping);
	}
	/**
	 * Get CategoryMapping
	 * @return EbayTradingTypeCategoryMappingType
	 */
	public function getCategoryMapping()
	{
		return $this->CategoryMapping;
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