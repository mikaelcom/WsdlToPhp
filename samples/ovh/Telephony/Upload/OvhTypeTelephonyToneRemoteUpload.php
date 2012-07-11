<?php
/**
 * Class file for OvhTypeTelephonyToneRemoteUpload
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyToneRemoteUpload
 * @date 02/07/2012
 */
class OvhTypeTelephonyToneRemoteUpload extends OvhWsdlClass
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
	 * The toneType
	 * @var string
	 */
	public $toneType;
	/**
	 * The filename
	 * @var string
	 */
	public $filename;
	/**
	 * The url
	 * @var string
	 */
	public $url;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param string toneType
	 * @param string filename
	 * @param string url
	 * @return OvhTypeTelephonyToneRemoteUpload
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_toneType = null,$_filename = null,$_url = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'toneType'=>$_toneType,'filename'=>$_filename,'url'=>$_url));
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
	 * Set toneType
	 * @param string toneType
	 * @return string
	 */
	public function setToneType($_toneType)
	{
		return ($this->toneType = $_toneType);
	}
	/**
	 * Get toneType
	 * @return string
	 */
	public function getToneType()
	{
		return $this->toneType;
	}
	/**
	 * Set filename
	 * @param string filename
	 * @return string
	 */
	public function setFilename($_filename)
	{
		return ($this->filename = $_filename);
	}
	/**
	 * Get filename
	 * @return string
	 */
	public function getFilename()
	{
		return $this->filename;
	}
	/**
	 * Set url
	 * @param string url
	 * @return string
	 */
	public function setUrl($_url)
	{
		return ($this->url = $_url);
	}
	/**
	 * Get url
	 * @return string
	 */
	public function getUrl()
	{
		return $this->url;
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