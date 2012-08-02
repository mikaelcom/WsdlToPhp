<?php
/**
 * Class file for LifePicsTypeSubmitOrder
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeSubmitOrder
 * @date 02/08/2012
 */
class LifePicsTypeSubmitOrder extends LifePicsWsdlClass
{
	/**
	 * The SessionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SessionID;
	/**
	 * The CartID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CartID;
	/**
	 * The PartnerSourceID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PartnerSourceID;
	/**
	 * The BillingAddressXML
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $BillingAddressXML;
	/**
	 * The PaymentMethod
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PaymentMethod;
	/**
	 * Constructor
	 * @param string SessionID
	 * @param string CartID
	 * @param string PartnerSourceID
	 * @param string BillingAddressXML
	 * @param string PaymentMethod
	 * @return LifePicsTypeSubmitOrder
	 */
	public function __construct($_SessionID = null,$_CartID = null,$_PartnerSourceID = null,$_BillingAddressXML = null,$_PaymentMethod = null)
	{
		parent::__construct(array('SessionID'=>$_SessionID,'CartID'=>$_CartID,'PartnerSourceID'=>$_PartnerSourceID,'BillingAddressXML'=>$_BillingAddressXML,'PaymentMethod'=>$_PaymentMethod));
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
	 * Set CartID
	 * @param string CartID
	 * @return string
	 */
	public function setCartID($_CartID)
	{
		return ($this->CartID = $_CartID);
	}
	/**
	 * Get CartID
	 * @return string
	 */
	public function getCartID()
	{
		return $this->CartID;
	}
	/**
	 * Set PartnerSourceID
	 * @param string PartnerSourceID
	 * @return string
	 */
	public function setPartnerSourceID($_PartnerSourceID)
	{
		return ($this->PartnerSourceID = $_PartnerSourceID);
	}
	/**
	 * Get PartnerSourceID
	 * @return string
	 */
	public function getPartnerSourceID()
	{
		return $this->PartnerSourceID;
	}
	/**
	 * Set BillingAddressXML
	 * @param string BillingAddressXML
	 * @return string
	 */
	public function setBillingAddressXML($_BillingAddressXML)
	{
		return ($this->BillingAddressXML = $_BillingAddressXML);
	}
	/**
	 * Get BillingAddressXML
	 * @return string
	 */
	public function getBillingAddressXML()
	{
		return $this->BillingAddressXML;
	}
	/**
	 * Set PaymentMethod
	 * @param string PaymentMethod
	 * @return string
	 */
	public function setPaymentMethod($_PaymentMethod)
	{
		return ($this->PaymentMethod = $_PaymentMethod);
	}
	/**
	 * Get PaymentMethod
	 * @return string
	 */
	public function getPaymentMethod()
	{
		return $this->PaymentMethod;
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