<?php
/**
 * Class file for SOPhoneAppendTypePhoneInfo
 * @date 08/07/2012
 */
/**
 * Class SOPhoneAppendTypePhoneInfo
 * @date 08/07/2012
 */
class SOPhoneAppendTypePhoneInfo extends SOPhoneAppendWsdlClass
{
	/**
	 * The Phone
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Phone;
	/**
	 * The Contacts
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOPhoneAppendTypeContacts
	 */
	public $Contacts;
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOPhoneAppendTypeErr
	 */
	public $Error;
	/**
	 * The FirstName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FirstName;
	/**
	 * The LastName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LastName;
	/**
	 * The Address
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Address;
	/**
	 * The City
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $City;
	/**
	 * The State
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $State;
	/**
	 * Constructor
	 * @param string Phone
	 * @param SOPhoneAppendTypeContacts Contacts
	 * @param SOPhoneAppendTypeErr Error
	 * @param string FirstName
	 * @param string LastName
	 * @param string Address
	 * @param string City
	 * @param string State
	 * @return SOPhoneAppendTypePhoneInfo
	 */
	public function __construct($_Phone = null,$_Contacts = null,$_Error = null,$_FirstName = null,$_LastName = null,$_Address = null,$_City = null,$_State = null)
	{
		parent::__construct(array('Phone'=>$_Phone,'Contacts'=>$_Contacts,'Error'=>$_Error,'FirstName'=>$_FirstName,'LastName'=>$_LastName,'Address'=>$_Address,'City'=>$_City,'State'=>$_State));
	}
	/**
	 * Set Phone
	 * @param string Phone
	 * @return string
	 */
	public function setPhone($_Phone)
	{
		return ($this->Phone = $_Phone);
	}
	/**
	 * Get Phone
	 * @return string
	 */
	public function getPhone()
	{
		return $this->Phone;
	}
	/**
	 * Set Contacts
	 * @param Contacts Contacts
	 * @return Contacts
	 */
	public function setContacts($_Contacts)
	{
		return ($this->Contacts = $_Contacts);
	}
	/**
	 * Get Contacts
	 * @return SOPhoneAppendTypeContacts
	 */
	public function getContacts()
	{
		return $this->Contacts;
	}
	/**
	 * Set Error
	 * @param Err Error
	 * @return Err
	 */
	public function setError($_Error)
	{
		return ($this->Error = $_Error);
	}
	/**
	 * Get Error
	 * @return SOPhoneAppendTypeErr
	 */
	public function getError()
	{
		return $this->Error;
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
	 * Set Address
	 * @param string Address
	 * @return string
	 */
	public function setAddress($_Address)
	{
		return ($this->Address = $_Address);
	}
	/**
	 * Get Address
	 * @return string
	 */
	public function getAddress()
	{
		return $this->Address;
	}
	/**
	 * Set City
	 * @param string City
	 * @return string
	 */
	public function setCity($_City)
	{
		return ($this->City = $_City);
	}
	/**
	 * Get City
	 * @return string
	 */
	public function getCity()
	{
		return $this->City;
	}
	/**
	 * Set State
	 * @param string State
	 * @return string
	 */
	public function setState($_State)
	{
		return ($this->State = $_State);
	}
	/**
	 * Get State
	 * @return string
	 */
	public function getState()
	{
		return $this->State;
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