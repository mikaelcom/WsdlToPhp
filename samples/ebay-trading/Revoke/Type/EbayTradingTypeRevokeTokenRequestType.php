<?php
/**
 * Class file for EbayTradingTypeRevokeTokenRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeRevokeTokenRequestType
 * Documentation : Voluntarily revokes a token before it would otherwise expire.
 * @date 04/07/2012
 */
class EbayTradingTypeRevokeTokenRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The UnsubscribeNotification
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Cancels notification subscriptions for the user/application if set to true. Default value is false.
	 * @var boolean
	 */
	public $UnsubscribeNotification;
	/**
	 * Constructor
	 * @param boolean UnsubscribeNotification
	 * @return EbayTradingTypeRevokeTokenRequestType
	 */
	public function __construct($_UnsubscribeNotification = null)
	{
		EbayTradingWsdlClass::__construct(array('UnsubscribeNotification'=>$_UnsubscribeNotification));
	}
	/**
	 * Set UnsubscribeNotification
	 * @param boolean UnsubscribeNotification
	 * @return boolean
	 */
	public function setUnsubscribeNotification($_UnsubscribeNotification)
	{
		return ($this->UnsubscribeNotification = $_UnsubscribeNotification);
	}
	/**
	 * Get UnsubscribeNotification
	 * @return boolean
	 */
	public function getUnsubscribeNotification()
	{
		return $this->UnsubscribeNotification;
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