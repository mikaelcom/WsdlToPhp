<?php
/**
 * Class file for SOYellowPagesTypeListing
 * @date 08/07/2012
 */
/**
 * Class SOYellowPagesTypeListing
 * @date 08/07/2012
 */
class SOYellowPagesTypeListing extends SOYellowPagesWsdlClass
{
	/**
	 * The Category
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Category;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Description;
	/**
	 * The CompanyName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CompanyName;
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
	 * The Phone
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Phone;
	/**
	 * The Latitude
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var decimal
	 */
	public $Latitude;
	/**
	 * The Longitude
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var decimal
	 */
	public $Longitude;
	/**
	 * Constructor
	 * @param string Category
	 * @param string Description
	 * @param string CompanyName
	 * @param string Address
	 * @param string City
	 * @param string State
	 * @param string Zip
	 * @param string Phone
	 * @param decimal Latitude
	 * @param decimal Longitude
	 * @return SOYellowPagesTypeListing
	 */
	public function __construct($_Category = null,$_Description = null,$_CompanyName = null,$_Address = null,$_City = null,$_State = null,$_Zip = null,$_Phone = null,$_Latitude,$_Longitude)
	{
		parent::__construct(array('Category'=>$_Category,'Description'=>$_Description,'CompanyName'=>$_CompanyName,'Address'=>$_Address,'City'=>$_City,'State'=>$_State,'Zip'=>$_Zip,'Phone'=>$_Phone,'Latitude'=>$_Latitude,'Longitude'=>$_Longitude));
	}
	/**
	 * Set Category
	 * @param string Category
	 * @return string
	 */
	public function setCategory($_Category)
	{
		return ($this->Category = $_Category);
	}
	/**
	 * Get Category
	 * @return string
	 */
	public function getCategory()
	{
		return $this->Category;
	}
	/**
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
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
	 * Set Latitude
	 * @param decimal Latitude
	 * @return decimal
	 */
	public function setLatitude($_Latitude)
	{
		return ($this->Latitude = $_Latitude);
	}
	/**
	 * Get Latitude
	 * @return decimal
	 */
	public function getLatitude()
	{
		return $this->Latitude;
	}
	/**
	 * Set Longitude
	 * @param decimal Longitude
	 * @return decimal
	 */
	public function setLongitude($_Longitude)
	{
		return ($this->Longitude = $_Longitude);
	}
	/**
	 * Get Longitude
	 * @return decimal
	 */
	public function getLongitude()
	{
		return $this->Longitude;
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