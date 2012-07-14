<?php
/**
 * Class file for PayPalTypeDoNonReferencedCreditReq
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDoNonReferencedCreditReq
 * @date 14/07/2012
 */
class PayPalTypeDoNonReferencedCreditReq extends PayPalWsdlClass
{
	/**
	 * The DoNonReferencedCreditRequest
	 * @var PayPalTypeDoNonReferencedCreditRequestType
	 */
	public $DoNonReferencedCreditRequest;
	/**
	 * Constructor
	 * @param PayPalTypeDoNonReferencedCreditRequestType DoNonReferencedCreditRequest
	 * @return PayPalTypeDoNonReferencedCreditReq
	 */
	public function __construct($_DoNonReferencedCreditRequest = null)
	{
		parent::__construct(array('DoNonReferencedCreditRequest'=>$_DoNonReferencedCreditRequest));
	}
	/**
	 * Set DoNonReferencedCreditRequest
	 * @param DoNonReferencedCreditRequestType DoNonReferencedCreditRequest
	 * @return DoNonReferencedCreditRequestType
	 */
	public function setDoNonReferencedCreditRequest($_DoNonReferencedCreditRequest)
	{
		return ($this->DoNonReferencedCreditRequest = $_DoNonReferencedCreditRequest);
	}
	/**
	 * Get DoNonReferencedCreditRequest
	 * @return PayPalTypeDoNonReferencedCreditRequestType
	 */
	public function getDoNonReferencedCreditRequest()
	{
		return $this->DoNonReferencedCreditRequest;
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