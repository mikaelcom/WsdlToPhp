<?php
/**
 * Class file for XiGlobalmasterTypeGetMasterByIndustry
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeGetMasterByIndustry
 * @date 08/07/2012
 */
class XiGlobalmasterTypeGetMasterByIndustry extends XiGlobalmasterWsdlClass
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
	 * The Industry
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiGlobalmasterTypeIndustries
	 */
	public $Industry;
	/**
	 * The StartSymbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StartSymbol;
	/**
	 * The EndSymbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EndSymbol;
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
	 * @param XiGlobalmasterTypeIndustries Industry
	 * @param string StartSymbol
	 * @param string EndSymbol
	 * @param InstrumentClasses InstrumentClass
	 * @param string AsOfDate
	 * @return XiGlobalmasterTypeGetMasterByIndustry
	 */
	public function __construct($_Exchange,$_Industry,$_StartSymbol = null,$_EndSymbol = null,$_InstrumentClass,$_AsOfDate = null)
	{
		parent::__construct(array('Exchange'=>$_Exchange,'Industry'=>$_Industry,'StartSymbol'=>$_StartSymbol,'EndSymbol'=>$_EndSymbol,'InstrumentClass'=>$_InstrumentClass,'AsOfDate'=>$_AsOfDate));
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
	 * Set Industry
	 * @param Industries Industry
	 * @return Industries
	 */
	public function setIndustry($_Industry)
	{
		return ($this->Industry = XiGlobalmasterTypeIndustries::valueIsValid($_Industry)?$_Industry:null);
	}
	/**
	 * Get Industry
	 * @return XiGlobalmasterTypeIndustries
	 */
	public function getIndustry()
	{
		return $this->Industry;
	}
	/**
	 * Set StartSymbol
	 * @param string StartSymbol
	 * @return string
	 */
	public function setStartSymbol($_StartSymbol)
	{
		return ($this->StartSymbol = $_StartSymbol);
	}
	/**
	 * Get StartSymbol
	 * @return string
	 */
	public function getStartSymbol()
	{
		return $this->StartSymbol;
	}
	/**
	 * Set EndSymbol
	 * @param string EndSymbol
	 * @return string
	 */
	public function setEndSymbol($_EndSymbol)
	{
		return ($this->EndSymbol = $_EndSymbol);
	}
	/**
	 * Get EndSymbol
	 * @return string
	 */
	public function getEndSymbol()
	{
		return $this->EndSymbol;
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