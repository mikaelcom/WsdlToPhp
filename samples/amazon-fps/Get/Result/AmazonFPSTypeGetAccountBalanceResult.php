<?php
/**
 * Class file for AmazonFPSTypeGetAccountBalanceResult
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeGetAccountBalanceResult
 * @date 10/07/2012
 */
class AmazonFPSTypeGetAccountBalanceResult extends AmazonFPSWsdlClass
{
	/**
	 * The AccountBalance
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var AmazonFPSTypeAccountBalance
	 */
	public $AccountBalance;
	/**
	 * Constructor
	 * @param AmazonFPSTypeAccountBalance AccountBalance
	 * @return AmazonFPSTypeGetAccountBalanceResult
	 */
	public function __construct($_AccountBalance = null)
	{
		parent::__construct(array('AccountBalance'=>$_AccountBalance));
	}
	/**
	 * Set AccountBalance
	 * @param AccountBalance AccountBalance
	 * @return AccountBalance
	 */
	public function setAccountBalance($_AccountBalance)
	{
		return ($this->AccountBalance = $_AccountBalance);
	}
	/**
	 * Get AccountBalance
	 * @return AmazonFPSTypeAccountBalance
	 */
	public function getAccountBalance()
	{
		return $this->AccountBalance;
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