<?php
/**
 * Class file for XWeb1003TypePropertyType
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypePropertyType
 * @date 09/07/2012
 */
class XWeb1003TypePropertyType extends XWeb1003WsdlClass
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
	 * The County
	 * @var County
	 */
	public $County;
	/**
	 * The Number_Of_Units
	 * @var Number_Of_Units
	 */
	public $Number_Of_Units;
	/**
	 * The Year_Built
	 * @var Year_Built
	 */
	public $Year_Built;
	/**
	 * The Legal_Description
	 * @var Legal_Description
	 */
	public $Legal_Description;
	/**
	 * Constructor
	 * @param Type Type
	 * @param Address_1 Address_1
	 * @param Address_2 Address_2
	 * @param City City
	 * @param State State
	 * @param Postal_Code Postal_Code
	 * @param County County
	 * @param Number_Of_Units Number_Of_Units
	 * @param Year_Built Year_Built
	 * @param Legal_Description Legal_Description
	 * @return XWeb1003TypePropertyType
	 */
	public function __construct($_Type = null,$_Address_1 = null,$_Address_2 = null,$_City = null,$_State = null,$_Postal_Code = null,$_County = null,$_Number_Of_Units = null,$_Year_Built = null,$_Legal_Description = null)
	{
		parent::__construct(array('Type'=>$_Type,'Address_1'=>$_Address_1,'Address_2'=>$_Address_2,'City'=>$_City,'State'=>$_State,'Postal_Code'=>$_Postal_Code,'County'=>$_County,'Number_Of_Units'=>$_Number_Of_Units,'Year_Built'=>$_Year_Built,'Legal_Description'=>$_Legal_Description));
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
	 * Set County
	 * @param County County
	 * @return County
	 */
	public function setCounty($_County)
	{
		return ($this->County = $_County);
	}
	/**
	 * Get County
	 * @return County
	 */
	public function getCounty()
	{
		return $this->County;
	}
	/**
	 * Set Number_Of_Units
	 * @param Number_Of_Units Number_Of_Units
	 * @return Number_Of_Units
	 */
	public function setNumber_Of_Units($_Number_Of_Units)
	{
		return ($this->Number_Of_Units = $_Number_Of_Units);
	}
	/**
	 * Get Number_Of_Units
	 * @return Number_Of_Units
	 */
	public function getNumber_Of_Units()
	{
		return $this->Number_Of_Units;
	}
	/**
	 * Set Year_Built
	 * @param Year_Built Year_Built
	 * @return Year_Built
	 */
	public function setYear_Built($_Year_Built)
	{
		return ($this->Year_Built = $_Year_Built);
	}
	/**
	 * Get Year_Built
	 * @return Year_Built
	 */
	public function getYear_Built()
	{
		return $this->Year_Built;
	}
	/**
	 * Set Legal_Description
	 * @param Legal_Description Legal_Description
	 * @return Legal_Description
	 */
	public function setLegal_Description($_Legal_Description)
	{
		return ($this->Legal_Description = $_Legal_Description);
	}
	/**
	 * Get Legal_Description
	 * @return Legal_Description
	 */
	public function getLegal_Description()
	{
		return $this->Legal_Description;
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