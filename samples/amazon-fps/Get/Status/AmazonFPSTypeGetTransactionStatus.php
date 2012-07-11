<?php
/**
 * Class file for AmazonFPSTypeGetTransactionStatus
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeGetTransactionStatus
 * @date 10/07/2012
 */
class AmazonFPSTypeGetTransactionStatus extends AmazonFPSWsdlClass
{
	/**
	 * The TransactionId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $TransactionId;
	/**
	 * Constructor
	 * @param string TransactionId
	 * @return AmazonFPSTypeGetTransactionStatus
	 */
	public function __construct($_TransactionId = null)
	{
		parent::__construct(array('TransactionId'=>$_TransactionId));
	}
	/**
	 * Set TransactionId
	 * @param string TransactionId
	 * @return string
	 */
	public function setTransactionId($_TransactionId)
	{
		return ($this->TransactionId = $_TransactionId);
	}
	/**
	 * Get TransactionId
	 * @return string
	 */
	public function getTransactionId()
	{
		return $this->TransactionId;
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