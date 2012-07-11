<?php
/**
 * Class file for EbayTradingTypeDisputeResolutionReasonCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDisputeResolutionReasonCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeDisputeResolutionReasonCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Unresolved'
	 * Meta informations :
	 * 	- documentation : The dispute was not resolved.
	 * @return string 'Unresolved'
	 */
	const VALUE_UNRESOLVED = 'Unresolved';
	/**
	 * Constant for value 'ProofOfPayment'
	 * Meta informations :
	 * 	- documentation : The buyer provided proof of payment in feedback.
	 * @return string 'ProofOfPayment'
	 */
	const VALUE_PROOFOFPAYMENT = 'ProofOfPayment';
	/**
	 * Constant for value 'ComputerTechnicalProblem'
	 * Meta informations :
	 * 	- documentation : The buyer or seller had a technical problem with a computer.
	 * @return string 'ComputerTechnicalProblem'
	 */
	const VALUE_COMPUTERTECHNICALPROBLEM = 'ComputerTechnicalProblem';
	/**
	 * Constant for value 'NoContact'
	 * Meta informations :
	 * 	- documentation : The buyer and seller have not made contact.
	 * @return string 'NoContact'
	 */
	const VALUE_NOCONTACT = 'NoContact';
	/**
	 * Constant for value 'FamilyEmergency'
	 * Meta informations :
	 * 	- documentation : The buyer or seller had a family emergency.
	 * @return string 'FamilyEmergency'
	 */
	const VALUE_FAMILYEMERGENCY = 'FamilyEmergency';
	/**
	 * Constant for value 'ProofGivenInFeedback'
	 * Meta informations :
	 * 	- documentation : The buyer provided proof of payment in feedback.
	 * @return string 'ProofGivenInFeedback'
	 */
	const VALUE_PROOFGIVENINFEEDBACK = 'ProofGivenInFeedback';
	/**
	 * Constant for value 'FirstInfraction'
	 * Meta informations :
	 * 	- documentation : The dispute was the buyer's first infraction.
	 * @return string 'FirstInfraction'
	 */
	const VALUE_FIRSTINFRACTION = 'FirstInfraction';
	/**
	 * Constant for value 'CameToAgreement'
	 * Meta informations :
	 * 	- documentation : The buyer and seller came to agreement.
	 * @return string 'CameToAgreement'
	 */
	const VALUE_CAMETOAGREEMENT = 'CameToAgreement';
	/**
	 * Constant for value 'ItemReturned'
	 * Meta informations :
	 * 	- documentation : The buyer returned the item.
	 * @return string 'ItemReturned'
	 */
	const VALUE_ITEMRETURNED = 'ItemReturned';
	/**
	 * Constant for value 'BuyerPaidAuctionFees'
	 * Meta informations :
	 * 	- documentation : The buyer reimbursed the seller's auction fees.
	 * @return string 'BuyerPaidAuctionFees'
	 */
	const VALUE_BUYERPAIDAUCTIONFEES = 'BuyerPaidAuctionFees';
	/**
	 * Constant for value 'SellerReceivedPayment'
	 * Meta informations :
	 * 	- documentation : The seller received payment.
	 * @return string 'SellerReceivedPayment'
	 */
	const VALUE_SELLERRECEIVEDPAYMENT = 'SellerReceivedPayment';
	/**
	 * Constant for value 'OtherResolution'
	 * Meta informations :
	 * 	- documentation : Some other resolution occurred.
	 * @return string 'OtherResolution'
	 */
	const VALUE_OTHERRESOLUTION = 'OtherResolution';
	/**
	 * Constant for value 'ClaimPaid'
	 * Meta informations :
	 * 	- documentation : After eBay approved payment of the claim, the claim was paid.
	 * @return string 'ClaimPaid'
	 */
	const VALUE_CLAIMPAID = 'ClaimPaid';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeDisputeResolutionReasonCodeType
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
		return in_array($_value,array(self::VALUE_UNRESOLVED,self::VALUE_PROOFOFPAYMENT,self::VALUE_COMPUTERTECHNICALPROBLEM,self::VALUE_NOCONTACT,self::VALUE_FAMILYEMERGENCY,self::VALUE_PROOFGIVENINFEEDBACK,self::VALUE_FIRSTINFRACTION,self::VALUE_CAMETOAGREEMENT,self::VALUE_ITEMRETURNED,self::VALUE_BUYERPAIDAUCTIONFEES,self::VALUE_SELLERRECEIVEDPAYMENT,self::VALUE_OTHERRESOLUTION,self::VALUE_CLAIMPAID,self::VALUE_CUSTOMCODE));
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