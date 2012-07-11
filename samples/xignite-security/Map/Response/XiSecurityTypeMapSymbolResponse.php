<?php
/**
 * Class file for XiSecurityTypeMapSymbolResponse
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeMapSymbolResponse
 * @date 08/07/2012
 */
class XiSecurityTypeMapSymbolResponse extends XiSecurityWsdlClass
{
	/**
	 * The MapSymbolResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiSecurityTypeSymbol
	 */
	public $MapSymbolResult;
	/**
	 * Constructor
	 * @param XiSecurityTypeSymbol MapSymbolResult
	 * @return XiSecurityTypeMapSymbolResponse
	 */
	public function __construct($_MapSymbolResult = null)
	{
		parent::__construct(array('MapSymbolResult'=>$_MapSymbolResult));
	}
	/**
	 * Set MapSymbolResult
	 * @param Symbol MapSymbolResult
	 * @return Symbol
	 */
	public function setMapSymbolResult($_MapSymbolResult)
	{
		return ($this->MapSymbolResult = $_MapSymbolResult);
	}
	/**
	 * Get MapSymbolResult
	 * @return XiSecurityTypeSymbol
	 */
	public function getMapSymbolResult()
	{
		return $this->MapSymbolResult;
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