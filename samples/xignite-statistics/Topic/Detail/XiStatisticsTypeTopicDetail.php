<?php
/**
 * Class file for XiStatisticsTypeTopicDetail
 * @date 08/07/2012
 */
/**
 * Class XiStatisticsTypeTopicDetail
 * @date 08/07/2012
 */
class XiStatisticsTypeTopicDetail extends XiStatisticsTypeCommon
{
	/**
	 * The Code
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Code;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The Source
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Source;
	/**
	 * The Release
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Release;
	/**
	 * The Adjustment
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Adjustment;
	/**
	 * The Frequency
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Frequency;
	/**
	 * The Units
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Units;
	/**
	 * The StartDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StartDate;
	/**
	 * The EndDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EndDate;
	/**
	 * The LastUpdated
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LastUpdated;
	/**
	 * The Notes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Notes;
	/**
	 * The Discontinued
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Discontinued;
	/**
	 * Constructor
	 * @param string Code
	 * @param string Name
	 * @param string Source
	 * @param string Release
	 * @param string Adjustment
	 * @param string Frequency
	 * @param string Units
	 * @param string StartDate
	 * @param string EndDate
	 * @param string LastUpdated
	 * @param string Notes
	 * @param boolean Discontinued
	 * @return XiStatisticsTypeTopicDetail
	 */
	public function __construct($_Code = null,$_Name = null,$_Source = null,$_Release = null,$_Adjustment = null,$_Frequency = null,$_Units = null,$_StartDate = null,$_EndDate = null,$_LastUpdated = null,$_Notes = null,$_Discontinued)
	{
		XiStatisticsWsdlClass::__construct(array('Code'=>$_Code,'Name'=>$_Name,'Source'=>$_Source,'Release'=>$_Release,'Adjustment'=>$_Adjustment,'Frequency'=>$_Frequency,'Units'=>$_Units,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate,'LastUpdated'=>$_LastUpdated,'Notes'=>$_Notes,'Discontinued'=>$_Discontinued));
	}
	/**
	 * Set Code
	 * @param string Code
	 * @return string
	 */
	public function setCode($_Code)
	{
		return ($this->Code = $_Code);
	}
	/**
	 * Get Code
	 * @return string
	 */
	public function getCode()
	{
		return $this->Code;
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Source
	 * @param string Source
	 * @return string
	 */
	public function setSource($_Source)
	{
		return ($this->Source = $_Source);
	}
	/**
	 * Get Source
	 * @return string
	 */
	public function getSource()
	{
		return $this->Source;
	}
	/**
	 * Set Release
	 * @param string Release
	 * @return string
	 */
	public function setRelease($_Release)
	{
		return ($this->Release = $_Release);
	}
	/**
	 * Get Release
	 * @return string
	 */
	public function getRelease()
	{
		return $this->Release;
	}
	/**
	 * Set Adjustment
	 * @param string Adjustment
	 * @return string
	 */
	public function setAdjustment($_Adjustment)
	{
		return ($this->Adjustment = $_Adjustment);
	}
	/**
	 * Get Adjustment
	 * @return string
	 */
	public function getAdjustment()
	{
		return $this->Adjustment;
	}
	/**
	 * Set Frequency
	 * @param string Frequency
	 * @return string
	 */
	public function setFrequency($_Frequency)
	{
		return ($this->Frequency = $_Frequency);
	}
	/**
	 * Get Frequency
	 * @return string
	 */
	public function getFrequency()
	{
		return $this->Frequency;
	}
	/**
	 * Set Units
	 * @param string Units
	 * @return string
	 */
	public function setUnits($_Units)
	{
		return ($this->Units = $_Units);
	}
	/**
	 * Get Units
	 * @return string
	 */
	public function getUnits()
	{
		return $this->Units;
	}
	/**
	 * Set StartDate
	 * @param string StartDate
	 * @return string
	 */
	public function setStartDate($_StartDate)
	{
		return ($this->StartDate = $_StartDate);
	}
	/**
	 * Get StartDate
	 * @return string
	 */
	public function getStartDate()
	{
		return $this->StartDate;
	}
	/**
	 * Set EndDate
	 * @param string EndDate
	 * @return string
	 */
	public function setEndDate($_EndDate)
	{
		return ($this->EndDate = $_EndDate);
	}
	/**
	 * Get EndDate
	 * @return string
	 */
	public function getEndDate()
	{
		return $this->EndDate;
	}
	/**
	 * Set LastUpdated
	 * @param string LastUpdated
	 * @return string
	 */
	public function setLastUpdated($_LastUpdated)
	{
		return ($this->LastUpdated = $_LastUpdated);
	}
	/**
	 * Get LastUpdated
	 * @return string
	 */
	public function getLastUpdated()
	{
		return $this->LastUpdated;
	}
	/**
	 * Set Notes
	 * @param string Notes
	 * @return string
	 */
	public function setNotes($_Notes)
	{
		return ($this->Notes = $_Notes);
	}
	/**
	 * Get Notes
	 * @return string
	 */
	public function getNotes()
	{
		return $this->Notes;
	}
	/**
	 * Set Discontinued
	 * @param boolean Discontinued
	 * @return boolean
	 */
	public function setDiscontinued($_Discontinued)
	{
		return ($this->Discontinued = $_Discontinued);
	}
	/**
	 * Get Discontinued
	 * @return boolean
	 */
	public function getDiscontinued()
	{
		return $this->Discontinued;
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