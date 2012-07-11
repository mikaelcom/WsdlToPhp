<?php
/**
 * Class file for XiBATSRealTimeTypeTicks
 * @date 08/07/2012
 */
/**
 * Class XiBATSRealTimeTypeTicks
 * @date 08/07/2012
 */
class XiBATSRealTimeTypeTicks extends XiBATSRealTimeTypeCommon
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
	 * The TickData
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBATSRealTimeTypeArrayOfTick
	 */
	public $TickData;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param XiBATSRealTimeTypeArrayOfTick TickData
	 * @return XiBATSRealTimeTypeTicks
	 */
	public function __construct($_Symbol = null,$_TickData = null)
	{
		XiBATSRealTimeWsdlClass::__construct(array('Symbol'=>$_Symbol,'TickData'=>new XiBATSRealTimeTypeArrayOfTick($_TickData)));
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
	 * Set TickData
	 * @param ArrayOfTick TickData
	 * @return ArrayOfTick
	 */
	public function setTickData($_TickData)
	{
		return ($this->TickData = $_TickData);
	}
	/**
	 * Get TickData
	 * @return XiBATSRealTimeTypeArrayOfTick
	 */
	public function getTickData()
	{
		return $this->TickData;
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