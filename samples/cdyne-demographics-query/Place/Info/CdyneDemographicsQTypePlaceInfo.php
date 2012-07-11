<?php
/**
 * Class file for CdyneDemographicsQTypePlaceInfo
 * @date 03/07/2012
 */
/**
 * Class CdyneDemographicsQTypePlaceInfo
 * @date 03/07/2012
 */
class CdyneDemographicsQTypePlaceInfo extends CdyneDemographicsQWsdlClass
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
	 * Constructor
	 * @param CdyneDemographicsQTypePlaceInformationCls PlaceInformation
	 * @param boolean Error
	 * @param string ErrorString
	 * @return CdyneDemographicsQTypePlaceInfo
	 */
	public function __construct($_PlaceInformation = null,$_Error,$_ErrorString = null)
	{
		parent::__construct(array('PlaceInformation'=>$_PlaceInformation,'Error'=>$_Error,'ErrorString'=>$_ErrorString));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>