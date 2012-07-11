<?php
/**
 * Class file for XiGlobalmasterTypeStatistics
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeStatistics
 * @date 08/07/2012
 */
class XiGlobalmasterTypeStatistics extends XiGlobalmasterTypeCommon
{
	/**
	 * The Count
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var long
	 */
	public $Count;
	/**
	 * The Exchange
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Exchange;
	/**
	 * Constructor
	 * @param long Count
	 * @param string Exchange
	 * @return XiGlobalmasterTypeStatistics
	 */
	public function __construct($_Count,$_Exchange = null)
	{
		XiGlobalmasterWsdlClass::__construct(array('Count'=>$_Count,'Exchange'=>$_Exchange));
	}
	/**
	 * Set Count
	 * @param long Count
	 * @return long
	 */
	public function setCount($_Count)
	{
		return ($this->Count = $_Count);
	}
	/**
	 * Get Count
	 * @return long
	 */
	public function getCount()
	{
		return $this->Count;
	}
	/**
	 * Set Exchange
	 * @param string Exchange
	 * @return string
	 */
	public function setExchange($_Exchange)
	{
		return ($this->Exchange = $_Exchange);
	}
	/**
	 * Get Exchange
	 * @return string
	 */
	public function getExchange()
	{
		return $this->Exchange;
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