<?php
/**
 * Class file for XWebLeadServiceUpdate
 * @date 09/07/2012
 */
/**
 * Class XWebLeadServiceUpdate
 * @date 09/07/2012
 */
class XWebLeadServiceUpdate extends XWebLeadWsdlClass
{
	/**
	 * Method to call UpdateLead
	 * @uses XWebLeadWsdlClass::getSoapClient()
	 * @uses XWebLeadWsdlClass::setResult()
	 * @uses XWebLeadWsdlClass::getResult()
	 * @uses XWebLeadWsdlClass::saveLastError()
	 * @uses XWebLeadTypeUpdateLeadRequest::getLead()
	 * @param XWebLeadTypeUpdateLeadRequest UpdateLeadRequest
	 * @return XWebLeadTypeUNKNOWN
	 */
	public function UpdateLead(XWebLeadTypeUpdateLeadRequest $_XWebLeadTypeUpdateLeadRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->UpdateLead(array('Lead'=>$_XWebLeadTypeUpdateLeadRequest->getLead())));
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
	 * @return XWebLeadTypeUNKNOWN
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