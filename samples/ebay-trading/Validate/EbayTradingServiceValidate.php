<?php
/**
 * Class file for EbayTradingServiceValidate
 * @date 04/07/2012
 */
/**
 * Class EbayTradingServiceValidate
 * @date 04/07/2012
 */
class EbayTradingServiceValidate extends EbayTradingWsdlClass
{
	/**
	 * Method to call ValidateChallengeInput
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeValidateChallengeInputRequestType::getChallengeToken()
	 * @uses EbayTradingTypeValidateChallengeInputRequestType::getUserInput()
	 * @uses EbayTradingTypeValidateChallengeInputRequestType::getKeepTokenValid()
	 * @param EbayTradingTypeValidateChallengeInputRequestType ValidateChallengeInputRequestType
	 * @return EbayTradingTypeValidateChallengeInputResponseType
	 */
	public function ValidateChallengeInput(EbayTradingTypeValidateChallengeInputRequestType $_EbayTradingTypeValidateChallengeInputRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ValidateChallengeInput(array('ChallengeToken'=>$_EbayTradingTypeValidateChallengeInputRequestType->getChallengeToken(),'UserInput'=>$_EbayTradingTypeValidateChallengeInputRequestType->getUserInput(),'KeepTokenValid'=>$_EbayTradingTypeValidateChallengeInputRequestType->getKeepTokenValid())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ValidateTestUserRegistration
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeValidateTestUserRegistrationRequestType::getFeedbackScore()
	 * @uses EbayTradingTypeValidateTestUserRegistrationRequestType::getRegistrationDate()
	 * @uses EbayTradingTypeValidateTestUserRegistrationRequestType::getSubscribeSA()
	 * @uses EbayTradingTypeValidateTestUserRegistrationRequestType::getSubscribeSAPro()
	 * @uses EbayTradingTypeValidateTestUserRegistrationRequestType::getSubscribeSM()
	 * @uses EbayTradingTypeValidateTestUserRegistrationRequestType::getSubscribeSMPro()
	 * @param EbayTradingTypeValidateTestUserRegistrationRequestType ValidateTestUserRegistrationRequestType
	 * @return EbayTradingTypeValidateTestUserRegistrationResponseType
	 */
	public function ValidateTestUserRegistration(EbayTradingTypeValidateTestUserRegistrationRequestType $_EbayTradingTypeValidateTestUserRegistrationRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ValidateTestUserRegistration(array('FeedbackScore'=>$_EbayTradingTypeValidateTestUserRegistrationRequestType->getFeedbackScore(),'RegistrationDate'=>$_EbayTradingTypeValidateTestUserRegistrationRequestType->getRegistrationDate(),'SubscribeSA'=>$_EbayTradingTypeValidateTestUserRegistrationRequestType->getSubscribeSA(),'SubscribeSAPro'=>$_EbayTradingTypeValidateTestUserRegistrationRequestType->getSubscribeSAPro(),'SubscribeSM'=>$_EbayTradingTypeValidateTestUserRegistrationRequestType->getSubscribeSM(),'SubscribeSMPro'=>$_EbayTradingTypeValidateTestUserRegistrationRequestType->getSubscribeSMPro())));
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
	 * @return EbayTradingTypeValidateTestUserRegistrationResponseType
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