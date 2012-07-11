<?php
/**
 * Class file for SODemographicsPlusTypeRaceDistribution
 * @date 06/07/2012
 */
/**
 * Class SODemographicsPlusTypeRaceDistribution
 * @date 06/07/2012
 */
class SODemographicsPlusTypeRaceDistribution extends SODemographicsPlusWsdlClass
{
	/**
	 * The PercentWhite
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentWhite;
	/**
	 * The PercentBlack
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentBlack;
	/**
	 * The PercentAmericanIndian
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentAmericanIndian;
	/**
	 * The PercentAsian
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentAsian;
	/**
	 * The PercentPacificIslander
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentPacificIslander;
	/**
	 * The PercentOtherRace
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentOtherRace;
	/**
	 * The PercentTwoOrMoreRaces
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentTwoOrMoreRaces;
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
	 * @param double PercentWhite
	 * @param double PercentBlack
	 * @param double PercentAmericanIndian
	 * @param double PercentAsian
	 * @param double PercentPacificIslander
	 * @param double PercentOtherRace
	 * @param double PercentTwoOrMoreRaces
	 * @param string ResolutionLevel
	 * @return SODemographicsPlusTypeRaceDistribution
	 */
	public function __construct($_PercentWhite,$_PercentBlack,$_PercentAmericanIndian,$_PercentAsian,$_PercentPacificIslander,$_PercentOtherRace,$_PercentTwoOrMoreRaces,$_ResolutionLevel = null)
	{
		parent::__construct(array('PercentWhite'=>$_PercentWhite,'PercentBlack'=>$_PercentBlack,'PercentAmericanIndian'=>$_PercentAmericanIndian,'PercentAsian'=>$_PercentAsian,'PercentPacificIslander'=>$_PercentPacificIslander,'PercentOtherRace'=>$_PercentOtherRace,'PercentTwoOrMoreRaces'=>$_PercentTwoOrMoreRaces,'ResolutionLevel'=>$_ResolutionLevel));
	}
	/**
	 * Set PercentWhite
	 * @param double PercentWhite
	 * @return double
	 */
	public function setPercentWhite($_PercentWhite)
	{
		return ($this->PercentWhite = $_PercentWhite);
	}
	/**
	 * Get PercentWhite
	 * @return double
	 */
	public function getPercentWhite()
	{
		return $this->PercentWhite;
	}
	/**
	 * Set PercentBlack
	 * @param double PercentBlack
	 * @return double
	 */
	public function setPercentBlack($_PercentBlack)
	{
		return ($this->PercentBlack = $_PercentBlack);
	}
	/**
	 * Get PercentBlack
	 * @return double
	 */
	public function getPercentBlack()
	{
		return $this->PercentBlack;
	}
	/**
	 * Set PercentAmericanIndian
	 * @param double PercentAmericanIndian
	 * @return double
	 */
	public function setPercentAmericanIndian($_PercentAmericanIndian)
	{
		return ($this->PercentAmericanIndian = $_PercentAmericanIndian);
	}
	/**
	 * Get PercentAmericanIndian
	 * @return double
	 */
	public function getPercentAmericanIndian()
	{
		return $this->PercentAmericanIndian;
	}
	/**
	 * Set PercentAsian
	 * @param double PercentAsian
	 * @return double
	 */
	public function setPercentAsian($_PercentAsian)
	{
		return ($this->PercentAsian = $_PercentAsian);
	}
	/**
	 * Get PercentAsian
	 * @return double
	 */
	public function getPercentAsian()
	{
		return $this->PercentAsian;
	}
	/**
	 * Set PercentPacificIslander
	 * @param double PercentPacificIslander
	 * @return double
	 */
	public function setPercentPacificIslander($_PercentPacificIslander)
	{
		return ($this->PercentPacificIslander = $_PercentPacificIslander);
	}
	/**
	 * Get PercentPacificIslander
	 * @return double
	 */
	public function getPercentPacificIslander()
	{
		return $this->PercentPacificIslander;
	}
	/**
	 * Set PercentOtherRace
	 * @param double PercentOtherRace
	 * @return double
	 */
	public function setPercentOtherRace($_PercentOtherRace)
	{
		return ($this->PercentOtherRace = $_PercentOtherRace);
	}
	/**
	 * Get PercentOtherRace
	 * @return double
	 */
	public function getPercentOtherRace()
	{
		return $this->PercentOtherRace;
	}
	/**
	 * Set PercentTwoOrMoreRaces
	 * @param double PercentTwoOrMoreRaces
	 * @return double
	 */
	public function setPercentTwoOrMoreRaces($_PercentTwoOrMoreRaces)
	{
		return ($this->PercentTwoOrMoreRaces = $_PercentTwoOrMoreRaces);
	}
	/**
	 * Get PercentTwoOrMoreRaces
	 * @return double
	 */
	public function getPercentTwoOrMoreRaces()
	{
		return $this->PercentTwoOrMoreRaces;
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