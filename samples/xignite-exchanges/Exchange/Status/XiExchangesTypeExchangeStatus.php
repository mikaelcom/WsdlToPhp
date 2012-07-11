<?php
/**
 * Class file for XiExchangesTypeExchangeStatus
 * @date 08/07/2012
 */
/**
 * Class XiExchangesTypeExchangeStatus
 * @date 08/07/2012
 */
class XiExchangesTypeExchangeStatus extends XiExchangesTypeCommon
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
	 * The Open
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Open;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param boolean Open
	 * @return XiExchangesTypeExchangeStatus
	 */
	public function __construct($_Symbol = null,$_Open)
	{
		XiExchangesWsdlClass::__construct(array('Symbol'=>$_Symbol,'Open'=>$_Open));
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
	 * Set Open
	 * @param boolean Open
	 * @return boolean
	 */
	public function setOpen($_Open)
	{
		return ($this->Open = $_Open);
	}
	/**
	 * Get Open
	 * @return boolean
	 */
	public function getOpen()
	{
		return $this->Open;
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