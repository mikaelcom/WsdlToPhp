<?php
/**
 * Class file for XWebPriceListTypeResponsePromotionInfoType
 * @date 09/07/2012
 */
/**
 * Class XWebPriceListTypeResponsePromotionInfoType
 * @date 09/07/2012
 */
class XWebPriceListTypeResponsePromotionInfoType extends XWebPriceListWsdlClass
{
	/**
	 * The OrderLevel
	 * @var OrderLevel
	 */
	public $OrderLevel;
	/**
	 * The MinimumQty
	 * @var MinimumQty
	 */
	public $MinimumQty;
	/**
	 * The MaximumQty
	 * @var MaximumQty
	 */
	public $MaximumQty;
	/**
	 * The PromoEUIRequired
	 * @var PromoEUIRequired
	 */
	public $PromoEUIRequired;
	/**
	 * The PromotedPricePerUnit
	 * @var PromotedPricePerUnit
	 */
	public $PromotedPricePerUnit;
	/**
	 * The PromotedEndDate
	 * @var PromotedEndDate
	 */
	public $PromotedEndDate;
	/**
	 * The PromoNumber
	 * @var PromoNumber
	 */
	public $PromoNumber;
	/**
	 * Constructor
	 * @param OrderLevel OrderLevel
	 * @param MinimumQty MinimumQty
	 * @param MaximumQty MaximumQty
	 * @param PromoEUIRequired PromoEUIRequired
	 * @param PromotedPricePerUnit PromotedPricePerUnit
	 * @param PromotedEndDate PromotedEndDate
	 * @param PromoNumber PromoNumber
	 * @return XWebPriceListTypeResponsePromotionInfoType
	 */
	public function __construct($_OrderLevel = null,$_MinimumQty = null,$_MaximumQty = null,$_PromoEUIRequired = null,$_PromotedPricePerUnit = null,$_PromotedEndDate = null,$_PromoNumber = null)
	{
		parent::__construct(array('OrderLevel'=>$_OrderLevel,'MinimumQty'=>$_MinimumQty,'MaximumQty'=>$_MaximumQty,'PromoEUIRequired'=>$_PromoEUIRequired,'PromotedPricePerUnit'=>$_PromotedPricePerUnit,'PromotedEndDate'=>$_PromotedEndDate,'PromoNumber'=>$_PromoNumber));
	}
	/**
	 * Set OrderLevel
	 * @param OrderLevel OrderLevel
	 * @return OrderLevel
	 */
	public function setOrderLevel($_OrderLevel)
	{
		return ($this->OrderLevel = $_OrderLevel);
	}
	/**
	 * Get OrderLevel
	 * @return OrderLevel
	 */
	public function getOrderLevel()
	{
		return $this->OrderLevel;
	}
	/**
	 * Set MinimumQty
	 * @param MinimumQty MinimumQty
	 * @return MinimumQty
	 */
	public function setMinimumQty($_MinimumQty)
	{
		return ($this->MinimumQty = $_MinimumQty);
	}
	/**
	 * Get MinimumQty
	 * @return MinimumQty
	 */
	public function getMinimumQty()
	{
		return $this->MinimumQty;
	}
	/**
	 * Set MaximumQty
	 * @param MaximumQty MaximumQty
	 * @return MaximumQty
	 */
	public function setMaximumQty($_MaximumQty)
	{
		return ($this->MaximumQty = $_MaximumQty);
	}
	/**
	 * Get MaximumQty
	 * @return MaximumQty
	 */
	public function getMaximumQty()
	{
		return $this->MaximumQty;
	}
	/**
	 * Set PromoEUIRequired
	 * @param PromoEUIRequired PromoEUIRequired
	 * @return PromoEUIRequired
	 */
	public function setPromoEUIRequired($_PromoEUIRequired)
	{
		return ($this->PromoEUIRequired = $_PromoEUIRequired);
	}
	/**
	 * Get PromoEUIRequired
	 * @return PromoEUIRequired
	 */
	public function getPromoEUIRequired()
	{
		return $this->PromoEUIRequired;
	}
	/**
	 * Set PromotedPricePerUnit
	 * @param PromotedPricePerUnit PromotedPricePerUnit
	 * @return PromotedPricePerUnit
	 */
	public function setPromotedPricePerUnit($_PromotedPricePerUnit)
	{
		return ($this->PromotedPricePerUnit = $_PromotedPricePerUnit);
	}
	/**
	 * Get PromotedPricePerUnit
	 * @return PromotedPricePerUnit
	 */
	public function getPromotedPricePerUnit()
	{
		return $this->PromotedPricePerUnit;
	}
	/**
	 * Set PromotedEndDate
	 * @param PromotedEndDate PromotedEndDate
	 * @return PromotedEndDate
	 */
	public function setPromotedEndDate($_PromotedEndDate)
	{
		return ($this->PromotedEndDate = $_PromotedEndDate);
	}
	/**
	 * Get PromotedEndDate
	 * @return PromotedEndDate
	 */
	public function getPromotedEndDate()
	{
		return $this->PromotedEndDate;
	}
	/**
	 * Set PromoNumber
	 * @param PromoNumber PromoNumber
	 * @return PromoNumber
	 */
	public function setPromoNumber($_PromoNumber)
	{
		return ($this->PromoNumber = $_PromoNumber);
	}
	/**
	 * Get PromoNumber
	 * @return PromoNumber
	 */
	public function getPromoNumber()
	{
		return $this->PromoNumber;
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