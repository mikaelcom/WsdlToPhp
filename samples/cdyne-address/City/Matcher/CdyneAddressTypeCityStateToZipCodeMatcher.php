<?php
/**
 * Class file for CdyneAddressTypeCityStateToZipCodeMatcher
 * @date 02/07/2012
 */
/**
 * Class CdyneAddressTypeCityStateToZipCodeMatcher
 * @date 02/07/2012
 */
class CdyneAddressTypeCityStateToZipCodeMatcher extends CdyneAddressWsdlClass
{
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
	 * The IgnoreBadCitySpelling
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $IgnoreBadCitySpelling;
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
	 * @param string City
	 * @param string StateAbbrev
	 * @param boolean IgnoreBadCitySpelling
	 * @param string LicenseKey
	 * @return CdyneAddressTypeCityStateToZipCodeMatcher
	 */
	public function __construct($_City = null,$_StateAbbrev = null,$_IgnoreBadCitySpelling,$_LicenseKey = null)
	{
		parent::__construct(array('City'=>$_City,'StateAbbrev'=>$_StateAbbrev,'IgnoreBadCitySpelling'=>$_IgnoreBadCitySpelling,'LicenseKey'=>$_LicenseKey));
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
	 * Set IgnoreBadCitySpelling
	 * @param boolean IgnoreBadCitySpelling
	 * @return boolean
	 */
	public function setIgnoreBadCitySpelling($_IgnoreBadCitySpelling)
	{
		return ($this->IgnoreBadCitySpelling = $_IgnoreBadCitySpelling);
	}
	/**
	 * Get IgnoreBadCitySpelling
	 * @return boolean
	 */
	public function getIgnoreBadCitySpelling()
	{
		return $this->IgnoreBadCitySpelling;
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