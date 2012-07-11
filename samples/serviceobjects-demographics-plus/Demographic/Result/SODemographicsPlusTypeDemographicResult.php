<?php
/**
 * Class file for SODemographicsPlusTypeDemographicResult
 * @date 06/07/2012
 */
/**
 * Class SODemographicsPlusTypeDemographicResult
 * @date 06/07/2012
 */
class SODemographicsPlusTypeDemographicResult extends SODemographicsPlusWsdlClass
{
	/**
	 * The AgeDistribution
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SODemographicsPlusTypeAgeDistribution
	 */
	public $AgeDistribution;
	/**
	 * The IncomeDistribution
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SODemographicsPlusTypeIncomeDistribution
	 */
	public $IncomeDistribution;
	/**
	 * The RaceDistribution
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SODemographicsPlusTypeRaceDistribution
	 */
	public $RaceDistribution;
	/**
	 * The EthnicDistribution
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SODemographicsPlusTypeEthnicDistribution
	 */
	public $EthnicDistribution;
	/**
	 * The UrbanClassification
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SODemographicsPlusTypeUrbanClassification
	 */
	public $UrbanClassification;
	/**
	 * The OtherInformation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SODemographicsPlusTypeOtherInformation
	 */
	public $OtherInformation;
	/**
	 * The CensusElements
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SODemographicsPlusTypeCensusElements
	 */
	public $CensusElements;
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SODemographicsPlusTypeError
	 */
	public $Error;
	/**
	 * The Debug
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Debug;
	/**
	 * Constructor
	 * @param SODemographicsPlusTypeAgeDistribution AgeDistribution
	 * @param SODemographicsPlusTypeIncomeDistribution IncomeDistribution
	 * @param SODemographicsPlusTypeRaceDistribution RaceDistribution
	 * @param SODemographicsPlusTypeEthnicDistribution EthnicDistribution
	 * @param SODemographicsPlusTypeUrbanClassification UrbanClassification
	 * @param SODemographicsPlusTypeOtherInformation OtherInformation
	 * @param SODemographicsPlusTypeCensusElements CensusElements
	 * @param SODemographicsPlusTypeError Error
	 * @param string Debug
	 * @return SODemographicsPlusTypeDemographicResult
	 */
	public function __construct($_AgeDistribution = null,$_IncomeDistribution = null,$_RaceDistribution = null,$_EthnicDistribution = null,$_UrbanClassification = null,$_OtherInformation = null,$_CensusElements = null,$_Error = null,$_Debug = null)
	{
		parent::__construct(array('AgeDistribution'=>$_AgeDistribution,'IncomeDistribution'=>$_IncomeDistribution,'RaceDistribution'=>$_RaceDistribution,'EthnicDistribution'=>$_EthnicDistribution,'UrbanClassification'=>$_UrbanClassification,'OtherInformation'=>$_OtherInformation,'CensusElements'=>$_CensusElements,'Error'=>$_Error,'Debug'=>$_Debug));
	}
	/**
	 * Set AgeDistribution
	 * @param AgeDistribution AgeDistribution
	 * @return AgeDistribution
	 */
	public function setAgeDistribution($_AgeDistribution)
	{
		return ($this->AgeDistribution = $_AgeDistribution);
	}
	/**
	 * Get AgeDistribution
	 * @return SODemographicsPlusTypeAgeDistribution
	 */
	public function getAgeDistribution()
	{
		return $this->AgeDistribution;
	}
	/**
	 * Set IncomeDistribution
	 * @param IncomeDistribution IncomeDistribution
	 * @return IncomeDistribution
	 */
	public function setIncomeDistribution($_IncomeDistribution)
	{
		return ($this->IncomeDistribution = $_IncomeDistribution);
	}
	/**
	 * Get IncomeDistribution
	 * @return SODemographicsPlusTypeIncomeDistribution
	 */
	public function getIncomeDistribution()
	{
		return $this->IncomeDistribution;
	}
	/**
	 * Set RaceDistribution
	 * @param RaceDistribution RaceDistribution
	 * @return RaceDistribution
	 */
	public function setRaceDistribution($_RaceDistribution)
	{
		return ($this->RaceDistribution = $_RaceDistribution);
	}
	/**
	 * Get RaceDistribution
	 * @return SODemographicsPlusTypeRaceDistribution
	 */
	public function getRaceDistribution()
	{
		return $this->RaceDistribution;
	}
	/**
	 * Set EthnicDistribution
	 * @param EthnicDistribution EthnicDistribution
	 * @return EthnicDistribution
	 */
	public function setEthnicDistribution($_EthnicDistribution)
	{
		return ($this->EthnicDistribution = $_EthnicDistribution);
	}
	/**
	 * Get EthnicDistribution
	 * @return SODemographicsPlusTypeEthnicDistribution
	 */
	public function getEthnicDistribution()
	{
		return $this->EthnicDistribution;
	}
	/**
	 * Set UrbanClassification
	 * @param UrbanClassification UrbanClassification
	 * @return UrbanClassification
	 */
	public function setUrbanClassification($_UrbanClassification)
	{
		return ($this->UrbanClassification = $_UrbanClassification);
	}
	/**
	 * Get UrbanClassification
	 * @return SODemographicsPlusTypeUrbanClassification
	 */
	public function getUrbanClassification()
	{
		return $this->UrbanClassification;
	}
	/**
	 * Set OtherInformation
	 * @param OtherInformation OtherInformation
	 * @return OtherInformation
	 */
	public function setOtherInformation($_OtherInformation)
	{
		return ($this->OtherInformation = $_OtherInformation);
	}
	/**
	 * Get OtherInformation
	 * @return SODemographicsPlusTypeOtherInformation
	 */
	public function getOtherInformation()
	{
		return $this->OtherInformation;
	}
	/**
	 * Set CensusElements
	 * @param CensusElements CensusElements
	 * @return CensusElements
	 */
	public function setCensusElements($_CensusElements)
	{
		return ($this->CensusElements = $_CensusElements);
	}
	/**
	 * Get CensusElements
	 * @return SODemographicsPlusTypeCensusElements
	 */
	public function getCensusElements()
	{
		return $this->CensusElements;
	}
	/**
	 * Set Error
	 * @param Error Error
	 * @return Error
	 */
	public function setError($_Error)
	{
		return ($this->Error = $_Error);
	}
	/**
	 * Get Error
	 * @return SODemographicsPlusTypeError
	 */
	public function getError()
	{
		return $this->Error;
	}
	/**
	 * Set Debug
	 * @param string Debug
	 * @return string
	 */
	public function setDebug($_Debug)
	{
		return ($this->Debug = $_Debug);
	}
	/**
	 * Get Debug
	 * @return string
	 */
	public function getDebug()
	{
		return $this->Debug;
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