<?php
/**
 * Class file for XiGlobalrealtimeoptionsTypeGetEquityOptionBySymbols
 * @date 08/07/2012
 */
/**
 * Class XiGlobalrealtimeoptionsTypeGetEquityOptionBySymbols
 * @date 08/07/2012
 */
class XiGlobalrealtimeoptionsTypeGetEquityOptionBySymbols extends XiGlobalrealtimeoptionsWsdlClass
{
	/**
	 * The Symbols
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Symbols;
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
	 * @param string Symbols
	 * @param string SymbologyType
	 * @return XiGlobalrealtimeoptionsTypeGetEquityOptionBySymbols
	 */
	public function __construct($_Symbols = null,$_SymbologyType = null)
	{
		parent::__construct(array('Symbols'=>$_Symbols,'SymbologyType'=>$_SymbologyType));
	}
	/**
	 * Set Symbols
	 * @param string Symbols
	 * @return string
	 */
	public function setSymbols($_Symbols)
	{
		return ($this->Symbols = $_Symbols);
	}
	/**
	 * Get Symbols
	 * @return string
	 */
	public function getSymbols()
	{
		return $this->Symbols;
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