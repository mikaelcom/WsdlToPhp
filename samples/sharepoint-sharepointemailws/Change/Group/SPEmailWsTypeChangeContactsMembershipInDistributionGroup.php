<?php
/**
 * Class file for SPEmailWsTypeChangeContactsMembershipInDistributionGroup
 * @date 06/07/2012
 */
/**
 * Class SPEmailWsTypeChangeContactsMembershipInDistributionGroup
 * @date 06/07/2012
 */
class SPEmailWsTypeChangeContactsMembershipInDistributionGroup extends SPEmailWsWsdlClass
{
	/**
	 * The Alias
	 * @var string
	 */
	public $Alias;
	/**
	 * The AddListForContacts
	 * @var SPEmailWsTypeArrayOfString
	 */
	public $AddListForContacts;
	/**
	 * The DeleteListForContacts
	 * @var SPEmailWsTypeArrayOfString
	 */
	public $DeleteListForContacts;
	/**
	 * The DeleteAllCurrentMembers
	 * @var boolean
	 */
	public $DeleteAllCurrentMembers;
	/**
	 * Constructor
	 * @param string Alias
	 * @param SPEmailWsTypeArrayOfString AddListForContacts
	 * @param SPEmailWsTypeArrayOfString DeleteListForContacts
	 * @param boolean DeleteAllCurrentMembers
	 * @return SPEmailWsTypeChangeContactsMembershipInDistributionGroup
	 */
	public function __construct($_Alias = null,$_AddListForContacts = null,$_DeleteListForContacts = null,$_DeleteAllCurrentMembers = null)
	{
		parent::__construct(array('Alias'=>$_Alias,'AddListForContacts'=>new SPEmailWsTypeArrayOfString($_AddListForContacts),'DeleteListForContacts'=>new SPEmailWsTypeArrayOfString($_DeleteListForContacts),'DeleteAllCurrentMembers'=>$_DeleteAllCurrentMembers));
	}
	/**
	 * Set Alias
	 * @param string Alias
	 * @return string
	 */
	public function setAlias($_Alias)
	{
		return ($this->Alias = $_Alias);
	}
	/**
	 * Get Alias
	 * @return string
	 */
	public function getAlias()
	{
		return $this->Alias;
	}
	/**
	 * Set AddListForContacts
	 * @param ArrayOfString AddListForContacts
	 * @return ArrayOfString
	 */
	public function setAddListForContacts($_AddListForContacts)
	{
		return ($this->AddListForContacts = $_AddListForContacts);
	}
	/**
	 * Get AddListForContacts
	 * @return SPEmailWsTypeArrayOfString
	 */
	public function getAddListForContacts()
	{
		return $this->AddListForContacts;
	}
	/**
	 * Set DeleteListForContacts
	 * @param ArrayOfString DeleteListForContacts
	 * @return ArrayOfString
	 */
	public function setDeleteListForContacts($_DeleteListForContacts)
	{
		return ($this->DeleteListForContacts = $_DeleteListForContacts);
	}
	/**
	 * Get DeleteListForContacts
	 * @return SPEmailWsTypeArrayOfString
	 */
	public function getDeleteListForContacts()
	{
		return $this->DeleteListForContacts;
	}
	/**
	 * Set DeleteAllCurrentMembers
	 * @param boolean DeleteAllCurrentMembers
	 * @return boolean
	 */
	public function setDeleteAllCurrentMembers($_DeleteAllCurrentMembers)
	{
		return ($this->DeleteAllCurrentMembers = $_DeleteAllCurrentMembers);
	}
	/**
	 * Get DeleteAllCurrentMembers
	 * @return boolean
	 */
	public function getDeleteAllCurrentMembers()
	{
		return $this->DeleteAllCurrentMembers;
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