<?php
/**
 * Class file for XiWatchListsTypeWatchListItem
 * @date 08/07/2012
 */
/**
 * Class XiWatchListsTypeWatchListItem
 * @date 08/07/2012
 */
class XiWatchListsTypeWatchListItem extends XiWatchListsWsdlClass
{
	/**
	 * The Symbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Symbol;
	/**
	 * The Quantity
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var long
	 */
	public $Quantity;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param long Quantity
	 * @return XiWatchListsTypeWatchListItem
	 */
	public function __construct($_Symbol = null,$_Quantity)
	{
		parent::__construct(array('Symbol'=>$_Symbol,'Quantity'=>$_Quantity));
	}
	/**
	 * Set Symbol
	 * @param string Symbol
	 * @return string
	 */
	public function setSymbol($_Symbol)
	{
		return ($this->Symbol = $_Symbol);
	}
	/**
	 * Get Symbol
	 * @return string
	 */
	public function getSymbol()
	{
		return $this->Symbol;
	}
	/**
	 * Set Quantity
	 * @param long Quantity
	 * @return long
	 */
	public function setQuantity($_Quantity)
	{
		return ($this->Quantity = $_Quantity);
	}
	/**
	 * Get Quantity
	 * @return long
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