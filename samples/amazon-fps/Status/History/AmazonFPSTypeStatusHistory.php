<?php
/**
 * Class file for AmazonFPSTypeStatusHistory
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeStatusHistory
 * @date 10/07/2012
 */
class AmazonFPSTypeStatusHistory extends AmazonFPSWsdlClass
{
	/**
	 * The Date
	 * @var dateTime
	 */
	public $Date;
	/**
	 * The TransactionStatus
	 * @var AmazonFPSTypeTransactionStatus
	 */
	public $TransactionStatus;
	/**
	 * The StatusCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $StatusCode;
	/**
	 * The Amount
	 * @var AmazonFPSTypeAmount
	 */
	public $Amount;
	/**
	 * Constructor
	 * @param dateTime Date
	 * @param AmazonFPSTypeTransactionStatus TransactionStatus
	 * @param string StatusCode
	 * @param AmazonFPSTypeAmount Amount
	 * @return AmazonFPSTypeStatusHistory
	 */
	public function __construct($_Date = null,$_TransactionStatus = null,$_StatusCode = null,$_Amount = null)
	{
		parent::__construct(array('Date'=>$_Date,'TransactionStatus'=>$_TransactionStatus,'StatusCode'=>$_StatusCode,'Amount'=>$_Amount));
	}
	/**
	 * Set Date
	 * @param dateTime Date
	 * @return dateTime
	 */
	public function setDate($_Date)
	{
		return ($this->Date = $_Date);
	}
	/**
	 * Get Date
	 * @return dateTime
	 */
	public function getDate()
	{
		return $this->Date;
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
	 * Set Amount
	 * @param Amount Amount
	 * @return Amount
	 */
	public function setAmount($_Amount)
	{
		return ($this->Amount = $_Amount);
	}
	/**
	 * Get Amount
	 * @return AmazonFPSTypeAmount
	 */
	public function getAmount()
	{
		return $this->Amount;
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