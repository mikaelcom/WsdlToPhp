<?php
/**
 * Class file for PaylineWebPaymentTypeTransactionsSearchResponse
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeTransactionsSearchResponse
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeTransactionsSearchResponse extends PaylineWebPaymentWsdlClass
{
	/**
	 * The result
	 * Meta informations :
	 * 	- nillable : false
	 * @var PaylineWebPaymentTypeResult
	 */
	public $result;
	/**
	 * The transactionList
	 * Meta informations :
	 * 	- nillable : true
	 * @var PaylineWebPaymentTypeTransactionList
	 */
	public $transactionList;
	/**
	 * Constructor
	 * @param PaylineWebPaymentTypeResult result
	 * @param PaylineWebPaymentTypeTransactionList transactionList
	 * @return PaylineWebPaymentTypeTransactionsSearchResponse
	 */
	public function __construct($_result = null,$_transactionList = null)
	{
		parent::__construct(array('result'=>$_result,'transactionList'=>$_transactionList));
	}
	/**
	 * Set result
	 * @param result result
	 * @return result
	 */
	public function setResult($_result)
	{
		return ($this->result = $_result);
	}
	/**
	 * Get result
	 * @return PaylineWebPaymentTyperesult
	 */
	public function getResult()
	{
		return $this->result;
	}
	/**
	 * Set transactionList
	 * @param transactionList transactionList
	 * @return transactionList
	 */
	public function setTransactionList($_transactionList)
	{
		return ($this->transactionList = $_transactionList);
	}
	/**
	 * Get transactionList
	 * @return PaylineWebPaymentTypetransactionList
	 */
	public function getTransactionList()
	{
		return $this->transactionList;
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