<?php
/**
 * Class file for CdyneAddressTypeCheckAddress
 * @date 02/07/2012
 */
/**
 * Class CdyneAddressTypeCheckAddress
 * @date 02/07/2012
 */
class CdyneAddressTypeCheckAddress extends CdyneAddressWsdlClass
{
	/**
	 * The AddressLine
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AddressLine;
	/**
	 * The ZipCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ZipCode;
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
	 * The LicenseKey
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LicenseKey;
	/**
	 * Constructor
	 * @param string AddressLine
	 * @param string ZipCode
	 * @param string City
	 * @param string StateAbbrev
	 * @param string LicenseKey
	 * @return CdyneAddressTypeCheckAddress
	 */
	public function __construct($_AddressLine = null,$_ZipCode = null,$_City = null,$_StateAbbrev = null,$_LicenseKey = null)
	{
		parent::__construct(array('AddressLine'=>$_AddressLine,'ZipCode'=>$_ZipCode,'City'=>$_City,'StateAbbrev'=>$_StateAbbrev,'LicenseKey'=>$_LicenseKey));
	}
	/**
	 * Set AddressLine
	 * @param string AddressLine
	 * @return string
	 */
	public function setAddressLine($_AddressLine)
	{
		return ($this->AddressLine = $_AddressLine);
	}
	/**
	 * Get AddressLine
	 * @return string
	 */
	public function getAddressLine()
	{
		return $this->AddressLine;
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