<?php
/**
 * Class file for MicrosoftTranslatorServiceGet
 * @date 05/07/2012
 */
/**
 * Class MicrosoftTranslatorServiceGet
 * @date 05/07/2012
 */
class MicrosoftTranslatorServiceGet extends MicrosoftTranslatorWsdlClass
{
	/**
	 * Method to call GetAppIdToken
	 * @uses MicrosoftTranslatorWsdlClass::getSoapClient()
	 * @uses MicrosoftTranslatorWsdlClass::setResult()
	 * @uses MicrosoftTranslatorWsdlClass::getResult()
	 * @uses MicrosoftTranslatorWsdlClass::saveLastError()
	 * @uses MicrosoftTranslatorTypeGetAppIdToken::getAppId()
	 * @uses MicrosoftTranslatorTypeGetAppIdToken::getMinRatingRead()
	 * @uses MicrosoftTranslatorTypeGetAppIdToken::getMaxRatingWrite()
	 * @uses MicrosoftTranslatorTypeGetAppIdToken::getExpireSeconds()
	 * @param MicrosoftTranslatorTypeGetAppIdToken GetAppIdToken
	 * @return MicrosoftTranslatorTypeGetAppIdTokenResponse
	 */
	public function GetAppIdToken(MicrosoftTranslatorTypeGetAppIdToken $_MicrosoftTranslatorTypeGetAppIdToken)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAppIdToken(array('appId'=>$_MicrosoftTranslatorTypeGetAppIdToken->getAppId(),'minRatingRead'=>$_MicrosoftTranslatorTypeGetAppIdToken->getMinRatingRead(),'maxRatingWrite'=>$_MicrosoftTranslatorTypeGetAppIdToken->getMaxRatingWrite(),'expireSeconds'=>$_MicrosoftTranslatorTypeGetAppIdToken->getExpireSeconds())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLanguageNames
	 * @uses MicrosoftTranslatorWsdlClass::getSoapClient()
	 * @uses MicrosoftTranslatorWsdlClass::setResult()
	 * @uses MicrosoftTranslatorWsdlClass::getResult()
	 * @uses MicrosoftTranslatorWsdlClass::saveLastError()
	 * @uses MicrosoftTranslatorTypeGetLanguageNames::getAppId()
	 * @uses MicrosoftTranslatorTypeGetLanguageNames::getLocale()
	 * @uses MicrosoftTranslatorTypeGetLanguageNames::getLanguageCodes()
	 * @param MicrosoftTranslatorTypeGetLanguageNames GetLanguageNames
	 * @return MicrosoftTranslatorTypeGetLanguageNamesResponse
	 */
	public function GetLanguageNames(MicrosoftTranslatorTypeGetLanguageNames $_MicrosoftTranslatorTypeGetLanguageNames)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLanguageNames(array('appId'=>$_MicrosoftTranslatorTypeGetLanguageNames->getAppId(),'locale'=>$_MicrosoftTranslatorTypeGetLanguageNames->getLocale(),'languageCodes'=>$_MicrosoftTranslatorTypeGetLanguageNames->getLanguageCodes())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLanguagesForSpeak
	 * @uses MicrosoftTranslatorWsdlClass::getSoapClient()
	 * @uses MicrosoftTranslatorWsdlClass::setResult()
	 * @uses MicrosoftTranslatorWsdlClass::getResult()
	 * @uses MicrosoftTranslatorWsdlClass::saveLastError()
	 * @uses MicrosoftTranslatorTypeGetLanguagesForSpeak::getAppId()
	 * @param MicrosoftTranslatorTypeGetLanguagesForSpeak GetLanguagesForSpeak
	 * @return MicrosoftTranslatorTypeGetLanguagesForSpeakResponse
	 */
	public function GetLanguagesForSpeak(MicrosoftTranslatorTypeGetLanguagesForSpeak $_MicrosoftTranslatorTypeGetLanguagesForSpeak)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLanguagesForSpeak(array('appId'=>$_MicrosoftTranslatorTypeGetLanguagesForSpeak->getAppId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetLanguagesForTranslate
	 * @uses MicrosoftTranslatorWsdlClass::getSoapClient()
	 * @uses MicrosoftTranslatorWsdlClass::setResult()
	 * @uses MicrosoftTranslatorWsdlClass::getResult()
	 * @uses MicrosoftTranslatorWsdlClass::saveLastError()
	 * @uses MicrosoftTranslatorTypeGetLanguagesForTranslate::getAppId()
	 * @param MicrosoftTranslatorTypeGetLanguagesForTranslate GetLanguagesForTranslate
	 * @return MicrosoftTranslatorTypeGetLanguagesForTranslateResponse
	 */
	public function GetLanguagesForTranslate(MicrosoftTranslatorTypeGetLanguagesForTranslate $_MicrosoftTranslatorTypeGetLanguagesForTranslate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetLanguagesForTranslate(array('appId'=>$_MicrosoftTranslatorTypeGetLanguagesForTranslate->getAppId())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTranslations
	 * @uses MicrosoftTranslatorWsdlClass::getSoapClient()
	 * @uses MicrosoftTranslatorWsdlClass::setResult()
	 * @uses MicrosoftTranslatorWsdlClass::getResult()
	 * @uses MicrosoftTranslatorWsdlClass::saveLastError()
	 * @uses MicrosoftTranslatorTypeGetTranslations::getAppId()
	 * @uses MicrosoftTranslatorTypeGetTranslations::getText()
	 * @uses MicrosoftTranslatorTypeGetTranslations::getFrom()
	 * @uses MicrosoftTranslatorTypeGetTranslations::getTo()
	 * @uses MicrosoftTranslatorTypeGetTranslations::getMaxTranslations()
	 * @uses MicrosoftTranslatorTypeGetTranslations::getOptions()
	 * @param MicrosoftTranslatorTypeGetTranslations GetTranslations
	 * @return MicrosoftTranslatorTypeGetTranslationsResponse
	 */
	public function GetTranslations(MicrosoftTranslatorTypeGetTranslations $_MicrosoftTranslatorTypeGetTranslations)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTranslations(array('appId'=>$_MicrosoftTranslatorTypeGetTranslations->getAppId(),'text'=>$_MicrosoftTranslatorTypeGetTranslations->getText(),'from'=>$_MicrosoftTranslatorTypeGetTranslations->getFrom(),'to'=>$_MicrosoftTranslatorTypeGetTranslations->getTo(),'maxTranslations'=>$_MicrosoftTranslatorTypeGetTranslations->getMaxTranslations(),'options'=>$_MicrosoftTranslatorTypeGetTranslations->getOptions())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetTranslationsArray
	 * @uses MicrosoftTranslatorWsdlClass::getSoapClient()
	 * @uses MicrosoftTranslatorWsdlClass::setResult()
	 * @uses MicrosoftTranslatorWsdlClass::getResult()
	 * @uses MicrosoftTranslatorWsdlClass::saveLastError()
	 * @uses MicrosoftTranslatorTypeGetTranslationsArray::getAppId()
	 * @uses MicrosoftTranslatorTypeGetTranslationsArray::getTexts()
	 * @uses MicrosoftTranslatorTypeGetTranslationsArray::getFrom()
	 * @uses MicrosoftTranslatorTypeGetTranslationsArray::getTo()
	 * @uses MicrosoftTranslatorTypeGetTranslationsArray::getMaxTranslations()
	 * @uses MicrosoftTranslatorTypeGetTranslationsArray::getOptions()
	 * @param MicrosoftTranslatorTypeGetTranslationsArray GetTranslationsArray
	 * @return MicrosoftTranslatorTypeGetTranslationsArrayResponse
	 */
	public function GetTranslationsArray(MicrosoftTranslatorTypeGetTranslationsArray $_MicrosoftTranslatorTypeGetTranslationsArray)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTranslationsArray(array('appId'=>$_MicrosoftTranslatorTypeGetTranslationsArray->getAppId(),'texts'=>$_MicrosoftTranslatorTypeGetTranslationsArray->getTexts(),'from'=>$_MicrosoftTranslatorTypeGetTranslationsArray->getFrom(),'to'=>$_MicrosoftTranslatorTypeGetTranslationsArray->getTo(),'maxTranslations'=>$_MicrosoftTranslatorTypeGetTranslationsArray->getMaxTranslations(),'options'=>$_MicrosoftTranslatorTypeGetTranslationsArray->getOptions())));
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
	 * @return MicrosoftTranslatorTypeGetTranslationsArrayResponse
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