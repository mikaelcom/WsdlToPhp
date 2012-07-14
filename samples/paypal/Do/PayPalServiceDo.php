<?php
/**
 * Class file for PayPalServiceDo
 * @date 14/07/2012
 */
/**
 * Class PayPalServiceDo
 * @date 14/07/2012
 */
class PayPalServiceDo extends PayPalWsdlClass
{
	/**
	 * Method to call DoMobileCheckoutPayment
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeDoMobileCheckoutPaymentReq::getDoMobileCheckoutPaymentRequest()
	 * @param PayPalTypeDoMobileCheckoutPaymentReq DoMobileCheckoutPaymentReq
	 * @return PayPalTypeDoMobileCheckoutPaymentResponseType
	 */
	public function DoMobileCheckoutPayment(PayPalTypeDoMobileCheckoutPaymentReq $_PayPalTypeDoMobileCheckoutPaymentReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DoMobileCheckoutPayment(array('DoMobileCheckoutPaymentRequest'=>$_PayPalTypeDoMobileCheckoutPaymentReq->getDoMobileCheckoutPaymentRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DoExpressCheckoutPayment
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeDoExpressCheckoutPaymentReq::getDoExpressCheckoutPaymentRequest()
	 * @param PayPalTypeDoExpressCheckoutPaymentReq DoExpressCheckoutPaymentReq
	 * @return PayPalTypeDoExpressCheckoutPaymentResponseType
	 */
	public function DoExpressCheckoutPayment(PayPalTypeDoExpressCheckoutPaymentReq $_PayPalTypeDoExpressCheckoutPaymentReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DoExpressCheckoutPayment(array('DoExpressCheckoutPaymentRequest'=>$_PayPalTypeDoExpressCheckoutPaymentReq->getDoExpressCheckoutPaymentRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DoUATPExpressCheckoutPayment
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeDoUATPExpressCheckoutPaymentReq::getDoUATPExpressCheckoutPaymentRequest()
	 * @param PayPalTypeDoUATPExpressCheckoutPaymentReq DoUATPExpressCheckoutPaymentReq
	 * @return PayPalTypeDoUATPExpressCheckoutPaymentResponseType
	 */
	public function DoUATPExpressCheckoutPayment(PayPalTypeDoUATPExpressCheckoutPaymentReq $_PayPalTypeDoUATPExpressCheckoutPaymentReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DoUATPExpressCheckoutPayment(array('DoUATPExpressCheckoutPaymentRequest'=>$_PayPalTypeDoUATPExpressCheckoutPaymentReq->getDoUATPExpressCheckoutPaymentRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DoDirectPayment
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeDoDirectPaymentReq::getDoDirectPaymentRequest()
	 * @param PayPalTypeDoDirectPaymentReq DoDirectPaymentReq
	 * @return PayPalTypeDoDirectPaymentResponseType
	 */
	public function DoDirectPayment(PayPalTypeDoDirectPaymentReq $_PayPalTypeDoDirectPaymentReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DoDirectPayment(array('DoDirectPaymentRequest'=>$_PayPalTypeDoDirectPaymentReq->getDoDirectPaymentRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DoCancel
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeDoCancelReq::getDoCancelRequest()
	 * @param PayPalTypeDoCancelReq DoCancelReq
	 * @return PayPalTypeDoCancelResponseType
	 */
	public function DoCancel(PayPalTypeDoCancelReq $_PayPalTypeDoCancelReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DoCancel(array('DoCancelRequest'=>$_PayPalTypeDoCancelReq->getDoCancelRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DoCapture
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeDoCaptureReq::getDoCaptureRequest()
	 * @param PayPalTypeDoCaptureReq DoCaptureReq
	 * @return PayPalTypeDoCaptureResponseType
	 */
	public function DoCapture(PayPalTypeDoCaptureReq $_PayPalTypeDoCaptureReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DoCapture(array('DoCaptureRequest'=>$_PayPalTypeDoCaptureReq->getDoCaptureRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DoReauthorization
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeDoReauthorizationReq::getDoReauthorizationRequest()
	 * @param PayPalTypeDoReauthorizationReq DoReauthorizationReq
	 * @return PayPalTypeDoReauthorizationResponseType
	 */
	public function DoReauthorization(PayPalTypeDoReauthorizationReq $_PayPalTypeDoReauthorizationReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DoReauthorization(array('DoReauthorizationRequest'=>$_PayPalTypeDoReauthorizationReq->getDoReauthorizationRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DoVoid
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeDoVoidReq::getDoVoidRequest()
	 * @param PayPalTypeDoVoidReq DoVoidReq
	 * @return PayPalTypeDoVoidResponseType
	 */
	public function DoVoid(PayPalTypeDoVoidReq $_PayPalTypeDoVoidReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DoVoid(array('DoVoidRequest'=>$_PayPalTypeDoVoidReq->getDoVoidRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DoAuthorization
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeDoAuthorizationReq::getDoAuthorizationRequest()
	 * @param PayPalTypeDoAuthorizationReq DoAuthorizationReq
	 * @return PayPalTypeDoAuthorizationResponseType
	 */
	public function DoAuthorization(PayPalTypeDoAuthorizationReq $_PayPalTypeDoAuthorizationReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DoAuthorization(array('DoAuthorizationRequest'=>$_PayPalTypeDoAuthorizationReq->getDoAuthorizationRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DoUATPAuthorization
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeDoUATPAuthorizationReq::getDoUATPAuthorizationRequest()
	 * @param PayPalTypeDoUATPAuthorizationReq DoUATPAuthorizationReq
	 * @return PayPalTypeDoUATPAuthorizationResponseType
	 */
	public function DoUATPAuthorization(PayPalTypeDoUATPAuthorizationReq $_PayPalTypeDoUATPAuthorizationReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DoUATPAuthorization(array('DoUATPAuthorizationRequest'=>$_PayPalTypeDoUATPAuthorizationReq->getDoUATPAuthorizationRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DoReferenceTransaction
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeDoReferenceTransactionReq::getDoReferenceTransactionRequest()
	 * @param PayPalTypeDoReferenceTransactionReq DoReferenceTransactionReq
	 * @return PayPalTypeDoReferenceTransactionResponseType
	 */
	public function DoReferenceTransaction(PayPalTypeDoReferenceTransactionReq $_PayPalTypeDoReferenceTransactionReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DoReferenceTransaction(array('DoReferenceTransactionRequest'=>$_PayPalTypeDoReferenceTransactionReq->getDoReferenceTransactionRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call DoNonReferencedCredit
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeDoNonReferencedCreditReq::getDoNonReferencedCreditRequest()
	 * @param PayPalTypeDoNonReferencedCreditReq DoNonReferencedCreditReq
	 * @return PayPalTypeDoNonReferencedCreditResponseType
	 */
	public function DoNonReferencedCredit(PayPalTypeDoNonReferencedCreditReq $_PayPalTypeDoNonReferencedCreditReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DoNonReferencedCredit(array('DoNonReferencedCreditRequest'=>$_PayPalTypeDoNonReferencedCreditReq->getDoNonReferencedCreditRequest())));
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
	 * @return PayPalTypeDoNonReferencedCreditResponseType
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