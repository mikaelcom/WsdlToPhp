<?php
/**
 * Class file for PaylineWebPaymentTypeFailedListObject
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeFailedListObject
 * Documentation : An array of mass element failed
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeFailedListObject extends PaylineWebPaymentWsdlClass
{
	/**
	 * The failedObject
	 * Meta informations :
	 * 	- maxOccurs : 5000
	 * 	- minOccurs : 1
	 * @var PaylineWebPaymentTypeTransaction
	 */
	public $failedObject;
	/**
	 * Constructor
	 * @param PaylineWebPaymentTypeTransaction failedObject
	 * @return PaylineWebPaymentTypeFailedListObject
	 */
	public function __construct($_failedObject)
	{
		parent::__construct(array('failedObject'=>$_failedObject));
	}
	/**
	 * Set failedObject
	 * @param transaction failedObject
	 * @return transaction
	 */
	public function setFailedObject($_failedObject)
	{
		return ($this->failedObject = $_failedObject);
	}
	/**
	 * Get failedObject
	 * @return PaylineWebPaymentTypetransaction
	 */
	public function getFailedObject()
	{
		return $this->failedObject;
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