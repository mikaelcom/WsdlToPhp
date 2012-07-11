<?php
/**
 * Class file for XiRatesTypeDrawYieldCurveCustomResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeDrawYieldCurveCustomResponse
 * @date 08/07/2012
 */
class XiRatesTypeDrawYieldCurveCustomResponse extends XiRatesWsdlClass
{
	/**
	 * The DrawYieldCurveCustomResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeYieldCurveChart
	 */
	public $DrawYieldCurveCustomResult;
	/**
	 * Constructor
	 * @param XiRatesTypeYieldCurveChart DrawYieldCurveCustomResult
	 * @return XiRatesTypeDrawYieldCurveCustomResponse
	 */
	public function __construct($_DrawYieldCurveCustomResult = null)
	{
		parent::__construct(array('DrawYieldCurveCustomResult'=>$_DrawYieldCurveCustomResult));
	}
	/**
	 * Set DrawYieldCurveCustomResult
	 * @param YieldCurveChart DrawYieldCurveCustomResult
	 * @return YieldCurveChart
	 */
	public function setDrawYieldCurveCustomResult($_DrawYieldCurveCustomResult)
	{
		return ($this->DrawYieldCurveCustomResult = $_DrawYieldCurveCustomResult);
	}
	/**
	 * Get DrawYieldCurveCustomResult
	 * @return XiRatesTypeYieldCurveChart
	 */
	public function getDrawYieldCurveCustomResult()
	{
		return $this->DrawYieldCurveCustomResult;
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