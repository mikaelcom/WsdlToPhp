<?php
/**
 * Class file for PayPalTypeTransactionsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeTransactionsType
 * Documentation : Contains information about multiple individual transations.
 * @date 14/07/2012
 */
class PayPalTypeTransactionsType extends PayPalWsdlClass
{
	/**
	 * The Transaction
	 * @var PayPalTypeTransactionType
	 */
	public $Transaction;
	/**
	 * Constructor
	 * @param PayPalTypeTransactionType Transaction
	 * @return PayPalTypeTransactionsType
	 */
	public function __construct($_Transaction = null)
	{
		parent::__construct(array('Transaction'=>$_Transaction));
	}
	/**
	 * Set Transaction
	 * @param TransactionType Transaction
	 * @return TransactionType
	 */
	public function setTransaction($_Transaction)
	{
		return ($this->Transaction = $_Transaction);
	}
	/**
	 * Get Transaction
	 * @return PayPalTypeTransactionType
	 */
	public function getTransaction()
	{
		return $this->Transaction;
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