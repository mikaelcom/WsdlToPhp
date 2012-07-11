<?php
/**
 * Class file for AmazonFPSTypeGetTransactionResult
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeGetTransactionResult
 * @date 10/07/2012
 */
class AmazonFPSTypeGetTransactionResult extends AmazonFPSWsdlClass
{
	/**
	 * The Transaction
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypeTransactionDetail
	 */
	public $Transaction;
	/**
	 * Constructor
	 * @param AmazonFPSTypeTransactionDetail Transaction
	 * @return AmazonFPSTypeGetTransactionResult
	 */
	public function __construct($_Transaction = null)
	{
		parent::__construct(array('Transaction'=>$_Transaction));
	}
	/**
	 * Set Transaction
	 * @param TransactionDetail Transaction
	 * @return TransactionDetail
	 */
	public function setTransaction($_Transaction)
	{
		return ($this->Transaction = $_Transaction);
	}
	/**
	 * Get Transaction
	 * @return AmazonFPSTypeTransactionDetail
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