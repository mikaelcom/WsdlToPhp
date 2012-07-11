<?php
/**
 * Class file for XiInsiderTypeIssuerTransactionSummary
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeIssuerTransactionSummary
 * @date 08/07/2012
 */
class XiInsiderTypeIssuerTransactionSummary extends XiInsiderTypeCommon
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
	 * @var XiInsiderTypeArrayOfTransactionSummary
	 */
	public $Transactions;
	/**
	 * Constructor
	 * @param XiInsiderTypeSecurity Security
	 * @param XiInsiderTypeArrayOfTransactionSummary Transactions
	 * @return XiInsiderTypeIssuerTransactionSummary
	 */
	public function __construct($_Security = null,$_Transactions = null)
	{
		XiInsiderWsdlClass::__construct(array('Security'=>$_Security,'Transactions'=>new XiInsiderTypeArrayOfTransactionSummary($_Transactions)));
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
	 * @param ArrayOfTransactionSummary Transactions
	 * @return ArrayOfTransactionSummary
	 */
	public function setTransactions($_Transactions)
	{
		return ($this->Transactions = $_Transactions);
	}
	/**
	 * Get Transactions
	 * @return XiInsiderTypeArrayOfTransactionSummary
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