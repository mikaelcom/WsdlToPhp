<?php
/**
 * Class file for SPEmailWsTypeChangeUsersMembershipInDistributionGroup
 * @date 06/07/2012
 */
/**
 * Class SPEmailWsTypeChangeUsersMembershipInDistributionGroup
 * @date 06/07/2012
 */
class SPEmailWsTypeChangeUsersMembershipInDistributionGroup extends SPEmailWsWsdlClass
{
	/**
	 * The Alias
	 * @var string
	 */
	public $Alias;
	/**
	 * The AddNt4NameList
	 * @var SPEmailWsTypeArrayOfString
	 */
	public $AddNt4NameList;
	/**
	 * The DeleteNt4NameList
	 * @var SPEmailWsTypeArrayOfString
	 */
	public $DeleteNt4NameList;
	/**
	 * The DeleteAllCurrentMembers
	 * @var boolean
	 */
	public $DeleteAllCurrentMembers;
	/**
	 * Constructor
	 * @param string Alias
	 * @param SPEmailWsTypeArrayOfString AddNt4NameList
	 * @param SPEmailWsTypeArrayOfString DeleteNt4NameList
	 * @param boolean DeleteAllCurrentMembers
	 * @return SPEmailWsTypeChangeUsersMembershipInDistributionGroup
	 */
	public function __construct($_Alias = null,$_AddNt4NameList = null,$_DeleteNt4NameList = null,$_DeleteAllCurrentMembers = null)
	{
		parent::__construct(array('Alias'=>$_Alias,'AddNt4NameList'=>new SPEmailWsTypeArrayOfString($_AddNt4NameList),'DeleteNt4NameList'=>new SPEmailWsTypeArrayOfString($_DeleteNt4NameList),'DeleteAllCurrentMembers'=>$_DeleteAllCurrentMembers));
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
	 * Set AddNt4NameList
	 * @param ArrayOfString AddNt4NameList
	 * @return ArrayOfString
	 */
	public function setAddNt4NameList($_AddNt4NameList)
	{
		return ($this->AddNt4NameList = $_AddNt4NameList);
	}
	/**
	 * Get AddNt4NameList
	 * @return SPEmailWsTypeArrayOfString
	 */
	public function getAddNt4NameList()
	{
		return $this->AddNt4NameList;
	}
	/**
	 * Set DeleteNt4NameList
	 * @param ArrayOfString DeleteNt4NameList
	 * @return ArrayOfString
	 */
	public function setDeleteNt4NameList($_DeleteNt4NameList)
	{
		return ($this->DeleteNt4NameList = $_DeleteNt4NameList);
	}
	/**
	 * Get DeleteNt4NameList
	 * @return SPEmailWsTypeArrayOfString
	 */
	public function getDeleteNt4NameList()
	{
		return $this->DeleteNt4NameList;
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