<?php
/**
 * Class file for MicrosoftTranslatorServiceSpeak
 * @date 05/07/2012
 */
/**
 * Class MicrosoftTranslatorServiceSpeak
 * @date 05/07/2012
 */
class MicrosoftTranslatorServiceSpeak extends MicrosoftTranslatorWsdlClass
{
	/**
	 * Method to call Speak
	 * @uses MicrosoftTranslatorWsdlClass::getSoapClient()
	 * @uses MicrosoftTranslatorWsdlClass::setResult()
	 * @uses MicrosoftTranslatorWsdlClass::getResult()
	 * @uses MicrosoftTranslatorWsdlClass::saveLastError()
	 * @uses MicrosoftTranslatorTypeSpeak::getAppId()
	 * @uses MicrosoftTranslatorTypeSpeak::getText()
	 * @uses MicrosoftTranslatorTypeSpeak::getLanguage()
	 * @uses MicrosoftTranslatorTypeSpeak::getFormat()
	 * @uses MicrosoftTranslatorTypeSpeak::getOptions()
	 * @param MicrosoftTranslatorTypeSpeak Speak
	 * @return MicrosoftTranslatorTypeSpeakResponse
	 */
	public function Speak(MicrosoftTranslatorTypeSpeak $_MicrosoftTranslatorTypeSpeak)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Speak(array('appId'=>$_MicrosoftTranslatorTypeSpeak->getAppId(),'text'=>$_MicrosoftTranslatorTypeSpeak->getText(),'language'=>$_MicrosoftTranslatorTypeSpeak->getLanguage(),'format'=>$_MicrosoftTranslatorTypeSpeak->getFormat(),'options'=>$_MicrosoftTranslatorTypeSpeak->getOptions())));
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
	 * @return MicrosoftTranslatorTypeSpeakResponse
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