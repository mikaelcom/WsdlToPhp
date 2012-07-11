<?php
/**
 * Class file for EbayTradingTypeAddDisputeResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAddDisputeResponseType
 * Documentation : Returned after calling <b>AddDisputeRequest</b>. The response confirms that the Unpaid Item dispute was successfully created.
 * @date 04/07/2012
 */
class EbayTradingTypeAddDisputeResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The DisputeID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The unique identifier of the Unpaid Item dispute.
	 * @var EbayTradingTypeDisputeIDType
	 */
	public $DisputeID;
	/**
	 * Constructor
	 * @param EbayTradingTypeDisputeIDType DisputeID
	 * @return EbayTradingTypeAddDisputeResponseType
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