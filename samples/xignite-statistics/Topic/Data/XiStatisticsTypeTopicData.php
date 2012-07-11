<?php
/**
 * Class file for XiStatisticsTypeTopicData
 * @date 08/07/2012
 */
/**
 * Class XiStatisticsTypeTopicData
 * @date 08/07/2012
 */
class XiStatisticsTypeTopicData extends XiStatisticsTypeCommon
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
	 * The DataCollection
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiStatisticsTypeArrayOfSeriesData
	 */
	public $DataCollection;
	/**
	 * Constructor
	 * @param string Code
	 * @param string Name
	 * @param string Frequency
	 * @param string Units
	 * @param string StartDate
	 * @param string EndDate
	 * @param XiStatisticsTypeArrayOfSeriesData DataCollection
	 * @return XiStatisticsTypeTopicData
	 */
	public function __construct($_Code = null,$_Name = null,$_Frequency = null,$_Units = null,$_StartDate = null,$_EndDate = null,$_DataCollection = null)
	{
		XiStatisticsWsdlClass::__construct(array('Code'=>$_Code,'Name'=>$_Name,'Frequency'=>$_Frequency,'Units'=>$_Units,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate,'DataCollection'=>new XiStatisticsTypeArrayOfSeriesData($_DataCollection)));
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
	 * Set DataCollection
	 * @param ArrayOfSeriesData DataCollection
	 * @return ArrayOfSeriesData
	 */
	public function setDataCollection($_DataCollection)
	{
		return ($this->DataCollection = $_DataCollection);
	}
	/**
	 * Get DataCollection
	 * @return XiStatisticsTypeArrayOfSeriesData
	 */
	public function getDataCollection()
	{
		return $this->DataCollection;
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