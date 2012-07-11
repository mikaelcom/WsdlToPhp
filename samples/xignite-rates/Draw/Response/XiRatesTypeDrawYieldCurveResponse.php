<?php
/**
 * Class file for XiRatesTypeDrawYieldCurveResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeDrawYieldCurveResponse
 * @date 08/07/2012
 */
class XiRatesTypeDrawYieldCurveResponse extends XiRatesWsdlClass
{
	/**
	 * The DrawYieldCurveResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeYieldCurveChart
	 */
	public $DrawYieldCurveResult;
	/**
	 * Constructor
	 * @param XiRatesTypeYieldCurveChart DrawYieldCurveResult
	 * @return XiRatesTypeDrawYieldCurveResponse
	 */
	public function __construct($_DrawYieldCurveResult = null)
	{
		parent::__construct(array('DrawYieldCurveResult'=>$_DrawYieldCurveResult));
	}
	/**
	 * Set DrawYieldCurveResult
	 * @param YieldCurveChart DrawYieldCurveResult
	 * @return YieldCurveChart
	 */
	public function setDrawYieldCurveResult($_DrawYieldCurveResult)
	{
		return ($this->DrawYieldCurveResult = $_DrawYieldCurveResult);
	}
	/**
	 * Get DrawYieldCurveResult
	 * @return XiRatesTypeYieldCurveChart
	 */
	public function getDrawYieldCurveResult()
	{
		return $this->DrawYieldCurveResult;
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