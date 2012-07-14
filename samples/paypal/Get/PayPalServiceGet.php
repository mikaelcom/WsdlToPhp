<?php
/**
 * Class file for PayPalServiceGet
 * @date 14/07/2012
 */
/**
 * Class PayPalServiceGet
 * @date 14/07/2012
 */
class PayPalServiceGet extends PayPalWsdlClass
{
	/**
	 * Method to call GetTransactionDetails
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeGetTransactionDetailsReq::getGetTransactionDetailsRequest()
	 * @param PayPalTypeGetTransactionDetailsReq GetTransactionDetailsReq
	 * @return PayPalTypeGetTransactionDetailsResponseType
	 */
	public function GetTransactionDetails(PayPalTypeGetTransactionDetailsReq $_PayPalTypeGetTransactionDetailsReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetTransactionDetails(array('GetTransactionDetailsRequest'=>$_PayPalTypeGetTransactionDetailsReq->getGetTransactionDetailsRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetBoardingDetails
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeGetBoardingDetailsReq::getGetBoardingDetailsRequest()
	 * @param PayPalTypeGetBoardingDetailsReq GetBoardingDetailsReq
	 * @return PayPalTypeGetBoardingDetailsResponseType
	 */
	public function GetBoardingDetails(PayPalTypeGetBoardingDetailsReq $_PayPalTypeGetBoardingDetailsReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetBoardingDetails(array('GetBoardingDetailsRequest'=>$_PayPalTypeGetBoardingDetailsReq->getGetBoardingDetailsRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMobileStatus
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeGetMobileStatusReq::getGetMobileStatusRequest()
	 * @param PayPalTypeGetMobileStatusReq GetMobileStatusReq
	 * @return PayPalTypeGetMobileStatusResponseType
	 */
	public function GetMobileStatus(PayPalTypeGetMobileStatusReq $_PayPalTypeGetMobileStatusReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMobileStatus(array('GetMobileStatusRequest'=>$_PayPalTypeGetMobileStatusReq->getGetMobileStatusRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetBalance
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeGetBalanceReq::getGetBalanceRequest()
	 * @param PayPalTypeGetBalanceReq GetBalanceReq
	 * @return PayPalTypeGetBalanceResponseType
	 */
	public function GetBalance(PayPalTypeGetBalanceReq $_PayPalTypeGetBalanceReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetBalance(array('GetBalanceRequest'=>$_PayPalTypeGetBalanceReq->getGetBalanceRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetPalDetails
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeGetPalDetailsReq::getGetPalDetailsRequest()
	 * @param PayPalTypeGetPalDetailsReq GetPalDetailsReq
	 * @return PayPalTypeGetPalDetailsResponseType
	 */
	public function GetPalDetails(PayPalTypeGetPalDetailsReq $_PayPalTypeGetPalDetailsReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetPalDetails(array('GetPalDetailsRequest'=>$_PayPalTypeGetPalDetailsReq->getGetPalDetailsRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAuthDetails
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeGetAuthDetailsReq::getGetAuthDetailsRequest()
	 * @param PayPalTypeGetAuthDetailsReq GetAuthDetailsReq
	 * @return PayPalTypeGetAuthDetailsResponseType
	 */
	public function GetAuthDetails(PayPalTypeGetAuthDetailsReq $_PayPalTypeGetAuthDetailsReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAuthDetails(array('GetAuthDetailsRequest'=>$_PayPalTypeGetAuthDetailsReq->getGetAuthDetailsRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAccessPermissionDetails
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeGetAccessPermissionDetailsReq::getGetAccessPermissionDetailsRequest()
	 * @param PayPalTypeGetAccessPermissionDetailsReq GetAccessPermissionDetailsReq
	 * @return PayPalTypeGetAccessPermissionDetailsResponseType
	 */
	public function GetAccessPermissionDetails(PayPalTypeGetAccessPermissionDetailsReq $_PayPalTypeGetAccessPermissionDetailsReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAccessPermissionDetails(array('GetAccessPermissionDetailsRequest'=>$_PayPalTypeGetAccessPermissionDetailsReq->getGetAccessPermissionDetailsRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetIncentiveEvaluation
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeGetIncentiveEvaluationReq::getGetIncentiveEvaluationRequest()
	 * @param PayPalTypeGetIncentiveEvaluationReq GetIncentiveEvaluationReq
	 * @return PayPalTypeGetIncentiveEvaluationResponseType
	 */
	public function GetIncentiveEvaluation(PayPalTypeGetIncentiveEvaluationReq $_PayPalTypeGetIncentiveEvaluationReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetIncentiveEvaluation(array('GetIncentiveEvaluationRequest'=>$_PayPalTypeGetIncentiveEvaluationReq->getGetIncentiveEvaluationRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetExpressCheckoutDetails
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeGetExpressCheckoutDetailsReq::getGetExpressCheckoutDetailsRequest()
	 * @param PayPalTypeGetExpressCheckoutDetailsReq GetExpressCheckoutDetailsReq
	 * @return PayPalTypeGetExpressCheckoutDetailsResponseType
	 */
	public function GetExpressCheckoutDetails(PayPalTypeGetExpressCheckoutDetailsReq $_PayPalTypeGetExpressCheckoutDetailsReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetExpressCheckoutDetails(array('GetExpressCheckoutDetailsRequest'=>$_PayPalTypeGetExpressCheckoutDetailsReq->getGetExpressCheckoutDetailsRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetBillingAgreementCustomerDetails
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeGetBillingAgreementCustomerDetailsReq::getGetBillingAgreementCustomerDetailsRequest()
	 * @param PayPalTypeGetBillingAgreementCustomerDetailsReq GetBillingAgreementCustomerDetailsReq
	 * @return PayPalTypeGetBillingAgreementCustomerDetailsResponseType
	 */
	public function GetBillingAgreementCustomerDetails(PayPalTypeGetBillingAgreementCustomerDetailsReq $_PayPalTypeGetBillingAgreementCustomerDetailsReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetBillingAgreementCustomerDetails(array('GetBillingAgreementCustomerDetailsRequest'=>$_PayPalTypeGetBillingAgreementCustomerDetailsReq->getGetBillingAgreementCustomerDetailsRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetRecurringPaymentsProfileDetails
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeGetRecurringPaymentsProfileDetailsReq::getGetRecurringPaymentsProfileDetailsRequest()
	 * @param PayPalTypeGetRecurringPaymentsProfileDetailsReq GetRecurringPaymentsProfileDetailsReq
	 * @return PayPalTypeGetRecurringPaymentsProfileDetailsResponseType
	 */
	public function GetRecurringPaymentsProfileDetails(PayPalTypeGetRecurringPaymentsProfileDetailsReq $_PayPalTypeGetRecurringPaymentsProfileDetailsReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetRecurringPaymentsProfileDetails(array('GetRecurringPaymentsProfileDetailsRequest'=>$_PayPalTypeGetRecurringPaymentsProfileDetailsReq->getGetRecurringPaymentsProfileDetailsRequest())));
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
	 * @return PayPalTypeGetRecurringPaymentsProfileDetailsResponseType
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