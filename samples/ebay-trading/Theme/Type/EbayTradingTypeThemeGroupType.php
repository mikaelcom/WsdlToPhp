<?php
/**
 * Class file for EbayTradingTypeThemeGroupType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeThemeGroupType
 * Documentation : Data for one theme group. Returned for GetDescriptionTemplates if theme groups are requested.
 * @date 04/07/2012
 */
class EbayTradingTypeThemeGroupType extends EbayTradingWsdlClass
{
	/**
	 * The GroupID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for this theme group.
	 * @var int
	 */
	public $GroupID;
	/**
	 * The GroupName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Name of this theme group (localized to the language associated with the eBay site).
	 * @var string
	 */
	public $GroupName;
	/**
	 * The ThemeID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Unique identifier for each theme in this group. There is at least one theme in a theme group.
	 * @var int
	 */
	public $ThemeID;
	/**
	 * The ThemeTotal
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of ThemeID elements in this group.
	 * @var int
	 */
	public $ThemeTotal;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int GroupID
	 * @param string GroupName
	 * @param int ThemeID
	 * @param int ThemeTotal
	 * @param DOMDocument any
	 * @return EbayTradingTypeThemeGroupType
	 */
	public function __construct($_GroupID = null,$_GroupName = null,$_ThemeID = null,$_ThemeTotal = null,$_any = null)
	{
		parent::__construct(array('GroupID'=>$_GroupID,'GroupName'=>$_GroupName,'ThemeID'=>$_ThemeID,'ThemeTotal'=>$_ThemeTotal,'any'=>$_any));
	}
	/**
	 * Set GroupID
	 * @param int GroupID
	 * @return int
	 */
	public function setGroupID($_GroupID)
	{
		return ($this->GroupID = $_GroupID);
	}
	/**
	 * Get GroupID
	 * @return int
	 */
	public function getGroupID()
	{
		return $this->GroupID;
	}
	/**
	 * Set GroupName
	 * @param string GroupName
	 * @return string
	 */
	public function setGroupName($_GroupName)
	{
		return ($this->GroupName = $_GroupName);
	}
	/**
	 * Get GroupName
	 * @return string
	 */
	public function getGroupName()
	{
		return $this->GroupName;
	}
	/**
	 * Set ThemeID
	 * @param int ThemeID
	 * @return int
	 */
	public function setThemeID($_ThemeID)
	{
		return ($this->ThemeID = $_ThemeID);
	}
	/**
	 * Get ThemeID
	 * @return int
	 */
	public function getThemeID()
	{
		return $this->ThemeID;
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