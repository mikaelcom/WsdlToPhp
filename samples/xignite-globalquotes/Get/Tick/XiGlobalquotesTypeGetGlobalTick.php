<?php
/**
 * Class file for XiGlobalquotesTypeGetGlobalTick
 * @date 08/07/2012
 */
/**
 * Class XiGlobalquotesTypeGetGlobalTick
 * @date 08/07/2012
 */
class XiGlobalquotesTypeGetGlobalTick extends XiGlobalquotesWsdlClass
{
	/**
	 * The Identifier
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Identifier;
	/**
	 * The IdentifierType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiGlobalquotesTypeIdentifierTypes
	 */
	public $IdentifierType;
	/**
	 * The Time
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Time;
	/**
	 * The Precision
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiGlobalquotesTypeTickPrecisions
	 */
	public $Precision;
	/**
	 * The Period
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Period;
	/**
	 * Constructor
	 * @param string Identifier
	 * @param XiGlobalquotesTypeIdentifierTypes IdentifierType
	 * @param string Time
	 * @param XiGlobalquotesTypeTickPrecisions Precision
	 * @param int Period
	 * @return XiGlobalquotesTypeGetGlobalTick
	 */
	public function __construct($_Identifier = null,$_IdentifierType,$_Time = null,$_Precision,$_Period)
	{
		parent::__construct(array('Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType,'Time'=>$_Time,'Precision'=>$_Precision,'Period'=>$_Period));
	}
	/**
	 * Set Identifier
	 * @param string Identifier
	 * @return string
	 */
	public function setIdentifier($_Identifier)
	{
		return ($this->Identifier = $_Identifier);
	}
	/**
	 * Get Identifier
	 * @return string
	 */
	public function getIdentifier()
	{
		return $this->Identifier;
	}
	/**
	 * Set IdentifierType
	 * @param IdentifierTypes IdentifierType
	 * @return IdentifierTypes
	 */
	public function setIdentifierType($_IdentifierType)
	{
		return ($this->IdentifierType = XiGlobalquotesTypeIdentifierTypes::valueIsValid($_IdentifierType)?$_IdentifierType:null);
	}
	/**
	 * Get IdentifierType
	 * @return XiGlobalquotesTypeIdentifierTypes
	 */
	public function getIdentifierType()
	{
		return $this->IdentifierType;
	}
	/**
	 * Set Time
	 * @param string Time
	 * @return string
	 */
	public function setTime($_Time)
	{
		return ($this->Time = $_Time);
	}
	/**
	 * Get Time
	 * @return string
	 */
	public function getTime()
	{
		return $this->Time;
	}
	/**
	 * Set Precision
	 * @param TickPrecisions Precision
	 * @return TickPrecisions
	 */
	public function setPrecision($_Precision)
	{
		return ($this->Precision = XiGlobalquotesTypeTickPrecisions::valueIsValid($_Precision)?$_Precision:null);
	}
	/**
	 * Get Precision
	 * @return XiGlobalquotesTypeTickPrecisions
	 */
	public function getPrecision()
	{
		return $this->Precision;
	}
	/**
	 * Set Period
	 * @param int Period
	 * @return int
	 */
	public function setPeriod($_Period)
	{
		return ($this->Period = $_Period);
	}
	/**
	 * Get Period
	 * @return int
	 */
	public function getPeriod()
	{
		return $this->Period;
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