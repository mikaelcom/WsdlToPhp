<?php
/**
 * Class file for XiStatisticsTypeGetTopicBinaryChartPreset
 * @date 08/07/2012
 */
/**
 * Class XiStatisticsTypeGetTopicBinaryChartPreset
 * @date 08/07/2012
 */
class XiStatisticsTypeGetTopicBinaryChartPreset extends XiStatisticsWsdlClass
{
	/**
	 * The TopicCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TopicCode;
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
	 * The ChartWidth
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $ChartWidth;
	/**
	 * The ChartHeight
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $ChartHeight;
	/**
	 * The Preset
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Preset;
	/**
	 * Constructor
	 * @param string TopicCode
	 * @param string StartDate
	 * @param string EndDate
	 * @param int ChartWidth
	 * @param int ChartHeight
	 * @param string Preset
	 * @return XiStatisticsTypeGetTopicBinaryChartPreset
	 */
	public function __construct($_TopicCode = null,$_StartDate = null,$_EndDate = null,$_ChartWidth,$_ChartHeight,$_Preset = null)
	{
		parent::__construct(array('TopicCode'=>$_TopicCode,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate,'ChartWidth'=>$_ChartWidth,'ChartHeight'=>$_ChartHeight,'Preset'=>$_Preset));
	}
	/**
	 * Set TopicCode
	 * @param string TopicCode
	 * @return string
	 */
	public function setTopicCode($_TopicCode)
	{
		return ($this->TopicCode = $_TopicCode);
	}
	/**
	 * Get TopicCode
	 * @return string
	 */
	public function getTopicCode()
	{
		return $this->TopicCode;
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
	 * Set ChartWidth
	 * @param int ChartWidth
	 * @return int
	 */
	public function setChartWidth($_ChartWidth)
	{
		return ($this->ChartWidth = $_ChartWidth);
	}
	/**
	 * Get ChartWidth
	 * @return int
	 */
	public function getChartWidth()
	{
		return $this->ChartWidth;
	}
	/**
	 * Set ChartHeight
	 * @param int ChartHeight
	 * @return int
	 */
	public function setChartHeight($_ChartHeight)
	{
		return ($this->ChartHeight = $_ChartHeight);
	}
	/**
	 * Get ChartHeight
	 * @return int
	 */
	public function getChartHeight()
	{
		return $this->ChartHeight;
	}
	/**
	 * Set Preset
	 * @param string Preset
	 * @return string
	 */
	public function setPreset($_Preset)
	{
		return ($this->Preset = $_Preset);
	}
	/**
	 * Get Preset
	 * @return string
	 */
	public function getPreset()
	{
		return $this->Preset;
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