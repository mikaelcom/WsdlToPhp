<?php
/**
 * Class file for OvhTypeBillingInvoiceListResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeBillingInvoiceListResponse
 * @date 02/07/2012
 */
class OvhTypeBillingInvoiceListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfBillingInvoiceStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfBillingInvoiceStructType return
	 * @return OvhTypeBillingInvoiceListResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfBillingInvoiceStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfBillingInvoiceStructType return
	 * @return MyArrayOfBillingInvoiceStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfBillingInvoiceStructType
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