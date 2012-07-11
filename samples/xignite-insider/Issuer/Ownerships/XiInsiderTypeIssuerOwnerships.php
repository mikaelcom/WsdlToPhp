<?php
/**
 * Class file for XiInsiderTypeIssuerOwnerships
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeIssuerOwnerships
 * @date 08/07/2012
 */
class XiInsiderTypeIssuerOwnerships extends XiInsiderTypeCommon
{
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeSecurity
	 */
	public $Security;
	/**
	 * The ShareOutstanding
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeSharesAsOf
	 */
	public $ShareOutstanding;
	/**
	 * The Ownerships
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeArrayOfIssuerOwnership
	 */
	public $Ownerships;
	/**
	 * Constructor
	 * @param XiInsiderTypeSecurity Security
	 * @param XiInsiderTypeSharesAsOf ShareOutstanding
	 * @param XiInsiderTypeArrayOfIssuerOwnership Ownerships
	 * @return XiInsiderTypeIssuerOwnerships
	 */
	public function __construct($_Security = null,$_ShareOutstanding = null,$_Ownerships = null)
	{
		XiInsiderWsdlClass::__construct(array('Security'=>$_Security,'ShareOutstanding'=>$_ShareOutstanding,'Ownerships'=>new XiInsiderTypeArrayOfIssuerOwnership($_Ownerships)));
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
	 * @return XiInsiderTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set ShareOutstanding
	 * @param SharesAsOf ShareOutstanding
	 * @return SharesAsOf
	 */
	public function setShareOutstanding($_ShareOutstanding)
	{
		return ($this->ShareOutstanding = $_ShareOutstanding);
	}
	/**
	 * Get ShareOutstanding
	 * @return XiInsiderTypeSharesAsOf
	 */
	public function getShareOutstanding()
	{
		return $this->ShareOutstanding;
	}
	/**
	 * Set Ownerships
	 * @param ArrayOfIssuerOwnership Ownerships
	 * @return ArrayOfIssuerOwnership
	 */
	public function setOwnerships($_Ownerships)
	{
		return ($this->Ownerships = $_Ownerships);
	}
	/**
	 * Get Ownerships
	 * @return XiInsiderTypeArrayOfIssuerOwnership
	 */
	public function getOwnerships()
	{
		return $this->Ownerships;
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