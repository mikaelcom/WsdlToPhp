<?php
/**
 * Class file for EbayFindTypeOutputSelectorType
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeOutputSelectorType
 * @date 04/07/2012
 */
class EbayFindTypeOutputSelectorType extends EbayFindWsdlClass
{
	/**
	 * Constant for value 'SellerInfo'
	 * Meta informations :
	 * 	- documentation : Include information about the seller in the response.
	 * @return string 'SellerInfo'
	 */
	const VALUE_SELLERINFO = 'SellerInfo';
	/**
	 * Constant for value 'StoreInfo'
	 * Meta informations :
	 * 	- documentation : Include information about the seller's eBay store in the response.
	 * @return string 'StoreInfo'
	 */
	const VALUE_STOREINFO = 'StoreInfo';
	/**
	 * Constant for value 'CategoryHistogram'
	 * Meta informations :
	 * 	- documentation : Include a CategoryHistogram container with information about categories that match your search.
	 * @return string 'CategoryHistogram'
	 */
	const VALUE_CATEGORYHISTOGRAM = 'CategoryHistogram';
	/**
	 * Constant for value 'AspectHistogram'
	 * Meta informations :
	 * 	- documentation : Include an AspectHistogram container with information about aspects from the domain that is most relevant to your search.
	 * @return string 'AspectHistogram'
	 */
	const VALUE_ASPECTHISTOGRAM = 'AspectHistogram';
	/**
	 * Constant for value 'ConditionHistogram'
	 * Meta informations :
	 * 	- documentation : Include a ConditionHistogram container with the number of items found per condition (e.g., how many items are new). This value has no effect when Condition is specified as an item filter. Supported for all eBay sites except US eBay Motors, India (IN), Malaysia (MY) and Philippines (PH).
	 * @return string 'ConditionHistogram'
	 */
	const VALUE_CONDITIONHISTOGRAM = 'ConditionHistogram';
	/**
	 * Constant for value 'GalleryInfo'
	 * Meta informations :
	 * 	- documentation : Include the GalleryInfoContainer, which contains URLs for three thumbnail images of the item in different sizes: large, medium, and small.
	 * @return string 'GalleryInfo'
	 */
	const VALUE_GALLERYINFO = 'GalleryInfo';
	/**
	 * Constant for value 'PictureURLSuperSize'
	 * Meta informations :
	 * 	- documentation : Include a URL to a picture of the item that is 800x800 pixels in size.
	 * @return string 'PictureURLSuperSize'
	 */
	const VALUE_PICTUREURLSUPERSIZE = 'PictureURLSuperSize';
	/**
	 * Constant for value 'PictureURLLarge'
	 * Meta informations :
	 * 	- documentation : Include a URL to a picture of the item that is 400x400 pixels in size.
	 * @return string 'PictureURLLarge'
	 */
	const VALUE_PICTUREURLLARGE = 'PictureURLLarge';
	/**
	 * Constructor
	 * @return EbayFindTypeOutputSelectorType
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
		return in_array($_value,array(self::VALUE_SELLERINFO,self::VALUE_STOREINFO,self::VALUE_CATEGORYHISTOGRAM,self::VALUE_ASPECTHISTOGRAM,self::VALUE_CONDITIONHISTOGRAM,self::VALUE_GALLERYINFO,self::VALUE_PICTUREURLSUPERSIZE,self::VALUE_PICTUREURLLARGE));
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