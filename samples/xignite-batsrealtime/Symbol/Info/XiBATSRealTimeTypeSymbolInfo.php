<?php
/**
 * Class file for XiBATSRealTimeTypeSymbolInfo
 * @date 08/07/2012
 */
/**
 * Class XiBATSRealTimeTypeSymbolInfo
 * @date 08/07/2012
 */
class XiBATSRealTimeTypeSymbolInfo extends XiBATSRealTimeWsdlClass
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
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param string Name
	 * @return XiBATSRealTimeTypeSymbolInfo
	 */
	public function __construct($_Symbol = null,$_Name = null)
	{
		parent::__construct(array('Symbol'=>$_Symbol,'Name'=>$_Name));
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
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
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