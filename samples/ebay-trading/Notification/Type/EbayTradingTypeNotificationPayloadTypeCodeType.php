<?php
/**
 * Class file for EbayTradingTypeNotificationPayloadTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeNotificationPayloadTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeNotificationPayloadTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'eBLSchemaSOAP'
	 * Meta informations :
	 * 	- documentation : New Schema format (used by the new schema XML API and SOAP API).
	 * @return string 'eBLSchemaSOAP'
	 */
	const VALUE_EBLSCHEMASOAP = 'eBLSchemaSOAP';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeNotificationPayloadTypeCodeType
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
		return in_array($_value,array(self::VALUE_EBLSCHEMASOAP,self::VALUE_CUSTOMCODE));
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