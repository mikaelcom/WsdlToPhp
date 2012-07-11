<?php
/**
 * Class file for XWebOrderStatusTypeResponseItemInfoType
 * @date 09/07/2012
 */
/**
 * Class XWebOrderStatusTypeResponseItemInfoType
 * @date 09/07/2012
 */
class XWebOrderStatusTypeResponseItemInfoType extends XWebOrderStatusWsdlClass
{
	/**
	 * The IIAssignedID
	 * @var IIAssignedID
	 */
	public $IIAssignedID;
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
	 * The QtyShipped
	 * @var QtyShipped
	 */
	public $QtyShipped;
	/**
	 * The SerialInd
	 * @var SerialInd
	 */
	public $SerialInd;
	/**
	 * The SerialInfo
	 * @var XWebOrderStatusTypeSerialInfo
	 */
	public $SerialInfo;
	/**
	 * Constructor
	 * @param IIAssignedID IIAssignedID
	 * @param AssignedID AssignedID
	 * @param ProductIDQual ProductIDQual
	 * @param ProductID ProductID
	 * @param ProductIDQual2 ProductIDQual2
	 * @param ProductID2 ProductID2
	 * @param ProductDesc ProductDesc
	 * @param QtyShipped QtyShipped
	 * @param SerialInd SerialInd
	 * @param XWebOrderStatusTypeSerialInfo SerialInfo
	 * @return XWebOrderStatusTypeResponseItemInfoType
	 */
	public function __construct($_IIAssignedID = null,$_AssignedID = null,$_ProductIDQual = null,$_ProductID = null,$_ProductIDQual2 = null,$_ProductID2 = null,$_ProductDesc = null,$_QtyShipped = null,$_SerialInd = null,$_SerialInfo = null)
	{
		parent::__construct(array('IIAssignedID'=>$_IIAssignedID,'AssignedID'=>$_AssignedID,'ProductIDQual'=>$_ProductIDQual,'ProductID'=>$_ProductID,'ProductIDQual2'=>$_ProductIDQual2,'ProductID2'=>$_ProductID2,'ProductDesc'=>$_ProductDesc,'QtyShipped'=>$_QtyShipped,'SerialInd'=>$_SerialInd,'SerialInfo'=>$_SerialInfo));
	}
	/**
	 * Set IIAssignedID
	 * @param IIAssignedID IIAssignedID
	 * @return IIAssignedID
	 */
	public function setIIAssignedID($_IIAssignedID)
	{
		return ($this->IIAssignedID = $_IIAssignedID);
	}
	/**
	 * Get IIAssignedID
	 * @return IIAssignedID
	 */
	public function getIIAssignedID()
	{
		return $this->IIAssignedID;
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
	 * Set SerialInd
	 * @param SerialInd SerialInd
	 * @return SerialInd
	 */
	public function setSerialInd($_SerialInd)
	{
		return ($this->SerialInd = $_SerialInd);
	}
	/**
	 * Get SerialInd
	 * @return SerialInd
	 */
	public function getSerialInd()
	{
		return $this->SerialInd;
	}
	/**
	 * Set SerialInfo
	 * @param SerialInfo SerialInfo
	 * @return SerialInfo
	 */
	public function setSerialInfo($_SerialInfo)
	{
		return ($this->SerialInfo = $_SerialInfo);
	}
	/**
	 * Get SerialInfo
	 * @return XWebOrderStatusTypeSerialInfo
	 */
	public function getSerialInfo()
	{
		return $this->SerialInfo;
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