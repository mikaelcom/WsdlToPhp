<?php
/**
 * Class file for XiHoldingsTypeSecurityHolders
 * @date 08/07/2012
 */
/**
 * Class XiHoldingsTypeSecurityHolders
 * @date 08/07/2012
 */
class XiHoldingsTypeSecurityHolders extends XiHoldingsTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHoldingsTypeSecurity
	 */
	public $Security;
	/**
	 * The Holders
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHoldingsTypeArrayOfHolder
	 */
	public $Holders;
	/**
	 * Constructor
	 * @param XiHoldingsTypeSecurity Security
	 * @param XiHoldingsTypeArrayOfHolder Holders
	 * @return XiHoldingsTypeSecurityHolders
	 */
	public function __construct($_Security = null,$_Holders = null)
	{
		XiHoldingsWsdlClass::__construct(array('Security'=>$_Security,'Holders'=>new XiHoldingsTypeArrayOfHolder($_Holders)));
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
	 * @return XiHoldingsTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set Holders
	 * @param ArrayOfHolder Holders
	 * @return ArrayOfHolder
	 */
	public function setHolders($_Holders)
	{
		return ($this->Holders = $_Holders);
	}
	/**
	 * Get Holders
	 * @return XiHoldingsTypeArrayOfHolder
	 */
	public function getHolders()
	{
		return $this->Holders;
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