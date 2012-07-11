<?php
/**
 * Class file for SOContactFixerTypeContactInfo
 * @date 08/07/2012
 */
/**
 * Class SOContactFixerTypeContactInfo
 * @date 08/07/2012
 */
class SOContactFixerTypeContactInfo extends SOContactFixerWsdlClass
{
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
	 * The Address2
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Address2;
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
	 * The Phone
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Phone;
	/**
	 * The Email
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Email;
	/**
	 * The CorrectionCodes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CorrectionCodes;
	/**
	 * The CorrectionDescriptions
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CorrectionDescriptions;
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
	 * @param string Name
	 * @param string Address
	 * @param string Address2
	 * @param string City
	 * @param string State
	 * @param string PostalCode
	 * @param string Phone
	 * @param string Email
	 * @param string CorrectionCodes
	 * @param string CorrectionDescriptions
	 * @param string Debug
	 * @return SOContactFixerTypeContactInfo
	 */
	public function __construct($_Name = null,$_Address = null,$_Address2 = null,$_City = null,$_State = null,$_PostalCode = null,$_Phone = null,$_Email = null,$_CorrectionCodes = null,$_CorrectionDescriptions = null,$_Debug = null)
	{
		parent::__construct(array('Name'=>$_Name,'Address'=>$_Address,'Address2'=>$_Address2,'City'=>$_City,'State'=>$_State,'PostalCode'=>$_PostalCode,'Phone'=>$_Phone,'Email'=>$_Email,'CorrectionCodes'=>$_CorrectionCodes,'CorrectionDescriptions'=>$_CorrectionDescriptions,'Debug'=>$_Debug));
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
	 * Set Address2
	 * @param string Address2
	 * @return string
	 */
	public function setAddress2($_Address2)
	{
		return ($this->Address2 = $_Address2);
	}
	/**
	 * Get Address2
	 * @return string
	 */
	public function getAddress2()
	{
		return $this->Address2;
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
	 * Set CorrectionCodes
	 * @param string CorrectionCodes
	 * @return string
	 */
	public function setCorrectionCodes($_CorrectionCodes)
	{
		return ($this->CorrectionCodes = $_CorrectionCodes);
	}
	/**
	 * Get CorrectionCodes
	 * @return string
	 */
	public function getCorrectionCodes()
	{
		return $this->CorrectionCodes;
	}
	/**
	 * Set CorrectionDescriptions
	 * @param string CorrectionDescriptions
	 * @return string
	 */
	public function setCorrectionDescriptions($_CorrectionDescriptions)
	{
		return ($this->CorrectionDescriptions = $_CorrectionDescriptions);
	}
	/**
	 * Get CorrectionDescriptions
	 * @return string
	 */
	public function getCorrectionDescriptions()
	{
		return $this->CorrectionDescriptions;
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