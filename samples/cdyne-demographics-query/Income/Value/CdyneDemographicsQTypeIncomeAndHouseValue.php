<?php
/**
 * Class file for CdyneDemographicsQTypeIncomeAndHouseValue
 * @date 03/07/2012
 */
/**
 * Class CdyneDemographicsQTypeIncomeAndHouseValue
 * @date 03/07/2012
 */
class CdyneDemographicsQTypeIncomeAndHouseValue extends CdyneDemographicsQWsdlClass
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
	 * The MedianIncome
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $MedianIncome;
	/**
	 * The MedianHouseValue
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $MedianHouseValue;
	/**
	 * Constructor
	 * @param CdyneDemographicsQTypePlaceInformationCls PlaceInformation
	 * @param boolean Error
	 * @param string ErrorString
	 * @param int MedianIncome
	 * @param int MedianHouseValue
	 * @return CdyneDemographicsQTypeIncomeAndHouseValue
	 */
	public function __construct($_PlaceInformation = null,$_Error,$_ErrorString = null,$_MedianIncome,$_MedianHouseValue)
	{
		parent::__construct(array('PlaceInformation'=>$_PlaceInformation,'Error'=>$_Error,'ErrorString'=>$_ErrorString,'MedianIncome'=>$_MedianIncome,'MedianHouseValue'=>$_MedianHouseValue));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>