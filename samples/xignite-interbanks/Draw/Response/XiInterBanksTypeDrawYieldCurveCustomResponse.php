<?php
/**
 * Class file for XiInterBanksTypeDrawYieldCurveCustomResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeDrawYieldCurveCustomResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeDrawYieldCurveCustomResponse extends XiInterBanksWsdlClass
{
	/**
	 * The DrawYieldCurveCustomResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeYieldCurveChart
	 */
	public $DrawYieldCurveCustomResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeYieldCurveChart DrawYieldCurveCustomResult
	 * @return XiInterBanksTypeDrawYieldCurveCustomResponse
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
	 * @return XiInterBanksTypeYieldCurveChart
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