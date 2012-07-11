<?php
/**
 * Class file for XiHousingTypeGetYearlyPermits
 * @date 08/07/2012
 */
/**
 * Class XiHousingTypeGetYearlyPermits
 * @date 08/07/2012
 */
class XiHousingTypeGetYearlyPermits extends XiHousingWsdlClass
{
	/**
	 * The FromYear
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $FromYear;
	/**
	 * The ToYear
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $ToYear;
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
	 * @param int FromYear
	 * @param int ToYear
	 * @param XiHousingTypeOptionTypes Option
	 * @param XiHousingTypeAreaTypes Area
	 * @param boolean IncludeSubAreas
	 * @return XiHousingTypeGetYearlyPermits
	 */
	public function __construct($_FromYear,$_ToYear,$_Option,$_Area,$_IncludeSubAreas)
	{
		parent::__construct(array('FromYear'=>$_FromYear,'ToYear'=>$_ToYear,'Option'=>$_Option,'Area'=>$_Area,'IncludeSubAreas'=>$_IncludeSubAreas));
	}
	/**
	 * Set FromYear
	 * @param int FromYear
	 * @return int
	 */
	public function setFromYear($_FromYear)
	{
		return ($this->FromYear = $_FromYear);
	}
	/**
	 * Get FromYear
	 * @return int
	 */
	public function getFromYear()
	{
		return $this->FromYear;
	}
	/**
	 * Set ToYear
	 * @param int ToYear
	 * @return int
	 */
	public function setToYear($_ToYear)
	{
		return ($this->ToYear = $_ToYear);
	}
	/**
	 * Get ToYear
	 * @return int
	 */
	public function getToYear()
	{
		return $this->ToYear;
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