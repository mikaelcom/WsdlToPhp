<?php
/**
 * Class file for PayPalServiceCreate
 * @date 14/07/2012
 */
/**
 * Class PayPalServiceCreate
 * @date 14/07/2012
 */
class PayPalServiceCreate extends PayPalWsdlClass
{
	/**
	 * Method to call CreateMobilePayment
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeCreateMobilePaymentReq::getCreateMobilePaymentRequest()
	 * @param PayPalTypeCreateMobilePaymentReq CreateMobilePaymentReq
	 * @return PayPalTypeCreateMobilePaymentResponseType
	 */
	public function CreateMobilePayment(PayPalTypeCreateMobilePaymentReq $_PayPalTypeCreateMobilePaymentReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateMobilePayment(array('CreateMobilePaymentRequest'=>$_PayPalTypeCreateMobilePaymentReq->getCreateMobilePaymentRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call CreateBillingAgreement
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeCreateBillingAgreementReq::getCreateBillingAgreementRequest()
	 * @param PayPalTypeCreateBillingAgreementReq CreateBillingAgreementReq
	 * @return PayPalTypeCreateBillingAgreementResponseType
	 */
	public function CreateBillingAgreement(PayPalTypeCreateBillingAgreementReq $_PayPalTypeCreateBillingAgreementReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateBillingAgreement(array('CreateBillingAgreementRequest'=>$_PayPalTypeCreateBillingAgreementReq->getCreateBillingAgreementRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call CreateRecurringPaymentsProfile
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeCreateRecurringPaymentsProfileReq::getCreateRecurringPaymentsProfileRequest()
	 * @param PayPalTypeCreateRecurringPaymentsProfileReq CreateRecurringPaymentsProfileReq
	 * @return PayPalTypeCreateRecurringPaymentsProfileResponseType
	 */
	public function CreateRecurringPaymentsProfile(PayPalTypeCreateRecurringPaymentsProfileReq $_PayPalTypeCreateRecurringPaymentsProfileReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateRecurringPaymentsProfile(array('CreateRecurringPaymentsProfileRequest'=>$_PayPalTypeCreateRecurringPaymentsProfileReq->getCreateRecurringPaymentsProfileRequest())));
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
	 * @return PayPalTypeCreateRecurringPaymentsProfileResponseType
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