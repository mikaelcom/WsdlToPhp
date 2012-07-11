<?php
/**
 * Class file for XiInsiderTypeInsiderTransactionSummary
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeInsiderTransactionSummary
 * @date 08/07/2012
 */
class XiInsiderTypeInsiderTransactionSummary extends XiInsiderTypeCommon
{
	/**
	 * The Insider
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeInsider
	 */
	public $Insider;
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
	 * @param XiInsiderTypeInsider Insider
	 * @param XiInsiderTypeArrayOfTransactionSummary Transactions
	 * @return XiInsiderTypeInsiderTransactionSummary
	 */
	public function __construct($_Insider = null,$_Transactions = null)
	{
		XiInsiderWsdlClass::__construct(array('Insider'=>$_Insider,'Transactions'=>new XiInsiderTypeArrayOfTransactionSummary($_Transactions)));
	}
	/**
	 * Set Insider
	 * @param Insider Insider
	 * @return Insider
	 */
	public function setInsider($_Insider)
	{
		return ($this->Insider = $_Insider);
	}
	/**
	 * Get Insider
	 * @return XiInsiderTypeInsider
	 */
	public function getInsider()
	{
		return $this->Insider;
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