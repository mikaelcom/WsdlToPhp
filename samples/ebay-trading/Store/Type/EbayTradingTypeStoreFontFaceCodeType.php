<?php
/**
 * Class file for EbayTradingTypeStoreFontFaceCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeStoreFontFaceCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeStoreFontFaceCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Arial'
	 * Meta informations :
	 * 	- documentation : Arial font.
	 * @return string 'Arial'
	 */
	const VALUE_ARIAL = 'Arial';
	/**
	 * Constant for value 'Courier'
	 * Meta informations :
	 * 	- documentation : Courier font.
	 * @return string 'Courier'
	 */
	const VALUE_COURIER = 'Courier';
	/**
	 * Constant for value 'Times'
	 * Meta informations :
	 * 	- documentation : Times New Roman font.
	 * @return string 'Times'
	 */
	const VALUE_TIMES = 'Times';
	/**
	 * Constant for value 'Verdana'
	 * Meta informations :
	 * 	- documentation : Verdana font.
	 * @return string 'Verdana'
	 */
	const VALUE_VERDANA = 'Verdana';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeStoreFontFaceCodeType
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
		return in_array($_value,array(self::VALUE_ARIAL,self::VALUE_COURIER,self::VALUE_TIMES,self::VALUE_VERDANA,self::VALUE_CUSTOMCODE));
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