<?php
/**
 * Class file for CdyneDemographicsQTypeGetPlaceIDbyAddress
 * @date 03/07/2012
 */
/**
 * Class CdyneDemographicsQTypeGetPlaceIDbyAddress
 * @date 03/07/2012
 */
class CdyneDemographicsQTypeGetPlaceIDbyAddress extends CdyneDemographicsQWsdlClass
{
	/**
	 * The AddressLine1
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AddressLine1;
	/**
	 * The City
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $City;
	/**
	 * The StateAbbrev
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StateAbbrev;
	/**
	 * The ZipCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ZipCode;
	/**
	 * The LicenseKey
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LicenseKey;
	/**
	 * Constructor
	 * @param string AddressLine1
	 * @param string City
	 * @param string StateAbbrev
	 * @param string ZipCode
	 * @param string LicenseKey
	 * @return CdyneDemographicsQTypeGetPlaceIDbyAddress
	 */
	public function __construct($_AddressLine1 = null,$_City = null,$_StateAbbrev = null,$_ZipCode = null,$_LicenseKey = null)
	{
		parent::__construct(array('AddressLine1'=>$_AddressLine1,'City'=>$_City,'StateAbbrev'=>$_StateAbbrev,'ZipCode'=>$_ZipCode,'LicenseKey'=>$_LicenseKey));
	}
	/**
	 * Set AddressLine1
	 * @param string AddressLine1
	 * @return string
	 */
	public function setAddressLine1($_AddressLine1)
	{
		return ($this->AddressLine1 = $_AddressLine1);
	}
	/**
	 * Get AddressLine1
	 * @return string
	 */
	public function getAddressLine1()
	{
		return $this->AddressLine1;
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
	 * Set StateAbbrev
	 * @param string StateAbbrev
	 * @return string
	 */
	public function setStateAbbrev($_StateAbbrev)
	{
		return ($this->StateAbbrev = $_StateAbbrev);
	}
	/**
	 * Get StateAbbrev
	 * @return string
	 */
	public function getStateAbbrev()
	{
		return $this->StateAbbrev;
	}
	/**
	 * Set ZipCode
	 * @param string ZipCode
	 * @return string
	 */
	public function setZipCode($_ZipCode)
	{
		return ($this->ZipCode = $_ZipCode);
	}
	/**
	 * Get ZipCode
	 * @return string
	 */
	public function getZipCode()
	{
		return $this->ZipCode;
	}
	/**
	 * Set LicenseKey
	 * @param string LicenseKey
	 * @return string
	 */
	public function setLicenseKey($_LicenseKey)
	{
		return ($this->LicenseKey = $_LicenseKey);
	}
	/**
	 * Get LicenseKey
	 * @return string
	 */
	public function getLicenseKey()
	{
		return $this->LicenseKey;
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