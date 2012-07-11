<?php
/**
 * Class file for GGAdwordsTypeSetting
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeSetting
 * Documentation : Base type for AdWords campaign settings.
 * @date 03/07/2012
 */
class GGAdwordsTypeSetting extends GGAdwordsWsdlClass
{
	/**
	 * The SettingType
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates that this instance is a subtype of Setting. Although this field is returned in the response, it is ignored on input and cannot be selected. Specify xsi:type instead.
	 * @var string
	 */
	public $SettingType;
	/**
	 * Constructor
	 * @param string SettingType
	 * @return GGAdwordsTypeSetting
	 */
	public function __construct($_SettingType = null)
	{
		parent::__construct(array('SettingType'=>$_SettingType));
	}
	/**
	 * Set SettingType
	 * @param string SettingType
	 * @return string
	 */
	public function setSettingType($_SettingType)
	{
		return ($this->SettingType = $_SettingType);
	}
	/**
	 * Get SettingType
	 * @return string
	 */
	public function getSettingType()
	{
		return $this->SettingType;
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