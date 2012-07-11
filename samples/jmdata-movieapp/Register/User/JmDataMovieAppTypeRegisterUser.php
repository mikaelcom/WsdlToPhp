<?php
/**
 * Class file for JmDataMovieAppTypeRegisterUser
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeRegisterUser
 * @date 10/07/2012
 */
class JmDataMovieAppTypeRegisterUser extends JmDataMovieAppWsdlClass
{
	/**
	 * The APIKEY
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $APIKEY;
	/**
	 * The UUID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $UUID;
	/**
	 * Constructor
	 * @param string APIKEY
	 * @param string UUID
	 * @return JmDataMovieAppTypeRegisterUser
	 */
	public function __construct($_APIKEY = null,$_UUID = null)
	{
		parent::__construct(array('APIKEY'=>$_APIKEY,'UUID'=>$_UUID));
	}
	/**
	 * Set APIKEY
	 * @param string APIKEY
	 * @return string
	 */
	public function setAPIKEY($_APIKEY)
	{
		return ($this->APIKEY = $_APIKEY);
	}
	/**
	 * Get APIKEY
	 * @return string
	 */
	public function getAPIKEY()
	{
		return $this->APIKEY;
	}
	/**
	 * Set UUID
	 * @param string UUID
	 * @return string
	 */
	public function setUUID($_UUID)
	{
		return ($this->UUID = $_UUID);
	}
	/**
	 * Get UUID
	 * @return string
	 */
	public function getUUID()
	{
		return $this->UUID;
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