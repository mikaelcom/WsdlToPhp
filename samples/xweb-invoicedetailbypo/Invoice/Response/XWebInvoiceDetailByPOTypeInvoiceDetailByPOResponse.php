<?php
/**
 * Class file for XWebInvoiceDetailByPOTypeInvoiceDetailByPOResponse
 * @date 09/07/2012
 */
/**
 * Class XWebInvoiceDetailByPOTypeInvoiceDetailByPOResponse
 * @date 09/07/2012
 */
class XWebInvoiceDetailByPOTypeInvoiceDetailByPOResponse extends XWebInvoiceDetailByPOWsdlClass
{
	/**
	 * The ResponseInvoiceDetailByPO
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XWebInvoiceDetailByPOTypeResponseInvoiceDetailByPOType
	 */
	public $ResponseInvoiceDetailByPO;
	/**
	 * Constructor
	 * @param XWebInvoiceDetailByPOTypeResponseInvoiceDetailByPOType ResponseInvoiceDetailByPO
	 * @return XWebInvoiceDetailByPOTypeInvoiceDetailByPOResponse
	 */
	public function __construct($_ResponseInvoiceDetailByPO)
	{
		parent::__construct(array('ResponseInvoiceDetailByPO'=>$_ResponseInvoiceDetailByPO));
	}
	/**
	 * Set ResponseInvoiceDetailByPO
	 * @param ResponseInvoiceDetailByPOType ResponseInvoiceDetailByPO
	 * @return ResponseInvoiceDetailByPOType
	 */
	public function setResponseInvoiceDetailByPO($_ResponseInvoiceDetailByPO)
	{
		return ($this->ResponseInvoiceDetailByPO = $_ResponseInvoiceDetailByPO);
	}
	/**
	 * Get ResponseInvoiceDetailByPO
	 * @return XWebInvoiceDetailByPOTypeResponseInvoiceDetailByPOType
	 */
	public function getResponseInvoiceDetailByPO()
	{
		return $this->ResponseInvoiceDetailByPO;
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