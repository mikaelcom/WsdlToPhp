<?php
/**
 * Class file for XiOFACTypeOFACAddress
 * @date 08/07/2012
 */
/**
 * Class XiOFACTypeOFACAddress
 * @date 08/07/2012
 */
class XiOFACTypeOFACAddress extends XiOFACWsdlClass
{
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
	 * The Country
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Country;
	/**
	 * The Remarks
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Remarks;
	/**
	 * Constructor
	 * @param string Address
	 * @param string City
	 * @param string Country
	 * @param string Remarks
	 * @return XiOFACTypeOFACAddress
	 */
	public function __construct($_Address = null,$_City = null,$_Country = null,$_Remarks = null)
	{
		parent::__construct(array('Address'=>$_Address,'City'=>$_City,'Country'=>$_Country,'Remarks'=>$_Remarks));
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
	 * Set Country
	 * @param string Country
	 * @return string
	 */
	public function setCountry($_Country)
	{
		return ($this->Country = $_Country);
	}
	/**
	 * Get Country
	 * @return string
	 */
	public function getCountry()
	{
		return $this->Country;
	}
	/**
	 * Set Remarks
	 * @param string Remarks
	 * @return string
	 */
	public function setRemarks($_Remarks)
	{
		return ($this->Remarks = $_Remarks);
	}
	/**
	 * Get Remarks
	 * @return string
	 */
	public function getRemarks()
	{
		return $this->Remarks;
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