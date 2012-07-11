<?php
/**
 * Class file for XiHousingTypeYearlyByState
 * @date 08/07/2012
 */
/**
 * Class XiHousingTypeYearlyByState
 * @date 08/07/2012
 */
class XiHousingTypeYearlyByState extends XiHousingTypeCommon
{
	/**
	 * The Year
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Year;
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiHousingTypeOptionTypes
	 */
	public $Type;
	/**
	 * The Area
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiHousingTypeAreaTypes
	 */
	public $Area;
	/**
	 * The Records
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHousingTypeArrayOfRecord
	 */
	public $Records;
	/**
	 * Constructor
	 * @param int Year
	 * @param XiHousingTypeOptionTypes Type
	 * @param XiHousingTypeAreaTypes Area
	 * @param XiHousingTypeArrayOfRecord Records
	 * @return XiHousingTypeYearlyByState
	 */
	public function __construct($_Year,$_Type,$_Area,$_Records = null)
	{
		XiHousingWsdlClass::__construct(array('Year'=>$_Year,'Type'=>$_Type,'Area'=>$_Area,'Records'=>new XiHousingTypeArrayOfRecord($_Records)));
	}
	/**
	 * Set Year
	 * @param int Year
	 * @return int
	 */
	public function setYear($_Year)
	{
		return ($this->Year = $_Year);
	}
	/**
	 * Get Year
	 * @return int
	 */
	public function getYear()
	{
		return $this->Year;
	}
	/**
	 * Set Type
	 * @param OptionTypes Type
	 * @return OptionTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiHousingTypeOptionTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiHousingTypeOptionTypes
	 */
	public function getType()
	{
		return $this->Type;
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
	 * Set Records
	 * @param ArrayOfRecord Records
	 * @return ArrayOfRecord
	 */
	public function setRecords($_Records)
	{
		return ($this->Records = $_Records);
	}
	/**
	 * Get Records
	 * @return XiHousingTypeArrayOfRecord
	 */
	public function getRecords()
	{
		return $this->Records;
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