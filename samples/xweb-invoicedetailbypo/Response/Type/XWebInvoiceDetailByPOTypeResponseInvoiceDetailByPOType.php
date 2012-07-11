<?php
/**
 * Class file for XWebInvoiceDetailByPOTypeResponseInvoiceDetailByPOType
 * @date 09/07/2012
 */
/**
 * Class XWebInvoiceDetailByPOTypeResponseInvoiceDetailByPOType
 * @date 09/07/2012
 */
class XWebInvoiceDetailByPOTypeResponseInvoiceDetailByPOType extends XWebInvoiceDetailByPOWsdlClass
{
	/**
	 * The Detail
	 * @var XWebInvoiceDetailByPOTypeResponseDetailType
	 */
	public $Detail;
	/**
	 * Constructor
	 * @param XWebInvoiceDetailByPOTypeResponseDetailType Detail
	 * @return XWebInvoiceDetailByPOTypeResponseInvoiceDetailByPOType
	 */
	public function __construct($_Detail = null)
	{
		parent::__construct(array('Detail'=>$_Detail));
	}
	/**
	 * Set Detail
	 * @param ResponseDetailType Detail
	 * @return ResponseDetailType
	 */
	public function setDetail($_Detail)
	{
		return ($this->Detail = $_Detail);
	}
	/**
	 * Get Detail
	 * @return XWebInvoiceDetailByPOTypeResponseDetailType
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