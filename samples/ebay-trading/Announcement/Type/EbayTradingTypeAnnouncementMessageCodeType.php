<?php
/**
 * Class file for EbayTradingTypeAnnouncementMessageCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAnnouncementMessageCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeAnnouncementMessageCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'None'
	 * Meta informations :
	 * 	- documentation : No message is to be made available.
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'Deprecation'
	 * Meta informations :
	 * 	- documentation : A deprecation message is to be made available, but only if today's date is between AnnouncementMessageType.AnnouncementStartTime and AnnouncementMessageType.EventTime.
	 * @return string 'Deprecation'
	 */
	const VALUE_DEPRECATION = 'Deprecation';
	/**
	 * Constant for value 'Mapping'
	 * Meta informations :
	 * 	- documentation : A mapping message is to be made available, but only if today's date is after AnnouncementMessageType.EventTime.
	 * @return string 'Mapping'
	 */
	const VALUE_MAPPING = 'Mapping';
	/**
	 * Constant for value 'DeprecationAndMapping'
	 * Meta informations :
	 * 	- documentation : Both "Deprecation" and "Mapping" enumerations are to apply.
	 * @return string 'DeprecationAndMapping'
	 */
	const VALUE_DEPRECATIONANDMAPPING = 'DeprecationAndMapping';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeAnnouncementMessageCodeType
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
		return in_array($_value,array(self::VALUE_NONE,self::VALUE_DEPRECATION,self::VALUE_MAPPING,self::VALUE_DEPRECATIONANDMAPPING,self::VALUE_CUSTOMCODE));
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