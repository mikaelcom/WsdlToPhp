<?php
/**
 * Class file for PayPalServiceManage
 * @date 14/07/2012
 */
/**
 * Class PayPalServiceManage
 * @date 14/07/2012
 */
class PayPalServiceManage extends PayPalWsdlClass
{
	/**
	 * Method to call ManagePendingTransactionStatus
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeManagePendingTransactionStatusReq::getManagePendingTransactionStatusRequest()
	 * @param PayPalTypeManagePendingTransactionStatusReq ManagePendingTransactionStatusReq
	 * @return PayPalTypeManagePendingTransactionStatusResponseType
	 */
	public function ManagePendingTransactionStatus(PayPalTypeManagePendingTransactionStatusReq $_PayPalTypeManagePendingTransactionStatusReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ManagePendingTransactionStatus(array('ManagePendingTransactionStatusRequest'=>$_PayPalTypeManagePendingTransactionStatusReq->getManagePendingTransactionStatusRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call ManageRecurringPaymentsProfileStatus
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeManageRecurringPaymentsProfileStatusReq::getManageRecurringPaymentsProfileStatusRequest()
	 * @param PayPalTypeManageRecurringPaymentsProfileStatusReq ManageRecurringPaymentsProfileStatusReq
	 * @return PayPalTypeManageRecurringPaymentsProfileStatusResponseType
	 */
	public function ManageRecurringPaymentsProfileStatus(PayPalTypeManageRecurringPaymentsProfileStatusReq $_PayPalTypeManageRecurringPaymentsProfileStatusReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ManageRecurringPaymentsProfileStatus(array('ManageRecurringPaymentsProfileStatusRequest'=>$_PayPalTypeManageRecurringPaymentsProfileStatusReq->getManageRecurringPaymentsProfileStatusRequest())));
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
	 * @return PayPalTypeManageRecurringPaymentsProfileStatusResponseType
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