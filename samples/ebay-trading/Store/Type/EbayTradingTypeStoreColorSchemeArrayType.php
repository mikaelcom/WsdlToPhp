<?php
/**
 * Class file for EbayTradingTypeStoreColorSchemeArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeStoreColorSchemeArrayType
 * Documentation : Set of eBay Store color schemes.
 * @date 04/07/2012
 */
class EbayTradingTypeStoreColorSchemeArrayType extends EbayTradingWsdlClass
{
	/**
	 * The ColorScheme
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A Store color scheme.
	 * @var EbayTradingTypeStoreColorSchemeType
	 */
	public $ColorScheme;
	/**
	 * Constructor
	 * @param EbayTradingTypeStoreColorSchemeType ColorScheme
	 * @return EbayTradingTypeStoreColorSchemeArrayType
	 */
	public function __construct($_ColorScheme = null)
	{
		parent::__construct(array('ColorScheme'=>$_ColorScheme));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>