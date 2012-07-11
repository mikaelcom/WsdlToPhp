<?php
/**
 * Class file for XiNewsTypeGetStockHeadlinesTopFromClass
 * @date 08/07/2012
 */
/**
 * Class XiNewsTypeGetStockHeadlinesTopFromClass
 * @date 08/07/2012
 */
class XiNewsTypeGetStockHeadlinesTopFromClass extends XiNewsWsdlClass
{
	/**
	 * The Symbols
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiNewsTypeArrayOfTicker
	 */
	public $Symbols;
	/**
	 * Constructor
	 * @param XiNewsTypeArrayOfTicker Symbols
	 * @return XiNewsTypeGetStockHeadlinesTopFromClass
	 */
	public function __construct($_Symbols = null)
	{
		parent::__construct(array('Symbols'=>new XiNewsTypeArrayOfTicker($_Symbols)));
	}
	/**
	 * Set Symbols
	 * @param ArrayOfTicker Symbols
	 * @return ArrayOfTicker
	 */
	public function setSymbols($_Symbols)
	{
		return ($this->Symbols = $_Symbols);
	}
	/**
	 * Get Symbols
	 * @return XiNewsTypeArrayOfTicker
	 */
	public function getSymbols()
	{
		return $this->Symbols;
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