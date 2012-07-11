<?php
/**
 * Class file for SOBinValidationTypeValidateBIN
 * @date 08/07/2012
 */
/**
 * Class SOBinValidationTypeValidateBIN
 * @date 08/07/2012
 */
class SOBinValidationTypeValidateBIN extends SOBinValidationWsdlClass
{
	/**
	 * The BinNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $BinNumber;
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
	 * @param string BinNumber
	 * @param string LicenseKey
	 * @return SOBinValidationTypeValidateBIN
	 */
	public function __construct($_BinNumber = null,$_LicenseKey = null)
	{
		parent::__construct(array('BinNumber'=>$_BinNumber,'LicenseKey'=>$_LicenseKey));
	}
	/**
	 * Set BinNumber
	 * @param string BinNumber
	 * @return string
	 */
	public function setBinNumber($_BinNumber)
	{
		return ($this->BinNumber = $_BinNumber);
	}
	/**
	 * Get BinNumber
	 * @return string
	 */
	public function getBinNumber()
	{
		return $this->BinNumber;
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