<?php
/**
 * Class file for XWebInvoiceDetailByPOTypeItemInfoType
 * @date 09/07/2012
 */
/**
 * Class XWebInvoiceDetailByPOTypeItemInfoType
 * @date 09/07/2012
 */
class XWebInvoiceDetailByPOTypeItemInfoType extends XWebInvoiceDetailByPOWsdlClass
{
	/**
	 * The OrderLineNbr
	 * @var OrderLineNbr
	 */
	public $OrderLineNbr;
	/**
	 * The TechDataItemNbr
	 * @var TechDataItemNbr
	 */
	public $TechDataItemNbr;
	/**
	 * The MfgItemNbr
	 * @var MfgItemNbr
	 */
	public $MfgItemNbr;
	/**
	 * The ItemDesc
	 * @var ItemDesc
	 */
	public $ItemDesc;
	/**
	 * The QtyShipped
	 * @var QtyShipped
	 */
	public $QtyShipped;
	/**
	 * The SerialNbrInd
	 * @var SerialNbrInd
	 */
	public $SerialNbrInd;
	/**
	 * The SerialNbrInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XWebInvoiceDetailByPOTypeResponseSerialNbrInfoType
	 */
	public $SerialNbrInfo;
	/**
	 * Constructor
	 * @param OrderLineNbr OrderLineNbr
	 * @param TechDataItemNbr TechDataItemNbr
	 * @param MfgItemNbr MfgItemNbr
	 * @param ItemDesc ItemDesc
	 * @param QtyShipped QtyShipped
	 * @param SerialNbrInd SerialNbrInd
	 * @param XWebInvoiceDetailByPOTypeResponseSerialNbrInfoType SerialNbrInfo
	 * @return XWebInvoiceDetailByPOTypeItemInfoType
	 */
	public function __construct($_OrderLineNbr = null,$_TechDataItemNbr = null,$_MfgItemNbr = null,$_ItemDesc = null,$_QtyShipped = null,$_SerialNbrInd = null,$_SerialNbrInfo = null)
	{
		parent::__construct(array('OrderLineNbr'=>$_OrderLineNbr,'TechDataItemNbr'=>$_TechDataItemNbr,'MfgItemNbr'=>$_MfgItemNbr,'ItemDesc'=>$_ItemDesc,'QtyShipped'=>$_QtyShipped,'SerialNbrInd'=>$_SerialNbrInd,'SerialNbrInfo'=>$_SerialNbrInfo));
	}
	/**
	 * Set OrderLineNbr
	 * @param OrderLineNbr OrderLineNbr
	 * @return OrderLineNbr
	 */
	public function setOrderLineNbr($_OrderLineNbr)
	{
		return ($this->OrderLineNbr = $_OrderLineNbr);
	}
	/**
	 * Get OrderLineNbr
	 * @return OrderLineNbr
	 */
	public function getOrderLineNbr()
	{
		return $this->OrderLineNbr;
	}
	/**
	 * Set TechDataItemNbr
	 * @param TechDataItemNbr TechDataItemNbr
	 * @return TechDataItemNbr
	 */
	public function setTechDataItemNbr($_TechDataItemNbr)
	{
		return ($this->TechDataItemNbr = $_TechDataItemNbr);
	}
	/**
	 * Get TechDataItemNbr
	 * @return TechDataItemNbr
	 */
	public function getTechDataItemNbr()
	{
		return $this->TechDataItemNbr;
	}
	/**
	 * Set MfgItemNbr
	 * @param MfgItemNbr MfgItemNbr
	 * @return MfgItemNbr
	 */
	public function setMfgItemNbr($_MfgItemNbr)
	{
		return ($this->MfgItemNbr = $_MfgItemNbr);
	}
	/**
	 * Get MfgItemNbr
	 * @return MfgItemNbr
	 */
	public function getMfgItemNbr()
	{
		return $this->MfgItemNbr;
	}
	/**
	 * Set ItemDesc
	 * @param ItemDesc ItemDesc
	 * @return ItemDesc
	 */
	public function setItemDesc($_ItemDesc)
	{
		return ($this->ItemDesc = $_ItemDesc);
	}
	/**
	 * Get ItemDesc
	 * @return ItemDesc
	 */
	public function getItemDesc()
	{
		return $this->ItemDesc;
	}
	/**
	 * Set QtyShipped
	 * @param QtyShipped QtyShipped
	 * @return QtyShipped
	 */
	public function setQtyShipped($_QtyShipped)
	{
		return ($this->QtyShipped = $_QtyShipped);
	}
	/**
	 * Get QtyShipped
	 * @return QtyShipped
	 */
	public function getQtyShipped()
	{
		return $this->QtyShipped;
	}
	/**
	 * Set SerialNbrInd
	 * @param SerialNbrInd SerialNbrInd
	 * @return SerialNbrInd
	 */
	public function setSerialNbrInd($_SerialNbrInd)
	{
		return ($this->SerialNbrInd = $_SerialNbrInd);
	}
	/**
	 * Get SerialNbrInd
	 * @return SerialNbrInd
	 */
	public function getSerialNbrInd()
	{
		return $this->SerialNbrInd;
	}
	/**
	 * Set SerialNbrInfo
	 * @param ResponseSerialNbrInfoType SerialNbrInfo
	 * @return ResponseSerialNbrInfoType
	 */
	public function setSerialNbrInfo($_SerialNbrInfo)
	{
		return ($this->SerialNbrInfo = $_SerialNbrInfo);
	}
	/**
	 * Get SerialNbrInfo
	 * @return XWebInvoiceDetailByPOTypeResponseSerialNbrInfoType
	 */
	public function getSerialNbrInfo()
	{
		return $this->SerialNbrInfo;
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