<?php
/**
 * Class file for EbayTradingTypeStoreItemListLayoutCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeStoreItemListLayoutCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeStoreItemListLayoutCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'ListView'
	 * Meta informations :
	 * 	- documentation : Displays item list as a single column, with smaller item pictures.
	 * @return string 'ListView'
	 */
	const VALUE_LISTVIEW = 'ListView';
	/**
	 * Constant for value 'GalleryView'
	 * Meta informations :
	 * 	- documentation : Displays item list in two columns, with larger item pictures.
	 * @return string 'GalleryView'
	 */
	const VALUE_GALLERYVIEW = 'GalleryView';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeStoreItemListLayoutCodeType
	 */
	public function __construct()
	{
		parent::__construct(array());
	}
	/**
	 * Return true if value is allowed
	 * @param string value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(self::VALUE_LISTVIEW,self::VALUE_GALLERYVIEW,self::VALUE_CUSTOMCODE));
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