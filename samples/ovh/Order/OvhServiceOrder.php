<?php
/**
 * Class file for OvhServiceOrder
 * @date 02/07/2012
 */
/**
 * Class OvhServiceOrder
 * @date 02/07/2012
 */
class OvhServiceOrder extends OvhWsdlClass
{
	/**
	 * Method to call orderTelephonySmsCredit
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeOrderTelephonySmsCredit::getSession()
	 * @uses OvhTypeOrderTelephonySmsCredit::getSmsAccount()
	 * @uses OvhTypeOrderTelephonySmsCredit::getQuantity()
	 * @uses OvhTypeOrderTelephonySmsCredit::getPayWithPoints()
	 * @param OvhTypeOrderTelephonySmsCredit OrderTelephonySmsCredit
	 * @return OvhTypeOrderTelephonySmsCreditResponse
	 */
	public function orderTelephonySmsCredit(OvhTypeOrderTelephonySmsCredit $_ovhTypeOrderTelephonySmsCredit)
	{
		try
		{
			$this->setResult(new OvhTypeOrderTelephonySmsCreditResponse(self::getSoapClient()->orderTelephonySmsCredit($_ovhTypeOrderTelephonySmsCredit->getSession(),$_ovhTypeOrderTelephonySmsCredit->getSmsAccount(),$_ovhTypeOrderTelephonySmsCredit->getQuantity(),$_ovhTypeOrderTelephonySmsCredit->getPayWithPoints())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call orderAccountCredit
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeOrderAccountCredit::getSession()
	 * @uses OvhTypeOrderAccountCredit::getAmount()
	 * @param OvhTypeOrderAccountCredit OrderAccountCredit
	 * @return OvhTypeOrderAccountCreditResponse
	 */
	public function orderAccountCredit(OvhTypeOrderAccountCredit $_ovhTypeOrderAccountCredit)
	{
		try
		{
			$this->setResult(new OvhTypeOrderAccountCreditResponse(self::getSoapClient()->orderAccountCredit($_ovhTypeOrderAccountCredit->getSession(),$_ovhTypeOrderAccountCredit->getAmount())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call orderEmailMxPlan
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeOrderEmailMxPlan::getSession()
	 * @uses OvhTypeOrderEmailMxPlan::getDomain()
	 * @uses OvhTypeOrderEmailMxPlan::getType()
	 * @uses OvhTypeOrderEmailMxPlan::getPayWithPoints()
	 * @param OvhTypeOrderEmailMxPlan OrderEmailMxPlan
	 * @return OvhTypeOrderEmailMxPlanResponse
	 */
	public function orderEmailMxPlan(OvhTypeOrderEmailMxPlan $_ovhTypeOrderEmailMxPlan)
	{
		try
		{
			$this->setResult(new OvhTypeOrderEmailMxPlanResponse(self::getSoapClient()->orderEmailMxPlan($_ovhTypeOrderEmailMxPlan->getSession(),$_ovhTypeOrderEmailMxPlan->getDomain(),$_ovhTypeOrderEmailMxPlan->getType(),$_ovhTypeOrderEmailMxPlan->getPayWithPoints())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call orderEmailMxLarge
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeOrderEmailMxLarge::getSession()
	 * @uses OvhTypeOrderEmailMxLarge::getDomain()
	 * @uses OvhTypeOrderEmailMxLarge::getType()
	 * @uses OvhTypeOrderEmailMxLarge::getPayWithPoints()
	 * @param OvhTypeOrderEmailMxLarge OrderEmailMxLarge
	 * @return OvhTypeOrderEmailMxLargeResponse
	 */
	public function orderEmailMxLarge(OvhTypeOrderEmailMxLarge $_ovhTypeOrderEmailMxLarge)
	{
		try
		{
			$this->setResult(new OvhTypeOrderEmailMxLargeResponse(self::getSoapClient()->orderEmailMxLarge($_ovhTypeOrderEmailMxLarge->getSession(),$_ovhTypeOrderEmailMxLarge->getDomain(),$_ovhTypeOrderEmailMxLarge->getType(),$_ovhTypeOrderEmailMxLarge->getPayWithPoints())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call orderDedicatedFailover
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeOrderDedicatedFailover::getSession()
	 * @uses OvhTypeOrderDedicatedFailover::getDomain()
	 * @uses OvhTypeOrderDedicatedFailover::getOrderIps()
	 * @uses OvhTypeOrderDedicatedFailover::getPayWithPoints()
	 * @param OvhTypeOrderDedicatedFailover OrderDedicatedFailover
	 * @return OvhTypeOrderDedicatedFailoverResponse
	 */
	public function orderDedicatedFailover(OvhTypeOrderDedicatedFailover $_ovhTypeOrderDedicatedFailover)
	{
		try
		{
			$this->setResult(new OvhTypeOrderDedicatedFailoverResponse(self::getSoapClient()->orderDedicatedFailover($_ovhTypeOrderDedicatedFailover->getSession(),$_ovhTypeOrderDedicatedFailover->getDomain(),$_ovhTypeOrderDedicatedFailover->getOrderIps(),$_ovhTypeOrderDedicatedFailover->getPayWithPoints())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call orderDedicatedFailoverRipe
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhTypeOrderDedicatedFailoverRipe::getSession()
	 * @uses OvhTypeOrderDedicatedFailoverRipe::getHostname()
	 * @uses OvhTypeOrderDedicatedFailoverRipe::getAddress()
	 * @uses OvhTypeOrderDedicatedFailoverRipe::getPeriod()
	 * @uses OvhTypeOrderDedicatedFailoverRipe::getPayWithPoints()
	 * @param OvhTypeOrderDedicatedFailoverRipe OrderDedicatedFailoverRipe
	 * @return OvhTypeOrderDedicatedFailoverRipeResponse
	 */
	public function orderDedicatedFailoverRipe(OvhTypeOrderDedicatedFailoverRipe $_ovhTypeOrderDedicatedFailoverRipe)
	{
		try
		{
			$this->setResult(new OvhTypeOrderDedicatedFailoverRipeResponse(self::getSoapClient()->orderDedicatedFailoverRipe($_ovhTypeOrderDedicatedFailoverRipe->getSession(),$_ovhTypeOrderDedicatedFailoverRipe->getHostname(),$_ovhTypeOrderDedicatedFailoverRipe->getAddress(),$_ovhTypeOrderDedicatedFailoverRipe->getPeriod(),$_ovhTypeOrderDedicatedFailoverRipe->getPayWithPoints())));
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
	 * @return OvhTypeOrderDedicatedFailoverRipeResponse
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