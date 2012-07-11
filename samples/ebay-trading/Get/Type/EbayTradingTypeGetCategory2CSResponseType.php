<?php
/**
 * Class file for EbayTradingTypeGetCategory2CSResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetCategory2CSResponseType
 * Documentation : Returns data that indicates the categories that are mapped to characteristics sets, for the eBay site to which the call was routed. Retrieves all mappings or just the one that matches the category ID passed as input. The data is returned in a CategoryArrayType object, which can contain multiple mappings. The response also contains information about categories for which the mappings have changed.<br> <br> <span class="tablenote"><b>Note:</b> The Pre-filled Item Information feature depends on the Item Specifics feature. This means the set of catalog-enabled categories is a subset of the categories that are mapped to characteristic sets. That is, there are no catalog-enabled categories that are not mapped to characteristic sets.</span>
 * @date 04/07/2012
 */
class EbayTradingTypeGetCategory2CSResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The MappedCategoryArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains data about categories that are mapped to characteristics sets. Use this data to determine:<br> - The names and IDs of the characteristics sets<br> - The availability of the Pre-filled Item Information feature for listings in that category (i.e., whether the category is catalog-enabled)<br> - For catalog-enabled categories, the available product search methods<br> - The current version information for the complete mapping<br> - The version information for each characteristics set
	 * @var EbayTradingTypeCategoryArrayType
	 */
	public $MappedCategoryArray;
	/**
	 * The UnmappedCategoryArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains data about categories (if any) whose characteristics set mappings have changed since the version specified in the request. When a characteristics set mapping changes, the data appears in both the UnmappedCategoryArray object (to indicate that the change occurred) and the MappedCategoryArray object.
	 * @var EbayTradingTypeCategoryArrayType
	 */
	public $UnmappedCategoryArray;
	/**
	 * The AttributeSystemVersion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Current version of the mappings for the site. This value changes each time changes are made to the mappings. The current version value is not necessarily greater than the previous value. Therefore, when comparing versions, only compare whether the value has changed.
	 * @var string
	 */
	public $AttributeSystemVersion;
	/**
	 * The SiteWideCharacteristicSets
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A list of one or more characteristics sets mapped to the category, if any. Use this information when working with Item Specifics (Attributes) and Pre-filled Item Information (Catalogs) functionality.
	 * @var EbayTradingTypeSiteWideCharacteristicsType
	 */
	public $SiteWideCharacteristicSets;
	/**
	 * Constructor
	 * @param EbayTradingTypeCategoryArrayType MappedCategoryArray
	 * @param EbayTradingTypeCategoryArrayType UnmappedCategoryArray
	 * @param string AttributeSystemVersion
	 * @param EbayTradingTypeSiteWideCharacteristicsType SiteWideCharacteristicSets
	 * @return EbayTradingTypeGetCategory2CSResponseType
	 */
	public function __construct($_MappedCategoryArray = null,$_UnmappedCategoryArray = null,$_AttributeSystemVersion = null,$_SiteWideCharacteristicSets = null)
	{
		EbayTradingWsdlClass::__construct(array('MappedCategoryArray'=>$_MappedCategoryArray,'UnmappedCategoryArray'=>$_UnmappedCategoryArray,'AttributeSystemVersion'=>$_AttributeSystemVersion,'SiteWideCharacteristicSets'=>$_SiteWideCharacteristicSets));
	}
	/**
	 * Set MappedCategoryArray
	 * @param CategoryArrayType MappedCategoryArray
	 * @return CategoryArrayType
	 */
	public function setMappedCategoryArray($_MappedCategoryArray)
	{
		return ($this->MappedCategoryArray = $_MappedCategoryArray);
	}
	/**
	 * Get MappedCategoryArray
	 * @return EbayTradingTypeCategoryArrayType
	 */
	public function getMappedCategoryArray()
	{
		return $this->MappedCategoryArray;
	}
	/**
	 * Set UnmappedCategoryArray
	 * @param CategoryArrayType UnmappedCategoryArray
	 * @return CategoryArrayType
	 */
	public function setUnmappedCategoryArray($_UnmappedCategoryArray)
	{
		return ($this->UnmappedCategoryArray = $_UnmappedCategoryArray);
	}
	/**
	 * Get UnmappedCategoryArray
	 * @return EbayTradingTypeCategoryArrayType
	 */
	public function getUnmappedCategoryArray()
	{
		return $this->UnmappedCategoryArray;
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
	 * Set SiteWideCharacteristicSets
	 * @param SiteWideCharacteristicsType SiteWideCharacteristicSets
	 * @return SiteWideCharacteristicsType
	 */
	public function setSiteWideCharacteristicSets($_SiteWideCharacteristicSets)
	{
		return ($this->SiteWideCharacteristicSets = $_SiteWideCharacteristicSets);
	}
	/**
	 * Get SiteWideCharacteristicSets
	 * @return EbayTradingTypeSiteWideCharacteristicsType
	 */
	public function getSiteWideCharacteristicSets()
	{
		return $this->SiteWideCharacteristicSets;
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