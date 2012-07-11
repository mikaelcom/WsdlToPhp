<?php
/**
 * Class file for MicrosoftTranslatorServiceDetect
 * @date 05/07/2012
 */
/**
 * Class MicrosoftTranslatorServiceDetect
 * @date 05/07/2012
 */
class MicrosoftTranslatorServiceDetect extends MicrosoftTranslatorWsdlClass
{
	/**
	 * Method to call Detect
	 * @uses MicrosoftTranslatorWsdlClass::getSoapClient()
	 * @uses MicrosoftTranslatorWsdlClass::setResult()
	 * @uses MicrosoftTranslatorWsdlClass::getResult()
	 * @uses MicrosoftTranslatorWsdlClass::saveLastError()
	 * @uses MicrosoftTranslatorTypeDetect::getAppId()
	 * @uses MicrosoftTranslatorTypeDetect::getText()
	 * @param MicrosoftTranslatorTypeDetect Detect
	 * @return MicrosoftTranslatorTypeDetectResponse
	 */
	public function Detect(MicrosoftTranslatorTypeDetect $_MicrosoftTranslatorTypeDetect)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Detect(array('appId'=>$_MicrosoftTranslatorTypeDetect->getAppId(),'text'=>$_MicrosoftTranslatorTypeDetect->getText())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DetectArray
	 * @uses MicrosoftTranslatorWsdlClass::getSoapClient()
	 * @uses MicrosoftTranslatorWsdlClass::setResult()
	 * @uses MicrosoftTranslatorWsdlClass::getResult()
	 * @uses MicrosoftTranslatorWsdlClass::saveLastError()
	 * @uses MicrosoftTranslatorTypeDetectArray::getAppId()
	 * @uses MicrosoftTranslatorTypeDetectArray::getTexts()
	 * @param MicrosoftTranslatorTypeDetectArray DetectArray
	 * @return MicrosoftTranslatorTypeDetectArrayResponse
	 */
	public function DetectArray(MicrosoftTranslatorTypeDetectArray $_MicrosoftTranslatorTypeDetectArray)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DetectArray(array('appId'=>$_MicrosoftTranslatorTypeDetectArray->getAppId(),'texts'=>$_MicrosoftTranslatorTypeDetectArray->getTexts())));
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
	 * @return MicrosoftTranslatorTypeDetectArrayResponse
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