<?php
/**
 * Class file for XiEdgarTypeQueryFilingsByReportingPeriod
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeQueryFilingsByReportingPeriod
 * @date 08/07/2012
 */
class XiEdgarTypeQueryFilingsByReportingPeriod extends XiEdgarWsdlClass
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
	 * The FromDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FromDate;
	/**
	 * The ToDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ToDate;
	/**
	 * Constructor
	 * @param string Identifier
	 * @param XiEdgarTypeIdentifierTypes IdentifierType
	 * @param string Form
	 * @param XiEdgarTypeOwnershipFormTypes OwnershipForms
	 * @param string FromDate
	 * @param string ToDate
	 * @return XiEdgarTypeQueryFilingsByReportingPeriod
	 */
	public function __construct($_Identifier = null,$_IdentifierType,$_Form = null,$_OwnershipForms,$_FromDate = null,$_ToDate = null)
	{
		parent::__construct(array('Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType,'Form'=>$_Form,'OwnershipForms'=>$_OwnershipForms,'FromDate'=>$_FromDate,'ToDate'=>$_ToDate));
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
	 * Set FromDate
	 * @param string FromDate
	 * @return string
	 */
	public function setFromDate($_FromDate)
	{
		return ($this->FromDate = $_FromDate);
	}
	/**
	 * Get FromDate
	 * @return string
	 */
	public function getFromDate()
	{
		return $this->FromDate;
	}
	/**
	 * Set ToDate
	 * @param string ToDate
	 * @return string
	 */
	public function setToDate($_ToDate)
	{
		return ($this->ToDate = $_ToDate);
	}
	/**
	 * Get ToDate
	 * @return string
	 */
	public function getToDate()
	{
		return $this->ToDate;
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