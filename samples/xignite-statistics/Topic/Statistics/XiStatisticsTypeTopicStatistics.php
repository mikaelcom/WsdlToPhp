<?php
/**
 * Class file for XiStatisticsTypeTopicStatistics
 * @date 08/07/2012
 */
/**
 * Class XiStatisticsTypeTopicStatistics
 * @date 08/07/2012
 */
class XiStatisticsTypeTopicStatistics extends XiStatisticsTypeCommon
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
	 * The GrowthLow
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $GrowthLow;
	/**
	 * The GrowthHigh
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $GrowthHigh;
	/**
	 * The Mean
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Mean;
	/**
	 * The StdDev
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $StdDev;
	/**
	 * The MeanOfRollingMean
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $MeanOfRollingMean;
	/**
	 * The StdDevOfRollingMean
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $StdDevOfRollingMean;
	/**
	 * The MeanOfRollingStdDev
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $MeanOfRollingStdDev;
	/**
	 * The StdDevOfRollingStdDev
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $StdDevOfRollingStdDev;
	/**
	 * Constructor
	 * @param string Code
	 * @param string Name
	 * @param string Frequency
	 * @param string Units
	 * @param string StartDate
	 * @param string EndDate
	 * @param double GrowthLow
	 * @param double GrowthHigh
	 * @param double Mean
	 * @param double StdDev
	 * @param double MeanOfRollingMean
	 * @param double StdDevOfRollingMean
	 * @param double MeanOfRollingStdDev
	 * @param double StdDevOfRollingStdDev
	 * @return XiStatisticsTypeTopicStatistics
	 */
	public function __construct($_Code = null,$_Name = null,$_Frequency = null,$_Units = null,$_StartDate = null,$_EndDate = null,$_GrowthLow,$_GrowthHigh,$_Mean,$_StdDev,$_MeanOfRollingMean,$_StdDevOfRollingMean,$_MeanOfRollingStdDev,$_StdDevOfRollingStdDev)
	{
		XiStatisticsWsdlClass::__construct(array('Code'=>$_Code,'Name'=>$_Name,'Frequency'=>$_Frequency,'Units'=>$_Units,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate,'GrowthLow'=>$_GrowthLow,'GrowthHigh'=>$_GrowthHigh,'Mean'=>$_Mean,'StdDev'=>$_StdDev,'MeanOfRollingMean'=>$_MeanOfRollingMean,'StdDevOfRollingMean'=>$_StdDevOfRollingMean,'MeanOfRollingStdDev'=>$_MeanOfRollingStdDev,'StdDevOfRollingStdDev'=>$_StdDevOfRollingStdDev));
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
	 * Set GrowthLow
	 * @param double GrowthLow
	 * @return double
	 */
	public function setGrowthLow($_GrowthLow)
	{
		return ($this->GrowthLow = $_GrowthLow);
	}
	/**
	 * Get GrowthLow
	 * @return double
	 */
	public function getGrowthLow()
	{
		return $this->GrowthLow;
	}
	/**
	 * Set GrowthHigh
	 * @param double GrowthHigh
	 * @return double
	 */
	public function setGrowthHigh($_GrowthHigh)
	{
		return ($this->GrowthHigh = $_GrowthHigh);
	}
	/**
	 * Get GrowthHigh
	 * @return double
	 */
	public function getGrowthHigh()
	{
		return $this->GrowthHigh;
	}
	/**
	 * Set Mean
	 * @param double Mean
	 * @return double
	 */
	public function setMean($_Mean)
	{
		return ($this->Mean = $_Mean);
	}
	/**
	 * Get Mean
	 * @return double
	 */
	public function getMean()
	{
		return $this->Mean;
	}
	/**
	 * Set StdDev
	 * @param double StdDev
	 * @return double
	 */
	public function setStdDev($_StdDev)
	{
		return ($this->StdDev = $_StdDev);
	}
	/**
	 * Get StdDev
	 * @return double
	 */
	public function getStdDev()
	{
		return $this->StdDev;
	}
	/**
	 * Set MeanOfRollingMean
	 * @param double MeanOfRollingMean
	 * @return double
	 */
	public function setMeanOfRollingMean($_MeanOfRollingMean)
	{
		return ($this->MeanOfRollingMean = $_MeanOfRollingMean);
	}
	/**
	 * Get MeanOfRollingMean
	 * @return double
	 */
	public function getMeanOfRollingMean()
	{
		return $this->MeanOfRollingMean;
	}
	/**
	 * Set StdDevOfRollingMean
	 * @param double StdDevOfRollingMean
	 * @return double
	 */
	public function setStdDevOfRollingMean($_StdDevOfRollingMean)
	{
		return ($this->StdDevOfRollingMean = $_StdDevOfRollingMean);
	}
	/**
	 * Get StdDevOfRollingMean
	 * @return double
	 */
	public function getStdDevOfRollingMean()
	{
		return $this->StdDevOfRollingMean;
	}
	/**
	 * Set MeanOfRollingStdDev
	 * @param double MeanOfRollingStdDev
	 * @return double
	 */
	public function setMeanOfRollingStdDev($_MeanOfRollingStdDev)
	{
		return ($this->MeanOfRollingStdDev = $_MeanOfRollingStdDev);
	}
	/**
	 * Get MeanOfRollingStdDev
	 * @return double
	 */
	public function getMeanOfRollingStdDev()
	{
		return $this->MeanOfRollingStdDev;
	}
	/**
	 * Set StdDevOfRollingStdDev
	 * @param double StdDevOfRollingStdDev
	 * @return double
	 */
	public function setStdDevOfRollingStdDev($_StdDevOfRollingStdDev)
	{
		return ($this->StdDevOfRollingStdDev = $_StdDevOfRollingStdDev);
	}
	/**
	 * Get StdDevOfRollingStdDev
	 * @return double
	 */
	public function getStdDevOfRollingStdDev()
	{
		return $this->StdDevOfRollingStdDev;
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