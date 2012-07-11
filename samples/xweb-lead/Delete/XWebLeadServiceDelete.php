<?php
/**
 * Class file for XWebLeadServiceDelete
 * @date 09/07/2012
 */
/**
 * Class XWebLeadServiceDelete
 * @date 09/07/2012
 */
class XWebLeadServiceDelete extends XWebLeadWsdlClass
{
	/**
	 * Method to call DeleteLead
	 * @uses XWebLeadWsdlClass::getSoapClient()
	 * @uses XWebLeadWsdlClass::setResult()
	 * @uses XWebLeadWsdlClass::getResult()
	 * @uses XWebLeadWsdlClass::saveLastError()
	 * @uses XWebLeadTypeDeleteLeadRequest::getLead_ID()
	 * @param XWebLeadTypeDeleteLeadRequest DeleteLeadRequest
	 * @return XWebLeadTypeUNKNOWN
	 */
	public function DeleteLead(XWebLeadTypeDeleteLeadRequest $_XWebLeadTypeDeleteLeadRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteLead(array('Lead_ID'=>$_XWebLeadTypeDeleteLeadRequest->getLead_ID())));
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