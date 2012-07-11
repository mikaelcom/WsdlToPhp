<?php
/**
 * Class file for SONameValidationTypeNameInfo
 * @date 08/07/2012
 */
/**
 * Class SONameValidationTypeNameInfo
 * @date 08/07/2012
 */
class SONameValidationTypeNameInfo extends SONameValidationWsdlClass
{
	/**
	 * The FirstName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FirstName;
	/**
	 * The FirstNameCorrected
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FirstNameCorrected;
	/**
	 * The MiddleName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MiddleName;
	/**
	 * The LastName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LastName;
	/**
	 * The Prefix
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Prefix;
	/**
	 * The Suffix
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Suffix;
	/**
	 * The Gender
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Gender;
	/**
	 * The FirstNameOrigin
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FirstNameOrigin;
	/**
	 * The FirstNameFound
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $FirstNameFound;
	/**
	 * The LastNameFound
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $LastNameFound;
	/**
	 * The PossibleVulgarity
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $PossibleVulgarity;
	/**
	 * The PossibleCelebrity
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $PossibleCelebrity;
	/**
	 * The PossibleBogus
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $PossibleBogus;
	/**
	 * The Status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Status;
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SONameValidationTypeErr
	 */
	public $Error;
	/**
	 * Constructor
	 * @param string FirstName
	 * @param string FirstNameCorrected
	 * @param string MiddleName
	 * @param string LastName
	 * @param string Prefix
	 * @param string Suffix
	 * @param string Gender
	 * @param string FirstNameOrigin
	 * @param boolean FirstNameFound
	 * @param boolean LastNameFound
	 * @param boolean PossibleVulgarity
	 * @param boolean PossibleCelebrity
	 * @param boolean PossibleBogus
	 * @param string Status
	 * @param SONameValidationTypeErr Error
	 * @return SONameValidationTypeNameInfo
	 */
	public function __construct($_FirstName = null,$_FirstNameCorrected = null,$_MiddleName = null,$_LastName = null,$_Prefix = null,$_Suffix = null,$_Gender = null,$_FirstNameOrigin = null,$_FirstNameFound,$_LastNameFound,$_PossibleVulgarity,$_PossibleCelebrity,$_PossibleBogus,$_Status = null,$_Error = null)
	{
		parent::__construct(array('FirstName'=>$_FirstName,'FirstNameCorrected'=>$_FirstNameCorrected,'MiddleName'=>$_MiddleName,'LastName'=>$_LastName,'Prefix'=>$_Prefix,'Suffix'=>$_Suffix,'Gender'=>$_Gender,'FirstNameOrigin'=>$_FirstNameOrigin,'FirstNameFound'=>$_FirstNameFound,'LastNameFound'=>$_LastNameFound,'PossibleVulgarity'=>$_PossibleVulgarity,'PossibleCelebrity'=>$_PossibleCelebrity,'PossibleBogus'=>$_PossibleBogus,'Status'=>$_Status,'Error'=>$_Error));
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
	 * Set FirstNameCorrected
	 * @param string FirstNameCorrected
	 * @return string
	 */
	public function setFirstNameCorrected($_FirstNameCorrected)
	{
		return ($this->FirstNameCorrected = $_FirstNameCorrected);
	}
	/**
	 * Get FirstNameCorrected
	 * @return string
	 */
	public function getFirstNameCorrected()
	{
		return $this->FirstNameCorrected;
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
	 * Set Prefix
	 * @param string Prefix
	 * @return string
	 */
	public function setPrefix($_Prefix)
	{
		return ($this->Prefix = $_Prefix);
	}
	/**
	 * Get Prefix
	 * @return string
	 */
	public function getPrefix()
	{
		return $this->Prefix;
	}
	/**
	 * Set Suffix
	 * @param string Suffix
	 * @return string
	 */
	public function setSuffix($_Suffix)
	{
		return ($this->Suffix = $_Suffix);
	}
	/**
	 * Get Suffix
	 * @return string
	 */
	public function getSuffix()
	{
		return $this->Suffix;
	}
	/**
	 * Set Gender
	 * @param string Gender
	 * @return string
	 */
	public function setGender($_Gender)
	{
		return ($this->Gender = $_Gender);
	}
	/**
	 * Get Gender
	 * @return string
	 */
	public function getGender()
	{
		return $this->Gender;
	}
	/**
	 * Set FirstNameOrigin
	 * @param string FirstNameOrigin
	 * @return string
	 */
	public function setFirstNameOrigin($_FirstNameOrigin)
	{
		return ($this->FirstNameOrigin = $_FirstNameOrigin);
	}
	/**
	 * Get FirstNameOrigin
	 * @return string
	 */
	public function getFirstNameOrigin()
	{
		return $this->FirstNameOrigin;
	}
	/**
	 * Set FirstNameFound
	 * @param boolean FirstNameFound
	 * @return boolean
	 */
	public function setFirstNameFound($_FirstNameFound)
	{
		return ($this->FirstNameFound = $_FirstNameFound);
	}
	/**
	 * Get FirstNameFound
	 * @return boolean
	 */
	public function getFirstNameFound()
	{
		return $this->FirstNameFound;
	}
	/**
	 * Set LastNameFound
	 * @param boolean LastNameFound
	 * @return boolean
	 */
	public function setLastNameFound($_LastNameFound)
	{
		return ($this->LastNameFound = $_LastNameFound);
	}
	/**
	 * Get LastNameFound
	 * @return boolean
	 */
	public function getLastNameFound()
	{
		return $this->LastNameFound;
	}
	/**
	 * Set PossibleVulgarity
	 * @param boolean PossibleVulgarity
	 * @return boolean
	 */
	public function setPossibleVulgarity($_PossibleVulgarity)
	{
		return ($this->PossibleVulgarity = $_PossibleVulgarity);
	}
	/**
	 * Get PossibleVulgarity
	 * @return boolean
	 */
	public function getPossibleVulgarity()
	{
		return $this->PossibleVulgarity;
	}
	/**
	 * Set PossibleCelebrity
	 * @param boolean PossibleCelebrity
	 * @return boolean
	 */
	public function setPossibleCelebrity($_PossibleCelebrity)
	{
		return ($this->PossibleCelebrity = $_PossibleCelebrity);
	}
	/**
	 * Get PossibleCelebrity
	 * @return boolean
	 */
	public function getPossibleCelebrity()
	{
		return $this->PossibleCelebrity;
	}
	/**
	 * Set PossibleBogus
	 * @param boolean PossibleBogus
	 * @return boolean
	 */
	public function setPossibleBogus($_PossibleBogus)
	{
		return ($this->PossibleBogus = $_PossibleBogus);
	}
	/**
	 * Get PossibleBogus
	 * @return boolean
	 */
	public function getPossibleBogus()
	{
		return $this->PossibleBogus;
	}
	/**
	 * Set Status
	 * @param string Status
	 * @return string
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = $_Status);
	}
	/**
	 * Get Status
	 * @return string
	 */
	public function getStatus()
	{
		return $this->Status;
	}
	/**
	 * Set Error
	 * @param Err Error
	 * @return Err
	 */
	public function setError($_Error)
	{
		return ($this->Error = $_Error);
	}
	/**
	 * Get Error
	 * @return SONameValidationTypeErr
	 */
	public function getError()
	{
		return $this->Error;
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