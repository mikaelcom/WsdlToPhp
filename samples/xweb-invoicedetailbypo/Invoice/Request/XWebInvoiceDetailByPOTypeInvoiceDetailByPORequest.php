<?php
/**
 * Class file for XWebInvoiceDetailByPOTypeInvoiceDetailByPORequest
 * @date 09/07/2012
 */
/**
 * Class XWebInvoiceDetailByPOTypeInvoiceDetailByPORequest
 * @date 09/07/2012
 */
class XWebInvoiceDetailByPOTypeInvoiceDetailByPORequest extends XWebInvoiceDetailByPOWsdlClass
{
	/**
	 * The RequestInvoiceDetailByPO
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XWebInvoiceDetailByPOTypeRequestInvoiceDetailByPOType
	 */
	public $RequestInvoiceDetailByPO;
	/**
	 * Constructor
	 * @param XWebInvoiceDetailByPOTypeRequestInvoiceDetailByPOType RequestInvoiceDetailByPO
	 * @return XWebInvoiceDetailByPOTypeInvoiceDetailByPORequest
	 */
	public function __construct($_RequestInvoiceDetailByPO)
	{
		parent::__construct(array('RequestInvoiceDetailByPO'=>$_RequestInvoiceDetailByPO));
	}
	/**
	 * Set RequestInvoiceDetailByPO
	 * @param RequestInvoiceDetailByPOType RequestInvoiceDetailByPO
	 * @return RequestInvoiceDetailByPOType
	 */
	public function setRequestInvoiceDetailByPO($_RequestInvoiceDetailByPO)
	{
		return ($this->RequestInvoiceDetailByPO = $_RequestInvoiceDetailByPO);
	}
	/**
	 * Get RequestInvoiceDetailByPO
	 * @return XWebInvoiceDetailByPOTypeRequestInvoiceDetailByPOType
	 */
	public function getRequestInvoiceDetailByPO()
	{
		return $this->RequestInvoiceDetailByPO;
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