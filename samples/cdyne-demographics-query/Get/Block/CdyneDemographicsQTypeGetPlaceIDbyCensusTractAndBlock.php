<?php
/**
 * Class file for CdyneDemographicsQTypeGetPlaceIDbyCensusTractAndBlock
 * @date 03/07/2012
 */
/**
 * Class CdyneDemographicsQTypeGetPlaceIDbyCensusTractAndBlock
 * @date 03/07/2012
 */
class CdyneDemographicsQTypeGetPlaceIDbyCensusTractAndBlock extends CdyneDemographicsQWsdlClass
{
	/**
	 * The StateAbbrev
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StateAbbrev;
	/**
	 * The CensusTract
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CensusTract;
	/**
	 * The CensusBlock
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CensusBlock;
	/**
	 * The LicenseKey
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LicenseKey;
	/**
	 * Constructor
	 * @param string StateAbbrev
	 * @param string CensusTract
	 * @param string CensusBlock
	 * @param string LicenseKey
	 * @return CdyneDemographicsQTypeGetPlaceIDbyCensusTractAndBlock
	 */
	public function __construct($_StateAbbrev = null,$_CensusTract = null,$_CensusBlock = null,$_LicenseKey = null)
	{
		parent::__construct(array('StateAbbrev'=>$_StateAbbrev,'CensusTract'=>$_CensusTract,'CensusBlock'=>$_CensusBlock,'LicenseKey'=>$_LicenseKey));
	}
	/**
	 * Set StateAbbrev
	 * @param string StateAbbrev
	 * @return string
	 */
	public function setStateAbbrev($_StateAbbrev)
	{
		return ($this->StateAbbrev = $_StateAbbrev);
	}
	/**
	 * Get StateAbbrev
	 * @return string
	 */
	public function getStateAbbrev()
	{
		return $this->StateAbbrev;
	}
	/**
	 * Set CensusTract
	 * @param string CensusTract
	 * @return string
	 */
	public function setCensusTract($_CensusTract)
	{
		return ($this->CensusTract = $_CensusTract);
	}
	/**
	 * Get CensusTract
	 * @return string
	 */
	public function getCensusTract()
	{
		return $this->CensusTract;
	}
	/**
	 * Set CensusBlock
	 * @param string CensusBlock
	 * @return string
	 */
	public function setCensusBlock($_CensusBlock)
	{
		return ($this->CensusBlock = $_CensusBlock);
	}
	/**
	 * Get CensusBlock
	 * @return string
	 */
	public function getCensusBlock()
	{
		return $this->CensusBlock;
	}
	/**
	 * Set LicenseKey
	 * @param string LicenseKey
	 * @return string
	 */
	public function setLicenseKey($_LicenseKey)
	{
		return ($this->LicenseKey = $_LicenseKey);
	}
	/**
	 * Get LicenseKey
	 * @return string
	 */
	public function getLicenseKey()
	{
		return $this->LicenseKey;
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