<?php
/**
 * Class file for EbayTradingTypeGetVeROReasonCodeDetailsRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetVeROReasonCodeDetailsRequestType
 * Documentation : Retrieves details for VeRO reason codes and their descriptions. You can specify a reason code ID to get details for a specific reason on the site specified in the request header. If ReasonCodeID is not passed in the request, all reason codes are returned. Set ReturnAllSites to true to retrieve reason codes for all sites. You must be a member of the Verified Rights Owner (VeRO) Program to use this call.
 * @date 04/07/2012
 */
class EbayTradingTypeGetVeROReasonCodeDetailsRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ReasonCodeID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for a reason code. If this ReasonCodeID is passed then only details of this ReasonCodeID will be returned. If no reason code is specified, all reason codes are returned.
	 * @var long
	 */
	public $ReasonCodeID;
	/**
	 * The ReturnAllSites
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Set to true to retrieve reason codes for all sites. If not specified, reason codes are returned for the site specified in the request header only. If ReasonCodeID is specified, this parameter is ignored.
	 * @var boolean
	 */
	public $ReturnAllSites;
	/**
	 * Constructor
	 * @param long ReasonCodeID
	 * @param boolean ReturnAllSites
	 * @return EbayTradingTypeGetVeROReasonCodeDetailsRequestType
	 */
	public function __construct($_ReasonCodeID = null,$_ReturnAllSites = null)
	{
		EbayTradingWsdlClass::__construct(array('ReasonCodeID'=>$_ReasonCodeID,'ReturnAllSites'=>$_ReturnAllSites));
	}
	/**
	 * Set ReasonCodeID
	 * @param long ReasonCodeID
	 * @return long
	 */
	public function setReasonCodeID($_ReasonCodeID)
	{
		return ($this->ReasonCodeID = $_ReasonCodeID);
	}
	/**
	 * Get ReasonCodeID
	 * @return long
	 */
	public function getReasonCodeID()
	{
		return $this->ReasonCodeID;
	}
	/**
	 * Set ReturnAllSites
	 * @param boolean ReturnAllSites
	 * @return boolean
	 */
	public function setReturnAllSites($_ReturnAllSites)
	{
		return ($this->ReturnAllSites = $_ReturnAllSites);
	}
	/**
	 * Get ReturnAllSites
	 * @return boolean
	 */
	public function getReturnAllSites()
	{
		return $this->ReturnAllSites;
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