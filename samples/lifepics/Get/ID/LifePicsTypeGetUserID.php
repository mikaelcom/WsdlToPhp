<?php
/**
 * Class file for LifePicsTypeGetUserID
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetUserID
 * @date 02/08/2012
 */
class LifePicsTypeGetUserID extends LifePicsWsdlClass
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
	 * Constructor
	 * @param string SessionID
	 * @param string EmailAddress
	 * @param string Password
	 * @return LifePicsTypeGetUserID
	 */
	public function __construct($_SessionID = null,$_EmailAddress = null,$_Password = null)
	{
		parent::__construct(array('SessionID'=>$_SessionID,'EmailAddress'=>$_EmailAddress,'Password'=>$_Password));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>