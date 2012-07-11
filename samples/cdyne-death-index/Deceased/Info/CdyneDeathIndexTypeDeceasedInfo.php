<?php
/**
 * Class file for CdyneDeathIndexTypeDeceasedInfo
 * @date 03/07/2012
 */
/**
 * Class CdyneDeathIndexTypeDeceasedInfo
 * @date 03/07/2012
 */
class CdyneDeathIndexTypeDeceasedInfo extends CdyneDeathIndexWsdlClass
{
	/**
	 * The BirthDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var dateTime
	 */
	public $BirthDate;
	/**
	 * The DeathDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var dateTime
	 */
	public $DeathDate;
	/**
	 * The FirstName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $FirstName;
	/**
	 * The LastName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $LastName;
	/**
	 * The MiddleName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $MiddleName;
	/**
	 * The NameSuffix
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $NameSuffix;
	/**
	 * The SSN
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $SSN;
	/**
	 * The Verified
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Verified;
	/**
	 * The ZipLastResidence
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $ZipLastResidence;
	/**
	 * The ZipLumpSumPay
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $ZipLumpSumPay;
	/**
	 * Constructor
	 * @param dateTime BirthDate
	 * @param dateTime DeathDate
	 * @param string FirstName
	 * @param string LastName
	 * @param string MiddleName
	 * @param string NameSuffix
	 * @param string SSN
	 * @param string Verified
	 * @param string ZipLastResidence
	 * @param string ZipLumpSumPay
	 * @return CdyneDeathIndexTypeDeceasedInfo
	 */
	public function __construct($_BirthDate = null,$_DeathDate = null,$_FirstName = null,$_LastName = null,$_MiddleName = null,$_NameSuffix = null,$_SSN = null,$_Verified = null,$_ZipLastResidence = null,$_ZipLumpSumPay = null)
	{
		parent::__construct(array('BirthDate'=>$_BirthDate,'DeathDate'=>$_DeathDate,'FirstName'=>$_FirstName,'LastName'=>$_LastName,'MiddleName'=>$_MiddleName,'NameSuffix'=>$_NameSuffix,'SSN'=>$_SSN,'Verified'=>$_Verified,'ZipLastResidence'=>$_ZipLastResidence,'ZipLumpSumPay'=>$_ZipLumpSumPay));
	}
	/**
	 * Set BirthDate
	 * @param dateTime BirthDate
	 * @return dateTime
	 */
	public function setBirthDate($_BirthDate)
	{
		return ($this->BirthDate = $_BirthDate);
	}
	/**
	 * Get BirthDate
	 * @return dateTime
	 */
	public function getBirthDate()
	{
		return $this->BirthDate;
	}
	/**
	 * Set DeathDate
	 * @param dateTime DeathDate
	 * @return dateTime
	 */
	public function setDeathDate($_DeathDate)
	{
		return ($this->DeathDate = $_DeathDate);
	}
	/**
	 * Get DeathDate
	 * @return dateTime
	 */
	public function getDeathDate()
	{
		return $this->DeathDate;
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
	 * Set MiddleName
	 * @param string MiddleName
	 * @return string
	 */
	public function setMiddleName($_MiddleName)
	{
		return ($this->MiddleName = $_MiddleName);
	}
	/**
	 * Get MiddleName
	 * @return string
	 */
	public function getMiddleName()
	{
		return $this->MiddleName;
	}
	/**
	 * Set NameSuffix
	 * @param string NameSuffix
	 * @return string
	 */
	public function setNameSuffix($_NameSuffix)
	{
		return ($this->NameSuffix = $_NameSuffix);
	}
	/**
	 * Get NameSuffix
	 * @return string
	 */
	public function getNameSuffix()
	{
		return $this->NameSuffix;
	}
	/**
	 * Set SSN
	 * @param string SSN
	 * @return string
	 */
	public function setSSN($_SSN)
	{
		return ($this->SSN = $_SSN);
	}
	/**
	 * Get SSN
	 * @return string
	 */
	public function getSSN()
	{
		return $this->SSN;
	}
	/**
	 * Set Verified
	 * @param string Verified
	 * @return string
	 */
	public function setVerified($_Verified)
	{
		return ($this->Verified = $_Verified);
	}
	/**
	 * Get Verified
	 * @return string
	 */
	public function getVerified()
	{
		return $this->Verified;
	}
	/**
	 * Set ZipLastResidence
	 * @param string ZipLastResidence
	 * @return string
	 */
	public function setZipLastResidence($_ZipLastResidence)
	{
		return ($this->ZipLastResidence = $_ZipLastResidence);
	}
	/**
	 * Get ZipLastResidence
	 * @return string
	 */
	public function getZipLastResidence()
	{
		return $this->ZipLastResidence;
	}
	/**
	 * Set ZipLumpSumPay
	 * @param string ZipLumpSumPay
	 * @return string
	 */
	public function setZipLumpSumPay($_ZipLumpSumPay)
	{
		return ($this->ZipLumpSumPay = $_ZipLumpSumPay);
	}
	/**
	 * Get ZipLumpSumPay
	 * @return string
	 */
	public function getZipLumpSumPay()
	{
		return $this->ZipLumpSumPay;
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