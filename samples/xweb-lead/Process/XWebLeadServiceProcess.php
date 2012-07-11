<?php
/**
 * Class file for XWebLeadServiceProcess
 * @date 09/07/2012
 */
/**
 * Class XWebLeadServiceProcess
 * @date 09/07/2012
 */
class XWebLeadServiceProcess extends XWebLeadWsdlClass
{
	/**
	 * Method to call ProcessLead
	 * @uses XWebLeadWsdlClass::getSoapClient()
	 * @uses XWebLeadWsdlClass::setResult()
	 * @uses XWebLeadWsdlClass::getResult()
	 * @uses XWebLeadWsdlClass::saveLastError()
	 * @uses XWebLeadTypeProcessLeadRequest::getLead()
	 * @param XWebLeadTypeProcessLeadRequest ProcessLeadRequest
	 * @return XWebLeadTypeUNKNOWN
	 */
	public function ProcessLead(XWebLeadTypeProcessLeadRequest $_XWebLeadTypeProcessLeadRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ProcessLead(array('Lead'=>$_XWebLeadTypeProcessLeadRequest->getLead())));
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