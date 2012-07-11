<?php
/**
 * Class file for EbayTradingTypeMarkUpMarkDownEventTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMarkUpMarkDownEventTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeMarkUpMarkDownEventTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'MarkUp'
	 * Meta informations :
	 * 	- documentation : (out) Status indicating the application was or is marked up.
	 * @return string 'MarkUp'
	 */
	const VALUE_MARKUP = 'MarkUp';
	/**
	 * Constant for value 'MarkDown'
	 * Meta informations :
	 * 	- documentation : (out) Status indicating the application was marked down.
	 * @return string 'MarkDown'
	 */
	const VALUE_MARKDOWN = 'MarkDown';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for future internal or external use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeMarkUpMarkDownEventTypeCodeType
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
		return in_array($_value,array(self::VALUE_MARKUP,self::VALUE_MARKDOWN,self::VALUE_CUSTOMCODE));
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