<?php
/**
 * Class file for XWebOrderStatusTypeResponseLineInfoType
 * @date 09/07/2012
 */
/**
 * Class XWebOrderStatusTypeResponseLineInfoType
 * @date 09/07/2012
 */
class XWebOrderStatusTypeResponseLineInfoType extends XWebOrderStatusWsdlClass
{
	/**
	 * The AssignedID
	 * @var AssignedID
	 */
	public $AssignedID;
	/**
	 * The ProductIDQual
	 * @var ProductIDQual
	 */
	public $ProductIDQual;
	/**
	 * The ProductID
	 * @var ProductID
	 */
	public $ProductID;
	/**
	 * The ProductIDQual2
	 * @var ProductIDQual2
	 */
	public $ProductIDQual2;
	/**
	 * The ProductID2
	 * @var ProductID2
	 */
	public $ProductID2;
	/**
	 * The ProductDesc
	 * @var ProductDesc
	 */
	public $ProductDesc;
	/**
	 * The LineStatus
	 * @var LineStatus
	 */
	public $LineStatus;
	/**
	 * The UnitPrice
	 * @var UnitPrice
	 */
	public $UnitPrice;
	/**
	 * The ExtendedPrice
	 * @var ExtendedPrice
	 */
	public $ExtendedPrice;
	/**
	 * The WhseDesc
	 * @var WhseDesc
	 */
	public $WhseDesc;
	/**
	 * The ShipViaDesc
	 * @var ShipViaDesc
	 */
	public $ShipViaDesc;
	/**
	 * The QtyOrdered
	 * @var QtyOrdered
	 */
	public $QtyOrdered;
	/**
	 * The QtyShipped
	 * @var QtyShipped
	 */
	public $QtyShipped;
	/**
	 * The QtyBackordered
	 * @var QtyBackordered
	 */
	public $QtyBackordered;
	/**
	 * The QtyReturned
	 * @var QtyReturned
	 */
	public $QtyReturned;
	/**
	 * The DateShipped
	 * @var DateShipped
	 */
	public $DateShipped;
	/**
	 * The ItemEstimatedShipDate
	 * @var ItemEstimatedShipDate
	 */
	public $ItemEstimatedShipDate;
	/**
	 * Constructor
	 * @param AssignedID AssignedID
	 * @param ProductIDQual ProductIDQual
	 * @param ProductID ProductID
	 * @param ProductIDQual2 ProductIDQual2
	 * @param ProductID2 ProductID2
	 * @param ProductDesc ProductDesc
	 * @param LineStatus LineStatus
	 * @param UnitPrice UnitPrice
	 * @param ExtendedPrice ExtendedPrice
	 * @param WhseDesc WhseDesc
	 * @param ShipViaDesc ShipViaDesc
	 * @param QtyOrdered QtyOrdered
	 * @param QtyShipped QtyShipped
	 * @param QtyBackordered QtyBackordered
	 * @param QtyReturned QtyReturned
	 * @param DateShipped DateShipped
	 * @param ItemEstimatedShipDate ItemEstimatedShipDate
	 * @return XWebOrderStatusTypeResponseLineInfoType
	 */
	public function __construct($_AssignedID = null,$_ProductIDQual = null,$_ProductID = null,$_ProductIDQual2 = null,$_ProductID2 = null,$_ProductDesc = null,$_LineStatus = null,$_UnitPrice = null,$_ExtendedPrice = null,$_WhseDesc = null,$_ShipViaDesc = null,$_QtyOrdered = null,$_QtyShipped = null,$_QtyBackordered = null,$_QtyReturned = null,$_DateShipped = null,$_ItemEstimatedShipDate = null)
	{
		parent::__construct(array('AssignedID'=>$_AssignedID,'ProductIDQual'=>$_ProductIDQual,'ProductID'=>$_ProductID,'ProductIDQual2'=>$_ProductIDQual2,'ProductID2'=>$_ProductID2,'ProductDesc'=>$_ProductDesc,'LineStatus'=>$_LineStatus,'UnitPrice'=>$_UnitPrice,'ExtendedPrice'=>$_ExtendedPrice,'WhseDesc'=>$_WhseDesc,'ShipViaDesc'=>$_ShipViaDesc,'QtyOrdered'=>$_QtyOrdered,'QtyShipped'=>$_QtyShipped,'QtyBackordered'=>$_QtyBackordered,'QtyReturned'=>$_QtyReturned,'DateShipped'=>$_DateShipped,'ItemEstimatedShipDate'=>$_ItemEstimatedShipDate));
	}
	/**
	 * Set AssignedID
	 * @param AssignedID AssignedID
	 * @return AssignedID
	 */
	public function setAssignedID($_AssignedID)
	{
		return ($this->AssignedID = $_AssignedID);
	}
	/**
	 * Get AssignedID
	 * @return AssignedID
	 */
	public function getAssignedID()
	{
		return $this->AssignedID;
	}
	/**
	 * Set ProductIDQual
	 * @param ProductIDQual ProductIDQual
	 * @return ProductIDQual
	 */
	public function setProductIDQual($_ProductIDQual)
	{
		return ($this->ProductIDQual = $_ProductIDQual);
	}
	/**
	 * Get ProductIDQual
	 * @return ProductIDQual
	 */
	public function getProductIDQual()
	{
		return $this->ProductIDQual;
	}
	/**
	 * Set ProductID
	 * @param ProductID ProductID
	 * @return ProductID
	 */
	public function setProductID($_ProductID)
	{
		return ($this->ProductID = $_ProductID);
	}
	/**
	 * Get ProductID
	 * @return ProductID
	 */
	public function getProductID()
	{
		return $this->ProductID;
	}
	/**
	 * Set ProductIDQual2
	 * @param ProductIDQual2 ProductIDQual2
	 * @return ProductIDQual2
	 */
	public function setProductIDQual2($_ProductIDQual2)
	{
		return ($this->ProductIDQual2 = $_ProductIDQual2);
	}
	/**
	 * Get ProductIDQual2
	 * @return ProductIDQual2
	 */
	public function getProductIDQual2()
	{
		return $this->ProductIDQual2;
	}
	/**
	 * Set ProductID2
	 * @param ProductID2 ProductID2
	 * @return ProductID2
	 */
	public function setProductID2($_ProductID2)
	{
		return ($this->ProductID2 = $_ProductID2);
	}
	/**
	 * Get ProductID2
	 * @return ProductID2
	 */
	public function getProductID2()
	{
		return $this->ProductID2;
	}
	/**
	 * Set ProductDesc
	 * @param ProductDesc ProductDesc
	 * @return ProductDesc
	 */
	public function setProductDesc($_ProductDesc)
	{
		return ($this->ProductDesc = $_ProductDesc);
	}
	/**
	 * Get ProductDesc
	 * @return ProductDesc
	 */
	public function getProductDesc()
	{
		return $this->ProductDesc;
	}
	/**
	 * Set LineStatus
	 * @param LineStatus LineStatus
	 * @return LineStatus
	 */
	public function setLineStatus($_LineStatus)
	{
		return ($this->LineStatus = $_LineStatus);
	}
	/**
	 * Get LineStatus
	 * @return LineStatus
	 */
	public function getLineStatus()
	{
		return $this->LineStatus;
	}
	/**
	 * Set UnitPrice
	 * @param UnitPrice UnitPrice
	 * @return UnitPrice
	 */
	public function setUnitPrice($_UnitPrice)
	{
		return ($this->UnitPrice = $_UnitPrice);
	}
	/**
	 * Get UnitPrice
	 * @return UnitPrice
	 */
	public function getUnitPrice()
	{
		return $this->UnitPrice;
	}
	/**
	 * Set ExtendedPrice
	 * @param ExtendedPrice ExtendedPrice
	 * @return ExtendedPrice
	 */
	public function setExtendedPrice($_ExtendedPrice)
	{
		return ($this->ExtendedPrice = $_ExtendedPrice);
	}
	/**
	 * Get ExtendedPrice
	 * @return ExtendedPrice
	 */
	public function getExtendedPrice()
	{
		return $this->ExtendedPrice;
	}
	/**
	 * Set WhseDesc
	 * @param WhseDesc WhseDesc
	 * @return WhseDesc
	 */
	public function setWhseDesc($_WhseDesc)
	{
		return ($this->WhseDesc = $_WhseDesc);
	}
	/**
	 * Get WhseDesc
	 * @return WhseDesc
	 */
	public function getWhseDesc()
	{
		return $this->WhseDesc;
	}
	/**
	 * Set ShipViaDesc
	 * @param ShipViaDesc ShipViaDesc
	 * @return ShipViaDesc
	 */
	public function setShipViaDesc($_ShipViaDesc)
	{
		return ($this->ShipViaDesc = $_ShipViaDesc);
	}
	/**
	 * Get ShipViaDesc
	 * @return ShipViaDesc
	 */
	public function getShipViaDesc()
	{
		return $this->ShipViaDesc;
	}
	/**
	 * Set QtyOrdered
	 * @param QtyOrdered QtyOrdered
	 * @return QtyOrdered
	 */
	public function setQtyOrdered($_QtyOrdered)
	{
		return ($this->QtyOrdered = $_QtyOrdered);
	}
	/**
	 * Get QtyOrdered
	 * @return QtyOrdered
	 */
	public function getQtyOrdered()
	{
		return $this->QtyOrdered;
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
	 * Set QtyBackordered
	 * @param QtyBackordered QtyBackordered
	 * @return QtyBackordered
	 */
	public function setQtyBackordered($_QtyBackordered)
	{
		return ($this->QtyBackordered = $_QtyBackordered);
	}
	/**
	 * Get QtyBackordered
	 * @return QtyBackordered
	 */
	public function getQtyBackordered()
	{
		return $this->QtyBackordered;
	}
	/**
	 * Set QtyReturned
	 * @param QtyReturned QtyReturned
	 * @return QtyReturned
	 */
	public function setQtyReturned($_QtyReturned)
	{
		return ($this->QtyReturned = $_QtyReturned);
	}
	/**
	 * Get QtyReturned
	 * @return QtyReturned
	 */
	public function getQtyReturned()
	{
		return $this->QtyReturned;
	}
	/**
	 * Set DateShipped
	 * @param DateShipped DateShipped
	 * @return DateShipped
	 */
	public function setDateShipped($_DateShipped)
	{
		return ($this->DateShipped = $_DateShipped);
	}
	/**
	 * Get DateShipped
	 * @return DateShipped
	 */
	public function getDateShipped()
	{
		return $this->DateShipped;
	}
	/**
	 * Set ItemEstimatedShipDate
	 * @param ItemEstimatedShipDate ItemEstimatedShipDate
	 * @return ItemEstimatedShipDate
	 */
	public function setItemEstimatedShipDate($_ItemEstimatedShipDate)
	{
		return ($this->ItemEstimatedShipDate = $_ItemEstimatedShipDate);
	}
	/**
	 * Get ItemEstimatedShipDate
	 * @return ItemEstimatedShipDate
	 */
	public function getItemEstimatedShipDate()
	{
		return $this->ItemEstimatedShipDate;
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