<?php
/**
 * Class file for PaylineWebPaymentTypeDetails
 * @date 10/07/2012
 */
/**
 * Class PaylineWebPaymentTypeDetails
 * Documentation : This element contains an array of orderDetail
 * @date 10/07/2012
 */
class PaylineWebPaymentTypeDetails extends PaylineWebPaymentWsdlClass
{
	/**
	 * The details
	 * Meta informations :
	 * 	- maxOccurs : 100
	 * 	- minOccurs : 0
	 * @var PaylineWebPaymentTypeOrderDetail
	 */
	public $details;
	/**
	 * Constructor
	 * @param PaylineWebPaymentTypeOrderDetail details
	 * @return PaylineWebPaymentTypeDetails
	 */
	public function __construct($_details = null)
	{
		parent::__construct(array('details'=>$_details));
	}
	/**
	 * Set details
	 * @param orderDetail details
	 * @return orderDetail
	 */
	public function setDetails($_details)
	{
		return ($this->details = $_details);
	}
	/**
	 * Get details
	 * @return PaylineWebPaymentTypeorderDetail
	 */
	public function getDetails()
	{
		return $this->details;
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