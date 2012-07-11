<?php
/**
 * Class file for AmazonFPSTypeGetTransactionsForSubscriptionResult
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeGetTransactionsForSubscriptionResult
 * @date 10/07/2012
 */
class AmazonFPSTypeGetTransactionsForSubscriptionResult extends AmazonFPSWsdlClass
{
	/**
	 * The SubscriptionTransaction
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonFPSTypeSubscriptionTransaction
	 */
	public $SubscriptionTransaction;
	/**
	 * Constructor
	 * @param AmazonFPSTypeSubscriptionTransaction SubscriptionTransaction
	 * @return AmazonFPSTypeGetTransactionsForSubscriptionResult
	 */
	public function __construct($_SubscriptionTransaction = null)
	{
		parent::__construct(array('SubscriptionTransaction'=>$_SubscriptionTransaction));
	}
	/**
	 * Set SubscriptionTransaction
	 * @param SubscriptionTransaction SubscriptionTransaction
	 * @return SubscriptionTransaction
	 */
	public function setSubscriptionTransaction($_SubscriptionTransaction)
	{
		return ($this->SubscriptionTransaction = $_SubscriptionTransaction);
	}
	/**
	 * Get SubscriptionTransaction
	 * @return AmazonFPSTypeSubscriptionTransaction
	 */
	public function getSubscriptionTransaction()
	{
		return $this->SubscriptionTransaction;
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