<?php
/**
 * Class file for CdyneDeathIndexTypeSearchDeceasedInfo
 * @date 03/07/2012
 */
/**
 * Class CdyneDeathIndexTypeSearchDeceasedInfo
 * @date 03/07/2012
 */
class CdyneDeathIndexTypeSearchDeceasedInfo extends CdyneDeathIndexWsdlClass
{
	/**
	 * The LastName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $LastName;
	/**
	 * The FirstName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $FirstName;
	/**
	 * The StateAbbrev
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $StateAbbrev;
	/**
	 * The GreaterThanYear
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $GreaterThanYear;
	/**
	 * The LicenseKey
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $LicenseKey;
	/**
	 * Constructor
	 * @param string LastName
	 * @param string FirstName
	 * @param string StateAbbrev
	 * @param string GreaterThanYear
	 * @param string LicenseKey
	 * @return CdyneDeathIndexTypeSearchDeceasedInfo
	 */
	public function __construct($_LastName = null,$_FirstName = null,$_StateAbbrev = null,$_GreaterThanYear = null,$_LicenseKey = null)
	{
		parent::__construct(array('LastName'=>$_LastName,'FirstName'=>$_FirstName,'StateAbbrev'=>$_StateAbbrev,'GreaterThanYear'=>$_GreaterThanYear,'LicenseKey'=>$_LicenseKey));
	}
	/**
	 * Set LastName
	 * @param string LastName
	 * @return string
	 */
	public function setLastName($_LastName)
	{
		return ($this->LastName = $_LastName);
	}
	/**
	 * Get LastName
	 * @return string
	 */
	public function getLastName()
	{
		return $this->LastName;
	}
	/**
	 * Set FirstName
	 * @param string FirstName
	 * @return string
	 */
	public function setFirstName($_FirstName)
	{
		return ($this->FirstName = $_FirstName);
	}
	/**
	 * Get FirstName
	 * @return string
	 */
	public function getFirstName()
	{
		return $this->FirstName;
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
	 * Set GreaterThanYear
	 * @param string GreaterThanYear
	 * @return string
	 */
	public function setGreaterThanYear($_GreaterThanYear)
	{
		return ($this->GreaterThanYear = $_GreaterThanYear);
	}
	/**
	 * Get GreaterThanYear
	 * @return string
	 */
	public function getGreaterThanYear()
	{
		return $this->GreaterThanYear;
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