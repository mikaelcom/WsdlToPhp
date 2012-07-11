<?php
/**
 * Class file for EbayTradingTypeGetDisputeResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetDisputeResponseType
 * Documentation : Returned after calling GetDisputeRequest. Returns the record of a dispute, including the dispute state and other information. <br><br>Both Sellers and Buyers can use the SellerClosedDispute in Platform Notifications to receive a notification when a dispute has been closed. The notification includes the same data that is returned in the GetDispute response.
 * @date 04/07/2012
 */
class EbayTradingTypeGetDisputeResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The Dispute
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The dispute record, containing information about the buyer, seller, dispute state, dispute status, comments added to the dispute, or resolutions.
	 * @var EbayTradingTypeDisputeType
	 */
	public $Dispute;
	/**
	 * Constructor
	 * @param EbayTradingTypeDisputeType Dispute
	 * @return EbayTradingTypeGetDisputeResponseType
	 */
	public function __construct($_Dispute = null)
	{
		EbayTradingWsdlClass::__construct(array('Dispute'=>$_Dispute));
	}
	/**
	 * Set Dispute
	 * @param DisputeType Dispute
	 * @return DisputeType
	 */
	public function setDispute($_Dispute)
	{
		return ($this->Dispute = $_Dispute);
	}
	/**
	 * Get Dispute
	 * @return EbayTradingTypeDisputeType
	 */
	public function getDispute()
	{
		return $this->Dispute;
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