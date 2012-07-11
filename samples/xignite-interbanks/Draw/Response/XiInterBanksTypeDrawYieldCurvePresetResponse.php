<?php
/**
 * Class file for XiInterBanksTypeDrawYieldCurvePresetResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeDrawYieldCurvePresetResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeDrawYieldCurvePresetResponse extends XiInterBanksWsdlClass
{
	/**
	 * The DrawYieldCurvePresetResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeYieldCurveChart
	 */
	public $DrawYieldCurvePresetResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeYieldCurveChart DrawYieldCurvePresetResult
	 * @return XiInterBanksTypeDrawYieldCurvePresetResponse
	 */
	public function __construct($_DrawYieldCurvePresetResult = null)
	{
		parent::__construct(array('DrawYieldCurvePresetResult'=>$_DrawYieldCurvePresetResult));
	}
	/**
	 * Set DrawYieldCurvePresetResult
	 * @param YieldCurveChart DrawYieldCurvePresetResult
	 * @return YieldCurveChart
	 */
	public function setDrawYieldCurvePresetResult($_DrawYieldCurvePresetResult)
	{
		return ($this->DrawYieldCurvePresetResult = $_DrawYieldCurvePresetResult);
	}
	/**
	 * Get DrawYieldCurvePresetResult
	 * @return XiInterBanksTypeYieldCurveChart
	 */
	public function getDrawYieldCurvePresetResult()
	{
		return $this->DrawYieldCurvePresetResult;
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