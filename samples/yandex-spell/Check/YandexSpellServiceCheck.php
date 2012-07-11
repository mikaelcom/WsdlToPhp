<?php
/**
 * Class file for YandexSpellServiceCheck
 * @date 10/07/2012
 */
/**
 * Class YandexSpellServiceCheck
 * @date 10/07/2012
 */
class YandexSpellServiceCheck extends YandexSpellWsdlClass
{
	/**
	 * Method to call checkText
	 * @uses YandexSpellWsdlClass::getSoapClient()
	 * @uses YandexSpellWsdlClass::setResult()
	 * @uses YandexSpellWsdlClass::getResult()
	 * @uses YandexSpellWsdlClass::saveLastError()
	 * @uses YandexSpellTypeCheckTextRequest::getText()
	 * @uses YandexSpellTypeCheckTextRequest::getLang()
	 * @uses YandexSpellTypeCheckTextRequest::getOptions()
	 * @uses YandexSpellTypeCheckTextRequest::getFormat()
	 * @param YandexSpellTypeCheckTextRequest CheckTextRequest
	 * @return YandexSpellTypeCheckTextResponse
	 */
	public function checkText(YandexSpellTypeCheckTextRequest $_YandexSpellTypeCheckTextRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->checkText(array('text'=>$_YandexSpellTypeCheckTextRequest->getText(),'lang'=>$_YandexSpellTypeCheckTextRequest->getLang(),'options'=>$_YandexSpellTypeCheckTextRequest->getOptions(),'format'=>$_YandexSpellTypeCheckTextRequest->getFormat())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call checkTexts
	 * @uses YandexSpellWsdlClass::getSoapClient()
	 * @uses YandexSpellWsdlClass::setResult()
	 * @uses YandexSpellWsdlClass::getResult()
	 * @uses YandexSpellWsdlClass::saveLastError()
	 * @uses YandexSpellTypeCheckTextsRequest::getText()
	 * @uses YandexSpellTypeCheckTextsRequest::getLang()
	 * @uses YandexSpellTypeCheckTextsRequest::getOptions()
	 * @uses YandexSpellTypeCheckTextsRequest::getFormat()
	 * @param YandexSpellTypeCheckTextsRequest CheckTextsRequest
	 * @return YandexSpellTypeCheckTextsResponse
	 */
	public function checkTexts(YandexSpellTypeCheckTextsRequest $_YandexSpellTypeCheckTextsRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->checkTexts(array('text'=>$_YandexSpellTypeCheckTextsRequest->getText(),'lang'=>$_YandexSpellTypeCheckTextsRequest->getLang(),'options'=>$_YandexSpellTypeCheckTextsRequest->getOptions(),'format'=>$_YandexSpellTypeCheckTextsRequest->getFormat())));
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
	 * @return YandexSpellTypeCheckTextsResponse
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