<?php
/**
 * Class file for XiQuotesTypeGetTopsByExchange
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeGetTopsByExchange
 * @date 08/07/2012
 */
class XiQuotesTypeGetTopsByExchange extends XiQuotesWsdlClass
{
	/**
	 * The TopType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiQuotesTypeTopTypes
	 */
	public $TopType;
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
	 * @param XiQuotesTypeTopTypes TopType
	 * @param string Exchange
	 * @return XiQuotesTypeGetTopsByExchange
	 */
	public function __construct($_TopType,$_Exchange = null)
	{
		parent::__construct(array('TopType'=>$_TopType,'Exchange'=>$_Exchange));
	}
	/**
	 * Set TopType
	 * @param TopTypes TopType
	 * @return TopTypes
	 */
	public function setTopType($_TopType)
	{
		return ($this->TopType = XiQuotesTypeTopTypes::valueIsValid($_TopType)?$_TopType:null);
	}
	/**
	 * Get TopType
	 * @return XiQuotesTypeTopTypes
	 */
	public function getTopType()
	{
		return $this->TopType;
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