<?php
/**
 * Class file for SODisconnectedTypeDisconnectedInfo
 * @date 08/07/2012
 */
/**
 * Class SODisconnectedTypeDisconnectedInfo
 * @date 08/07/2012
 */
class SODisconnectedTypeDisconnectedInfo extends SODisconnectedWsdlClass
{
	/**
	 * The IsDisconnected
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $IsDisconnected;
	/**
	 * The ListType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ListType;
	/**
	 * The PhoneNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PhoneNumber;
	/**
	 * The LastConnectDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LastConnectDate;
	/**
	 * The LastName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LastName;
	/**
	 * The FirstName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FirstName;
	/**
	 * The BusinessName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $BusinessName;
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
	 * The Zip
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Zip;
	/**
	 * Constructor
	 * @param boolean IsDisconnected
	 * @param string ListType
	 * @param string PhoneNumber
	 * @param string LastConnectDate
	 * @param string LastName
	 * @param string FirstName
	 * @param string BusinessName
	 * @param string Address
	 * @param string City
	 * @param string State
	 * @param string Zip
	 * @return SODisconnectedTypeDisconnectedInfo
	 */
	public function __construct($_IsDisconnected,$_ListType = null,$_PhoneNumber = null,$_LastConnectDate = null,$_LastName = null,$_FirstName = null,$_BusinessName = null,$_Address = null,$_City = null,$_State = null,$_Zip = null)
	{
		parent::__construct(array('IsDisconnected'=>$_IsDisconnected,'ListType'=>$_ListType,'PhoneNumber'=>$_PhoneNumber,'LastConnectDate'=>$_LastConnectDate,'LastName'=>$_LastName,'FirstName'=>$_FirstName,'BusinessName'=>$_BusinessName,'Address'=>$_Address,'City'=>$_City,'State'=>$_State,'Zip'=>$_Zip));
	}
	/**
	 * Set IsDisconnected
	 * @param boolean IsDisconnected
	 * @return boolean
	 */
	public function setIsDisconnected($_IsDisconnected)
	{
		return ($this->IsDisconnected = $_IsDisconnected);
	}
	/**
	 * Get IsDisconnected
	 * @return boolean
	 */
	public function getIsDisconnected()
	{
		return $this->IsDisconnected;
	}
	/**
	 * Set ListType
	 * @param string ListType
	 * @return string
	 */
	public function setListType($_ListType)
	{
		return ($this->ListType = $_ListType);
	}
	/**
	 * Get ListType
	 * @return string
	 */
	public function getListType()
	{
		return $this->ListType;
	}
	/**
	 * Set PhoneNumber
	 * @param string PhoneNumber
	 * @return string
	 */
	public function setPhoneNumber($_PhoneNumber)
	{
		return ($this->PhoneNumber = $_PhoneNumber);
	}
	/**
	 * Get PhoneNumber
	 * @return string
	 */
	public function getPhoneNumber()
	{
		return $this->PhoneNumber;
	}
	/**
	 * Set LastConnectDate
	 * @param string LastConnectDate
	 * @return string
	 */
	public function setLastConnectDate($_LastConnectDate)
	{
		return ($this->LastConnectDate = $_LastConnectDate);
	}
	/**
	 * Get LastConnectDate
	 * @return string
	 */
	public function getLastConnectDate()
	{
		return $this->LastConnectDate;
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
	 * Set BusinessName
	 * @param string BusinessName
	 * @return string
	 */
	public function setBusinessName($_BusinessName)
	{
		return ($this->BusinessName = $_BusinessName);
	}
	/**
	 * Get BusinessName
	 * @return string
	 */
	public function getBusinessName()
	{
		return $this->BusinessName;
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
	 * Set Zip
	 * @param string Zip
	 * @return string
	 */
	public function setZip($_Zip)
	{
		return ($this->Zip = $_Zip);
	}
	/**
	 * Get Zip
	 * @return string
	 */
	public function getZip()
	{
		return $this->Zip;
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