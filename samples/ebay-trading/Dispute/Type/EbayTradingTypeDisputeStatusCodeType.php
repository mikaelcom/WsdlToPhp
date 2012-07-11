<?php
/**
 * Class file for EbayTradingTypeDisputeStatusCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDisputeStatusCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeDisputeStatusCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Closed'
	 * Meta informations :
	 * 	- documentation : The dispute is closed. For Item Not Received disputes.
	 * @return string 'Closed'
	 */
	const VALUE_CLOSED = 'Closed';
	/**
	 * Constant for value 'WaitingForSellerResponse'
	 * Meta informations :
	 * 	- documentation : The dispute is waiting for the seller's response. For both Unpaid Item and Item Not Received disputes.
	 * @return string 'WaitingForSellerResponse'
	 */
	const VALUE_WAITINGFORSELLERRESPONSE = 'WaitingForSellerResponse';
	/**
	 * Constant for value 'WaitingForBuyerResponse'
	 * Meta informations :
	 * 	- documentation : The dispute is waiting for the buyer's response. For both Unpaid Item and Item Not Received disputes.
	 * @return string 'WaitingForBuyerResponse'
	 */
	const VALUE_WAITINGFORBUYERRESPONSE = 'WaitingForBuyerResponse';
	/**
	 * Constant for value 'ClosedFVFCreditStrike'
	 * Meta informations :
	 * 	- documentation : The dispute is closed, the seller received a Final Value Fee credit, and the buyer received a strike. For Unpaid Item disputes.
	 * @return string 'ClosedFVFCreditStrike'
	 */
	const VALUE_CLOSEDFVFCREDITSTRIKE = 'ClosedFVFCreditStrike';
	/**
	 * Constant for value 'ClosedNoFVFCreditStrike'
	 * Meta informations :
	 * 	- documentation : The dispute is closed, the seller did not receive a Final Value Fee credit, and the buyer received a strike. For Unpaid Item disputes.
	 * @return string 'ClosedNoFVFCreditStrike'
	 */
	const VALUE_CLOSEDNOFVFCREDITSTRIKE = 'ClosedNoFVFCreditStrike';
	/**
	 * Constant for value 'ClosedFVFCreditNoStrike'
	 * Meta informations :
	 * 	- documentation : The dispute is closed, the seller received a Final Value Fee credit, and the buyer did not receive a strike. For Unpaid Item disputes.
	 * @return string 'ClosedFVFCreditNoStrike'
	 */
	const VALUE_CLOSEDFVFCREDITNOSTRIKE = 'ClosedFVFCreditNoStrike';
	/**
	 * Constant for value 'ClosedNoFVFCreditNoStrike'
	 * Meta informations :
	 * 	- documentation : The dispute is closed, the seller did not receive a Final Value Fee credit, and the buyer did not receive a strike. For Unpaid Item disputes.
	 * @return string 'ClosedNoFVFCreditNoStrike'
	 */
	const VALUE_CLOSEDNOFVFCREDITNOSTRIKE = 'ClosedNoFVFCreditNoStrike';
	/**
	 * Constant for value 'StrikeAppealedAfterClosing'
	 * Meta informations :
	 * 	- documentation : The buyer's strike was appealed after the dispute was closed. For Unpaid Item disputes.
	 * @return string 'StrikeAppealedAfterClosing'
	 */
	const VALUE_STRIKEAPPEALEDAFTERCLOSING = 'StrikeAppealedAfterClosing';
	/**
	 * Constant for value 'FVFCreditReversedAfterClosing'
	 * Meta informations :
	 * 	- documentation : The seller's Final Value Fee credit was reversed after the dispute was closed. For Unpaid Item disputes.
	 * @return string 'FVFCreditReversedAfterClosing'
	 */
	const VALUE_FVFCREDITREVERSEDAFTERCLOSING = 'FVFCreditReversedAfterClosing';
	/**
	 * Constant for value 'StrikeAppealedAndFVFCreditReversed'
	 * Meta informations :
	 * 	- documentation : Both the seller's Final Value Fee credit and the buyer's strike were reversed after the dispute was closed. For Unpaid Item disputes.
	 * @return string 'StrikeAppealedAndFVFCreditReversed'
	 */
	const VALUE_STRIKEAPPEALEDANDFVFCREDITREVERSED = 'StrikeAppealedAndFVFCreditReversed';
	/**
	 * Constant for value 'ClaimOpened'
	 * Meta informations :
	 * 	- documentation : Claim assigned to an adjuster. Also maps for filed claim in Half.com
	 * @return string 'ClaimOpened'
	 */
	const VALUE_CLAIMOPENED = 'ClaimOpened';
	/**
	 * Constant for value 'NoDocumentation'
	 * Meta informations :
	 * 	- documentation : Buyer contacted and asked to submit paperwork
	 * @return string 'NoDocumentation'
	 */
	const VALUE_NODOCUMENTATION = 'NoDocumentation';
	/**
	 * Constant for value 'ClaimClosed'
	 * Meta informations :
	 * 	- documentation : Buyer did not respond to verification or missing some paperwork. Also maps for filed claim in Half.com
	 * @return string 'ClaimClosed'
	 */
	const VALUE_CLAIMCLOSED = 'ClaimClosed';
	/**
	 * Constant for value 'ClaimDenied'
	 * Meta informations :
	 * 	- documentation : Not eligible for reimbursement
	 * @return string 'ClaimDenied'
	 */
	const VALUE_CLAIMDENIED = 'ClaimDenied';
	/**
	 * Constant for value 'ClaimInProcess'
	 * Meta informations :
	 * 	- documentation : Paperwork received, claim being investigated. Also maps for filed claim in Half.com
	 * @return string 'ClaimInProcess'
	 */
	const VALUE_CLAIMINPROCESS = 'ClaimInProcess';
	/**
	 * Constant for value 'ClaimApproved'
	 * Meta informations :
	 * 	- documentation : Claim approved for reimbursement; sent to accounts payable for payment
	 * @return string 'ClaimApproved'
	 */
	const VALUE_CLAIMAPPROVED = 'ClaimApproved';
	/**
	 * Constant for value 'ClaimPaid'
	 * Meta informations :
	 * 	- documentation : Reimbursement completed
	 * @return string 'ClaimPaid'
	 */
	const VALUE_CLAIMPAID = 'ClaimPaid';
	/**
	 * Constant for value 'ClaimResolved'
	 * Meta informations :
	 * 	- documentation : Issue resolved: seller sent Item or Refund
	 * @return string 'ClaimResolved'
	 */
	const VALUE_CLAIMRESOLVED = 'ClaimResolved';
	/**
	 * Constant for value 'ClaimSubmitted'
	 * Meta informations :
	 * 	- documentation : Claim Submitted via Web flow
	 * @return string 'ClaimSubmitted'
	 */
	const VALUE_CLAIMSUBMITTED = 'ClaimSubmitted';
	/**
	 * Constant for value 'UnpaidItemOpened'
	 * Meta informations :
	 * 	- documentation : Unpaid Item dispute opened
	 * @return string 'UnpaidItemOpened'
	 */
	const VALUE_UNPAIDITEMOPENED = 'UnpaidItemOpened';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeDisputeStatusCodeType
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
		return in_array($_value,array(self::VALUE_CLOSED,self::VALUE_WAITINGFORSELLERRESPONSE,self::VALUE_WAITINGFORBUYERRESPONSE,self::VALUE_CLOSEDFVFCREDITSTRIKE,self::VALUE_CLOSEDNOFVFCREDITSTRIKE,self::VALUE_CLOSEDFVFCREDITNOSTRIKE,self::VALUE_CLOSEDNOFVFCREDITNOSTRIKE,self::VALUE_STRIKEAPPEALEDAFTERCLOSING,self::VALUE_FVFCREDITREVERSEDAFTERCLOSING,self::VALUE_STRIKEAPPEALEDANDFVFCREDITREVERSED,self::VALUE_CLAIMOPENED,self::VALUE_NODOCUMENTATION,self::VALUE_CLAIMCLOSED,self::VALUE_CLAIMDENIED,self::VALUE_CLAIMINPROCESS,self::VALUE_CLAIMAPPROVED,self::VALUE_CLAIMPAID,self::VALUE_CLAIMRESOLVED,self::VALUE_CLAIMSUBMITTED,self::VALUE_UNPAIDITEMOPENED,self::VALUE_CUSTOMCODE));
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