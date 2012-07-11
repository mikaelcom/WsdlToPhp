<?php
/**
 * Class file for SOFastQuoteTypeGetIndexInfo
 * @date 08/07/2012
 */
/**
 * Class SOFastQuoteTypeGetIndexInfo
 * @date 08/07/2012
 */
class SOFastQuoteTypeGetIndexInfo extends SOFastQuoteWsdlClass
{
	/**
	 * The Ticker
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Ticker;
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
	 * @param string Ticker
	 * @param string LicenseKey
	 * @return SOFastQuoteTypeGetIndexInfo
	 */
	public function __construct($_Ticker = null,$_LicenseKey = null)
	{
		parent::__construct(array('Ticker'=>$_Ticker,'LicenseKey'=>$_LicenseKey));
	}
	/**
	 * Set Ticker
	 * @param string Ticker
	 * @return string
	 */
	public function setTicker($_Ticker)
	{
		return ($this->Ticker = $_Ticker);
	}
	/**
	 * Get Ticker
	 * @return string
	 */
	public function getTicker()
	{
		return $this->Ticker;
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