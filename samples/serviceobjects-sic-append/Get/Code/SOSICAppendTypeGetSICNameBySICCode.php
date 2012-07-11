<?php
/**
 * Class file for SOSICAppendTypeGetSICNameBySICCode
 * @date 08/07/2012
 */
/**
 * Class SOSICAppendTypeGetSICNameBySICCode
 * @date 08/07/2012
 */
class SOSICAppendTypeGetSICNameBySICCode extends SOSICAppendWsdlClass
{
	/**
	 * The SICCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SICCode;
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
	 * @param string SICCode
	 * @param string LicenseKey
	 * @return SOSICAppendTypeGetSICNameBySICCode
	 */
	public function __construct($_SICCode = null,$_LicenseKey = null)
	{
		parent::__construct(array('SICCode'=>$_SICCode,'LicenseKey'=>$_LicenseKey));
	}
	/**
	 * Set SICCode
	 * @param string SICCode
	 * @return string
	 */
	public function setSICCode($_SICCode)
	{
		return ($this->SICCode = $_SICCode);
	}
	/**
	 * Get SICCode
	 * @return string
	 */
	public function getSICCode()
	{
		return $this->SICCode;
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