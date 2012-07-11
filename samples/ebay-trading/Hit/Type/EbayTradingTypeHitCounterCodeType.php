<?php
/**
 * Class file for EbayTradingTypeHitCounterCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeHitCounterCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeHitCounterCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'NoHitCounter'
	 * Meta informations :
	 * 	- documentation : No hit counter. The number of page views will not be available.
	 * @return string 'NoHitCounter'
	 */
	const VALUE_NOHITCOUNTER = 'NoHitCounter';
	/**
	 * Constant for value 'HonestyStyle'
	 * Meta informations :
	 * 	- documentation : A basic style hit counter (US only). Non-US sites will return errors if they use HonestyStyle as input, and should use BasicStyle instead.
	 * @return string 'HonestyStyle'
	 */
	const VALUE_HONESTYSTYLE = 'HonestyStyle';
	/**
	 * Constant for value 'GreenLED'
	 * Meta informations :
	 * 	- documentation : A green LED, computer-style hit counter (US only). Non-US sites will return errors if they use GreenLED as input, and should use RetroStyle instead.
	 * @return string 'GreenLED'
	 */
	const VALUE_GREENLED = 'GreenLED';
	/**
	 * Constant for value 'Hidden'
	 * Meta informations :
	 * 	- documentation : A hidden hit counter (US only). The number of page views will only be available to the item's seller. For faster "View Item" page loads, use HiddenStyle.
	 * @return string 'Hidden'
	 */
	const VALUE_HIDDEN = 'Hidden';
	/**
	 * Constant for value 'BasicStyle'
	 * Meta informations :
	 * 	- documentation : A basic style hit counter.
	 * @return string 'BasicStyle'
	 */
	const VALUE_BASICSTYLE = 'BasicStyle';
	/**
	 * Constant for value 'RetroStyle'
	 * Meta informations :
	 * 	- documentation : A retro, computer-style hit counter.
	 * @return string 'RetroStyle'
	 */
	const VALUE_RETROSTYLE = 'RetroStyle';
	/**
	 * Constant for value 'HiddenStyle'
	 * Meta informations :
	 * 	- documentation : A hidden hit counter. The number of page views will only be available to the item's seller.
	 * @return string 'HiddenStyle'
	 */
	const VALUE_HIDDENSTYLE = 'HiddenStyle';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeHitCounterCodeType
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
		return in_array($_value,array(self::VALUE_NOHITCOUNTER,self::VALUE_HONESTYSTYLE,self::VALUE_GREENLED,self::VALUE_HIDDEN,self::VALUE_BASICSTYLE,self::VALUE_RETROSTYLE,self::VALUE_HIDDENSTYLE,self::VALUE_CUSTOMCODE));
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