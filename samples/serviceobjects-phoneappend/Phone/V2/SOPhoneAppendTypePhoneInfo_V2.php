<?php
/**
 * Class file for SOPhoneAppendTypePhoneInfo_V2
 * @date 08/07/2012
 */
/**
 * Class SOPhoneAppendTypePhoneInfo_V2
 * @date 08/07/2012
 */
class SOPhoneAppendTypePhoneInfo_V2 extends SOPhoneAppendWsdlClass
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
	 * The FirstName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FirstName;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
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
	 * The PostalCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PostalCode;
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOPhoneAppendTypeErr
	 */
	public $Error;
	/**
	 * The Debug
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Debug;
	/**
	 * Constructor
	 * @param string Phone
	 * @param string FirstName
	 * @param string Name
	 * @param string Address
	 * @param string City
	 * @param string State
	 * @param string PostalCode
	 * @param SOPhoneAppendTypeErr Error
	 * @param string Debug
	 * @return SOPhoneAppendTypePhoneInfo_V2
	 */
	public function __construct($_Phone = null,$_FirstName = null,$_Name = null,$_Address = null,$_City = null,$_State = null,$_PostalCode = null,$_Error = null,$_Debug = null)
	{
		parent::__construct(array('Phone'=>$_Phone,'FirstName'=>$_FirstName,'Name'=>$_Name,'Address'=>$_Address,'City'=>$_City,'State'=>$_State,'PostalCode'=>$_PostalCode,'Error'=>$_Error,'Debug'=>$_Debug));
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
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
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
	 * Set PostalCode
	 * @param string PostalCode
	 * @return string
	 */
	public function setPostalCode($_PostalCode)
	{
		return ($this->PostalCode = $_PostalCode);
	}
	/**
	 * Get PostalCode
	 * @return string
	 */
	public function getPostalCode()
	{
		return $this->PostalCode;
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
	 * Set Debug
	 * @param string Debug
	 * @return string
	 */
	public function setDebug($_Debug)
	{
		return ($this->Debug = $_Debug);
	}
	/**
	 * Get Debug
	 * @return string
	 */
	public function getDebug()
	{
		return $this->Debug;
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