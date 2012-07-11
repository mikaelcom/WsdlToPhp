<?php
/**
 * Class file for SODemographicsPlusTypeEthnicDistribution
 * @date 06/07/2012
 */
/**
 * Class SODemographicsPlusTypeEthnicDistribution
 * @date 06/07/2012
 */
class SODemographicsPlusTypeEthnicDistribution extends SODemographicsPlusWsdlClass
{
	/**
	 * The PercentHispanicOrLatinoOfAnyRace
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentHispanicOrLatinoOfAnyRace;
	/**
	 * The PercentNotHispanicOrLatino
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $PercentNotHispanicOrLatino;
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
	 * @param double PercentHispanicOrLatinoOfAnyRace
	 * @param double PercentNotHispanicOrLatino
	 * @param string ResolutionLevel
	 * @return SODemographicsPlusTypeEthnicDistribution
	 */
	public function __construct($_PercentHispanicOrLatinoOfAnyRace,$_PercentNotHispanicOrLatino,$_ResolutionLevel = null)
	{
		parent::__construct(array('PercentHispanicOrLatinoOfAnyRace'=>$_PercentHispanicOrLatinoOfAnyRace,'PercentNotHispanicOrLatino'=>$_PercentNotHispanicOrLatino,'ResolutionLevel'=>$_ResolutionLevel));
	}
	/**
	 * Set PercentHispanicOrLatinoOfAnyRace
	 * @param double PercentHispanicOrLatinoOfAnyRace
	 * @return double
	 */
	public function setPercentHispanicOrLatinoOfAnyRace($_PercentHispanicOrLatinoOfAnyRace)
	{
		return ($this->PercentHispanicOrLatinoOfAnyRace = $_PercentHispanicOrLatinoOfAnyRace);
	}
	/**
	 * Get PercentHispanicOrLatinoOfAnyRace
	 * @return double
	 */
	public function getPercentHispanicOrLatinoOfAnyRace()
	{
		return $this->PercentHispanicOrLatinoOfAnyRace;
	}
	/**
	 * Set PercentNotHispanicOrLatino
	 * @param double PercentNotHispanicOrLatino
	 * @return double
	 */
	public function setPercentNotHispanicOrLatino($_PercentNotHispanicOrLatino)
	{
		return ($this->PercentNotHispanicOrLatino = $_PercentNotHispanicOrLatino);
	}
	/**
	 * Get PercentNotHispanicOrLatino
	 * @return double
	 */
	public function getPercentNotHispanicOrLatino()
	{
		return $this->PercentNotHispanicOrLatino;
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