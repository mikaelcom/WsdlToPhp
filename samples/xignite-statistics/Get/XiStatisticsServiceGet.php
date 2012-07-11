<?php
/**
 * Class file for XiStatisticsServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiStatisticsServiceGet
 * @date 08/07/2012
 */
class XiStatisticsServiceGet extends XiStatisticsWsdlClass
{
	/**
	 * Method to call GetCategoriesAndTopics
	 * Meta informations :
	 * 	- documentation : Get categories and topics for statistics.
	 * @uses XiStatisticsWsdlClass::getSoapClient()
	 * @uses XiStatisticsWsdlClass::setResult()
	 * @uses XiStatisticsWsdlClass::getResult()
	 * @uses XiStatisticsWsdlClass::saveLastError()
	 * @param XiStatisticsTypeGetCategoriesAndTopics GetCategoriesAndTopics
	 * @return XiStatisticsTypeGetCategoriesAndTopicsResponse
	 */
	public function GetCategoriesAndTopics(XiStatisticsTypeGetCategoriesAndTopics $_XiStatisticsTypeGetCategoriesAndTopics)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCategoriesAndTopics(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetCategories
	 * Meta informations :
	 * 	- documentation : Get valid categories.
	 * @uses XiStatisticsWsdlClass::getSoapClient()
	 * @uses XiStatisticsWsdlClass::setResult()
	 * @uses XiStatisticsWsdlClass::getResult()
	 * @uses XiStatisticsWsdlClass::saveLastError()
	 * @param XiStatisticsTypeGetCategories GetCategories
	 * @return XiStatisticsTypeGetCategoriesResponse
	 */
	public function GetCategories(XiStatisticsTypeGetCategories $_XiStatisticsTypeGetCategories)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCategories(array()));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTopics
	 * @uses XiStatisticsWsdlClass::getSoapClient()
	 * @uses XiStatisticsWsdlClass::setResult()
	 * @uses XiStatisticsWsdlClass::getResult()
	 * @uses XiStatisticsWsdlClass::saveLastError()
	 * @uses XiStatisticsTypeGetTopics::getCategoryCode()
	 * @param XiStatisticsTypeGetTopics GetTopics
	 * @return XiStatisticsTypeGetTopicsResponse
	 */
	public function GetTopics(XiStatisticsTypeGetTopics $_XiStatisticsTypeGetTopics)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTopics(array('CategoryCode'=>$_XiStatisticsTypeGetTopics->getCategoryCode())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTopicDetails
	 * @uses XiStatisticsWsdlClass::getSoapClient()
	 * @uses XiStatisticsWsdlClass::setResult()
	 * @uses XiStatisticsWsdlClass::getResult()
	 * @uses XiStatisticsWsdlClass::saveLastError()
	 * @uses XiStatisticsTypeGetTopicDetails::getTopicCode()
	 * @param XiStatisticsTypeGetTopicDetails GetTopicDetails
	 * @return XiStatisticsTypeGetTopicDetailsResponse
	 */
	public function GetTopicDetails(XiStatisticsTypeGetTopicDetails $_XiStatisticsTypeGetTopicDetails)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTopicDetails(array('TopicCode'=>$_XiStatisticsTypeGetTopicDetails->getTopicCode())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTopicStatistics
	 * Meta informations :
	 * 	- documentation : Get statistics for a topic and a period.
	 * @uses XiStatisticsWsdlClass::getSoapClient()
	 * @uses XiStatisticsWsdlClass::setResult()
	 * @uses XiStatisticsWsdlClass::getResult()
	 * @uses XiStatisticsWsdlClass::saveLastError()
	 * @uses XiStatisticsTypeGetTopicStatistics::getTopicCode()
	 * @uses XiStatisticsTypeGetTopicStatistics::getStartDate()
	 * @uses XiStatisticsTypeGetTopicStatistics::getEndDate()
	 * @param XiStatisticsTypeGetTopicStatistics GetTopicStatistics
	 * @return XiStatisticsTypeGetTopicStatisticsResponse
	 */
	public function GetTopicStatistics(XiStatisticsTypeGetTopicStatistics $_XiStatisticsTypeGetTopicStatistics)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTopicStatistics(array('TopicCode'=>$_XiStatisticsTypeGetTopicStatistics->getTopicCode(),'StartDate'=>$_XiStatisticsTypeGetTopicStatistics->getStartDate(),'EndDate'=>$_XiStatisticsTypeGetTopicStatistics->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTopicData
	 * Meta informations :
	 * 	- documentation : Get time-series data for a topic.
	 * @uses XiStatisticsWsdlClass::getSoapClient()
	 * @uses XiStatisticsWsdlClass::setResult()
	 * @uses XiStatisticsWsdlClass::getResult()
	 * @uses XiStatisticsWsdlClass::saveLastError()
	 * @uses XiStatisticsTypeGetTopicData::getTopicCode()
	 * @uses XiStatisticsTypeGetTopicData::getStartDate()
	 * @uses XiStatisticsTypeGetTopicData::getEndDate()
	 * @param XiStatisticsTypeGetTopicData GetTopicData
	 * @return XiStatisticsTypeGetTopicDataResponse
	 */
	public function GetTopicData(XiStatisticsTypeGetTopicData $_XiStatisticsTypeGetTopicData)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTopicData(array('TopicCode'=>$_XiStatisticsTypeGetTopicData->getTopicCode(),'StartDate'=>$_XiStatisticsTypeGetTopicData->getStartDate(),'EndDate'=>$_XiStatisticsTypeGetTopicData->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLatestTopicData
	 * Meta informations :
	 * 	- documentation : Get lastest value for a topic.
	 * @uses XiStatisticsWsdlClass::getSoapClient()
	 * @uses XiStatisticsWsdlClass::setResult()
	 * @uses XiStatisticsWsdlClass::getResult()
	 * @uses XiStatisticsWsdlClass::saveLastError()
	 * @uses XiStatisticsTypeGetLatestTopicData::getTopicCode()
	 * @param XiStatisticsTypeGetLatestTopicData GetLatestTopicData
	 * @return XiStatisticsTypeGetLatestTopicDataResponse
	 */
	public function GetLatestTopicData(XiStatisticsTypeGetLatestTopicData $_XiStatisticsTypeGetLatestTopicData)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLatestTopicData(array('TopicCode'=>$_XiStatisticsTypeGetLatestTopicData->getTopicCode())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAnnualizedTopicData
	 * Meta informations :
	 * 	- documentation : Get annualized time-series data for a topic.
	 * @uses XiStatisticsWsdlClass::getSoapClient()
	 * @uses XiStatisticsWsdlClass::setResult()
	 * @uses XiStatisticsWsdlClass::getResult()
	 * @uses XiStatisticsWsdlClass::saveLastError()
	 * @uses XiStatisticsTypeGetAnnualizedTopicData::getTopicCode()
	 * @uses XiStatisticsTypeGetAnnualizedTopicData::getStartDate()
	 * @uses XiStatisticsTypeGetAnnualizedTopicData::getEndDate()
	 * @param XiStatisticsTypeGetAnnualizedTopicData GetAnnualizedTopicData
	 * @return XiStatisticsTypeGetAnnualizedTopicDataResponse
	 */
	public function GetAnnualizedTopicData(XiStatisticsTypeGetAnnualizedTopicData $_XiStatisticsTypeGetAnnualizedTopicData)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAnnualizedTopicData(array('TopicCode'=>$_XiStatisticsTypeGetAnnualizedTopicData->getTopicCode(),'StartDate'=>$_XiStatisticsTypeGetAnnualizedTopicData->getStartDate(),'EndDate'=>$_XiStatisticsTypeGetAnnualizedTopicData->getEndDate())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTopicChart
	 * Meta informations :
	 * 	- documentation : Get time-series data and a URL to a chart for a topic.
	 * @uses XiStatisticsWsdlClass::getSoapClient()
	 * @uses XiStatisticsWsdlClass::setResult()
	 * @uses XiStatisticsWsdlClass::getResult()
	 * @uses XiStatisticsWsdlClass::saveLastError()
	 * @uses XiStatisticsTypeGetTopicChart::getTopicCode()
	 * @uses XiStatisticsTypeGetTopicChart::getStartDate()
	 * @uses XiStatisticsTypeGetTopicChart::getEndDate()
	 * @uses XiStatisticsTypeGetTopicChart::getChartWidth()
	 * @uses XiStatisticsTypeGetTopicChart::getChartHeight()
	 * @param XiStatisticsTypeGetTopicChart GetTopicChart
	 * @return XiStatisticsTypeGetTopicChartResponse
	 */
	public function GetTopicChart(XiStatisticsTypeGetTopicChart $_XiStatisticsTypeGetTopicChart)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTopicChart(array('TopicCode'=>$_XiStatisticsTypeGetTopicChart->getTopicCode(),'StartDate'=>$_XiStatisticsTypeGetTopicChart->getStartDate(),'EndDate'=>$_XiStatisticsTypeGetTopicChart->getEndDate(),'ChartWidth'=>$_XiStatisticsTypeGetTopicChart->getChartWidth(),'ChartHeight'=>$_XiStatisticsTypeGetTopicChart->getChartHeight())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTopicChartPreset
	 * Meta informations :
	 * 	- documentation : Get a preset chart for a topic.
	 * @uses XiStatisticsWsdlClass::getSoapClient()
	 * @uses XiStatisticsWsdlClass::setResult()
	 * @uses XiStatisticsWsdlClass::getResult()
	 * @uses XiStatisticsWsdlClass::saveLastError()
	 * @uses XiStatisticsTypeGetTopicChartPreset::getTopicCode()
	 * @uses XiStatisticsTypeGetTopicChartPreset::getStartDate()
	 * @uses XiStatisticsTypeGetTopicChartPreset::getEndDate()
	 * @uses XiStatisticsTypeGetTopicChartPreset::getChartWidth()
	 * @uses XiStatisticsTypeGetTopicChartPreset::getChartHeight()
	 * @uses XiStatisticsTypeGetTopicChartPreset::getPreset()
	 * @param XiStatisticsTypeGetTopicChartPreset GetTopicChartPreset
	 * @return XiStatisticsTypeGetTopicChartPresetResponse
	 */
	public function GetTopicChartPreset(XiStatisticsTypeGetTopicChartPreset $_XiStatisticsTypeGetTopicChartPreset)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTopicChartPreset(array('TopicCode'=>$_XiStatisticsTypeGetTopicChartPreset->getTopicCode(),'StartDate'=>$_XiStatisticsTypeGetTopicChartPreset->getStartDate(),'EndDate'=>$_XiStatisticsTypeGetTopicChartPreset->getEndDate(),'ChartWidth'=>$_XiStatisticsTypeGetTopicChartPreset->getChartWidth(),'ChartHeight'=>$_XiStatisticsTypeGetTopicChartPreset->getChartHeight(),'Preset'=>$_XiStatisticsTypeGetTopicChartPreset->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTopicChartCustom
	 * Meta informations :
	 * 	- documentation : Get time-series data and a URL to a custom chart for a topic.
	 * @uses XiStatisticsWsdlClass::getSoapClient()
	 * @uses XiStatisticsWsdlClass::setResult()
	 * @uses XiStatisticsWsdlClass::getResult()
	 * @uses XiStatisticsWsdlClass::saveLastError()
	 * @uses XiStatisticsTypeGetTopicChartCustom::getTopicCode()
	 * @uses XiStatisticsTypeGetTopicChartCustom::getStartDate()
	 * @uses XiStatisticsTypeGetTopicChartCustom::getEndDate()
	 * @uses XiStatisticsTypeGetTopicChartCustom::getChartWidth()
	 * @uses XiStatisticsTypeGetTopicChartCustom::getChartHeight()
	 * @uses XiStatisticsTypeGetTopicChartCustom::getDesign()
	 * @param XiStatisticsTypeGetTopicChartCustom GetTopicChartCustom
	 * @return XiStatisticsTypeGetTopicChartCustomResponse
	 */
	public function GetTopicChartCustom(XiStatisticsTypeGetTopicChartCustom $_XiStatisticsTypeGetTopicChartCustom)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTopicChartCustom(array('TopicCode'=>$_XiStatisticsTypeGetTopicChartCustom->getTopicCode(),'StartDate'=>$_XiStatisticsTypeGetTopicChartCustom->getStartDate(),'EndDate'=>$_XiStatisticsTypeGetTopicChartCustom->getEndDate(),'ChartWidth'=>$_XiStatisticsTypeGetTopicChartCustom->getChartWidth(),'ChartHeight'=>$_XiStatisticsTypeGetTopicChartCustom->getChartHeight(),'Design'=>$_XiStatisticsTypeGetTopicChartCustom->getDesign())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTopicBinaryChart
	 * Meta informations :
	 * 	- documentation : Get time-series and a chart in binary format for a topic.
	 * @uses XiStatisticsWsdlClass::getSoapClient()
	 * @uses XiStatisticsWsdlClass::setResult()
	 * @uses XiStatisticsWsdlClass::getResult()
	 * @uses XiStatisticsWsdlClass::saveLastError()
	 * @uses XiStatisticsTypeGetTopicBinaryChart::getTopicCode()
	 * @uses XiStatisticsTypeGetTopicBinaryChart::getStartDate()
	 * @uses XiStatisticsTypeGetTopicBinaryChart::getEndDate()
	 * @uses XiStatisticsTypeGetTopicBinaryChart::getChartWidth()
	 * @uses XiStatisticsTypeGetTopicBinaryChart::getChartHeight()
	 * @uses XiStatisticsTypeGetTopicBinaryChart::getPreset()
	 * @param XiStatisticsTypeGetTopicBinaryChart GetTopicBinaryChart
	 * @return XiStatisticsTypeGetTopicBinaryChartResponse
	 */
	public function GetTopicBinaryChart(XiStatisticsTypeGetTopicBinaryChart $_XiStatisticsTypeGetTopicBinaryChart)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTopicBinaryChart(array('TopicCode'=>$_XiStatisticsTypeGetTopicBinaryChart->getTopicCode(),'StartDate'=>$_XiStatisticsTypeGetTopicBinaryChart->getStartDate(),'EndDate'=>$_XiStatisticsTypeGetTopicBinaryChart->getEndDate(),'ChartWidth'=>$_XiStatisticsTypeGetTopicBinaryChart->getChartWidth(),'ChartHeight'=>$_XiStatisticsTypeGetTopicBinaryChart->getChartHeight(),'Preset'=>$_XiStatisticsTypeGetTopicBinaryChart->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTopicBinaryChartPreset
	 * Meta informations :
	 * 	- documentation : Get time-series and a chart in binary format for a topic.
	 * @uses XiStatisticsWsdlClass::getSoapClient()
	 * @uses XiStatisticsWsdlClass::setResult()
	 * @uses XiStatisticsWsdlClass::getResult()
	 * @uses XiStatisticsWsdlClass::saveLastError()
	 * @uses XiStatisticsTypeGetTopicBinaryChartPreset::getTopicCode()
	 * @uses XiStatisticsTypeGetTopicBinaryChartPreset::getStartDate()
	 * @uses XiStatisticsTypeGetTopicBinaryChartPreset::getEndDate()
	 * @uses XiStatisticsTypeGetTopicBinaryChartPreset::getChartWidth()
	 * @uses XiStatisticsTypeGetTopicBinaryChartPreset::getChartHeight()
	 * @uses XiStatisticsTypeGetTopicBinaryChartPreset::getPreset()
	 * @param XiStatisticsTypeGetTopicBinaryChartPreset GetTopicBinaryChartPreset
	 * @return XiStatisticsTypeGetTopicBinaryChartPresetResponse
	 */
	public function GetTopicBinaryChartPreset(XiStatisticsTypeGetTopicBinaryChartPreset $_XiStatisticsTypeGetTopicBinaryChartPreset)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTopicBinaryChartPreset(array('TopicCode'=>$_XiStatisticsTypeGetTopicBinaryChartPreset->getTopicCode(),'StartDate'=>$_XiStatisticsTypeGetTopicBinaryChartPreset->getStartDate(),'EndDate'=>$_XiStatisticsTypeGetTopicBinaryChartPreset->getEndDate(),'ChartWidth'=>$_XiStatisticsTypeGetTopicBinaryChartPreset->getChartWidth(),'ChartHeight'=>$_XiStatisticsTypeGetTopicBinaryChartPreset->getChartHeight(),'Preset'=>$_XiStatisticsTypeGetTopicBinaryChartPreset->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTopicBinaryChartCustom
	 * Meta informations :
	 * 	- documentation : Get time-series and a custom chart in binary format for a topic.
	 * @uses XiStatisticsWsdlClass::getSoapClient()
	 * @uses XiStatisticsWsdlClass::setResult()
	 * @uses XiStatisticsWsdlClass::getResult()
	 * @uses XiStatisticsWsdlClass::saveLastError()
	 * @uses XiStatisticsTypeGetTopicBinaryChartCustom::getTopicCode()
	 * @uses XiStatisticsTypeGetTopicBinaryChartCustom::getStartDate()
	 * @uses XiStatisticsTypeGetTopicBinaryChartCustom::getEndDate()
	 * @uses XiStatisticsTypeGetTopicBinaryChartCustom::getChartWidth()
	 * @uses XiStatisticsTypeGetTopicBinaryChartCustom::getChartHeight()
	 * @uses XiStatisticsTypeGetTopicBinaryChartCustom::getDesign()
	 * @param XiStatisticsTypeGetTopicBinaryChartCustom GetTopicBinaryChartCustom
	 * @return XiStatisticsTypeGetTopicBinaryChartCustomResponse
	 */
	public function GetTopicBinaryChartCustom(XiStatisticsTypeGetTopicBinaryChartCustom $_XiStatisticsTypeGetTopicBinaryChartCustom)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTopicBinaryChartCustom(array('TopicCode'=>$_XiStatisticsTypeGetTopicBinaryChartCustom->getTopicCode(),'StartDate'=>$_XiStatisticsTypeGetTopicBinaryChartCustom->getStartDate(),'EndDate'=>$_XiStatisticsTypeGetTopicBinaryChartCustom->getEndDate(),'ChartWidth'=>$_XiStatisticsTypeGetTopicBinaryChartCustom->getChartWidth(),'ChartHeight'=>$_XiStatisticsTypeGetTopicBinaryChartCustom->getChartHeight(),'Design'=>$_XiStatisticsTypeGetTopicBinaryChartCustom->getDesign())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetChartUrl
	 * Meta informations :
	 * 	- documentation : Get chart url for a topic.
	 * @uses XiStatisticsWsdlClass::getSoapClient()
	 * @uses XiStatisticsWsdlClass::setResult()
	 * @uses XiStatisticsWsdlClass::getResult()
	 * @uses XiStatisticsWsdlClass::saveLastError()
	 * @uses XiStatisticsTypeGetChartUrl::getTopicCode()
	 * @uses XiStatisticsTypeGetChartUrl::getStartDate()
	 * @uses XiStatisticsTypeGetChartUrl::getEndDate()
	 * @uses XiStatisticsTypeGetChartUrl::getChartWidth()
	 * @uses XiStatisticsTypeGetChartUrl::getChartHeight()
	 * @param XiStatisticsTypeGetChartUrl GetChartUrl
	 * @return XiStatisticsTypeGetChartUrlResponse
	 */
	public function GetChartUrl(XiStatisticsTypeGetChartUrl $_XiStatisticsTypeGetChartUrl)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetChartUrl(array('TopicCode'=>$_XiStatisticsTypeGetChartUrl->getTopicCode(),'StartDate'=>$_XiStatisticsTypeGetChartUrl->getStartDate(),'EndDate'=>$_XiStatisticsTypeGetChartUrl->getEndDate(),'ChartWidth'=>$_XiStatisticsTypeGetChartUrl->getChartWidth(),'ChartHeight'=>$_XiStatisticsTypeGetChartUrl->getChartHeight())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetChartUrlPreset
	 * Meta informations :
	 * 	- documentation : Get chart url for a topic.
	 * @uses XiStatisticsWsdlClass::getSoapClient()
	 * @uses XiStatisticsWsdlClass::setResult()
	 * @uses XiStatisticsWsdlClass::getResult()
	 * @uses XiStatisticsWsdlClass::saveLastError()
	 * @uses XiStatisticsTypeGetChartUrlPreset::getTopicCode()
	 * @uses XiStatisticsTypeGetChartUrlPreset::getStartDate()
	 * @uses XiStatisticsTypeGetChartUrlPreset::getEndDate()
	 * @uses XiStatisticsTypeGetChartUrlPreset::getChartWidth()
	 * @uses XiStatisticsTypeGetChartUrlPreset::getChartHeight()
	 * @uses XiStatisticsTypeGetChartUrlPreset::getPreset()
	 * @param XiStatisticsTypeGetChartUrlPreset GetChartUrlPreset
	 * @return XiStatisticsTypeGetChartUrlPresetResponse
	 */
	public function GetChartUrlPreset(XiStatisticsTypeGetChartUrlPreset $_XiStatisticsTypeGetChartUrlPreset)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetChartUrlPreset(array('TopicCode'=>$_XiStatisticsTypeGetChartUrlPreset->getTopicCode(),'StartDate'=>$_XiStatisticsTypeGetChartUrlPreset->getStartDate(),'EndDate'=>$_XiStatisticsTypeGetChartUrlPreset->getEndDate(),'ChartWidth'=>$_XiStatisticsTypeGetChartUrlPreset->getChartWidth(),'ChartHeight'=>$_XiStatisticsTypeGetChartUrlPreset->getChartHeight(),'Preset'=>$_XiStatisticsTypeGetChartUrlPreset->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetChartUrlCustom
	 * Meta informations :
	 * 	- documentation : Get chart url for a topic.
	 * @uses XiStatisticsWsdlClass::getSoapClient()
	 * @uses XiStatisticsWsdlClass::setResult()
	 * @uses XiStatisticsWsdlClass::getResult()
	 * @uses XiStatisticsWsdlClass::saveLastError()
	 * @uses XiStatisticsTypeGetChartUrlCustom::getTopicCode()
	 * @uses XiStatisticsTypeGetChartUrlCustom::getStartDate()
	 * @uses XiStatisticsTypeGetChartUrlCustom::getEndDate()
	 * @uses XiStatisticsTypeGetChartUrlCustom::getChartWidth()
	 * @uses XiStatisticsTypeGetChartUrlCustom::getChartHeight()
	 * @uses XiStatisticsTypeGetChartUrlCustom::getDesign()
	 * @param XiStatisticsTypeGetChartUrlCustom GetChartUrlCustom
	 * @return XiStatisticsTypeGetChartUrlCustomResponse
	 */
	public function GetChartUrlCustom(XiStatisticsTypeGetChartUrlCustom $_XiStatisticsTypeGetChartUrlCustom)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetChartUrlCustom(array('TopicCode'=>$_XiStatisticsTypeGetChartUrlCustom->getTopicCode(),'StartDate'=>$_XiStatisticsTypeGetChartUrlCustom->getStartDate(),'EndDate'=>$_XiStatisticsTypeGetChartUrlCustom->getEndDate(),'ChartWidth'=>$_XiStatisticsTypeGetChartUrlCustom->getChartWidth(),'ChartHeight'=>$_XiStatisticsTypeGetChartUrlCustom->getChartHeight(),'Design'=>$_XiStatisticsTypeGetChartUrlCustom->getDesign())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetChartBinary
	 * Meta informations :
	 * 	- documentation : Get chart in binary format for a topic.
	 * @uses XiStatisticsWsdlClass::getSoapClient()
	 * @uses XiStatisticsWsdlClass::setResult()
	 * @uses XiStatisticsWsdlClass::getResult()
	 * @uses XiStatisticsWsdlClass::saveLastError()
	 * @uses XiStatisticsTypeGetChartBinary::getTopicCode()
	 * @uses XiStatisticsTypeGetChartBinary::getStartDate()
	 * @uses XiStatisticsTypeGetChartBinary::getEndDate()
	 * @uses XiStatisticsTypeGetChartBinary::getChartWidth()
	 * @uses XiStatisticsTypeGetChartBinary::getChartHeight()
	 * @param XiStatisticsTypeGetChartBinary GetChartBinary
	 * @return XiStatisticsTypeGetChartBinaryResponse
	 */
	public function GetChartBinary(XiStatisticsTypeGetChartBinary $_XiStatisticsTypeGetChartBinary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetChartBinary(array('TopicCode'=>$_XiStatisticsTypeGetChartBinary->getTopicCode(),'StartDate'=>$_XiStatisticsTypeGetChartBinary->getStartDate(),'EndDate'=>$_XiStatisticsTypeGetChartBinary->getEndDate(),'ChartWidth'=>$_XiStatisticsTypeGetChartBinary->getChartWidth(),'ChartHeight'=>$_XiStatisticsTypeGetChartBinary->getChartHeight())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetChartBinaryPreset
	 * Meta informations :
	 * 	- documentation : Get chart in binary format for a topic.
	 * @uses XiStatisticsWsdlClass::getSoapClient()
	 * @uses XiStatisticsWsdlClass::setResult()
	 * @uses XiStatisticsWsdlClass::getResult()
	 * @uses XiStatisticsWsdlClass::saveLastError()
	 * @uses XiStatisticsTypeGetChartBinaryPreset::getTopicCode()
	 * @uses XiStatisticsTypeGetChartBinaryPreset::getStartDate()
	 * @uses XiStatisticsTypeGetChartBinaryPreset::getEndDate()
	 * @uses XiStatisticsTypeGetChartBinaryPreset::getChartWidth()
	 * @uses XiStatisticsTypeGetChartBinaryPreset::getChartHeight()
	 * @uses XiStatisticsTypeGetChartBinaryPreset::getPreset()
	 * @param XiStatisticsTypeGetChartBinaryPreset GetChartBinaryPreset
	 * @return XiStatisticsTypeGetChartBinaryPresetResponse
	 */
	public function GetChartBinaryPreset(XiStatisticsTypeGetChartBinaryPreset $_XiStatisticsTypeGetChartBinaryPreset)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetChartBinaryPreset(array('TopicCode'=>$_XiStatisticsTypeGetChartBinaryPreset->getTopicCode(),'StartDate'=>$_XiStatisticsTypeGetChartBinaryPreset->getStartDate(),'EndDate'=>$_XiStatisticsTypeGetChartBinaryPreset->getEndDate(),'ChartWidth'=>$_XiStatisticsTypeGetChartBinaryPreset->getChartWidth(),'ChartHeight'=>$_XiStatisticsTypeGetChartBinaryPreset->getChartHeight(),'Preset'=>$_XiStatisticsTypeGetChartBinaryPreset->getPreset())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetChartBinaryCustom
	 * Meta informations :
	 * 	- documentation : Get chart in binary format for a topic.
	 * @uses XiStatisticsWsdlClass::getSoapClient()
	 * @uses XiStatisticsWsdlClass::setResult()
	 * @uses XiStatisticsWsdlClass::getResult()
	 * @uses XiStatisticsWsdlClass::saveLastError()
	 * @uses XiStatisticsTypeGetChartBinaryCustom::getTopicCode()
	 * @uses XiStatisticsTypeGetChartBinaryCustom::getStartDate()
	 * @uses XiStatisticsTypeGetChartBinaryCustom::getEndDate()
	 * @uses XiStatisticsTypeGetChartBinaryCustom::getChartWidth()
	 * @uses XiStatisticsTypeGetChartBinaryCustom::getChartHeight()
	 * @uses XiStatisticsTypeGetChartBinaryCustom::getDesign()
	 * @param XiStatisticsTypeGetChartBinaryCustom GetChartBinaryCustom
	 * @return XiStatisticsTypeGetChartBinaryCustomResponse
	 */
	public function GetChartBinaryCustom(XiStatisticsTypeGetChartBinaryCustom $_XiStatisticsTypeGetChartBinaryCustom)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetChartBinaryCustom(array('TopicCode'=>$_XiStatisticsTypeGetChartBinaryCustom->getTopicCode(),'StartDate'=>$_XiStatisticsTypeGetChartBinaryCustom->getStartDate(),'EndDate'=>$_XiStatisticsTypeGetChartBinaryCustom->getEndDate(),'ChartWidth'=>$_XiStatisticsTypeGetChartBinaryCustom->getChartWidth(),'ChartHeight'=>$_XiStatisticsTypeGetChartBinaryCustom->getChartHeight(),'Design'=>$_XiStatisticsTypeGetChartBinaryCustom->getDesign())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetChartDesign
	 * Meta informations :
	 * 	- documentation : Returns the default design class for the statistics Chart.
	 * @uses XiStatisticsWsdlClass::getSoapClient()
	 * @uses XiStatisticsWsdlClass::setResult()
	 * @uses XiStatisticsWsdlClass::getResult()
	 * @uses XiStatisticsWsdlClass::saveLastError()
	 * @param XiStatisticsTypeGetChartDesign GetChartDesign
	 * @return XiStatisticsTypeGetChartDesignResponse
	 */
	public function GetChartDesign(XiStatisticsTypeGetChartDesign $_XiStatisticsTypeGetChartDesign)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetChartDesign(array()));
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
	 * @return XiStatisticsTypeGetChartDesignResponse
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