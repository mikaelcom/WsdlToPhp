<?php
/**
 * Class file for XWeb1003ServiceConvert
 * @date 09/07/2012
 */
/**
 * Class XWeb1003ServiceConvert
 * @date 09/07/2012
 */
class XWeb1003ServiceConvert extends XWeb1003WsdlClass
{
	/**
	 * Method to call ConvertMISMOtoFannieMae
	 * @uses XWeb1003WsdlClass::getSoapClient()
	 * @uses XWeb1003WsdlClass::setResult()
	 * @uses XWeb1003WsdlClass::getResult()
	 * @uses XWeb1003WsdlClass::saveLastError()
	 * @uses XWeb1003TypeConvertMISMOtoFannieMaeRequest::getApplication()
	 * @param XWeb1003TypeConvertMISMOtoFannieMaeRequest ConvertMISMOtoFannieMaeRequest
	 * @return XWeb1003TypeConvertMISMOtoFannieMaeResponse
	 */
	public function ConvertMISMOtoFannieMae(XWeb1003TypeConvertMISMOtoFannieMaeRequest $_XWeb1003TypeConvertMISMOtoFannieMaeRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ConvertMISMOtoFannieMae(array('Application'=>$_XWeb1003TypeConvertMISMOtoFannieMaeRequest->getApplication())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ConvertFannieMaetoMISMO
	 * @uses XWeb1003WsdlClass::getSoapClient()
	 * @uses XWeb1003WsdlClass::setResult()
	 * @uses XWeb1003WsdlClass::getResult()
	 * @uses XWeb1003WsdlClass::saveLastError()
	 * @uses XWeb1003TypeConvertFannieMaetoMISMORequest::getApplication()
	 * @param XWeb1003TypeConvertFannieMaetoMISMORequest ConvertFannieMaetoMISMORequest
	 * @return XWeb1003TypeConvertFannieMaetoMISMOResponse
	 */
	public function ConvertFannieMaetoMISMO(XWeb1003TypeConvertFannieMaetoMISMORequest $_XWeb1003TypeConvertFannieMaetoMISMORequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ConvertFannieMaetoMISMO(array('Application'=>$_XWeb1003TypeConvertFannieMaetoMISMORequest->getApplication())));
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
	 * @return XWeb1003TypeConvertFannieMaetoMISMOResponse
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