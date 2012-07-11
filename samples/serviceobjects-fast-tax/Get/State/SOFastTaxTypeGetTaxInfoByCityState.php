<?php
/**
 * Class file for SOFastTaxTypeGetTaxInfoByCityState
 * @date 08/07/2012
 */
/**
 * Class SOFastTaxTypeGetTaxInfoByCityState
 * @date 08/07/2012
 */
class SOFastTaxTypeGetTaxInfoByCityState extends SOFastTaxWsdlClass
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
	 * @param string State
	 * @param string TaxType
	 * @param string LicenseKey
	 * @return SOFastTaxTypeGetTaxInfoByCityState
	 */
	public function __construct($_City = null,$_State = null,$_TaxType = null,$_LicenseKey = null)
	{
		parent::__construct(array('City'=>$_City,'State'=>$_State,'TaxType'=>$_TaxType,'LicenseKey'=>$_LicenseKey));
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