<?php
/**
 * Class file for EbayTradingTypeBidGroupStatusCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeBidGroupStatusCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeBidGroupStatusCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Open'
	 * Meta informations :
	 * 	- documentation : (out) Indicates that the bid group is open.
	 * @return string 'Open'
	 */
	const VALUE_OPEN = 'Open';
	/**
	 * Constant for value 'Closed'
	 * Meta informations :
	 * 	- documentation : (out) Indicates that the bid group is Closed.
	 * @return string 'Closed'
	 */
	const VALUE_CLOSED = 'Closed';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeBidGroupStatusCodeType
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
		return in_array($_value,array(self::VALUE_OPEN,self::VALUE_CLOSED,self::VALUE_CUSTOMCODE));
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