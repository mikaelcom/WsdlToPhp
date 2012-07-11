<?php
/**
 * Class file for XiEdgarTypeGetLastFiling
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeGetLastFiling
 * @date 08/07/2012
 */
class XiEdgarTypeGetLastFiling extends XiEdgarWsdlClass
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
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeLastFormTypes
	 */
	public $Form;
	/**
	 * Constructor
	 * @param string Identifier
	 * @param XiEdgarTypeIdentifierTypes IdentifierType
	 * @param XiEdgarTypeLastFormTypes Form
	 * @return XiEdgarTypeGetLastFiling
	 */
	public function __construct($_Identifier = null,$_IdentifierType,$_Form)
	{
		parent::__construct(array('Identifier'=>$_Identifier,'IdentifierType'=>$_IdentifierType,'Form'=>$_Form));
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
	 * @param LastFormTypes Form
	 * @return LastFormTypes
	 */
	public function setForm($_Form)
	{
		return ($this->Form = XiEdgarTypeLastFormTypes::valueIsValid($_Form)?$_Form:null);
	}
	/**
	 * Get Form
	 * @return XiEdgarTypeLastFormTypes
	 */
	public function getForm()
	{
		return $this->Form;
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