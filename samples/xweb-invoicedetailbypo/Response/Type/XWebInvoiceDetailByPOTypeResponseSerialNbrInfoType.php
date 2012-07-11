<?php
/**
 * Class file for XWebInvoiceDetailByPOTypeResponseSerialNbrInfoType
 * @date 09/07/2012
 */
/**
 * Class XWebInvoiceDetailByPOTypeResponseSerialNbrInfoType
 * @date 09/07/2012
 */
class XWebInvoiceDetailByPOTypeResponseSerialNbrInfoType extends XWebInvoiceDetailByPOWsdlClass
{
	/**
	 * The SerialNbr
	 * @var SerialNbr
	 */
	public $SerialNbr;
	/**
	 * Constructor
	 * @param SerialNbr SerialNbr
	 * @return XWebInvoiceDetailByPOTypeResponseSerialNbrInfoType
	 */
	public function __construct($_SerialNbr = null)
	{
		parent::__construct(array('SerialNbr'=>$_SerialNbr));
	}
	/**
	 * Set SerialNbr
	 * @param SerialNbr SerialNbr
	 * @return SerialNbr
	 */
	public function setSerialNbr($_SerialNbr)
	{
		return ($this->SerialNbr = $_SerialNbr);
	}
	/**
	 * Get SerialNbr
	 * @return SerialNbr
	 */
	public function getSerialNbr()
	{
		return $this->SerialNbr;
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