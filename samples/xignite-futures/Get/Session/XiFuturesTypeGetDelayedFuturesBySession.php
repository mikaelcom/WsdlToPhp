<?php
/**
 * Class file for XiFuturesTypeGetDelayedFuturesBySession
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetDelayedFuturesBySession
 * @date 08/07/2012
 */
class XiFuturesTypeGetDelayedFuturesBySession extends XiFuturesWsdlClass
{
	/**
	 * The Symbols
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Symbols;
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
	 * @var XiFuturesTypeSessionTypes
	 */
	public $Session;
	/**
	 * Constructor
	 * @param string Symbols
	 * @param int Month
	 * @param int Year
	 * @param XiFuturesTypeSessionTypes Session
	 * @return XiFuturesTypeGetDelayedFuturesBySession
	 */
	public function __construct($_Symbols = null,$_Month,$_Year,$_Session)
	{
		parent::__construct(array('Symbols'=>$_Symbols,'Month'=>$_Month,'Year'=>$_Year,'Session'=>$_Session));
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
		return ($this->Session = XiFuturesTypeSessionTypes::valueIsValid($_Session)?$_Session:null);
	}
	/**
	 * Get Session
	 * @return XiFuturesTypeSessionTypes
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