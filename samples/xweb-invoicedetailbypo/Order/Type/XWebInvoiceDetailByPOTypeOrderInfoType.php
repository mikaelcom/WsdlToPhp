<?php
/**
 * Class file for XWebInvoiceDetailByPOTypeOrderInfoType
 * @date 09/07/2012
 */
/**
 * Class XWebInvoiceDetailByPOTypeOrderInfoType
 * @date 09/07/2012
 */
class XWebInvoiceDetailByPOTypeOrderInfoType extends XWebInvoiceDetailByPOWsdlClass
{
	/**
	 * The PONbr
	 * @var PONbr
	 */
	public $PONbr;
	/**
	 * The EndUserPONbr
	 * @var EndUserPONbr
	 */
	public $EndUserPONbr;
	/**
	 * The OrderNbr
	 * @var OrderNbr
	 */
	public $OrderNbr;
	/**
	 * The OrderDate
	 * @var OrderDate
	 */
	public $OrderDate;
	/**
	 * The EstShipDate
	 * @var EstShipDate
	 */
	public $EstShipDate;
	/**
	 * The OrderStatus
	 * @var OrderStatus
	 */
	public $OrderStatus;
	/**
	 * The InvoiceNbr
	 * @var InvoiceNbr
	 */
	public $InvoiceNbr;
	/**
	 * The ErrorMsg
	 * @var ErrorMsg
	 */
	public $ErrorMsg;
	/**
	 * The ContainerInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var XWebInvoiceDetailByPOTypeContainerInfoType
	 */
	public $ContainerInfo;
	/**
	 * Constructor
	 * @param PONbr PONbr
	 * @param EndUserPONbr EndUserPONbr
	 * @param OrderNbr OrderNbr
	 * @param OrderDate OrderDate
	 * @param EstShipDate EstShipDate
	 * @param OrderStatus OrderStatus
	 * @param InvoiceNbr InvoiceNbr
	 * @param ErrorMsg ErrorMsg
	 * @param XWebInvoiceDetailByPOTypeContainerInfoType ContainerInfo
	 * @return XWebInvoiceDetailByPOTypeOrderInfoType
	 */
	public function __construct($_PONbr = null,$_EndUserPONbr = null,$_OrderNbr = null,$_OrderDate = null,$_EstShipDate = null,$_OrderStatus = null,$_InvoiceNbr = null,$_ErrorMsg = null,$_ContainerInfo = null)
	{
		parent::__construct(array('PONbr'=>$_PONbr,'EndUserPONbr'=>$_EndUserPONbr,'OrderNbr'=>$_OrderNbr,'OrderDate'=>$_OrderDate,'EstShipDate'=>$_EstShipDate,'OrderStatus'=>$_OrderStatus,'InvoiceNbr'=>$_InvoiceNbr,'ErrorMsg'=>$_ErrorMsg,'ContainerInfo'=>$_ContainerInfo));
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
	 * Set EndUserPONbr
	 * @param EndUserPONbr EndUserPONbr
	 * @return EndUserPONbr
	 */
	public function setEndUserPONbr($_EndUserPONbr)
	{
		return ($this->EndUserPONbr = $_EndUserPONbr);
	}
	/**
	 * Get EndUserPONbr
	 * @return EndUserPONbr
	 */
	public function getEndUserPONbr()
	{
		return $this->EndUserPONbr;
	}
	/**
	 * Set OrderNbr
	 * @param OrderNbr OrderNbr
	 * @return OrderNbr
	 */
	public function setOrderNbr($_OrderNbr)
	{
		return ($this->OrderNbr = $_OrderNbr);
	}
	/**
	 * Get OrderNbr
	 * @return OrderNbr
	 */
	public function getOrderNbr()
	{
		return $this->OrderNbr;
	}
	/**
	 * Set OrderDate
	 * @param OrderDate OrderDate
	 * @return OrderDate
	 */
	public function setOrderDate($_OrderDate)
	{
		return ($this->OrderDate = $_OrderDate);
	}
	/**
	 * Get OrderDate
	 * @return OrderDate
	 */
	public function getOrderDate()
	{
		return $this->OrderDate;
	}
	/**
	 * Set EstShipDate
	 * @param EstShipDate EstShipDate
	 * @return EstShipDate
	 */
	public function setEstShipDate($_EstShipDate)
	{
		return ($this->EstShipDate = $_EstShipDate);
	}
	/**
	 * Get EstShipDate
	 * @return EstShipDate
	 */
	public function getEstShipDate()
	{
		return $this->EstShipDate;
	}
	/**
	 * Set OrderStatus
	 * @param OrderStatus OrderStatus
	 * @return OrderStatus
	 */
	public function setOrderStatus($_OrderStatus)
	{
		return ($this->OrderStatus = $_OrderStatus);
	}
	/**
	 * Get OrderStatus
	 * @return OrderStatus
	 */
	public function getOrderStatus()
	{
		return $this->OrderStatus;
	}
	/**
	 * Set InvoiceNbr
	 * @param InvoiceNbr InvoiceNbr
	 * @return InvoiceNbr
	 */
	public function setInvoiceNbr($_InvoiceNbr)
	{
		return ($this->InvoiceNbr = $_InvoiceNbr);
	}
	/**
	 * Get InvoiceNbr
	 * @return InvoiceNbr
	 */
	public function getInvoiceNbr()
	{
		return $this->InvoiceNbr;
	}
	/**
	 * Set ErrorMsg
	 * @param ErrorMsg ErrorMsg
	 * @return ErrorMsg
	 */
	public function setErrorMsg($_ErrorMsg)
	{
		return ($this->ErrorMsg = $_ErrorMsg);
	}
	/**
	 * Get ErrorMsg
	 * @return ErrorMsg
	 */
	public function getErrorMsg()
	{
		return $this->ErrorMsg;
	}
	/**
	 * Set ContainerInfo
	 * @param ContainerInfoType ContainerInfo
	 * @return ContainerInfoType
	 */
	public function setContainerInfo($_ContainerInfo)
	{
		return ($this->ContainerInfo = $_ContainerInfo);
	}
	/**
	 * Get ContainerInfo
	 * @return XWebInvoiceDetailByPOTypeContainerInfoType
	 */
	public function getContainerInfo()
	{
		return $this->ContainerInfo;
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