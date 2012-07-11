<?php
/**
 * Class file for XiFundDataTypeAddress
 * @date 08/07/2012
 */
/**
 * Class XiFundDataTypeAddress
 * @date 08/07/2012
 */
class XiFundDataTypeAddress extends XiFundDataWsdlClass
{
	/**
	 * The Street
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Street;
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
	 * The ZipExtension
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ZipExtension;
	/**
	 * The ForeignCountry
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ForeignCountry;
	/**
	 * The ForeignPostalCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ForeignPostalCode;
	/**
	 * Constructor
	 * @param string Street
	 * @param string City
	 * @param string State
	 * @param string Zip
	 * @param string ZipExtension
	 * @param string ForeignCountry
	 * @param string ForeignPostalCode
	 * @return XiFundDataTypeAddress
	 */
	public function __construct($_Street = null,$_City = null,$_State = null,$_Zip = null,$_ZipExtension = null,$_ForeignCountry = null,$_ForeignPostalCode = null)
	{
		parent::__construct(array('Street'=>$_Street,'City'=>$_City,'State'=>$_State,'Zip'=>$_Zip,'ZipExtension'=>$_ZipExtension,'ForeignCountry'=>$_ForeignCountry,'ForeignPostalCode'=>$_ForeignPostalCode));
	}
	/**
	 * Set Street
	 * @param string Street
	 * @return string
	 */
	public function setStreet($_Street)
	{
		return ($this->Street = $_Street);
	}
	/**
	 * Get Street
	 * @return string
	 */
	public function getStreet()
	{
		return $this->Street;
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
	 * Set ZipExtension
	 * @param string ZipExtension
	 * @return string
	 */
	public function setZipExtension($_ZipExtension)
	{
		return ($this->ZipExtension = $_ZipExtension);
	}
	/**
	 * Get ZipExtension
	 * @return string
	 */
	public function getZipExtension()
	{
		return $this->ZipExtension;
	}
	/**
	 * Set ForeignCountry
	 * @param string ForeignCountry
	 * @return string
	 */
	public function setForeignCountry($_ForeignCountry)
	{
		return ($this->ForeignCountry = $_ForeignCountry);
	}
	/**
	 * Get ForeignCountry
	 * @return string
	 */
	public function getForeignCountry()
	{
		return $this->ForeignCountry;
	}
	/**
	 * Set ForeignPostalCode
	 * @param string ForeignPostalCode
	 * @return string
	 */
	public function setForeignPostalCode($_ForeignPostalCode)
	{
		return ($this->ForeignPostalCode = $_ForeignPostalCode);
	}
	/**
	 * Get ForeignPostalCode
	 * @return string
	 */
	public function getForeignPostalCode()
	{
		return $this->ForeignPostalCode;
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