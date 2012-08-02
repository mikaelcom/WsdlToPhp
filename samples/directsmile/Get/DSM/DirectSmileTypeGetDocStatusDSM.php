<?php
/**
 * Class file for DirectSmileTypeGetDocStatusDSM
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeGetDocStatusDSM
 * @date 02/08/2012
 */
class DirectSmileTypeGetDocStatusDSM extends DirectSmileWsdlClass
{
	/**
	 * The AuthenticationCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AuthenticationCode;
	/**
	 * The Key
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Key;
	/**
	 * Constructor
	 * @param string AuthenticationCode
	 * @param string Key
	 * @return DirectSmileTypeGetDocStatusDSM
	 */
	public function __construct($_AuthenticationCode = null,$_Key = null)
	{
		parent::__construct(array('AuthenticationCode'=>$_AuthenticationCode,'Key'=>$_Key));
	}
	/**
	 * Set AuthenticationCode
	 * @param string AuthenticationCode
	 * @return string
	 */
	public function setAuthenticationCode($_AuthenticationCode)
	{
		return ($this->AuthenticationCode = $_AuthenticationCode);
	}
	/**
	 * Get AuthenticationCode
	 * @return string
	 */
	public function getAuthenticationCode()
	{
		return $this->AuthenticationCode;
	}
	/**
	 * Set Key
	 * @param string Key
	 * @return string
	 */
	public function setKey($_Key)
	{
		return ($this->Key = $_Key);
	}
	/**
	 * Get Key
	 * @return string
	 */
	public function getKey()
	{
		return $this->Key;
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