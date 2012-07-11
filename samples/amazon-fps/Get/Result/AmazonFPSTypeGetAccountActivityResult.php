<?php
/**
 * Class file for AmazonFPSTypeGetAccountActivityResult
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeGetAccountActivityResult
 * @date 10/07/2012
 */
class AmazonFPSTypeGetAccountActivityResult extends AmazonFPSWsdlClass
{
	/**
	 * The BatchSize
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var integer
	 */
	public $BatchSize;
	/**
	 * The Transaction
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypeTransaction
	 */
	public $Transaction;
	/**
	 * The StartTimeForNextTransaction
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var dateTime
	 */
	public $StartTimeForNextTransaction;
	/**
	 * Constructor
	 * @param integer BatchSize
	 * @param AmazonFPSTypeTransaction Transaction
	 * @param dateTime StartTimeForNextTransaction
	 * @return AmazonFPSTypeGetAccountActivityResult
	 */
	public function __construct($_BatchSize = null,$_Transaction = null,$_StartTimeForNextTransaction = null)
	{
		parent::__construct(array('BatchSize'=>$_BatchSize,'Transaction'=>$_Transaction,'StartTimeForNextTransaction'=>$_StartTimeForNextTransaction));
	}
	/**
	 * Set BatchSize
	 * @param integer BatchSize
	 * @return integer
	 */
	public function setBatchSize($_BatchSize)
	{
		return ($this->BatchSize = $_BatchSize);
	}
	/**
	 * Get BatchSize
	 * @return integer
	 */
	public function getBatchSize()
	{
		return $this->BatchSize;
	}
	/**
	 * Set Transaction
	 * @param Transaction Transaction
	 * @return Transaction
	 */
	public function setTransaction($_Transaction)
	{
		return ($this->Transaction = $_Transaction);
	}
	/**
	 * Get Transaction
	 * @return AmazonFPSTypeTransaction
	 */
	public function getTransaction()
	{
		return $this->Transaction;
	}
	/**
	 * Set StartTimeForNextTransaction
	 * @param dateTime StartTimeForNextTransaction
	 * @return dateTime
	 */
	public function setStartTimeForNextTransaction($_StartTimeForNextTransaction)
	{
		return ($this->StartTimeForNextTransaction = $_StartTimeForNextTransaction);
	}
	/**
	 * Get StartTimeForNextTransaction
	 * @return dateTime
	 */
	public function getStartTimeForNextTransaction()
	{
		return $this->StartTimeForNextTransaction;
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