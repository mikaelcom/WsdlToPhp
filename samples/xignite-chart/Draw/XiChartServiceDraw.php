<?php
/**
 * Class file for XiChartServiceDraw
 * @date 08/07/2012
 */
/**
 * Class XiChartServiceDraw
 * @date 08/07/2012
 */
class XiChartServiceDraw extends XiChartWsdlClass
{
	/**
	 * Method to call DrawCapitalizationChartPresetByDate
	 * Meta informations :
	 * 	- documentation : Draw a preset historical market capitalization chart for a custom date range.
	 * @uses XiChartWsdlClass::getSoapClient()
	 * @uses XiChartWsdlClass::setResult()
	 * @uses XiChartWsdlClass::getResult()
	 * @uses XiChartWsdlClass::saveLastError()
	 * @uses XiChartTypeDrawCapitalizationChartPresetByDate::getIdentifier()
	 * @uses XiChartTypeDrawCapitalizationChartPresetByDate::getIdentifierType()
	 * @uses XiChartTypeDrawCapitalizationChartPresetByDate::getStartDate()
	 * @uses XiChartTypeDrawCapitalizationChartPresetByDate::getEndDate()
	 * @uses XiChartTypeDrawCapitalizationChartPresetByDate::getWidth()
	 * @uses XiChartTypeDrawCapitalizationChartPresetByDate::getHeight()
	 * @uses XiChartTypeDrawCapitalizationChartPresetByDate::getPreset()
	 * @param XiChartTypeDrawCapitalizationChartPresetByDate DrawCapitalizationChartPresetByDate
	 * @return XiChartTypeDrawCapitalizationChartPresetByDateResponse
	 */
	public function DrawCapitalizationChartPresetByDate(XiChartTypeDrawCapitalizationChartPresetByDate $_XiChartTypeDrawCapitalizationChartPresetByDate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DrawCapitalizationChartPresetByDate(array('Identifier'=>$_XiChartTypeDrawCapitalizationChartPresetByDate->getIdentifier(),'IdentifierType'=>$_XiChartTypeDrawCapitalizationChartPresetByDate->getIdentifierType(),'StartDate'=>$_XiChartTypeDrawCapitalizationChartPresetByDate->getStartDate(),'EndDate'=>$_XiChartTypeDrawCapitalizationChartPresetByDate->getEndDate(),'Width'=>$_XiChartTypeDrawCapitalizationChartPresetByDate->getWidth(),'Height'=>$_XiChartTypeDrawCapitalizationChartPresetByDate->getHeight(),'Preset'=>$_XiChartTypeDrawCapitalizationChartPresetByDate->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DrawCapitalizationChartPresetByDateBinary
	 * Meta informations :
	 * 	- documentation : Draw a preset historical market capitalization chart for a custom date range.
	 * @uses XiChartWsdlClass::getSoapClient()
	 * @uses XiChartWsdlClass::setResult()
	 * @uses XiChartWsdlClass::getResult()
	 * @uses XiChartWsdlClass::saveLastError()
	 * @uses XiChartTypeDrawCapitalizationChartPresetByDateBinary::getIdentifier()
	 * @uses XiChartTypeDrawCapitalizationChartPresetByDateBinary::getIdentifierType()
	 * @uses XiChartTypeDrawCapitalizationChartPresetByDateBinary::getStartDate()
	 * @uses XiChartTypeDrawCapitalizationChartPresetByDateBinary::getEndDate()
	 * @uses XiChartTypeDrawCapitalizationChartPresetByDateBinary::getWidth()
	 * @uses XiChartTypeDrawCapitalizationChartPresetByDateBinary::getHeight()
	 * @uses XiChartTypeDrawCapitalizationChartPresetByDateBinary::getPreset()
	 * @param XiChartTypeDrawCapitalizationChartPresetByDateBinary DrawCapitalizationChartPresetByDateBinary
	 * @return XiChartTypeDrawCapitalizationChartPresetByDateBinaryResponse
	 */
	public function DrawCapitalizationChartPresetByDateBinary(XiChartTypeDrawCapitalizationChartPresetByDateBinary $_XiChartTypeDrawCapitalizationChartPresetByDateBinary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DrawCapitalizationChartPresetByDateBinary(array('Identifier'=>$_XiChartTypeDrawCapitalizationChartPresetByDateBinary->getIdentifier(),'IdentifierType'=>$_XiChartTypeDrawCapitalizationChartPresetByDateBinary->getIdentifierType(),'StartDate'=>$_XiChartTypeDrawCapitalizationChartPresetByDateBinary->getStartDate(),'EndDate'=>$_XiChartTypeDrawCapitalizationChartPresetByDateBinary->getEndDate(),'Width'=>$_XiChartTypeDrawCapitalizationChartPresetByDateBinary->getWidth(),'Height'=>$_XiChartTypeDrawCapitalizationChartPresetByDateBinary->getHeight(),'Preset'=>$_XiChartTypeDrawCapitalizationChartPresetByDateBinary->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DrawCapitalizationChartPreset
	 * Meta informations :
	 * 	- documentation : Draw a custom historical market capitalization chart for a custom date range.
	 * @uses XiChartWsdlClass::getSoapClient()
	 * @uses XiChartWsdlClass::setResult()
	 * @uses XiChartWsdlClass::getResult()
	 * @uses XiChartWsdlClass::saveLastError()
	 * @uses XiChartTypeDrawCapitalizationChartPreset::getIdentifier()
	 * @uses XiChartTypeDrawCapitalizationChartPreset::getIdentifierType()
	 * @uses XiChartTypeDrawCapitalizationChartPreset::getPeriodType()
	 * @uses XiChartTypeDrawCapitalizationChartPreset::getWidth()
	 * @uses XiChartTypeDrawCapitalizationChartPreset::getHeight()
	 * @uses XiChartTypeDrawCapitalizationChartPreset::getPreset()
	 * @param XiChartTypeDrawCapitalizationChartPreset DrawCapitalizationChartPreset
	 * @return XiChartTypeDrawCapitalizationChartPresetResponse
	 */
	public function DrawCapitalizationChartPreset(XiChartTypeDrawCapitalizationChartPreset $_XiChartTypeDrawCapitalizationChartPreset)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DrawCapitalizationChartPreset(array('Identifier'=>$_XiChartTypeDrawCapitalizationChartPreset->getIdentifier(),'IdentifierType'=>$_XiChartTypeDrawCapitalizationChartPreset->getIdentifierType(),'PeriodType'=>$_XiChartTypeDrawCapitalizationChartPreset->getPeriodType(),'Width'=>$_XiChartTypeDrawCapitalizationChartPreset->getWidth(),'Height'=>$_XiChartTypeDrawCapitalizationChartPreset->getHeight(),'Preset'=>$_XiChartTypeDrawCapitalizationChartPreset->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DrawCapitalizationChartPresetBinary
	 * Meta informations :
	 * 	- documentation : Draw a custom historical market capitalization chart for a custom date range.
	 * @uses XiChartWsdlClass::getSoapClient()
	 * @uses XiChartWsdlClass::setResult()
	 * @uses XiChartWsdlClass::getResult()
	 * @uses XiChartWsdlClass::saveLastError()
	 * @uses XiChartTypeDrawCapitalizationChartPresetBinary::getIdentifier()
	 * @uses XiChartTypeDrawCapitalizationChartPresetBinary::getIdentifierType()
	 * @uses XiChartTypeDrawCapitalizationChartPresetBinary::getPeriodType()
	 * @uses XiChartTypeDrawCapitalizationChartPresetBinary::getWidth()
	 * @uses XiChartTypeDrawCapitalizationChartPresetBinary::getHeight()
	 * @uses XiChartTypeDrawCapitalizationChartPresetBinary::getPreset()
	 * @param XiChartTypeDrawCapitalizationChartPresetBinary DrawCapitalizationChartPresetBinary
	 * @return XiChartTypeDrawCapitalizationChartPresetBinaryResponse
	 */
	public function DrawCapitalizationChartPresetBinary(XiChartTypeDrawCapitalizationChartPresetBinary $_XiChartTypeDrawCapitalizationChartPresetBinary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DrawCapitalizationChartPresetBinary(array('Identifier'=>$_XiChartTypeDrawCapitalizationChartPresetBinary->getIdentifier(),'IdentifierType'=>$_XiChartTypeDrawCapitalizationChartPresetBinary->getIdentifierType(),'PeriodType'=>$_XiChartTypeDrawCapitalizationChartPresetBinary->getPeriodType(),'Width'=>$_XiChartTypeDrawCapitalizationChartPresetBinary->getWidth(),'Height'=>$_XiChartTypeDrawCapitalizationChartPresetBinary->getHeight(),'Preset'=>$_XiChartTypeDrawCapitalizationChartPresetBinary->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DrawCapitalizationChartCustomByDate
	 * Meta informations :
	 * 	- documentation : Draw a custom historical market capitalization chart for a custom date range.
	 * @uses XiChartWsdlClass::getSoapClient()
	 * @uses XiChartWsdlClass::setResult()
	 * @uses XiChartWsdlClass::getResult()
	 * @uses XiChartWsdlClass::saveLastError()
	 * @uses XiChartTypeDrawCapitalizationChartCustomByDate::getIdentifier()
	 * @uses XiChartTypeDrawCapitalizationChartCustomByDate::getIdentifierType()
	 * @uses XiChartTypeDrawCapitalizationChartCustomByDate::getStartDate()
	 * @uses XiChartTypeDrawCapitalizationChartCustomByDate::getEndDate()
	 * @uses XiChartTypeDrawCapitalizationChartCustomByDate::getWidth()
	 * @uses XiChartTypeDrawCapitalizationChartCustomByDate::getHeight()
	 * @uses XiChartTypeDrawCapitalizationChartCustomByDate::getDesign()
	 * @param XiChartTypeDrawCapitalizationChartCustomByDate DrawCapitalizationChartCustomByDate
	 * @return XiChartTypeDrawCapitalizationChartCustomByDateResponse
	 */
	public function DrawCapitalizationChartCustomByDate(XiChartTypeDrawCapitalizationChartCustomByDate $_XiChartTypeDrawCapitalizationChartCustomByDate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DrawCapitalizationChartCustomByDate(array('Identifier'=>$_XiChartTypeDrawCapitalizationChartCustomByDate->getIdentifier(),'IdentifierType'=>$_XiChartTypeDrawCapitalizationChartCustomByDate->getIdentifierType(),'StartDate'=>$_XiChartTypeDrawCapitalizationChartCustomByDate->getStartDate(),'EndDate'=>$_XiChartTypeDrawCapitalizationChartCustomByDate->getEndDate(),'Width'=>$_XiChartTypeDrawCapitalizationChartCustomByDate->getWidth(),'Height'=>$_XiChartTypeDrawCapitalizationChartCustomByDate->getHeight(),'Design'=>$_XiChartTypeDrawCapitalizationChartCustomByDate->getDesign())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DrawCapitalizationChartCustomByDateBinary
	 * Meta informations :
	 * 	- documentation : Draw a binary custom historical market capitalization chart for a custom date range.
	 * @uses XiChartWsdlClass::getSoapClient()
	 * @uses XiChartWsdlClass::setResult()
	 * @uses XiChartWsdlClass::getResult()
	 * @uses XiChartWsdlClass::saveLastError()
	 * @uses XiChartTypeDrawCapitalizationChartCustomByDateBinary::getIdentifier()
	 * @uses XiChartTypeDrawCapitalizationChartCustomByDateBinary::getIdentifierType()
	 * @uses XiChartTypeDrawCapitalizationChartCustomByDateBinary::getStartDate()
	 * @uses XiChartTypeDrawCapitalizationChartCustomByDateBinary::getEndDate()
	 * @uses XiChartTypeDrawCapitalizationChartCustomByDateBinary::getWidth()
	 * @uses XiChartTypeDrawCapitalizationChartCustomByDateBinary::getHeight()
	 * @uses XiChartTypeDrawCapitalizationChartCustomByDateBinary::getDesign()
	 * @param XiChartTypeDrawCapitalizationChartCustomByDateBinary DrawCapitalizationChartCustomByDateBinary
	 * @return XiChartTypeDrawCapitalizationChartCustomByDateBinaryResponse
	 */
	public function DrawCapitalizationChartCustomByDateBinary(XiChartTypeDrawCapitalizationChartCustomByDateBinary $_XiChartTypeDrawCapitalizationChartCustomByDateBinary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DrawCapitalizationChartCustomByDateBinary(array('Identifier'=>$_XiChartTypeDrawCapitalizationChartCustomByDateBinary->getIdentifier(),'IdentifierType'=>$_XiChartTypeDrawCapitalizationChartCustomByDateBinary->getIdentifierType(),'StartDate'=>$_XiChartTypeDrawCapitalizationChartCustomByDateBinary->getStartDate(),'EndDate'=>$_XiChartTypeDrawCapitalizationChartCustomByDateBinary->getEndDate(),'Width'=>$_XiChartTypeDrawCapitalizationChartCustomByDateBinary->getWidth(),'Height'=>$_XiChartTypeDrawCapitalizationChartCustomByDateBinary->getHeight(),'Design'=>$_XiChartTypeDrawCapitalizationChartCustomByDateBinary->getDesign())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DrawCapitalizationChartByDate
	 * Meta informations :
	 * 	- documentation : Draw a standard historical market capitalization chart for a custom date range.
	 * @uses XiChartWsdlClass::getSoapClient()
	 * @uses XiChartWsdlClass::setResult()
	 * @uses XiChartWsdlClass::getResult()
	 * @uses XiChartWsdlClass::saveLastError()
	 * @uses XiChartTypeDrawCapitalizationChartByDate::getIdentifier()
	 * @uses XiChartTypeDrawCapitalizationChartByDate::getIdentifierType()
	 * @uses XiChartTypeDrawCapitalizationChartByDate::getStartDate()
	 * @uses XiChartTypeDrawCapitalizationChartByDate::getEndDate()
	 * @uses XiChartTypeDrawCapitalizationChartByDate::getWidth()
	 * @uses XiChartTypeDrawCapitalizationChartByDate::getHeight()
	 * @param XiChartTypeDrawCapitalizationChartByDate DrawCapitalizationChartByDate
	 * @return XiChartTypeDrawCapitalizationChartByDateResponse
	 */
	public function DrawCapitalizationChartByDate(XiChartTypeDrawCapitalizationChartByDate $_XiChartTypeDrawCapitalizationChartByDate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DrawCapitalizationChartByDate(array('Identifier'=>$_XiChartTypeDrawCapitalizationChartByDate->getIdentifier(),'IdentifierType'=>$_XiChartTypeDrawCapitalizationChartByDate->getIdentifierType(),'StartDate'=>$_XiChartTypeDrawCapitalizationChartByDate->getStartDate(),'EndDate'=>$_XiChartTypeDrawCapitalizationChartByDate->getEndDate(),'Width'=>$_XiChartTypeDrawCapitalizationChartByDate->getWidth(),'Height'=>$_XiChartTypeDrawCapitalizationChartByDate->getHeight())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DrawCapitalizationChartByDateBinary
	 * Meta informations :
	 * 	- documentation : Draw a standard historical market capitalization chart for a custom date range.
	 * @uses XiChartWsdlClass::getSoapClient()
	 * @uses XiChartWsdlClass::setResult()
	 * @uses XiChartWsdlClass::getResult()
	 * @uses XiChartWsdlClass::saveLastError()
	 * @uses XiChartTypeDrawCapitalizationChartByDateBinary::getIdentifier()
	 * @uses XiChartTypeDrawCapitalizationChartByDateBinary::getIdentifierType()
	 * @uses XiChartTypeDrawCapitalizationChartByDateBinary::getStartDate()
	 * @uses XiChartTypeDrawCapitalizationChartByDateBinary::getEndDate()
	 * @uses XiChartTypeDrawCapitalizationChartByDateBinary::getWidth()
	 * @uses XiChartTypeDrawCapitalizationChartByDateBinary::getHeight()
	 * @param XiChartTypeDrawCapitalizationChartByDateBinary DrawCapitalizationChartByDateBinary
	 * @return XiChartTypeDrawCapitalizationChartByDateBinaryResponse
	 */
	public function DrawCapitalizationChartByDateBinary(XiChartTypeDrawCapitalizationChartByDateBinary $_XiChartTypeDrawCapitalizationChartByDateBinary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DrawCapitalizationChartByDateBinary(array('Identifier'=>$_XiChartTypeDrawCapitalizationChartByDateBinary->getIdentifier(),'IdentifierType'=>$_XiChartTypeDrawCapitalizationChartByDateBinary->getIdentifierType(),'StartDate'=>$_XiChartTypeDrawCapitalizationChartByDateBinary->getStartDate(),'EndDate'=>$_XiChartTypeDrawCapitalizationChartByDateBinary->getEndDate(),'Width'=>$_XiChartTypeDrawCapitalizationChartByDateBinary->getWidth(),'Height'=>$_XiChartTypeDrawCapitalizationChartByDateBinary->getHeight())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DrawCapitalizationChartCustom
	 * Meta informations :
	 * 	- documentation : Draw a custom historical market capitalization chart for a custom date range.
	 * @uses XiChartWsdlClass::getSoapClient()
	 * @uses XiChartWsdlClass::setResult()
	 * @uses XiChartWsdlClass::getResult()
	 * @uses XiChartWsdlClass::saveLastError()
	 * @uses XiChartTypeDrawCapitalizationChartCustom::getIdentifier()
	 * @uses XiChartTypeDrawCapitalizationChartCustom::getIdentifierType()
	 * @uses XiChartTypeDrawCapitalizationChartCustom::getPeriodType()
	 * @uses XiChartTypeDrawCapitalizationChartCustom::getWidth()
	 * @uses XiChartTypeDrawCapitalizationChartCustom::getHeight()
	 * @uses XiChartTypeDrawCapitalizationChartCustom::getDesign()
	 * @param XiChartTypeDrawCapitalizationChartCustom DrawCapitalizationChartCustom
	 * @return XiChartTypeDrawCapitalizationChartCustomResponse
	 */
	public function DrawCapitalizationChartCustom(XiChartTypeDrawCapitalizationChartCustom $_XiChartTypeDrawCapitalizationChartCustom)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DrawCapitalizationChartCustom(array('Identifier'=>$_XiChartTypeDrawCapitalizationChartCustom->getIdentifier(),'IdentifierType'=>$_XiChartTypeDrawCapitalizationChartCustom->getIdentifierType(),'PeriodType'=>$_XiChartTypeDrawCapitalizationChartCustom->getPeriodType(),'Width'=>$_XiChartTypeDrawCapitalizationChartCustom->getWidth(),'Height'=>$_XiChartTypeDrawCapitalizationChartCustom->getHeight(),'Design'=>$_XiChartTypeDrawCapitalizationChartCustom->getDesign())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DrawCapitalizationChartCustomBinary
	 * Meta informations :
	 * 	- documentation : Draw a custom historical market capitalization chart for a custom date range.
	 * @uses XiChartWsdlClass::getSoapClient()
	 * @uses XiChartWsdlClass::setResult()
	 * @uses XiChartWsdlClass::getResult()
	 * @uses XiChartWsdlClass::saveLastError()
	 * @uses XiChartTypeDrawCapitalizationChartCustomBinary::getIdentifier()
	 * @uses XiChartTypeDrawCapitalizationChartCustomBinary::getIdentifierType()
	 * @uses XiChartTypeDrawCapitalizationChartCustomBinary::getPeriodType()
	 * @uses XiChartTypeDrawCapitalizationChartCustomBinary::getWidth()
	 * @uses XiChartTypeDrawCapitalizationChartCustomBinary::getHeight()
	 * @uses XiChartTypeDrawCapitalizationChartCustomBinary::getDesign()
	 * @param XiChartTypeDrawCapitalizationChartCustomBinary DrawCapitalizationChartCustomBinary
	 * @return XiChartTypeDrawCapitalizationChartCustomBinaryResponse
	 */
	public function DrawCapitalizationChartCustomBinary(XiChartTypeDrawCapitalizationChartCustomBinary $_XiChartTypeDrawCapitalizationChartCustomBinary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DrawCapitalizationChartCustomBinary(array('Identifier'=>$_XiChartTypeDrawCapitalizationChartCustomBinary->getIdentifier(),'IdentifierType'=>$_XiChartTypeDrawCapitalizationChartCustomBinary->getIdentifierType(),'PeriodType'=>$_XiChartTypeDrawCapitalizationChartCustomBinary->getPeriodType(),'Width'=>$_XiChartTypeDrawCapitalizationChartCustomBinary->getWidth(),'Height'=>$_XiChartTypeDrawCapitalizationChartCustomBinary->getHeight(),'Design'=>$_XiChartTypeDrawCapitalizationChartCustomBinary->getDesign())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DrawCapitalizationChart
	 * Meta informations :
	 * 	- documentation : Draw a standard historical market capitalization chart for a custom date range.
	 * @uses XiChartWsdlClass::getSoapClient()
	 * @uses XiChartWsdlClass::setResult()
	 * @uses XiChartWsdlClass::getResult()
	 * @uses XiChartWsdlClass::saveLastError()
	 * @uses XiChartTypeDrawCapitalizationChart::getIdentifier()
	 * @uses XiChartTypeDrawCapitalizationChart::getIdentifierType()
	 * @uses XiChartTypeDrawCapitalizationChart::getPeriodType()
	 * @uses XiChartTypeDrawCapitalizationChart::getWidth()
	 * @uses XiChartTypeDrawCapitalizationChart::getHeight()
	 * @param XiChartTypeDrawCapitalizationChart DrawCapitalizationChart
	 * @return XiChartTypeDrawCapitalizationChartResponse
	 */
	public function DrawCapitalizationChart(XiChartTypeDrawCapitalizationChart $_XiChartTypeDrawCapitalizationChart)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DrawCapitalizationChart(array('Identifier'=>$_XiChartTypeDrawCapitalizationChart->getIdentifier(),'IdentifierType'=>$_XiChartTypeDrawCapitalizationChart->getIdentifierType(),'PeriodType'=>$_XiChartTypeDrawCapitalizationChart->getPeriodType(),'Width'=>$_XiChartTypeDrawCapitalizationChart->getWidth(),'Height'=>$_XiChartTypeDrawCapitalizationChart->getHeight())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DrawCapitalizationChartBinary
	 * Meta informations :
	 * 	- documentation : Draw a standard historical market capitalization chart for a custom date range.
	 * @uses XiChartWsdlClass::getSoapClient()
	 * @uses XiChartWsdlClass::setResult()
	 * @uses XiChartWsdlClass::getResult()
	 * @uses XiChartWsdlClass::saveLastError()
	 * @uses XiChartTypeDrawCapitalizationChartBinary::getIdentifier()
	 * @uses XiChartTypeDrawCapitalizationChartBinary::getIdentifierType()
	 * @uses XiChartTypeDrawCapitalizationChartBinary::getPeriodType()
	 * @uses XiChartTypeDrawCapitalizationChartBinary::getWidth()
	 * @uses XiChartTypeDrawCapitalizationChartBinary::getHeight()
	 * @param XiChartTypeDrawCapitalizationChartBinary DrawCapitalizationChartBinary
	 * @return XiChartTypeDrawCapitalizationChartBinaryResponse
	 */
	public function DrawCapitalizationChartBinary(XiChartTypeDrawCapitalizationChartBinary $_XiChartTypeDrawCapitalizationChartBinary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DrawCapitalizationChartBinary(array('Identifier'=>$_XiChartTypeDrawCapitalizationChartBinary->getIdentifier(),'IdentifierType'=>$_XiChartTypeDrawCapitalizationChartBinary->getIdentifierType(),'PeriodType'=>$_XiChartTypeDrawCapitalizationChartBinary->getPeriodType(),'Width'=>$_XiChartTypeDrawCapitalizationChartBinary->getWidth(),'Height'=>$_XiChartTypeDrawCapitalizationChartBinary->getHeight())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DrawHistoricalChartCustomByDate
	 * Meta informations :
	 * 	- documentation : Draw a custom historical stock chart (price and volume) for a custom date range.
	 * @uses XiChartWsdlClass::getSoapClient()
	 * @uses XiChartWsdlClass::setResult()
	 * @uses XiChartWsdlClass::getResult()
	 * @uses XiChartWsdlClass::saveLastError()
	 * @uses XiChartTypeDrawHistoricalChartCustomByDate::getIdentifier()
	 * @uses XiChartTypeDrawHistoricalChartCustomByDate::getIdentifierType()
	 * @uses XiChartTypeDrawHistoricalChartCustomByDate::getAdditionalSymbols()
	 * @uses XiChartTypeDrawHistoricalChartCustomByDate::getStartDate()
	 * @uses XiChartTypeDrawHistoricalChartCustomByDate::getEndDate()
	 * @uses XiChartTypeDrawHistoricalChartCustomByDate::getStyle()
	 * @uses XiChartTypeDrawHistoricalChartCustomByDate::getWidth()
	 * @uses XiChartTypeDrawHistoricalChartCustomByDate::getHeight()
	 * @uses XiChartTypeDrawHistoricalChartCustomByDate::getDesign()
	 * @param XiChartTypeDrawHistoricalChartCustomByDate DrawHistoricalChartCustomByDate
	 * @return XiChartTypeDrawHistoricalChartCustomByDateResponse
	 */
	public function DrawHistoricalChartCustomByDate(XiChartTypeDrawHistoricalChartCustomByDate $_XiChartTypeDrawHistoricalChartCustomByDate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DrawHistoricalChartCustomByDate(array('Identifier'=>$_XiChartTypeDrawHistoricalChartCustomByDate->getIdentifier(),'IdentifierType'=>$_XiChartTypeDrawHistoricalChartCustomByDate->getIdentifierType(),'AdditionalSymbols'=>$_XiChartTypeDrawHistoricalChartCustomByDate->getAdditionalSymbols(),'StartDate'=>$_XiChartTypeDrawHistoricalChartCustomByDate->getStartDate(),'EndDate'=>$_XiChartTypeDrawHistoricalChartCustomByDate->getEndDate(),'Style'=>$_XiChartTypeDrawHistoricalChartCustomByDate->getStyle(),'Width'=>$_XiChartTypeDrawHistoricalChartCustomByDate->getWidth(),'Height'=>$_XiChartTypeDrawHistoricalChartCustomByDate->getHeight(),'Design'=>$_XiChartTypeDrawHistoricalChartCustomByDate->getDesign())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DrawHistoricalChartCustomByDateBinary
	 * Meta informations :
	 * 	- documentation : Draw a custom historical stock chart (price and volume) for a custom date range.
	 * @uses XiChartWsdlClass::getSoapClient()
	 * @uses XiChartWsdlClass::setResult()
	 * @uses XiChartWsdlClass::getResult()
	 * @uses XiChartWsdlClass::saveLastError()
	 * @uses XiChartTypeDrawHistoricalChartCustomByDateBinary::getIdentifier()
	 * @uses XiChartTypeDrawHistoricalChartCustomByDateBinary::getIdentifierType()
	 * @uses XiChartTypeDrawHistoricalChartCustomByDateBinary::getAdditionalSymbols()
	 * @uses XiChartTypeDrawHistoricalChartCustomByDateBinary::getStartDate()
	 * @uses XiChartTypeDrawHistoricalChartCustomByDateBinary::getEndDate()
	 * @uses XiChartTypeDrawHistoricalChartCustomByDateBinary::getStyle()
	 * @uses XiChartTypeDrawHistoricalChartCustomByDateBinary::getWidth()
	 * @uses XiChartTypeDrawHistoricalChartCustomByDateBinary::getHeight()
	 * @uses XiChartTypeDrawHistoricalChartCustomByDateBinary::getDesign()
	 * @param XiChartTypeDrawHistoricalChartCustomByDateBinary DrawHistoricalChartCustomByDateBinary
	 * @return XiChartTypeDrawHistoricalChartCustomByDateBinaryResponse
	 */
	public function DrawHistoricalChartCustomByDateBinary(XiChartTypeDrawHistoricalChartCustomByDateBinary $_XiChartTypeDrawHistoricalChartCustomByDateBinary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DrawHistoricalChartCustomByDateBinary(array('Identifier'=>$_XiChartTypeDrawHistoricalChartCustomByDateBinary->getIdentifier(),'IdentifierType'=>$_XiChartTypeDrawHistoricalChartCustomByDateBinary->getIdentifierType(),'AdditionalSymbols'=>$_XiChartTypeDrawHistoricalChartCustomByDateBinary->getAdditionalSymbols(),'StartDate'=>$_XiChartTypeDrawHistoricalChartCustomByDateBinary->getStartDate(),'EndDate'=>$_XiChartTypeDrawHistoricalChartCustomByDateBinary->getEndDate(),'Style'=>$_XiChartTypeDrawHistoricalChartCustomByDateBinary->getStyle(),'Width'=>$_XiChartTypeDrawHistoricalChartCustomByDateBinary->getWidth(),'Height'=>$_XiChartTypeDrawHistoricalChartCustomByDateBinary->getHeight(),'Design'=>$_XiChartTypeDrawHistoricalChartCustomByDateBinary->getDesign())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DrawHistoricalChartByDate
	 * Meta informations :
	 * 	- documentation : Draw a standard historical stock chart (price and volume) for a custom date range.
	 * @uses XiChartWsdlClass::getSoapClient()
	 * @uses XiChartWsdlClass::setResult()
	 * @uses XiChartWsdlClass::getResult()
	 * @uses XiChartWsdlClass::saveLastError()
	 * @uses XiChartTypeDrawHistoricalChartByDate::getIdentifier()
	 * @uses XiChartTypeDrawHistoricalChartByDate::getIdentifierType()
	 * @uses XiChartTypeDrawHistoricalChartByDate::getAdditionalSymbols()
	 * @uses XiChartTypeDrawHistoricalChartByDate::getStartDate()
	 * @uses XiChartTypeDrawHistoricalChartByDate::getEndDate()
	 * @uses XiChartTypeDrawHistoricalChartByDate::getStyle()
	 * @uses XiChartTypeDrawHistoricalChartByDate::getWidth()
	 * @uses XiChartTypeDrawHistoricalChartByDate::getHeight()
	 * @param XiChartTypeDrawHistoricalChartByDate DrawHistoricalChartByDate
	 * @return XiChartTypeDrawHistoricalChartByDateResponse
	 */
	public function DrawHistoricalChartByDate(XiChartTypeDrawHistoricalChartByDate $_XiChartTypeDrawHistoricalChartByDate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DrawHistoricalChartByDate(array('Identifier'=>$_XiChartTypeDrawHistoricalChartByDate->getIdentifier(),'IdentifierType'=>$_XiChartTypeDrawHistoricalChartByDate->getIdentifierType(),'AdditionalSymbols'=>$_XiChartTypeDrawHistoricalChartByDate->getAdditionalSymbols(),'StartDate'=>$_XiChartTypeDrawHistoricalChartByDate->getStartDate(),'EndDate'=>$_XiChartTypeDrawHistoricalChartByDate->getEndDate(),'Style'=>$_XiChartTypeDrawHistoricalChartByDate->getStyle(),'Width'=>$_XiChartTypeDrawHistoricalChartByDate->getWidth(),'Height'=>$_XiChartTypeDrawHistoricalChartByDate->getHeight())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DrawHistoricalChartByDateBinary
	 * Meta informations :
	 * 	- documentation : Draw a standard historical stock chart (price and volume) for a custom date range.
	 * @uses XiChartWsdlClass::getSoapClient()
	 * @uses XiChartWsdlClass::setResult()
	 * @uses XiChartWsdlClass::getResult()
	 * @uses XiChartWsdlClass::saveLastError()
	 * @uses XiChartTypeDrawHistoricalChartByDateBinary::getIdentifier()
	 * @uses XiChartTypeDrawHistoricalChartByDateBinary::getIdentifierType()
	 * @uses XiChartTypeDrawHistoricalChartByDateBinary::getAdditionalSymbols()
	 * @uses XiChartTypeDrawHistoricalChartByDateBinary::getStartDate()
	 * @uses XiChartTypeDrawHistoricalChartByDateBinary::getEndDate()
	 * @uses XiChartTypeDrawHistoricalChartByDateBinary::getStyle()
	 * @uses XiChartTypeDrawHistoricalChartByDateBinary::getWidth()
	 * @uses XiChartTypeDrawHistoricalChartByDateBinary::getHeight()
	 * @param XiChartTypeDrawHistoricalChartByDateBinary DrawHistoricalChartByDateBinary
	 * @return XiChartTypeDrawHistoricalChartByDateBinaryResponse
	 */
	public function DrawHistoricalChartByDateBinary(XiChartTypeDrawHistoricalChartByDateBinary $_XiChartTypeDrawHistoricalChartByDateBinary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DrawHistoricalChartByDateBinary(array('Identifier'=>$_XiChartTypeDrawHistoricalChartByDateBinary->getIdentifier(),'IdentifierType'=>$_XiChartTypeDrawHistoricalChartByDateBinary->getIdentifierType(),'AdditionalSymbols'=>$_XiChartTypeDrawHistoricalChartByDateBinary->getAdditionalSymbols(),'StartDate'=>$_XiChartTypeDrawHistoricalChartByDateBinary->getStartDate(),'EndDate'=>$_XiChartTypeDrawHistoricalChartByDateBinary->getEndDate(),'Style'=>$_XiChartTypeDrawHistoricalChartByDateBinary->getStyle(),'Width'=>$_XiChartTypeDrawHistoricalChartByDateBinary->getWidth(),'Height'=>$_XiChartTypeDrawHistoricalChartByDateBinary->getHeight())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DrawHistoricalChartCustom
	 * Meta informations :
	 * 	- documentation : Draw a custom historical stock chart (price and volume) for a predefined date range.
	 * @uses XiChartWsdlClass::getSoapClient()
	 * @uses XiChartWsdlClass::setResult()
	 * @uses XiChartWsdlClass::getResult()
	 * @uses XiChartWsdlClass::saveLastError()
	 * @uses XiChartTypeDrawHistoricalChartCustom::getIdentifier()
	 * @uses XiChartTypeDrawHistoricalChartCustom::getIdentifierType()
	 * @uses XiChartTypeDrawHistoricalChartCustom::getAdditionalSymbols()
	 * @uses XiChartTypeDrawHistoricalChartCustom::getPeriodType()
	 * @uses XiChartTypeDrawHistoricalChartCustom::getStyle()
	 * @uses XiChartTypeDrawHistoricalChartCustom::getWidth()
	 * @uses XiChartTypeDrawHistoricalChartCustom::getHeight()
	 * @uses XiChartTypeDrawHistoricalChartCustom::getDesign()
	 * @param XiChartTypeDrawHistoricalChartCustom DrawHistoricalChartCustom
	 * @return XiChartTypeDrawHistoricalChartCustomResponse
	 */
	public function DrawHistoricalChartCustom(XiChartTypeDrawHistoricalChartCustom $_XiChartTypeDrawHistoricalChartCustom)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DrawHistoricalChartCustom(array('Identifier'=>$_XiChartTypeDrawHistoricalChartCustom->getIdentifier(),'IdentifierType'=>$_XiChartTypeDrawHistoricalChartCustom->getIdentifierType(),'AdditionalSymbols'=>$_XiChartTypeDrawHistoricalChartCustom->getAdditionalSymbols(),'PeriodType'=>$_XiChartTypeDrawHistoricalChartCustom->getPeriodType(),'Style'=>$_XiChartTypeDrawHistoricalChartCustom->getStyle(),'Width'=>$_XiChartTypeDrawHistoricalChartCustom->getWidth(),'Height'=>$_XiChartTypeDrawHistoricalChartCustom->getHeight(),'Design'=>$_XiChartTypeDrawHistoricalChartCustom->getDesign())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DrawHistoricalChartCustomBinary
	 * Meta informations :
	 * 	- documentation : Draw a custom, binary historical stock chart (price and volume) for a predefined date range.
	 * @uses XiChartWsdlClass::getSoapClient()
	 * @uses XiChartWsdlClass::setResult()
	 * @uses XiChartWsdlClass::getResult()
	 * @uses XiChartWsdlClass::saveLastError()
	 * @uses XiChartTypeDrawHistoricalChartCustomBinary::getIdentifier()
	 * @uses XiChartTypeDrawHistoricalChartCustomBinary::getIdentifierType()
	 * @uses XiChartTypeDrawHistoricalChartCustomBinary::getAdditionalSymbols()
	 * @uses XiChartTypeDrawHistoricalChartCustomBinary::getPeriodType()
	 * @uses XiChartTypeDrawHistoricalChartCustomBinary::getStyle()
	 * @uses XiChartTypeDrawHistoricalChartCustomBinary::getWidth()
	 * @uses XiChartTypeDrawHistoricalChartCustomBinary::getHeight()
	 * @uses XiChartTypeDrawHistoricalChartCustomBinary::getDesign()
	 * @param XiChartTypeDrawHistoricalChartCustomBinary DrawHistoricalChartCustomBinary
	 * @return XiChartTypeDrawHistoricalChartCustomBinaryResponse
	 */
	public function DrawHistoricalChartCustomBinary(XiChartTypeDrawHistoricalChartCustomBinary $_XiChartTypeDrawHistoricalChartCustomBinary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DrawHistoricalChartCustomBinary(array('Identifier'=>$_XiChartTypeDrawHistoricalChartCustomBinary->getIdentifier(),'IdentifierType'=>$_XiChartTypeDrawHistoricalChartCustomBinary->getIdentifierType(),'AdditionalSymbols'=>$_XiChartTypeDrawHistoricalChartCustomBinary->getAdditionalSymbols(),'PeriodType'=>$_XiChartTypeDrawHistoricalChartCustomBinary->getPeriodType(),'Style'=>$_XiChartTypeDrawHistoricalChartCustomBinary->getStyle(),'Width'=>$_XiChartTypeDrawHistoricalChartCustomBinary->getWidth(),'Height'=>$_XiChartTypeDrawHistoricalChartCustomBinary->getHeight(),'Design'=>$_XiChartTypeDrawHistoricalChartCustomBinary->getDesign())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DrawHistoricalChart
	 * Meta informations :
	 * 	- documentation : Draw a standard historical stock chart (price and volume) for a predefined date range.
	 * @uses XiChartWsdlClass::getSoapClient()
	 * @uses XiChartWsdlClass::setResult()
	 * @uses XiChartWsdlClass::getResult()
	 * @uses XiChartWsdlClass::saveLastError()
	 * @uses XiChartTypeDrawHistoricalChart::getIdentifier()
	 * @uses XiChartTypeDrawHistoricalChart::getIdentifierType()
	 * @uses XiChartTypeDrawHistoricalChart::getAdditionalSymbols()
	 * @uses XiChartTypeDrawHistoricalChart::getPeriodType()
	 * @uses XiChartTypeDrawHistoricalChart::getStyle()
	 * @uses XiChartTypeDrawHistoricalChart::getWidth()
	 * @uses XiChartTypeDrawHistoricalChart::getHeight()
	 * @param XiChartTypeDrawHistoricalChart DrawHistoricalChart
	 * @return XiChartTypeDrawHistoricalChartResponse
	 */
	public function DrawHistoricalChart(XiChartTypeDrawHistoricalChart $_XiChartTypeDrawHistoricalChart)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DrawHistoricalChart(array('Identifier'=>$_XiChartTypeDrawHistoricalChart->getIdentifier(),'IdentifierType'=>$_XiChartTypeDrawHistoricalChart->getIdentifierType(),'AdditionalSymbols'=>$_XiChartTypeDrawHistoricalChart->getAdditionalSymbols(),'PeriodType'=>$_XiChartTypeDrawHistoricalChart->getPeriodType(),'Style'=>$_XiChartTypeDrawHistoricalChart->getStyle(),'Width'=>$_XiChartTypeDrawHistoricalChart->getWidth(),'Height'=>$_XiChartTypeDrawHistoricalChart->getHeight())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DrawHistoricalChartBinary
	 * Meta informations :
	 * 	- documentation : Draw a standard historical stock chart (price and volume) for a predefined date range.
	 * @uses XiChartWsdlClass::getSoapClient()
	 * @uses XiChartWsdlClass::setResult()
	 * @uses XiChartWsdlClass::getResult()
	 * @uses XiChartWsdlClass::saveLastError()
	 * @uses XiChartTypeDrawHistoricalChartBinary::getIdentifier()
	 * @uses XiChartTypeDrawHistoricalChartBinary::getIdentifierType()
	 * @uses XiChartTypeDrawHistoricalChartBinary::getAdditionalSymbols()
	 * @uses XiChartTypeDrawHistoricalChartBinary::getPeriodType()
	 * @uses XiChartTypeDrawHistoricalChartBinary::getStyle()
	 * @uses XiChartTypeDrawHistoricalChartBinary::getWidth()
	 * @uses XiChartTypeDrawHistoricalChartBinary::getHeight()
	 * @param XiChartTypeDrawHistoricalChartBinary DrawHistoricalChartBinary
	 * @return XiChartTypeDrawHistoricalChartBinaryResponse
	 */
	public function DrawHistoricalChartBinary(XiChartTypeDrawHistoricalChartBinary $_XiChartTypeDrawHistoricalChartBinary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DrawHistoricalChartBinary(array('Identifier'=>$_XiChartTypeDrawHistoricalChartBinary->getIdentifier(),'IdentifierType'=>$_XiChartTypeDrawHistoricalChartBinary->getIdentifierType(),'AdditionalSymbols'=>$_XiChartTypeDrawHistoricalChartBinary->getAdditionalSymbols(),'PeriodType'=>$_XiChartTypeDrawHistoricalChartBinary->getPeriodType(),'Style'=>$_XiChartTypeDrawHistoricalChartBinary->getStyle(),'Width'=>$_XiChartTypeDrawHistoricalChartBinary->getWidth(),'Height'=>$_XiChartTypeDrawHistoricalChartBinary->getHeight())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DrawHistoricalChartPreset
	 * Meta informations :
	 * 	- documentation : Draw a custom historical stock chart (price and volume) for a predefined date range using a preset design.
	 * @uses XiChartWsdlClass::getSoapClient()
	 * @uses XiChartWsdlClass::setResult()
	 * @uses XiChartWsdlClass::getResult()
	 * @uses XiChartWsdlClass::saveLastError()
	 * @uses XiChartTypeDrawHistoricalChartPreset::getIdentifier()
	 * @uses XiChartTypeDrawHistoricalChartPreset::getIdentifierType()
	 * @uses XiChartTypeDrawHistoricalChartPreset::getAdditionalSymbols()
	 * @uses XiChartTypeDrawHistoricalChartPreset::getPeriodType()
	 * @uses XiChartTypeDrawHistoricalChartPreset::getStyle()
	 * @uses XiChartTypeDrawHistoricalChartPreset::getWidth()
	 * @uses XiChartTypeDrawHistoricalChartPreset::getHeight()
	 * @uses XiChartTypeDrawHistoricalChartPreset::getPreset()
	 * @param XiChartTypeDrawHistoricalChartPreset DrawHistoricalChartPreset
	 * @return XiChartTypeDrawHistoricalChartPresetResponse
	 */
	public function DrawHistoricalChartPreset(XiChartTypeDrawHistoricalChartPreset $_XiChartTypeDrawHistoricalChartPreset)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DrawHistoricalChartPreset(array('Identifier'=>$_XiChartTypeDrawHistoricalChartPreset->getIdentifier(),'IdentifierType'=>$_XiChartTypeDrawHistoricalChartPreset->getIdentifierType(),'AdditionalSymbols'=>$_XiChartTypeDrawHistoricalChartPreset->getAdditionalSymbols(),'PeriodType'=>$_XiChartTypeDrawHistoricalChartPreset->getPeriodType(),'Style'=>$_XiChartTypeDrawHistoricalChartPreset->getStyle(),'Width'=>$_XiChartTypeDrawHistoricalChartPreset->getWidth(),'Height'=>$_XiChartTypeDrawHistoricalChartPreset->getHeight(),'Preset'=>$_XiChartTypeDrawHistoricalChartPreset->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DrawHistoricalChartPresetBinary
	 * Meta informations :
	 * 	- documentation : Draw a custom historical stock chart (price and volume) for a predefined date range using a preset design.
	 * @uses XiChartWsdlClass::getSoapClient()
	 * @uses XiChartWsdlClass::setResult()
	 * @uses XiChartWsdlClass::getResult()
	 * @uses XiChartWsdlClass::saveLastError()
	 * @uses XiChartTypeDrawHistoricalChartPresetBinary::getIdentifier()
	 * @uses XiChartTypeDrawHistoricalChartPresetBinary::getIdentifierType()
	 * @uses XiChartTypeDrawHistoricalChartPresetBinary::getAdditionalSymbols()
	 * @uses XiChartTypeDrawHistoricalChartPresetBinary::getPeriodType()
	 * @uses XiChartTypeDrawHistoricalChartPresetBinary::getStyle()
	 * @uses XiChartTypeDrawHistoricalChartPresetBinary::getWidth()
	 * @uses XiChartTypeDrawHistoricalChartPresetBinary::getHeight()
	 * @uses XiChartTypeDrawHistoricalChartPresetBinary::getPreset()
	 * @param XiChartTypeDrawHistoricalChartPresetBinary DrawHistoricalChartPresetBinary
	 * @return XiChartTypeDrawHistoricalChartPresetBinaryResponse
	 */
	public function DrawHistoricalChartPresetBinary(XiChartTypeDrawHistoricalChartPresetBinary $_XiChartTypeDrawHistoricalChartPresetBinary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DrawHistoricalChartPresetBinary(array('Identifier'=>$_XiChartTypeDrawHistoricalChartPresetBinary->getIdentifier(),'IdentifierType'=>$_XiChartTypeDrawHistoricalChartPresetBinary->getIdentifierType(),'AdditionalSymbols'=>$_XiChartTypeDrawHistoricalChartPresetBinary->getAdditionalSymbols(),'PeriodType'=>$_XiChartTypeDrawHistoricalChartPresetBinary->getPeriodType(),'Style'=>$_XiChartTypeDrawHistoricalChartPresetBinary->getStyle(),'Width'=>$_XiChartTypeDrawHistoricalChartPresetBinary->getWidth(),'Height'=>$_XiChartTypeDrawHistoricalChartPresetBinary->getHeight(),'Preset'=>$_XiChartTypeDrawHistoricalChartPresetBinary->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DrawHistoricalChartPresetByDate
	 * Meta informations :
	 * 	- documentation : Draw a custom historical stock chart (price and volume) for a predefined date range using a preset design.
	 * @uses XiChartWsdlClass::getSoapClient()
	 * @uses XiChartWsdlClass::setResult()
	 * @uses XiChartWsdlClass::getResult()
	 * @uses XiChartWsdlClass::saveLastError()
	 * @uses XiChartTypeDrawHistoricalChartPresetByDate::getIdentifier()
	 * @uses XiChartTypeDrawHistoricalChartPresetByDate::getIdentifierType()
	 * @uses XiChartTypeDrawHistoricalChartPresetByDate::getAdditionalSymbols()
	 * @uses XiChartTypeDrawHistoricalChartPresetByDate::getStartDate()
	 * @uses XiChartTypeDrawHistoricalChartPresetByDate::getEndDate()
	 * @uses XiChartTypeDrawHistoricalChartPresetByDate::getStyle()
	 * @uses XiChartTypeDrawHistoricalChartPresetByDate::getWidth()
	 * @uses XiChartTypeDrawHistoricalChartPresetByDate::getHeight()
	 * @uses XiChartTypeDrawHistoricalChartPresetByDate::getPreset()
	 * @param XiChartTypeDrawHistoricalChartPresetByDate DrawHistoricalChartPresetByDate
	 * @return XiChartTypeDrawHistoricalChartPresetByDateResponse
	 */
	public function DrawHistoricalChartPresetByDate(XiChartTypeDrawHistoricalChartPresetByDate $_XiChartTypeDrawHistoricalChartPresetByDate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DrawHistoricalChartPresetByDate(array('Identifier'=>$_XiChartTypeDrawHistoricalChartPresetByDate->getIdentifier(),'IdentifierType'=>$_XiChartTypeDrawHistoricalChartPresetByDate->getIdentifierType(),'AdditionalSymbols'=>$_XiChartTypeDrawHistoricalChartPresetByDate->getAdditionalSymbols(),'StartDate'=>$_XiChartTypeDrawHistoricalChartPresetByDate->getStartDate(),'EndDate'=>$_XiChartTypeDrawHistoricalChartPresetByDate->getEndDate(),'Style'=>$_XiChartTypeDrawHistoricalChartPresetByDate->getStyle(),'Width'=>$_XiChartTypeDrawHistoricalChartPresetByDate->getWidth(),'Height'=>$_XiChartTypeDrawHistoricalChartPresetByDate->getHeight(),'Preset'=>$_XiChartTypeDrawHistoricalChartPresetByDate->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DrawHistoricalChartPresetByDateBinary
	 * Meta informations :
	 * 	- documentation : Draw a custom historical stock chart (price and volume) for a predefined date range using a preset design.
	 * @uses XiChartWsdlClass::getSoapClient()
	 * @uses XiChartWsdlClass::setResult()
	 * @uses XiChartWsdlClass::getResult()
	 * @uses XiChartWsdlClass::saveLastError()
	 * @uses XiChartTypeDrawHistoricalChartPresetByDateBinary::getIdentifier()
	 * @uses XiChartTypeDrawHistoricalChartPresetByDateBinary::getIdentifierType()
	 * @uses XiChartTypeDrawHistoricalChartPresetByDateBinary::getAdditionalSymbols()
	 * @uses XiChartTypeDrawHistoricalChartPresetByDateBinary::getStartDate()
	 * @uses XiChartTypeDrawHistoricalChartPresetByDateBinary::getEndDate()
	 * @uses XiChartTypeDrawHistoricalChartPresetByDateBinary::getStyle()
	 * @uses XiChartTypeDrawHistoricalChartPresetByDateBinary::getWidth()
	 * @uses XiChartTypeDrawHistoricalChartPresetByDateBinary::getHeight()
	 * @uses XiChartTypeDrawHistoricalChartPresetByDateBinary::getPreset()
	 * @param XiChartTypeDrawHistoricalChartPresetByDateBinary DrawHistoricalChartPresetByDateBinary
	 * @return XiChartTypeDrawHistoricalChartPresetByDateBinaryResponse
	 */
	public function DrawHistoricalChartPresetByDateBinary(XiChartTypeDrawHistoricalChartPresetByDateBinary $_XiChartTypeDrawHistoricalChartPresetByDateBinary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DrawHistoricalChartPresetByDateBinary(array('Identifier'=>$_XiChartTypeDrawHistoricalChartPresetByDateBinary->getIdentifier(),'IdentifierType'=>$_XiChartTypeDrawHistoricalChartPresetByDateBinary->getIdentifierType(),'AdditionalSymbols'=>$_XiChartTypeDrawHistoricalChartPresetByDateBinary->getAdditionalSymbols(),'StartDate'=>$_XiChartTypeDrawHistoricalChartPresetByDateBinary->getStartDate(),'EndDate'=>$_XiChartTypeDrawHistoricalChartPresetByDateBinary->getEndDate(),'Style'=>$_XiChartTypeDrawHistoricalChartPresetByDateBinary->getStyle(),'Width'=>$_XiChartTypeDrawHistoricalChartPresetByDateBinary->getWidth(),'Height'=>$_XiChartTypeDrawHistoricalChartPresetByDateBinary->getHeight(),'Preset'=>$_XiChartTypeDrawHistoricalChartPresetByDateBinary->getPreset())));
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
	 * @return XiChartTypeDrawHistoricalChartPresetByDateBinaryResponse
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