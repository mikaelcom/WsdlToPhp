<?php
/**
 * Class file for XiRealTimeTypeGetTickCollections
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeGetTickCollections
 * @date 08/07/2012
 */
class XiRealTimeTypeGetTickCollections extends XiRealTimeWsdlClass
{
	/**
	 * The Exchange
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRealTimeTypeECNTypes
	 */
	public $Exchange;
	/**
	 * The Symbols
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Symbols;
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
	 * The TickPrecision
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRealTimeTypeTickPeriod
	 */
	public $TickPrecision;
	/**
	 * The TickPeriods
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $TickPeriods;
	/**
	 * Constructor
	 * @param XiRealTimeTypeECNTypes Exchange
	 * @param string Symbols
	 * @param string StartTime
	 * @param string EndTime
	 * @param XiRealTimeTypeTickPeriod TickPrecision
	 * @param int TickPeriods
	 * @return XiRealTimeTypeGetTickCollections
	 */
	public function __construct($_Exchange,$_Symbols = null,$_StartTime = null,$_EndTime = null,$_TickPrecision,$_TickPeriods)
	{
		parent::__construct(array('Exchange'=>$_Exchange,'Symbols'=>$_Symbols,'StartTime'=>$_StartTime,'EndTime'=>$_EndTime,'TickPrecision'=>$_TickPrecision,'TickPeriods'=>$_TickPeriods));
	}
	/**
	 * Set Exchange
	 * @param ECNTypes Exchange
	 * @return ECNTypes
	 */
	public function setExchange($_Exchange)
	{
		return ($this->Exchange = XiRealTimeTypeECNTypes::valueIsValid($_Exchange)?$_Exchange:null);
	}
	/**
	 * Get Exchange
	 * @return XiRealTimeTypeECNTypes
	 */
	public function getExchange()
	{
		return $this->Exchange;
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
	 * Set TickPrecision
	 * @param TickPeriod TickPrecision
	 * @return TickPeriod
	 */
	public function setTickPrecision($_TickPrecision)
	{
		return ($this->TickPrecision = XiRealTimeTypeTickPeriod::valueIsValid($_TickPrecision)?$_TickPrecision:null);
	}
	/**
	 * Get TickPrecision
	 * @return XiRealTimeTypeTickPeriod
	 */
	public function getTickPrecision()
	{
		return $this->TickPrecision;
	}
	/**
	 * Set TickPeriods
	 * @param int TickPeriods
	 * @return int
	 */
	public function setTickPeriods($_TickPeriods)
	{
		return ($this->TickPeriods = $_TickPeriods);
	}
	/**
	 * Get TickPeriods
	 * @return int
	 */
	public function getTickPeriods()
	{
		return $this->TickPeriods;
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