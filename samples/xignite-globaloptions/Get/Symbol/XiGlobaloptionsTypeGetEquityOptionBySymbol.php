<?php
/**
 * Class file for XiGlobaloptionsTypeGetEquityOptionBySymbol
 * @date 08/07/2012
 */
/**
 * Class XiGlobaloptionsTypeGetEquityOptionBySymbol
 * @date 08/07/2012
 */
class XiGlobaloptionsTypeGetEquityOptionBySymbol extends XiGlobaloptionsWsdlClass
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
	 * The SymbologyType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SymbologyType;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param string SymbologyType
	 * @return XiGlobaloptionsTypeGetEquityOptionBySymbol
	 */
	public function __construct($_Symbol = null,$_SymbologyType = null)
	{
		parent::__construct(array('Symbol'=>$_Symbol,'SymbologyType'=>$_SymbologyType));
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
	 * Set SymbologyType
	 * @param string SymbologyType
	 * @return string
	 */
	public function setSymbologyType($_SymbologyType)
	{
		return ($this->SymbologyType = $_SymbologyType);
	}
	/**
	 * Get SymbologyType
	 * @return string
	 */
	public function getSymbologyType()
	{
		return $this->SymbologyType;
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