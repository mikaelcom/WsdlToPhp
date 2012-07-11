<?php
/**
 * Class file for AmazonFPSTypeDebtBalance
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeDebtBalance
 * @date 10/07/2012
 */
class AmazonFPSTypeDebtBalance extends AmazonFPSWsdlClass
{
	/**
	 * The AvailableBalance
	 * @var AmazonFPSTypeAmount
	 */
	public $AvailableBalance;
	/**
	 * The PendingOutBalance
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypeAmount
	 */
	public $PendingOutBalance;
	/**
	 * Constructor
	 * @param AmazonFPSTypeAmount AvailableBalance
	 * @param AmazonFPSTypeAmount PendingOutBalance
	 * @return AmazonFPSTypeDebtBalance
	 */
	public function __construct($_AvailableBalance = null,$_PendingOutBalance = null)
	{
		parent::__construct(array('AvailableBalance'=>$_AvailableBalance,'PendingOutBalance'=>$_PendingOutBalance));
	}
	/**
	 * Set AvailableBalance
	 * @param Amount AvailableBalance
	 * @return Amount
	 */
	public function setAvailableBalance($_AvailableBalance)
	{
		return ($this->AvailableBalance = $_AvailableBalance);
	}
	/**
	 * Get AvailableBalance
	 * @return AmazonFPSTypeAmount
	 */
	public function getAvailableBalance()
	{
		return $this->AvailableBalance;
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