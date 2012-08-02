<?php
/**
 * Class file for LifePicsTypeCreateAccountSendEmailEmailPromo
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeCreateAccountSendEmailEmailPromo
 * @date 02/08/2012
 */
class LifePicsTypeCreateAccountSendEmailEmailPromo extends LifePicsWsdlClass
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
	 * The PartnerSourceID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PartnerSourceID;
	/**
	 * The MerchantID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MerchantID;
	/**
	 * The EmailAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EmailAddress;
	/**
	 * The Password
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Password;
	/**
	 * The FirstName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FirstName;
	/**
	 * The SendEmail
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $SendEmail;
	/**
	 * The AllowEmailPromos
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $AllowEmailPromos;
	/**
	 * Constructor
	 * @param string SessionID
	 * @param string PartnerSourceID
	 * @param string MerchantID
	 * @param string EmailAddress
	 * @param string Password
	 * @param string FirstName
	 * @param boolean SendEmail
	 * @param boolean AllowEmailPromos
	 * @return LifePicsTypeCreateAccountSendEmailEmailPromo
	 */
	public function __construct($_SessionID = null,$_PartnerSourceID = null,$_MerchantID = null,$_EmailAddress = null,$_Password = null,$_FirstName = null,$_SendEmail,$_AllowEmailPromos)
	{
		parent::__construct(array('SessionID'=>$_SessionID,'PartnerSourceID'=>$_PartnerSourceID,'MerchantID'=>$_MerchantID,'EmailAddress'=>$_EmailAddress,'Password'=>$_Password,'FirstName'=>$_FirstName,'SendEmail'=>$_SendEmail,'AllowEmailPromos'=>$_AllowEmailPromos));
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
	 * Set MerchantID
	 * @param string MerchantID
	 * @return string
	 */
	public function setMerchantID($_MerchantID)
	{
		return ($this->MerchantID = $_MerchantID);
	}
	/**
	 * Get MerchantID
	 * @return string
	 */
	public function getMerchantID()
	{
		return $this->MerchantID;
	}
	/**
	 * Set EmailAddress
	 * @param string EmailAddress
	 * @return string
	 */
	public function setEmailAddress($_EmailAddress)
	{
		return ($this->EmailAddress = $_EmailAddress);
	}
	/**
	 * Get EmailAddress
	 * @return string
	 */
	public function getEmailAddress()
	{
		return $this->EmailAddress;
	}
	/**
	 * Set Password
	 * @param string Password
	 * @return string
	 */
	public function setPassword($_Password)
	{
		return ($this->Password = $_Password);
	}
	/**
	 * Get Password
	 * @return string
	 */
	public function getPassword()
	{
		return $this->Password;
	}
	/**
	 * Set FirstName
	 * @param string FirstName
	 * @return string
	 */
	public function setFirstName($_FirstName)
	{
		return ($this->FirstName = $_FirstName);
	}
	/**
	 * Get FirstName
	 * @return string
	 */
	public function getFirstName()
	{
		return $this->FirstName;
	}
	/**
	 * Set SendEmail
	 * @param boolean SendEmail
	 * @return boolean
	 */
	public function setSendEmail($_SendEmail)
	{
		return ($this->SendEmail = $_SendEmail);
	}
	/**
	 * Get SendEmail
	 * @return boolean
	 */
	public function getSendEmail()
	{
		return $this->SendEmail;
	}
	/**
	 * Set AllowEmailPromos
	 * @param boolean AllowEmailPromos
	 * @return boolean
	 */
	public function setAllowEmailPromos($_AllowEmailPromos)
	{
		return ($this->AllowEmailPromos = $_AllowEmailPromos);
	}
	/**
	 * Get AllowEmailPromos
	 * @return boolean
	 */
	public function getAllowEmailPromos()
	{
		return $this->AllowEmailPromos;
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