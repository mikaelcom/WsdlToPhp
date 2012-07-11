<?php
/**
 * Class file for EbayTradingTypeDisputeArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDisputeArrayType
 * Documentation : Represents a list of disputes. Can hold zero or more Dispute types, each of which describes a dispute.
 * @date 04/07/2012
 */
class EbayTradingTypeDisputeArrayType extends EbayTradingWsdlClass
{
	/**
	 * The Dispute
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The information that describes a dispute, including the buyer's name, the transaction ID, the dispute state and status, whether the dispute is resolved, and any messages posted to the dispute.
	 * @var EbayTradingTypeDisputeType
	 */
	public $Dispute;
	/**
	 * Constructor
	 * @param EbayTradingTypeDisputeType Dispute
	 * @return EbayTradingTypeDisputeArrayType
	 */
	public function __construct($_Dispute = null)
	{
		parent::__construct(array('Dispute'=>$_Dispute));
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