<?php
/**
 * Class file for EbayTradingTypeConfirmIdentityRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeConfirmIdentityRequestType
 * Documentation : Returns the ID of a user who has gone through an application's consent flow process for obtaining an authorization token.
 * @date 04/07/2012
 */
class EbayTradingTypeConfirmIdentityRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The SessionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A string obtained by making a GetSessionID call, passed in redirect URL to the eBay signin page.
	 * @var string
	 */
	public $SessionID;
	/**
	 * Constructor
	 * @param string SessionID
	 * @return EbayTradingTypeConfirmIdentityRequestType
	 */
	public function __construct($_SessionID = null)
	{
		EbayTradingWsdlClass::__construct(array('SessionID'=>$_SessionID));
	}
	/**
	 * Set SessionID
	 * @param string SessionID
	 * @return string
	 */
	public function setSessionID($_SessionID)
	{
		return ($this->SessionID = $_SessionID);
	}
	/**
	 * Get SessionID
	 * @return string
	 */
	public function getSessionID()
	{
		return $this->SessionID;
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