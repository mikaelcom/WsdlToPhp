<?php
/**
 * Class file for XiQuotesTypeBar
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeBar
 * @date 08/07/2012
 */
class XiQuotesTypeBar extends XiQuotesWsdlClass
{
	/**
	 * The Price
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Price;
	/**
	 * The Quantity
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Quantity;
	/**
	 * Constructor
	 * @param double Price
	 * @param int Quantity
	 * @return XiQuotesTypeBar
	 */
	public function __construct($_Price,$_Quantity)
	{
		parent::__construct(array('Price'=>$_Price,'Quantity'=>$_Quantity));
	}
	/**
	 * Set Price
	 * @param double Price
	 * @return double
	 */
	public function setPrice($_Price)
	{
		return ($this->Price = $_Price);
	}
	/**
	 * Get Price
	 * @return double
	 */
	public function getPrice()
	{
		return $this->Price;
	}
	/**
	 * Set Quantity
	 * @param int Quantity
	 * @return int
	 */
	public function setQuantity($_Quantity)
	{
		return ($this->Quantity = $_Quantity);
	}
	/**
	 * Get Quantity
	 * @return int
	 */
	public function getQuantity()
	{
		return $this->Quantity;
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