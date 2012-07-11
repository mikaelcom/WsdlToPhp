<?php
/**
 * Class file for XiChartServiceGet
 * @date 08/07/2012
 */
/**
 * Class XiChartServiceGet
 * @date 08/07/2012
 */
class XiChartServiceGet extends XiChartWsdlClass
{
	/**
	 * Method to call GetChartDesign
	 * Meta informations :
	 * 	- documentation : Returns the default settings for the historical Chart.
	 * @uses XiChartWsdlClass::getSoapClient()
	 * @uses XiChartWsdlClass::setResult()
	 * @uses XiChartWsdlClass::getResult()
	 * @uses XiChartWsdlClass::saveLastError()
	 * @uses XiChartTypeGetChartDesign::getType()
	 * @param XiChartTypeGetChartDesign GetChartDesign
	 * @return XiChartTypeGetChartDesignResponse
	 */
	public function GetChartDesign(XiChartTypeGetChartDesign $_XiChartTypeGetChartDesign)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetChartDesign(array('Type'=>$_XiChartTypeGetChartDesign->getType())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetPresetChartDesign
	 * Meta informations :
	 * 	- documentation : Returns the default settings for the historical Chart.
	 * @uses XiChartWsdlClass::getSoapClient()
	 * @uses XiChartWsdlClass::setResult()
	 * @uses XiChartWsdlClass::getResult()
	 * @uses XiChartWsdlClass::saveLastError()
	 * @uses XiChartTypeGetPresetChartDesign::getType()
	 * @uses XiChartTypeGetPresetChartDesign::getPreset()
	 * @param XiChartTypeGetPresetChartDesign GetPresetChartDesign
	 * @return XiChartTypeGetPresetChartDesignResponse
	 */
	public function GetPresetChartDesign(XiChartTypeGetPresetChartDesign $_XiChartTypeGetPresetChartDesign)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetPresetChartDesign(array('Type'=>$_XiChartTypeGetPresetChartDesign->getType(),'Preset'=>$_XiChartTypeGetPresetChartDesign->getPreset())));
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
	 * @return XiChartTypeGetPresetChartDesignResponse
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