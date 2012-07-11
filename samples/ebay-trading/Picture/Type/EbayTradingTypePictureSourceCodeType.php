<?php
/**
 * Class file for EbayTradingTypePictureSourceCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePictureSourceCodeType
 * @date 04/07/2012
 */
class EbayTradingTypePictureSourceCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'EPS'
	 * Meta informations :
	 * 	- documentation : (out) The PictureURL images are hosted by eBay Picture Services and the seller is not a Picture Manager subscriber.
	 * @return string 'EPS'
	 */
	const VALUE_EPS = 'EPS';
	/**
	 * Constant for value 'PictureManager'
	 * Meta informations :
	 * 	- documentation : (out) The PictureURL images are hosted by eBay Picture Manager and the seller is a Picture Manager subscriber.
	 * @return string 'PictureManager'
	 */
	const VALUE_PICTUREMANAGER = 'PictureManager';
	/**
	 * Constant for value 'Vendor'
	 * Meta informations :
	 * 	- documentation : (out) The PictureURL images are not hosted by eBay.
	 * @return string 'Vendor'
	 */
	const VALUE_VENDOR = 'Vendor';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypePictureSourceCodeType
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
		return in_array($_value,array(self::VALUE_EPS,self::VALUE_PICTUREMANAGER,self::VALUE_VENDOR,self::VALUE_CUSTOMCODE));
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