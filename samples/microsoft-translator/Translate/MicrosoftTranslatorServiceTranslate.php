<?php
/**
 * Class file for MicrosoftTranslatorServiceTranslate
 * @date 05/07/2012
 */
/**
 * Class MicrosoftTranslatorServiceTranslate
 * @date 05/07/2012
 */
class MicrosoftTranslatorServiceTranslate extends MicrosoftTranslatorWsdlClass
{
	/**
	 * Method to call Translate
	 * @uses MicrosoftTranslatorWsdlClass::getSoapClient()
	 * @uses MicrosoftTranslatorWsdlClass::setResult()
	 * @uses MicrosoftTranslatorWsdlClass::getResult()
	 * @uses MicrosoftTranslatorWsdlClass::saveLastError()
	 * @uses MicrosoftTranslatorTypeTranslate::getAppId()
	 * @uses MicrosoftTranslatorTypeTranslate::getText()
	 * @uses MicrosoftTranslatorTypeTranslate::getFrom()
	 * @uses MicrosoftTranslatorTypeTranslate::getTo()
	 * @uses MicrosoftTranslatorTypeTranslate::getContentType()
	 * @uses MicrosoftTranslatorTypeTranslate::getCategory()
	 * @param MicrosoftTranslatorTypeTranslate Translate
	 * @return MicrosoftTranslatorTypeTranslateResponse
	 */
	public function Translate(MicrosoftTranslatorTypeTranslate $_MicrosoftTranslatorTypeTranslate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Translate(array('appId'=>$_MicrosoftTranslatorTypeTranslate->getAppId(),'text'=>$_MicrosoftTranslatorTypeTranslate->getText(),'from'=>$_MicrosoftTranslatorTypeTranslate->getFrom(),'to'=>$_MicrosoftTranslatorTypeTranslate->getTo(),'contentType'=>$_MicrosoftTranslatorTypeTranslate->getContentType(),'category'=>$_MicrosoftTranslatorTypeTranslate->getCategory())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call TranslateArray
	 * @uses MicrosoftTranslatorWsdlClass::getSoapClient()
	 * @uses MicrosoftTranslatorWsdlClass::setResult()
	 * @uses MicrosoftTranslatorWsdlClass::getResult()
	 * @uses MicrosoftTranslatorWsdlClass::saveLastError()
	 * @uses MicrosoftTranslatorTypeTranslateArray::getAppId()
	 * @uses MicrosoftTranslatorTypeTranslateArray::getTexts()
	 * @uses MicrosoftTranslatorTypeTranslateArray::getFrom()
	 * @uses MicrosoftTranslatorTypeTranslateArray::getTo()
	 * @uses MicrosoftTranslatorTypeTranslateArray::getOptions()
	 * @param MicrosoftTranslatorTypeTranslateArray TranslateArray
	 * @return MicrosoftTranslatorTypeTranslateArrayResponse
	 */
	public function TranslateArray(MicrosoftTranslatorTypeTranslateArray $_MicrosoftTranslatorTypeTranslateArray)
	{
		try
		{
			$this->setResult(self::getSoapClient()->TranslateArray(array('appId'=>$_MicrosoftTranslatorTypeTranslateArray->getAppId(),'texts'=>$_MicrosoftTranslatorTypeTranslateArray->getTexts(),'from'=>$_MicrosoftTranslatorTypeTranslateArray->getFrom(),'to'=>$_MicrosoftTranslatorTypeTranslateArray->getTo(),'options'=>$_MicrosoftTranslatorTypeTranslateArray->getOptions())));
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
	 * @return MicrosoftTranslatorTypeTranslateArrayResponse
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