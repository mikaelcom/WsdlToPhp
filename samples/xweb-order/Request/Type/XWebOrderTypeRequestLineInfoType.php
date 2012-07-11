<?php
/**
 * Class file for XWebOrderTypeRequestLineInfoType
 * @date 09/07/2012
 */
/**
 * Class XWebOrderTypeRequestLineInfoType
 * @date 09/07/2012
 */
class XWebOrderTypeRequestLineInfoType extends XWebOrderWsdlClass
{
	/**
	 * The AssignedID
	 * @var AssignedID
	 */
	public $AssignedID;
	/**
	 * The OrigCustPOLineNbr
	 * @var OrigCustPOLineNbr
	 */
	public $OrigCustPOLineNbr;
	/**
	 * The QtyOrdered
	 * @var QtyOrdered
	 */
	public $QtyOrdered;
	/**
	 * The UnitPrice
	 * @var UnitPrice
	 */
	public $UnitPrice;
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
	 * The WhseCode
	 * @var WhseCode
	 */
	public $WhseCode;
	/**
	 * The IDCode
	 * @var IDCode
	 */
	public $IDCode;
	/**
	 * The ConfigHandlingCode
	 * @var ConfigHandlingCode
	 */
	public $ConfigHandlingCode;
	/**
	 * The PromoAcceptInd
	 * @var PromoAcceptInd
	 */
	public $PromoAcceptInd;
	/**
	 * The OrderMessageLine
	 * @var OrderMessageLine
	 */
	public $OrderMessageLine;
	/**
	 * The AggregationCode
	 * @var AggregationCode
	 */
	public $AggregationCode;
	/**
	 * The ThirdPartyFreightAcct
	 * @var ThirdPartyFreightAcct
	 */
	public $ThirdPartyFreightAcct;
	/**
	 * Constructor
	 * @param AssignedID AssignedID
	 * @param OrigCustPOLineNbr OrigCustPOLineNbr
	 * @param QtyOrdered QtyOrdered
	 * @param UnitPrice UnitPrice
	 * @param ProductIDQual ProductIDQual
	 * @param ProductID ProductID
	 * @param WhseCode WhseCode
	 * @param IDCode IDCode
	 * @param ConfigHandlingCode ConfigHandlingCode
	 * @param PromoAcceptInd PromoAcceptInd
	 * @param OrderMessageLine OrderMessageLine
	 * @param AggregationCode AggregationCode
	 * @param ThirdPartyFreightAcct ThirdPartyFreightAcct
	 * @return XWebOrderTypeRequestLineInfoType
	 */
	public function __construct($_AssignedID = null,$_OrigCustPOLineNbr = null,$_QtyOrdered = null,$_UnitPrice = null,$_ProductIDQual = null,$_ProductID = null,$_WhseCode = null,$_IDCode = null,$_ConfigHandlingCode = null,$_PromoAcceptInd = null,$_OrderMessageLine = null,$_AggregationCode = null,$_ThirdPartyFreightAcct = null)
	{
		parent::__construct(array('AssignedID'=>$_AssignedID,'OrigCustPOLineNbr'=>$_OrigCustPOLineNbr,'QtyOrdered'=>$_QtyOrdered,'UnitPrice'=>$_UnitPrice,'ProductIDQual'=>$_ProductIDQual,'ProductID'=>$_ProductID,'WhseCode'=>$_WhseCode,'IDCode'=>$_IDCode,'ConfigHandlingCode'=>$_ConfigHandlingCode,'PromoAcceptInd'=>$_PromoAcceptInd,'OrderMessageLine'=>$_OrderMessageLine,'AggregationCode'=>$_AggregationCode,'ThirdPartyFreightAcct'=>$_ThirdPartyFreightAcct));
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
	 * Set OrigCustPOLineNbr
	 * @param OrigCustPOLineNbr OrigCustPOLineNbr
	 * @return OrigCustPOLineNbr
	 */
	public function setOrigCustPOLineNbr($_OrigCustPOLineNbr)
	{
		return ($this->OrigCustPOLineNbr = $_OrigCustPOLineNbr);
	}
	/**
	 * Get OrigCustPOLineNbr
	 * @return OrigCustPOLineNbr
	 */
	public function getOrigCustPOLineNbr()
	{
		return $this->OrigCustPOLineNbr;
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
	 * Set WhseCode
	 * @param WhseCode WhseCode
	 * @return WhseCode
	 */
	public function setWhseCode($_WhseCode)
	{
		return ($this->WhseCode = $_WhseCode);
	}
	/**
	 * Get WhseCode
	 * @return WhseCode
	 */
	public function getWhseCode()
	{
		return $this->WhseCode;
	}
	/**
	 * Set IDCode
	 * @param IDCode IDCode
	 * @return IDCode
	 */
	public function setIDCode($_IDCode)
	{
		return ($this->IDCode = $_IDCode);
	}
	/**
	 * Get IDCode
	 * @return IDCode
	 */
	public function getIDCode()
	{
		return $this->IDCode;
	}
	/**
	 * Set ConfigHandlingCode
	 * @param ConfigHandlingCode ConfigHandlingCode
	 * @return ConfigHandlingCode
	 */
	public function setConfigHandlingCode($_ConfigHandlingCode)
	{
		return ($this->ConfigHandlingCode = $_ConfigHandlingCode);
	}
	/**
	 * Get ConfigHandlingCode
	 * @return ConfigHandlingCode
	 */
	public function getConfigHandlingCode()
	{
		return $this->ConfigHandlingCode;
	}
	/**
	 * Set PromoAcceptInd
	 * @param PromoAcceptInd PromoAcceptInd
	 * @return PromoAcceptInd
	 */
	public function setPromoAcceptInd($_PromoAcceptInd)
	{
		return ($this->PromoAcceptInd = $_PromoAcceptInd);
	}
	/**
	 * Get PromoAcceptInd
	 * @return PromoAcceptInd
	 */
	public function getPromoAcceptInd()
	{
		return $this->PromoAcceptInd;
	}
	/**
	 * Set OrderMessageLine
	 * @param OrderMessageLine OrderMessageLine
	 * @return OrderMessageLine
	 */
	public function setOrderMessageLine($_OrderMessageLine)
	{
		return ($this->OrderMessageLine = $_OrderMessageLine);
	}
	/**
	 * Get OrderMessageLine
	 * @return OrderMessageLine
	 */
	public function getOrderMessageLine()
	{
		return $this->OrderMessageLine;
	}
	/**
	 * Set AggregationCode
	 * @param AggregationCode AggregationCode
	 * @return AggregationCode
	 */
	public function setAggregationCode($_AggregationCode)
	{
		return ($this->AggregationCode = $_AggregationCode);
	}
	/**
	 * Get AggregationCode
	 * @return AggregationCode
	 */
	public function getAggregationCode()
	{
		return $this->AggregationCode;
	}
	/**
	 * Set ThirdPartyFreightAcct
	 * @param ThirdPartyFreightAcct ThirdPartyFreightAcct
	 * @return ThirdPartyFreightAcct
	 */
	public function setThirdPartyFreightAcct($_ThirdPartyFreightAcct)
	{
		return ($this->ThirdPartyFreightAcct = $_ThirdPartyFreightAcct);
	}
	/**
	 * Get ThirdPartyFreightAcct
	 * @return ThirdPartyFreightAcct
	 */
	public function getThirdPartyFreightAcct()
	{
		return $this->ThirdPartyFreightAcct;
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