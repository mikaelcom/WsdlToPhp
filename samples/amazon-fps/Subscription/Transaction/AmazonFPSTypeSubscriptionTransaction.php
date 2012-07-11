<?php
/**
 * Class file for AmazonFPSTypeSubscriptionTransaction
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeSubscriptionTransaction
 * @date 10/07/2012
 */
class AmazonFPSTypeSubscriptionTransaction extends AmazonFPSWsdlClass
{
	/**
	 * The TransactionId
	 * @var string
	 */
	public $TransactionId;
	/**
	 * The TransactionDate
	 * @var dateTime
	 */
	public $TransactionDate;
	/**
	 * The TransactionSerialNumber
	 * @var integer
	 */
	public $TransactionSerialNumber;
	/**
	 * The TransactionAmount
	 * @var AmazonFPSTypeAmount
	 */
	public $TransactionAmount;
	/**
	 * The Description
	 * @var string
	 */
	public $Description;
	/**
	 * The TransactionStatus
	 * @var AmazonFPSTypeTransactionStatus
	 */
	public $TransactionStatus;
	/**
	 * Constructor
	 * @param string TransactionId
	 * @param dateTime TransactionDate
	 * @param integer TransactionSerialNumber
	 * @param AmazonFPSTypeAmount TransactionAmount
	 * @param string Description
	 * @param AmazonFPSTypeTransactionStatus TransactionStatus
	 * @return AmazonFPSTypeSubscriptionTransaction
	 */
	public function __construct($_TransactionId = null,$_TransactionDate = null,$_TransactionSerialNumber = null,$_TransactionAmount = null,$_Description = null,$_TransactionStatus = null)
	{
		parent::__construct(array('TransactionId'=>$_TransactionId,'TransactionDate'=>$_TransactionDate,'TransactionSerialNumber'=>$_TransactionSerialNumber,'TransactionAmount'=>$_TransactionAmount,'Description'=>$_Description,'TransactionStatus'=>$_TransactionStatus));
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
	 * Set TransactionDate
	 * @param dateTime TransactionDate
	 * @return dateTime
	 */
	public function setTransactionDate($_TransactionDate)
	{
		return ($this->TransactionDate = $_TransactionDate);
	}
	/**
	 * Get TransactionDate
	 * @return dateTime
	 */
	public function getTransactionDate()
	{
		return $this->TransactionDate;
	}
	/**
	 * Set TransactionSerialNumber
	 * @param integer TransactionSerialNumber
	 * @return integer
	 */
	public function setTransactionSerialNumber($_TransactionSerialNumber)
	{
		return ($this->TransactionSerialNumber = $_TransactionSerialNumber);
	}
	/**
	 * Get TransactionSerialNumber
	 * @return integer
	 */
	public function getTransactionSerialNumber()
	{
		return $this->TransactionSerialNumber;
	}
	/**
	 * Set TransactionAmount
	 * @param Amount TransactionAmount
	 * @return Amount
	 */
	public function setTransactionAmount($_TransactionAmount)
	{
		return ($this->TransactionAmount = $_TransactionAmount);
	}
	/**
	 * Get TransactionAmount
	 * @return AmazonFPSTypeAmount
	 */
	public function getTransactionAmount()
	{
		return $this->TransactionAmount;
	}
	/**
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
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