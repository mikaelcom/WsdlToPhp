<?php
/**
 * Class file for AmazonFPSTypeOutstandingPrepaidLiability
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeOutstandingPrepaidLiability
 * @date 10/07/2012
 */
class AmazonFPSTypeOutstandingPrepaidLiability extends AmazonFPSWsdlClass
{
	/**
	 * The OutstandingBalance
	 * @var AmazonFPSTypeAmount
	 */
	public $OutstandingBalance;
	/**
	 * The PendingInBalance
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypeAmount
	 */
	public $PendingInBalance;
	/**
	 * Constructor
	 * @param AmazonFPSTypeAmount OutstandingBalance
	 * @param AmazonFPSTypeAmount PendingInBalance
	 * @return AmazonFPSTypeOutstandingPrepaidLiability
	 */
	public function __construct($_OutstandingBalance = null,$_PendingInBalance = null)
	{
		parent::__construct(array('OutstandingBalance'=>$_OutstandingBalance,'PendingInBalance'=>$_PendingInBalance));
	}
	/**
	 * Set OutstandingBalance
	 * @param Amount OutstandingBalance
	 * @return Amount
	 */
	public function setOutstandingBalance($_OutstandingBalance)
	{
		return ($this->OutstandingBalance = $_OutstandingBalance);
	}
	/**
	 * Get OutstandingBalance
	 * @return AmazonFPSTypeAmount
	 */
	public function getOutstandingBalance()
	{
		return $this->OutstandingBalance;
	}
	/**
	 * Set PendingInBalance
	 * @param Amount PendingInBalance
	 * @return Amount
	 */
	public function setPendingInBalance($_PendingInBalance)
	{
		return ($this->PendingInBalance = $_PendingInBalance);
	}
	/**
	 * Get PendingInBalance
	 * @return AmazonFPSTypeAmount
	 */
	public function getPendingInBalance()
	{
		return $this->PendingInBalance;
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