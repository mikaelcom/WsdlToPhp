<?php
/**
 * Class file for XiInsiderTypeInsiderTransactions
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeInsiderTransactions
 * @date 08/07/2012
 */
class XiInsiderTypeInsiderTransactions extends XiInsiderTypeCommon
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
	 * @var XiInsiderTypeArrayOfTransaction
	 */
	public $Transactions;
	/**
	 * Constructor
	 * @param XiInsiderTypeInsider Insider
	 * @param XiInsiderTypeArrayOfTransaction Transactions
	 * @return XiInsiderTypeInsiderTransactions
	 */
	public function __construct($_Insider = null,$_Transactions = null)
	{
		XiInsiderWsdlClass::__construct(array('Insider'=>$_Insider,'Transactions'=>new XiInsiderTypeArrayOfTransaction($_Transactions)));
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