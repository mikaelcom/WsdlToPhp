<?php
/**
 * Class file for XWebPriceAvailabilityTypeResponseWhseInfoType
 * @date 09/07/2012
 */
/**
 * Class XWebPriceAvailabilityTypeResponseWhseInfoType
 * @date 09/07/2012
 */
class XWebPriceAvailabilityTypeResponseWhseInfoType extends XWebPriceAvailabilityWsdlClass
{
	/**
	 * The IDCode
	 * @var IDCode
	 */
	public $IDCode;
	/**
	 * The WhseCode
	 * @var WhseCode
	 */
	public $WhseCode;
	/**
	 * The Qty
	 * @var Qty
	 */
	public $Qty;
	/**
	 * The TotalOnOrderQty
	 * @var TotalOnOrderQty
	 */
	public $TotalOnOrderQty;
	/**
	 * The OnOrderQty
	 * @var OnOrderQty
	 */
	public $OnOrderQty;
	/**
	 * The OnOrderETADate
	 * @var OnOrderETADate
	 */
	public $OnOrderETADate;
	/**
	 * Constructor
	 * @param IDCode IDCode
	 * @param WhseCode WhseCode
	 * @param Qty Qty
	 * @param TotalOnOrderQty TotalOnOrderQty
	 * @param OnOrderQty OnOrderQty
	 * @param OnOrderETADate OnOrderETADate
	 * @return XWebPriceAvailabilityTypeResponseWhseInfoType
	 */
	public function __construct($_IDCode = null,$_WhseCode = null,$_Qty = null,$_TotalOnOrderQty = null,$_OnOrderQty = null,$_OnOrderETADate = null)
	{
		parent::__construct(array('IDCode'=>$_IDCode,'WhseCode'=>$_WhseCode,'Qty'=>$_Qty,'TotalOnOrderQty'=>$_TotalOnOrderQty,'OnOrderQty'=>$_OnOrderQty,'OnOrderETADate'=>$_OnOrderETADate));
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
	 * Set Qty
	 * @param Qty Qty
	 * @return Qty
	 */
	public function setQty($_Qty)
	{
		return ($this->Qty = $_Qty);
	}
	/**
	 * Get Qty
	 * @return Qty
	 */
	public function getQty()
	{
		return $this->Qty;
	}
	/**
	 * Set TotalOnOrderQty
	 * @param TotalOnOrderQty TotalOnOrderQty
	 * @return TotalOnOrderQty
	 */
	public function setTotalOnOrderQty($_TotalOnOrderQty)
	{
		return ($this->TotalOnOrderQty = $_TotalOnOrderQty);
	}
	/**
	 * Get TotalOnOrderQty
	 * @return TotalOnOrderQty
	 */
	public function getTotalOnOrderQty()
	{
		return $this->TotalOnOrderQty;
	}
	/**
	 * Set OnOrderQty
	 * @param OnOrderQty OnOrderQty
	 * @return OnOrderQty
	 */
	public function setOnOrderQty($_OnOrderQty)
	{
		return ($this->OnOrderQty = $_OnOrderQty);
	}
	/**
	 * Get OnOrderQty
	 * @return OnOrderQty
	 */
	public function getOnOrderQty()
	{
		return $this->OnOrderQty;
	}
	/**
	 * Set OnOrderETADate
	 * @param OnOrderETADate OnOrderETADate
	 * @return OnOrderETADate
	 */
	public function setOnOrderETADate($_OnOrderETADate)
	{
		return ($this->OnOrderETADate = $_OnOrderETADate);
	}
	/**
	 * Get OnOrderETADate
	 * @return OnOrderETADate
	 */
	public function getOnOrderETADate()
	{
		return $this->OnOrderETADate;
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