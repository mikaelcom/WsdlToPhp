<?php
/**
 * Class file for XiEdgarTypeSearchFilings
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeSearchFilings
 * @date 08/07/2012
 */
class XiEdgarTypeSearchFilings extends XiEdgarWsdlClass
{
	/**
	 * The Identifier
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Identifier;
	/**
	 * The IdentifierType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeIdentifierTypes
	 */
	public $IdentifierType;
	/**
	 * The Form
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Form;
	/**
	 * The OwnershipForms
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeOwnershipFormTypes
	 */
	public $OwnershipForms;
	/**
	 * The PriorToDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PriorToDate;
	/**
	 * The OutputType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeOutputTypes
	 */
	public $OutputType;
	/**
	 * Constructor
	 * @param string Identifier
	 * @param XiEdgarTypeIdentifierTypes IdentifierType
	 * @param string Form
	 * @param XiEdgarTypeOwnershipFormTypes OwnershipForms
	 * @param string PriorToDate
	 * @param XiEdgarTypeOutputTypes OutputType
	 * @return XiEdgarTypeSearchFilings
	 */
	public function __construct($_Identifier = null,$_IdentifierType,$_Form = null,$_OwnershipForms,$_PriorToDate = null,$_OutputType)
	{
		parent::__construct(array('Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType,'Form'=>$_Form,'OwnershipForms'=>$_OwnershipForms,'PriorToDate'=>$_PriorToDate,'OutputType'=>$_OutputType));
	}
	/**
	 * Set Identifier
	 * @param string Identifier
	 * @return string
	 */
	public function setIdentifier($_Identifier)
	{
		return ($this->Identifier = $_Identifier);
	}
	/**
	 * Get Identifier
	 * @return string
	 */
	public function getIdentifier()
	{
		return $this->Identifier;
	}
	/**
	 * Set IdentifierType
	 * @param IdentifierTypes IdentifierType
	 * @return IdentifierTypes
	 */
	public function setIdentifierType($_IdentifierType)
	{
		return ($this->IdentifierType = XiEdgarTypeIdentifierTypes::valueIsValid($_IdentifierType)?$_IdentifierType:null);
	}
	/**
	 * Get IdentifierType
	 * @return XiEdgarTypeIdentifierTypes
	 */
	public function getIdentifierType()
	{
		return $this->IdentifierType;
	}
	/**
	 * Set Form
	 * @param string Form
	 * @return string
	 */
	public function setForm($_Form)
	{
		return ($this->Form = $_Form);
	}
	/**
	 * Get Form
	 * @return string
	 */
	public function getForm()
	{
		return $this->Form;
	}
	/**
	 * Set OwnershipForms
	 * @param OwnershipFormTypes OwnershipForms
	 * @return OwnershipFormTypes
	 */
	public function setOwnershipForms($_OwnershipForms)
	{
		return ($this->OwnershipForms = XiEdgarTypeOwnershipFormTypes::valueIsValid($_OwnershipForms)?$_OwnershipForms:null);
	}
	/**
	 * Get OwnershipForms
	 * @return XiEdgarTypeOwnershipFormTypes
	 */
	public function getOwnershipForms()
	{
		return $this->OwnershipForms;
	}
	/**
	 * Set PriorToDate
	 * @param string PriorToDate
	 * @return string
	 */
	public function setPriorToDate($_PriorToDate)
	{
		return ($this->PriorToDate = $_PriorToDate);
	}
	/**
	 * Get PriorToDate
	 * @return string
	 */
	public function getPriorToDate()
	{
		return $this->PriorToDate;
	}
	/**
	 * Set OutputType
	 * @param OutputTypes OutputType
	 * @return OutputTypes
	 */
	public function setOutputType($_OutputType)
	{
		return ($this->OutputType = XiEdgarTypeOutputTypes::valueIsValid($_OutputType)?$_OutputType:null);
	}
	/**
	 * Get OutputType
	 * @return XiEdgarTypeOutputTypes
	 */
	public function getOutputType()
	{
		return $this->OutputType;
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