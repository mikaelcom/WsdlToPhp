<?php
/**
 * Class file for XiFundHoldingsTypeOLSecurityHolders
 * @date 08/07/2012
 */
/**
 * Class XiFundHoldingsTypeOLSecurityHolders
 * @date 08/07/2012
 */
class XiFundHoldingsTypeOLSecurityHolders extends XiFundHoldingsTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundHoldingsTypeSecurity
	 */
	public $Security;
	/**
	 * The OLHolders
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundHoldingsTypeArrayOfOLHolder
	 */
	public $OLHolders;
	/**
	 * Constructor
	 * @param XiFundHoldingsTypeSecurity Security
	 * @param XiFundHoldingsTypeArrayOfOLHolder OLHolders
	 * @return XiFundHoldingsTypeOLSecurityHolders
	 */
	public function __construct($_Security = null,$_OLHolders = null)
	{
		XiFundHoldingsWsdlClass::__construct(array('Security'=>$_Security,'OLHolders'=>new XiFundHoldingsTypeArrayOfOLHolder($_OLHolders)));
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
	 * @return XiFundHoldingsTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set OLHolders
	 * @param ArrayOfOLHolder OLHolders
	 * @return ArrayOfOLHolder
	 */
	public function setOLHolders($_OLHolders)
	{
		return ($this->OLHolders = $_OLHolders);
	}
	/**
	 * Get OLHolders
	 * @return XiFundHoldingsTypeArrayOfOLHolder
	 */
	public function getOLHolders()
	{
		return $this->OLHolders;
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