<?php
/**
 * Class file for AmazonFPSTypeAccountBalance
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeAccountBalance
 * @date 10/07/2012
 */
class AmazonFPSTypeAccountBalance extends AmazonFPSWsdlClass
{
	/**
	 * The TotalBalance
	 * @var AmazonFPSTypeAmount
	 */
	public $TotalBalance;
	/**
	 * The PendingInBalance
	 * @var AmazonFPSTypeAmount
	 */
	public $PendingInBalance;
	/**
	 * The PendingOutBalance
	 * @var AmazonFPSTypeAmount
	 */
	public $PendingOutBalance;
	/**
	 * The AvailableBalances
	 * @var AmazonFPSTypeAvailableBalances
	 */
	public $AvailableBalances;
	/**
	 * Constructor
	 * @param AmazonFPSTypeAmount TotalBalance
	 * @param AmazonFPSTypeAmount PendingInBalance
	 * @param AmazonFPSTypeAmount PendingOutBalance
	 * @param AmazonFPSTypeAvailableBalances AvailableBalances
	 * @return AmazonFPSTypeAccountBalance
	 */
	public function __construct($_TotalBalance = null,$_PendingInBalance = null,$_PendingOutBalance = null,$_AvailableBalances = null)
	{
		parent::__construct(array('TotalBalance'=>$_TotalBalance,'PendingInBalance'=>$_PendingInBalance,'PendingOutBalance'=>$_PendingOutBalance,'AvailableBalances'=>$_AvailableBalances));
	}
	/**
	 * Set TotalBalance
	 * @param Amount TotalBalance
	 * @return Amount
	 */
	public function setTotalBalance($_TotalBalance)
	{
		return ($this->TotalBalance = $_TotalBalance);
	}
	/**
	 * Get TotalBalance
	 * @return AmazonFPSTypeAmount
	 */
	public function getTotalBalance()
	{
		return $this->TotalBalance;
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
	 * Set AvailableBalances
	 * @param AvailableBalances AvailableBalances
	 * @return AvailableBalances
	 */
	public function setAvailableBalances($_AvailableBalances)
	{
		return ($this->AvailableBalances = $_AvailableBalances);
	}
	/**
	 * Get AvailableBalances
	 * @return AmazonFPSTypeAvailableBalances
	 */
	public function getAvailableBalances()
	{
		return $this->AvailableBalances;
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