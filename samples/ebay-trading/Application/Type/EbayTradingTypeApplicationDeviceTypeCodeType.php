<?php
/**
 * Class file for EbayTradingTypeApplicationDeviceTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeApplicationDeviceTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeApplicationDeviceTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Browser'
	 * Meta informations :
	 * 	- documentation : Browser device.
	 * @return string 'Browser'
	 */
	const VALUE_BROWSER = 'Browser';
	/**
	 * Constant for value 'Wireless'
	 * Meta informations :
	 * 	- documentation : Wireless device.
	 * @return string 'Wireless'
	 */
	const VALUE_WIRELESS = 'Wireless';
	/**
	 * Constant for value 'Desktop'
	 * Meta informations :
	 * 	- documentation : Desktop device.
	 * @return string 'Desktop'
	 */
	const VALUE_DESKTOP = 'Desktop';
	/**
	 * Constant for value 'SetTopTVBox'
	 * Meta informations :
	 * 	- documentation : SetTopTVBox device.
	 * @return string 'SetTopTVBox'
	 */
	const VALUE_SETTOPTVBOX = 'SetTopTVBox';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeApplicationDeviceTypeCodeType
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
		return in_array($_value,array(self::VALUE_BROWSER,self::VALUE_WIRELESS,self::VALUE_DESKTOP,self::VALUE_SETTOPTVBOX,self::VALUE_CUSTOMCODE));
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