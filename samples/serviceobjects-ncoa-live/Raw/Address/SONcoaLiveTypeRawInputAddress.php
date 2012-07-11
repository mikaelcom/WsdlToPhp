<?php
/**
 * Class file for SONcoaLiveTypeRawInputAddress
 * @date 06/07/2012
 */
/**
 * Class SONcoaLiveTypeRawInputAddress
 * @date 06/07/2012
 */
class SONcoaLiveTypeRawInputAddress extends SONcoaLiveWsdlClass
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
	 * The Address2
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Address2;
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
	 * Constructor
	 * @param string Address
	 * @param string Address2
	 * @param string City
	 * @param string State
	 * @param string Zip
	 * @return SONcoaLiveTypeRawInputAddress
	 */
	public function __construct($_Address = null,$_Address2 = null,$_City = null,$_State = null,$_Zip = null)
	{
		parent::__construct(array('Address'=>$_Address,'Address2'=>$_Address2,'City'=>$_City,'State'=>$_State,'Zip'=>$_Zip));
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
	 * Set Address2
	 * @param string Address2
	 * @return string
	 */
	public function setAddress2($_Address2)
	{
		return ($this->Address2 = $_Address2);
	}
	/**
	 * Get Address2
	 * @return string
	 */
	public function getAddress2()
	{
		return $this->Address2;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>