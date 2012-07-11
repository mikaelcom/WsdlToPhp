<?php
/**
 * Class file for EbayTradingTypeShipmentDeliveryStatusCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeShipmentDeliveryStatusCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeShipmentDeliveryStatusCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Created'
	 * Meta informations :
	 * 	- documentation : Created (default).
	 * @return string 'Created'
	 */
	const VALUE_CREATED = 'Created';
	/**
	 * Constant for value 'DroppedOff'
	 * Meta informations :
	 * 	- documentation : Dropped off.
	 * @return string 'DroppedOff'
	 */
	const VALUE_DROPPEDOFF = 'DroppedOff';
	/**
	 * Constant for value 'InTransit'
	 * Meta informations :
	 * 	- documentation : In transit.
	 * @return string 'InTransit'
	 */
	const VALUE_INTRANSIT = 'InTransit';
	/**
	 * Constant for value 'Delivered'
	 * Meta informations :
	 * 	- documentation : Delivered.
	 * @return string 'Delivered'
	 */
	const VALUE_DELIVERED = 'Delivered';
	/**
	 * Constant for value 'Returned'
	 * Meta informations :
	 * 	- documentation : Returned.
	 * @return string 'Returned'
	 */
	const VALUE_RETURNED = 'Returned';
	/**
	 * Constant for value 'Canceled'
	 * Meta informations :
	 * 	- documentation : Cancelled.
	 * @return string 'Canceled'
	 */
	const VALUE_CANCELED = 'Canceled';
	/**
	 * Constant for value 'LabelPrinted'
	 * Meta informations :
	 * 	- documentation : Label printed.
	 * @return string 'LabelPrinted'
	 */
	const VALUE_LABELPRINTED = 'LabelPrinted';
	/**
	 * Constant for value 'Unconfirmed'
	 * Meta informations :
	 * 	- documentation : Unconfirmed.
	 * @return string 'Unconfirmed'
	 */
	const VALUE_UNCONFIRMED = 'Unconfirmed';
	/**
	 * Constant for value 'Unknown'
	 * Meta informations :
	 * 	- documentation : Unknown.
	 * @return string 'Unknown'
	 */
	const VALUE_UNKNOWN = 'Unknown';
	/**
	 * Constant for value 'Error'
	 * Meta informations :
	 * 	- documentation : Error.
	 * @return string 'Error'
	 */
	const VALUE_ERROR = 'Error';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeShipmentDeliveryStatusCodeType
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
		return in_array($_value,array(self::VALUE_CREATED,self::VALUE_DROPPEDOFF,self::VALUE_INTRANSIT,self::VALUE_DELIVERED,self::VALUE_RETURNED,self::VALUE_CANCELED,self::VALUE_LABELPRINTED,self::VALUE_UNCONFIRMED,self::VALUE_UNKNOWN,self::VALUE_ERROR,self::VALUE_CUSTOMCODE));
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