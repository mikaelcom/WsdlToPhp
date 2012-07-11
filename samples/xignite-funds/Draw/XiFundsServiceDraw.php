<?php
/**
 * Class file for XiFundsServiceDraw
 * @date 08/07/2012
 */
/**
 * Class XiFundsServiceDraw
 * @date 08/07/2012
 */
class XiFundsServiceDraw extends XiFundsWsdlClass
{
	/**
	 * Method to call DrawFundChartCustom
	 * Meta informations :
	 * 	- documentation : Draw a custom historical fund chart for a date range.
	 * @uses XiFundsWsdlClass::getSoapClient()
	 * @uses XiFundsWsdlClass::setResult()
	 * @uses XiFundsWsdlClass::getResult()
	 * @uses XiFundsWsdlClass::saveLastError()
	 * @uses XiFundsTypeDrawFundChartCustom::getIdentifier()
	 * @uses XiFundsTypeDrawFundChartCustom::getIdentifierType()
	 * @uses XiFundsTypeDrawFundChartCustom::getAdditionalSymbols()
	 * @uses XiFundsTypeDrawFundChartCustom::getStartDate()
	 * @uses XiFundsTypeDrawFundChartCustom::getEndDate()
	 * @uses XiFundsTypeDrawFundChartCustom::getStyle()
	 * @uses XiFundsTypeDrawFundChartCustom::getWidth()
	 * @uses XiFundsTypeDrawFundChartCustom::getHeight()
	 * @uses XiFundsTypeDrawFundChartCustom::getDesign()
	 * @param XiFundsTypeDrawFundChartCustom DrawFundChartCustom
	 * @return XiFundsTypeDrawFundChartCustomResponse
	 */
	public function DrawFundChartCustom(XiFundsTypeDrawFundChartCustom $_XiFundsTypeDrawFundChartCustom)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DrawFundChartCustom(array('Identifier'=>$_XiFundsTypeDrawFundChartCustom->getIdentifier(),'IdentifierType'=>$_XiFundsTypeDrawFundChartCustom->getIdentifierType(),'AdditionalSymbols'=>$_XiFundsTypeDrawFundChartCustom->getAdditionalSymbols(),'StartDate'=>$_XiFundsTypeDrawFundChartCustom->getStartDate(),'EndDate'=>$_XiFundsTypeDrawFundChartCustom->getEndDate(),'Style'=>$_XiFundsTypeDrawFundChartCustom->getStyle(),'Width'=>$_XiFundsTypeDrawFundChartCustom->getWidth(),'Height'=>$_XiFundsTypeDrawFundChartCustom->getHeight(),'Design'=>$_XiFundsTypeDrawFundChartCustom->getDesign())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DrawFundChart
	 * Meta informations :
	 * 	- documentation : Draw a standard historical fund chart for a date range.
	 * @uses XiFundsWsdlClass::getSoapClient()
	 * @uses XiFundsWsdlClass::setResult()
	 * @uses XiFundsWsdlClass::getResult()
	 * @uses XiFundsWsdlClass::saveLastError()
	 * @uses XiFundsTypeDrawFundChart::getIdentifier()
	 * @uses XiFundsTypeDrawFundChart::getIdentifierType()
	 * @uses XiFundsTypeDrawFundChart::getAdditionalSymbols()
	 * @uses XiFundsTypeDrawFundChart::getStartDate()
	 * @uses XiFundsTypeDrawFundChart::getEndDate()
	 * @uses XiFundsTypeDrawFundChart::getStyle()
	 * @uses XiFundsTypeDrawFundChart::getWidth()
	 * @uses XiFundsTypeDrawFundChart::getHeight()
	 * @param XiFundsTypeDrawFundChart DrawFundChart
	 * @return XiFundsTypeDrawFundChartResponse
	 */
	public function DrawFundChart(XiFundsTypeDrawFundChart $_XiFundsTypeDrawFundChart)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DrawFundChart(array('Identifier'=>$_XiFundsTypeDrawFundChart->getIdentifier(),'IdentifierType'=>$_XiFundsTypeDrawFundChart->getIdentifierType(),'AdditionalSymbols'=>$_XiFundsTypeDrawFundChart->getAdditionalSymbols(),'StartDate'=>$_XiFundsTypeDrawFundChart->getStartDate(),'EndDate'=>$_XiFundsTypeDrawFundChart->getEndDate(),'Style'=>$_XiFundsTypeDrawFundChart->getStyle(),'Width'=>$_XiFundsTypeDrawFundChart->getWidth(),'Height'=>$_XiFundsTypeDrawFundChart->getHeight())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DrawFundChartPreset
	 * Meta informations :
	 * 	- documentation : Draw a preset historical fund chart for a date range.
	 * @uses XiFundsWsdlClass::getSoapClient()
	 * @uses XiFundsWsdlClass::setResult()
	 * @uses XiFundsWsdlClass::getResult()
	 * @uses XiFundsWsdlClass::saveLastError()
	 * @uses XiFundsTypeDrawFundChartPreset::getIdentifier()
	 * @uses XiFundsTypeDrawFundChartPreset::getIdentifierType()
	 * @uses XiFundsTypeDrawFundChartPreset::getAdditionalSymbols()
	 * @uses XiFundsTypeDrawFundChartPreset::getStartDate()
	 * @uses XiFundsTypeDrawFundChartPreset::getEndDate()
	 * @uses XiFundsTypeDrawFundChartPreset::getStyle()
	 * @uses XiFundsTypeDrawFundChartPreset::getWidth()
	 * @uses XiFundsTypeDrawFundChartPreset::getHeight()
	 * @uses XiFundsTypeDrawFundChartPreset::getPreset()
	 * @param XiFundsTypeDrawFundChartPreset DrawFundChartPreset
	 * @return XiFundsTypeDrawFundChartPresetResponse
	 */
	public function DrawFundChartPreset(XiFundsTypeDrawFundChartPreset $_XiFundsTypeDrawFundChartPreset)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DrawFundChartPreset(array('Identifier'=>$_XiFundsTypeDrawFundChartPreset->getIdentifier(),'IdentifierType'=>$_XiFundsTypeDrawFundChartPreset->getIdentifierType(),'AdditionalSymbols'=>$_XiFundsTypeDrawFundChartPreset->getAdditionalSymbols(),'StartDate'=>$_XiFundsTypeDrawFundChartPreset->getStartDate(),'EndDate'=>$_XiFundsTypeDrawFundChartPreset->getEndDate(),'Style'=>$_XiFundsTypeDrawFundChartPreset->getStyle(),'Width'=>$_XiFundsTypeDrawFundChartPreset->getWidth(),'Height'=>$_XiFundsTypeDrawFundChartPreset->getHeight(),'Preset'=>$_XiFundsTypeDrawFundChartPreset->getPreset())));
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
	 * @return XiFundsTypeDrawFundChartPresetResponse
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