<?php
/**
 * Class file for OvhTypeTelephonyDirectoryPJCode
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyDirectoryPJCode
 * @date 02/07/2012
 */
class OvhTypeTelephonyDirectoryPJCode extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The ape
	 * @var string
	 */
	public $ape;
	/**
	 * The PJCode
	 * @var string
	 */
	public $PJCode;
	/**
	 * Constructor
	 * @param string session
	 * @param string ape
	 * @param string PJCode
	 * @return OvhTypeTelephonyDirectoryPJCode
	 */
	public function __construct($_session = null,$_ape = null,$_PJCode = null)
	{
		parent::__construct(array('session'=>$_session,'ape'=>$_ape,'PJCode'=>$_PJCode));
	}
	/**
	 * Set session
	 * @param string session
	 * @return string
	 */
	public function setSession($_session)
	{
		return ($this->session = $_session);
	}
	/**
	 * Get session
	 * @return string
	 */
	public function getSession()
	{
		return $this->session;
	}
	/**
	 * Set ape
	 * @param string ape
	 * @return string
	 */
	public function setApe($_ape)
	{
		return ($this->ape = $_ape);
	}
	/**
	 * Get ape
	 * @return string
	 */
	public function getApe()
	{
		return $this->ape;
	}
	/**
	 * Set PJCode
	 * @param string PJCode
	 * @return string
	 */
	public function setPJCode($_PJCode)
	{
		return ($this->PJCode = $_PJCode);
	}
	/**
	 * Get PJCode
	 * @return string
	 */
	public function getPJCode()
	{
		return $this->PJCode;
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