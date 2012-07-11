<?php
/**
 * Class file for EccShippingUspsTypeGetUSPSRate
 * @date 03/07/2012
 */
/**
 * Class EccShippingUspsTypeGetUSPSRate
 * @date 03/07/2012
 */
class EccShippingUspsTypeGetUSPSRate extends EccShippingUspsWsdlClass
{
	/**
	 * The KeyID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $KeyID;
	/**
	 * The DomainID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DomainID;
	/**
	 * The ZipOrigination
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ZipOrigination;
	/**
	 * The ZipDestination
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ZipDestination;
	/**
	 * The Country
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Country;
	/**
	 * The Pounds
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Pounds;
	/**
	 * The Ounces
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Ounces;
	/**
	 * Constructor
	 * @param string KeyID
	 * @param string DomainID
	 * @param string ZipOrigination
	 * @param string ZipDestination
	 * @param string Country
	 * @param string Pounds
	 * @param string Ounces
	 * @return EccShippingUspsTypeGetUSPSRate
	 */
	public function __construct($_KeyID = null,$_DomainID = null,$_ZipOrigination = null,$_ZipDestination = null,$_Country = null,$_Pounds = null,$_Ounces = null)
	{
		parent::__construct(array('KeyID'=>$_KeyID,'DomainID'=>$_DomainID,'ZipOrigination'=>$_ZipOrigination,'ZipDestination'=>$_ZipDestination,'Country'=>$_Country,'Pounds'=>$_Pounds,'Ounces'=>$_Ounces));
	}
	/**
	 * Set KeyID
	 * @param string KeyID
	 * @return string
	 */
	public function setKeyID($_KeyID)
	{
		return ($this->KeyID = $_KeyID);
	}
	/**
	 * Get KeyID
	 * @return string
	 */
	public function getKeyID()
	{
		return $this->KeyID;
	}
	/**
	 * Set DomainID
	 * @param string DomainID
	 * @return string
	 */
	public function setDomainID($_DomainID)
	{
		return ($this->DomainID = $_DomainID);
	}
	/**
	 * Get DomainID
	 * @return string
	 */
	public function getDomainID()
	{
		return $this->DomainID;
	}
	/**
	 * Set ZipOrigination
	 * @param string ZipOrigination
	 * @return string
	 */
	public function setZipOrigination($_ZipOrigination)
	{
		return ($this->ZipOrigination = $_ZipOrigination);
	}
	/**
	 * Get ZipOrigination
	 * @return string
	 */
	public function getZipOrigination()
	{
		return $this->ZipOrigination;
	}
	/**
	 * Set ZipDestination
	 * @param string ZipDestination
	 * @return string
	 */
	public function setZipDestination($_ZipDestination)
	{
		return ($this->ZipDestination = $_ZipDestination);
	}
	/**
	 * Get ZipDestination
	 * @return string
	 */
	public function getZipDestination()
	{
		return $this->ZipDestination;
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
	 * Set Pounds
	 * @param string Pounds
	 * @return string
	 */
	public function setPounds($_Pounds)
	{
		return ($this->Pounds = $_Pounds);
	}
	/**
	 * Get Pounds
	 * @return string
	 */
	public function getPounds()
	{
		return $this->Pounds;
	}
	/**
	 * Set Ounces
	 * @param string Ounces
	 * @return string
	 */
	public function setOunces($_Ounces)
	{
		return ($this->Ounces = $_Ounces);
	}
	/**
	 * Get Ounces
	 * @return string
	 */
	public function getOunces()
	{
		return $this->Ounces;
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