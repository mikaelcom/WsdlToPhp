<?php
/**
 * Class file for XWeb1003TypeRealEstatePropertyType
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeRealEstatePropertyType
 * @date 09/07/2012
 */
class XWeb1003TypeRealEstatePropertyType extends XWeb1003WsdlClass
{
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
	 * The Status
	 * @var Status
	 */
	public $Status;
	/**
	 * The Type
	 * @var Type
	 */
	public $Type;
	/**
	 * The Market_Value
	 * @var Market_Value
	 */
	public $Market_Value;
	/**
	 * The Mortgages_Liens
	 * @var Mortgages_Liens
	 */
	public $Mortgages_Liens;
	/**
	 * The Gross_Rental
	 * @var Gross_Rental
	 */
	public $Gross_Rental;
	/**
	 * The Mortgage_Payments
	 * @var Mortgage_Payments
	 */
	public $Mortgage_Payments;
	/**
	 * The Insurance_Misc
	 * @var Insurance_Misc
	 */
	public $Insurance_Misc;
	/**
	 * The Net_Rental
	 * @var Net_Rental
	 */
	public $Net_Rental;
	/**
	 * The Property_Sequence
	 * @var anonymous192
	 */
	public $Property_Sequence;
	/**
	 * Constructor
	 * @param Address_1 Address_1
	 * @param Address_2 Address_2
	 * @param City City
	 * @param State State
	 * @param Postal_Code Postal_Code
	 * @param Status Status
	 * @param Type Type
	 * @param Market_Value Market_Value
	 * @param Mortgages_Liens Mortgages_Liens
	 * @param Gross_Rental Gross_Rental
	 * @param Mortgage_Payments Mortgage_Payments
	 * @param Insurance_Misc Insurance_Misc
	 * @param Net_Rental Net_Rental
	 * @param anonymous192 Property_Sequence
	 * @return XWeb1003TypeRealEstatePropertyType
	 */
	public function __construct($_Address_1 = null,$_Address_2 = null,$_City = null,$_State = null,$_Postal_Code = null,$_Status = null,$_Type = null,$_Market_Value = null,$_Mortgages_Liens = null,$_Gross_Rental = null,$_Mortgage_Payments = null,$_Insurance_Misc = null,$_Net_Rental = null,$_Property_Sequence = null)
	{
		parent::__construct(array('Address_1'=>$_Address_1,'Address_2'=>$_Address_2,'City'=>$_City,'State'=>$_State,'Postal_Code'=>$_Postal_Code,'Status'=>$_Status,'Type'=>$_Type,'Market_Value'=>$_Market_Value,'Mortgages_Liens'=>$_Mortgages_Liens,'Gross_Rental'=>$_Gross_Rental,'Mortgage_Payments'=>$_Mortgage_Payments,'Insurance_Misc'=>$_Insurance_Misc,'Net_Rental'=>$_Net_Rental,'Property_Sequence'=>$_Property_Sequence));
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
	 * Set Status
	 * @param Status Status
	 * @return Status
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = $_Status);
	}
	/**
	 * Get Status
	 * @return Status
	 */
	public function getStatus()
	{
		return $this->Status;
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
	 * Set Market_Value
	 * @param Market_Value Market_Value
	 * @return Market_Value
	 */
	public function setMarket_Value($_Market_Value)
	{
		return ($this->Market_Value = $_Market_Value);
	}
	/**
	 * Get Market_Value
	 * @return Market_Value
	 */
	public function getMarket_Value()
	{
		return $this->Market_Value;
	}
	/**
	 * Set Mortgages_Liens
	 * @param Mortgages_Liens Mortgages_Liens
	 * @return Mortgages_Liens
	 */
	public function setMortgages_Liens($_Mortgages_Liens)
	{
		return ($this->Mortgages_Liens = $_Mortgages_Liens);
	}
	/**
	 * Get Mortgages_Liens
	 * @return Mortgages_Liens
	 */
	public function getMortgages_Liens()
	{
		return $this->Mortgages_Liens;
	}
	/**
	 * Set Gross_Rental
	 * @param Gross_Rental Gross_Rental
	 * @return Gross_Rental
	 */
	public function setGross_Rental($_Gross_Rental)
	{
		return ($this->Gross_Rental = $_Gross_Rental);
	}
	/**
	 * Get Gross_Rental
	 * @return Gross_Rental
	 */
	public function getGross_Rental()
	{
		return $this->Gross_Rental;
	}
	/**
	 * Set Mortgage_Payments
	 * @param Mortgage_Payments Mortgage_Payments
	 * @return Mortgage_Payments
	 */
	public function setMortgage_Payments($_Mortgage_Payments)
	{
		return ($this->Mortgage_Payments = $_Mortgage_Payments);
	}
	/**
	 * Get Mortgage_Payments
	 * @return Mortgage_Payments
	 */
	public function getMortgage_Payments()
	{
		return $this->Mortgage_Payments;
	}
	/**
	 * Set Insurance_Misc
	 * @param Insurance_Misc Insurance_Misc
	 * @return Insurance_Misc
	 */
	public function setInsurance_Misc($_Insurance_Misc)
	{
		return ($this->Insurance_Misc = $_Insurance_Misc);
	}
	/**
	 * Get Insurance_Misc
	 * @return Insurance_Misc
	 */
	public function getInsurance_Misc()
	{
		return $this->Insurance_Misc;
	}
	/**
	 * Set Net_Rental
	 * @param Net_Rental Net_Rental
	 * @return Net_Rental
	 */
	public function setNet_Rental($_Net_Rental)
	{
		return ($this->Net_Rental = $_Net_Rental);
	}
	/**
	 * Get Net_Rental
	 * @return Net_Rental
	 */
	public function getNet_Rental()
	{
		return $this->Net_Rental;
	}
	/**
	 * Set Property_Sequence
	 * @param anonymous192 Property_Sequence
	 * @return anonymous192
	 */
	public function setProperty_Sequence($_Property_Sequence)
	{
		return ($this->Property_Sequence = $_Property_Sequence);
	}
	/**
	 * Get Property_Sequence
	 * @return anonymous192
	 */
	public function getProperty_Sequence()
	{
		return $this->Property_Sequence;
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