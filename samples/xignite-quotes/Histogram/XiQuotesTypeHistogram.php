<?php
/**
 * Class file for XiQuotesTypeHistogram
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeHistogram
 * @date 08/07/2012
 */
class XiQuotesTypeHistogram extends XiQuotesTypeCommon
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
	 * The StartTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StartTime;
	/**
	 * The EndTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EndTime;
	/**
	 * The Bars
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiQuotesTypeArrayOfBar
	 */
	public $Bars;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param string StartTime
	 * @param string EndTime
	 * @param XiQuotesTypeArrayOfBar Bars
	 * @return XiQuotesTypeHistogram
	 */
	public function __construct($_Symbol = null,$_StartTime = null,$_EndTime = null,$_Bars = null)
	{
		XiQuotesWsdlClass::__construct(array('Symbol'=>$_Symbol,'StartTime'=>$_StartTime,'EndTime'=>$_EndTime,'Bars'=>new XiQuotesTypeArrayOfBar($_Bars)));
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
	 * Set StartTime
	 * @param string StartTime
	 * @return string
	 */
	public function setStartTime($_StartTime)
	{
		return ($this->StartTime = $_StartTime);
	}
	/**
	 * Get StartTime
	 * @return string
	 */
	public function getStartTime()
	{
		return $this->StartTime;
	}
	/**
	 * Set EndTime
	 * @param string EndTime
	 * @return string
	 */
	public function setEndTime($_EndTime)
	{
		return ($this->EndTime = $_EndTime);
	}
	/**
	 * Get EndTime
	 * @return string
	 */
	public function getEndTime()
	{
		return $this->EndTime;
	}
	/**
	 * Set Bars
	 * @param ArrayOfBar Bars
	 * @return ArrayOfBar
	 */
	public function setBars($_Bars)
	{
		return ($this->Bars = $_Bars);
	}
	/**
	 * Get Bars
	 * @return XiQuotesTypeArrayOfBar
	 */
	public function getBars()
	{
		return $this->Bars;
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