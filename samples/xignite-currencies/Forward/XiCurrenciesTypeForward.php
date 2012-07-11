<?php
/**
 * Class file for XiCurrenciesTypeForward
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeForward
 * @date 08/07/2012
 */
class XiCurrenciesTypeForward extends XiCurrenciesWsdlClass
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeForwardTypes
	 */
	public $Type;
	/**
	 * The Bid
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Bid;
	/**
	 * The Ask
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Ask;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeForwardTypes Type
	 * @param double Bid
	 * @param double Ask
	 * @return XiCurrenciesTypeForward
	 */
	public function __construct($_Type,$_Bid,$_Ask)
	{
		parent::__construct(array('Type'=>$_Type,'Bid'=>$_Bid,'Ask'=>$_Ask));
	}
	/**
	 * Set Type
	 * @param ForwardTypes Type
	 * @return ForwardTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiCurrenciesTypeForwardTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiCurrenciesTypeForwardTypes
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set Bid
	 * @param double Bid
	 * @return double
	 */
	public function setBid($_Bid)
	{
		return ($this->Bid = $_Bid);
	}
	/**
	 * Get Bid
	 * @return double
	 */
	public function getBid()
	{
		return $this->Bid;
	}
	/**
	 * Set Ask
	 * @param double Ask
	 * @return double
	 */
	public function setAsk($_Ask)
	{
		return ($this->Ask = $_Ask);
	}
	/**
	 * Get Ask
	 * @return double
	 */
	public function getAsk()
	{
		return $this->Ask;
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