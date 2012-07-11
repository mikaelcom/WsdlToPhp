<?php
/**
 * Class file for XiCurrenciesTypeTick
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeTick
 * @date 08/07/2012
 */
class XiCurrenciesTypeTick extends XiCurrenciesWsdlClass
{
	/**
	 * The Time
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Time;
	/**
	 * The Mid
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Mid;
	/**
	 * The High
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $High;
	/**
	 * The Low
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Low;
	/**
	 * Constructor
	 * @param string Time
	 * @param double Mid
	 * @param double High
	 * @param double Low
	 * @return XiCurrenciesTypeTick
	 */
	public function __construct($_Time = null,$_Mid,$_High,$_Low)
	{
		parent::__construct(array('Time'=>$_Time,'Mid'=>$_Mid,'High'=>$_High,'Low'=>$_Low));
	}
	/**
	 * Set Time
	 * @param string Time
	 * @return string
	 */
	public function setTime($_Time)
	{
		return ($this->Time = $_Time);
	}
	/**
	 * Get Time
	 * @return string
	 */
	public function getTime()
	{
		return $this->Time;
	}
	/**
	 * Set Mid
	 * @param double Mid
	 * @return double
	 */
	public function setMid($_Mid)
	{
		return ($this->Mid = $_Mid);
	}
	/**
	 * Get Mid
	 * @return double
	 */
	public function getMid()
	{
		return $this->Mid;
	}
	/**
	 * Set High
	 * @param double High
	 * @return double
	 */
	public function setHigh($_High)
	{
		return ($this->High = $_High);
	}
	/**
	 * Get High
	 * @return double
	 */
	public function getHigh()
	{
		return $this->High;
	}
	/**
	 * Set Low
	 * @param double Low
	 * @return double
	 */
	public function setLow($_Low)
	{
		return ($this->Low = $_Low);
	}
	/**
	 * Get Low
	 * @return double
	 */
	public function getLow()
	{
		return $this->Low;
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