<?php
/**
 * Class file for AmazonFPSTypeGetOutstandingDebtBalanceResult
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeGetOutstandingDebtBalanceResult
 * @date 10/07/2012
 */
class AmazonFPSTypeGetOutstandingDebtBalanceResult extends AmazonFPSWsdlClass
{
	/**
	 * The OutstandingDebt
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypeOutstandingDebtBalance
	 */
	public $OutstandingDebt;
	/**
	 * Constructor
	 * @param AmazonFPSTypeOutstandingDebtBalance OutstandingDebt
	 * @return AmazonFPSTypeGetOutstandingDebtBalanceResult
	 */
	public function __construct($_OutstandingDebt = null)
	{
		parent::__construct(array('OutstandingDebt'=>$_OutstandingDebt));
	}
	/**
	 * Set OutstandingDebt
	 * @param OutstandingDebtBalance OutstandingDebt
	 * @return OutstandingDebtBalance
	 */
	public function setOutstandingDebt($_OutstandingDebt)
	{
		return ($this->OutstandingDebt = $_OutstandingDebt);
	}
	/**
	 * Get OutstandingDebt
	 * @return AmazonFPSTypeOutstandingDebtBalance
	 */
	public function getOutstandingDebt()
	{
		return $this->OutstandingDebt;
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