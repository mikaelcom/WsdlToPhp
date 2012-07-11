<?php
/**
 * Class file for XiExchangesTypeAreExchangesOpen
 * @date 08/07/2012
 */
/**
 * Class XiExchangesTypeAreExchangesOpen
 * @date 08/07/2012
 */
class XiExchangesTypeAreExchangesOpen extends XiExchangesWsdlClass
{
	/**
	 * The Exchanges
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Exchanges;
	/**
	 * Constructor
	 * @param string Exchanges
	 * @return XiExchangesTypeAreExchangesOpen
	 */
	public function __construct($_Exchanges = null)
	{
		parent::__construct(array('Exchanges'=>$_Exchanges));
	}
	/**
	 * Set Exchanges
	 * @param string Exchanges
	 * @return string
	 */
	public function setExchanges($_Exchanges)
	{
		return ($this->Exchanges = $_Exchanges);
	}
	/**
	 * Get Exchanges
	 * @return string
	 */
	public function getExchanges()
	{
		return $this->Exchanges;
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