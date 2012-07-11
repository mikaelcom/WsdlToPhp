<?php
/**
 * Class file for EbayTradingTypeStoreThemeArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeStoreThemeArrayType
 * Documentation : Set of Store themes.
 * @date 04/07/2012
 */
class EbayTradingTypeStoreThemeArrayType extends EbayTradingWsdlClass
{
	/**
	 * The Theme
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A Store theme.
	 * @var EbayTradingTypeStoreThemeType
	 */
	public $Theme;
	/**
	 * The GenericColorSchemeArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Set of color schemes. This set is for use with those themes that do not explicitly list a color scheme in the theme definition (these themes are also known as advanced themes).
	 * @var EbayTradingTypeStoreColorSchemeArrayType
	 */
	public $GenericColorSchemeArray;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeStoreThemeType Theme
	 * @param EbayTradingTypeStoreColorSchemeArrayType GenericColorSchemeArray
	 * @param DOMDocument any
	 * @return EbayTradingTypeStoreThemeArrayType
	 */
	public function __construct($_Theme = null,$_GenericColorSchemeArray = null,$_any = null)
	{
		parent::__construct(array('Theme'=>$_Theme,'GenericColorSchemeArray'=>$_GenericColorSchemeArray,'any'=>$_any));
	}
	/**
	 * Set Theme
	 * @param StoreThemeType Theme
	 * @return StoreThemeType
	 */
	public function setTheme($_Theme)
	{
		return ($this->Theme = $_Theme);
	}
	/**
	 * Get Theme
	 * @return EbayTradingTypeStoreThemeType
	 */
	public function getTheme()
	{
		return $this->Theme;
	}
	/**
	 * Set GenericColorSchemeArray
	 * @param StoreColorSchemeArrayType GenericColorSchemeArray
	 * @return StoreColorSchemeArrayType
	 */
	public function setGenericColorSchemeArray($_GenericColorSchemeArray)
	{
		return ($this->GenericColorSchemeArray = $_GenericColorSchemeArray);
	}
	/**
	 * Get GenericColorSchemeArray
	 * @return EbayTradingTypeStoreColorSchemeArrayType
	 */
	public function getGenericColorSchemeArray()
	{
		return $this->GenericColorSchemeArray;
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