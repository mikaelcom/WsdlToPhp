<?php
/**
 * Class file for XiGlobalrealtimeTypeGetGlobalTicks
 * @date 08/07/2012
 */
/**
 * Class XiGlobalrealtimeTypeGetGlobalTicks
 * @date 08/07/2012
 */
class XiGlobalrealtimeTypeGetGlobalTicks extends XiGlobalrealtimeWsdlClass
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
	 * @var XiGlobalrealtimeTypeIdentifierTypes
	 */
	public $IdentifierType;
	/**
	 * The StartTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StartTime;
	/**
	 * The EndTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EndTime;
	/**
	 * The Precision
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiGlobalrealtimeTypeTickPrecisions
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
	 * @param XiGlobalrealtimeTypeIdentifierTypes IdentifierType
	 * @param string StartTime
	 * @param string EndTime
	 * @param XiGlobalrealtimeTypeTickPrecisions Precision
	 * @param int Period
	 * @return XiGlobalrealtimeTypeGetGlobalTicks
	 */
	public function __construct($_Identifier = null,$_IdentifierType,$_StartTime = null,$_EndTime = null,$_Precision,$_Period)
	{
		parent::__construct(array('Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType,'StartTime'=>$_StartTime,'EndTime'=>$_EndTime,'Precision'=>$_Precision,'Period'=>$_Period));
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
		return ($this->IdentifierType = XiGlobalrealtimeTypeIdentifierTypes::valueIsValid($_IdentifierType)?$_IdentifierType:null);
	}
	/**
	 * Get IdentifierType
	 * @return XiGlobalrealtimeTypeIdentifierTypes
	 */
	public function getIdentifierType()
	{
		return $this->IdentifierType;
	}
	/**
	 * Set StartTime
	 * @param string StartTime
	 * @return string
	 */
	public function setStartTime($_StartTime)
	{
		return ($this->StartTime = $_StartTime);
	}
	/**
	 * Get StartTime
	 * @return string
	 */
	public function getStartTime()
	{
		return $this->StartTime;
	}
	/**
	 * Set EndTime
	 * @param string EndTime
	 * @return string
	 */
	public function setEndTime($_EndTime)
	{
		return ($this->EndTime = $_EndTime);
	}
	/**
	 * Get EndTime
	 * @return string
	 */
	public function getEndTime()
	{
		return $this->EndTime;
	}
	/**
	 * Set Precision
	 * @param TickPrecisions Precision
	 * @return TickPrecisions
	 */
	public function setPrecision($_Precision)
	{
		return ($this->Precision = XiGlobalrealtimeTypeTickPrecisions::valueIsValid($_Precision)?$_Precision:null);
	}
	/**
	 * Get Precision
	 * @return XiGlobalrealtimeTypeTickPrecisions
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