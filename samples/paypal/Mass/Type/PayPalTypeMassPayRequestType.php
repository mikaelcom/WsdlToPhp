<?php
/**
 * Class file for PayPalTypeMassPayRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeMassPayRequestType
 * @date 14/07/2012
 */
class PayPalTypeMassPayRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The EmailSubject
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Subject line of the email sent to all recipients. This subject is not contained in the input file; you must create it with your application. Optional Character length and limitations: 255 single-byte alphanumeric characters
	 * @var string
	 */
	public $EmailSubject;
	/**
	 * The ReceiverType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Indicates how you identify the recipients of payments in all MassPayItems: either by EmailAddress (ReceiverEmail in MassPayItem), PhoneNumber (ReceiverPhone in MassPayItem), or by UserID (ReceiverID in MassPayItem). Required. You must specify one or the other of EmailAddress or UserID.
	 * @var PayPalTypeReceiverInfoCodeType
	 */
	public $ReceiverType;
	/**
	 * The ButtonSource
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Known as BN code, to track the partner referred merchant transactions. OptionalCharacter length and limitations: 32 single-byte alphanumeric characters
	 * @var string
	 */
	public $ButtonSource;
	/**
	 * The MassPayItem
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 250
	 * 	- documentation : Details of each payment. A single MassPayRequest can include up to 250 MassPayItems. Required
	 * @var PayPalTypeMassPayRequestItemType
	 */
	public $MassPayItem;
	/**
	 * Constructor
	 * @param string EmailSubject
	 * @param PayPalTypeReceiverInfoCodeType ReceiverType
	 * @param string ButtonSource
	 * @param PayPalTypeMassPayRequestItemType MassPayItem
	 * @return PayPalTypeMassPayRequestType
	 */
	public function __construct($_EmailSubject = null,$_ReceiverType = null,$_ButtonSource = null,$_MassPayItem)
	{
		PayPalWsdlClass::__construct(array('EmailSubject'=>$_EmailSubject,'ReceiverType'=>$_ReceiverType,'ButtonSource'=>$_ButtonSource,'MassPayItem'=>$_MassPayItem));
	}
	/**
	 * Set EmailSubject
	 * @param string EmailSubject
	 * @return string
	 */
	public function setEmailSubject($_EmailSubject)
	{
		return ($this->EmailSubject = $_EmailSubject);
	}
	/**
	 * Get EmailSubject
	 * @return string
	 */
	public function getEmailSubject()
	{
		return $this->EmailSubject;
	}
	/**
	 * Set ReceiverType
	 * @param ReceiverInfoCodeType ReceiverType
	 * @return ReceiverInfoCodeType
	 */
	public function setReceiverType($_ReceiverType)
	{
		return ($this->ReceiverType = PayPalTypeReceiverInfoCodeType::valueIsValid($_ReceiverType)?$_ReceiverType:null);
	}
	/**
	 * Get ReceiverType
	 * @return PayPalTypeReceiverInfoCodeType
	 */
	public function getReceiverType()
	{
		return $this->ReceiverType;
	}
	/**
	 * Set ButtonSource
	 * @param string ButtonSource
	 * @return string
	 */
	public function setButtonSource($_ButtonSource)
	{
		return ($this->ButtonSource = $_ButtonSource);
	}
	/**
	 * Get ButtonSource
	 * @return string
	 */
	public function getButtonSource()
	{
		return $this->ButtonSource;
	}
	/**
	 * Set MassPayItem
	 * @param MassPayRequestItemType MassPayItem
	 * @return MassPayRequestItemType
	 */
	public function setMassPayItem($_MassPayItem)
	{
		return ($this->MassPayItem = $_MassPayItem);
	}
	/**
	 * Get MassPayItem
	 * @return PayPalTypeMassPayRequestItemType
	 */
	public function getMassPayItem()
	{
		return $this->MassPayItem;
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