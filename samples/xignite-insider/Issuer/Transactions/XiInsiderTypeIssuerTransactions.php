<?php
/**
 * Class file for XiInsiderTypeIssuerTransactions
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeIssuerTransactions
 * @date 08/07/2012
 */
class XiInsiderTypeIssuerTransactions extends XiInsiderTypeCommon
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
	 * The Transactions
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeArrayOfTransaction
	 */
	public $Transactions;
	/**
	 * Constructor
	 * @param XiInsiderTypeSecurity Security
	 * @param XiInsiderTypeArrayOfTransaction Transactions
	 * @return XiInsiderTypeIssuerTransactions
	 */
	public function __construct($_Security = null,$_Transactions = null)
	{
		XiInsiderWsdlClass::__construct(array('Security'=>$_Security,'Transactions'=>new XiInsiderTypeArrayOfTransaction($_Transactions)));
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
	 * Set Transactions
	 * @param ArrayOfTransaction Transactions
	 * @return ArrayOfTransaction
	 */
	public function setTransactions($_Transactions)
	{
		return ($this->Transactions = $_Transactions);
	}
	/**
	 * Get Transactions
	 * @return XiInsiderTypeArrayOfTransaction
	 */
	public function getTransactions()
	{
		return $this->Transactions;
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