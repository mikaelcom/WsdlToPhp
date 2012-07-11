<?php
/**
 * Class file for AmazonFPSTypeFundPrepaidResult
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeFundPrepaidResult
 * @date 10/07/2012
 */
class AmazonFPSTypeFundPrepaidResult extends AmazonFPSWsdlClass
{
	/**
	 * The TransactionId
	 * @var string
	 */
	public $TransactionId;
	/**
	 * The TransactionStatus
	 * @var AmazonFPSTypeTransactionStatus
	 */
	public $TransactionStatus;
	/**
	 * Constructor
	 * @param string TransactionId
	 * @param AmazonFPSTypeTransactionStatus TransactionStatus
	 * @return AmazonFPSTypeFundPrepaidResult
	 */
	public function __construct($_TransactionId = null,$_TransactionStatus = null)
	{
		parent::__construct(array('TransactionId'=>$_TransactionId,'TransactionStatus'=>$_TransactionStatus));
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
	 * Set TransactionStatus
	 * @param TransactionStatus TransactionStatus
	 * @return TransactionStatus
	 */
	public function setTransactionStatus($_TransactionStatus)
	{
		return ($this->TransactionStatus = AmazonFPSTypeTransactionStatus::valueIsValid($_TransactionStatus)?$_TransactionStatus:null);
	}
	/**
	 * Get TransactionStatus
	 * @return AmazonFPSTypeTransactionStatus
	 */
	public function getTransactionStatus()
	{
		return $this->TransactionStatus;
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