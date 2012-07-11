<?php
/**
 * Class file for EbayTradingTypeSellerReverseDisputeRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellerReverseDisputeRequestType
 * Documentation : Enables a seller to "reverse" an Unpaid Item dispute that has been closed, for example, if buyer and seller reach an agreement. The seller's Final Value Fee credit and the buyer's strike are both reversed, if applicable. The dispute might have resulted in a strike to the buyer and a Final Value Fee credit to the seller. A buyer and seller sometimes come to agreement after a dispute has been closed. In particular, the seller might discover that the buyer actually paid, or the buyer might agree to pay the seller's fees in exchange for having the strike removed. <br><br> A dispute can only be reversed if it was closed with DisputeActivity set to SellerEndCommunication, CameToAgreementNeedFVFCredit, or MutualAgreementOrNoBuyerResponse.
 * @date 04/07/2012
 */
class EbayTradingTypeSellerReverseDisputeRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The DisputeID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The unique identifier of the dispute that was returned when the dispute was created. The dispute must be an Unpaid Item dispute that the seller opened.
	 * @var EbayTradingTypeDisputeIDType
	 */
	public $DisputeID;
	/**
	 * The DisputeResolutionReason
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The reason the dispute is being reversed.
	 * @var EbayTradingTypeDisputeResolutionReasonCodeType
	 */
	public $DisputeResolutionReason;
	/**
	 * Constructor
	 * @param EbayTradingTypeDisputeIDType DisputeID
	 * @param EbayTradingTypeDisputeResolutionReasonCodeType DisputeResolutionReason
	 * @return EbayTradingTypeSellerReverseDisputeRequestType
	 */
	public function __construct($_DisputeID = null,$_DisputeResolutionReason = null)
	{
		EbayTradingWsdlClass::__construct(array('DisputeID'=>$_DisputeID,'DisputeResolutionReason'=>$_DisputeResolutionReason));
	}
	/**
	 * Set DisputeID
	 * @param DisputeIDType DisputeID
	 * @return DisputeIDType
	 */
	public function setDisputeID($_DisputeID)
	{
		return ($this->DisputeID = EbayTradingTypeDisputeIDType::valueIsValid($_DisputeID)?$_DisputeID:null);
	}
	/**
	 * Get DisputeID
	 * @return EbayTradingTypeDisputeIDType
	 */
	public function getDisputeID()
	{
		return $this->DisputeID;
	}
	/**
	 * Set DisputeResolutionReason
	 * @param DisputeResolutionReasonCodeType DisputeResolutionReason
	 * @return DisputeResolutionReasonCodeType
	 */
	public function setDisputeResolutionReason($_DisputeResolutionReason)
	{
		return ($this->DisputeResolutionReason = EbayTradingTypeDisputeResolutionReasonCodeType::valueIsValid($_DisputeResolutionReason)?$_DisputeResolutionReason:null);
	}
	/**
	 * Get DisputeResolutionReason
	 * @return EbayTradingTypeDisputeResolutionReasonCodeType
	 */
	public function getDisputeResolutionReason()
	{
		return $this->DisputeResolutionReason;
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