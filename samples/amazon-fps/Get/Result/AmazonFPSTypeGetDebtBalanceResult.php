<?php
/**
 * Class file for AmazonFPSTypeGetDebtBalanceResult
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeGetDebtBalanceResult
 * @date 10/07/2012
 */
class AmazonFPSTypeGetDebtBalanceResult extends AmazonFPSWsdlClass
{
	/**
	 * The DebtBalance
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypeDebtBalance
	 */
	public $DebtBalance;
	/**
	 * Constructor
	 * @param AmazonFPSTypeDebtBalance DebtBalance
	 * @return AmazonFPSTypeGetDebtBalanceResult
	 */
	public function __construct($_DebtBalance = null)
	{
		parent::__construct(array('DebtBalance'=>$_DebtBalance));
	}
	/**
	 * Set DebtBalance
	 * @param DebtBalance DebtBalance
	 * @return DebtBalance
	 */
	public function setDebtBalance($_DebtBalance)
	{
		return ($this->DebtBalance = $_DebtBalance);
	}
	/**
	 * Get DebtBalance
	 * @return AmazonFPSTypeDebtBalance
	 */
	public function getDebtBalance()
	{
		return $this->DebtBalance;
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