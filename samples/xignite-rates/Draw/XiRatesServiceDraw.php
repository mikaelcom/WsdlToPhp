<?php
/**
 * Class file for XiRatesServiceDraw
 * @date 08/07/2012
 */
/**
 * Class XiRatesServiceDraw
 * @date 08/07/2012
 */
class XiRatesServiceDraw extends XiRatesWsdlClass
{
	/**
	 * Method to call DrawRateChartCustom
	 * Meta informations :
	 * 	- documentation : Draw a custom rate chart for a date range.
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeDrawRateChartCustom::getRateType()
	 * @uses XiRatesTypeDrawRateChartCustom::getPeriodType()
	 * @uses XiRatesTypeDrawRateChartCustom::getStartDate()
	 * @uses XiRatesTypeDrawRateChartCustom::getEndDate()
	 * @uses XiRatesTypeDrawRateChartCustom::getStyle()
	 * @uses XiRatesTypeDrawRateChartCustom::getWidth()
	 * @uses XiRatesTypeDrawRateChartCustom::getHeight()
	 * @uses XiRatesTypeDrawRateChartCustom::getDesign()
	 * @param XiRatesTypeDrawRateChartCustom DrawRateChartCustom
	 * @return XiRatesTypeDrawRateChartCustomResponse
	 */
	public function DrawRateChartCustom(XiRatesTypeDrawRateChartCustom $_XiRatesTypeDrawRateChartCustom)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DrawRateChartCustom(array('RateType'=>$_XiRatesTypeDrawRateChartCustom->getRateType(),'PeriodType'=>$_XiRatesTypeDrawRateChartCustom->getPeriodType(),'StartDate'=>$_XiRatesTypeDrawRateChartCustom->getStartDate(),'EndDate'=>$_XiRatesTypeDrawRateChartCustom->getEndDate(),'Style'=>$_XiRatesTypeDrawRateChartCustom->getStyle(),'Width'=>$_XiRatesTypeDrawRateChartCustom->getWidth(),'Height'=>$_XiRatesTypeDrawRateChartCustom->getHeight(),'Design'=>$_XiRatesTypeDrawRateChartCustom->getDesign())));
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
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeDrawRateChart::getRateType()
	 * @uses XiRatesTypeDrawRateChart::getPeriodType()
	 * @uses XiRatesTypeDrawRateChart::getStartDate()
	 * @uses XiRatesTypeDrawRateChart::getEndDate()
	 * @uses XiRatesTypeDrawRateChart::getStyle()
	 * @uses XiRatesTypeDrawRateChart::getWidth()
	 * @uses XiRatesTypeDrawRateChart::getHeight()
	 * @param XiRatesTypeDrawRateChart DrawRateChart
	 * @return XiRatesTypeDrawRateChartResponse
	 */
	public function DrawRateChart(XiRatesTypeDrawRateChart $_XiRatesTypeDrawRateChart)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DrawRateChart(array('RateType'=>$_XiRatesTypeDrawRateChart->getRateType(),'PeriodType'=>$_XiRatesTypeDrawRateChart->getPeriodType(),'StartDate'=>$_XiRatesTypeDrawRateChart->getStartDate(),'EndDate'=>$_XiRatesTypeDrawRateChart->getEndDate(),'Style'=>$_XiRatesTypeDrawRateChart->getStyle(),'Width'=>$_XiRatesTypeDrawRateChart->getWidth(),'Height'=>$_XiRatesTypeDrawRateChart->getHeight())));
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
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeDrawRateChartPreset::getRateType()
	 * @uses XiRatesTypeDrawRateChartPreset::getPeriodType()
	 * @uses XiRatesTypeDrawRateChartPreset::getStartDate()
	 * @uses XiRatesTypeDrawRateChartPreset::getEndDate()
	 * @uses XiRatesTypeDrawRateChartPreset::getStyle()
	 * @uses XiRatesTypeDrawRateChartPreset::getWidth()
	 * @uses XiRatesTypeDrawRateChartPreset::getHeight()
	 * @uses XiRatesTypeDrawRateChartPreset::getPreset()
	 * @param XiRatesTypeDrawRateChartPreset DrawRateChartPreset
	 * @return XiRatesTypeDrawRateChartPresetResponse
	 */
	public function DrawRateChartPreset(XiRatesTypeDrawRateChartPreset $_XiRatesTypeDrawRateChartPreset)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DrawRateChartPreset(array('RateType'=>$_XiRatesTypeDrawRateChartPreset->getRateType(),'PeriodType'=>$_XiRatesTypeDrawRateChartPreset->getPeriodType(),'StartDate'=>$_XiRatesTypeDrawRateChartPreset->getStartDate(),'EndDate'=>$_XiRatesTypeDrawRateChartPreset->getEndDate(),'Style'=>$_XiRatesTypeDrawRateChartPreset->getStyle(),'Width'=>$_XiRatesTypeDrawRateChartPreset->getWidth(),'Height'=>$_XiRatesTypeDrawRateChartPreset->getHeight(),'Preset'=>$_XiRatesTypeDrawRateChartPreset->getPreset())));
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
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeDrawYieldCurve::getRateFamilyType()
	 * @uses XiRatesTypeDrawYieldCurve::getOnDate()
	 * @uses XiRatesTypeDrawYieldCurve::getGetLatestRate()
	 * @uses XiRatesTypeDrawYieldCurve::getWidth()
	 * @uses XiRatesTypeDrawYieldCurve::getHeight()
	 * @param XiRatesTypeDrawYieldCurve DrawYieldCurve
	 * @return XiRatesTypeDrawYieldCurveResponse
	 */
	public function DrawYieldCurve(XiRatesTypeDrawYieldCurve $_XiRatesTypeDrawYieldCurve)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DrawYieldCurve(array('RateFamilyType'=>$_XiRatesTypeDrawYieldCurve->getRateFamilyType(),'OnDate'=>$_XiRatesTypeDrawYieldCurve->getOnDate(),'GetLatestRate'=>$_XiRatesTypeDrawYieldCurve->getGetLatestRate(),'Width'=>$_XiRatesTypeDrawYieldCurve->getWidth(),'Height'=>$_XiRatesTypeDrawYieldCurve->getHeight())));
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
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeDrawYieldCurvePreset::getRateFamilyType()
	 * @uses XiRatesTypeDrawYieldCurvePreset::getOnDate()
	 * @uses XiRatesTypeDrawYieldCurvePreset::getGetLatestRate()
	 * @uses XiRatesTypeDrawYieldCurvePreset::getWidth()
	 * @uses XiRatesTypeDrawYieldCurvePreset::getHeight()
	 * @uses XiRatesTypeDrawYieldCurvePreset::getPreset()
	 * @param XiRatesTypeDrawYieldCurvePreset DrawYieldCurvePreset
	 * @return XiRatesTypeDrawYieldCurvePresetResponse
	 */
	public function DrawYieldCurvePreset(XiRatesTypeDrawYieldCurvePreset $_XiRatesTypeDrawYieldCurvePreset)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DrawYieldCurvePreset(array('RateFamilyType'=>$_XiRatesTypeDrawYieldCurvePreset->getRateFamilyType(),'OnDate'=>$_XiRatesTypeDrawYieldCurvePreset->getOnDate(),'GetLatestRate'=>$_XiRatesTypeDrawYieldCurvePreset->getGetLatestRate(),'Width'=>$_XiRatesTypeDrawYieldCurvePreset->getWidth(),'Height'=>$_XiRatesTypeDrawYieldCurvePreset->getHeight(),'Preset'=>$_XiRatesTypeDrawYieldCurvePreset->getPreset())));
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
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeDrawYieldCurveCustom::getRateFamilyType()
	 * @uses XiRatesTypeDrawYieldCurveCustom::getOnDate()
	 * @uses XiRatesTypeDrawYieldCurveCustom::getGetLatestRate()
	 * @uses XiRatesTypeDrawYieldCurveCustom::getWidth()
	 * @uses XiRatesTypeDrawYieldCurveCustom::getHeight()
	 * @uses XiRatesTypeDrawYieldCurveCustom::getDesign()
	 * @param XiRatesTypeDrawYieldCurveCustom DrawYieldCurveCustom
	 * @return XiRatesTypeDrawYieldCurveCustomResponse
	 */
	public function DrawYieldCurveCustom(XiRatesTypeDrawYieldCurveCustom $_XiRatesTypeDrawYieldCurveCustom)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DrawYieldCurveCustom(array('RateFamilyType'=>$_XiRatesTypeDrawYieldCurveCustom->getRateFamilyType(),'OnDate'=>$_XiRatesTypeDrawYieldCurveCustom->getOnDate(),'GetLatestRate'=>$_XiRatesTypeDrawYieldCurveCustom->getGetLatestRate(),'Width'=>$_XiRatesTypeDrawYieldCurveCustom->getWidth(),'Height'=>$_XiRatesTypeDrawYieldCurveCustom->getHeight(),'Design'=>$_XiRatesTypeDrawYieldCurveCustom->getDesign())));
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
	 * @return XiRatesTypeDrawYieldCurveCustomResponse
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