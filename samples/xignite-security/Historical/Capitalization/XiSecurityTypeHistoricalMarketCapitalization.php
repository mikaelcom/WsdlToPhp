<?php
/**
 * Class file for XiSecurityTypeHistoricalMarketCapitalization
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeHistoricalMarketCapitalization
 * @date 08/07/2012
 */
class XiSecurityTypeHistoricalMarketCapitalization extends XiSecurityTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiSecurityTypeSecurity
	 */
	public $Security;
	/**
	 * The Capitalizations
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiSecurityTypeArrayOfCapitalization
	 */
	public $Capitalizations;
	/**
	 * Constructor
	 * @param XiSecurityTypeSecurity Security
	 * @param XiSecurityTypeArrayOfCapitalization Capitalizations
	 * @return XiSecurityTypeHistoricalMarketCapitalization
	 */
	public function __construct($_Security = null,$_Capitalizations = null)
	{
		XiSecurityWsdlClass::__construct(array('Security'=>$_Security,'Capitalizations'=>new XiSecurityTypeArrayOfCapitalization($_Capitalizations)));
	}
	/**
	 * Set Security
	 * @param Security Security
	 * @return Security
	 */
	public function setSecurity($_Security)
	{
		return ($this->Security = $_Security);
	}
	/**
	 * Get Security
	 * @return XiSecurityTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set Capitalizations
	 * @param ArrayOfCapitalization Capitalizations
	 * @return ArrayOfCapitalization
	 */
	public function setCapitalizations($_Capitalizations)
	{
		return ($this->Capitalizations = $_Capitalizations);
	}
	/**
	 * Get Capitalizations
	 * @return XiSecurityTypeArrayOfCapitalization
	 */
	public function getCapitalizations()
	{
		return $this->Capitalizations;
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