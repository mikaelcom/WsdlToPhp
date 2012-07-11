<?php
/**
 * Class file for XiInterBanksTypeDrawYieldCurveResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeDrawYieldCurveResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeDrawYieldCurveResponse extends XiInterBanksWsdlClass
{
	/**
	 * The DrawYieldCurveResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeYieldCurveChart
	 */
	public $DrawYieldCurveResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeYieldCurveChart DrawYieldCurveResult
	 * @return XiInterBanksTypeDrawYieldCurveResponse
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
	 * @return XiInterBanksTypeYieldCurveChart
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