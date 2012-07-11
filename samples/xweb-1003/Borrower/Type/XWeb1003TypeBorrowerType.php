<?php
/**
 * Class file for XWeb1003TypeBorrowerType
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeBorrowerType
 * @date 09/07/2012
 */
class XWeb1003TypeBorrowerType extends XWeb1003WsdlClass
{
	/**
	 * The Title
	 * @var Title
	 */
	public $Title;
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
	 * The SSN
	 * @var SSN
	 */
	public $SSN;
	/**
	 * The Phone
	 * @var Phone
	 */
	public $Phone;
	/**
	 * The DOB
	 * @var DOB
	 */
	public $DOB;
	/**
	 * The Years_School
	 * @var Years_School
	 */
	public $Years_School;
	/**
	 * The Marital_Status
	 * @var Marital_Status
	 */
	public $Marital_Status;
	/**
	 * The Dependents
	 * @var Dependents
	 */
	public $Dependents;
	/**
	 * The Dependents_Ages
	 * @var Dependents_Ages
	 */
	public $Dependents_Ages;
	/**
	 * The Addresses
	 * @var XWeb1003TypeAddresses
	 */
	public $Addresses;
	/**
	 * The Employment_Information
	 * @var XWeb1003TypeEmployment_Information
	 */
	public $Employment_Information;
	/**
	 * The Income
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XWeb1003TypeIncomeType
	 */
	public $Income;
	/**
	 * The Declarations
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XWeb1003TypeDeclarationsType
	 */
	public $Declarations;
	/**
	 * The Government_Monitoring
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XWeb1003TypeGovernmentMonitoringType
	 */
	public $Government_Monitoring;
	/**
	 * The Borrower_Type
	 * @var anonymous64
	 */
	public $Borrower_Type;
	/**
	 * Constructor
	 * @param Title Title
	 * @param First_Name First_Name
	 * @param Middle_Name Middle_Name
	 * @param Last_Name Last_Name
	 * @param SSN SSN
	 * @param Phone Phone
	 * @param DOB DOB
	 * @param Years_School Years_School
	 * @param Marital_Status Marital_Status
	 * @param Dependents Dependents
	 * @param Dependents_Ages Dependents_Ages
	 * @param XWeb1003TypeAddresses Addresses
	 * @param XWeb1003TypeEmployment_Information Employment_Information
	 * @param XWeb1003TypeIncomeType Income
	 * @param XWeb1003TypeDeclarationsType Declarations
	 * @param XWeb1003TypeGovernmentMonitoringType Government_Monitoring
	 * @param anonymous64 Borrower_Type
	 * @return XWeb1003TypeBorrowerType
	 */
	public function __construct($_Title = null,$_First_Name = null,$_Middle_Name = null,$_Last_Name = null,$_SSN = null,$_Phone = null,$_DOB = null,$_Years_School = null,$_Marital_Status = null,$_Dependents = null,$_Dependents_Ages = null,$_Addresses = null,$_Employment_Information = null,$_Income = null,$_Declarations = null,$_Government_Monitoring = null,$_Borrower_Type = null)
	{
		parent::__construct(array('Title'=>$_Title,'First_Name'=>$_First_Name,'Middle_Name'=>$_Middle_Name,'Last_Name'=>$_Last_Name,'SSN'=>$_SSN,'Phone'=>$_Phone,'DOB'=>$_DOB,'Years_School'=>$_Years_School,'Marital_Status'=>$_Marital_Status,'Dependents'=>$_Dependents,'Dependents_Ages'=>$_Dependents_Ages,'Addresses'=>$_Addresses,'Employment_Information'=>$_Employment_Information,'Income'=>$_Income,'Declarations'=>$_Declarations,'Government_Monitoring'=>$_Government_Monitoring,'Borrower_Type'=>$_Borrower_Type));
	}
	/**
	 * Set Title
	 * @param Title Title
	 * @return Title
	 */
	public function setTitle($_Title)
	{
		return ($this->Title = $_Title);
	}
	/**
	 * Get Title
	 * @return Title
	 */
	public function getTitle()
	{
		return $this->Title;
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
	 * Set SSN
	 * @param SSN SSN
	 * @return SSN
	 */
	public function setSSN($_SSN)
	{
		return ($this->SSN = $_SSN);
	}
	/**
	 * Get SSN
	 * @return SSN
	 */
	public function getSSN()
	{
		return $this->SSN;
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
	 * Set DOB
	 * @param DOB DOB
	 * @return DOB
	 */
	public function setDOB($_DOB)
	{
		return ($this->DOB = $_DOB);
	}
	/**
	 * Get DOB
	 * @return DOB
	 */
	public function getDOB()
	{
		return $this->DOB;
	}
	/**
	 * Set Years_School
	 * @param Years_School Years_School
	 * @return Years_School
	 */
	public function setYears_School($_Years_School)
	{
		return ($this->Years_School = $_Years_School);
	}
	/**
	 * Get Years_School
	 * @return Years_School
	 */
	public function getYears_School()
	{
		return $this->Years_School;
	}
	/**
	 * Set Marital_Status
	 * @param Marital_Status Marital_Status
	 * @return Marital_Status
	 */
	public function setMarital_Status($_Marital_Status)
	{
		return ($this->Marital_Status = $_Marital_Status);
	}
	/**
	 * Get Marital_Status
	 * @return Marital_Status
	 */
	public function getMarital_Status()
	{
		return $this->Marital_Status;
	}
	/**
	 * Set Dependents
	 * @param Dependents Dependents
	 * @return Dependents
	 */
	public function setDependents($_Dependents)
	{
		return ($this->Dependents = $_Dependents);
	}
	/**
	 * Get Dependents
	 * @return Dependents
	 */
	public function getDependents()
	{
		return $this->Dependents;
	}
	/**
	 * Set Dependents_Ages
	 * @param Dependents_Ages Dependents_Ages
	 * @return Dependents_Ages
	 */
	public function setDependents_Ages($_Dependents_Ages)
	{
		return ($this->Dependents_Ages = $_Dependents_Ages);
	}
	/**
	 * Get Dependents_Ages
	 * @return Dependents_Ages
	 */
	public function getDependents_Ages()
	{
		return $this->Dependents_Ages;
	}
	/**
	 * Set Addresses
	 * @param Addresses Addresses
	 * @return Addresses
	 */
	public function setAddresses($_Addresses)
	{
		return ($this->Addresses = $_Addresses);
	}
	/**
	 * Get Addresses
	 * @return XWeb1003TypeAddresses
	 */
	public function getAddresses()
	{
		return $this->Addresses;
	}
	/**
	 * Set Employment_Information
	 * @param Employment_Information Employment_Information
	 * @return Employment_Information
	 */
	public function setEmployment_Information($_Employment_Information)
	{
		return ($this->Employment_Information = $_Employment_Information);
	}
	/**
	 * Get Employment_Information
	 * @return XWeb1003TypeEmployment_Information
	 */
	public function getEmployment_Information()
	{
		return $this->Employment_Information;
	}
	/**
	 * Set Income
	 * @param IncomeType Income
	 * @return IncomeType
	 */
	public function setIncome($_Income)
	{
		return ($this->Income = $_Income);
	}
	/**
	 * Get Income
	 * @return XWeb1003TypeIncomeType
	 */
	public function getIncome()
	{
		return $this->Income;
	}
	/**
	 * Set Declarations
	 * @param DeclarationsType Declarations
	 * @return DeclarationsType
	 */
	public function setDeclarations($_Declarations)
	{
		return ($this->Declarations = $_Declarations);
	}
	/**
	 * Get Declarations
	 * @return XWeb1003TypeDeclarationsType
	 */
	public function getDeclarations()
	{
		return $this->Declarations;
	}
	/**
	 * Set Government_Monitoring
	 * @param GovernmentMonitoringType Government_Monitoring
	 * @return GovernmentMonitoringType
	 */
	public function setGovernment_Monitoring($_Government_Monitoring)
	{
		return ($this->Government_Monitoring = $_Government_Monitoring);
	}
	/**
	 * Get Government_Monitoring
	 * @return XWeb1003TypeGovernmentMonitoringType
	 */
	public function getGovernment_Monitoring()
	{
		return $this->Government_Monitoring;
	}
	/**
	 * Set Borrower_Type
	 * @param anonymous64 Borrower_Type
	 * @return anonymous64
	 */
	public function setBorrower_Type($_Borrower_Type)
	{
		return ($this->Borrower_Type = $_Borrower_Type);
	}
	/**
	 * Get Borrower_Type
	 * @return anonymous64
	 */
	public function getBorrower_Type()
	{
		return $this->Borrower_Type;
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