<?php
/**
 * Class file for PaylineWebPaymentServiceUpdate
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentServiceUpdate
 * @date 10/07/2012
 */
class PaylineWebPaymentServiceUpdate extends PaylineWebPaymentWsdlClass
{
	/**
	 * Method to call updateWebWallet
	 * @uses PaylineWebPaymentWsdlClass::getSoapClient()
	 * @uses PaylineWebPaymentWsdlClass::setResult()
	 * @uses PaylineWebPaymentWsdlClass::getResult()
	 * @uses PaylineWebPaymentWsdlClass::saveLastError()
	 * @uses PaylineWebPaymentTypeUpdateWebWalletRequest::getContractNumber()
	 * @uses PaylineWebPaymentTypeUpdateWebWalletRequest::getWalletId()
	 * @uses PaylineWebPaymentTypeUpdateWebWalletRequest::getUpdatePersonalDetails()
	 * @uses PaylineWebPaymentTypeUpdateWebWalletRequest::getUpdateOwnerDetails()
	 * @uses PaylineWebPaymentTypeUpdateWebWalletRequest::getUpdatePaymentDetails()
	 * @uses PaylineWebPaymentTypeUpdateWebWalletRequest::getLanguageCode()
	 * @uses PaylineWebPaymentTypeUpdateWebWalletRequest::getCustomPaymentPageCode()
	 * @uses PaylineWebPaymentTypeUpdateWebWalletRequest::getSecurityMode()
	 * @uses PaylineWebPaymentTypeUpdateWebWalletRequest::getReturnURL()
	 * @uses PaylineWebPaymentTypeUpdateWebWalletRequest::getCancelURL()
	 * @uses PaylineWebPaymentTypeUpdateWebWalletRequest::getNotificationURL()
	 * @uses PaylineWebPaymentTypeUpdateWebWalletRequest::getPrivateDataList()
	 * @uses PaylineWebPaymentTypeUpdateWebWalletRequest::getCustomPaymentTemplateURL()
	 * @param PaylineWebPaymentTypeUpdateWebWalletRequest UpdateWebWalletRequest
	 * @return PaylineWebPaymentTypeUpdateWebWalletResponse
	 */
	public function updateWebWallet(PaylineWebPaymentTypeUpdateWebWalletRequest $_PaylineWebPaymentTypeUpdateWebWalletRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->updateWebWallet(array('contractNumber'=>$_PaylineWebPaymentTypeUpdateWebWalletRequest->getContractNumber(),'walletId'=>$_PaylineWebPaymentTypeUpdateWebWalletRequest->getWalletId(),'updatePersonalDetails'=>$_PaylineWebPaymentTypeUpdateWebWalletRequest->getUpdatePersonalDetails(),'updateOwnerDetails'=>$_PaylineWebPaymentTypeUpdateWebWalletRequest->getUpdateOwnerDetails(),'updatePaymentDetails'=>$_PaylineWebPaymentTypeUpdateWebWalletRequest->getUpdatePaymentDetails(),'languageCode'=>$_PaylineWebPaymentTypeUpdateWebWalletRequest->getLanguageCode(),'customPaymentPageCode'=>$_PaylineWebPaymentTypeUpdateWebWalletRequest->getCustomPaymentPageCode(),'securityMode'=>$_PaylineWebPaymentTypeUpdateWebWalletRequest->getSecurityMode(),'returnURL'=>$_PaylineWebPaymentTypeUpdateWebWalletRequest->getReturnURL(),'cancelURL'=>$_PaylineWebPaymentTypeUpdateWebWalletRequest->getCancelURL(),'notificationURL'=>$_PaylineWebPaymentTypeUpdateWebWalletRequest->getNotificationURL(),'privateDataList'=>$_PaylineWebPaymentTypeUpdateWebWalletRequest->getPrivateDataList(),'customPaymentTemplateURL'=>$_PaylineWebPaymentTypeUpdateWebWalletRequest->getCustomPaymentTemplateURL())));
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
	 * @return PaylineWebPaymentTypeUpdateWebWalletResponse
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