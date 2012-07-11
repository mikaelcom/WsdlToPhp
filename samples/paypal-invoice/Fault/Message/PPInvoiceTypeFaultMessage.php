<?php
/**
 * Class file for PPInvoiceTypeFaultMessage
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceTypeFaultMessage
 * Documentation : This specifies a fault, encapsulating error data, with specific error codes.
 * @date 02/07/2012
 */
class PPInvoiceTypeFaultMessage extends PPInvoiceWsdlClass
{
	/**
	 * The responseEnvelope
	 * Meta informations :
	 * 	- minOccurs : 1
	 * @var PPInvoiceTypeResponseEnvelope
	 */
	public $responseEnvelope;
	/**
	 * The error
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var PPInvoiceTypeErrorData
	 */
	public $error;
	/**
	 * Constructor
	 * @param PPInvoiceTypeResponseEnvelope responseEnvelope
	 * @param PPInvoiceTypeErrorData error
	 * @return PPInvoiceTypeFaultMessage
	 */
	public function __construct($_responseEnvelope,$_error = null)
	{
		parent::__construct(array('responseEnvelope'=>$_responseEnvelope,'error'=>$_error));
	}
	/**
	 * Set responseEnvelope
	 * @param ResponseEnvelope responseEnvelope
	 * @return ResponseEnvelope
	 */
	public function setResponseEnvelope($_responseEnvelope)
	{
		return ($this->responseEnvelope = $_responseEnvelope);
	}
	/**
	 * Get responseEnvelope
	 * @return PPInvoiceTypeResponseEnvelope
	 */
	public function getResponseEnvelope()
	{
		return $this->responseEnvelope;
	}
	/**
	 * Set error
	 * @param ErrorData error
	 * @return ErrorData
	 */
	public function setError($_error)
	{
		return ($this->error = $_error);
	}
	/**
	 * Get error
	 * @return PPInvoiceTypeErrorData
	 */
	public function getError()
	{
		return $this->error;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>