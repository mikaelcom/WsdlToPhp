<?php
/**
 * Class file for XiCompensationTypeOfficer
 * @date 08/07/2012
 */
/**
 * Class XiCompensationTypeOfficer
 * @date 08/07/2012
 */
class XiCompensationTypeOfficer extends XiCompensationTypeCommon
{
	/**
	 * The ID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ID;
	/**
	 * The Company
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCompensationTypeCompany
	 */
	public $Company;
	/**
	 * The Source
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Source;
	/**
	 * The SourceDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SourceDate;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The Age
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $Age;
	/**
	 * The DirectorSince
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DirectorSince;
	/**
	 * The OfficerSince
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $OfficerSince;
	/**
	 * The DirectorAsReported
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DirectorAsReported;
	/**
	 * The DirectorStandardized
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DirectorStandardized;
	/**
	 * The Biography
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Biography;
	/**
	 * Constructor
	 * @param string ID
	 * @param XiCompensationTypeCompany Company
	 * @param string Source
	 * @param string SourceDate
	 * @param string Name
	 * @param int Age
	 * @param string DirectorSince
	 * @param string OfficerSince
	 * @param string DirectorAsReported
	 * @param string DirectorStandardized
	 * @param string Biography
	 * @return XiCompensationTypeOfficer
	 */
	public function __construct($_ID = null,$_Company = null,$_Source = null,$_SourceDate = null,$_Name = null,$_Age,$_DirectorSince = null,$_OfficerSince = null,$_DirectorAsReported = null,$_DirectorStandardized = null,$_Biography = null)
	{
		XiCompensationWsdlClass::__construct(array('ID'=>$_ID,'Company'=>$_Company,'Source'=>$_Source,'SourceDate'=>$_SourceDate,'Name'=>$_Name,'Age'=>$_Age,'DirectorSince'=>$_DirectorSince,'OfficerSince'=>$_OfficerSince,'DirectorAsReported'=>$_DirectorAsReported,'DirectorStandardized'=>$_DirectorStandardized,'Biography'=>$_Biography));
	}
	/**
	 * Set ID
	 * @param string ID
	 * @return string
	 */
	public function setID($_ID)
	{
		return ($this->ID = $_ID);
	}
	/**
	 * Get ID
	 * @return string
	 */
	public function getID()
	{
		return $this->ID;
	}
	/**
	 * Set Company
	 * @param Company Company
	 * @return Company
	 */
	public function setCompany($_Company)
	{
		return ($this->Company = $_Company);
	}
	/**
	 * Get Company
	 * @return XiCompensationTypeCompany
	 */
	public function getCompany()
	{
		return $this->Company;
	}
	/**
	 * Set Source
	 * @param string Source
	 * @return string
	 */
	public function setSource($_Source)
	{
		return ($this->Source = $_Source);
	}
	/**
	 * Get Source
	 * @return string
	 */
	public function getSource()
	{
		return $this->Source;
	}
	/**
	 * Set SourceDate
	 * @param string SourceDate
	 * @return string
	 */
	public function setSourceDate($_SourceDate)
	{
		return ($this->SourceDate = $_SourceDate);
	}
	/**
	 * Get SourceDate
	 * @return string
	 */
	public function getSourceDate()
	{
		return $this->SourceDate;
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Age
	 * @param int Age
	 * @return int
	 */
	public function setAge($_Age)
	{
		return ($this->Age = $_Age);
	}
	/**
	 * Get Age
	 * @return int
	 */
	public function getAge()
	{
		return $this->Age;
	}
	/**
	 * Set DirectorSince
	 * @param string DirectorSince
	 * @return string
	 */
	public function setDirectorSince($_DirectorSince)
	{
		return ($this->DirectorSince = $_DirectorSince);
	}
	/**
	 * Get DirectorSince
	 * @return string
	 */
	public function getDirectorSince()
	{
		return $this->DirectorSince;
	}
	/**
	 * Set OfficerSince
	 * @param string OfficerSince
	 * @return string
	 */
	public function setOfficerSince($_OfficerSince)
	{
		return ($this->OfficerSince = $_OfficerSince);
	}
	/**
	 * Get OfficerSince
	 * @return string
	 */
	public function getOfficerSince()
	{
		return $this->OfficerSince;
	}
	/**
	 * Set DirectorAsReported
	 * @param string DirectorAsReported
	 * @return string
	 */
	public function setDirectorAsReported($_DirectorAsReported)
	{
		return ($this->DirectorAsReported = $_DirectorAsReported);
	}
	/**
	 * Get DirectorAsReported
	 * @return string
	 */
	public function getDirectorAsReported()
	{
		return $this->DirectorAsReported;
	}
	/**
	 * Set DirectorStandardized
	 * @param string DirectorStandardized
	 * @return string
	 */
	public function setDirectorStandardized($_DirectorStandardized)
	{
		return ($this->DirectorStandardized = $_DirectorStandardized);
	}
	/**
	 * Get DirectorStandardized
	 * @return string
	 */
	public function getDirectorStandardized()
	{
		return $this->DirectorStandardized;
	}
	/**
	 * Set Biography
	 * @param string Biography
	 * @return string
	 */
	public function setBiography($_Biography)
	{
		return ($this->Biography = $_Biography);
	}
	/**
	 * Get Biography
	 * @return string
	 */
	public function getBiography()
	{
		return $this->Biography;
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