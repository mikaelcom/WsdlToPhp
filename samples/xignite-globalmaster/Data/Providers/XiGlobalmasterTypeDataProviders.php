<?php
/**
 * Class file for XiGlobalmasterTypeDataProviders
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeDataProviders
 * @date 08/07/2012
 */
class XiGlobalmasterTypeDataProviders extends XiGlobalmasterWsdlClass
{
	/**
	 * Constant for value 'XigniteComposite'
	 * @return string 'XigniteComposite'
	 */
	const VALUE_XIGNITECOMPOSITE = 'XigniteComposite';
	/**
	 * Constant for value 'Telekurs'
	 * @return string 'Telekurs'
	 */
	const VALUE_TELEKURS = 'Telekurs';
	/**
	 * Constant for value 'LegacyXignite'
	 * @return string 'LegacyXignite'
	 */
	const VALUE_LEGACYXIGNITE = 'LegacyXignite';
	/**
	 * Constant for value 'ExchangeWebsite'
	 * @return string 'ExchangeWebsite'
	 */
	const VALUE_EXCHANGEWEBSITE = 'ExchangeWebsite';
	/**
	 * Constant for value 'ManualXignite'
	 * @return string 'ManualXignite'
	 */
	const VALUE_MANUALXIGNITE = 'ManualXignite';
	/**
	 * Constructor
	 * @return XiGlobalmasterTypeDataProviders
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
		return in_array($_value,array(self::VALUE_XIGNITECOMPOSITE,self::VALUE_TELEKURS,self::VALUE_LEGACYXIGNITE,self::VALUE_EXCHANGEWEBSITE,self::VALUE_MANUALXIGNITE));
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