<?php
/**
 * Class file for AmazonFPSTypePrepaidBalance
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypePrepaidBalance
 * @date 10/07/2012
 */
class AmazonFPSTypePrepaidBalance extends AmazonFPSWsdlClass
{
	/**
	 * The AvailableBalance
	 * @var AmazonFPSTypeAmount
	 */
	public $AvailableBalance;
	/**
	 * The PendingInBalance
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypeAmount
	 */
	public $PendingInBalance;
	/**
	 * Constructor
	 * @param AmazonFPSTypeAmount AvailableBalance
	 * @param AmazonFPSTypeAmount PendingInBalance
	 * @return AmazonFPSTypePrepaidBalance
	 */
	public function __construct($_AvailableBalance = null,$_PendingInBalance = null)
	{
		parent::__construct(array('AvailableBalance'=>$_AvailableBalance,'PendingInBalance'=>$_PendingInBalance));
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