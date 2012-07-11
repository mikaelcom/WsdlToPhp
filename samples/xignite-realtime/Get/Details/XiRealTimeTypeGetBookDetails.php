<?php
/**
 * Class file for XiRealTimeTypeGetBookDetails
 * @date 08/07/2012
 */
/**
 * Class XiRealTimeTypeGetBookDetails
 * @date 08/07/2012
 */
class XiRealTimeTypeGetBookDetails extends XiRealTimeWsdlClass
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
	 * The Symbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Symbol;
	/**
	 * The MaximumOrders
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $MaximumOrders;
	/**
	 * Constructor
	 * @param XiRealTimeTypeECNTypes Exchange
	 * @param string Symbol
	 * @param int MaximumOrders
	 * @return XiRealTimeTypeGetBookDetails
	 */
	public function __construct($_Exchange,$_Symbol = null,$_MaximumOrders)
	{
		parent::__construct(array('Exchange'=>$_Exchange,'Symbol'=>$_Symbol,'MaximumOrders'=>$_MaximumOrders));
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
	 * Set MaximumOrders
	 * @param int MaximumOrders
	 * @return int
	 */
	public function setMaximumOrders($_MaximumOrders)
	{
		return ($this->MaximumOrders = $_MaximumOrders);
	}
	/**
	 * Get MaximumOrders
	 * @return int
	 */
	public function getMaximumOrders()
	{
		return $this->MaximumOrders;
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