<?php
/**
 * Class file for CdyneSpellCheckerTypeCheckTextBody
 * @date 03/07/2012
 */
/**
 * Class CdyneSpellCheckerTypeCheckTextBody
 * @date 03/07/2012
 */
class CdyneSpellCheckerTypeCheckTextBody extends CdyneSpellCheckerWsdlClass
{
	/**
	 * The BodyText
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $BodyText;
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
	 * @param string BodyText
	 * @param string LicenseKey
	 * @return CdyneSpellCheckerTypeCheckTextBody
	 */
	public function __construct($_BodyText = null,$_LicenseKey = null)
	{
		parent::__construct(array('BodyText'=>$_BodyText,'LicenseKey'=>$_LicenseKey));
	}
	/**
	 * Set BodyText
	 * @param string BodyText
	 * @return string
	 */
	public function setBodyText($_BodyText)
	{
		return ($this->BodyText = $_BodyText);
	}
	/**
	 * Get BodyText
	 * @return string
	 */
	public function getBodyText()
	{
		return $this->BodyText;
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