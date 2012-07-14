<?php
/**
 * Class file for PayPalTypePhotoDisplayCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypePhotoDisplayCodeType
 * @date 14/07/2012
 */
class PayPalTypePhotoDisplayCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'None'
	 * Meta informations :
	 * 	- documentation : No special Picture Services features.
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'SlideShow'
	 * Meta informations :
	 * 	- documentation : Slideshow of multiple pictures.
	 * @return string 'SlideShow'
	 */
	const VALUE_SLIDESHOW = 'SlideShow';
	/**
	 * Constant for value 'SuperSize'
	 * Meta informations :
	 * 	- documentation : Super-size format picture.
	 * @return string 'SuperSize'
	 */
	const VALUE_SUPERSIZE = 'SuperSize';
	/**
	 * Constant for value 'PicturePack'
	 * Meta informations :
	 * 	- documentation : Picture Pack.
	 * @return string 'PicturePack'
	 */
	const VALUE_PICTUREPACK = 'PicturePack';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return PayPalTypePhotoDisplayCodeType
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
		return in_array($_value,array(self::VALUE_NONE,self::VALUE_SLIDESHOW,self::VALUE_SUPERSIZE,self::VALUE_PICTUREPACK,self::VALUE_CUSTOMCODE));
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