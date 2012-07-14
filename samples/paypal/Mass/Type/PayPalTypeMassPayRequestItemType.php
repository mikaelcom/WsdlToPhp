<?php
/**
 * Class file for PayPalTypeMassPayRequestItemType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeMassPayRequestItemType
 * Documentation : MassPayRequestItemType
 * @date 14/07/2012
 */
class PayPalTypeMassPayRequestItemType extends PayPalWsdlClass
{
	/**
	 * The ReceiverEmail
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Email address of recipient. Required You must specify ReceiverEmail, ReceiverPhone, or ReceiverID, but all MassPayItems in a request must use the same field to specify recipients. Character length and limitations: 127 single-byte characters maximum.
	 * @var PayPalTypeEmailAddressType
	 */
	public $ReceiverEmail;
	/**
	 * The ReceiverPhone
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Phone number of recipient. Required You must specify ReceiverEmail, ReceiverPhone, or ReceiverID, but all MassPayItems in a request must use the same field to specify recipients.
	 * @var string
	 */
	public $ReceiverPhone;
	/**
	 * The ReceiverID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Unique PayPal customer account number. This value corresponds to the value of PayerID returned by GetTransactionDetails. Required You must specify ReceiverEmail, ReceiverPhone, or ReceiverID, but all MassPayItems in a request must use the same field to specify recipients. Character length and limitations: 17 single-byte characters maximum.
	 * @var PayPalTypeUserIDType
	 */
	public $ReceiverID;
	/**
	 * The Amount
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Payment amount. You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. Required You cannot mix currencies in a single MassPayRequest. A single request must include items that are of the same currency.
	 * @var PayPalTypeBasicAmountType
	 */
	public $Amount;
	/**
	 * The UniqueId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Transaction-specific identification number for tracking in an accounting system. Optional Character length and limitations: 30 single-byte characters. No whitespace allowed.
	 * @var string
	 */
	public $UniqueId;
	/**
	 * The Note
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Custom note for each recipient. Optional Character length and limitations: 4,000 single-byte alphanumeric characters
	 * @var string
	 */
	public $Note;
	/**
	 * Constructor
	 * @param PayPalTypeEmailAddressType ReceiverEmail
	 * @param string ReceiverPhone
	 * @param PayPalTypeUserIDType ReceiverID
	 * @param PayPalTypeBasicAmountType Amount
	 * @param string UniqueId
	 * @param string Note
	 * @return PayPalTypeMassPayRequestItemType
	 */
	public function __construct($_ReceiverEmail = null,$_ReceiverPhone = null,$_ReceiverID = null,$_Amount,$_UniqueId = null,$_Note = null)
	{
		parent::__construct(array('ReceiverEmail'=>$_ReceiverEmail,'ReceiverPhone'=>$_ReceiverPhone,'ReceiverID'=>$_ReceiverID,'Amount'=>$_Amount,'UniqueId'=>$_UniqueId,'Note'=>$_Note));
	}
	/**
	 * Set ReceiverEmail
	 * @param EmailAddressType ReceiverEmail
	 * @return EmailAddressType
	 */
	public function setReceiverEmail($_ReceiverEmail)
	{
		return ($this->ReceiverEmail = PayPalTypeEmailAddressType::valueIsValid($_ReceiverEmail)?$_ReceiverEmail:null);
	}
	/**
	 * Get ReceiverEmail
	 * @return PayPalTypeEmailAddressType
	 */
	public function getReceiverEmail()
	{
		return $this->ReceiverEmail;
	}
	/**
	 * Set ReceiverPhone
	 * @param string ReceiverPhone
	 * @return string
	 */
	public function setReceiverPhone($_ReceiverPhone)
	{
		return ($this->ReceiverPhone = $_ReceiverPhone);
	}
	/**
	 * Get ReceiverPhone
	 * @return string
	 */
	public function getReceiverPhone()
	{
		return $this->ReceiverPhone;
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
	 * Set Amount
	 * @param BasicAmountType Amount
	 * @return BasicAmountType
	 */
	public function setAmount($_Amount)
	{
		return ($this->Amount = $_Amount);
	}
	/**
	 * Get Amount
	 * @return PayPalTypeBasicAmountType
	 */
	public function getAmount()
	{
		return $this->Amount;
	}
	/**
	 * Set UniqueId
	 * @param string UniqueId
	 * @return string
	 */
	public function setUniqueId($_UniqueId)
	{
		return ($this->UniqueId = $_UniqueId);
	}
	/**
	 * Get UniqueId
	 * @return string
	 */
	public function getUniqueId()
	{
		return $this->UniqueId;
	}
	/**
	 * Set Note
	 * @param string Note
	 * @return string
	 */
	public function setNote($_Note)
	{
		return ($this->Note = $_Note);
	}
	/**
	 * Get Note
	 * @return string
	 */
	public function getNote()
	{
		return $this->Note;
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