<?php
/**
 * Class file for EbayFindTypeErrorMessage
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeErrorMessage
 * Documentation : Information regarding an error or warning that occurred when eBay processed the request. Not returned when the ack value is Success. Run-time errors are not reported here, but are instead reported as part of a SOAP fault.
 * @date 04/07/2012
 */
class EbayFindTypeErrorMessage extends EbayFindWsdlClass
{
	/**
	 * The error
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * 	- documentation : Details about a single error.
	 * @var EbayFindTypeErrorData
	 */
	public $error;
	/**
	 * Constructor
	 * @param EbayFindTypeErrorData error
	 * @return EbayFindTypeErrorMessage
	 */
	public function __construct($_error = null)
	{
		parent::__construct(array('error'=>$_error));
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
	 * @return EbayFindTypeErrorData
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