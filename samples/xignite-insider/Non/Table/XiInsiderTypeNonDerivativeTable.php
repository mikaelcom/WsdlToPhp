<?php
/**
 * Class file for XiInsiderTypeNonDerivativeTable
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeNonDerivativeTable
 * @date 08/07/2012
 */
class XiInsiderTypeNonDerivativeTable extends XiInsiderWsdlClass
{
	/**
	 * The nonDerivativeTransactions
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeArrayOfNonDerivativeTransaction
	 */
	public $nonDerivativeTransactions;
	/**
	 * The nonDerivativeHoldings
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeArrayOfNonDerivativeHolding
	 */
	public $nonDerivativeHoldings;
	/**
	 * Constructor
	 * @param XiInsiderTypeArrayOfNonDerivativeTransaction nonDerivativeTransactions
	 * @param XiInsiderTypeArrayOfNonDerivativeHolding nonDerivativeHoldings
	 * @return XiInsiderTypeNonDerivativeTable
	 */
	public function __construct($_nonDerivativeTransactions = null,$_nonDerivativeHoldings = null)
	{
		parent::__construct(array('nonDerivativeTransactions'=>new XiInsiderTypeArrayOfNonDerivativeTransaction($_nonDerivativeTransactions),'nonDerivativeHoldings'=>new XiInsiderTypeArrayOfNonDerivativeHolding($_nonDerivativeHoldings)));
	}
	/**
	 * Set nonDerivativeTransactions
	 * @param ArrayOfNonDerivativeTransaction nonDerivativeTransactions
	 * @return ArrayOfNonDerivativeTransaction
	 */
	public function setNonDerivativeTransactions($_nonDerivativeTransactions)
	{
		return ($this->nonDerivativeTransactions = $_nonDerivativeTransactions);
	}
	/**
	 * Get nonDerivativeTransactions
	 * @return XiInsiderTypeArrayOfNonDerivativeTransaction
	 */
	public function getNonDerivativeTransactions()
	{
		return $this->nonDerivativeTransactions;
	}
	/**
	 * Set nonDerivativeHoldings
	 * @param ArrayOfNonDerivativeHolding nonDerivativeHoldings
	 * @return ArrayOfNonDerivativeHolding
	 */
	public function setNonDerivativeHoldings($_nonDerivativeHoldings)
	{
		return ($this->nonDerivativeHoldings = $_nonDerivativeHoldings);
	}
	/**
	 * Get nonDerivativeHoldings
	 * @return XiInsiderTypeArrayOfNonDerivativeHolding
	 */
	public function getNonDerivativeHoldings()
	{
		return $this->nonDerivativeHoldings;
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