<?php
/**
 * Class file for MicrosoftTranslatorServiceBreak
 * @date 05/07/2012
 */
/**
 * Class MicrosoftTranslatorServiceBreak
 * @date 05/07/2012
 */
class MicrosoftTranslatorServiceBreak extends MicrosoftTranslatorWsdlClass
{
	/**
	 * Method to call BreakSentences
	 * @uses MicrosoftTranslatorWsdlClass::getSoapClient()
	 * @uses MicrosoftTranslatorWsdlClass::setResult()
	 * @uses MicrosoftTranslatorWsdlClass::getResult()
	 * @uses MicrosoftTranslatorWsdlClass::saveLastError()
	 * @uses MicrosoftTranslatorTypeBreakSentences::getAppId()
	 * @uses MicrosoftTranslatorTypeBreakSentences::getText()
	 * @uses MicrosoftTranslatorTypeBreakSentences::getLanguage()
	 * @param MicrosoftTranslatorTypeBreakSentences BreakSentences
	 * @return MicrosoftTranslatorTypeBreakSentencesResponse
	 */
	public function BreakSentences(MicrosoftTranslatorTypeBreakSentences $_MicrosoftTranslatorTypeBreakSentences)
	{
		try
		{
			$this->setResult(self::getSoapClient()->BreakSentences(array('appId'=>$_MicrosoftTranslatorTypeBreakSentences->getAppId(),'text'=>$_MicrosoftTranslatorTypeBreakSentences->getText(),'language'=>$_MicrosoftTranslatorTypeBreakSentences->getLanguage())));
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
	 * @return MicrosoftTranslatorTypeBreakSentencesResponse
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