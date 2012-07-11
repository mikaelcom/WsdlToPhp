<?php
/**
 * Class file for XiFundsTypeSymbolList
 * @date 08/07/2012
 */
/**
 * Class XiFundsTypeSymbolList
 * @date 08/07/2012
 */
class XiFundsTypeSymbolList extends XiFundsTypeCommon
{
	/**
	 * The Symbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundsTypeArrayOfString
	 */
	public $Symbol;
	/**
	 * Constructor
	 * @param XiFundsTypeArrayOfString Symbol
	 * @return XiFundsTypeSymbolList
	 */
	public function __construct($_Symbol = null)
	{
		XiFundsWsdlClass::__construct(array('Symbol'=>new XiFundsTypeArrayOfString($_Symbol)));
	}
	/**
	 * Set Symbol
	 * @param ArrayOfString Symbol
	 * @return ArrayOfString
	 */
	public function setSymbol($_Symbol)
	{
		return ($this->Symbol = $_Symbol);
	}
	/**
	 * Get Symbol
	 * @return XiFundsTypeArrayOfString
	 */
	public function getSymbol()
	{
		return $this->Symbol;
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