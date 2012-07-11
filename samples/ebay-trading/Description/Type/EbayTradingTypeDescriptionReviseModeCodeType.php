<?php
/**
 * Class file for EbayTradingTypeDescriptionReviseModeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDescriptionReviseModeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeDescriptionReviseModeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Replace'
	 * Meta informations :
	 * 	- documentation : (in) Specifies that you want to replace the description text of an item.
	 * @return string 'Replace'
	 */
	const VALUE_REPLACE = 'Replace';
	/**
	 * Constant for value 'Prepend'
	 * Meta informations :
	 * 	- documentation : (in) Specifies that you want to prepend text to the description text of an item.
	 * @return string 'Prepend'
	 */
	const VALUE_PREPEND = 'Prepend';
	/**
	 * Constant for value 'Append'
	 * Meta informations :
	 * 	- documentation : (in) Specifies that you want to append text to the description text of an item.
	 * @return string 'Append'
	 */
	const VALUE_APPEND = 'Append';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeDescriptionReviseModeCodeType
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
		return in_array($_value,array(self::VALUE_REPLACE,self::VALUE_PREPEND,self::VALUE_APPEND,self::VALUE_CUSTOMCODE));
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