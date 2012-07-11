<?php
/**
 * Class file for XWebCheckOutTypeBilling
 * @date 09/07/2012
 */
/**
 * Class XWebCheckOutTypeBilling
 * @date 09/07/2012
 */
class XWebCheckOutTypeBilling extends XWebCheckOutWsdlClass
{
	/**
	 * The First_Name
	 * @var First_Name
	 */
	public $First_Name;
	/**
	 * The Middle_Name
	 * @var Middle_Name
	 */
	public $Middle_Name;
	/**
	 * The Last_Name
	 * @var Last_Name
	 */
	public $Last_Name;
	/**
	 * The Address_1
	 * @var Address_1
	 */
	public $Address_1;
	/**
	 * The Address_2
	 * @var Address_2
	 */
	public $Address_2;
	/**
	 * The City
	 * @var City
	 */
	public $City;
	/**
	 * The State
	 * @var State
	 */
	public $State;
	/**
	 * The Postal_Code
	 * @var Postal_Code
	 */
	public $Postal_Code;
	/**
	 * The Country
	 * @var Country
	 */
	public $Country;
	/**
	 * The Phone
	 * @var Phone
	 */
	public $Phone;
	/**
	 * The Fax
	 * @var Fax
	 */
	public $Fax;
	/**
	 * The Email
	 * @var Email
	 */
	public $Email;
	/**
	 * The Date_Created
	 * @var anonymous34
	 */
	public $Date_Created;
	/**
	 * Constructor
	 * @param First_Name First_Name
	 * @param Middle_Name Middle_Name
	 * @param Last_Name Last_Name
	 * @param Address_1 Address_1
	 * @param Address_2 Address_2
	 * @param City City
	 * @param State State
	 * @param Postal_Code Postal_Code
	 * @param Country Country
	 * @param Phone Phone
	 * @param Fax Fax
	 * @param Email Email
	 * @param anonymous34 Date_Created
	 * @return XWebCheckOutTypeBilling
	 */
	public function __construct($_First_Name = null,$_Middle_Name = null,$_Last_Name = null,$_Address_1 = null,$_Address_2 = null,$_City = null,$_State = null,$_Postal_Code = null,$_Country = null,$_Phone = null,$_Fax = null,$_Email = null,$_Date_Created = null)
	{
		parent::__construct(array('First_Name'=>$_First_Name,'Middle_Name'=>$_Middle_Name,'Last_Name'=>$_Last_Name,'Address_1'=>$_Address_1,'Address_2'=>$_Address_2,'City'=>$_City,'State'=>$_State,'Postal_Code'=>$_Postal_Code,'Country'=>$_Country,'Phone'=>$_Phone,'Fax'=>$_Fax,'Email'=>$_Email,'Date_Created'=>$_Date_Created));
	}
	/**
	 * Set First_Name
	 * @param First_Name First_Name
	 * @return First_Name
	 */
	public function setFirst_Name($_First_Name)
	{
		return ($this->First_Name = $_First_Name);
	}
	/**
	 * Get First_Name
	 * @return First_Name
	 */
	public function getFirst_Name()
	{
		return $this->First_Name;
	}
	/**
	 * Set Middle_Name
	 * @param Middle_Name Middle_Name
	 * @return Middle_Name
	 */
	public function setMiddle_Name($_Middle_Name)
	{
		return ($this->Middle_Name = $_Middle_Name);
	}
	/**
	 * Get Middle_Name
	 * @return Middle_Name
	 */
	public function getMiddle_Name()
	{
		return $this->Middle_Name;
	}
	/**
	 * Set Last_Name
	 * @param Last_Name Last_Name
	 * @return Last_Name
	 */
	public function setLast_Name($_Last_Name)
	{
		return ($this->Last_Name = $_Last_Name);
	}
	/**
	 * Get Last_Name
	 * @return Last_Name
	 */
	public function getLast_Name()
	{
		return $this->Last_Name;
	}
	/**
	 * Set Address_1
	 * @param Address_1 Address_1
	 * @return Address_1
	 */
	public function setAddress_1($_Address_1)
	{
		return ($this->Address_1 = $_Address_1);
	}
	/**
	 * Get Address_1
	 * @return Address_1
	 */
	public function getAddress_1()
	{
		return $this->Address_1;
	}
	/**
	 * Set Address_2
	 * @param Address_2 Address_2
	 * @return Address_2
	 */
	public function setAddress_2($_Address_2)
	{
		return ($this->Address_2 = $_Address_2);
	}
	/**
	 * Get Address_2
	 * @return Address_2
	 */
	public function getAddress_2()
	{
		return $this->Address_2;
	}
	/**
	 * Set City
	 * @param City City
	 * @return City
	 */
	public function setCity($_City)
	{
		return ($this->City = $_City);
	}
	/**
	 * Get City
	 * @return City
	 */
	public function getCity()
	{
		return $this->City;
	}
	/**
	 * Set State
	 * @param State State
	 * @return State
	 */
	public function setState($_State)
	{
		return ($this->State = $_State);
	}
	/**
	 * Get State
	 * @return State
	 */
	public function getState()
	{
		return $this->State;
	}
	/**
	 * Set Postal_Code
	 * @param Postal_Code Postal_Code
	 * @return Postal_Code
	 */
	public function setPostal_Code($_Postal_Code)
	{
		return ($this->Postal_Code = $_Postal_Code);
	}
	/**
	 * Get Postal_Code
	 * @return Postal_Code
	 */
	public function getPostal_Code()
	{
		return $this->Postal_Code;
	}
	/**
	 * Set Country
	 * @param Country Country
	 * @return Country
	 */
	public function setCountry($_Country)
	{
		return ($this->Country = $_Country);
	}
	/**
	 * Get Country
	 * @return Country
	 */
	public function getCountry()
	{
		return $this->Country;
	}
	/**
	 * Set Phone
	 * @param Phone Phone
	 * @return Phone
	 */
	public function setPhone($_Phone)
	{
		return ($this->Phone = $_Phone);
	}
	/**
	 * Get Phone
	 * @return Phone
	 */
	public function getPhone()
	{
		return $this->Phone;
	}
	/**
	 * Set Fax
	 * @param Fax Fax
	 * @return Fax
	 */
	public function setFax($_Fax)
	{
		return ($this->Fax = $_Fax);
	}
	/**
	 * Get Fax
	 * @return Fax
	 */
	public function getFax()
	{
		return $this->Fax;
	}
	/**
	 * Set Email
	 * @param Email Email
	 * @return Email
	 */
	public function setEmail($_Email)
	{
		return ($this->Email = $_Email);
	}
	/**
	 * Get Email
	 * @return Email
	 */
	public function getEmail()
	{
		return $this->Email;
	}
	/**
	 * Set Date_Created
	 * @param anonymous34 Date_Created
	 * @return anonymous34
	 */
	public function setDate_Created($_Date_Created)
	{
		return ($this->Date_Created = $_Date_Created);
	}
	/**
	 * Get Date_Created
	 * @return anonymous34
	 */
	public function getDate_Created()
	{
		return $this->Date_Created;
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