<?php
/**
 * Class file for XiHousingTypeHousingStatisticsRecord
 * @date 08/07/2012
 */
/**
 * Class XiHousingTypeHousingStatisticsRecord
 * @date 08/07/2012
 */
class XiHousingTypeHousingStatisticsRecord extends XiHousingTypeAbstractHousingDataObject
{
	/**
	 * The DataCategory
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiHousingTypeDataCategories
	 */
	public $DataCategory;
	/**
	 * The Region
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiHousingTypeAllAreas
	 */
	public $Region;
	/**
	 * The StartDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StartDate;
	/**
	 * The Period
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiHousingTypePeriods
	 */
	public $Period;
	/**
	 * The Value
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Value;
	/**
	 * Constructor
	 * @param XiHousingTypeDataCategories DataCategory
	 * @param XiHousingTypeAllAreas Region
	 * @param string StartDate
	 * @param XiHousingTypePeriods Period
	 * @param double Value
	 * @return XiHousingTypeHousingStatisticsRecord
	 */
	public function __construct($_DataCategory,$_Region,$_StartDate = null,$_Period,$_Value)
	{
		XiHousingWsdlClass::__construct(array('DataCategory'=>$_DataCategory,'Region'=>$_Region,'StartDate'=>$_StartDate,'Period'=>$_Period,'Value'=>$_Value));
	}
	/**
	 * Set DataCategory
	 * @param DataCategories DataCategory
	 * @return DataCategories
	 */
	public function setDataCategory($_DataCategory)
	{
		return ($this->DataCategory = XiHousingTypeDataCategories::valueIsValid($_DataCategory)?$_DataCategory:null);
	}
	/**
	 * Get DataCategory
	 * @return XiHousingTypeDataCategories
	 */
	public function getDataCategory()
	{
		return $this->DataCategory;
	}
	/**
	 * Set Region
	 * @param AllAreas Region
	 * @return AllAreas
	 */
	public function setRegion($_Region)
	{
		return ($this->Region = XiHousingTypeAllAreas::valueIsValid($_Region)?$_Region:null);
	}
	/**
	 * Get Region
	 * @return XiHousingTypeAllAreas
	 */
	public function getRegion()
	{
		return $this->Region;
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
	 * Set Value
	 * @param double Value
	 * @return double
	 */
	public function setValue($_Value)
	{
		return ($this->Value = $_Value);
	}
	/**
	 * Get Value
	 * @return double
	 */
	public function getValue()
	{
		return $this->Value;
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