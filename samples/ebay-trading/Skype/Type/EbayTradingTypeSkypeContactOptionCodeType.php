<?php
/**
 * Class file for EbayTradingTypeSkypeContactOptionCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSkypeContactOptionCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeSkypeContactOptionCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Chat'
	 * Meta informations :
	 * 	- documentation : The Skype Chat contact option.
	 * @return string 'Chat'
	 */
	const VALUE_CHAT = 'Chat';
	/**
	 * Constant for value 'Voice'
	 * Meta informations :
	 * 	- documentation : The Skype Voice contact option.
	 * @return string 'Voice'
	 */
	const VALUE_VOICE = 'Voice';
	/**
	 * Constant for value 'CustomCode'
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeSkypeContactOptionCodeType
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
		return in_array($_value,array(self::VALUE_CHAT,self::VALUE_VOICE,self::VALUE_CUSTOMCODE));
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