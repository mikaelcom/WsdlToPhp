<?php
/**
 * Class file for XiRealTimeTypeSearchByMarketCap
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeSearchByMarketCap
 * @date 08/07/2012
 */
class XiRealTimeTypeSearchByMarketCap extends XiRealTimeWsdlClass
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
	 * The PercentChange
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentChange;
	/**
	 * The MinimumMarketCap
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $MinimumMarketCap;
	/**
	 * The MaximumMarketCap
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $MaximumMarketCap;
	/**
	 * Constructor
	 * @param XiRealTimeTypeECNTypes Exchange
	 * @param double PercentChange
	 * @param double MinimumMarketCap
	 * @param double MaximumMarketCap
	 * @return XiRealTimeTypeSearchByMarketCap
	 */
	public function __construct($_Exchange,$_PercentChange,$_MinimumMarketCap,$_MaximumMarketCap)
	{
		parent::__construct(array('Exchange'=>$_Exchange,'PercentChange'=>$_PercentChange,'MinimumMarketCap'=>$_MinimumMarketCap,'MaximumMarketCap'=>$_MaximumMarketCap));
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
	 * Set PercentChange
	 * @param double PercentChange
	 * @return double
	 */
	public function setPercentChange($_PercentChange)
	{
		return ($this->PercentChange = $_PercentChange);
	}
	/**
	 * Get PercentChange
	 * @return double
	 */
	public function getPercentChange()
	{
		return $this->PercentChange;
	}
	/**
	 * Set MinimumMarketCap
	 * @param double MinimumMarketCap
	 * @return double
	 */
	public function setMinimumMarketCap($_MinimumMarketCap)
	{
		return ($this->MinimumMarketCap = $_MinimumMarketCap);
	}
	/**
	 * Get MinimumMarketCap
	 * @return double
	 */
	public function getMinimumMarketCap()
	{
		return $this->MinimumMarketCap;
	}
	/**
	 * Set MaximumMarketCap
	 * @param double MaximumMarketCap
	 * @return double
	 */
	public function setMaximumMarketCap($_MaximumMarketCap)
	{
		return ($this->MaximumMarketCap = $_MaximumMarketCap);
	}
	/**
	 * Get MaximumMarketCap
	 * @return double
	 */
	public function getMaximumMarketCap()
	{
		return $this->MaximumMarketCap;
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