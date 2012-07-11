<?php
/**
 * Class file for SOEmailValidationTypeEmailValidateInfo
 * @date 08/07/2012
 */
/**
 * Class SOEmailValidationTypeEmailValidateInfo
 * @date 08/07/2012
 */
class SOEmailValidationTypeEmailValidateInfo extends SOEmailValidationWsdlClass
{
	/**
	 * The EmailAddressIn
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $EmailAddressIn;
	/**
	 * The Box
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Box;
	/**
	 * The Domain
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Domain;
	/**
	 * The IsRecognizedTLD
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $IsRecognizedTLD;
	/**
	 * The TopLevelDomain
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TopLevelDomain;
	/**
	 * The TopLevelDomainDescription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TopLevelDomainDescription;
	/**
	 * The IsCCTLD
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $IsCCTLD;
	/**
	 * The IsSyntaxGood
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $IsSyntaxGood;
	/**
	 * The IsDomainSpecificSyntaxGood
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $IsDomainSpecificSyntaxGood;
	/**
	 * The IsDNSGood
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $IsDNSGood;
	/**
	 * The IsSMTPServerGood
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IsSMTPServerGood;
	/**
	 * The IsCatchAllDomain
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IsCatchAllDomain;
	/**
	 * The IsSMTPMailBoxGood
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IsSMTPMailBoxGood;
	/**
	 * The IsFree
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IsFree;
	/**
	 * The IsEstablished
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $IsEstablished;
	/**
	 * The IsAlias
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $IsAlias;
	/**
	 * The IsBogus
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $IsBogus;
	/**
	 * The IsVulgar
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $IsVulgar;
	/**
	 * The PossibleFirstName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PossibleFirstName;
	/**
	 * The PossibleLastName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PossibleLastName;
	/**
	 * Constructor
	 * @param string EmailAddressIn
	 * @param string Box
	 * @param string Domain
	 * @param boolean IsRecognizedTLD
	 * @param string TopLevelDomain
	 * @param string TopLevelDomainDescription
	 * @param boolean IsCCTLD
	 * @param boolean IsSyntaxGood
	 * @param boolean IsDomainSpecificSyntaxGood
	 * @param boolean IsDNSGood
	 * @param string IsSMTPServerGood
	 * @param string IsCatchAllDomain
	 * @param string IsSMTPMailBoxGood
	 * @param string IsFree
	 * @param boolean IsEstablished
	 * @param boolean IsAlias
	 * @param boolean IsBogus
	 * @param boolean IsVulgar
	 * @param string PossibleFirstName
	 * @param string PossibleLastName
	 * @return SOEmailValidationTypeEmailValidateInfo
	 */
	public function __construct($_EmailAddressIn = null,$_Box = null,$_Domain = null,$_IsRecognizedTLD,$_TopLevelDomain = null,$_TopLevelDomainDescription = null,$_IsCCTLD,$_IsSyntaxGood,$_IsDomainSpecificSyntaxGood,$_IsDNSGood,$_IsSMTPServerGood = null,$_IsCatchAllDomain = null,$_IsSMTPMailBoxGood = null,$_IsFree = null,$_IsEstablished,$_IsAlias,$_IsBogus,$_IsVulgar,$_PossibleFirstName = null,$_PossibleLastName = null)
	{
		parent::__construct(array('EmailAddressIn'=>$_EmailAddressIn,'Box'=>$_Box,'Domain'=>$_Domain,'IsRecognizedTLD'=>$_IsRecognizedTLD,'TopLevelDomain'=>$_TopLevelDomain,'TopLevelDomainDescription'=>$_TopLevelDomainDescription,'IsCCTLD'=>$_IsCCTLD,'IsSyntaxGood'=>$_IsSyntaxGood,'IsDomainSpecificSyntaxGood'=>$_IsDomainSpecificSyntaxGood,'IsDNSGood'=>$_IsDNSGood,'IsSMTPServerGood'=>$_IsSMTPServerGood,'IsCatchAllDomain'=>$_IsCatchAllDomain,'IsSMTPMailBoxGood'=>$_IsSMTPMailBoxGood,'IsFree'=>$_IsFree,'IsEstablished'=>$_IsEstablished,'IsAlias'=>$_IsAlias,'IsBogus'=>$_IsBogus,'IsVulgar'=>$_IsVulgar,'PossibleFirstName'=>$_PossibleFirstName,'PossibleLastName'=>$_PossibleLastName));
	}
	/**
	 * Set EmailAddressIn
	 * @param string EmailAddressIn
	 * @return string
	 */
	public function setEmailAddressIn($_EmailAddressIn)
	{
		return ($this->EmailAddressIn = $_EmailAddressIn);
	}
	/**
	 * Get EmailAddressIn
	 * @return string
	 */
	public function getEmailAddressIn()
	{
		return $this->EmailAddressIn;
	}
	/**
	 * Set Box
	 * @param string Box
	 * @return string
	 */
	public function setBox($_Box)
	{
		return ($this->Box = $_Box);
	}
	/**
	 * Get Box
	 * @return string
	 */
	public function getBox()
	{
		return $this->Box;
	}
	/**
	 * Set Domain
	 * @param string Domain
	 * @return string
	 */
	public function setDomain($_Domain)
	{
		return ($this->Domain = $_Domain);
	}
	/**
	 * Get Domain
	 * @return string
	 */
	public function getDomain()
	{
		return $this->Domain;
	}
	/**
	 * Set IsRecognizedTLD
	 * @param boolean IsRecognizedTLD
	 * @return boolean
	 */
	public function setIsRecognizedTLD($_IsRecognizedTLD)
	{
		return ($this->IsRecognizedTLD = $_IsRecognizedTLD);
	}
	/**
	 * Get IsRecognizedTLD
	 * @return boolean
	 */
	public function getIsRecognizedTLD()
	{
		return $this->IsRecognizedTLD;
	}
	/**
	 * Set TopLevelDomain
	 * @param string TopLevelDomain
	 * @return string
	 */
	public function setTopLevelDomain($_TopLevelDomain)
	{
		return ($this->TopLevelDomain = $_TopLevelDomain);
	}
	/**
	 * Get TopLevelDomain
	 * @return string
	 */
	public function getTopLevelDomain()
	{
		return $this->TopLevelDomain;
	}
	/**
	 * Set TopLevelDomainDescription
	 * @param string TopLevelDomainDescription
	 * @return string
	 */
	public function setTopLevelDomainDescription($_TopLevelDomainDescription)
	{
		return ($this->TopLevelDomainDescription = $_TopLevelDomainDescription);
	}
	/**
	 * Get TopLevelDomainDescription
	 * @return string
	 */
	public function getTopLevelDomainDescription()
	{
		return $this->TopLevelDomainDescription;
	}
	/**
	 * Set IsCCTLD
	 * @param boolean IsCCTLD
	 * @return boolean
	 */
	public function setIsCCTLD($_IsCCTLD)
	{
		return ($this->IsCCTLD = $_IsCCTLD);
	}
	/**
	 * Get IsCCTLD
	 * @return boolean
	 */
	public function getIsCCTLD()
	{
		return $this->IsCCTLD;
	}
	/**
	 * Set IsSyntaxGood
	 * @param boolean IsSyntaxGood
	 * @return boolean
	 */
	public function setIsSyntaxGood($_IsSyntaxGood)
	{
		return ($this->IsSyntaxGood = $_IsSyntaxGood);
	}
	/**
	 * Get IsSyntaxGood
	 * @return boolean
	 */
	public function getIsSyntaxGood()
	{
		return $this->IsSyntaxGood;
	}
	/**
	 * Set IsDomainSpecificSyntaxGood
	 * @param boolean IsDomainSpecificSyntaxGood
	 * @return boolean
	 */
	public function setIsDomainSpecificSyntaxGood($_IsDomainSpecificSyntaxGood)
	{
		return ($this->IsDomainSpecificSyntaxGood = $_IsDomainSpecificSyntaxGood);
	}
	/**
	 * Get IsDomainSpecificSyntaxGood
	 * @return boolean
	 */
	public function getIsDomainSpecificSyntaxGood()
	{
		return $this->IsDomainSpecificSyntaxGood;
	}
	/**
	 * Set IsDNSGood
	 * @param boolean IsDNSGood
	 * @return boolean
	 */
	public function setIsDNSGood($_IsDNSGood)
	{
		return ($this->IsDNSGood = $_IsDNSGood);
	}
	/**
	 * Get IsDNSGood
	 * @return boolean
	 */
	public function getIsDNSGood()
	{
		return $this->IsDNSGood;
	}
	/**
	 * Set IsSMTPServerGood
	 * @param string IsSMTPServerGood
	 * @return string
	 */
	public function setIsSMTPServerGood($_IsSMTPServerGood)
	{
		return ($this->IsSMTPServerGood = $_IsSMTPServerGood);
	}
	/**
	 * Get IsSMTPServerGood
	 * @return string
	 */
	public function getIsSMTPServerGood()
	{
		return $this->IsSMTPServerGood;
	}
	/**
	 * Set IsCatchAllDomain
	 * @param string IsCatchAllDomain
	 * @return string
	 */
	public function setIsCatchAllDomain($_IsCatchAllDomain)
	{
		return ($this->IsCatchAllDomain = $_IsCatchAllDomain);
	}
	/**
	 * Get IsCatchAllDomain
	 * @return string
	 */
	public function getIsCatchAllDomain()
	{
		return $this->IsCatchAllDomain;
	}
	/**
	 * Set IsSMTPMailBoxGood
	 * @param string IsSMTPMailBoxGood
	 * @return string
	 */
	public function setIsSMTPMailBoxGood($_IsSMTPMailBoxGood)
	{
		return ($this->IsSMTPMailBoxGood = $_IsSMTPMailBoxGood);
	}
	/**
	 * Get IsSMTPMailBoxGood
	 * @return string
	 */
	public function getIsSMTPMailBoxGood()
	{
		return $this->IsSMTPMailBoxGood;
	}
	/**
	 * Set IsFree
	 * @param string IsFree
	 * @return string
	 */
	public function setIsFree($_IsFree)
	{
		return ($this->IsFree = $_IsFree);
	}
	/**
	 * Get IsFree
	 * @return string
	 */
	public function getIsFree()
	{
		return $this->IsFree;
	}
	/**
	 * Set IsEstablished
	 * @param boolean IsEstablished
	 * @return boolean
	 */
	public function setIsEstablished($_IsEstablished)
	{
		return ($this->IsEstablished = $_IsEstablished);
	}
	/**
	 * Get IsEstablished
	 * @return boolean
	 */
	public function getIsEstablished()
	{
		return $this->IsEstablished;
	}
	/**
	 * Set IsAlias
	 * @param boolean IsAlias
	 * @return boolean
	 */
	public function setIsAlias($_IsAlias)
	{
		return ($this->IsAlias = $_IsAlias);
	}
	/**
	 * Get IsAlias
	 * @return boolean
	 */
	public function getIsAlias()
	{
		return $this->IsAlias;
	}
	/**
	 * Set IsBogus
	 * @param boolean IsBogus
	 * @return boolean
	 */
	public function setIsBogus($_IsBogus)
	{
		return ($this->IsBogus = $_IsBogus);
	}
	/**
	 * Get IsBogus
	 * @return boolean
	 */
	public function getIsBogus()
	{
		return $this->IsBogus;
	}
	/**
	 * Set IsVulgar
	 * @param boolean IsVulgar
	 * @return boolean
	 */
	public function setIsVulgar($_IsVulgar)
	{
		return ($this->IsVulgar = $_IsVulgar);
	}
	/**
	 * Get IsVulgar
	 * @return boolean
	 */
	public function getIsVulgar()
	{
		return $this->IsVulgar;
	}
	/**
	 * Set PossibleFirstName
	 * @param string PossibleFirstName
	 * @return string
	 */
	public function setPossibleFirstName($_PossibleFirstName)
	{
		return ($this->PossibleFirstName = $_PossibleFirstName);
	}
	/**
	 * Get PossibleFirstName
	 * @return string
	 */
	public function getPossibleFirstName()
	{
		return $this->PossibleFirstName;
	}
	/**
	 * Set PossibleLastName
	 * @param string PossibleLastName
	 * @return string
	 */
	public function setPossibleLastName($_PossibleLastName)
	{
		return ($this->PossibleLastName = $_PossibleLastName);
	}
	/**
	 * Get PossibleLastName
	 * @return string
	 */
	public function getPossibleLastName()
	{
		return $this->PossibleLastName;
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