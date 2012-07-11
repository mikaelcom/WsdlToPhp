<?php
/**
 * Class file for AmazonFPSTypeOutstandingDebtBalance
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeOutstandingDebtBalance
 * @date 10/07/2012
 */
class AmazonFPSTypeOutstandingDebtBalance extends AmazonFPSWsdlClass
{
	/**
	 * The OutstandingBalance
	 * @var AmazonFPSTypeAmount
	 */
	public $OutstandingBalance;
	/**
	 * The PendingOutBalance
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypeAmount
	 */
	public $PendingOutBalance;
	/**
	 * Constructor
	 * @param AmazonFPSTypeAmount OutstandingBalance
	 * @param AmazonFPSTypeAmount PendingOutBalance
	 * @return AmazonFPSTypeOutstandingDebtBalance
	 */
	public function __construct($_OutstandingBalance = null,$_PendingOutBalance = null)
	{
		parent::__construct(array('OutstandingBalance'=>$_OutstandingBalance,'PendingOutBalance'=>$_PendingOutBalance));
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
	 * Set PendingOutBalance
	 * @param Amount PendingOutBalance
	 * @return Amount
	 */
	public function setPendingOutBalance($_PendingOutBalance)
	{
		return ($this->PendingOutBalance = $_PendingOutBalance);
	}
	/**
	 * Get PendingOutBalance
	 * @return AmazonFPSTypeAmount
	 */
	public function getPendingOutBalance()
	{
		return $this->PendingOutBalance;
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