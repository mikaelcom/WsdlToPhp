<?php
/**
 * Class file for XWeb1003TypeAddressType
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeAddressType
 * @date 09/07/2012
 */
class XWeb1003TypeAddressType extends XWeb1003WsdlClass
{
	/**
	 * The Type
	 * @var Type
	 */
	public $Type;
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
	 * The Number_Years
	 * @var Number_Years
	 */
	public $Number_Years;
	/**
	 * The Address_Sequence
	 * @var anonymous73
	 */
	public $Address_Sequence;
	/**
	 * Constructor
	 * @param Type Type
	 * @param Address_1 Address_1
	 * @param Address_2 Address_2
	 * @param City City
	 * @param State State
	 * @param Postal_Code Postal_Code
	 * @param Number_Years Number_Years
	 * @param anonymous73 Address_Sequence
	 * @return XWeb1003TypeAddressType
	 */
	public function __construct($_Type = null,$_Address_1 = null,$_Address_2 = null,$_City = null,$_State = null,$_Postal_Code = null,$_Number_Years = null,$_Address_Sequence = null)
	{
		parent::__construct(array('Type'=>$_Type,'Address_1'=>$_Address_1,'Address_2'=>$_Address_2,'City'=>$_City,'State'=>$_State,'Postal_Code'=>$_Postal_Code,'Number_Years'=>$_Number_Years,'Address_Sequence'=>$_Address_Sequence));
	}
	/**
	 * Set Type
	 * @param Type Type
	 * @return Type
	 */
	public function setType($_Type)
	{
		return ($this->Type = $_Type);
	}
	/**
	 * Get Type
	 * @return Type
	 */
	public function getType()
	{
		return $this->Type;
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
	 * Set Number_Years
	 * @param Number_Years Number_Years
	 * @return Number_Years
	 */
	public function setNumber_Years($_Number_Years)
	{
		return ($this->Number_Years = $_Number_Years);
	}
	/**
	 * Get Number_Years
	 * @return Number_Years
	 */
	public function getNumber_Years()
	{
		return $this->Number_Years;
	}
	/**
	 * Set Address_Sequence
	 * @param anonymous73 Address_Sequence
	 * @return anonymous73
	 */
	public function setAddress_Sequence($_Address_Sequence)
	{
		return ($this->Address_Sequence = $_Address_Sequence);
	}
	/**
	 * Get Address_Sequence
	 * @return anonymous73
	 */
	public function getAddress_Sequence()
	{
		return $this->Address_Sequence;
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