<?php
/**
 * Class file for XWeb1003TypeLiabilityType
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeLiabilityType
 * @date 09/07/2012
 */
class XWeb1003TypeLiabilityType extends XWeb1003WsdlClass
{
	/**
	 * The Account_Number
	 * @var Account_Number
	 */
	public $Account_Number;
	/**
	 * The Monthly_Payment
	 * @var Monthly_Payment
	 */
	public $Monthly_Payment;
	/**
	 * The Months_Left
	 * @var Months_Left
	 */
	public $Months_Left;
	/**
	 * The Unpaid_Balance
	 * @var Unpaid_Balance
	 */
	public $Unpaid_Balance;
	/**
	 * The Is_To_Be_Paid_Off
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Is_To_Be_Paid_Off;
	/**
	 * The Name
	 * @var Name
	 */
	public $Name;
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
	 * The Liability_Sequence
	 * @var anonymous172
	 */
	public $Liability_Sequence;
	/**
	 * Constructor
	 * @param Account_Number Account_Number
	 * @param Monthly_Payment Monthly_Payment
	 * @param Months_Left Months_Left
	 * @param Unpaid_Balance Unpaid_Balance
	 * @param boolean Is_To_Be_Paid_Off
	 * @param Name Name
	 * @param Address_1 Address_1
	 * @param Address_2 Address_2
	 * @param City City
	 * @param State State
	 * @param Postal_Code Postal_Code
	 * @param anonymous172 Liability_Sequence
	 * @return XWeb1003TypeLiabilityType
	 */
	public function __construct($_Account_Number = null,$_Monthly_Payment = null,$_Months_Left = null,$_Unpaid_Balance = null,$_Is_To_Be_Paid_Off = null,$_Name = null,$_Address_1 = null,$_Address_2 = null,$_City = null,$_State = null,$_Postal_Code = null,$_Liability_Sequence = null)
	{
		parent::__construct(array('Account_Number'=>$_Account_Number,'Monthly_Payment'=>$_Monthly_Payment,'Months_Left'=>$_Months_Left,'Unpaid_Balance'=>$_Unpaid_Balance,'Is_To_Be_Paid_Off'=>$_Is_To_Be_Paid_Off,'Name'=>$_Name,'Address_1'=>$_Address_1,'Address_2'=>$_Address_2,'City'=>$_City,'State'=>$_State,'Postal_Code'=>$_Postal_Code,'Liability_Sequence'=>$_Liability_Sequence));
	}
	/**
	 * Set Account_Number
	 * @param Account_Number Account_Number
	 * @return Account_Number
	 */
	public function setAccount_Number($_Account_Number)
	{
		return ($this->Account_Number = $_Account_Number);
	}
	/**
	 * Get Account_Number
	 * @return Account_Number
	 */
	public function getAccount_Number()
	{
		return $this->Account_Number;
	}
	/**
	 * Set Monthly_Payment
	 * @param Monthly_Payment Monthly_Payment
	 * @return Monthly_Payment
	 */
	public function setMonthly_Payment($_Monthly_Payment)
	{
		return ($this->Monthly_Payment = $_Monthly_Payment);
	}
	/**
	 * Get Monthly_Payment
	 * @return Monthly_Payment
	 */
	public function getMonthly_Payment()
	{
		return $this->Monthly_Payment;
	}
	/**
	 * Set Months_Left
	 * @param Months_Left Months_Left
	 * @return Months_Left
	 */
	public function setMonths_Left($_Months_Left)
	{
		return ($this->Months_Left = $_Months_Left);
	}
	/**
	 * Get Months_Left
	 * @return Months_Left
	 */
	public function getMonths_Left()
	{
		return $this->Months_Left;
	}
	/**
	 * Set Unpaid_Balance
	 * @param Unpaid_Balance Unpaid_Balance
	 * @return Unpaid_Balance
	 */
	public function setUnpaid_Balance($_Unpaid_Balance)
	{
		return ($this->Unpaid_Balance = $_Unpaid_Balance);
	}
	/**
	 * Get Unpaid_Balance
	 * @return Unpaid_Balance
	 */
	public function getUnpaid_Balance()
	{
		return $this->Unpaid_Balance;
	}
	/**
	 * Set Is_To_Be_Paid_Off
	 * @param boolean Is_To_Be_Paid_Off
	 * @return boolean
	 */
	public function setIs_To_Be_Paid_Off($_Is_To_Be_Paid_Off)
	{
		return ($this->Is_To_Be_Paid_Off = $_Is_To_Be_Paid_Off);
	}
	/**
	 * Get Is_To_Be_Paid_Off
	 * @return boolean
	 */
	public function getIs_To_Be_Paid_Off()
	{
		return $this->Is_To_Be_Paid_Off;
	}
	/**
	 * Set Name
	 * @param Name Name
	 * @return Name
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return Name
	 */
	public function getName()
	{
		return $this->Name;
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
	 * Set Liability_Sequence
	 * @param anonymous172 Liability_Sequence
	 * @return anonymous172
	 */
	public function setLiability_Sequence($_Liability_Sequence)
	{
		return ($this->Liability_Sequence = $_Liability_Sequence);
	}
	/**
	 * Get Liability_Sequence
	 * @return anonymous172
	 */
	public function getLiability_Sequence()
	{
		return $this->Liability_Sequence;
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