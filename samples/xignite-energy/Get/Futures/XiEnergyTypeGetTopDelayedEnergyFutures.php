<?php
/**
 * Class file for XiEnergyTypeGetTopDelayedEnergyFutures
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetTopDelayedEnergyFutures
 * @date 08/07/2012
 */
class XiEnergyTypeGetTopDelayedEnergyFutures extends XiEnergyWsdlClass
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
	 * The Count
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Count;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param int Count
	 * @return XiEnergyTypeGetTopDelayedEnergyFutures
	 */
	public function __construct($_Symbol = null,$_Count)
	{
		parent::__construct(array('Symbol'=>$_Symbol,'Count'=>$_Count));
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
	 * Set Count
	 * @param int Count
	 * @return int
	 */
	public function setCount($_Count)
	{
		return ($this->Count = $_Count);
	}
	/**
	 * Get Count
	 * @return int
	 */
	public function getCount()
	{
		return $this->Count;
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