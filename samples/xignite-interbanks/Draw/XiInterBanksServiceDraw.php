<?php
/**
 * Class file for XiInterBanksServiceDraw
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksServiceDraw
 * @date 08/07/2012
 */
class XiInterBanksServiceDraw extends XiInterBanksWsdlClass
{
	/**
	 * Method to call DrawRateChartCustom
	 * Meta informations :
	 * 	- documentation : Draw a custom rate chart for a date range.
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeDrawRateChartCustom::getRateType()
	 * @uses XiInterBanksTypeDrawRateChartCustom::getStartDate()
	 * @uses XiInterBanksTypeDrawRateChartCustom::getEndDate()
	 * @uses XiInterBanksTypeDrawRateChartCustom::getStyle()
	 * @uses XiInterBanksTypeDrawRateChartCustom::getWidth()
	 * @uses XiInterBanksTypeDrawRateChartCustom::getHeight()
	 * @uses XiInterBanksTypeDrawRateChartCustom::getDesign()
	 * @param XiInterBanksTypeDrawRateChartCustom DrawRateChartCustom
	 * @return XiInterBanksTypeDrawRateChartCustomResponse
	 */
	public function DrawRateChartCustom(XiInterBanksTypeDrawRateChartCustom $_XiInterBanksTypeDrawRateChartCustom)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DrawRateChartCustom(array('RateType'=>$_XiInterBanksTypeDrawRateChartCustom->getRateType(),'StartDate'=>$_XiInterBanksTypeDrawRateChartCustom->getStartDate(),'EndDate'=>$_XiInterBanksTypeDrawRateChartCustom->getEndDate(),'Style'=>$_XiInterBanksTypeDrawRateChartCustom->getStyle(),'Width'=>$_XiInterBanksTypeDrawRateChartCustom->getWidth(),'Height'=>$_XiInterBanksTypeDrawRateChartCustom->getHeight(),'Design'=>$_XiInterBanksTypeDrawRateChartCustom->getDesign())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DrawRateChart
	 * Meta informations :
	 * 	- documentation : Draw a standard rate chart for a date range.
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeDrawRateChart::getRateType()
	 * @uses XiInterBanksTypeDrawRateChart::getStartDate()
	 * @uses XiInterBanksTypeDrawRateChart::getEndDate()
	 * @uses XiInterBanksTypeDrawRateChart::getStyle()
	 * @uses XiInterBanksTypeDrawRateChart::getWidth()
	 * @uses XiInterBanksTypeDrawRateChart::getHeight()
	 * @param XiInterBanksTypeDrawRateChart DrawRateChart
	 * @return XiInterBanksTypeDrawRateChartResponse
	 */
	public function DrawRateChart(XiInterBanksTypeDrawRateChart $_XiInterBanksTypeDrawRateChart)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DrawRateChart(array('RateType'=>$_XiInterBanksTypeDrawRateChart->getRateType(),'StartDate'=>$_XiInterBanksTypeDrawRateChart->getStartDate(),'EndDate'=>$_XiInterBanksTypeDrawRateChart->getEndDate(),'Style'=>$_XiInterBanksTypeDrawRateChart->getStyle(),'Width'=>$_XiInterBanksTypeDrawRateChart->getWidth(),'Height'=>$_XiInterBanksTypeDrawRateChart->getHeight())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DrawRateChartPreset
	 * Meta informations :
	 * 	- documentation : Draw a standard rate chart for a date range.
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeDrawRateChartPreset::getRateType()
	 * @uses XiInterBanksTypeDrawRateChartPreset::getStartDate()
	 * @uses XiInterBanksTypeDrawRateChartPreset::getEndDate()
	 * @uses XiInterBanksTypeDrawRateChartPreset::getStyle()
	 * @uses XiInterBanksTypeDrawRateChartPreset::getWidth()
	 * @uses XiInterBanksTypeDrawRateChartPreset::getHeight()
	 * @uses XiInterBanksTypeDrawRateChartPreset::getPreset()
	 * @param XiInterBanksTypeDrawRateChartPreset DrawRateChartPreset
	 * @return XiInterBanksTypeDrawRateChartPresetResponse
	 */
	public function DrawRateChartPreset(XiInterBanksTypeDrawRateChartPreset $_XiInterBanksTypeDrawRateChartPreset)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DrawRateChartPreset(array('RateType'=>$_XiInterBanksTypeDrawRateChartPreset->getRateType(),'StartDate'=>$_XiInterBanksTypeDrawRateChartPreset->getStartDate(),'EndDate'=>$_XiInterBanksTypeDrawRateChartPreset->getEndDate(),'Style'=>$_XiInterBanksTypeDrawRateChartPreset->getStyle(),'Width'=>$_XiInterBanksTypeDrawRateChartPreset->getWidth(),'Height'=>$_XiInterBanksTypeDrawRateChartPreset->getHeight(),'Preset'=>$_XiInterBanksTypeDrawRateChartPreset->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DrawYieldCurve
	 * Meta informations :
	 * 	- documentation : Draw a yield curve for a rate family.
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeDrawYieldCurve::getRateFamilyType()
	 * @uses XiInterBanksTypeDrawYieldCurve::getOnDate()
	 * @uses XiInterBanksTypeDrawYieldCurve::getGetLatestRate()
	 * @uses XiInterBanksTypeDrawYieldCurve::getWidth()
	 * @uses XiInterBanksTypeDrawYieldCurve::getHeight()
	 * @param XiInterBanksTypeDrawYieldCurve DrawYieldCurve
	 * @return XiInterBanksTypeDrawYieldCurveResponse
	 */
	public function DrawYieldCurve(XiInterBanksTypeDrawYieldCurve $_XiInterBanksTypeDrawYieldCurve)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DrawYieldCurve(array('RateFamilyType'=>$_XiInterBanksTypeDrawYieldCurve->getRateFamilyType(),'OnDate'=>$_XiInterBanksTypeDrawYieldCurve->getOnDate(),'GetLatestRate'=>$_XiInterBanksTypeDrawYieldCurve->getGetLatestRate(),'Width'=>$_XiInterBanksTypeDrawYieldCurve->getWidth(),'Height'=>$_XiInterBanksTypeDrawYieldCurve->getHeight())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DrawYieldCurvePreset
	 * Meta informations :
	 * 	- documentation : Draw a yield curve for a rate family.
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeDrawYieldCurvePreset::getRateFamilyType()
	 * @uses XiInterBanksTypeDrawYieldCurvePreset::getOnDate()
	 * @uses XiInterBanksTypeDrawYieldCurvePreset::getGetLatestRate()
	 * @uses XiInterBanksTypeDrawYieldCurvePreset::getWidth()
	 * @uses XiInterBanksTypeDrawYieldCurvePreset::getHeight()
	 * @uses XiInterBanksTypeDrawYieldCurvePreset::getPreset()
	 * @param XiInterBanksTypeDrawYieldCurvePreset DrawYieldCurvePreset
	 * @return XiInterBanksTypeDrawYieldCurvePresetResponse
	 */
	public function DrawYieldCurvePreset(XiInterBanksTypeDrawYieldCurvePreset $_XiInterBanksTypeDrawYieldCurvePreset)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DrawYieldCurvePreset(array('RateFamilyType'=>$_XiInterBanksTypeDrawYieldCurvePreset->getRateFamilyType(),'OnDate'=>$_XiInterBanksTypeDrawYieldCurvePreset->getOnDate(),'GetLatestRate'=>$_XiInterBanksTypeDrawYieldCurvePreset->getGetLatestRate(),'Width'=>$_XiInterBanksTypeDrawYieldCurvePreset->getWidth(),'Height'=>$_XiInterBanksTypeDrawYieldCurvePreset->getHeight(),'Preset'=>$_XiInterBanksTypeDrawYieldCurvePreset->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DrawYieldCurveCustom
	 * Meta informations :
	 * 	- documentation : Draw a yield curve for a rate family.
	 * @uses XiInterBanksWsdlClass::getSoapClient()
	 * @uses XiInterBanksWsdlClass::setResult()
	 * @uses XiInterBanksWsdlClass::getResult()
	 * @uses XiInterBanksWsdlClass::saveLastError()
	 * @uses XiInterBanksTypeDrawYieldCurveCustom::getRateFamilyType()
	 * @uses XiInterBanksTypeDrawYieldCurveCustom::getOnDate()
	 * @uses XiInterBanksTypeDrawYieldCurveCustom::getGetLatestRate()
	 * @uses XiInterBanksTypeDrawYieldCurveCustom::getWidth()
	 * @uses XiInterBanksTypeDrawYieldCurveCustom::getHeight()
	 * @uses XiInterBanksTypeDrawYieldCurveCustom::getDesign()
	 * @param XiInterBanksTypeDrawYieldCurveCustom DrawYieldCurveCustom
	 * @return XiInterBanksTypeDrawYieldCurveCustomResponse
	 */
	public function DrawYieldCurveCustom(XiInterBanksTypeDrawYieldCurveCustom $_XiInterBanksTypeDrawYieldCurveCustom)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DrawYieldCurveCustom(array('RateFamilyType'=>$_XiInterBanksTypeDrawYieldCurveCustom->getRateFamilyType(),'OnDate'=>$_XiInterBanksTypeDrawYieldCurveCustom->getOnDate(),'GetLatestRate'=>$_XiInterBanksTypeDrawYieldCurveCustom->getGetLatestRate(),'Width'=>$_XiInterBanksTypeDrawYieldCurveCustom->getWidth(),'Height'=>$_XiInterBanksTypeDrawYieldCurveCustom->getHeight(),'Design'=>$_XiInterBanksTypeDrawYieldCurveCustom->getDesign())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method returning the result content
	 *
	 * @return XiInterBanksTypeDrawYieldCurveCustomResponse
	 */
	public function getResult()
	{
		return parent::getResult();
	}
	/**
	 * Method returning the class name
	 *
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>