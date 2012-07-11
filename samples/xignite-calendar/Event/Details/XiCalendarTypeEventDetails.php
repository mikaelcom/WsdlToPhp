<?php
/**
 * Class file for XiCalendarTypeEventDetails
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeEventDetails
 * @date 08/07/2012
 */
class XiCalendarTypeEventDetails extends XiCalendarTypeAbstractEconodayObject
{
	/**
	 * The EventID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EventID;
	/**
	 * The EventCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EventCode;
	/**
	 * The CountryCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CountryCode;
	/**
	 * The EventName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EventName;
	/**
	 * The ReleasedOn
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var dateTime
	 */
	public $ReleasedOn;
	/**
	 * The Values
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCalendarTypeArrayOfEventValue
	 */
	public $Values;
	/**
	 * The Definition
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Definition;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Description;
	/**
	 * The CountryName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CountryName;
	/**
	 * The IsInternational
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $IsInternational;
	/**
	 * The ReleasedFor
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ReleasedFor;
	/**
	 * The ReleasedForStart
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var dateTime
	 */
	public $ReleasedForStart;
	/**
	 * The ReleasedForEnd
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var dateTime
	 */
	public $ReleasedForEnd;
	/**
	 * The Highlights
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Highlights;
	/**
	 * The Frequency
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Frequency;
	/**
	 * The ConsensusNotes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ConsensusNotes;
	/**
	 * Constructor
	 * @param string EventID
	 * @param string EventCode
	 * @param string CountryCode
	 * @param string EventName
	 * @param dateTime ReleasedOn
	 * @param XiCalendarTypeArrayOfEventValue Values
	 * @param string Definition
	 * @param string Description
	 * @param string CountryName
	 * @param boolean IsInternational
	 * @param string ReleasedFor
	 * @param dateTime ReleasedForStart
	 * @param dateTime ReleasedForEnd
	 * @param string Highlights
	 * @param int Frequency
	 * @param string ConsensusNotes
	 * @return XiCalendarTypeEventDetails
	 */
	public function __construct($_EventID = null,$_EventCode = null,$_CountryCode = null,$_EventName = null,$_ReleasedOn,$_Values = null,$_Definition = null,$_Description = null,$_CountryName = null,$_IsInternational,$_ReleasedFor = null,$_ReleasedForStart,$_ReleasedForEnd,$_Highlights = null,$_Frequency,$_ConsensusNotes = null)
	{
		XiCalendarWsdlClass::__construct(array('EventID'=>$_EventID,'EventCode'=>$_EventCode,'CountryCode'=>$_CountryCode,'EventName'=>$_EventName,'ReleasedOn'=>$_ReleasedOn,'Values'=>new XiCalendarTypeArrayOfEventValue($_Values),'Definition'=>$_Definition,'Description'=>$_Description,'CountryName'=>$_CountryName,'IsInternational'=>$_IsInternational,'ReleasedFor'=>$_ReleasedFor,'ReleasedForStart'=>$_ReleasedForStart,'ReleasedForEnd'=>$_ReleasedForEnd,'Highlights'=>$_Highlights,'Frequency'=>$_Frequency,'ConsensusNotes'=>$_ConsensusNotes));
	}
	/**
	 * Set EventID
	 * @param string EventID
	 * @return string
	 */
	public function setEventID($_EventID)
	{
		return ($this->EventID = $_EventID);
	}
	/**
	 * Get EventID
	 * @return string
	 */
	public function getEventID()
	{
		return $this->EventID;
	}
	/**
	 * Set EventCode
	 * @param string EventCode
	 * @return string
	 */
	public function setEventCode($_EventCode)
	{
		return ($this->EventCode = $_EventCode);
	}
	/**
	 * Get EventCode
	 * @return string
	 */
	public function getEventCode()
	{
		return $this->EventCode;
	}
	/**
	 * Set CountryCode
	 * @param string CountryCode
	 * @return string
	 */
	public function setCountryCode($_CountryCode)
	{
		return ($this->CountryCode = $_CountryCode);
	}
	/**
	 * Get CountryCode
	 * @return string
	 */
	public function getCountryCode()
	{
		return $this->CountryCode;
	}
	/**
	 * Set EventName
	 * @param string EventName
	 * @return string
	 */
	public function setEventName($_EventName)
	{
		return ($this->EventName = $_EventName);
	}
	/**
	 * Get EventName
	 * @return string
	 */
	public function getEventName()
	{
		return $this->EventName;
	}
	/**
	 * Set ReleasedOn
	 * @param dateTime ReleasedOn
	 * @return dateTime
	 */
	public function setReleasedOn($_ReleasedOn)
	{
		return ($this->ReleasedOn = $_ReleasedOn);
	}
	/**
	 * Get ReleasedOn
	 * @return dateTime
	 */
	public function getReleasedOn()
	{
		return $this->ReleasedOn;
	}
	/**
	 * Set Values
	 * @param ArrayOfEventValue Values
	 * @return ArrayOfEventValue
	 */
	public function setValues($_Values)
	{
		return ($this->Values = $_Values);
	}
	/**
	 * Get Values
	 * @return XiCalendarTypeArrayOfEventValue
	 */
	public function getValues()
	{
		return $this->Values;
	}
	/**
	 * Set Definition
	 * @param string Definition
	 * @return string
	 */
	public function setDefinition($_Definition)
	{
		return ($this->Definition = $_Definition);
	}
	/**
	 * Get Definition
	 * @return string
	 */
	public function getDefinition()
	{
		return $this->Definition;
	}
	/**
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set CountryName
	 * @param string CountryName
	 * @return string
	 */
	public function setCountryName($_CountryName)
	{
		return ($this->CountryName = $_CountryName);
	}
	/**
	 * Get CountryName
	 * @return string
	 */
	public function getCountryName()
	{
		return $this->CountryName;
	}
	/**
	 * Set IsInternational
	 * @param boolean IsInternational
	 * @return boolean
	 */
	public function setIsInternational($_IsInternational)
	{
		return ($this->IsInternational = $_IsInternational);
	}
	/**
	 * Get IsInternational
	 * @return boolean
	 */
	public function getIsInternational()
	{
		return $this->IsInternational;
	}
	/**
	 * Set ReleasedFor
	 * @param string ReleasedFor
	 * @return string
	 */
	public function setReleasedFor($_ReleasedFor)
	{
		return ($this->ReleasedFor = $_ReleasedFor);
	}
	/**
	 * Get ReleasedFor
	 * @return string
	 */
	public function getReleasedFor()
	{
		return $this->ReleasedFor;
	}
	/**
	 * Set ReleasedForStart
	 * @param dateTime ReleasedForStart
	 * @return dateTime
	 */
	public function setReleasedForStart($_ReleasedForStart)
	{
		return ($this->ReleasedForStart = $_ReleasedForStart);
	}
	/**
	 * Get ReleasedForStart
	 * @return dateTime
	 */
	public function getReleasedForStart()
	{
		return $this->ReleasedForStart;
	}
	/**
	 * Set ReleasedForEnd
	 * @param dateTime ReleasedForEnd
	 * @return dateTime
	 */
	public function setReleasedForEnd($_ReleasedForEnd)
	{
		return ($this->ReleasedForEnd = $_ReleasedForEnd);
	}
	/**
	 * Get ReleasedForEnd
	 * @return dateTime
	 */
	public function getReleasedForEnd()
	{
		return $this->ReleasedForEnd;
	}
	/**
	 * Set Highlights
	 * @param string Highlights
	 * @return string
	 */
	public function setHighlights($_Highlights)
	{
		return ($this->Highlights = $_Highlights);
	}
	/**
	 * Get Highlights
	 * @return string
	 */
	public function getHighlights()
	{
		return $this->Highlights;
	}
	/**
	 * Set Frequency
	 * @param int Frequency
	 * @return int
	 */
	public function setFrequency($_Frequency)
	{
		return ($this->Frequency = $_Frequency);
	}
	/**
	 * Get Frequency
	 * @return int
	 */
	public function getFrequency()
	{
		return $this->Frequency;
	}
	/**
	 * Set ConsensusNotes
	 * @param string ConsensusNotes
	 * @return string
	 */
	public function setConsensusNotes($_ConsensusNotes)
	{
		return ($this->ConsensusNotes = $_ConsensusNotes);
	}
	/**
	 * Get ConsensusNotes
	 * @return string
	 */
	public function getConsensusNotes()
	{
		return $this->ConsensusNotes;
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