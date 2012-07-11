<?php
/**
 * Class file for XiInsiderTypeGetDirectors
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeGetDirectors
 * @date 08/07/2012
 */
class XiInsiderTypeGetDirectors extends XiInsiderWsdlClass
{
	/**
	 * The IssuerIdentifier
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $IssuerIdentifier;
	/**
	 * The IssuerIdentifierType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeIdentifierTypes
	 */
	public $IssuerIdentifierType;
	/**
	 * Constructor
	 * @param string IssuerIdentifier
	 * @param XiInsiderTypeIdentifierTypes IssuerIdentifierType
	 * @return XiInsiderTypeGetDirectors
	 */
	public function __construct($_IssuerIdentifier = null,$_IssuerIdentifierType)
	{
		parent::__construct(array('IssuerIdentifier'=>$_IssuerIdentifier,'IssuerIdentifierType'=>$_IssuerIdentifierType));
	}
	/**
	 * Set IssuerIdentifier
	 * @param string IssuerIdentifier
	 * @return string
	 */
	public function setIssuerIdentifier($_IssuerIdentifier)
	{
		return ($this->IssuerIdentifier = $_IssuerIdentifier);
	}
	/**
	 * Get IssuerIdentifier
	 * @return string
	 */
	public function getIssuerIdentifier()
	{
		return $this->IssuerIdentifier;
	}
	/**
	 * Set IssuerIdentifierType
	 * @param IdentifierTypes IssuerIdentifierType
	 * @return IdentifierTypes
	 */
	public function setIssuerIdentifierType($_IssuerIdentifierType)
	{
		return ($this->IssuerIdentifierType = XiInsiderTypeIdentifierTypes::valueIsValid($_IssuerIdentifierType)?$_IssuerIdentifierType:null);
	}
	/**
	 * Get IssuerIdentifierType
	 * @return XiInsiderTypeIdentifierTypes
	 */
	public function getIssuerIdentifierType()
	{
		return $this->IssuerIdentifierType;
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