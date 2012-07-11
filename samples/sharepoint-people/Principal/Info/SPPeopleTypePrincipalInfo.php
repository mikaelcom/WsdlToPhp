<?php
/**
 * Class file for SPPeopleTypePrincipalInfo
 * @date 06/07/2012
 */
/**
 * Class SPPeopleTypePrincipalInfo
 * @date 06/07/2012
 */
class SPPeopleTypePrincipalInfo extends SPPeopleWsdlClass
{
	/**
	 * The AccountName
	 * @var string
	 */
	public $AccountName;
	/**
	 * The UserInfoID
	 * @var int
	 */
	public $UserInfoID;
	/**
	 * The DisplayName
	 * @var string
	 */
	public $DisplayName;
	/**
	 * The Email
	 * @var string
	 */
	public $Email;
	/**
	 * The Department
	 * @var string
	 */
	public $Department;
	/**
	 * The Title
	 * @var string
	 */
	public $Title;
	/**
	 * The IsResolved
	 * @var boolean
	 */
	public $IsResolved;
	/**
	 * The MoreMatches
	 * @var SPPeopleTypeArrayOfPrincipalInfo
	 */
	public $MoreMatches;
	/**
	 * The PrincipalType
	 * @var SPPrincipalType
	 */
	public $PrincipalType;
	/**
	 * Constructor
	 * @param string AccountName
	 * @param int UserInfoID
	 * @param string DisplayName
	 * @param string Email
	 * @param string Department
	 * @param string Title
	 * @param boolean IsResolved
	 * @param SPPeopleTypeArrayOfPrincipalInfo MoreMatches
	 * @param SPPrincipalType PrincipalType
	 * @return SPPeopleTypePrincipalInfo
	 */
	public function __construct($_AccountName = null,$_UserInfoID = null,$_DisplayName = null,$_Email = null,$_Department = null,$_Title = null,$_IsResolved = null,$_MoreMatches = null,$_PrincipalType = null)
	{
		parent::__construct(array('AccountName'=>$_AccountName,'UserInfoID'=>$_UserInfoID,'DisplayName'=>$_DisplayName,'Email'=>$_Email,'Department'=>$_Department,'Title'=>$_Title,'IsResolved'=>$_IsResolved,'MoreMatches'=>new SPPeopleTypeArrayOfPrincipalInfo($_MoreMatches),'PrincipalType'=>$_PrincipalType));
	}
	/**
	 * Set AccountName
	 * @param string AccountName
	 * @return string
	 */
	public function setAccountName($_AccountName)
	{
		return ($this->AccountName = $_AccountName);
	}
	/**
	 * Get AccountName
	 * @return string
	 */
	public function getAccountName()
	{
		return $this->AccountName;
	}
	/**
	 * Set UserInfoID
	 * @param int UserInfoID
	 * @return int
	 */
	public function setUserInfoID($_UserInfoID)
	{
		return ($this->UserInfoID = $_UserInfoID);
	}
	/**
	 * Get UserInfoID
	 * @return int
	 */
	public function getUserInfoID()
	{
		return $this->UserInfoID;
	}
	/**
	 * Set DisplayName
	 * @param string DisplayName
	 * @return string
	 */
	public function setDisplayName($_DisplayName)
	{
		return ($this->DisplayName = $_DisplayName);
	}
	/**
	 * Get DisplayName
	 * @return string
	 */
	public function getDisplayName()
	{
		return $this->DisplayName;
	}
	/**
	 * Set Email
	 * @param string Email
	 * @return string
	 */
	public function setEmail($_Email)
	{
		return ($this->Email = $_Email);
	}
	/**
	 * Get Email
	 * @return string
	 */
	public function getEmail()
	{
		return $this->Email;
	}
	/**
	 * Set Department
	 * @param string Department
	 * @return string
	 */
	public function setDepartment($_Department)
	{
		return ($this->Department = $_Department);
	}
	/**
	 * Get Department
	 * @return string
	 */
	public function getDepartment()
	{
		return $this->Department;
	}
	/**
	 * Set Title
	 * @param string Title
	 * @return string
	 */
	public function setTitle($_Title)
	{
		return ($this->Title = $_Title);
	}
	/**
	 * Get Title
	 * @return string
	 */
	public function getTitle()
	{
		return $this->Title;
	}
	/**
	 * Set IsResolved
	 * @param boolean IsResolved
	 * @return boolean
	 */
	public function setIsResolved($_IsResolved)
	{
		return ($this->IsResolved = $_IsResolved);
	}
	/**
	 * Get IsResolved
	 * @return boolean
	 */
	public function getIsResolved()
	{
		return $this->IsResolved;
	}
	/**
	 * Set MoreMatches
	 * @param ArrayOfPrincipalInfo MoreMatches
	 * @return ArrayOfPrincipalInfo
	 */
	public function setMoreMatches($_MoreMatches)
	{
		return ($this->MoreMatches = $_MoreMatches);
	}
	/**
	 * Get MoreMatches
	 * @return SPPeopleTypeArrayOfPrincipalInfo
	 */
	public function getMoreMatches()
	{
		return $this->MoreMatches;
	}
	/**
	 * Set PrincipalType
	 * @param SPPrincipalType PrincipalType
	 * @return SPPrincipalType
	 */
	public function setPrincipalType($_PrincipalType)
	{
		return ($this->PrincipalType = $_PrincipalType);
	}
	/**
	 * Get PrincipalType
	 * @return SPPrincipalType
	 */
	public function getPrincipalType()
	{
		return $this->PrincipalType;
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