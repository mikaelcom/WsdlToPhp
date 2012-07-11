<?php
/**
 * Class file for EbayTradingTypeStoreThemeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeStoreThemeType
 * Documentation : Store theme.
 * @date 04/07/2012
 */
class EbayTradingTypeStoreThemeType extends EbayTradingWsdlClass
{
	/**
	 * The ThemeID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Store theme ID (use GetStoreOptions to get the list of valid theme IDs).
	 * @var int
	 */
	public $ThemeID;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Store theme name. Provides a user-friendly name for the theme.
	 * @var string
	 */
	public $Name;
	/**
	 * The ColorScheme
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Theme color scheme.
	 * @var EbayTradingTypeStoreColorSchemeType
	 */
	public $ColorScheme;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int ThemeID
	 * @param string Name
	 * @param EbayTradingTypeStoreColorSchemeType ColorScheme
	 * @param DOMDocument any
	 * @return EbayTradingTypeStoreThemeType
	 */
	public function __construct($_ThemeID = null,$_Name = null,$_ColorScheme = null,$_any = null)
	{
		parent::__construct(array('ThemeID'=>$_ThemeID,'Name'=>$_Name,'ColorScheme'=>$_ColorScheme,'any'=>$_any));
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
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set ColorScheme
	 * @param StoreColorSchemeType ColorScheme
	 * @return StoreColorSchemeType
	 */
	public function setColorScheme($_ColorScheme)
	{
		return ($this->ColorScheme = $_ColorScheme);
	}
	/**
	 * Get ColorScheme
	 * @return EbayTradingTypeStoreColorSchemeType
	 */
	public function getColorScheme()
	{
		return $this->ColorScheme;
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