<?php
/**
 * Class file for PayPalTypeGetAccessPermissionDetailsResponseDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeGetAccessPermissionDetailsResponseDetailsType
 * @date 14/07/2012
 */
class PayPalTypeGetAccessPermissionDetailsResponseDetailsType extends PayPalWsdlClass
{
	/**
	 * The FirstName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The first name of the User. Character length and limitations: 127 single-byte alphanumeric characters
	 * @var string
	 */
	public $FirstName;
	/**
	 * The LastName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The Last name of the user. Character length and limitations: 127 single-byte alphanumeric characters
	 * @var string
	 */
	public $LastName;
	/**
	 * The Email
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The email address of the user. Character length and limitations: 256 single-byte alphanumeric characters.
	 * @var string
	 */
	public $Email;
	/**
	 * The AccessPermissionName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : contains information about API Services
	 * @var string
	 */
	public $AccessPermissionName;
	/**
	 * The AccessPermissionStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : contains information about API Services
	 * @var string
	 */
	public $AccessPermissionStatus;
	/**
	 * The PayerID
	 * Meta informations :
	 * 	- documentation : Encrypted PayPal customer account identification number. Required Character length and limitations: 127 single-byte characters.
	 * @var PayPalTypeUserIDType
	 */
	public $PayerID;
	/**
	 * Constructor
	 * @param string FirstName
	 * @param string LastName
	 * @param string Email
	 * @param string AccessPermissionName
	 * @param string AccessPermissionStatus
	 * @param PayPalTypeUserIDType PayerID
	 * @return PayPalTypeGetAccessPermissionDetailsResponseDetailsType
	 */
	public function __construct($_FirstName = null,$_LastName = null,$_Email = null,$_AccessPermissionName = null,$_AccessPermissionStatus = null,$_PayerID = null)
	{
		parent::__construct(array('FirstName'=>$_FirstName,'LastName'=>$_LastName,'Email'=>$_Email,'AccessPermissionName'=>$_AccessPermissionName,'AccessPermissionStatus'=>$_AccessPermissionStatus,'PayerID'=>$_PayerID));
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
	 * Set LastName
	 * @param string LastName
	 * @return string
	 */
	public function setLastName($_LastName)
	{
		return ($this->LastName = $_LastName);
	}
	/**
	 * Get LastName
	 * @return string
	 */
	public function getLastName()
	{
		return $this->LastName;
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
	 * Set AccessPermissionName
	 * @param string AccessPermissionName
	 * @return string
	 */
	public function setAccessPermissionName($_AccessPermissionName)
	{
		return ($this->AccessPermissionName = $_AccessPermissionName);
	}
	/**
	 * Get AccessPermissionName
	 * @return string
	 */
	public function getAccessPermissionName()
	{
		return $this->AccessPermissionName;
	}
	/**
	 * Set AccessPermissionStatus
	 * @param string AccessPermissionStatus
	 * @return string
	 */
	public function setAccessPermissionStatus($_AccessPermissionStatus)
	{
		return ($this->AccessPermissionStatus = $_AccessPermissionStatus);
	}
	/**
	 * Get AccessPermissionStatus
	 * @return string
	 */
	public function getAccessPermissionStatus()
	{
		return $this->AccessPermissionStatus;
	}
	/**
	 * Set PayerID
	 * @param UserIDType PayerID
	 * @return UserIDType
	 */
	public function setPayerID($_PayerID)
	{
		return ($this->PayerID = PayPalTypeUserIDType::valueIsValid($_PayerID)?$_PayerID:null);
	}
	/**
	 * Get PayerID
	 * @return PayPalTypeUserIDType
	 */
	public function getPayerID()
	{
		return $this->PayerID;
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