<?php
/**
 * Class file for SOFastTaxTypeGetTaxInfoByCityCountyState
 * @date 08/07/2012
 */
/**
 * Class SOFastTaxTypeGetTaxInfoByCityCountyState
 * @date 08/07/2012
 */
class SOFastTaxTypeGetTaxInfoByCityCountyState extends SOFastTaxWsdlClass
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
	 * The County
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $County;
	/**
	 * The State
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $State;
	/**
	 * The TaxType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TaxType;
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
	 * @param string County
	 * @param string State
	 * @param string TaxType
	 * @param string LicenseKey
	 * @return SOFastTaxTypeGetTaxInfoByCityCountyState
	 */
	public function __construct($_City = null,$_County = null,$_State = null,$_TaxType = null,$_LicenseKey = null)
	{
		parent::__construct(array('City'=>$_City,'County'=>$_County,'State'=>$_State,'TaxType'=>$_TaxType,'LicenseKey'=>$_LicenseKey));
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
	 * Set County
	 * @param string County
	 * @return string
	 */
	public function setCounty($_County)
	{
		return ($this->County = $_County);
	}
	/**
	 * Get County
	 * @return string
	 */
	public function getCounty()
	{
		return $this->County;
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
	 * Set TaxType
	 * @param string TaxType
	 * @return string
	 */
	public function setTaxType($_TaxType)
	{
		return ($this->TaxType = $_TaxType);
	}
	/**
	 * Get TaxType
	 * @return string
	 */
	public function getTaxType()
	{
		return $this->TaxType;
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