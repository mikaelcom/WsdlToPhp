<?php
/**
 * Class file for PayPalServiceBill
 * @date 14/07/2012
 */
/**
 * Class PayPalServiceBill
 * @date 14/07/2012
 */
class PayPalServiceBill extends PayPalWsdlClass
{
	/**
	 * Method to call BillUser
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeBillUserReq::getBillUserRequest()
	 * @param PayPalTypeBillUserReq BillUserReq
	 * @return PayPalTypeBillUserResponseType
	 */
	public function BillUser(PayPalTypeBillUserReq $_PayPalTypeBillUserReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->BillUser(array('BillUserRequest'=>$_PayPalTypeBillUserReq->getBillUserRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call BillAgreementUpdate
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeBillAgreementUpdateReq::getBAUpdateRequest()
	 * @param PayPalTypeBillAgreementUpdateReq BillAgreementUpdateReq
	 * @return PayPalTypeBAUpdateResponseType
	 */
	public function BillAgreementUpdate(PayPalTypeBillAgreementUpdateReq $_PayPalTypeBillAgreementUpdateReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->BillAgreementUpdate(array('BAUpdateRequest'=>$_PayPalTypeBillAgreementUpdateReq->getBAUpdateRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call BillOutstandingAmount
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeBillOutstandingAmountReq::getBillOutstandingAmountRequest()
	 * @param PayPalTypeBillOutstandingAmountReq BillOutstandingAmountReq
	 * @return PayPalTypeBillOutstandingAmountResponseType
	 */
	public function BillOutstandingAmount(PayPalTypeBillOutstandingAmountReq $_PayPalTypeBillOutstandingAmountReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->BillOutstandingAmount(array('BillOutstandingAmountRequest'=>$_PayPalTypeBillOutstandingAmountReq->getBillOutstandingAmountRequest())));
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
	 * @return PayPalTypeBillOutstandingAmountResponseType
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