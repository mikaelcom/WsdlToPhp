<?php
/**
 * Class file for EbayTradingTypePictureManagerPictureDisplayTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePictureManagerPictureDisplayTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypePictureManagerPictureDisplayTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Thumbnail'
	 * Meta informations :
	 * 	- documentation : A small image, thumbnail size. Maximum size 96 pixels.
	 * @return string 'Thumbnail'
	 */
	const VALUE_THUMBNAIL = 'Thumbnail';
	/**
	 * Constant for value 'BIBO'
	 * Meta informations :
	 * 	- documentation : A BIBO image. Maximum size 200 pixels.
	 * @return string 'BIBO'
	 */
	const VALUE_BIBO = 'BIBO';
	/**
	 * Constant for value 'Standard'
	 * Meta informations :
	 * 	- documentation : A standard size image. Maximum size 400 pixels.
	 * @return string 'Standard'
	 */
	const VALUE_STANDARD = 'Standard';
	/**
	 * Constant for value 'Large'
	 * Meta informations :
	 * 	- documentation : A large image. Maximum size 500 pixels.
	 * @return string 'Large'
	 */
	const VALUE_LARGE = 'Large';
	/**
	 * Constant for value 'Supersize'
	 * Meta informations :
	 * 	- documentation : A very large image. Maximum size 800 pixels.
	 * @return string 'Supersize'
	 */
	const VALUE_SUPERSIZE = 'Supersize';
	/**
	 * Constant for value 'Original'
	 * Meta informations :
	 * 	- documentation : The original uploaded image.
	 * @return string 'Original'
	 */
	const VALUE_ORIGINAL = 'Original';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypePictureManagerPictureDisplayTypeCodeType
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
		return in_array($_value,array(self::VALUE_THUMBNAIL,self::VALUE_BIBO,self::VALUE_STANDARD,self::VALUE_LARGE,self::VALUE_SUPERSIZE,self::VALUE_ORIGINAL,self::VALUE_CUSTOMCODE));
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