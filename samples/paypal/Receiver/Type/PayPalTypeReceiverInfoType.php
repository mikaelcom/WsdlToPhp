<?php
/**
 * Class file for PayPalTypeReceiverInfoType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeReceiverInfoType
 * Documentation : ReceiverInfoType Receiver information.
 * @date 14/07/2012
 */
class PayPalTypeReceiverInfoType extends PayPalWsdlClass
{
	/**
	 * The Business
	 * Meta informations :
	 * 	- documentation : Email address or account ID of the payment recipient (the seller). Equivalent to Receiver if payment is sent to primary account. Character length and limitations: 127 single-byte alphanumeric characters
	 * @var PayPalTypeEmailAddressType
	 */
	public $Business;
	/**
	 * The Receiver
	 * Meta informations :
	 * 	- documentation : Primary email address of the payment recipient (the seller). If you are the recipient of the payment and the payment is sent to your non-primary email address, the value of Receiver is still your primary email address. Character length and limitations: 127 single-byte alphanumeric characters
	 * @var PayPalTypeEmailAddressType
	 */
	public $Receiver;
	/**
	 * The ReceiverID
	 * Meta informations :
	 * 	- documentation : Unique account ID of the payment recipient (the seller). This value is the same as the value of the recipient's referral ID.
	 * @var PayPalTypeUserIDType
	 */
	public $ReceiverID;
	/**
	 * Constructor
	 * @param PayPalTypeEmailAddressType Business
	 * @param PayPalTypeEmailAddressType Receiver
	 * @param PayPalTypeUserIDType ReceiverID
	 * @return PayPalTypeReceiverInfoType
	 */
	public function __construct($_Business = null,$_Receiver = null,$_ReceiverID = null)
	{
		parent::__construct(array('Business'=>$_Business,'Receiver'=>$_Receiver,'ReceiverID'=>$_ReceiverID));
	}
	/**
	 * Set Business
	 * @param EmailAddressType Business
	 * @return EmailAddressType
	 */
	public function setBusiness($_Business)
	{
		return ($this->Business = PayPalTypeEmailAddressType::valueIsValid($_Business)?$_Business:null);
	}
	/**
	 * Get Business
	 * @return PayPalTypeEmailAddressType
	 */
	public function getBusiness()
	{
		return $this->Business;
	}
	/**
	 * Set Receiver
	 * @param EmailAddressType Receiver
	 * @return EmailAddressType
	 */
	public function setReceiver($_Receiver)
	{
		return ($this->Receiver = PayPalTypeEmailAddressType::valueIsValid($_Receiver)?$_Receiver:null);
	}
	/**
	 * Get Receiver
	 * @return PayPalTypeEmailAddressType
	 */
	public function getReceiver()
	{
		return $this->Receiver;
	}
	/**
	 * Set ReceiverID
	 * @param UserIDType ReceiverID
	 * @return UserIDType
	 */
	public function setReceiverID($_ReceiverID)
	{
		return ($this->ReceiverID = PayPalTypeUserIDType::valueIsValid($_ReceiverID)?$_ReceiverID:null);
	}
	/**
	 * Get ReceiverID
	 * @return PayPalTypeUserIDType
	 */
	public function getReceiverID()
	{
		return $this->ReceiverID;
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