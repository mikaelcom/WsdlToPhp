<?php
/**
 * Class file for AmazonFPSTypeAvailableBalances
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeAvailableBalances
 * @date 10/07/2012
 */
class AmazonFPSTypeAvailableBalances extends AmazonFPSWsdlClass
{
	/**
	 * The DisburseBalance
	 * @var AmazonFPSTypeAmount
	 */
	public $DisburseBalance;
	/**
	 * The RefundBalance
	 * @var AmazonFPSTypeAmount
	 */
	public $RefundBalance;
	/**
	 * Constructor
	 * @param AmazonFPSTypeAmount DisburseBalance
	 * @param AmazonFPSTypeAmount RefundBalance
	 * @return AmazonFPSTypeAvailableBalances
	 */
	public function __construct($_DisburseBalance = null,$_RefundBalance = null)
	{
		parent::__construct(array('DisburseBalance'=>$_DisburseBalance,'RefundBalance'=>$_RefundBalance));
	}
	/**
	 * Set DisburseBalance
	 * @param Amount DisburseBalance
	 * @return Amount
	 */
	public function setDisburseBalance($_DisburseBalance)
	{
		return ($this->DisburseBalance = $_DisburseBalance);
	}
	/**
	 * Get DisburseBalance
	 * @return AmazonFPSTypeAmount
	 */
	public function getDisburseBalance()
	{
		return $this->DisburseBalance;
	}
	/**
	 * Set RefundBalance
	 * @param Amount RefundBalance
	 * @return Amount
	 */
	public function setRefundBalance($_RefundBalance)
	{
		return ($this->RefundBalance = $_RefundBalance);
	}
	/**
	 * Get RefundBalance
	 * @return AmazonFPSTypeAmount
	 */
	public function getRefundBalance()
	{
		return $this->RefundBalance;
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