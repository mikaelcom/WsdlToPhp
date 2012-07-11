<?php
/**
 * Class file for EbayTradingTypeConfirmIdentityResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeConfirmIdentityResponseType
 * Documentation : Confirms the identity of the user by returning the UserID and the EIASToken belonging to the user.
 * @date 04/07/2012
 */
class EbayTradingTypeConfirmIdentityResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The UserID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique eBay user ID for the user.
	 * @var string
	 */
	public $UserID;
	/**
	 * Constructor
	 * @param string UserID
	 * @return EbayTradingTypeConfirmIdentityResponseType
	 */
	public function __construct($_UserID = null)
	{
		EbayTradingWsdlClass::__construct(array('UserID'=>$_UserID));
	}
	/**
	 * Set UserID
	 * @param string UserID
	 * @return string
	 */
	public function setUserID($_UserID)
	{
		return ($this->UserID = $_UserID);
	}
	/**
	 * Get UserID
	 * @return string
	 */
	public function getUserID()
	{
		return $this->UserID;
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