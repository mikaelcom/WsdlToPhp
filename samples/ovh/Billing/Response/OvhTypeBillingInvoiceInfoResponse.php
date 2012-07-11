<?php
/**
 * Class file for OvhTypeBillingInvoiceInfoResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeBillingInvoiceInfoResponse
 * @date 02/07/2012
 */
class OvhTypeBillingInvoiceInfoResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeBillingInvoiceInfoReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeBillingInvoiceInfoReturn return
	 * @return OvhTypeBillingInvoiceInfoResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param billingInvoiceInfoReturn return
	 * @return billingInvoiceInfoReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypebillingInvoiceInfoReturn
	 */
	public function getReturn()
	{
		return $this->return;
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