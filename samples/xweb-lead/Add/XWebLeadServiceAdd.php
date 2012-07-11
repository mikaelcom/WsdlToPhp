<?php
/**
 * Class file for XWebLeadServiceAdd
 * @date 09/07/2012
 */
/**
 * Class XWebLeadServiceAdd
 * @date 09/07/2012
 */
class XWebLeadServiceAdd extends XWebLeadWsdlClass
{
	/**
	 * Method to call AddLead
	 * @uses XWebLeadWsdlClass::getSoapClient()
	 * @uses XWebLeadWsdlClass::setResult()
	 * @uses XWebLeadWsdlClass::getResult()
	 * @uses XWebLeadWsdlClass::saveLastError()
	 * @uses XWebLeadTypeAddLeadRequest::getLead()
	 * @param XWebLeadTypeAddLeadRequest AddLeadRequest
	 * @return XWebLeadTypeUNKNOWN
	 */
	public function AddLead(XWebLeadTypeAddLeadRequest $_XWebLeadTypeAddLeadRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddLead(array('Lead'=>$_XWebLeadTypeAddLeadRequest->getLead())));
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