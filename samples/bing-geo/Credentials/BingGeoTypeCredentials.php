<?php
/**
 * Class file for BingGeoTypeCredentials
 * @date 02/07/2012
 */
/**
 * Class BingGeoTypeCredentials
 * @date 02/07/2012
 */
class BingGeoTypeCredentials extends BingGeoWsdlClass
{
	/**
	 * The ApplicationId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $ApplicationId;
	/**
	 * The Token
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Token;
	/**
	 * Constructor
	 * @param string ApplicationId
	 * @param string Token
	 * @return BingGeoTypeCredentials
	 */
	public function __construct($_ApplicationId = null,$_Token = null)
	{
		parent::__construct(array('ApplicationId'=>$_ApplicationId,'Token'=>$_Token));
	}
	/**
	 * Set ApplicationId
	 * @param string ApplicationId
	 * @return string
	 */
	public function setApplicationId($_ApplicationId)
	{
		return ($this->ApplicationId = $_ApplicationId);
	}
	/**
	 * Get ApplicationId
	 * @return string
	 */
	public function getApplicationId()
	{
		return $this->ApplicationId;
	}
	/**
	 * Set Token
	 * @param string Token
	 * @return string
	 */
	public function setToken($_Token)
	{
		return ($this->Token = $_Token);
	}
	/**
	 * Get Token
	 * @return string
	 */
	public function getToken()
	{
		return $this->Token;
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