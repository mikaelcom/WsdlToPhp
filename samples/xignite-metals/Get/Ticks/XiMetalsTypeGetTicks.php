<?php
/**
 * Class file for XiMetalsTypeGetTicks
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetTicks
 * @date 08/07/2012
 */
class XiMetalsTypeGetTicks extends XiMetalsWsdlClass
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeMetalTypes
	 */
	public $Type;
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeMetalCurrencyTypes
	 */
	public $Currency;
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
	 * @var XiMetalsTypeTickPeriod
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
	 * @param XiMetalsTypeMetalTypes Type
	 * @param XiMetalsTypeMetalCurrencyTypes Currency
	 * @param string StartTime
	 * @param string EndTime
	 * @param XiMetalsTypeTickPeriod TickPrecision
	 * @param int TickPeriods
	 * @return XiMetalsTypeGetTicks
	 */
	public function __construct($_Type,$_Currency,$_StartTime = null,$_EndTime = null,$_TickPrecision,$_TickPeriods)
	{
		parent::__construct(array('Type'=>$_Type,'Currency'=>$_Currency,'StartTime'=>$_StartTime,'EndTime'=>$_EndTime,'TickPrecision'=>$_TickPrecision,'TickPeriods'=>$_TickPeriods));
	}
	/**
	 * Set Type
	 * @param MetalTypes Type
	 * @return MetalTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiMetalsTypeMetalTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiMetalsTypeMetalTypes
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set Currency
	 * @param MetalCurrencyTypes Currency
	 * @return MetalCurrencyTypes
	 */
	public function setCurrency($_Currency)
	{
		return ($this->Currency = XiMetalsTypeMetalCurrencyTypes::valueIsValid($_Currency)?$_Currency:null);
	}
	/**
	 * Get Currency
	 * @return XiMetalsTypeMetalCurrencyTypes
	 */
	public function getCurrency()
	{
		return $this->Currency;
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
		return ($this->TickPrecision = XiMetalsTypeTickPeriod::valueIsValid($_TickPrecision)?$_TickPrecision:null);
	}
	/**
	 * Get TickPrecision
	 * @return XiMetalsTypeTickPeriod
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