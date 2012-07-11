<?php
/**
 * Class file for AmazonFPSTypeRelatedTransaction
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeRelatedTransaction
 * @date 10/07/2012
 */
class AmazonFPSTypeRelatedTransaction extends AmazonFPSWsdlClass
{
	/**
	 * The TransactionId
	 * @var string
	 */
	public $TransactionId;
	/**
	 * The RelationType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypeRelationType
	 */
	public $RelationType;
	/**
	 * Constructor
	 * @param string TransactionId
	 * @param AmazonFPSTypeRelationType RelationType
	 * @return AmazonFPSTypeRelatedTransaction
	 */
	public function __construct($_TransactionId = null,$_RelationType = null)
	{
		parent::__construct(array('TransactionId'=>$_TransactionId,'RelationType'=>$_RelationType));
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
	 * Set RelationType
	 * @param RelationType RelationType
	 * @return RelationType
	 */
	public function setRelationType($_RelationType)
	{
		return ($this->RelationType = AmazonFPSTypeRelationType::valueIsValid($_RelationType)?$_RelationType:null);
	}
	/**
	 * Get RelationType
	 * @return AmazonFPSTypeRelationType
	 */
	public function getRelationType()
	{
		return $this->RelationType;
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