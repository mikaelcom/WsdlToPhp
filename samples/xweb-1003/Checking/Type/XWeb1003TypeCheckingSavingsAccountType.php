<?php
/**
 * Class file for XWeb1003TypeCheckingSavingsAccountType
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeCheckingSavingsAccountType
 * @date 09/07/2012
 */
class XWeb1003TypeCheckingSavingsAccountType extends XWeb1003WsdlClass
{
	/**
	 * The Account_Number
	 * @var Account_Number
	 */
	public $Account_Number;
	/**
	 * The Amount
	 * @var Amount
	 */
	public $Amount;
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
	 * The Account_Sequence
	 * @var anonymous148
	 */
	public $Account_Sequence;
	/**
	 * Constructor
	 * @param Account_Number Account_Number
	 * @param Amount Amount
	 * @param Name Name
	 * @param Address_1 Address_1
	 * @param Address_2 Address_2
	 * @param City City
	 * @param State State
	 * @param Postal_Code Postal_Code
	 * @param anonymous148 Account_Sequence
	 * @return XWeb1003TypeCheckingSavingsAccountType
	 */
	public function __construct($_Account_Number = null,$_Amount = null,$_Name = null,$_Address_1 = null,$_Address_2 = null,$_City = null,$_State = null,$_Postal_Code = null,$_Account_Sequence = null)
	{
		parent::__construct(array('Account_Number'=>$_Account_Number,'Amount'=>$_Amount,'Name'=>$_Name,'Address_1'=>$_Address_1,'Address_2'=>$_Address_2,'City'=>$_City,'State'=>$_State,'Postal_Code'=>$_Postal_Code,'Account_Sequence'=>$_Account_Sequence));
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
	 * Set Amount
	 * @param Amount Amount
	 * @return Amount
	 */
	public function setAmount($_Amount)
	{
		return ($this->Amount = $_Amount);
	}
	/**
	 * Get Amount
	 * @return Amount
	 */
	public function getAmount()
	{
		return $this->Amount;
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
	 * Set Account_Sequence
	 * @param anonymous148 Account_Sequence
	 * @return anonymous148
	 */
	public function setAccount_Sequence($_Account_Sequence)
	{
		return ($this->Account_Sequence = $_Account_Sequence);
	}
	/**
	 * Get Account_Sequence
	 * @return anonymous148
	 */
	public function getAccount_Sequence()
	{
		return $this->Account_Sequence;
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