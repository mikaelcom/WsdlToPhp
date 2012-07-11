<?php
/**
 * Class file for XiHousingTypeGetHistoricalIndicators
 * @date 08/07/2012
 */
/**
 * Class XiHousingTypeGetHistoricalIndicators
 * @date 08/07/2012
 */
class XiHousingTypeGetHistoricalIndicators extends XiHousingWsdlClass
{
	/**
	 * The Category
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiHousingTypeIndicatorDataCategories
	 */
	public $Category;
	/**
	 * The Area
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiHousingTypeRegions
	 */
	public $Area;
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
	 * The Period
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiHousingTypePeriods
	 */
	public $Period;
	/**
	 * Constructor
	 * @param XiHousingTypeIndicatorDataCategories Category
	 * @param XiHousingTypeRegions Area
	 * @param string StartDate
	 * @param string EndDate
	 * @param XiHousingTypePeriods Period
	 * @return XiHousingTypeGetHistoricalIndicators
	 */
	public function __construct($_Category,$_Area,$_StartDate = null,$_EndDate = null,$_Period)
	{
		parent::__construct(array('Category'=>$_Category,'Area'=>$_Area,'StartDate'=>$_StartDate,'EndDate'=>$_EndDate,'Period'=>$_Period));
	}
	/**
	 * Set Category
	 * @param IndicatorDataCategories Category
	 * @return IndicatorDataCategories
	 */
	public function setCategory($_Category)
	{
		return ($this->Category = XiHousingTypeIndicatorDataCategories::valueIsValid($_Category)?$_Category:null);
	}
	/**
	 * Get Category
	 * @return XiHousingTypeIndicatorDataCategories
	 */
	public function getCategory()
	{
		return $this->Category;
	}
	/**
	 * Set Area
	 * @param Regions Area
	 * @return Regions
	 */
	public function setArea($_Area)
	{
		return ($this->Area = XiHousingTypeRegions::valueIsValid($_Area)?$_Area:null);
	}
	/**
	 * Get Area
	 * @return XiHousingTypeRegions
	 */
	public function getArea()
	{
		return $this->Area;
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
	 * Set Period
	 * @param Periods Period
	 * @return Periods
	 */
	public function setPeriod($_Period)
	{
		return ($this->Period = XiHousingTypePeriods::valueIsValid($_Period)?$_Period:null);
	}
	/**
	 * Get Period
	 * @return XiHousingTypePeriods
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