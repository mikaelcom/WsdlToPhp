<?php
/**
 * Class file for SOFastWeatherTypeWarning
 * @date 08/07/2012
 */
/**
 * Class SOFastWeatherTypeWarning
 * @date 08/07/2012
 */
class SOFastWeatherTypeWarning extends SOFastWeatherWsdlClass
{
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOFastWeatherTypeErr
	 */
	public $Error;
	/**
	 * The Event
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Event;
	/**
	 * The Urgency
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Urgency;
	/**
	 * The Severity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Severity;
	/**
	 * The Certainty
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Certainty;
	/**
	 * The EffectiveFrom
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EffectiveFrom;
	/**
	 * The EffectiveUntil
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EffectiveUntil;
	/**
	 * The Headline
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Headline;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Description;
	/**
	 * The Area
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Area;
	/**
	 * The CountyFIPS
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CountyFIPS;
	/**
	 * The URL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $URL;
	/**
	 * Constructor
	 * @param SOFastWeatherTypeErr Error
	 * @param string Event
	 * @param string Urgency
	 * @param string Severity
	 * @param string Certainty
	 * @param string EffectiveFrom
	 * @param string EffectiveUntil
	 * @param string Headline
	 * @param string Description
	 * @param string Area
	 * @param string CountyFIPS
	 * @param string URL
	 * @return SOFastWeatherTypeWarning
	 */
	public function __construct($_Error = null,$_Event = null,$_Urgency = null,$_Severity = null,$_Certainty = null,$_EffectiveFrom = null,$_EffectiveUntil = null,$_Headline = null,$_Description = null,$_Area = null,$_CountyFIPS = null,$_URL = null)
	{
		parent::__construct(array('Error'=>$_Error,'Event'=>$_Event,'Urgency'=>$_Urgency,'Severity'=>$_Severity,'Certainty'=>$_Certainty,'EffectiveFrom'=>$_EffectiveFrom,'EffectiveUntil'=>$_EffectiveUntil,'Headline'=>$_Headline,'Description'=>$_Description,'Area'=>$_Area,'CountyFIPS'=>$_CountyFIPS,'URL'=>$_URL));
	}
	/**
	 * Set Error
	 * @param Err Error
	 * @return Err
	 */
	public function setError($_Error)
	{
		return ($this->Error = $_Error);
	}
	/**
	 * Get Error
	 * @return SOFastWeatherTypeErr
	 */
	public function getError()
	{
		return $this->Error;
	}
	/**
	 * Set Event
	 * @param string Event
	 * @return string
	 */
	public function setEvent($_Event)
	{
		return ($this->Event = $_Event);
	}
	/**
	 * Get Event
	 * @return string
	 */
	public function getEvent()
	{
		return $this->Event;
	}
	/**
	 * Set Urgency
	 * @param string Urgency
	 * @return string
	 */
	public function setUrgency($_Urgency)
	{
		return ($this->Urgency = $_Urgency);
	}
	/**
	 * Get Urgency
	 * @return string
	 */
	public function getUrgency()
	{
		return $this->Urgency;
	}
	/**
	 * Set Severity
	 * @param string Severity
	 * @return string
	 */
	public function setSeverity($_Severity)
	{
		return ($this->Severity = $_Severity);
	}
	/**
	 * Get Severity
	 * @return string
	 */
	public function getSeverity()
	{
		return $this->Severity;
	}
	/**
	 * Set Certainty
	 * @param string Certainty
	 * @return string
	 */
	public function setCertainty($_Certainty)
	{
		return ($this->Certainty = $_Certainty);
	}
	/**
	 * Get Certainty
	 * @return string
	 */
	public function getCertainty()
	{
		return $this->Certainty;
	}
	/**
	 * Set EffectiveFrom
	 * @param string EffectiveFrom
	 * @return string
	 */
	public function setEffectiveFrom($_EffectiveFrom)
	{
		return ($this->EffectiveFrom = $_EffectiveFrom);
	}
	/**
	 * Get EffectiveFrom
	 * @return string
	 */
	public function getEffectiveFrom()
	{
		return $this->EffectiveFrom;
	}
	/**
	 * Set EffectiveUntil
	 * @param string EffectiveUntil
	 * @return string
	 */
	public function setEffectiveUntil($_EffectiveUntil)
	{
		return ($this->EffectiveUntil = $_EffectiveUntil);
	}
	/**
	 * Get EffectiveUntil
	 * @return string
	 */
	public function getEffectiveUntil()
	{
		return $this->EffectiveUntil;
	}
	/**
	 * Set Headline
	 * @param string Headline
	 * @return string
	 */
	public function setHeadline($_Headline)
	{
		return ($this->Headline = $_Headline);
	}
	/**
	 * Get Headline
	 * @return string
	 */
	public function getHeadline()
	{
		return $this->Headline;
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
	 * Set Area
	 * @param string Area
	 * @return string
	 */
	public function setArea($_Area)
	{
		return ($this->Area = $_Area);
	}
	/**
	 * Get Area
	 * @return string
	 */
	public function getArea()
	{
		return $this->Area;
	}
	/**
	 * Set CountyFIPS
	 * @param string CountyFIPS
	 * @return string
	 */
	public function setCountyFIPS($_CountyFIPS)
	{
		return ($this->CountyFIPS = $_CountyFIPS);
	}
	/**
	 * Get CountyFIPS
	 * @return string
	 */
	public function getCountyFIPS()
	{
		return $this->CountyFIPS;
	}
	/**
	 * Set URL
	 * @param string URL
	 * @return string
	 */
	public function setURL($_URL)
	{
		return ($this->URL = $_URL);
	}
	/**
	 * Get URL
	 * @return string
	 */
	public function getURL()
	{
		return $this->URL;
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