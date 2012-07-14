<?php
/**
 * Class file for PayPalServiceSet
 * @date 14/07/2012
 */
/**
 * Class PayPalServiceSet
 * @date 14/07/2012
 */
class PayPalServiceSet extends PayPalWsdlClass
{
	/**
	 * Method to call SetMobileCheckout
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeSetMobileCheckoutReq::getSetMobileCheckoutRequest()
	 * @param PayPalTypeSetMobileCheckoutReq SetMobileCheckoutReq
	 * @return PayPalTypeSetMobileCheckoutResponseType
	 */
	public function SetMobileCheckout(PayPalTypeSetMobileCheckoutReq $_PayPalTypeSetMobileCheckoutReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SetMobileCheckout(array('SetMobileCheckoutRequest'=>$_PayPalTypeSetMobileCheckoutReq->getSetMobileCheckoutRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call SetAuthFlowParam
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeSetAuthFlowParamReq::getSetAuthFlowParamRequest()
	 * @param PayPalTypeSetAuthFlowParamReq SetAuthFlowParamReq
	 * @return PayPalTypeSetAuthFlowParamResponseType
	 */
	public function SetAuthFlowParam(PayPalTypeSetAuthFlowParamReq $_PayPalTypeSetAuthFlowParamReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SetAuthFlowParam(array('SetAuthFlowParamRequest'=>$_PayPalTypeSetAuthFlowParamReq->getSetAuthFlowParamRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call SetAccessPermissions
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeSetAccessPermissionsReq::getSetAccessPermissionsRequest()
	 * @param PayPalTypeSetAccessPermissionsReq SetAccessPermissionsReq
	 * @return PayPalTypeSetAccessPermissionsResponseType
	 */
	public function SetAccessPermissions(PayPalTypeSetAccessPermissionsReq $_PayPalTypeSetAccessPermissionsReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SetAccessPermissions(array('SetAccessPermissionsRequest'=>$_PayPalTypeSetAccessPermissionsReq->getSetAccessPermissionsRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call SetExpressCheckout
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeSetExpressCheckoutReq::getSetExpressCheckoutRequest()
	 * @param PayPalTypeSetExpressCheckoutReq SetExpressCheckoutReq
	 * @return PayPalTypeSetExpressCheckoutResponseType
	 */
	public function SetExpressCheckout(PayPalTypeSetExpressCheckoutReq $_PayPalTypeSetExpressCheckoutReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SetExpressCheckout(array('SetExpressCheckoutRequest'=>$_PayPalTypeSetExpressCheckoutReq->getSetExpressCheckoutRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call SetCustomerBillingAgreement
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeSetCustomerBillingAgreementReq::getSetCustomerBillingAgreementRequest()
	 * @param PayPalTypeSetCustomerBillingAgreementReq SetCustomerBillingAgreementReq
	 * @return PayPalTypeSetCustomerBillingAgreementResponseType
	 */
	public function SetCustomerBillingAgreement(PayPalTypeSetCustomerBillingAgreementReq $_PayPalTypeSetCustomerBillingAgreementReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SetCustomerBillingAgreement(array('SetCustomerBillingAgreementRequest'=>$_PayPalTypeSetCustomerBillingAgreementReq->getSetCustomerBillingAgreementRequest())));
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
	 * @return PayPalTypeSetCustomerBillingAgreementResponseType
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