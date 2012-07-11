<?php
/**
 * Class file for XiFuturesTypeTicks
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeTicks
 * @date 08/07/2012
 */
class XiFuturesTypeTicks extends XiFuturesTypeCommon
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
	 * The Ticks
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeArrayOfTick
	 */
	public $Ticks;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param XiFuturesTypeArrayOfTick Ticks
	 * @return XiFuturesTypeTicks
	 */
	public function __construct($_Symbol = null,$_Ticks = null)
	{
		XiFuturesWsdlClass::__construct(array('Symbol'=>$_Symbol,'Ticks'=>new XiFuturesTypeArrayOfTick($_Ticks)));
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
	 * Set Ticks
	 * @param ArrayOfTick Ticks
	 * @return ArrayOfTick
	 */
	public function setTicks($_Ticks)
	{
		return ($this->Ticks = $_Ticks);
	}
	/**
	 * Get Ticks
	 * @return XiFuturesTypeArrayOfTick
	 */
	public function getTicks()
	{
		return $this->Ticks;
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