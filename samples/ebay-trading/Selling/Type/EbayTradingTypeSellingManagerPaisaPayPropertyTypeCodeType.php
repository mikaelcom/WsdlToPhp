<?php
/**
 * Class file for EbayTradingTypeSellingManagerPaisaPayPropertyTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellingManagerPaisaPayPropertyTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeSellingManagerPaisaPayPropertyTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'PaisaPayAwaitingShipment'
	 * Meta informations :
	 * 	- documentation : PaisaPay items awaiting shipment.
	 * @return string 'PaisaPayAwaitingShipment'
	 */
	const VALUE_PAISAPAYAWAITINGSHIPMENT = 'PaisaPayAwaitingShipment';
	/**
	 * Constant for value 'PaisaPayTimeExtensionRequestDeclined'
	 * Meta informations :
	 * 	- documentation : PaisaPay items for which time extension requests are rejected by the buyers.
	 * @return string 'PaisaPayTimeExtensionRequestDeclined'
	 */
	const VALUE_PAISAPAYTIMEEXTENSIONREQUESTDECLINED = 'PaisaPayTimeExtensionRequestDeclined';
	/**
	 * Constant for value 'PaisaPayPendingReceived'
	 * Meta informations :
	 * 	- documentation : PaisaPay items for which the item receipt has not yet been confirmed by the buyer or not yet been auto-confirmed by the system.
	 * @return string 'PaisaPayPendingReceived'
	 */
	const VALUE_PAISAPAYPENDINGRECEIVED = 'PaisaPayPendingReceived';
	/**
	 * Constant for value 'PaisaPayRefundInitiated'
	 * Meta informations :
	 * 	- documentation : PaisaPay items for which buyers have filed "Item not received".
	 * @return string 'PaisaPayRefundInitiated'
	 */
	const VALUE_PAISAPAYREFUNDINITIATED = 'PaisaPayRefundInitiated';
	/**
	 * Constant for value 'PaisaPayTimeExtensionRequested'
	 * Meta informations :
	 * 	- documentation : PaisaPay items for which the seller has requested a time extension to enter the shipping information.
	 * @return string 'PaisaPayTimeExtensionRequested'
	 */
	const VALUE_PAISAPAYTIMEEXTENSIONREQUESTED = 'PaisaPayTimeExtensionRequested';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeSellingManagerPaisaPayPropertyTypeCodeType
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
		return in_array($_value,array(self::VALUE_PAISAPAYAWAITINGSHIPMENT,self::VALUE_PAISAPAYTIMEEXTENSIONREQUESTDECLINED,self::VALUE_PAISAPAYPENDINGRECEIVED,self::VALUE_PAISAPAYREFUNDINITIATED,self::VALUE_PAISAPAYTIMEEXTENSIONREQUESTED,self::VALUE_CUSTOMCODE));
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