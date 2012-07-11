<?php
/**
 * Class file for OvhTypeTelephonyVoicemailMailboxDelete
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyVoicemailMailboxDelete
 * @date 02/07/2012
 */
class OvhTypeTelephonyVoicemailMailboxDelete extends OvhWsdlClass
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
	 * The ids
	 * @var string
	 */
	public $ids;
	/**
	 * The folder
	 * @var string
	 */
	public $folder;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param string ids
	 * @param string folder
	 * @return OvhTypeTelephonyVoicemailMailboxDelete
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_ids = null,$_folder = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'ids'=>$_ids,'folder'=>$_folder));
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
	 * Set ids
	 * @param string ids
	 * @return string
	 */
	public function setIds($_ids)
	{
		return ($this->ids = $_ids);
	}
	/**
	 * Get ids
	 * @return string
	 */
	public function getIds()
	{
		return $this->ids;
	}
	/**
	 * Set folder
	 * @param string folder
	 * @return string
	 */
	public function setFolder($_folder)
	{
		return ($this->folder = $_folder);
	}
	/**
	 * Get folder
	 * @return string
	 */
	public function getFolder()
	{
		return $this->folder;
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