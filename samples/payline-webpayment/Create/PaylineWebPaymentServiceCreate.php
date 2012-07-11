<?php
/**
 * Class file for PaylineWebPaymentServiceCreate
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentServiceCreate
 * @date 10/07/2012
 */
class PaylineWebPaymentServiceCreate extends PaylineWebPaymentWsdlClass
{
	/**
	 * Method to call createWebWallet
	 * @uses PaylineWebPaymentWsdlClass::getSoapClient()
	 * @uses PaylineWebPaymentWsdlClass::setResult()
	 * @uses PaylineWebPaymentWsdlClass::getResult()
	 * @uses PaylineWebPaymentWsdlClass::saveLastError()
	 * @uses PaylineWebPaymentTypeCreateWebWalletRequest::getContractNumber()
	 * @uses PaylineWebPaymentTypeCreateWebWalletRequest::getSelectedContractList()
	 * @uses PaylineWebPaymentTypeCreateWebWalletRequest::getUpdatePersonalDetails()
	 * @uses PaylineWebPaymentTypeCreateWebWalletRequest::getBuyer()
	 * @uses PaylineWebPaymentTypeCreateWebWalletRequest::getOwner()
	 * @uses PaylineWebPaymentTypeCreateWebWalletRequest::getLanguageCode()
	 * @uses PaylineWebPaymentTypeCreateWebWalletRequest::getCustomPaymentPageCode()
	 * @uses PaylineWebPaymentTypeCreateWebWalletRequest::getSecurityMode()
	 * @uses PaylineWebPaymentTypeCreateWebWalletRequest::getReturnURL()
	 * @uses PaylineWebPaymentTypeCreateWebWalletRequest::getCancelURL()
	 * @uses PaylineWebPaymentTypeCreateWebWalletRequest::getNotificationURL()
	 * @uses PaylineWebPaymentTypeCreateWebWalletRequest::getPrivateDataList()
	 * @uses PaylineWebPaymentTypeCreateWebWalletRequest::getCustomPaymentTemplateURL()
	 * @param PaylineWebPaymentTypeCreateWebWalletRequest CreateWebWalletRequest
	 * @return PaylineWebPaymentTypeCreateWebWalletResponse
	 */
	public function createWebWallet(PaylineWebPaymentTypeCreateWebWalletRequest $_PaylineWebPaymentTypeCreateWebWalletRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->createWebWallet(array('contractNumber'=>$_PaylineWebPaymentTypeCreateWebWalletRequest->getContractNumber(),'selectedContractList'=>$_PaylineWebPaymentTypeCreateWebWalletRequest->getSelectedContractList(),'updatePersonalDetails'=>$_PaylineWebPaymentTypeCreateWebWalletRequest->getUpdatePersonalDetails(),'buyer'=>$_PaylineWebPaymentTypeCreateWebWalletRequest->getBuyer(),'owner'=>$_PaylineWebPaymentTypeCreateWebWalletRequest->getOwner(),'languageCode'=>$_PaylineWebPaymentTypeCreateWebWalletRequest->getLanguageCode(),'customPaymentPageCode'=>$_PaylineWebPaymentTypeCreateWebWalletRequest->getCustomPaymentPageCode(),'securityMode'=>$_PaylineWebPaymentTypeCreateWebWalletRequest->getSecurityMode(),'returnURL'=>$_PaylineWebPaymentTypeCreateWebWalletRequest->getReturnURL(),'cancelURL'=>$_PaylineWebPaymentTypeCreateWebWalletRequest->getCancelURL(),'notificationURL'=>$_PaylineWebPaymentTypeCreateWebWalletRequest->getNotificationURL(),'privateDataList'=>$_PaylineWebPaymentTypeCreateWebWalletRequest->getPrivateDataList(),'customPaymentTemplateURL'=>$_PaylineWebPaymentTypeCreateWebWalletRequest->getCustomPaymentTemplateURL())));
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
	 * @return PaylineWebPaymentTypeCreateWebWalletResponse
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