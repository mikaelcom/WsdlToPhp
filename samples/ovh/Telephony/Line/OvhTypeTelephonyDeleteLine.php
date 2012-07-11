<?php
/**
 * Class file for OvhTypeTelephonyDeleteLine
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyDeleteLine
 * @date 02/07/2012
 */
class OvhTypeTelephonyDeleteLine extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The number
	 * @var string
	 */
	public $number;
	/**
	 * The country
	 * @var string
	 */
	public $country;
	/**
	 * The cancelDelete
	 * @var boolean
	 */
	public $cancelDelete;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param boolean cancelDelete
	 * @return OvhTypeTelephonyDeleteLine
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_cancelDelete = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'cancelDelete'=>$_cancelDelete));
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
	 * Set number
	 * @param string number
	 * @return string
	 */
	public function setNumber($_number)
	{
		return ($this->number = $_number);
	}
	/**
	 * Get number
	 * @return string
	 */
	public function getNumber()
	{
		return $this->number;
	}
	/**
	 * Set country
	 * @param string country
	 * @return string
	 */
	public function setCountry($_country)
	{
		return ($this->country = $_country);
	}
	/**
	 * Get country
	 * @return string
	 */
	public function getCountry()
	{
		return $this->country;
	}
	/**
	 * Set cancelDelete
	 * @param boolean cancelDelete
	 * @return boolean
	 */
	public function setCancelDelete($_cancelDelete)
	{
		return ($this->cancelDelete = $_cancelDelete);
	}
	/**
	 * Get cancelDelete
	 * @return boolean
	 */
	public function getCancelDelete()
	{
		return $this->cancelDelete;
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