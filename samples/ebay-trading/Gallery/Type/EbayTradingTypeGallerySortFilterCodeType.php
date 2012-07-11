<?php
/**
 * Class file for EbayTradingTypeGallerySortFilterCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGallerySortFilterCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeGallerySortFilterCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'ShowAnyItems'
	 * Meta informations :
	 * 	- documentation : Show any items, in no particular order.
	 * @return string 'ShowAnyItems'
	 */
	const VALUE_SHOWANYITEMS = 'ShowAnyItems';
	/**
	 * Constant for value 'ShowItemsWithGalleryImagesFirst'
	 * Meta informations :
	 * 	- documentation : Show items with gallery images first, before other items.
	 * @return string 'ShowItemsWithGalleryImagesFirst'
	 */
	const VALUE_SHOWITEMSWITHGALLERYIMAGESFIRST = 'ShowItemsWithGalleryImagesFirst';
	/**
	 * Constant for value 'ShowOnlyItemsWithGalleryImages'
	 * Meta informations :
	 * 	- documentation : Show only items with gallery images.
	 * @return string 'ShowOnlyItemsWithGalleryImages'
	 */
	const VALUE_SHOWONLYITEMSWITHGALLERYIMAGES = 'ShowOnlyItemsWithGalleryImages';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeGallerySortFilterCodeType
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
		return in_array($_value,array(self::VALUE_SHOWANYITEMS,self::VALUE_SHOWITEMSWITHGALLERYIMAGESFIRST,self::VALUE_SHOWONLYITEMSWITHGALLERYIMAGES,self::VALUE_CUSTOMCODE));
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