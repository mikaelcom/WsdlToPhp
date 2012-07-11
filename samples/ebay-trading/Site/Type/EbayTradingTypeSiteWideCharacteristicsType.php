<?php
/**
 * Class file for EbayTradingTypeSiteWideCharacteristicsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSiteWideCharacteristicsType
 * Documentation : A list of one or more characteristics sets mapped to the category, if any. Use this information when working with Item Specifics (Attributes) and Pre-filled Item Information (Catalogs) functionality.
 * @date 04/07/2012
 */
class EbayTradingTypeSiteWideCharacteristicsType extends EbayTradingWsdlClass
{
	/**
	 * The CharacteristicsSet
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container for site-wide characteristic set information. Site-wide characteristic sets are defined for return policy and item condition attributes.<br> <br> For most categories, you should use the new Item.ReturnPolicy model in listing requests instead of return policy attributes. See GetCategoryFeatures for categories that support ReturnPolicy.<br> <br> With request version 665 in the Sandbox and 667 in Production, the item condition site-wide characteristic set is no longer returned for sites that support Item.ConditionID instead. See GetCategoryFeatures for sites that support ConditionID.
	 * @var EbayTradingTypeCharacteristicsSetType
	 */
	public $CharacteristicsSet;
	/**
	 * The ExcludeCategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A category that does not support the specified site-wide characteristics set.
	 * @var string
	 */
	public $ExcludeCategoryID;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeCharacteristicsSetType CharacteristicsSet
	 * @param string ExcludeCategoryID
	 * @param DOMDocument any
	 * @return EbayTradingTypeSiteWideCharacteristicsType
	 */
	public function __construct($_CharacteristicsSet = null,$_ExcludeCategoryID = null,$_any = null)
	{
		parent::__construct(array('CharacteristicsSet'=>$_CharacteristicsSet,'ExcludeCategoryID'=>$_ExcludeCategoryID,'any'=>$_any));
	}
	/**
	 * Set CharacteristicsSet
	 * @param CharacteristicsSetType CharacteristicsSet
	 * @return CharacteristicsSetType
	 */
	public function setCharacteristicsSet($_CharacteristicsSet)
	{
		return ($this->CharacteristicsSet = $_CharacteristicsSet);
	}
	/**
	 * Get CharacteristicsSet
	 * @return EbayTradingTypeCharacteristicsSetType
	 */
	public function getCharacteristicsSet()
	{
		return $this->CharacteristicsSet;
	}
	/**
	 * Set ExcludeCategoryID
	 * @param string ExcludeCategoryID
	 * @return string
	 */
	public function setExcludeCategoryID($_ExcludeCategoryID)
	{
		return ($this->ExcludeCategoryID = $_ExcludeCategoryID);
	}
	/**
	 * Get ExcludeCategoryID
	 * @return string
	 */
	public function getExcludeCategoryID()
	{
		return $this->ExcludeCategoryID;
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