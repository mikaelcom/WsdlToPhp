<?php
/**
 * Class file for CdyneDemographicsQTypeSummaryInformation
 * @date 03/07/2012
 */
/**
 * Class CdyneDemographicsQTypeSummaryInformation
 * @date 03/07/2012
 */
class CdyneDemographicsQTypeSummaryInformation extends CdyneDemographicsQWsdlClass
{
	/**
	 * The PlaceInformation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var CdyneDemographicsQTypePlaceInformationCls
	 */
	public $PlaceInformation;
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $Error;
	/**
	 * The ErrorString
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ErrorString;
	/**
	 * The MedianAge
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var unsignedByte
	 */
	public $MedianAge;
	/**
	 * The MedianIncome
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $MedianIncome;
	/**
	 * The MedianRoomsInHouse
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var unsignedByte
	 */
	public $MedianRoomsInHouse;
	/**
	 * The MedianHouseValue
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $MedianHouseValue;
	/**
	 * The MedianVehicles
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var unsignedByte
	 */
	public $MedianVehicles;
	/**
	 * The MaritalStatusPercentages
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var CdyneDemographicsQTypeMaritalStatusPercentagesCls
	 */
	public $MaritalStatusPercentages;
	/**
	 * The RacePercentages
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var CdyneDemographicsQTypeRacePercentagesCls
	 */
	public $RacePercentages;
	/**
	 * The GenderPercentages
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var CdyneDemographicsQTypeGenderPercentagesCls
	 */
	public $GenderPercentages;
	/**
	 * Constructor
	 * @param CdyneDemographicsQTypePlaceInformationCls PlaceInformation
	 * @param boolean Error
	 * @param string ErrorString
	 * @param unsignedByte MedianAge
	 * @param int MedianIncome
	 * @param unsignedByte MedianRoomsInHouse
	 * @param int MedianHouseValue
	 * @param unsignedByte MedianVehicles
	 * @param CdyneDemographicsQTypeMaritalStatusPercentagesCls MaritalStatusPercentages
	 * @param CdyneDemographicsQTypeRacePercentagesCls RacePercentages
	 * @param CdyneDemographicsQTypeGenderPercentagesCls GenderPercentages
	 * @return CdyneDemographicsQTypeSummaryInformation
	 */
	public function __construct($_PlaceInformation = null,$_Error,$_ErrorString = null,$_MedianAge,$_MedianIncome,$_MedianRoomsInHouse,$_MedianHouseValue,$_MedianVehicles,$_MaritalStatusPercentages = null,$_RacePercentages = null,$_GenderPercentages = null)
	{
		parent::__construct(array('PlaceInformation'=>$_PlaceInformation,'Error'=>$_Error,'ErrorString'=>$_ErrorString,'MedianAge'=>$_MedianAge,'MedianIncome'=>$_MedianIncome,'MedianRoomsInHouse'=>$_MedianRoomsInHouse,'MedianHouseValue'=>$_MedianHouseValue,'MedianVehicles'=>$_MedianVehicles,'MaritalStatusPercentages'=>$_MaritalStatusPercentages,'RacePercentages'=>$_RacePercentages,'GenderPercentages'=>$_GenderPercentages));
	}
	/**
	 * Set PlaceInformation
	 * @param PlaceInformationCls PlaceInformation
	 * @return PlaceInformationCls
	 */
	public function setPlaceInformation($_PlaceInformation)
	{
		return ($this->PlaceInformation = $_PlaceInformation);
	}
	/**
	 * Get PlaceInformation
	 * @return CdyneDemographicsQTypePlaceInformationCls
	 */
	public function getPlaceInformation()
	{
		return $this->PlaceInformation;
	}
	/**
	 * Set Error
	 * @param boolean Error
	 * @return boolean
	 */
	public function setError($_Error)
	{
		return ($this->Error = $_Error);
	}
	/**
	 * Get Error
	 * @return boolean
	 */
	public function getError()
	{
		return $this->Error;
	}
	/**
	 * Set ErrorString
	 * @param string ErrorString
	 * @return string
	 */
	public function setErrorString($_ErrorString)
	{
		return ($this->ErrorString = $_ErrorString);
	}
	/**
	 * Get ErrorString
	 * @return string
	 */
	public function getErrorString()
	{
		return $this->ErrorString;
	}
	/**
	 * Set MedianAge
	 * @param unsignedByte MedianAge
	 * @return unsignedByte
	 */
	public function setMedianAge($_MedianAge)
	{
		return ($this->MedianAge = $_MedianAge);
	}
	/**
	 * Get MedianAge
	 * @return unsignedByte
	 */
	public function getMedianAge()
	{
		return $this->MedianAge;
	}
	/**
	 * Set MedianIncome
	 * @param int MedianIncome
	 * @return int
	 */
	public function setMedianIncome($_MedianIncome)
	{
		return ($this->MedianIncome = $_MedianIncome);
	}
	/**
	 * Get MedianIncome
	 * @return int
	 */
	public function getMedianIncome()
	{
		return $this->MedianIncome;
	}
	/**
	 * Set MedianRoomsInHouse
	 * @param unsignedByte MedianRoomsInHouse
	 * @return unsignedByte
	 */
	public function setMedianRoomsInHouse($_MedianRoomsInHouse)
	{
		return ($this->MedianRoomsInHouse = $_MedianRoomsInHouse);
	}
	/**
	 * Get MedianRoomsInHouse
	 * @return unsignedByte
	 */
	public function getMedianRoomsInHouse()
	{
		return $this->MedianRoomsInHouse;
	}
	/**
	 * Set MedianHouseValue
	 * @param int MedianHouseValue
	 * @return int
	 */
	public function setMedianHouseValue($_MedianHouseValue)
	{
		return ($this->MedianHouseValue = $_MedianHouseValue);
	}
	/**
	 * Get MedianHouseValue
	 * @return int
	 */
	public function getMedianHouseValue()
	{
		return $this->MedianHouseValue;
	}
	/**
	 * Set MedianVehicles
	 * @param unsignedByte MedianVehicles
	 * @return unsignedByte
	 */
	public function setMedianVehicles($_MedianVehicles)
	{
		return ($this->MedianVehicles = $_MedianVehicles);
	}
	/**
	 * Get MedianVehicles
	 * @return unsignedByte
	 */
	public function getMedianVehicles()
	{
		return $this->MedianVehicles;
	}
	/**
	 * Set MaritalStatusPercentages
	 * @param MaritalStatusPercentagesCls MaritalStatusPercentages
	 * @return MaritalStatusPercentagesCls
	 */
	public function setMaritalStatusPercentages($_MaritalStatusPercentages)
	{
		return ($this->MaritalStatusPercentages = $_MaritalStatusPercentages);
	}
	/**
	 * Get MaritalStatusPercentages
	 * @return CdyneDemographicsQTypeMaritalStatusPercentagesCls
	 */
	public function getMaritalStatusPercentages()
	{
		return $this->MaritalStatusPercentages;
	}
	/**
	 * Set RacePercentages
	 * @param RacePercentagesCls RacePercentages
	 * @return RacePercentagesCls
	 */
	public function setRacePercentages($_RacePercentages)
	{
		return ($this->RacePercentages = $_RacePercentages);
	}
	/**
	 * Get RacePercentages
	 * @return CdyneDemographicsQTypeRacePercentagesCls
	 */
	public function getRacePercentages()
	{
		return $this->RacePercentages;
	}
	/**
	 * Set GenderPercentages
	 * @param GenderPercentagesCls GenderPercentages
	 * @return GenderPercentagesCls
	 */
	public function setGenderPercentages($_GenderPercentages)
	{
		return ($this->GenderPercentages = $_GenderPercentages);
	}
	/**
	 * Get GenderPercentages
	 * @return CdyneDemographicsQTypeGenderPercentagesCls
	 */
	public function getGenderPercentages()
	{
		return $this->GenderPercentages;
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