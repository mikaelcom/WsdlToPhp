<?php
/**
 * Class file for XiStatisticsTypeTopic
 * @date 08/07/2012
 */
/**
 * Class XiStatisticsTypeTopic
 * @date 08/07/2012
 */
class XiStatisticsTypeTopic extends XiStatisticsTypeCommon
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
	 * @param string Frequency
	 * @param string Units
	 * @param boolean Discontinued
	 * @return XiStatisticsTypeTopic
	 */
	public function __construct($_Code = null,$_Name = null,$_Frequency = null,$_Units = null,$_Discontinued)
	{
		XiStatisticsWsdlClass::__construct(array('Code'=>$_Code,'Name'=>$_Name,'Frequency'=>$_Frequency,'Units'=>$_Units,'Discontinued'=>$_Discontinued));
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