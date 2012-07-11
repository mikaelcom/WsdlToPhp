<?php
/**
 * Class file for SOFastQuoteTypeSymbolLookup
 * @date 08/07/2012
 */
/**
 * Class SOFastQuoteTypeSymbolLookup
 * @date 08/07/2012
 */
class SOFastQuoteTypeSymbolLookup extends SOFastQuoteWsdlClass
{
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The SecurityType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SecurityType;
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
	 * @param string Name
	 * @param string SecurityType
	 * @param string LicenseKey
	 * @return SOFastQuoteTypeSymbolLookup
	 */
	public function __construct($_Name = null,$_SecurityType = null,$_LicenseKey = null)
	{
		parent::__construct(array('Name'=>$_Name,'SecurityType'=>$_SecurityType,'LicenseKey'=>$_LicenseKey));
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set SecurityType
	 * @param string SecurityType
	 * @return string
	 */
	public function setSecurityType($_SecurityType)
	{
		return ($this->SecurityType = $_SecurityType);
	}
	/**
	 * Get SecurityType
	 * @return string
	 */
	public function getSecurityType()
	{
		return $this->SecurityType;
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