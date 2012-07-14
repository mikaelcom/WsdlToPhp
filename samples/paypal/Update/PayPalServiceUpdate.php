<?php
/**
 * Class file for PayPalServiceUpdate
 * @date 14/07/2012
 */
/**
 * Class PayPalServiceUpdate
 * @date 14/07/2012
 */
class PayPalServiceUpdate extends PayPalWsdlClass
{
	/**
	 * Method to call UpdateAccessPermissions
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeUpdateAccessPermissionsReq::getUpdateAccessPermissionsRequest()
	 * @param PayPalTypeUpdateAccessPermissionsReq UpdateAccessPermissionsReq
	 * @return PayPalTypeUpdateAccessPermissionsResponseType
	 */
	public function UpdateAccessPermissions(PayPalTypeUpdateAccessPermissionsReq $_PayPalTypeUpdateAccessPermissionsReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UpdateAccessPermissions(array('UpdateAccessPermissionsRequest'=>$_PayPalTypeUpdateAccessPermissionsReq->getUpdateAccessPermissionsRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call UpdateRecurringPaymentsProfile
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeUpdateRecurringPaymentsProfileReq::getUpdateRecurringPaymentsProfileRequest()
	 * @param PayPalTypeUpdateRecurringPaymentsProfileReq UpdateRecurringPaymentsProfileReq
	 * @return PayPalTypeUpdateRecurringPaymentsProfileResponseType
	 */
	public function UpdateRecurringPaymentsProfile(PayPalTypeUpdateRecurringPaymentsProfileReq $_PayPalTypeUpdateRecurringPaymentsProfileReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UpdateRecurringPaymentsProfile(array('UpdateRecurringPaymentsProfileRequest'=>$_PayPalTypeUpdateRecurringPaymentsProfileReq->getUpdateRecurringPaymentsProfileRequest())));
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
	 * @return PayPalTypeUpdateRecurringPaymentsProfileResponseType
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