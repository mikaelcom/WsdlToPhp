<?php
/**
 * Class file for SPSitedataTypeGetSiteResponse
 * @date 06/07/2012
 */
/**
 * Class SPSitedataTypeGetSiteResponse
 * @date 06/07/2012
 */
class SPSitedataTypeGetSiteResponse extends SPSitedataWsdlClass
{
	/**
	 * The GetSiteResult
	 * @var unsignedInt
	 */
	public $GetSiteResult;
	/**
	 * The sSiteMetadata
	 * @var SPSitedataType_sSiteMetadata
	 */
	public $sSiteMetadata;
	/**
	 * The vWebs
	 * @var SPSitedataTypeArrayOf_sWebWithTime
	 */
	public $vWebs;
	/**
	 * The strUsers
	 * @var string
	 */
	public $strUsers;
	/**
	 * The strGroups
	 * @var string
	 */
	public $strGroups;
	/**
	 * The vGroups
	 * @var SPSitedataTypeArrayOfString
	 */
	public $vGroups;
	/**
	 * Constructor
	 * @param unsignedInt GetSiteResult
	 * @param SPSitedataType_sSiteMetadata sSiteMetadata
	 * @param SPSitedataTypeArrayOf_sWebWithTime vWebs
	 * @param string strUsers
	 * @param string strGroups
	 * @param SPSitedataTypeArrayOfString vGroups
	 * @return SPSitedataTypeGetSiteResponse
	 */
	public function __construct($_GetSiteResult = null,$_sSiteMetadata = null,$_vWebs = null,$_strUsers = null,$_strGroups = null,$_vGroups = null)
	{
		parent::__construct(array('GetSiteResult'=>$_GetSiteResult,'sSiteMetadata'=>$_sSiteMetadata,'vWebs'=>new SPSitedataTypeArrayOf_sWebWithTime($_vWebs),'strUsers'=>$_strUsers,'strGroups'=>$_strGroups,'vGroups'=>new SPSitedataTypeArrayOfString($_vGroups)));
	}
	/**
	 * Set GetSiteResult
	 * @param unsignedInt GetSiteResult
	 * @return unsignedInt
	 */
	public function setGetSiteResult($_GetSiteResult)
	{
		return ($this->GetSiteResult = $_GetSiteResult);
	}
	/**
	 * Get GetSiteResult
	 * @return unsignedInt
	 */
	public function getGetSiteResult()
	{
		return $this->GetSiteResult;
	}
	/**
	 * Set sSiteMetadata
	 * @param _sSiteMetadata sSiteMetadata
	 * @return _sSiteMetadata
	 */
	public function setSSiteMetadata($_sSiteMetadata)
	{
		return ($this->sSiteMetadata = $_sSiteMetadata);
	}
	/**
	 * Get sSiteMetadata
	 * @return SPSitedataType_sSiteMetadata
	 */
	public function getSSiteMetadata()
	{
		return $this->sSiteMetadata;
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
	 * Set strUsers
	 * @param string strUsers
	 * @return string
	 */
	public function setStrUsers($_strUsers)
	{
		return ($this->strUsers = $_strUsers);
	}
	/**
	 * Get strUsers
	 * @return string
	 */
	public function getStrUsers()
	{
		return $this->strUsers;
	}
	/**
	 * Set strGroups
	 * @param string strGroups
	 * @return string
	 */
	public function setStrGroups($_strGroups)
	{
		return ($this->strGroups = $_strGroups);
	}
	/**
	 * Get strGroups
	 * @return string
	 */
	public function getStrGroups()
	{
		return $this->strGroups;
	}
	/**
	 * Set vGroups
	 * @param ArrayOfString vGroups
	 * @return ArrayOfString
	 */
	public function setVGroups($_vGroups)
	{
		return ($this->vGroups = $_vGroups);
	}
	/**
	 * Get vGroups
	 * @return SPSitedataTypeArrayOfString
	 */
	public function getVGroups()
	{
		return $this->vGroups;
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