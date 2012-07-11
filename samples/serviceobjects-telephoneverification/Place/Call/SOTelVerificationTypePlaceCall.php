<?php
/**
 * Class file for SOTelVerificationTypePlaceCall
 * @date 08/07/2012
 */
/**
 * Class SOTelVerificationTypePlaceCall
 * @date 08/07/2012
 */
class SOTelVerificationTypePlaceCall extends SOTelVerificationWsdlClass
{
	/**
	 * The CountryCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CountryCode;
	/**
	 * The PhoneNumber
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PhoneNumber;
	/**
	 * The Extension
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Extension;
	/**
	 * The ExtensionPauseTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ExtensionPauseTime;
	/**
	 * The VerificationCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $VerificationCode;
	/**
	 * The CallerID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CallerID;
	/**
	 * The Language
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Language;
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
	 * @param string CountryCode
	 * @param string PhoneNumber
	 * @param string Extension
	 * @param string ExtensionPauseTime
	 * @param string VerificationCode
	 * @param string CallerID
	 * @param string Language
	 * @param string LicenseKey
	 * @return SOTelVerificationTypePlaceCall
	 */
	public function __construct($_CountryCode = null,$_PhoneNumber = null,$_Extension = null,$_ExtensionPauseTime = null,$_VerificationCode = null,$_CallerID = null,$_Language = null,$_LicenseKey = null)
	{
		parent::__construct(array('CountryCode'=>$_CountryCode,'PhoneNumber'=>$_PhoneNumber,'Extension'=>$_Extension,'ExtensionPauseTime'=>$_ExtensionPauseTime,'VerificationCode'=>$_VerificationCode,'CallerID'=>$_CallerID,'Language'=>$_Language,'LicenseKey'=>$_LicenseKey));
	}
	/**
	 * Set CountryCode
	 * @param string CountryCode
	 * @return string
	 */
	public function setCountryCode($_CountryCode)
	{
		return ($this->CountryCode = $_CountryCode);
	}
	/**
	 * Get CountryCode
	 * @return string
	 */
	public function getCountryCode()
	{
		return $this->CountryCode;
	}
	/**
	 * Set PhoneNumber
	 * @param string PhoneNumber
	 * @return string
	 */
	public function setPhoneNumber($_PhoneNumber)
	{
		return ($this->PhoneNumber = $_PhoneNumber);
	}
	/**
	 * Get PhoneNumber
	 * @return string
	 */
	public function getPhoneNumber()
	{
		return $this->PhoneNumber;
	}
	/**
	 * Set Extension
	 * @param string Extension
	 * @return string
	 */
	public function setExtension($_Extension)
	{
		return ($this->Extension = $_Extension);
	}
	/**
	 * Get Extension
	 * @return string
	 */
	public function getExtension()
	{
		return $this->Extension;
	}
	/**
	 * Set ExtensionPauseTime
	 * @param string ExtensionPauseTime
	 * @return string
	 */
	public function setExtensionPauseTime($_ExtensionPauseTime)
	{
		return ($this->ExtensionPauseTime = $_ExtensionPauseTime);
	}
	/**
	 * Get ExtensionPauseTime
	 * @return string
	 */
	public function getExtensionPauseTime()
	{
		return $this->ExtensionPauseTime;
	}
	/**
	 * Set VerificationCode
	 * @param string VerificationCode
	 * @return string
	 */
	public function setVerificationCode($_VerificationCode)
	{
		return ($this->VerificationCode = $_VerificationCode);
	}
	/**
	 * Get VerificationCode
	 * @return string
	 */
	public function getVerificationCode()
	{
		return $this->VerificationCode;
	}
	/**
	 * Set CallerID
	 * @param string CallerID
	 * @return string
	 */
	public function setCallerID($_CallerID)
	{
		return ($this->CallerID = $_CallerID);
	}
	/**
	 * Get CallerID
	 * @return string
	 */
	public function getCallerID()
	{
		return $this->CallerID;
	}
	/**
	 * Set Language
	 * @param string Language
	 * @return string
	 */
	public function setLanguage($_Language)
	{
		return ($this->Language = $_Language);
	}
	/**
	 * Get Language
	 * @return string
	 */
	public function getLanguage()
	{
		return $this->Language;
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