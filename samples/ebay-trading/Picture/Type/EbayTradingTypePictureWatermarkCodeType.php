<?php
/**
 * Class file for EbayTradingTypePictureWatermarkCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePictureWatermarkCodeType
 * @date 04/07/2012
 */
class EbayTradingTypePictureWatermarkCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'User'
	 * Meta informations :
	 * 	- documentation : SellerId watermark option for EPS upload functionality.
	 * @return string 'User'
	 */
	const VALUE_USER = 'User';
	/**
	 * Constant for value 'Icon'
	 * Meta informations :
	 * 	- documentation : Icon watermark option for EPS upload functionality.
	 * @return string 'Icon'
	 */
	const VALUE_ICON = 'Icon';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypePictureWatermarkCodeType
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
		return in_array($_value,array(self::VALUE_USER,self::VALUE_ICON,self::VALUE_CUSTOMCODE));
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