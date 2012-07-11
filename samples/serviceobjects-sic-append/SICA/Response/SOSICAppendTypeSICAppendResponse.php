<?php
/**
 * Class file for SOSICAppendTypeSICAppendResponse
 * @date 08/07/2012
 */
/**
 * Class SOSICAppendTypeSICAppendResponse
 * @date 08/07/2012
 */
class SOSICAppendTypeSICAppendResponse extends SOSICAppendWsdlClass
{
	/**
	 * The SICCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SICCode;
	/**
	 * The SICName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SICName;
	/**
	 * The CompanyName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CompanyName;
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
	 * The Address1
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Address1;
	/**
	 * The Address2
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Address2;
	/**
	 * The Address3
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Address3;
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
	 * The PhoneNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PhoneNumber;
	/**
	 * The EmployeeCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EmployeeCount;
	/**
	 * The Revenue
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Revenue;
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOSICAppendTypeErr
	 */
	public $Error;
	/**
	 * Constructor
	 * @param string SICCode
	 * @param string SICName
	 * @param string CompanyName
	 * @param string FirstName
	 * @param string LastName
	 * @param string Address1
	 * @param string Address2
	 * @param string Address3
	 * @param string City
	 * @param string State
	 * @param string PostalCode
	 * @param string PhoneNumber
	 * @param string EmployeeCount
	 * @param string Revenue
	 * @param SOSICAppendTypeErr Error
	 * @return SOSICAppendTypeSICAppendResponse
	 */
	public function __construct($_SICCode = null,$_SICName = null,$_CompanyName = null,$_FirstName = null,$_LastName = null,$_Address1 = null,$_Address2 = null,$_Address3 = null,$_City = null,$_State = null,$_PostalCode = null,$_PhoneNumber = null,$_EmployeeCount = null,$_Revenue = null,$_Error = null)
	{
		parent::__construct(array('SICCode'=>$_SICCode,'SICName'=>$_SICName,'CompanyName'=>$_CompanyName,'FirstName'=>$_FirstName,'LastName'=>$_LastName,'Address1'=>$_Address1,'Address2'=>$_Address2,'Address3'=>$_Address3,'City'=>$_City,'State'=>$_State,'PostalCode'=>$_PostalCode,'PhoneNumber'=>$_PhoneNumber,'EmployeeCount'=>$_EmployeeCount,'Revenue'=>$_Revenue,'Error'=>$_Error));
	}
	/**
	 * Set SICCode
	 * @param string SICCode
	 * @return string
	 */
	public function setSICCode($_SICCode)
	{
		return ($this->SICCode = $_SICCode);
	}
	/**
	 * Get SICCode
	 * @return string
	 */
	public function getSICCode()
	{
		return $this->SICCode;
	}
	/**
	 * Set SICName
	 * @param string SICName
	 * @return string
	 */
	public function setSICName($_SICName)
	{
		return ($this->SICName = $_SICName);
	}
	/**
	 * Get SICName
	 * @return string
	 */
	public function getSICName()
	{
		return $this->SICName;
	}
	/**
	 * Set CompanyName
	 * @param string CompanyName
	 * @return string
	 */
	public function setCompanyName($_CompanyName)
	{
		return ($this->CompanyName = $_CompanyName);
	}
	/**
	 * Get CompanyName
	 * @return string
	 */
	public function getCompanyName()
	{
		return $this->CompanyName;
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
	 * Set Address1
	 * @param string Address1
	 * @return string
	 */
	public function setAddress1($_Address1)
	{
		return ($this->Address1 = $_Address1);
	}
	/**
	 * Get Address1
	 * @return string
	 */
	public function getAddress1()
	{
		return $this->Address1;
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
	 * Set Address3
	 * @param string Address3
	 * @return string
	 */
	public function setAddress3($_Address3)
	{
		return ($this->Address3 = $_Address3);
	}
	/**
	 * Get Address3
	 * @return string
	 */
	public function getAddress3()
	{
		return $this->Address3;
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
	 * Set EmployeeCount
	 * @param string EmployeeCount
	 * @return string
	 */
	public function setEmployeeCount($_EmployeeCount)
	{
		return ($this->EmployeeCount = $_EmployeeCount);
	}
	/**
	 * Get EmployeeCount
	 * @return string
	 */
	public function getEmployeeCount()
	{
		return $this->EmployeeCount;
	}
	/**
	 * Set Revenue
	 * @param string Revenue
	 * @return string
	 */
	public function setRevenue($_Revenue)
	{
		return ($this->Revenue = $_Revenue);
	}
	/**
	 * Get Revenue
	 * @return string
	 */
	public function getRevenue()
	{
		return $this->Revenue;
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
	 * @return SOSICAppendTypeErr
	 */
	public function getError()
	{
		return $this->Error;
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