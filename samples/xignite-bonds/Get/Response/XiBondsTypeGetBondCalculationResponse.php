<?php
/**
 * Class file for XiBondsTypeGetBondCalculationResponse
 * @date 08/07/2012
 */
/**
 * Class XiBondsTypeGetBondCalculationResponse
 * @date 08/07/2012
 */
class XiBondsTypeGetBondCalculationResponse extends XiBondsWsdlClass
{
	/**
	 * The GetBondCalculationResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsTypeBondCalculation
	 */
	public $GetBondCalculationResult;
	/**
	 * Constructor
	 * @param XiBondsTypeBondCalculation GetBondCalculationResult
	 * @return XiBondsTypeGetBondCalculationResponse
	 */
	public function __construct($_GetBondCalculationResult = null)
	{
		parent::__construct(array('GetBondCalculationResult'=>$_GetBondCalculationResult));
	}
	/**
	 * Set GetBondCalculationResult
	 * @param BondCalculation GetBondCalculationResult
	 * @return BondCalculation
	 */
	public function setGetBondCalculationResult($_GetBondCalculationResult)
	{
		return ($this->GetBondCalculationResult = $_GetBondCalculationResult);
	}
	/**
	 * Get GetBondCalculationResult
	 * @return XiBondsTypeBondCalculation
	 */
	public function getGetBondCalculationResult()
	{
		return $this->GetBondCalculationResult;
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