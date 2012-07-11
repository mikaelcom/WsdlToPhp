<?php
/**
 * Class file for EbayTradingTypeDisputeActivityCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDisputeActivityCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeDisputeActivityCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'SellerAddInformation'
	 * Meta informations :
	 * 	- documentation : (in) The seller wants to add a response to the dispute. For Unpaid Item disputes. The seller is limited to 25 responses.
	 * @return string 'SellerAddInformation'
	 */
	const VALUE_SELLERADDINFORMATION = 'SellerAddInformation';
	/**
	 * Constant for value 'SellerCompletedTransaction'
	 * Meta informations :
	 * 	- documentation : (in) The buyer has paid or the seller otherwise does not need to pursue the dispute any longer. For Unpaid Item disputes.
	 * @return string 'SellerCompletedTransaction'
	 */
	const VALUE_SELLERCOMPLETEDTRANSACTION = 'SellerCompletedTransaction';
	/**
	 * Constant for value 'CameToAgreementNeedFVFCredit'
	 * Meta informations :
	 * 	- documentation : (in) The seller has made an agreement with the buyer and requires a credit for a Final Value Fee already paid. For Unpaid Item disputes.
	 * @return string 'CameToAgreementNeedFVFCredit'
	 */
	const VALUE_CAMETOAGREEMENTNEEDFVFCREDIT = 'CameToAgreementNeedFVFCredit';
	/**
	 * Constant for value 'SellerEndCommunication'
	 * Meta informations :
	 * 	- documentation : (in) The seller wants to end communication or stop waiting for the buyer. For Unpaid Item disputes.
	 * @return string 'SellerEndCommunication'
	 */
	const VALUE_SELLERENDCOMMUNICATION = 'SellerEndCommunication';
	/**
	 * Constant for value 'MutualAgreementOrNoBuyerResponse'
	 * Meta informations :
	 * 	- documentation : (in) The seller wants to end communication or stop waiting for the buyer. Mutual agreement has been reached or the buyer has not responded within 7 days. For Unpaid Item disputes.
	 * @return string 'MutualAgreementOrNoBuyerResponse'
	 */
	const VALUE_MUTUALAGREEMENTORNOBUYERRESPONSE = 'MutualAgreementOrNoBuyerResponse';
	/**
	 * Constant for value 'SellerOffersRefund'
	 * Meta informations :
	 * 	- documentation : (in) The seller offers a full refund if the buyer did not receive the item or a partial refund if the item is significantly not as described. For Item Not Received or Significantly Not As Described disputes. Can be used when DisputeState is:<br> NotReceivedNoSellerResponse<br> NotAsDescribedNoSellerResponse<br> NotReceivedMutualCommunication<br> NotAsDescribedMutualCommunication
	 * @return string 'SellerOffersRefund'
	 */
	const VALUE_SELLEROFFERSREFUND = 'SellerOffersRefund';
	/**
	 * Constant for value 'SellerShippedItem'
	 * Meta informations :
	 * 	- documentation : (in) The seller has shipped the item or a replacement and provides shipping information. For Item Not Received and Significantly Not As Described disputes. Can be used when DisputeState is:<br> NotReceivedNoSellerResponse<br> NotReceivedMutualCommunication
	 * @return string 'SellerShippedItem'
	 */
	const VALUE_SELLERSHIPPEDITEM = 'SellerShippedItem';
	/**
	 * Constant for value 'SellerComment'
	 * Meta informations :
	 * 	- documentation : (in) The seller communicates with the buyer, offering a response or comment. The seller is limited to 25 responses. For Item Not Received and Significantly Not As Described disputes. Can be used when DisputeState is:<br> NotReceivedNoSellerResponse<br> NotAsDescribedNoSellerResponse<br> NotReceivedMutualCommunication<br> NotAsDescribedMutualCommunication
	 * @return string 'SellerComment'
	 */
	const VALUE_SELLERCOMMENT = 'SellerComment';
	/**
	 * Constant for value 'SellerPaymentNotReceived'
	 * Meta informations :
	 * 	- documentation : (in) The buyer has not received an expected full or partial refund from the seller in an Item Not Received or Significantly Not As Described buyer dispute. This value can be used when DisputeState is:<br> NotReceivedNoSellerResponse <br> NotReceivedMutualCommunication <br>
	 * @return string 'SellerPaymentNotReceived'
	 */
	const VALUE_SELLERPAYMENTNOTRECEIVED = 'SellerPaymentNotReceived';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeDisputeActivityCodeType
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
		return in_array($_value,array(self::VALUE_SELLERADDINFORMATION,self::VALUE_SELLERCOMPLETEDTRANSACTION,self::VALUE_CAMETOAGREEMENTNEEDFVFCREDIT,self::VALUE_SELLERENDCOMMUNICATION,self::VALUE_MUTUALAGREEMENTORNOBUYERRESPONSE,self::VALUE_SELLEROFFERSREFUND,self::VALUE_SELLERSHIPPEDITEM,self::VALUE_SELLERCOMMENT,self::VALUE_SELLERPAYMENTNOTRECEIVED,self::VALUE_CUSTOMCODE));
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