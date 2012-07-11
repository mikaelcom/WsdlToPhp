<?php
/**
 * Class file for EbayTradingTypeGetVeROReasonCodeDetailsResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetVeROReasonCodeDetailsResponseType
 * Documentation : Contains the reason codes for all sites.
 * @date 04/07/2012
 */
class EbayTradingTypeGetVeROReasonCodeDetailsResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The VeROReasonCodeDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the list of the status codes for a site.
	 * @var EbayTradingTypeVeROReasonCodeDetailsType
	 */
	public $VeROReasonCodeDetails;
	/**
	 * Constructor
	 * @param EbayTradingTypeVeROReasonCodeDetailsType VeROReasonCodeDetails
	 * @return EbayTradingTypeGetVeROReasonCodeDetailsResponseType
	 */
	public function __construct($_VeROReasonCodeDetails = null)
	{
		EbayTradingWsdlClass::__construct(array('VeROReasonCodeDetails'=>$_VeROReasonCodeDetails));
	}
	/**
	 * Set VeROReasonCodeDetails
	 * @param VeROReasonCodeDetailsType VeROReasonCodeDetails
	 * @return VeROReasonCodeDetailsType
	 */
	public function setVeROReasonCodeDetails($_VeROReasonCodeDetails)
	{
		return ($this->VeROReasonCodeDetails = $_VeROReasonCodeDetails);
	}
	/**
	 * Get VeROReasonCodeDetails
	 * @return EbayTradingTypeVeROReasonCodeDetailsType
	 */
	public function getVeROReasonCodeDetails()
	{
		return $this->VeROReasonCodeDetails;
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