<?php
/**
 * Class file for EbayTradingTypePhotoDisplayCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePhotoDisplayCodeType
 * @date 04/07/2012
 */
class EbayTradingTypePhotoDisplayCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'None'
	 * Meta informations :
	 * 	- documentation : No special image display options. Valid for US Motors listings.
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'SlideShow'
	 * Meta informations :
	 * 	- documentation : Display multiple pictures in a slideshow format. Only available for site-hosted pictures. Deprecated with request version 381. Use SiteHostedPictureShow or VendorHostedPictureShow instead. Not valid for US Motors listings.
	 * @return string 'SlideShow'
	 */
	const VALUE_SLIDESHOW = 'SlideShow';
	/**
	 * Constant for value 'SuperSize'
	 * Meta informations :
	 * 	- documentation : Increase the size of each image and allow buyers to enlarge images further. Only available for site-hosted (EPS) images. Not valid for US Motors listings. For all sites that do not automatically upgrade SuperSize to PicturePack (see note below), specifying no SuperSize-qualified images is now accepted in the request. <br><br> <span class="tablenote"><b>Note:</b> SuperSize is automatically upgraded to PicturePack for the same SuperSize fee on the US Motors Parts & Accessories Category and US (site ID 0) and CA (site ID 2) and CAFR (site ID 210). This upgrade applies only to EPS images (including Picture Manager images). </span> <br><br>
	 * @return string 'SuperSize'
	 */
	const VALUE_SUPERSIZE = 'SuperSize';
	/**
	 * Constant for value 'PicturePack'
	 * Meta informations :
	 * 	- documentation : Increase the number of images displayed. Only available for images hosted with eBay. See GetCategoryFeatures and the online Help (on the eBay site) for additional information. Picture Pack applies to all sites (including US Motors), except for NL (site ID 146). You can specify a minimum of one EPS picture, or no SuperSize-qualified EPS pictures in the request. For the NL site, PicturePack is replaced with SuperSize.
	 * @return string 'PicturePack'
	 */
	const VALUE_PICTUREPACK = 'PicturePack';
	/**
	 * Constant for value 'SiteHostedPictureShow'
	 * Meta informations :
	 * 	- documentation : This value is no longer applicable. Formerly, the value displays multiple, site-hosted pictures in a slideshow format.
	 * @return string 'SiteHostedPictureShow'
	 */
	const VALUE_SITEHOSTEDPICTURESHOW = 'SiteHostedPictureShow';
	/**
	 * Constant for value 'VendorHostedPictureShow'
	 * Meta informations :
	 * 	- documentation : This value is no longer applicable. Formerly, the value displays multiple, vendor-hosted pictures in a slideshow format. Not valid for US Motors listings.
	 * @return string 'VendorHostedPictureShow'
	 */
	const VALUE_VENDORHOSTEDPICTURESHOW = 'VendorHostedPictureShow';
	/**
	 * Constant for value 'SuperSizePictureShow'
	 * Meta informations :
	 * 	- documentation : This value is no longer applicable. Use SuperSize instead. Formerly, the value displays multiple, super-size, site-hosted pictures in a slideshow format. Valid for US Motors listings.
	 * @return string 'SuperSizePictureShow'
	 */
	const VALUE_SUPERSIZEPICTURESHOW = 'SuperSizePictureShow';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypePhotoDisplayCodeType
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
		return in_array($_value,array(self::VALUE_NONE,self::VALUE_SLIDESHOW,self::VALUE_SUPERSIZE,self::VALUE_PICTUREPACK,self::VALUE_SITEHOSTEDPICTURESHOW,self::VALUE_VENDORHOSTEDPICTURESHOW,self::VALUE_SUPERSIZEPICTURESHOW,self::VALUE_CUSTOMCODE));
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