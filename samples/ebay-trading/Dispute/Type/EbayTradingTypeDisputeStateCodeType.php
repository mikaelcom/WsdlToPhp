<?php
/**
 * Class file for EbayTradingTypeDisputeStateCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDisputeStateCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeDisputeStateCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Locked'
	 * Meta informations :
	 * 	- documentation : The dispute is locked and cannot be updated. For any type of dispute. No values of DisputeActivity are valid.
	 * @return string 'Locked'
	 */
	const VALUE_LOCKED = 'Locked';
	/**
	 * Constant for value 'Closed'
	 * Meta informations :
	 * 	- documentation : The dispute is closed. In some cases, it can be reversed with SellerReverseDispute. For any type of dispute. No values of DisputeActivity are valid.
	 * @return string 'Closed'
	 */
	const VALUE_CLOSED = 'Closed';
	/**
	 * Constant for value 'BuyerFirstResponsePayOption'
	 * Meta informations :
	 * 	- documentation : eBay sent the buyer an Unpaid Item Reminder with a Pay Now option. Waiting for the buyer's first response. It is within the 7-day grace period. For Unpaid Item Disputes. DisputeActivity can be SellerAddInformation or SellerCompletedTransaction.
	 * @return string 'BuyerFirstResponsePayOption'
	 */
	const VALUE_BUYERFIRSTRESPONSEPAYOPTION = 'BuyerFirstResponsePayOption';
	/**
	 * Constant for value 'BuyerFirstResponseNoPayOption'
	 * Meta informations :
	 * 	- documentation : eBay sent the buyer an Unpaid Item Reminder with no Pay Now option. Waiting for the buyer's first response. It is within the 7-day grace period. For Unpaid Item Disputes. DisputeActivity can be SellerAddInformation or SellerCompletedTransaction.
	 * @return string 'BuyerFirstResponseNoPayOption'
	 */
	const VALUE_BUYERFIRSTRESPONSENOPAYOPTION = 'BuyerFirstResponseNoPayOption';
	/**
	 * Constant for value 'BuyerFirstResponsePayOptionLateResponse'
	 * Meta informations :
	 * 	- documentation : eBay sent the buyer an Unpaid Item Reminder with a Pay Now option. Waiting for the buyer's first response. The 7-day grace period has expired. For Unpaid Item Disputes. DisputeActivity can be SellerAddInformation, SellerCompletedTransaction, or SellerEndCommunication.
	 * @return string 'BuyerFirstResponsePayOptionLateResponse'
	 */
	const VALUE_BUYERFIRSTRESPONSEPAYOPTIONLATERESPONSE = 'BuyerFirstResponsePayOptionLateResponse';
	/**
	 * Constant for value 'BuyerFirstResponseNoPayOptionLateResponse'
	 * Meta informations :
	 * 	- documentation : eBay sent the buyer an Unpaid Item Reminder with no Pay Now option. Waiting for the buyer's first response. The 7-day grace period has expired. For Unpaid Item Disputes. DisputeActivity can be SellerAddInformation, SellerCompletedTransaction, or SellerEndCommunication.
	 * @return string 'BuyerFirstResponseNoPayOptionLateResponse'
	 */
	const VALUE_BUYERFIRSTRESPONSENOPAYOPTIONLATERESPONSE = 'BuyerFirstResponseNoPayOptionLateResponse';
	/**
	 * Constant for value 'MutualCommunicationPayOption'
	 * Meta informations :
	 * 	- documentation : The buyer and seller have communicated, and eBay offered the buyer a Pay Now option. For Unpaid Item Disputes. DisputeActivity can be SellerAddInformation, SellerCompletedTransaction, SellerEndCommunication, or CameToAgreementNeedFVFCredit.
	 * @return string 'MutualCommunicationPayOption'
	 */
	const VALUE_MUTUALCOMMUNICATIONPAYOPTION = 'MutualCommunicationPayOption';
	/**
	 * Constant for value 'MutualCommunicationNoPayOption'
	 * Meta informations :
	 * 	- documentation : The buyer and seller have communicated. eBay did not offer the buyer a Pay Now option. For Unpaid Item Disputes. DisputeActivity can be SellerAddInformation, SellerCompletedTransaction, SellerEndCommunication, or CameToAgreementNeedFVFCredit.
	 * @return string 'MutualCommunicationNoPayOption'
	 */
	const VALUE_MUTUALCOMMUNICATIONNOPAYOPTION = 'MutualCommunicationNoPayOption';
	/**
	 * Constant for value 'PendingResolve'
	 * Meta informations :
	 * 	- documentation : The dispute is pending resolution. A dispute cannot be closed when it is in this state. For Unpaid Item Disputes. No values of DisputeActivity are valid.
	 * @return string 'PendingResolve'
	 */
	const VALUE_PENDINGRESOLVE = 'PendingResolve';
	/**
	 * Constant for value 'MutualWithdrawalAgreement'
	 * Meta informations :
	 * 	- documentation : The buyer and seller have agreed within the grace period not to complete the transaction. For Unpaid Item Disputes. DisputeActivity can be SellerAddInformation.
	 * @return string 'MutualWithdrawalAgreement'
	 */
	const VALUE_MUTUALWITHDRAWALAGREEMENT = 'MutualWithdrawalAgreement';
	/**
	 * Constant for value 'MutualWithdrawalAgreementLate'
	 * Meta informations :
	 * 	- documentation : The buyer and seller have agreed not to complete the transaction, after the grace period. For Unpaid Item Disputes. DisputeActivity can be SellerAddInformation, SellerCompletedTransaction, or SellerEndCommunication.
	 * @return string 'MutualWithdrawalAgreementLate'
	 */
	const VALUE_MUTUALWITHDRAWALAGREEMENTLATE = 'MutualWithdrawalAgreementLate';
	/**
	 * Constant for value 'NotReceivedNoSellerResponse'
	 * Meta informations :
	 * 	- documentation : The buyer filed an Item Not Received dispute, and the seller has not responded. For Item Not Received disputes. DisputeActivity can be SellerOffersRefund, SellerShippedItem, or SellerComment.
	 * @return string 'NotReceivedNoSellerResponse'
	 */
	const VALUE_NOTRECEIVEDNOSELLERRESPONSE = 'NotReceivedNoSellerResponse';
	/**
	 * Constant for value 'NotAsDescribedNoSellerResponse'
	 * Meta informations :
	 * 	- documentation : The buyer filed an Item Not Received dispute for an item significantly not as described, and the seller has not responded. DisputeActivity can be SellerOffersRefund or SellerComment.
	 * @return string 'NotAsDescribedNoSellerResponse'
	 */
	const VALUE_NOTASDESCRIBEDNOSELLERRESPONSE = 'NotAsDescribedNoSellerResponse';
	/**
	 * Constant for value 'NotReceivedMutualCommunication'
	 * Meta informations :
	 * 	- documentation : The buyer filed an Item Not Received dispute and is communicating with the seller. DisputeActivity can be SellerOffersRefund, SellerShippedItem, or SellerComment.
	 * @return string 'NotReceivedMutualCommunication'
	 */
	const VALUE_NOTRECEIVEDMUTUALCOMMUNICATION = 'NotReceivedMutualCommunication';
	/**
	 * Constant for value 'NotAsDescribedMutualCommunication'
	 * Meta informations :
	 * 	- documentation : The buyer filed an Item Not Received dispute for an item significantly not as described and is communicating with the seller. DisputeActivity can be SellerOffersRefund.
	 * @return string 'NotAsDescribedMutualCommunication'
	 */
	const VALUE_NOTASDESCRIBEDMUTUALCOMMUNICATION = 'NotAsDescribedMutualCommunication';
	/**
	 * Constant for value 'MutualAgreementOrBuyerReturningItem'
	 * Meta informations :
	 * 	- documentation : The seller says mutual agreement has been reached and is waiting for the buyer to confirm, or the buyer is returning the item to the seller. DisputeActivity can be SellerAddInformation. For Unpaid Item Disputes.
	 * @return string 'MutualAgreementOrBuyerReturningItem'
	 */
	const VALUE_MUTUALAGREEMENTORBUYERRETURNINGITEM = 'MutualAgreementOrBuyerReturningItem';
	/**
	 * Constant for value 'ClaimOpened'
	 * Meta informations :
	 * 	- documentation : The claim was assigned to an adjuster.
	 * @return string 'ClaimOpened'
	 */
	const VALUE_CLAIMOPENED = 'ClaimOpened';
	/**
	 * Constant for value 'NoDocumentation'
	 * Meta informations :
	 * 	- documentation : The buyer was contacted by eBay and asked to submit paperwork to support the claim.
	 * @return string 'NoDocumentation'
	 */
	const VALUE_NODOCUMENTATION = 'NoDocumentation';
	/**
	 * Constant for value 'ClaimClosed'
	 * Meta informations :
	 * 	- documentation : The buyer did not respond to verification or was missing paperwork.
	 * @return string 'ClaimClosed'
	 */
	const VALUE_CLAIMCLOSED = 'ClaimClosed';
	/**
	 * Constant for value 'ClaimDenied'
	 * Meta informations :
	 * 	- documentation : The buyer is not eligible for reimbursement.
	 * @return string 'ClaimDenied'
	 */
	const VALUE_CLAIMDENIED = 'ClaimDenied';
	/**
	 * Constant for value 'ClaimPending'
	 * Meta informations :
	 * 	- documentation : Paperwork was received from the buyer and the claim is being investigated.
	 * @return string 'ClaimPending'
	 */
	const VALUE_CLAIMPENDING = 'ClaimPending';
	/**
	 * Constant for value 'ClaimPaymentPending'
	 * Meta informations :
	 * 	- documentation : The buyer's claim was approved for reimbursement and was sent to accounts payable for payment.
	 * @return string 'ClaimPaymentPending'
	 */
	const VALUE_CLAIMPAYMENTPENDING = 'ClaimPaymentPending';
	/**
	 * Constant for value 'ClaimPaid'
	 * Meta informations :
	 * 	- documentation : The buyer was reimbursed.
	 * @return string 'ClaimPaid'
	 */
	const VALUE_CLAIMPAID = 'ClaimPaid';
	/**
	 * Constant for value 'ClaimResolved'
	 * Meta informations :
	 * 	- documentation : The issue has been resolved: the seller sent the item or a refund.
	 * @return string 'ClaimResolved'
	 */
	const VALUE_CLAIMRESOLVED = 'ClaimResolved';
	/**
	 * Constant for value 'ClaimSubmitted'
	 * Meta informations :
	 * 	- documentation : A claim was submitted (via Web).
	 * @return string 'ClaimSubmitted'
	 */
	const VALUE_CLAIMSUBMITTED = 'ClaimSubmitted';
	/**
	 * Constant for value 'UnpaidItemOpen'
	 * Meta informations :
	 * 	- documentation : The unpaid item dispute is open.
	 * @return string 'UnpaidItemOpen'
	 */
	const VALUE_UNPAIDITEMOPEN = 'UnpaidItemOpen';
	/**
	 * Constant for value 'UPIAssistanceDisabledByeBay'
	 * Meta informations :
	 * 	- documentation : An unpaid item dispute filed by the Unpaid Item Assistance mechanism was disabled by eBay (for example, eBay detected that payment was initiated and the seller needs to manually handle this dispute).
	 * @return string 'UPIAssistanceDisabledByeBay'
	 */
	const VALUE_UPIASSISTANCEDISABLEDBYEBAY = 'UPIAssistanceDisabledByeBay';
	/**
	 * Constant for value 'UPIAssistanceDisabledBySeller'
	 * Meta informations :
	 * 	- documentation : An unpaid item dispute filed by the Unpaid Item Assistance mechanism was disabled by the seller (e.g. the buyer and seller have communicated about payment and the seller wishes to extend the time for payment and not let the automatic process close the dispute 4 days after the dispute was automatically opened).
	 * @return string 'UPIAssistanceDisabledBySeller'
	 */
	const VALUE_UPIASSISTANCEDISABLEDBYSELLER = 'UPIAssistanceDisabledBySeller';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeDisputeStateCodeType
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
		return in_array($_value,array(self::VALUE_LOCKED,self::VALUE_CLOSED,self::VALUE_BUYERFIRSTRESPONSEPAYOPTION,self::VALUE_BUYERFIRSTRESPONSENOPAYOPTION,self::VALUE_BUYERFIRSTRESPONSEPAYOPTIONLATERESPONSE,self::VALUE_BUYERFIRSTRESPONSENOPAYOPTIONLATERESPONSE,self::VALUE_MUTUALCOMMUNICATIONPAYOPTION,self::VALUE_MUTUALCOMMUNICATIONNOPAYOPTION,self::VALUE_PENDINGRESOLVE,self::VALUE_MUTUALWITHDRAWALAGREEMENT,self::VALUE_MUTUALWITHDRAWALAGREEMENTLATE,self::VALUE_NOTRECEIVEDNOSELLERRESPONSE,self::VALUE_NOTASDESCRIBEDNOSELLERRESPONSE,self::VALUE_NOTRECEIVEDMUTUALCOMMUNICATION,self::VALUE_NOTASDESCRIBEDMUTUALCOMMUNICATION,self::VALUE_MUTUALAGREEMENTORBUYERRETURNINGITEM,self::VALUE_CLAIMOPENED,self::VALUE_NODOCUMENTATION,self::VALUE_CLAIMCLOSED,self::VALUE_CLAIMDENIED,self::VALUE_CLAIMPENDING,self::VALUE_CLAIMPAYMENTPENDING,self::VALUE_CLAIMPAID,self::VALUE_CLAIMRESOLVED,self::VALUE_CLAIMSUBMITTED,self::VALUE_UNPAIDITEMOPEN,self::VALUE_UPIASSISTANCEDISABLEDBYEBAY,self::VALUE_UPIASSISTANCEDISABLEDBYSELLER,self::VALUE_CUSTOMCODE));
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