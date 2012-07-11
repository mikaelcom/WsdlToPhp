<?php
/**
 * Class file for EbayTradingTypePayPalAccountStatusCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePayPalAccountStatusCodeType
 * @date 04/07/2012
 */
class EbayTradingTypePayPalAccountStatusCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Active'
	 * Meta informations :
	 * 	- documentation : Account is active.
	 * @return string 'Active'
	 */
	const VALUE_ACTIVE = 'Active';
	/**
	 * Constant for value 'Closed'
	 * Meta informations :
	 * 	- documentation : Account is closed.
	 * @return string 'Closed'
	 */
	const VALUE_CLOSED = 'Closed';
	/**
	 * Constant for value 'HighRestricted'
	 * Meta informations :
	 * 	- documentation : Account is highly restricted.
	 * @return string 'HighRestricted'
	 */
	const VALUE_HIGHRESTRICTED = 'HighRestricted';
	/**
	 * Constant for value 'LowRestricted'
	 * Meta informations :
	 * 	- documentation : Account restriction is low.
	 * @return string 'LowRestricted'
	 */
	const VALUE_LOWRESTRICTED = 'LowRestricted';
	/**
	 * Constant for value 'Locked'
	 * Meta informations :
	 * 	- documentation : Account is locked.
	 * @return string 'Locked'
	 */
	const VALUE_LOCKED = 'Locked';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constant for value 'WireOff'
	 * @return string 'WireOff'
	 */
	const VALUE_WIREOFF = 'WireOff';
	/**
	 * Constant for value 'Unknown'
	 * @return string 'Unknown'
	 */
	const VALUE_UNKNOWN = 'Unknown';
	/**
	 * Constant for value 'Invalid'
	 * @return string 'Invalid'
	 */
	const VALUE_INVALID = 'Invalid';
	/**
	 * Constructor
	 * @return EbayTradingTypePayPalAccountStatusCodeType
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
		return in_array($_value,array(self::VALUE_ACTIVE,self::VALUE_CLOSED,self::VALUE_HIGHRESTRICTED,self::VALUE_LOWRESTRICTED,self::VALUE_LOCKED,self::VALUE_CUSTOMCODE,self::VALUE_WIREOFF,self::VALUE_UNKNOWN,self::VALUE_INVALID));
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