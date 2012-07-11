<?php
/**
 * Class file for XiBondsRealTimeTypeGetBondCalculationResponse
 * @date 08/07/2012
 */
/**
 * Class XiBondsRealTimeTypeGetBondCalculationResponse
 * @date 08/07/2012
 */
class XiBondsRealTimeTypeGetBondCalculationResponse extends XiBondsRealTimeWsdlClass
{
	/**
	 * The GetBondCalculationResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsRealTimeTypeBondCalculation
	 */
	public $GetBondCalculationResult;
	/**
	 * Constructor
	 * @param XiBondsRealTimeTypeBondCalculation GetBondCalculationResult
	 * @return XiBondsRealTimeTypeGetBondCalculationResponse
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
	 * @return XiBondsRealTimeTypeBondCalculation
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