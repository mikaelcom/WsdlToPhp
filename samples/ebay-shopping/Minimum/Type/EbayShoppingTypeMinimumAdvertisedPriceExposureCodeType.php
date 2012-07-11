<?php
/**
 * Class file for EbayShoppingTypeMinimumAdvertisedPriceExposureCodeType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeMinimumAdvertisedPriceExposureCodeType
 * @date 05/07/2012
 */
class EbayShoppingTypeMinimumAdvertisedPriceExposureCodeType extends EbayShoppingWsdlClass
{
	/**
	 * Constant for value 'PreCheckout'
	 * Meta informations :
	 * 	- documentation : PreCheckout specifies that the buyer must click a link (or a button) to navigate to a separate page (or window) that displays the discount price.
	 * @return string 'PreCheckout'
	 */
	const VALUE_PRECHECKOUT = 'PreCheckout';
	/**
	 * Constant for value 'DuringCheckout'
	 * Meta informations :
	 * 	- documentation : DuringCheckout specifies that the discounted price must be shown on the eBay checkout flow page.
	 * @return string 'DuringCheckout'
	 */
	const VALUE_DURINGCHECKOUT = 'DuringCheckout';
	/**
	 * Constant for value 'None'
	 * Meta informations :
	 * 	- documentation : None means the discount price is not shown via either PreCheckout nor DuringCheckout.
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayShoppingTypeMinimumAdvertisedPriceExposureCodeType
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
		return in_array($_value,array(self::VALUE_PRECHECKOUT,self::VALUE_DURINGCHECKOUT,self::VALUE_NONE,self::VALUE_CUSTOMCODE));
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