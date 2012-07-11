<?php
/**
 * Class file for XWebInvoiceDetailByPOTypePOInfoType
 * @date 09/07/2012
 */
/**
 * Class XWebInvoiceDetailByPOTypePOInfoType
 * @date 09/07/2012
 */
class XWebInvoiceDetailByPOTypePOInfoType extends XWebInvoiceDetailByPOWsdlClass
{
	/**
	 * The PONbr
	 * @var PONbr
	 */
	public $PONbr;
	/**
	 * Constructor
	 * @param PONbr PONbr
	 * @return XWebInvoiceDetailByPOTypePOInfoType
	 */
	public function __construct($_PONbr = null)
	{
		parent::__construct(array('PONbr'=>$_PONbr));
	}
	/**
	 * Set PONbr
	 * @param PONbr PONbr
	 * @return PONbr
	 */
	public function setPONbr($_PONbr)
	{
		return ($this->PONbr = $_PONbr);
	}
	/**
	 * Get PONbr
	 * @return PONbr
	 */
	public function getPONbr()
	{
		return $this->PONbr;
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