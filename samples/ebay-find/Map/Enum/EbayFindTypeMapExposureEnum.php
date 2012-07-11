<?php
/**
 * Class file for EbayFindTypeMapExposureEnum
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeMapExposureEnum
 * @date 04/07/2012
 */
class EbayFindTypeMapExposureEnum extends EbayFindWsdlClass
{
	/**
	 * Constant for value 'PreCheckout'
	 * Meta informations :
	 * 	- documentation : When MinimumAdvertisedPriceExposure is set to PreCheckout, the discount price will be shown in a pop-up window that is accessed from the view item page.
	 * @return string 'PreCheckout'
	 */
	const VALUE_PRECHECKOUT = 'PreCheckout';
	/**
	 * Constant for value 'DuringCheckout'
	 * Meta informations :
	 * 	- documentation : When MinimumAdvertisedPriceExposure is set to DuringCheckout, the discount price will be shown on the checkout page.
	 * @return string 'DuringCheckout'
	 */
	const VALUE_DURINGCHECKOUT = 'DuringCheckout';
	/**
	 * Constructor
	 * @return EbayFindTypeMapExposureEnum
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
		return in_array($_value,array(self::VALUE_PRECHECKOUT,self::VALUE_DURINGCHECKOUT));
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