<?php
/**
 * Class file for XiHousingTypeGetMonthlyPermits
 * @date 08/07/2012
 */
/**
 * Class XiHousingTypeGetMonthlyPermits
 * @date 08/07/2012
 */
class XiHousingTypeGetMonthlyPermits extends XiHousingWsdlClass
{
	/**
	 * The FromDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FromDate;
	/**
	 * The ToDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ToDate;
	/**
	 * The Option
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiHousingTypeOptionTypes
	 */
	public $Option;
	/**
	 * The Area
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiHousingTypeAreaTypes
	 */
	public $Area;
	/**
	 * The IncludeSubAreas
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $IncludeSubAreas;
	/**
	 * Constructor
	 * @param string FromDate
	 * @param string ToDate
	 * @param XiHousingTypeOptionTypes Option
	 * @param XiHousingTypeAreaTypes Area
	 * @param boolean IncludeSubAreas
	 * @return XiHousingTypeGetMonthlyPermits
	 */
	public function __construct($_FromDate = null,$_ToDate = null,$_Option,$_Area,$_IncludeSubAreas)
	{
		parent::__construct(array('FromDate'=>$_FromDate,'ToDate'=>$_ToDate,'Option'=>$_Option,'Area'=>$_Area,'IncludeSubAreas'=>$_IncludeSubAreas));
	}
	/**
	 * Set FromDate
	 * @param string FromDate
	 * @return string
	 */
	public function setFromDate($_FromDate)
	{
		return ($this->FromDate = $_FromDate);
	}
	/**
	 * Get FromDate
	 * @return string
	 */
	public function getFromDate()
	{
		return $this->FromDate;
	}
	/**
	 * Set ToDate
	 * @param string ToDate
	 * @return string
	 */
	public function setToDate($_ToDate)
	{
		return ($this->ToDate = $_ToDate);
	}
	/**
	 * Get ToDate
	 * @return string
	 */
	public function getToDate()
	{
		return $this->ToDate;
	}
	/**
	 * Set Option
	 * @param OptionTypes Option
	 * @return OptionTypes
	 */
	public function setOption($_Option)
	{
		return ($this->Option = XiHousingTypeOptionTypes::valueIsValid($_Option)?$_Option:null);
	}
	/**
	 * Get Option
	 * @return XiHousingTypeOptionTypes
	 */
	public function getOption()
	{
		return $this->Option;
	}
	/**
	 * Set Area
	 * @param AreaTypes Area
	 * @return AreaTypes
	 */
	public function setArea($_Area)
	{
		return ($this->Area = XiHousingTypeAreaTypes::valueIsValid($_Area)?$_Area:null);
	}
	/**
	 * Get Area
	 * @return XiHousingTypeAreaTypes
	 */
	public function getArea()
	{
		return $this->Area;
	}
	/**
	 * Set IncludeSubAreas
	 * @param boolean IncludeSubAreas
	 * @return boolean
	 */
	public function setIncludeSubAreas($_IncludeSubAreas)
	{
		return ($this->IncludeSubAreas = $_IncludeSubAreas);
	}
	/**
	 * Get IncludeSubAreas
	 * @return boolean
	 */
	public function getIncludeSubAreas()
	{
		return $this->IncludeSubAreas;
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