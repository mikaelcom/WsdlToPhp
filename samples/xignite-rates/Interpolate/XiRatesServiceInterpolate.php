<?php
/**
 * Class file for XiRatesServiceInterpolate
 * @date 08/07/2012
 */
/**
 * Class XiRatesServiceInterpolate
 * @date 08/07/2012
 */
class XiRatesServiceInterpolate extends XiRatesWsdlClass
{
	/**
	 * Method to call Interpolate
	 * Meta informations :
	 * 	- documentation : Interpolate a data series using various methodologies.
	 * @uses XiRatesWsdlClass::getSoapClient()
	 * @uses XiRatesWsdlClass::setResult()
	 * @uses XiRatesWsdlClass::getResult()
	 * @uses XiRatesWsdlClass::saveLastError()
	 * @uses XiRatesTypeInterpolate::getMethodology()
	 * @uses XiRatesTypeInterpolate::getKnownXValues()
	 * @uses XiRatesTypeInterpolate::getKnownYValues()
	 * @uses XiRatesTypeInterpolate::getXValuesToPlot()
	 * @param XiRatesTypeInterpolate Interpolate
	 * @return XiRatesTypeInterpolateResponse
	 */
	public function Interpolate(XiRatesTypeInterpolate $_XiRatesTypeInterpolate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Interpolate(array('Methodology'=>$_XiRatesTypeInterpolate->getMethodology(),'KnownXValues'=>$_XiRatesTypeInterpolate->getKnownXValues(),'KnownYValues'=>$_XiRatesTypeInterpolate->getKnownYValues(),'XValuesToPlot'=>$_XiRatesTypeInterpolate->getXValuesToPlot())));
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
	 * @return XiRatesTypeInterpolateResponse
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