<?php
/**
 * Class file for SODemographicsPlusTypeOtherInformation
 * @date 06/07/2012
 */
/**
 * Class SODemographicsPlusTypeOtherInformation
 * @date 06/07/2012
 */
class SODemographicsPlusTypeOtherInformation extends SODemographicsPlusWsdlClass
{
	/**
	 * The Population
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Population;
	/**
	 * The AreaInSquareKilometers
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AreaInSquareKilometers;
	/**
	 * The PeoplePerSquareKilometer
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PeoplePerSquareKilometer;
	/**
	 * The PercentFemale
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentFemale;
	/**
	 * The PercentMale
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentMale;
	/**
	 * The ResolutionLevel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ResolutionLevel;
	/**
	 * Constructor
	 * @param int Population
	 * @param double AreaInSquareKilometers
	 * @param double PeoplePerSquareKilometer
	 * @param double PercentFemale
	 * @param double PercentMale
	 * @param string ResolutionLevel
	 * @return SODemographicsPlusTypeOtherInformation
	 */
	public function __construct($_Population,$_AreaInSquareKilometers,$_PeoplePerSquareKilometer,$_PercentFemale,$_PercentMale,$_ResolutionLevel = null)
	{
		parent::__construct(array('Population'=>$_Population,'AreaInSquareKilometers'=>$_AreaInSquareKilometers,'PeoplePerSquareKilometer'=>$_PeoplePerSquareKilometer,'PercentFemale'=>$_PercentFemale,'PercentMale'=>$_PercentMale,'ResolutionLevel'=>$_ResolutionLevel));
	}
	/**
	 * Set Population
	 * @param int Population
	 * @return int
	 */
	public function setPopulation($_Population)
	{
		return ($this->Population = $_Population);
	}
	/**
	 * Get Population
	 * @return int
	 */
	public function getPopulation()
	{
		return $this->Population;
	}
	/**
	 * Set AreaInSquareKilometers
	 * @param double AreaInSquareKilometers
	 * @return double
	 */
	public function setAreaInSquareKilometers($_AreaInSquareKilometers)
	{
		return ($this->AreaInSquareKilometers = $_AreaInSquareKilometers);
	}
	/**
	 * Get AreaInSquareKilometers
	 * @return double
	 */
	public function getAreaInSquareKilometers()
	{
		return $this->AreaInSquareKilometers;
	}
	/**
	 * Set PeoplePerSquareKilometer
	 * @param double PeoplePerSquareKilometer
	 * @return double
	 */
	public function setPeoplePerSquareKilometer($_PeoplePerSquareKilometer)
	{
		return ($this->PeoplePerSquareKilometer = $_PeoplePerSquareKilometer);
	}
	/**
	 * Get PeoplePerSquareKilometer
	 * @return double
	 */
	public function getPeoplePerSquareKilometer()
	{
		return $this->PeoplePerSquareKilometer;
	}
	/**
	 * Set PercentFemale
	 * @param double PercentFemale
	 * @return double
	 */
	public function setPercentFemale($_PercentFemale)
	{
		return ($this->PercentFemale = $_PercentFemale);
	}
	/**
	 * Get PercentFemale
	 * @return double
	 */
	public function getPercentFemale()
	{
		return $this->PercentFemale;
	}
	/**
	 * Set PercentMale
	 * @param double PercentMale
	 * @return double
	 */
	public function setPercentMale($_PercentMale)
	{
		return ($this->PercentMale = $_PercentMale);
	}
	/**
	 * Get PercentMale
	 * @return double
	 */
	public function getPercentMale()
	{
		return $this->PercentMale;
	}
	/**
	 * Set ResolutionLevel
	 * @param string ResolutionLevel
	 * @return string
	 */
	public function setResolutionLevel($_ResolutionLevel)
	{
		return ($this->ResolutionLevel = $_ResolutionLevel);
	}
	/**
	 * Get ResolutionLevel
	 * @return string
	 */
	public function getResolutionLevel()
	{
		return $this->ResolutionLevel;
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