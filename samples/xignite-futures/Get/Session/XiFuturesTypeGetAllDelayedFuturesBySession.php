<?php
/**
 * Class file for XiFuturesTypeGetAllDelayedFuturesBySession
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetAllDelayedFuturesBySession
 * @date 08/07/2012
 */
class XiFuturesTypeGetAllDelayedFuturesBySession extends XiFuturesWsdlClass
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
	 * The Session
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeSessionTypes
	 */
	public $Session;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param XiFuturesTypeSessionTypes Session
	 * @return XiFuturesTypeGetAllDelayedFuturesBySession
	 */
	public function __construct($_Symbol = null,$_Session)
	{
		parent::__construct(array('Symbol'=>$_Symbol,'Session'=>$_Session));
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