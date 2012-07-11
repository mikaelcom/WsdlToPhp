<?php
/**
 * Class file for XiEnergyTypeGetDelayedEnergyFutureBySession
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeGetDelayedEnergyFutureBySession
 * @date 08/07/2012
 */
class XiEnergyTypeGetDelayedEnergyFutureBySession extends XiEnergyWsdlClass
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
	 * The Month
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Month;
	/**
	 * The Year
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Year;
	/**
	 * The Session
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiEnergyTypeSessionTypes
	 */
	public $Session;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param int Month
	 * @param int Year
	 * @param XiEnergyTypeSessionTypes Session
	 * @return XiEnergyTypeGetDelayedEnergyFutureBySession
	 */
	public function __construct($_Symbol = null,$_Month,$_Year,$_Session)
	{
		parent::__construct(array('Symbol'=>$_Symbol,'Month'=>$_Month,'Year'=>$_Year,'Session'=>$_Session));
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
	 * Set Month
	 * @param int Month
	 * @return int
	 */
	public function setMonth($_Month)
	{
		return ($this->Month = $_Month);
	}
	/**
	 * Get Month
	 * @return int
	 */
	public function getMonth()
	{
		return $this->Month;
	}
	/**
	 * Set Year
	 * @param int Year
	 * @return int
	 */
	public function setYear($_Year)
	{
		return ($this->Year = $_Year);
	}
	/**
	 * Get Year
	 * @return int
	 */
	public function getYear()
	{
		return $this->Year;
	}
	/**
	 * Set Session
	 * @param SessionTypes Session
	 * @return SessionTypes
	 */
	public function setSession($_Session)
	{
		return ($this->Session = XiEnergyTypeSessionTypes::valueIsValid($_Session)?$_Session:null);
	}
	/**
	 * Get Session
	 * @return XiEnergyTypeSessionTypes
	 */
	public function getSession()
	{
		return $this->Session;
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