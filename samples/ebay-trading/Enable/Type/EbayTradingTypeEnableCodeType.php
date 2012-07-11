<?php
/**
 * Class file for EbayTradingTypeEnableCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeEnableCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeEnableCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Enable'
	 * Meta informations :
	 * 	- documentation : The entry is enabled.
	 * @return string 'Enable'
	 */
	const VALUE_ENABLE = 'Enable';
	/**
	 * Constant for value 'Disable'
	 * Meta informations :
	 * 	- documentation : The entry is disabled.
	 * @return string 'Disable'
	 */
	const VALUE_DISABLE = 'Disable';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeEnableCodeType
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
		return in_array($_value,array(self::VALUE_ENABLE,self::VALUE_DISABLE,self::VALUE_CUSTOMCODE));
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