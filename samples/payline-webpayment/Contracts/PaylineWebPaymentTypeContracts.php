<?php
/**
 * Class file for PaylineWebPaymentTypeContracts
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeContracts
 * Documentation : list of contract
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeContracts extends PaylineWebPaymentWsdlClass
{
	/**
	 * The contract
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * @var PaylineWebPaymentTypeContract
	 */
	public $contract;
	/**
	 * Constructor
	 * @param PaylineWebPaymentTypeContract contract
	 * @return PaylineWebPaymentTypeContracts
	 */
	public function __construct($_contract = null)
	{
		parent::__construct(array('contract'=>$_contract));
	}
	/**
	 * Set contract
	 * @param contract contract
	 * @return contract
	 */
	public function setContract($_contract)
	{
		return ($this->contract = $_contract);
	}
	/**
	 * Get contract
	 * @return PaylineWebPaymentTypecontract
	 */
	public function getContract()
	{
		return $this->contract;
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