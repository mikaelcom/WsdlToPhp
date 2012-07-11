<?php
/**
 * Class file for PaylineWebPaymentTypeTransactionList
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeTransactionList
 * Documentation : This element contains the list of selected card
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeTransactionList extends PaylineWebPaymentWsdlClass
{
	/**
	 * The transaction
	 * Meta informations :
	 * 	- maxOccurs : 5000
	 * 	- minOccurs : 0
	 * @var PaylineWebPaymentTypeTransaction
	 */
	public $transaction;
	/**
	 * Constructor
	 * @param PaylineWebPaymentTypeTransaction transaction
	 * @return PaylineWebPaymentTypeTransactionList
	 */
	public function __construct($_transaction = null)
	{
		parent::__construct(array('transaction'=>$_transaction));
	}
	/**
	 * Set transaction
	 * @param transaction transaction
	 * @return transaction
	 */
	public function setTransaction($_transaction)
	{
		return ($this->transaction = $_transaction);
	}
	/**
	 * Get transaction
	 * @return PaylineWebPaymentTypetransaction
	 */
	public function getTransaction()
	{
		return $this->transaction;
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