<?php
/**
 * Class file for XiInsiderTypeDerivativeTable
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeDerivativeTable
 * @date 08/07/2012
 */
class XiInsiderTypeDerivativeTable extends XiInsiderWsdlClass
{
	/**
	 * The derivativeTransactions
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeArrayOfDerivativeTransaction
	 */
	public $derivativeTransactions;
	/**
	 * The derivativeHoldings
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeArrayOfDerivativeHolding
	 */
	public $derivativeHoldings;
	/**
	 * Constructor
	 * @param XiInsiderTypeArrayOfDerivativeTransaction derivativeTransactions
	 * @param XiInsiderTypeArrayOfDerivativeHolding derivativeHoldings
	 * @return XiInsiderTypeDerivativeTable
	 */
	public function __construct($_derivativeTransactions = null,$_derivativeHoldings = null)
	{
		parent::__construct(array('derivativeTransactions'=>new XiInsiderTypeArrayOfDerivativeTransaction($_derivativeTransactions),'derivativeHoldings'=>new XiInsiderTypeArrayOfDerivativeHolding($_derivativeHoldings)));
	}
	/**
	 * Set derivativeTransactions
	 * @param ArrayOfDerivativeTransaction derivativeTransactions
	 * @return ArrayOfDerivativeTransaction
	 */
	public function setDerivativeTransactions($_derivativeTransactions)
	{
		return ($this->derivativeTransactions = $_derivativeTransactions);
	}
	/**
	 * Get derivativeTransactions
	 * @return XiInsiderTypeArrayOfDerivativeTransaction
	 */
	public function getDerivativeTransactions()
	{
		return $this->derivativeTransactions;
	}
	/**
	 * Set derivativeHoldings
	 * @param ArrayOfDerivativeHolding derivativeHoldings
	 * @return ArrayOfDerivativeHolding
	 */
	public function setDerivativeHoldings($_derivativeHoldings)
	{
		return ($this->derivativeHoldings = $_derivativeHoldings);
	}
	/**
	 * Get derivativeHoldings
	 * @return XiInsiderTypeArrayOfDerivativeHolding
	 */
	public function getDerivativeHoldings()
	{
		return $this->derivativeHoldings;
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