<?php
/**
 * Class file for EbayTradingTypeGetTokenStatusResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetTokenStatusResponseType
 * Documentation : Returns token status.
 * @date 04/07/2012
 */
class EbayTradingTypeGetTokenStatusResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The TokenStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns token status and details. For example, if revoked, whether by eBay, the user, or the application, and also when revoked.
	 * @var EbayTradingTypeTokenStatusType
	 */
	public $TokenStatus;
	/**
	 * Constructor
	 * @param EbayTradingTypeTokenStatusType TokenStatus
	 * @return EbayTradingTypeGetTokenStatusResponseType
	 */
	public function __construct($_TokenStatus = null)
	{
		EbayTradingWsdlClass::__construct(array('TokenStatus'=>$_TokenStatus));
	}
	/**
	 * Set TokenStatus
	 * @param TokenStatusType TokenStatus
	 * @return TokenStatusType
	 */
	public function setTokenStatus($_TokenStatus)
	{
		return ($this->TokenStatus = $_TokenStatus);
	}
	/**
	 * Get TokenStatus
	 * @return EbayTradingTypeTokenStatusType
	 */
	public function getTokenStatus()
	{
		return $this->TokenStatus;
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