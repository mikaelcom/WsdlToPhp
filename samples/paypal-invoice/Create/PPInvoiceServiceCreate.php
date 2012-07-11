<?php
/**
 * Class file for PPInvoiceServiceCreate
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceServiceCreate
 * @date 02/07/2012
 */
class PPInvoiceServiceCreate extends PPInvoiceWsdlClass
{
	/**
	 * Method to call CreateInvoice
	 * @uses PPInvoiceWsdlClass::getSoapClient()
	 * @uses PPInvoiceWsdlClass::setResult()
	 * @uses PPInvoiceWsdlClass::getResult()
	 * @uses PPInvoiceWsdlClass::saveLastError()
	 * @uses PPInvoiceTypeCreateInvoiceRequest::getRequestEnvelope()
	 * @uses PPInvoiceTypeCreateInvoiceRequest::getInvoice()
	 * @param PPInvoiceTypeCreateInvoiceRequest CreateInvoiceRequest
	 * @return PPInvoiceTypeCreateInvoiceResponse
	 */
	public function CreateInvoice(PPInvoiceTypeCreateInvoiceRequest $_PPInvoiceTypeCreateInvoiceRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateInvoice(array('requestEnvelope'=>$_PPInvoiceTypeCreateInvoiceRequest->getRequestEnvelope(),'invoice'=>$_PPInvoiceTypeCreateInvoiceRequest->getInvoice())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call CreateAndSendInvoice
	 * @uses PPInvoiceWsdlClass::getSoapClient()
	 * @uses PPInvoiceWsdlClass::setResult()
	 * @uses PPInvoiceWsdlClass::getResult()
	 * @uses PPInvoiceWsdlClass::saveLastError()
	 * @uses PPInvoiceTypeCreateAndSendInvoiceRequest::getRequestEnvelope()
	 * @uses PPInvoiceTypeCreateAndSendInvoiceRequest::getInvoice()
	 * @param PPInvoiceTypeCreateAndSendInvoiceRequest CreateAndSendInvoiceRequest
	 * @return PPInvoiceTypeCreateAndSendInvoiceResponse
	 */
	public function CreateAndSendInvoice(PPInvoiceTypeCreateAndSendInvoiceRequest $_PPInvoiceTypeCreateAndSendInvoiceRequest)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateAndSendInvoice(array('requestEnvelope'=>$_PPInvoiceTypeCreateAndSendInvoiceRequest->getRequestEnvelope(),'invoice'=>$_PPInvoiceTypeCreateAndSendInvoiceRequest->getInvoice())));
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
	 * @return PPInvoiceTypeCreateAndSendInvoiceResponse
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