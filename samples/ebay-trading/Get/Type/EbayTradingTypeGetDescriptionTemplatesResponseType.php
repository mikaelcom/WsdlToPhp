<?php
/**
 * Class file for EbayTradingTypeGetDescriptionTemplatesResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetDescriptionTemplatesResponseType
 * Documentation : Returned after calling GetDescriptionTemplatesRequest.
 * @date 04/07/2012
 */
class EbayTradingTypeGetDescriptionTemplatesResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The DescriptionTemplate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The information for one Theme or one Layout. There can be multiple DescriptionTemplates.
	 * @var EbayTradingTypeDescriptionTemplateType
	 */
	public $DescriptionTemplate;
	/**
	 * The LayoutTotal
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of Layout templates returned (that is, the number of DescriptionTemplates for which Type is "Layout").
	 * @var int
	 */
	public $LayoutTotal;
	/**
	 * The ObsoleteLayoutID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The ID of a returned layout that is obsolete. There can be zero or more IDs.
	 * @var int
	 */
	public $ObsoleteLayoutID;
	/**
	 * The ObsoleteThemeID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The ID of a returned theme that is obsolete. There can be zero or more IDs.
	 * @var int
	 */
	public $ObsoleteThemeID;
	/**
	 * The ThemeGroup
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Data for one theme group. There can be multiple ThemeGroups in the response.
	 * @var EbayTradingTypeThemeGroupType
	 */
	public $ThemeGroup;
	/**
	 * The ThemeTotal
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of Theme templates returned (that is, the number of DescriptionTemplates for which Type is "Theme").
	 * @var int
	 */
	public $ThemeTotal;
	/**
	 * Constructor
	 * @param EbayTradingTypeDescriptionTemplateType DescriptionTemplate
	 * @param int LayoutTotal
	 * @param int ObsoleteLayoutID
	 * @param int ObsoleteThemeID
	 * @param EbayTradingTypeThemeGroupType ThemeGroup
	 * @param int ThemeTotal
	 * @return EbayTradingTypeGetDescriptionTemplatesResponseType
	 */
	public function __construct($_DescriptionTemplate = null,$_LayoutTotal = null,$_ObsoleteLayoutID = null,$_ObsoleteThemeID = null,$_ThemeGroup = null,$_ThemeTotal = null)
	{
		EbayTradingWsdlClass::__construct(array('DescriptionTemplate'=>$_DescriptionTemplate,'LayoutTotal'=>$_LayoutTotal,'ObsoleteLayoutID'=>$_ObsoleteLayoutID,'ObsoleteThemeID'=>$_ObsoleteThemeID,'ThemeGroup'=>$_ThemeGroup,'ThemeTotal'=>$_ThemeTotal));
	}
	/**
	 * Set DescriptionTemplate
	 * @param DescriptionTemplateType DescriptionTemplate
	 * @return DescriptionTemplateType
	 */
	public function setDescriptionTemplate($_DescriptionTemplate)
	{
		return ($this->DescriptionTemplate = $_DescriptionTemplate);
	}
	/**
	 * Get DescriptionTemplate
	 * @return EbayTradingTypeDescriptionTemplateType
	 */
	public function getDescriptionTemplate()
	{
		return $this->DescriptionTemplate;
	}
	/**
	 * Set LayoutTotal
	 * @param int LayoutTotal
	 * @return int
	 */
	public function setLayoutTotal($_LayoutTotal)
	{
		return ($this->LayoutTotal = $_LayoutTotal);
	}
	/**
	 * Get LayoutTotal
	 * @return int
	 */
	public function getLayoutTotal()
	{
		return $this->LayoutTotal;
	}
	/**
	 * Set ObsoleteLayoutID
	 * @param int ObsoleteLayoutID
	 * @return int
	 */
	public function setObsoleteLayoutID($_ObsoleteLayoutID)
	{
		return ($this->ObsoleteLayoutID = $_ObsoleteLayoutID);
	}
	/**
	 * Get ObsoleteLayoutID
	 * @return int
	 */
	public function getObsoleteLayoutID()
	{
		return $this->ObsoleteLayoutID;
	}
	/**
	 * Set ObsoleteThemeID
	 * @param int ObsoleteThemeID
	 * @return int
	 */
	public function setObsoleteThemeID($_ObsoleteThemeID)
	{
		return ($this->ObsoleteThemeID = $_ObsoleteThemeID);
	}
	/**
	 * Get ObsoleteThemeID
	 * @return int
	 */
	public function getObsoleteThemeID()
	{
		return $this->ObsoleteThemeID;
	}
	/**
	 * Set ThemeGroup
	 * @param ThemeGroupType ThemeGroup
	 * @return ThemeGroupType
	 */
	public function setThemeGroup($_ThemeGroup)
	{
		return ($this->ThemeGroup = $_ThemeGroup);
	}
	/**
	 * Get ThemeGroup
	 * @return EbayTradingTypeThemeGroupType
	 */
	public function getThemeGroup()
	{
		return $this->ThemeGroup;
	}
	/**
	 * Set ThemeTotal
	 * @param int ThemeTotal
	 * @return int
	 */
	public function setThemeTotal($_ThemeTotal)
	{
		return ($this->ThemeTotal = $_ThemeTotal);
	}
	/**
	 * Get ThemeTotal
	 * @return int
	 */
	public function getThemeTotal()
	{
		return $this->ThemeTotal;
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