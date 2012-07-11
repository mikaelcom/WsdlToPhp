<?php
/**
 * Class file for XiBondMasterTypeIssueManagerAgent
 * @date 08/07/2012
 */
/**
 * Class XiBondMasterTypeIssueManagerAgent
 * @date 08/07/2012
 */
class XiBondMasterTypeIssueManagerAgent extends XiBondMasterWsdlClass
{
	/**
	 * The InstitutionName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $InstitutionName;
	/**
	 * The InstitutionRole
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $InstitutionRole;
	/**
	 * Constructor
	 * @param string InstitutionName
	 * @param string InstitutionRole
	 * @return XiBondMasterTypeIssueManagerAgent
	 */
	public function __construct($_InstitutionName = null,$_InstitutionRole = null)
	{
		parent::__construct(array('InstitutionName'=>$_InstitutionName,'InstitutionRole'=>$_InstitutionRole));
	}
	/**
	 * Set InstitutionName
	 * @param string InstitutionName
	 * @return string
	 */
	public function setInstitutionName($_InstitutionName)
	{
		return ($this->InstitutionName = $_InstitutionName);
	}
	/**
	 * Get InstitutionName
	 * @return string
	 */
	public function getInstitutionName()
	{
		return $this->InstitutionName;
	}
	/**
	 * Set InstitutionRole
	 * @param string InstitutionRole
	 * @return string
	 */
	public function setInstitutionRole($_InstitutionRole)
	{
		return ($this->InstitutionRole = $_InstitutionRole);
	}
	/**
	 * Get InstitutionRole
	 * @return string
	 */
	public function getInstitutionRole()
	{
		return $this->InstitutionRole;
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