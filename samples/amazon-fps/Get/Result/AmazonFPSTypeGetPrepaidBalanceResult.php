<?php
/**
 * Class file for AmazonFPSTypeGetPrepaidBalanceResult
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeGetPrepaidBalanceResult
 * @date 10/07/2012
 */
class AmazonFPSTypeGetPrepaidBalanceResult extends AmazonFPSWsdlClass
{
	/**
	 * The PrepaidBalance
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypePrepaidBalance
	 */
	public $PrepaidBalance;
	/**
	 * Constructor
	 * @param AmazonFPSTypePrepaidBalance PrepaidBalance
	 * @return AmazonFPSTypeGetPrepaidBalanceResult
	 */
	public function __construct($_PrepaidBalance = null)
	{
		parent::__construct(array('PrepaidBalance'=>$_PrepaidBalance));
	}
	/**
	 * Set PrepaidBalance
	 * @param PrepaidBalance PrepaidBalance
	 * @return PrepaidBalance
	 */
	public function setPrepaidBalance($_PrepaidBalance)
	{
		return ($this->PrepaidBalance = $_PrepaidBalance);
	}
	/**
	 * Get PrepaidBalance
	 * @return AmazonFPSTypePrepaidBalance
	 */
	public function getPrepaidBalance()
	{
		return $this->PrepaidBalance;
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