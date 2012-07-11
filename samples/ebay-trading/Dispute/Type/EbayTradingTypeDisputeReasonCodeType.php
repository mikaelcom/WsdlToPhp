<?php
/**
 * Class file for EbayTradingTypeDisputeReasonCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDisputeReasonCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeDisputeReasonCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'BuyerHasNotPaid'
	 * Meta informations :
	 * 	- documentation : The buyer has not paid for the item. For Unpaid Item Process disputes.
	 * @return string 'BuyerHasNotPaid'
	 */
	const VALUE_BUYERHASNOTPAID = 'BuyerHasNotPaid';
	/**
	 * Constant for value 'TransactionMutuallyCanceled'
	 * Meta informations :
	 * 	- documentation : The seller claims that the buyer agrees to not complete the order. This triggers a waiting period for buyer agreement, disagreement or no buyer response. For Unpaid Item disputes.
	 * @return string 'TransactionMutuallyCanceled'
	 */
	const VALUE_TRANSACTIONMUTUALLYCANCELED = 'TransactionMutuallyCanceled';
	/**
	 * Constant for value 'ItemNotReceived'
	 * Meta informations :
	 * 	- documentation : The buyer did not receive the item. For Item Not Received disputes.
	 * @return string 'ItemNotReceived'
	 */
	const VALUE_ITEMNOTRECEIVED = 'ItemNotReceived';
	/**
	 * Constant for value 'SignificantlyNotAsDescribed'
	 * Meta informations :
	 * 	- documentation : An option for Item Not Received disputes.
	 * @return string 'SignificantlyNotAsDescribed'
	 */
	const VALUE_SIGNIFICANTLYNOTASDESCRIBED = 'SignificantlyNotAsDescribed';
	/**
	 * Constant for value 'NoRefund'
	 * Meta informations :
	 * 	- documentation : The item was returned but no refund was given.
	 * @return string 'NoRefund'
	 */
	const VALUE_NOREFUND = 'NoRefund';
	/**
	 * Constant for value 'ReturnPolicyUnpaidItem'
	 * Meta informations :
	 * 	- documentation : Item was returned and seller was not paid.
	 * @return string 'ReturnPolicyUnpaidItem'
	 */
	const VALUE_RETURNPOLICYUNPAIDITEM = 'ReturnPolicyUnpaidItem';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeDisputeReasonCodeType
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
		return in_array($_value,array(self::VALUE_BUYERHASNOTPAID,self::VALUE_TRANSACTIONMUTUALLYCANCELED,self::VALUE_ITEMNOTRECEIVED,self::VALUE_SIGNIFICANTLYNOTASDESCRIBED,self::VALUE_NOREFUND,self::VALUE_RETURNPOLICYUNPAIDITEM,self::VALUE_CUSTOMCODE));
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