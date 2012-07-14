<?php
/**
 * Class file for PayPalTypeBMCreateButtonResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBMCreateButtonResponseType
 * @date 14/07/2012
 */
class PayPalTypeBMCreateButtonResponseType extends PayPalTypeAbstractResponseType
{
	/**
	 * The Website
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Website;
	/**
	 * The Email
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Email;
	/**
	 * The Mobile
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Mobile;
	/**
	 * The HostedButtonID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $HostedButtonID;
	/**
	 * Constructor
	 * @param string Website
	 * @param string Email
	 * @param string Mobile
	 * @param string HostedButtonID
	 * @return PayPalTypeBMCreateButtonResponseType
	 */
	public function __construct($_Website,$_Email = null,$_Mobile = null,$_HostedButtonID = null)
	{
		PayPalWsdlClass::__construct(array('Website'=>$_Website,'Email'=>$_Email,'Mobile'=>$_Mobile,'HostedButtonID'=>$_HostedButtonID));
	}
	/**
	 * Set Website
	 * @param string Website
	 * @return string
	 */
	public function setWebsite($_Website)
	{
		return ($this->Website = $_Website);
	}
	/**
	 * Get Website
	 * @return string
	 */
	public function getWebsite()
	{
		return $this->Website;
	}
	/**
	 * Set Email
	 * @param string Email
	 * @return string
	 */
	public function setEmail($_Email)
	{
		return ($this->Email = $_Email);
	}
	/**
	 * Get Email
	 * @return string
	 */
	public function getEmail()
	{
		return $this->Email;
	}
	/**
	 * Set Mobile
	 * @param string Mobile
	 * @return string
	 */
	public function setMobile($_Mobile)
	{
		return ($this->Mobile = $_Mobile);
	}
	/**
	 * Get Mobile
	 * @return string
	 */
	public function getMobile()
	{
		return $this->Mobile;
	}
	/**
	 * Set HostedButtonID
	 * @param string HostedButtonID
	 * @return string
	 */
	public function setHostedButtonID($_HostedButtonID)
	{
		return ($this->HostedButtonID = $_HostedButtonID);
	}
	/**
	 * Get HostedButtonID
	 * @return string
	 */
	public function getHostedButtonID()
	{
		return $this->HostedButtonID;
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