<?php
/**
 * Class file for EbayTradingTypeDisputeRecordTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDisputeRecordTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeDisputeRecordTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'UnpaidItem'
	 * Meta informations :
	 * 	- documentation : (out) An Unpaid Item dispute.
	 * @return string 'UnpaidItem'
	 */
	const VALUE_UNPAIDITEM = 'UnpaidItem';
	/**
	 * Constant for value 'ItemNotReceived'
	 * Meta informations :
	 * 	- documentation : (out) An Item Not Received dispute.
	 * @return string 'ItemNotReceived'
	 */
	const VALUE_ITEMNOTRECEIVED = 'ItemNotReceived';
	/**
	 * Constant for value 'HalfDispute'
	 * Meta informations :
	 * 	- documentation : One type come from Half.com.
	 * @return string 'HalfDispute'
	 */
	const VALUE_HALFDISPUTE = 'HalfDispute';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeDisputeRecordTypeCodeType
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
		return in_array($_value,array(self::VALUE_UNPAIDITEM,self::VALUE_ITEMNOTRECEIVED,self::VALUE_HALFDISPUTE,self::VALUE_CUSTOMCODE));
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