<?php
/**
 * Class file for XWebACHDirectoryTypeParticipant
 * @date 09/07/2012
 */
/**
 * Class XWebACHDirectoryTypeParticipant
 * @date 09/07/2012
 */
class XWebACHDirectoryTypeParticipant extends XWebACHDirectoryWsdlClass
{
	/**
	 * The Office_Code
	 * @var Office_Code
	 */
	public $Office_Code;
	/**
	 * The Office_Code_Description
	 * @var Office_Code_Description
	 */
	public $Office_Code_Description;
	/**
	 * The Servicing_FRB_Number
	 * @var Servicing_FRB_Number
	 */
	public $Servicing_FRB_Number;
	/**
	 * The Record_Type_Code
	 * @var Record_Type_Code
	 */
	public $Record_Type_Code;
	/**
	 * The Record_Type_Code_Description
	 * @var Record_Type_Code_Description
	 */
	public $Record_Type_Code_Description;
	/**
	 * The Change_Date
	 * @var Change_Date
	 */
	public $Change_Date;
	/**
	 * The New_Routing_Number
	 * @var New_Routing_Number
	 */
	public $New_Routing_Number;
	/**
	 * The Customer_Name
	 * @var Customer_Name
	 */
	public $Customer_Name;
	/**
	 * The Address
	 * @var Address
	 */
	public $Address;
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
	 * The ZipCode
	 * @var ZipCode
	 */
	public $ZipCode;
	/**
	 * The ZipCode_Extension
	 * @var ZipCode_Extension
	 */
	public $ZipCode_Extension;
	/**
	 * The Telephone_Area_Code
	 * @var Telephone_Area_Code
	 */
	public $Telephone_Area_Code;
	/**
	 * The Telephone_Prefix_Number
	 * @var Telephone_Prefix_Number
	 */
	public $Telephone_Prefix_Number;
	/**
	 * The Telephone_Suffix_Number
	 * @var Telephone_Suffix_Number
	 */
	public $Telephone_Suffix_Number;
	/**
	 * The Routing_Number
	 * @var anonymous17
	 */
	public $Routing_Number;
	/**
	 * Constructor
	 * @param Office_Code Office_Code
	 * @param Office_Code_Description Office_Code_Description
	 * @param Servicing_FRB_Number Servicing_FRB_Number
	 * @param Record_Type_Code Record_Type_Code
	 * @param Record_Type_Code_Description Record_Type_Code_Description
	 * @param Change_Date Change_Date
	 * @param New_Routing_Number New_Routing_Number
	 * @param Customer_Name Customer_Name
	 * @param Address Address
	 * @param City City
	 * @param State State
	 * @param ZipCode ZipCode
	 * @param ZipCode_Extension ZipCode_Extension
	 * @param Telephone_Area_Code Telephone_Area_Code
	 * @param Telephone_Prefix_Number Telephone_Prefix_Number
	 * @param Telephone_Suffix_Number Telephone_Suffix_Number
	 * @param anonymous17 Routing_Number
	 * @return XWebACHDirectoryTypeParticipant
	 */
	public function __construct($_Office_Code = null,$_Office_Code_Description = null,$_Servicing_FRB_Number = null,$_Record_Type_Code = null,$_Record_Type_Code_Description = null,$_Change_Date = null,$_New_Routing_Number = null,$_Customer_Name = null,$_Address = null,$_City = null,$_State = null,$_ZipCode = null,$_ZipCode_Extension = null,$_Telephone_Area_Code = null,$_Telephone_Prefix_Number = null,$_Telephone_Suffix_Number = null,$_Routing_Number = null)
	{
		parent::__construct(array('Office_Code'=>$_Office_Code,'Office_Code_Description'=>$_Office_Code_Description,'Servicing_FRB_Number'=>$_Servicing_FRB_Number,'Record_Type_Code'=>$_Record_Type_Code,'Record_Type_Code_Description'=>$_Record_Type_Code_Description,'Change_Date'=>$_Change_Date,'New_Routing_Number'=>$_New_Routing_Number,'Customer_Name'=>$_Customer_Name,'Address'=>$_Address,'City'=>$_City,'State'=>$_State,'ZipCode'=>$_ZipCode,'ZipCode_Extension'=>$_ZipCode_Extension,'Telephone_Area_Code'=>$_Telephone_Area_Code,'Telephone_Prefix_Number'=>$_Telephone_Prefix_Number,'Telephone_Suffix_Number'=>$_Telephone_Suffix_Number,'Routing_Number'=>$_Routing_Number));
	}
	/**
	 * Set Office_Code
	 * @param Office_Code Office_Code
	 * @return Office_Code
	 */
	public function setOffice_Code($_Office_Code)
	{
		return ($this->Office_Code = $_Office_Code);
	}
	/**
	 * Get Office_Code
	 * @return Office_Code
	 */
	public function getOffice_Code()
	{
		return $this->Office_Code;
	}
	/**
	 * Set Office_Code_Description
	 * @param Office_Code_Description Office_Code_Description
	 * @return Office_Code_Description
	 */
	public function setOffice_Code_Description($_Office_Code_Description)
	{
		return ($this->Office_Code_Description = $_Office_Code_Description);
	}
	/**
	 * Get Office_Code_Description
	 * @return Office_Code_Description
	 */
	public function getOffice_Code_Description()
	{
		return $this->Office_Code_Description;
	}
	/**
	 * Set Servicing_FRB_Number
	 * @param Servicing_FRB_Number Servicing_FRB_Number
	 * @return Servicing_FRB_Number
	 */
	public function setServicing_FRB_Number($_Servicing_FRB_Number)
	{
		return ($this->Servicing_FRB_Number = $_Servicing_FRB_Number);
	}
	/**
	 * Get Servicing_FRB_Number
	 * @return Servicing_FRB_Number
	 */
	public function getServicing_FRB_Number()
	{
		return $this->Servicing_FRB_Number;
	}
	/**
	 * Set Record_Type_Code
	 * @param Record_Type_Code Record_Type_Code
	 * @return Record_Type_Code
	 */
	public function setRecord_Type_Code($_Record_Type_Code)
	{
		return ($this->Record_Type_Code = $_Record_Type_Code);
	}
	/**
	 * Get Record_Type_Code
	 * @return Record_Type_Code
	 */
	public function getRecord_Type_Code()
	{
		return $this->Record_Type_Code;
	}
	/**
	 * Set Record_Type_Code_Description
	 * @param Record_Type_Code_Description Record_Type_Code_Description
	 * @return Record_Type_Code_Description
	 */
	public function setRecord_Type_Code_Description($_Record_Type_Code_Description)
	{
		return ($this->Record_Type_Code_Description = $_Record_Type_Code_Description);
	}
	/**
	 * Get Record_Type_Code_Description
	 * @return Record_Type_Code_Description
	 */
	public function getRecord_Type_Code_Description()
	{
		return $this->Record_Type_Code_Description;
	}
	/**
	 * Set Change_Date
	 * @param Change_Date Change_Date
	 * @return Change_Date
	 */
	public function setChange_Date($_Change_Date)
	{
		return ($this->Change_Date = $_Change_Date);
	}
	/**
	 * Get Change_Date
	 * @return Change_Date
	 */
	public function getChange_Date()
	{
		return $this->Change_Date;
	}
	/**
	 * Set New_Routing_Number
	 * @param New_Routing_Number New_Routing_Number
	 * @return New_Routing_Number
	 */
	public function setNew_Routing_Number($_New_Routing_Number)
	{
		return ($this->New_Routing_Number = $_New_Routing_Number);
	}
	/**
	 * Get New_Routing_Number
	 * @return New_Routing_Number
	 */
	public function getNew_Routing_Number()
	{
		return $this->New_Routing_Number;
	}
	/**
	 * Set Customer_Name
	 * @param Customer_Name Customer_Name
	 * @return Customer_Name
	 */
	public function setCustomer_Name($_Customer_Name)
	{
		return ($this->Customer_Name = $_Customer_Name);
	}
	/**
	 * Get Customer_Name
	 * @return Customer_Name
	 */
	public function getCustomer_Name()
	{
		return $this->Customer_Name;
	}
	/**
	 * Set Address
	 * @param Address Address
	 * @return Address
	 */
	public function setAddress($_Address)
	{
		return ($this->Address = $_Address);
	}
	/**
	 * Get Address
	 * @return Address
	 */
	public function getAddress()
	{
		return $this->Address;
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
	 * Set ZipCode
	 * @param ZipCode ZipCode
	 * @return ZipCode
	 */
	public function setZipCode($_ZipCode)
	{
		return ($this->ZipCode = $_ZipCode);
	}
	/**
	 * Get ZipCode
	 * @return ZipCode
	 */
	public function getZipCode()
	{
		return $this->ZipCode;
	}
	/**
	 * Set ZipCode_Extension
	 * @param ZipCode_Extension ZipCode_Extension
	 * @return ZipCode_Extension
	 */
	public function setZipCode_Extension($_ZipCode_Extension)
	{
		return ($this->ZipCode_Extension = $_ZipCode_Extension);
	}
	/**
	 * Get ZipCode_Extension
	 * @return ZipCode_Extension
	 */
	public function getZipCode_Extension()
	{
		return $this->ZipCode_Extension;
	}
	/**
	 * Set Telephone_Area_Code
	 * @param Telephone_Area_Code Telephone_Area_Code
	 * @return Telephone_Area_Code
	 */
	public function setTelephone_Area_Code($_Telephone_Area_Code)
	{
		return ($this->Telephone_Area_Code = $_Telephone_Area_Code);
	}
	/**
	 * Get Telephone_Area_Code
	 * @return Telephone_Area_Code
	 */
	public function getTelephone_Area_Code()
	{
		return $this->Telephone_Area_Code;
	}
	/**
	 * Set Telephone_Prefix_Number
	 * @param Telephone_Prefix_Number Telephone_Prefix_Number
	 * @return Telephone_Prefix_Number
	 */
	public function setTelephone_Prefix_Number($_Telephone_Prefix_Number)
	{
		return ($this->Telephone_Prefix_Number = $_Telephone_Prefix_Number);
	}
	/**
	 * Get Telephone_Prefix_Number
	 * @return Telephone_Prefix_Number
	 */
	public function getTelephone_Prefix_Number()
	{
		return $this->Telephone_Prefix_Number;
	}
	/**
	 * Set Telephone_Suffix_Number
	 * @param Telephone_Suffix_Number Telephone_Suffix_Number
	 * @return Telephone_Suffix_Number
	 */
	public function setTelephone_Suffix_Number($_Telephone_Suffix_Number)
	{
		return ($this->Telephone_Suffix_Number = $_Telephone_Suffix_Number);
	}
	/**
	 * Get Telephone_Suffix_Number
	 * @return Telephone_Suffix_Number
	 */
	public function getTelephone_Suffix_Number()
	{
		return $this->Telephone_Suffix_Number;
	}
	/**
	 * Set Routing_Number
	 * @param anonymous17 Routing_Number
	 * @return anonymous17
	 */
	public function setRouting_Number($_Routing_Number)
	{
		return ($this->Routing_Number = $_Routing_Number);
	}
	/**
	 * Get Routing_Number
	 * @return anonymous17
	 */
	public function getRouting_Number()
	{
		return $this->Routing_Number;
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