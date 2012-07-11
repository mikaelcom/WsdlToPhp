<?php
/**
 * Class file for CdyneDeathIndexTypeDeceasedBySSN
 * @date 03/07/2012
 */
/**
 * Class CdyneDeathIndexTypeDeceasedBySSN
 * @date 03/07/2012
 */
class CdyneDeathIndexTypeDeceasedBySSN extends CdyneDeathIndexWsdlClass
{
	/**
	 * The ssn
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $ssn;
	/**
	 * The LicenseKey
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $LicenseKey;
	/**
	 * Constructor
	 * @param string ssn
	 * @param string LicenseKey
	 * @return CdyneDeathIndexTypeDeceasedBySSN
	 */
	public function __construct($_ssn = null,$_LicenseKey = null)
	{
		parent::__construct(array('ssn'=>$_ssn,'LicenseKey'=>$_LicenseKey));
	}
	/**
	 * Set ssn
	 * @param string ssn
	 * @return string
	 */
	public function setSsn($_ssn)
	{
		return ($this->ssn = $_ssn);
	}
	/**
	 * Get ssn
	 * @return string
	 */
	public function getSsn()
	{
		return $this->ssn;
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