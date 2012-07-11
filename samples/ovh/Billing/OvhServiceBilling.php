<?php
/**
 * Class file for OvhServiceBilling
 * @date 02/07/2012
 */
/**
 * Class OvhServiceBilling
 * @date 02/07/2012
 */
class OvhServiceBilling extends OvhWsdlClass
{
	/**
	 * Method to call billingInvoiceList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeBillingInvoiceList::getSession()
	 * @param OvhTypeBillingInvoiceList BillingInvoiceList
	 * @return OvhTypeBillingInvoiceListResponse
	 */
	public function billingInvoiceList(OvhTypeBillingInvoiceList $_ovhTypeBillingInvoiceList)
	{
		try
		{
			$this->setResult(new OvhTypeBillingInvoiceListResponse(self::getSoapClient()->billingInvoiceList($_ovhTypeBillingInvoiceList->getSession())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call billingGetReferencesToExpired
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeBillingGetReferencesToExpired::getSession()
	 * @uses OvhTypeBillingGetReferencesToExpired::getDelay()
	 * @param OvhTypeBillingGetReferencesToExpired BillingGetReferencesToExpired
	 * @return OvhTypeBillingGetReferencesToExpiredResponse
	 */
	public function billingGetReferencesToExpired(OvhTypeBillingGetReferencesToExpired $_ovhTypeBillingGetReferencesToExpired)
	{
		try
		{
			$this->setResult(new OvhTypeBillingGetReferencesToExpiredResponse(self::getSoapClient()->billingGetReferencesToExpired($_ovhTypeBillingGetReferencesToExpired->getSession(),$_ovhTypeBillingGetReferencesToExpired->getDelay())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call billingGetAccessByNic
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeBillingGetAccessByNic::getSession()
	 * @param OvhTypeBillingGetAccessByNic BillingGetAccessByNic
	 * @return OvhTypeBillingGetAccessByNicResponse
	 */
	public function billingGetAccessByNic(OvhTypeBillingGetAccessByNic $_ovhTypeBillingGetAccessByNic)
	{
		try
		{
			$this->setResult(new OvhTypeBillingGetAccessByNicResponse(self::getSoapClient()->billingGetAccessByNic($_ovhTypeBillingGetAccessByNic->getSession())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call billingInvoiceInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeBillingInvoiceInfo::getSession()
	 * @uses OvhTypeBillingInvoiceInfo::getNumber()
	 * @uses OvhTypeBillingInvoiceInfo::getPassword()
	 * @uses OvhTypeBillingInvoiceInfo::getCountry()
	 * @param OvhTypeBillingInvoiceInfo BillingInvoiceInfo
	 * @return OvhTypeBillingInvoiceInfoResponse
	 */
	public function billingInvoiceInfo(OvhTypeBillingInvoiceInfo $_ovhTypeBillingInvoiceInfo)
	{
		try
		{
			$this->setResult(new OvhTypeBillingInvoiceInfoResponse(self::getSoapClient()->billingInvoiceInfo($_ovhTypeBillingInvoiceInfo->getSession(),$_ovhTypeBillingInvoiceInfo->getNumber(),$_ovhTypeBillingInvoiceInfo->getPassword(),$_ovhTypeBillingInvoiceInfo->getCountry())));
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
	 * @return OvhTypeBillingInvoiceInfoResponse
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