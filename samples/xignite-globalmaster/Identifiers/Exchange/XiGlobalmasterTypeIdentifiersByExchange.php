<?php
/**
 * Class file for XiGlobalmasterTypeIdentifiersByExchange
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeIdentifiersByExchange
 * @date 08/07/2012
 */
class XiGlobalmasterTypeIdentifiersByExchange extends XiGlobalmasterTypeCommon
{
	/**
	 * The IdentifierType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IdentifierType;
	/**
	 * The Exchange
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Exchange;
	/**
	 * The InstrumentClass
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $InstrumentClass;
	/**
	 * The Count
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Count;
	/**
	 * The ArrayOfIdentifierResults
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalmasterTypeArrayOfIdentifierResult
	 */
	public $ArrayOfIdentifierResults;
	/**
	 * Constructor
	 * @param string IdentifierType
	 * @param string Exchange
	 * @param string InstrumentClass
	 * @param int Count
	 * @param XiGlobalmasterTypeArrayOfIdentifierResult ArrayOfIdentifierResults
	 * @return XiGlobalmasterTypeIdentifiersByExchange
	 */
	public function __construct($_IdentifierType = null,$_Exchange = null,$_InstrumentClass = null,$_Count,$_ArrayOfIdentifierResults = null)
	{
		XiGlobalmasterWsdlClass::__construct(array('IdentifierType'=>$_IdentifierType,'Exchange'=>$_Exchange,'InstrumentClass'=>$_InstrumentClass,'Count'=>$_Count,'ArrayOfIdentifierResults'=>new XiGlobalmasterTypeArrayOfIdentifierResult($_ArrayOfIdentifierResults)));
	}
	/**
	 * Set IdentifierType
	 * @param string IdentifierType
	 * @return string
	 */
	public function setIdentifierType($_IdentifierType)
	{
		return ($this->IdentifierType = $_IdentifierType);
	}
	/**
	 * Get IdentifierType
	 * @return string
	 */
	public function getIdentifierType()
	{
		return $this->IdentifierType;
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
	 * Set InstrumentClass
	 * @param string InstrumentClass
	 * @return string
	 */
	public function setInstrumentClass($_InstrumentClass)
	{
		return ($this->InstrumentClass = $_InstrumentClass);
	}
	/**
	 * Get InstrumentClass
	 * @return string
	 */
	public function getInstrumentClass()
	{
		return $this->InstrumentClass;
	}
	/**
	 * Set Count
	 * @param int Count
	 * @return int
	 */
	public function setCount($_Count)
	{
		return ($this->Count = $_Count);
	}
	/**
	 * Get Count
	 * @return int
	 */
	public function getCount()
	{
		return $this->Count;
	}
	/**
	 * Set ArrayOfIdentifierResults
	 * @param ArrayOfIdentifierResult ArrayOfIdentifierResults
	 * @return ArrayOfIdentifierResult
	 */
	public function setArrayOfIdentifierResults($_ArrayOfIdentifierResults)
	{
		return ($this->ArrayOfIdentifierResults = $_ArrayOfIdentifierResults);
	}
	/**
	 * Get ArrayOfIdentifierResults
	 * @return XiGlobalmasterTypeArrayOfIdentifierResult
	 */
	public function getArrayOfIdentifierResults()
	{
		return $this->ArrayOfIdentifierResults;
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