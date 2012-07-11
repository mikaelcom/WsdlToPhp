<?php
/**
 * Class file for EbayTradingTypePictureFormatCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePictureFormatCodeType
 * @date 04/07/2012
 */
class EbayTradingTypePictureFormatCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'JPG'
	 * Meta informations :
	 * 	- documentation : JPG format.
	 * @return string 'JPG'
	 */
	const VALUE_JPG = 'JPG';
	/**
	 * Constant for value 'GIF'
	 * Meta informations :
	 * 	- documentation : GIF format.
	 * @return string 'GIF'
	 */
	const VALUE_GIF = 'GIF';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypePictureFormatCodeType
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
		return in_array($_value,array(self::VALUE_JPG,self::VALUE_GIF,self::VALUE_CUSTOMCODE));
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