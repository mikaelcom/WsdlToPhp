<?php
/**
 * Class file for EbayTradingTypeRefundFailureCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeRefundFailureCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeRefundFailureCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'PaypalBillingAgreementCanceled'
	 * Meta informations :
	 * 	- documentation : The seller's billing agreement with PayPal has been cancelled. <br/><br/> <span class="tablenote"> <strong>Note:</strong> RefundFailureCode values are returned (for GetOrders and other order retrieval calls) for DE/AT orders subject to the new eBay payment process. </span>
	 * @return string 'PaypalBillingAgreementCanceled'
	 */
	const VALUE_PAYPALBILLINGAGREEMENTCANCELED = 'PaypalBillingAgreementCanceled';
	/**
	 * Constant for value 'PaypalRiskDeclinesTransaction'
	 * Meta informations :
	 * 	- documentation : Please log in to your PayPal account to proceed with the refund request. <br/><br/> <span class="tablenote"> <strong>Note:</strong> RefundFailureCode values are returned (for GetOrders and other order retrieval calls) for DE/AT orders subject to the new eBay payment process. </span>
	 * @return string 'PaypalRiskDeclinesTransaction'
	 */
	const VALUE_PAYPALRISKDECLINESTRANSACTION = 'PaypalRiskDeclinesTransaction';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeRefundFailureCodeType
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
		return in_array($_value,array(self::VALUE_PAYPALBILLINGAGREEMENTCANCELED,self::VALUE_PAYPALRISKDECLINESTRANSACTION,self::VALUE_CUSTOMCODE));
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