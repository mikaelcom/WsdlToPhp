<?php
/**
 * Class file for SONameValidationTypeNameInfo_V2
 * @date 08/07/2012
 */
/**
 * Class SONameValidationTypeNameInfo_V2
 * @date 08/07/2012
 */
class SONameValidationTypeNameInfo_V2 extends SONameValidationWsdlClass
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
	 * The FirstNameAlt
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FirstNameAlt;
	/**
	 * The MiddleNameAlt
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MiddleNameAlt;
	/**
	 * The LastNameAlt
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LastNameAlt;
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
	 * The GenderAlt
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $GenderAlt;
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
	 * The FirstNameAltFound
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $FirstNameAltFound;
	/**
	 * The LastNameAltFound
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $LastNameAltFound;
	/**
	 * The RelatedNames
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $RelatedNames;
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
	 * The PossibleGarbage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PossibleGarbage;
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
	 * @param string MiddleName
	 * @param string LastName
	 * @param string FirstNameAlt
	 * @param string MiddleNameAlt
	 * @param string LastNameAlt
	 * @param string Prefix
	 * @param string Suffix
	 * @param string Gender
	 * @param string GenderAlt
	 * @param string FirstNameOrigin
	 * @param boolean FirstNameFound
	 * @param boolean LastNameFound
	 * @param boolean FirstNameAltFound
	 * @param boolean LastNameAltFound
	 * @param string RelatedNames
	 * @param boolean PossibleVulgarity
	 * @param boolean PossibleCelebrity
	 * @param boolean PossibleBogus
	 * @param string PossibleGarbage
	 * @param string Status
	 * @param SONameValidationTypeErr Error
	 * @return SONameValidationTypeNameInfo_V2
	 */
	public function __construct($_FirstName = null,$_MiddleName = null,$_LastName = null,$_FirstNameAlt = null,$_MiddleNameAlt = null,$_LastNameAlt = null,$_Prefix = null,$_Suffix = null,$_Gender = null,$_GenderAlt = null,$_FirstNameOrigin = null,$_FirstNameFound,$_LastNameFound,$_FirstNameAltFound,$_LastNameAltFound,$_RelatedNames = null,$_PossibleVulgarity,$_PossibleCelebrity,$_PossibleBogus,$_PossibleGarbage = null,$_Status = null,$_Error = null)
	{
		parent::__construct(array('FirstName'=>$_FirstName,'MiddleName'=>$_MiddleName,'LastName'=>$_LastName,'FirstNameAlt'=>$_FirstNameAlt,'MiddleNameAlt'=>$_MiddleNameAlt,'LastNameAlt'=>$_LastNameAlt,'Prefix'=>$_Prefix,'Suffix'=>$_Suffix,'Gender'=>$_Gender,'GenderAlt'=>$_GenderAlt,'FirstNameOrigin'=>$_FirstNameOrigin,'FirstNameFound'=>$_FirstNameFound,'LastNameFound'=>$_LastNameFound,'FirstNameAltFound'=>$_FirstNameAltFound,'LastNameAltFound'=>$_LastNameAltFound,'RelatedNames'=>$_RelatedNames,'PossibleVulgarity'=>$_PossibleVulgarity,'PossibleCelebrity'=>$_PossibleCelebrity,'PossibleBogus'=>$_PossibleBogus,'PossibleGarbage'=>$_PossibleGarbage,'Status'=>$_Status,'Error'=>$_Error));
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
	 * Set FirstNameAlt
	 * @param string FirstNameAlt
	 * @return string
	 */
	public function setFirstNameAlt($_FirstNameAlt)
	{
		return ($this->FirstNameAlt = $_FirstNameAlt);
	}
	/**
	 * Get FirstNameAlt
	 * @return string
	 */
	public function getFirstNameAlt()
	{
		return $this->FirstNameAlt;
	}
	/**
	 * Set MiddleNameAlt
	 * @param string MiddleNameAlt
	 * @return string
	 */
	public function setMiddleNameAlt($_MiddleNameAlt)
	{
		return ($this->MiddleNameAlt = $_MiddleNameAlt);
	}
	/**
	 * Get MiddleNameAlt
	 * @return string
	 */
	public function getMiddleNameAlt()
	{
		return $this->MiddleNameAlt;
	}
	/**
	 * Set LastNameAlt
	 * @param string LastNameAlt
	 * @return string
	 */
	public function setLastNameAlt($_LastNameAlt)
	{
		return ($this->LastNameAlt = $_LastNameAlt);
	}
	/**
	 * Get LastNameAlt
	 * @return string
	 */
	public function getLastNameAlt()
	{
		return $this->LastNameAlt;
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
	 * Set GenderAlt
	 * @param string GenderAlt
	 * @return string
	 */
	public function setGenderAlt($_GenderAlt)
	{
		return ($this->GenderAlt = $_GenderAlt);
	}
	/**
	 * Get GenderAlt
	 * @return string
	 */
	public function getGenderAlt()
	{
		return $this->GenderAlt;
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
	 * Set FirstNameAltFound
	 * @param boolean FirstNameAltFound
	 * @return boolean
	 */
	public function setFirstNameAltFound($_FirstNameAltFound)
	{
		return ($this->FirstNameAltFound = $_FirstNameAltFound);
	}
	/**
	 * Get FirstNameAltFound
	 * @return boolean
	 */
	public function getFirstNameAltFound()
	{
		return $this->FirstNameAltFound;
	}
	/**
	 * Set LastNameAltFound
	 * @param boolean LastNameAltFound
	 * @return boolean
	 */
	public function setLastNameAltFound($_LastNameAltFound)
	{
		return ($this->LastNameAltFound = $_LastNameAltFound);
	}
	/**
	 * Get LastNameAltFound
	 * @return boolean
	 */
	public function getLastNameAltFound()
	{
		return $this->LastNameAltFound;
	}
	/**
	 * Set RelatedNames
	 * @param string RelatedNames
	 * @return string
	 */
	public function setRelatedNames($_RelatedNames)
	{
		return ($this->RelatedNames = $_RelatedNames);
	}
	/**
	 * Get RelatedNames
	 * @return string
	 */
	public function getRelatedNames()
	{
		return $this->RelatedNames;
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
	 * Set PossibleGarbage
	 * @param string PossibleGarbage
	 * @return string
	 */
	public function setPossibleGarbage($_PossibleGarbage)
	{
		return ($this->PossibleGarbage = $_PossibleGarbage);
	}
	/**
	 * Get PossibleGarbage
	 * @return string
	 */
	public function getPossibleGarbage()
	{
		return $this->PossibleGarbage;
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