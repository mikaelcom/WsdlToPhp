<?php
/**
 * Class file for OvhTypeTelephonyVoicemailMailboxDownload
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyVoicemailMailboxDownload
 * @date 02/07/2012
 */
class OvhTypeTelephonyVoicemailMailboxDownload extends OvhWsdlClass
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
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The format
	 * @var string
	 */
	public $format;
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
	 * @param int id
	 * @param string format
	 * @param string folder
	 * @return OvhTypeTelephonyVoicemailMailboxDownload
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_id = null,$_format = null,$_folder = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'id'=>$_id,'format'=>$_format,'folder'=>$_folder));
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
	 * Set id
	 * @param int id
	 * @return int
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get id
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}
	/**
	 * Set format
	 * @param string format
	 * @return string
	 */
	public function setFormat($_format)
	{
		return ($this->format = $_format);
	}
	/**
	 * Get format
	 * @return string
	 */
	public function getFormat()
	{
		return $this->format;
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