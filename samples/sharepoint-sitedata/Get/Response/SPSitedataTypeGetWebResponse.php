<?php
/**
 * Class file for SPSitedataTypeGetWebResponse
 * @date 06/07/2012
 */
/**
 * Class SPSitedataTypeGetWebResponse
 * @date 06/07/2012
 */
class SPSitedataTypeGetWebResponse extends SPSitedataWsdlClass
{
	/**
	 * The GetWebResult
	 * @var unsignedInt
	 */
	public $GetWebResult;
	/**
	 * The sWebMetadata
	 * @var SPSitedataType_sWebMetadata
	 */
	public $sWebMetadata;
	/**
	 * The vWebs
	 * @var SPSitedataTypeArrayOf_sWebWithTime
	 */
	public $vWebs;
	/**
	 * The vLists
	 * @var SPSitedataTypeArrayOf_sListWithTime
	 */
	public $vLists;
	/**
	 * The vFPUrls
	 * @var SPSitedataTypeArrayOf_sFPUrl
	 */
	public $vFPUrls;
	/**
	 * The strRoles
	 * @var string
	 */
	public $strRoles;
	/**
	 * The vRolesUsers
	 * @var SPSitedataTypeArrayOfString
	 */
	public $vRolesUsers;
	/**
	 * The vRolesGroups
	 * @var SPSitedataTypeArrayOfString
	 */
	public $vRolesGroups;
	/**
	 * Constructor
	 * @param unsignedInt GetWebResult
	 * @param SPSitedataType_sWebMetadata sWebMetadata
	 * @param SPSitedataTypeArrayOf_sWebWithTime vWebs
	 * @param SPSitedataTypeArrayOf_sListWithTime vLists
	 * @param SPSitedataTypeArrayOf_sFPUrl vFPUrls
	 * @param string strRoles
	 * @param SPSitedataTypeArrayOfString vRolesUsers
	 * @param SPSitedataTypeArrayOfString vRolesGroups
	 * @return SPSitedataTypeGetWebResponse
	 */
	public function __construct($_GetWebResult = null,$_sWebMetadata = null,$_vWebs = null,$_vLists = null,$_vFPUrls = null,$_strRoles = null,$_vRolesUsers = null,$_vRolesGroups = null)
	{
		parent::__construct(array('GetWebResult'=>$_GetWebResult,'sWebMetadata'=>$_sWebMetadata,'vWebs'=>new SPSitedataTypeArrayOf_sWebWithTime($_vWebs),'vLists'=>new SPSitedataTypeArrayOf_sListWithTime($_vLists),'vFPUrls'=>new SPSitedataTypeArrayOf_sFPUrl($_vFPUrls),'strRoles'=>$_strRoles,'vRolesUsers'=>new SPSitedataTypeArrayOfString($_vRolesUsers),'vRolesGroups'=>new SPSitedataTypeArrayOfString($_vRolesGroups)));
	}
	/**
	 * Set GetWebResult
	 * @param unsignedInt GetWebResult
	 * @return unsignedInt
	 */
	public function setGetWebResult($_GetWebResult)
	{
		return ($this->GetWebResult = $_GetWebResult);
	}
	/**
	 * Get GetWebResult
	 * @return unsignedInt
	 */
	public function getGetWebResult()
	{
		return $this->GetWebResult;
	}
	/**
	 * Set sWebMetadata
	 * @param _sWebMetadata sWebMetadata
	 * @return _sWebMetadata
	 */
	public function setSWebMetadata($_sWebMetadata)
	{
		return ($this->sWebMetadata = $_sWebMetadata);
	}
	/**
	 * Get sWebMetadata
	 * @return SPSitedataType_sWebMetadata
	 */
	public function getSWebMetadata()
	{
		return $this->sWebMetadata;
	}
	/**
	 * Set vWebs
	 * @param ArrayOf_sWebWithTime vWebs
	 * @return ArrayOf_sWebWithTime
	 */
	public function setVWebs($_vWebs)
	{
		return ($this->vWebs = $_vWebs);
	}
	/**
	 * Get vWebs
	 * @return SPSitedataTypeArrayOf_sWebWithTime
	 */
	public function getVWebs()
	{
		return $this->vWebs;
	}
	/**
	 * Set vLists
	 * @param ArrayOf_sListWithTime vLists
	 * @return ArrayOf_sListWithTime
	 */
	public function setVLists($_vLists)
	{
		return ($this->vLists = $_vLists);
	}
	/**
	 * Get vLists
	 * @return SPSitedataTypeArrayOf_sListWithTime
	 */
	public function getVLists()
	{
		return $this->vLists;
	}
	/**
	 * Set vFPUrls
	 * @param ArrayOf_sFPUrl vFPUrls
	 * @return ArrayOf_sFPUrl
	 */
	public function setVFPUrls($_vFPUrls)
	{
		return ($this->vFPUrls = $_vFPUrls);
	}
	/**
	 * Get vFPUrls
	 * @return SPSitedataTypeArrayOf_sFPUrl
	 */
	public function getVFPUrls()
	{
		return $this->vFPUrls;
	}
	/**
	 * Set strRoles
	 * @param string strRoles
	 * @return string
	 */
	public function setStrRoles($_strRoles)
	{
		return ($this->strRoles = $_strRoles);
	}
	/**
	 * Get strRoles
	 * @return string
	 */
	public function getStrRoles()
	{
		return $this->strRoles;
	}
	/**
	 * Set vRolesUsers
	 * @param ArrayOfString vRolesUsers
	 * @return ArrayOfString
	 */
	public function setVRolesUsers($_vRolesUsers)
	{
		return ($this->vRolesUsers = $_vRolesUsers);
	}
	/**
	 * Get vRolesUsers
	 * @return SPSitedataTypeArrayOfString
	 */
	public function getVRolesUsers()
	{
		return $this->vRolesUsers;
	}
	/**
	 * Set vRolesGroups
	 * @param ArrayOfString vRolesGroups
	 * @return ArrayOfString
	 */
	public function setVRolesGroups($_vRolesGroups)
	{
		return ($this->vRolesGroups = $_vRolesGroups);
	}
	/**
	 * Get vRolesGroups
	 * @return SPSitedataTypeArrayOfString
	 */
	public function getVRolesGroups()
	{
		return $this->vRolesGroups;
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