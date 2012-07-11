<?php
/**
 * Class file for MicrosoftTranslatorServiceAdd
 * @date 05/07/2012
 */
/**
 * Class MicrosoftTranslatorServiceAdd
 * @date 05/07/2012
 */
class MicrosoftTranslatorServiceAdd extends MicrosoftTranslatorWsdlClass
{
	/**
	 * Method to call AddTranslation
	 * @uses MicrosoftTranslatorWsdlClass::getSoapClient()
	 * @uses MicrosoftTranslatorWsdlClass::setResult()
	 * @uses MicrosoftTranslatorWsdlClass::getResult()
	 * @uses MicrosoftTranslatorWsdlClass::saveLastError()
	 * @uses MicrosoftTranslatorTypeAddTranslation::getAppId()
	 * @uses MicrosoftTranslatorTypeAddTranslation::getOriginalText()
	 * @uses MicrosoftTranslatorTypeAddTranslation::getTranslatedText()
	 * @uses MicrosoftTranslatorTypeAddTranslation::getFrom()
	 * @uses MicrosoftTranslatorTypeAddTranslation::getTo()
	 * @uses MicrosoftTranslatorTypeAddTranslation::getRating()
	 * @uses MicrosoftTranslatorTypeAddTranslation::getContentType()
	 * @uses MicrosoftTranslatorTypeAddTranslation::getCategory()
	 * @uses MicrosoftTranslatorTypeAddTranslation::getUser()
	 * @uses MicrosoftTranslatorTypeAddTranslation::getUri()
	 * @param MicrosoftTranslatorTypeAddTranslation AddTranslation
	 * @return MicrosoftTranslatorTypeAddTranslationResponse
	 */
	public function AddTranslation(MicrosoftTranslatorTypeAddTranslation $_MicrosoftTranslatorTypeAddTranslation)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddTranslation(array('appId'=>$_MicrosoftTranslatorTypeAddTranslation->getAppId(),'originalText'=>$_MicrosoftTranslatorTypeAddTranslation->getOriginalText(),'translatedText'=>$_MicrosoftTranslatorTypeAddTranslation->getTranslatedText(),'from'=>$_MicrosoftTranslatorTypeAddTranslation->getFrom(),'to'=>$_MicrosoftTranslatorTypeAddTranslation->getTo(),'rating'=>$_MicrosoftTranslatorTypeAddTranslation->getRating(),'contentType'=>$_MicrosoftTranslatorTypeAddTranslation->getContentType(),'category'=>$_MicrosoftTranslatorTypeAddTranslation->getCategory(),'user'=>$_MicrosoftTranslatorTypeAddTranslation->getUser(),'uri'=>$_MicrosoftTranslatorTypeAddTranslation->getUri())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call AddTranslationArray
	 * @uses MicrosoftTranslatorWsdlClass::getSoapClient()
	 * @uses MicrosoftTranslatorWsdlClass::setResult()
	 * @uses MicrosoftTranslatorWsdlClass::getResult()
	 * @uses MicrosoftTranslatorWsdlClass::saveLastError()
	 * @uses MicrosoftTranslatorTypeAddTranslationArray::getAppId()
	 * @uses MicrosoftTranslatorTypeAddTranslationArray::getTranslations()
	 * @uses MicrosoftTranslatorTypeAddTranslationArray::getFrom()
	 * @uses MicrosoftTranslatorTypeAddTranslationArray::getTo()
	 * @uses MicrosoftTranslatorTypeAddTranslationArray::getOptions()
	 * @param MicrosoftTranslatorTypeAddTranslationArray AddTranslationArray
	 * @return MicrosoftTranslatorTypeAddTranslationArrayResponse
	 */
	public function AddTranslationArray(MicrosoftTranslatorTypeAddTranslationArray $_MicrosoftTranslatorTypeAddTranslationArray)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddTranslationArray(array('appId'=>$_MicrosoftTranslatorTypeAddTranslationArray->getAppId(),'translations'=>$_MicrosoftTranslatorTypeAddTranslationArray->getTranslations(),'from'=>$_MicrosoftTranslatorTypeAddTranslationArray->getFrom(),'to'=>$_MicrosoftTranslatorTypeAddTranslationArray->getTo(),'options'=>$_MicrosoftTranslatorTypeAddTranslationArray->getOptions())));
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
	 * @return MicrosoftTranslatorTypeAddTranslationArrayResponse
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