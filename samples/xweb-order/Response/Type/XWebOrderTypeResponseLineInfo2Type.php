<?php
/**
 * Class file for XWebOrderTypeResponseLineInfo2Type
 * @date 09/07/2012
 */
/**
 * Class XWebOrderTypeResponseLineInfo2Type
 * @date 09/07/2012
 */
class XWebOrderTypeResponseLineInfo2Type extends XWebOrderWsdlClass
{
	/**
	 * The AssignedID2
	 * @var AssignedID2
	 */
	public $AssignedID2;
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
	 * @param AssignedID2 AssignedID2
	 * @param ProductIDQual ProductIDQual
	 * @param ProductID ProductID
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
	 * @return XWebOrderTypeResponseLineInfo2Type
	 */
	public function __construct($_AssignedID2 = null,$_ProductIDQual = null,$_ProductID = null,$_ProductDesc = null,$_LineStatus = null,$_UnitPrice = null,$_ExtendedPrice = null,$_WhseDesc = null,$_ShipViaDesc = null,$_QtyOrdered = null,$_QtyShipped = null,$_QtyBackordered = null,$_QtyReturned = null,$_DateShipped = null,$_ItemEstimatedShipDate = null)
	{
		parent::__construct(array('AssignedID2'=>$_AssignedID2,'ProductIDQual'=>$_ProductIDQual,'ProductID'=>$_ProductID,'ProductDesc'=>$_ProductDesc,'LineStatus'=>$_LineStatus,'UnitPrice'=>$_UnitPrice,'ExtendedPrice'=>$_ExtendedPrice,'WhseDesc'=>$_WhseDesc,'ShipViaDesc'=>$_ShipViaDesc,'QtyOrdered'=>$_QtyOrdered,'QtyShipped'=>$_QtyShipped,'QtyBackordered'=>$_QtyBackordered,'QtyReturned'=>$_QtyReturned,'DateShipped'=>$_DateShipped,'ItemEstimatedShipDate'=>$_ItemEstimatedShipDate));
	}
	/**
	 * Set AssignedID2
	 * @param AssignedID2 AssignedID2
	 * @return AssignedID2
	 */
	public function setAssignedID2($_AssignedID2)
	{
		return ($this->AssignedID2 = $_AssignedID2);
	}
	/**
	 * Get AssignedID2
	 * @return AssignedID2
	 */
	public function getAssignedID2()
	{
		return $this->AssignedID2;
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