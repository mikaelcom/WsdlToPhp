<?php
/**
 * Class file for PaylineWebPaymentServiceDo
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentServiceDo
 * @date 10/07/2012
 */
class PaylineWebPaymentServiceDo extends PaylineWebPaymentWsdlClass
{
	/**
	 * Method to call doWebPayment
	 * @uses PaylineWebPaymentWsdlClass::getSoapClient()
	 * @uses PaylineWebPaymentWsdlClass::setResult()
	 * @uses PaylineWebPaymentWsdlClass::getResult()
	 * @uses PaylineWebPaymentWsdlClass::saveLastError()
	 * @uses PaylineWebPaymentTypeDoWebPaymentRequest::getPayment()
	 * @uses PaylineWebPaymentTypeDoWebPaymentRequest::getReturnURL()
	 * @uses PaylineWebPaymentTypeDoWebPaymentRequest::getCancelURL()
	 * @uses PaylineWebPaymentTypeDoWebPaymentRequest::getOrder()
	 * @uses PaylineWebPaymentTypeDoWebPaymentRequest::getNotificationURL()
	 * @uses PaylineWebPaymentTypeDoWebPaymentRequest::getSelectedContractList()
	 * @uses PaylineWebPaymentTypeDoWebPaymentRequest::getPrivateDataList()
	 * @uses PaylineWebPaymentTypeDoWebPaymentRequest::getLanguageCode()
	 * @uses PaylineWebPaymentTypeDoWebPaymentRequest::getCustomPaymentPageCode()
	 * @uses PaylineWebPaymentTypeDoWebPaymentRequest::getBuyer()
	 * @uses PaylineWebPaymentTypeDoWebPaymentRequest::getOwner()
	 * @uses PaylineWebPaymentTypeDoWebPaymentRequest::getSecurityMode()
	 * @uses PaylineWebPaymentTypeDoWebPaymentRequest::getRecurring()
	 * @uses PaylineWebPaymentTypeDoWebPaymentRequest::getCustomPaymentTemplateURL()
	 * @param PaylineWebPaymentTypeDoWebPaymentRequest DoWebPaymentRequest
	 * @return PaylineWebPaymentTypeDoWebPaymentResponse
	 */
	public function doWebPayment(PaylineWebPaymentTypeDoWebPaymentRequest $_PaylineWebPaymentTypeDoWebPaymentRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->doWebPayment(array('payment'=>$_PaylineWebPaymentTypeDoWebPaymentRequest->getPayment(),'returnURL'=>$_PaylineWebPaymentTypeDoWebPaymentRequest->getReturnURL(),'cancelURL'=>$_PaylineWebPaymentTypeDoWebPaymentRequest->getCancelURL(),'order'=>$_PaylineWebPaymentTypeDoWebPaymentRequest->getOrder(),'notificationURL'=>$_PaylineWebPaymentTypeDoWebPaymentRequest->getNotificationURL(),'selectedContractList'=>$_PaylineWebPaymentTypeDoWebPaymentRequest->getSelectedContractList(),'privateDataList'=>$_PaylineWebPaymentTypeDoWebPaymentRequest->getPrivateDataList(),'languageCode'=>$_PaylineWebPaymentTypeDoWebPaymentRequest->getLanguageCode(),'customPaymentPageCode'=>$_PaylineWebPaymentTypeDoWebPaymentRequest->getCustomPaymentPageCode(),'buyer'=>$_PaylineWebPaymentTypeDoWebPaymentRequest->getBuyer(),'owner'=>$_PaylineWebPaymentTypeDoWebPaymentRequest->getOwner(),'securityMode'=>$_PaylineWebPaymentTypeDoWebPaymentRequest->getSecurityMode(),'recurring'=>$_PaylineWebPaymentTypeDoWebPaymentRequest->getRecurring(),'customPaymentTemplateURL'=>$_PaylineWebPaymentTypeDoWebPaymentRequest->getCustomPaymentTemplateURL())));
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
	 * @return PaylineWebPaymentTypeDoWebPaymentResponse
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