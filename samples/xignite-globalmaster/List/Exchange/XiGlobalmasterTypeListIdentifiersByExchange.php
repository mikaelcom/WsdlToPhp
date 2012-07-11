<?php
/**
 * Class file for XiGlobalmasterTypeListIdentifiersByExchange
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeListIdentifiersByExchange
 * @date 08/07/2012
 */
class XiGlobalmasterTypeListIdentifiersByExchange extends XiGlobalmasterWsdlClass
{
	/**
	 * The Exchange
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiGlobalmasterTypeExchanges
	 */
	public $Exchange;
	/**
	 * The IdentifierType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiGlobalmasterTypeIdentifierTypes
	 */
	public $IdentifierType;
	/**
	 * The InstrumentClass
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var InstrumentClasses
	 */
	public $InstrumentClass;
	/**
	 * The AsOfDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AsOfDate;
	/**
	 * Constructor
	 * @param XiGlobalmasterTypeExchanges Exchange
	 * @param XiGlobalmasterTypeIdentifierTypes IdentifierType
	 * @param InstrumentClasses InstrumentClass
	 * @param string AsOfDate
	 * @return XiGlobalmasterTypeListIdentifiersByExchange
	 */
	public function __construct($_Exchange,$_IdentifierType,$_InstrumentClass,$_AsOfDate = null)
	{
		parent::__construct(array('Exchange'=>$_Exchange,'IdentifierType'=>$_IdentifierType,'InstrumentClass'=>$_InstrumentClass,'AsOfDate'=>$_AsOfDate));
	}
	/**
	 * Set Exchange
	 * @param Exchanges Exchange
	 * @return Exchanges
	 */
	public function setExchange($_Exchange)
	{
		return ($this->Exchange = XiGlobalmasterTypeExchanges::valueIsValid($_Exchange)?$_Exchange:null);
	}
	/**
	 * Get Exchange
	 * @return XiGlobalmasterTypeExchanges
	 */
	public function getExchange()
	{
		return $this->Exchange;
	}
	/**
	 * Set IdentifierType
	 * @param IdentifierTypes IdentifierType
	 * @return IdentifierTypes
	 */
	public function setIdentifierType($_IdentifierType)
	{
		return ($this->IdentifierType = XiGlobalmasterTypeIdentifierTypes::valueIsValid($_IdentifierType)?$_IdentifierType:null);
	}
	/**
	 * Get IdentifierType
	 * @return XiGlobalmasterTypeIdentifierTypes
	 */
	public function getIdentifierType()
	{
		return $this->IdentifierType;
	}
	/**
	 * Set InstrumentClass
	 * @param InstrumentClasses InstrumentClass
	 * @return InstrumentClasses
	 */
	public function setInstrumentClass($_InstrumentClass)
	{
		return ($this->InstrumentClass = $_InstrumentClass);
	}
	/**
	 * Get InstrumentClass
	 * @return InstrumentClasses
	 */
	public function getInstrumentClass()
	{
		return $this->InstrumentClass;
	}
	/**
	 * Set AsOfDate
	 * @param string AsOfDate
	 * @return string
	 */
	public function setAsOfDate($_AsOfDate)
	{
		return ($this->AsOfDate = $_AsOfDate);
	}
	/**
	 * Get AsOfDate
	 * @return string
	 */
	public function getAsOfDate()
	{
		return $this->AsOfDate;
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