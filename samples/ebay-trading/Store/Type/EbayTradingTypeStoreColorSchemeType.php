<?php
/**
 * Class file for EbayTradingTypeStoreColorSchemeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeStoreColorSchemeType
 * Documentation : Store color scheme.
 * @date 04/07/2012
 */
class EbayTradingTypeStoreColorSchemeType extends EbayTradingWsdlClass
{
	/**
	 * The ColorSchemeID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Store color scheme ID. (use GetStoreOptions to get the list of valid theme color scheme IDs).
	 * @var int
	 */
	public $ColorSchemeID;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Store color scheme name. Provides a user-friendly name for the color scheme.
	 * @var string
	 */
	public $Name;
	/**
	 * The Color
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Store color set.
	 * @var EbayTradingTypeStoreColorType
	 */
	public $Color;
	/**
	 * The Font
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container consisting of the Store's font properties. This container is not returned if an eBay predefined store theme is used 'as is'. Use the <a href="http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/GetStoreOptions.htmlGetStoreOptions">GetStoreOptions</a> call to retrieve the complete set of data for the list of predefined eBay Stores options, including the themes and color schemes.
	 * @var EbayTradingTypeStoreFontType
	 */
	public $Font;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int ColorSchemeID
	 * @param string Name
	 * @param EbayTradingTypeStoreColorType Color
	 * @param EbayTradingTypeStoreFontType Font
	 * @param DOMDocument any
	 * @return EbayTradingTypeStoreColorSchemeType
	 */
	public function __construct($_ColorSchemeID = null,$_Name = null,$_Color = null,$_Font = null,$_any = null)
	{
		parent::__construct(array('ColorSchemeID'=>$_ColorSchemeID,'Name'=>$_Name,'Color'=>$_Color,'Font'=>$_Font,'any'=>$_any));
	}
	/**
	 * Set ColorSchemeID
	 * @param int ColorSchemeID
	 * @return int
	 */
	public function setColorSchemeID($_ColorSchemeID)
	{
		return ($this->ColorSchemeID = $_ColorSchemeID);
	}
	/**
	 * Get ColorSchemeID
	 * @return int
	 */
	public function getColorSchemeID()
	{
		return $this->ColorSchemeID;
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
	 * Set Color
	 * @param StoreColorType Color
	 * @return StoreColorType
	 */
	public function setColor($_Color)
	{
		return ($this->Color = $_Color);
	}
	/**
	 * Get Color
	 * @return EbayTradingTypeStoreColorType
	 */
	public function getColor()
	{
		return $this->Color;
	}
	/**
	 * Set Font
	 * @param StoreFontType Font
	 * @return StoreFontType
	 */
	public function setFont($_Font)
	{
		return ($this->Font = $_Font);
	}
	/**
	 * Get Font
	 * @return EbayTradingTypeStoreFontType
	 */
	public function getFont()
	{
		return $this->Font;
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