<?php
/**
 * Class file for AmazonFPSTypeGetTransactionStatusResult
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeGetTransactionStatusResult
 * @date 10/07/2012
 */
class AmazonFPSTypeGetTransactionStatusResult extends AmazonFPSWsdlClass
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
	 * The CallerReference
	 * @var string
	 */
	public $CallerReference;
	/**
	 * The StatusCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $StatusCode;
	/**
	 * The StatusMessage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $StatusMessage;
	/**
	 * Constructor
	 * @param string TransactionId
	 * @param AmazonFPSTypeTransactionStatus TransactionStatus
	 * @param string CallerReference
	 * @param string StatusCode
	 * @param string StatusMessage
	 * @return AmazonFPSTypeGetTransactionStatusResult
	 */
	public function __construct($_TransactionId = null,$_TransactionStatus = null,$_CallerReference = null,$_StatusCode = null,$_StatusMessage = null)
	{
		parent::__construct(array('TransactionId'=>$_TransactionId,'TransactionStatus'=>$_TransactionStatus,'CallerReference'=>$_CallerReference,'StatusCode'=>$_StatusCode,'StatusMessage'=>$_StatusMessage));
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
	 * Set CallerReference
	 * @param string CallerReference
	 * @return string
	 */
	public function setCallerReference($_CallerReference)
	{
		return ($this->CallerReference = $_CallerReference);
	}
	/**
	 * Get CallerReference
	 * @return string
	 */
	public function getCallerReference()
	{
		return $this->CallerReference;
	}
	/**
	 * Set StatusCode
	 * @param string StatusCode
	 * @return string
	 */
	public function setStatusCode($_StatusCode)
	{
		return ($this->StatusCode = $_StatusCode);
	}
	/**
	 * Get StatusCode
	 * @return string
	 */
	public function getStatusCode()
	{
		return $this->StatusCode;
	}
	/**
	 * Set StatusMessage
	 * @param string StatusMessage
	 * @return string
	 */
	public function setStatusMessage($_StatusMessage)
	{
		return ($this->StatusMessage = $_StatusMessage);
	}
	/**
	 * Get StatusMessage
	 * @return string
	 */
	public function getStatusMessage()
	{
		return $this->StatusMessage;
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