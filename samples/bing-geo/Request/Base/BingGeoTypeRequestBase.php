<?php
/**
 * Class file for BingGeoTypeRequestBase
 * @date 02/07/2012
 */
/**
 * Class BingGeoTypeRequestBase
 * @date 02/07/2012
 */
class BingGeoTypeRequestBase extends BingGeoWsdlClass
{
	/**
	 * The Credentials
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var BingGeoTypeCredentials
	 */
	public $Credentials;
	/**
	 * The Culture
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Culture;
	/**
	 * The ExecutionOptions
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var BingGeoTypeExecutionOptions
	 */
	public $ExecutionOptions;
	/**
	 * The UserProfile
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var BingGeoTypeUserProfile
	 */
	public $UserProfile;
	/**
	 * Constructor
	 * @param BingGeoTypeCredentials Credentials
	 * @param string Culture
	 * @param BingGeoTypeExecutionOptions ExecutionOptions
	 * @param BingGeoTypeUserProfile UserProfile
	 * @return BingGeoTypeRequestBase
	 */
	public function __construct($_Credentials = null,$_Culture = null,$_ExecutionOptions = null,$_UserProfile = null)
	{
		parent::__construct(array('Credentials'=>$_Credentials,'Culture'=>$_Culture,'ExecutionOptions'=>$_ExecutionOptions,'UserProfile'=>$_UserProfile));
	}
	/**
	 * Set Credentials
	 * @param Credentials Credentials
	 * @return Credentials
	 */
	public function setCredentials($_Credentials)
	{
		return ($this->Credentials = $_Credentials);
	}
	/**
	 * Get Credentials
	 * @return BingGeoTypeCredentials
	 */
	public function getCredentials()
	{
		return $this->Credentials;
	}
	/**
	 * Set Culture
	 * @param string Culture
	 * @return string
	 */
	public function setCulture($_Culture)
	{
		return ($this->Culture = $_Culture);
	}
	/**
	 * Get Culture
	 * @return string
	 */
	public function getCulture()
	{
		return $this->Culture;
	}
	/**
	 * Set ExecutionOptions
	 * @param ExecutionOptions ExecutionOptions
	 * @return ExecutionOptions
	 */
	public function setExecutionOptions($_ExecutionOptions)
	{
		return ($this->ExecutionOptions = $_ExecutionOptions);
	}
	/**
	 * Get ExecutionOptions
	 * @return BingGeoTypeExecutionOptions
	 */
	public function getExecutionOptions()
	{
		return $this->ExecutionOptions;
	}
	/**
	 * Set UserProfile
	 * @param UserProfile UserProfile
	 * @return UserProfile
	 */
	public function setUserProfile($_UserProfile)
	{
		return ($this->UserProfile = $_UserProfile);
	}
	/**
	 * Get UserProfile
	 * @return BingGeoTypeUserProfile
	 */
	public function getUserProfile()
	{
		return $this->UserProfile;
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