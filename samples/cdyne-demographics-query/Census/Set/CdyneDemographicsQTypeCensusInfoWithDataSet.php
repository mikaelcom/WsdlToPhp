<?php
/**
 * Class file for CdyneDemographicsQTypeCensusInfoWithDataSet
 * @date 03/07/2012
 */
/**
 * Class CdyneDemographicsQTypeCensusInfoWithDataSet
 * @date 03/07/2012
 */
class CdyneDemographicsQTypeCensusInfoWithDataSet extends CdyneDemographicsQWsdlClass
{
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
	 * The CensusDataSet
	 * @var CdyneDemographicsQTypeCensusDataSet
	 */
	public $CensusDataSet;
	/**
	 * Constructor
	 * @param boolean Error
	 * @param string ErrorString
	 * @param CdyneDemographicsQTypeCensusDataSet CensusDataSet
	 * @return CdyneDemographicsQTypeCensusInfoWithDataSet
	 */
	public function __construct($_Error,$_ErrorString = null,$_CensusDataSet = null)
	{
		parent::__construct(array('Error'=>$_Error,'ErrorString'=>$_ErrorString,'CensusDataSet'=>$_CensusDataSet));
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
	 * Set CensusDataSet
	 * @param CensusDataSet CensusDataSet
	 * @return CensusDataSet
	 */
	public function setCensusDataSet($_CensusDataSet)
	{
		return ($this->CensusDataSet = $_CensusDataSet);
	}
	/**
	 * Get CensusDataSet
	 * @return CdyneDemographicsQTypeCensusDataSet
	 */
	public function getCensusDataSet()
	{
		return $this->CensusDataSet;
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