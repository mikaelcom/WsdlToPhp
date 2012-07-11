<?php
/**
 * Class file for XWebInvoiceDetailByPOTypeRequestInvoiceDetailByPOType
 * @date 09/07/2012
 */
/**
 * Class XWebInvoiceDetailByPOTypeRequestInvoiceDetailByPOType
 * @date 09/07/2012
 */
class XWebInvoiceDetailByPOTypeRequestInvoiceDetailByPOType extends XWebInvoiceDetailByPOWsdlClass
{
	/**
	 * The Detail
	 * @var XWebInvoiceDetailByPOTypeRequestDetailType
	 */
	public $Detail;
	/**
	 * Constructor
	 * @param XWebInvoiceDetailByPOTypeRequestDetailType Detail
	 * @return XWebInvoiceDetailByPOTypeRequestInvoiceDetailByPOType
	 */
	public function __construct($_Detail = null)
	{
		parent::__construct(array('Detail'=>$_Detail));
	}
	/**
	 * Set Detail
	 * @param RequestDetailType Detail
	 * @return RequestDetailType
	 */
	public function setDetail($_Detail)
	{
		return ($this->Detail = $_Detail);
	}
	/**
	 * Get Detail
	 * @return XWebInvoiceDetailByPOTypeRequestDetailType
	 */
	public function getDetail()
	{
		return $this->Detail;
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