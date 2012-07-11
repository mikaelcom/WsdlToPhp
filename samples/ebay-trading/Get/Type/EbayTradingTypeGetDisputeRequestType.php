<?php
/**
 * Class file for EbayTradingTypeGetDisputeRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetDisputeRequestType
 * Documentation : Retrieves the details of a specific eBay dispute corresponding to the supplied dispute ID.
 * @date 04/07/2012
 */
class EbayTradingTypeGetDisputeRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The DisputeID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The unique identifier of an eBay dispute. The caller passes in this value to retrieve detailed information on a specific dispute.
	 * @var EbayTradingTypeDisputeIDType
	 */
	public $DisputeID;
	/**
	 * Constructor
	 * @param EbayTradingTypeDisputeIDType DisputeID
	 * @return EbayTradingTypeGetDisputeRequestType
	 */
	public function __construct($_DisputeID = null)
	{
		EbayTradingWsdlClass::__construct(array('DisputeID'=>$_DisputeID));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>