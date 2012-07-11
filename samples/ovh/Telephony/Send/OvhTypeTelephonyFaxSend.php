<?php
/**
 * Class file for OvhTypeTelephonyFaxSend
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyFaxSend
 * @date 02/07/2012
 */
class OvhTypeTelephonyFaxSend extends OvhWsdlClass
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
	 * The pdfUrl
	 * @var string
	 */
	public $pdfUrl;
	/**
	 * The recipients
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $recipients;
	/**
	 * The quality
	 * @var string
	 */
	public $quality;
	/**
	 * The email
	 * @var string
	 */
	public $email;
	/**
	 * The referer
	 * @var string
	 */
	public $referer;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param string pdfUrl
	 * @param OvhTypeMyArrayOfStringType recipients
	 * @param string quality
	 * @param string email
	 * @param string referer
	 * @return OvhTypeTelephonyFaxSend
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_pdfUrl = null,$_recipients = null,$_quality = null,$_email = null,$_referer = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'pdfUrl'=>$_pdfUrl,'recipients'=>new OvhTypeMyArrayOfStringType($_recipients),'quality'=>$_quality,'email'=>$_email,'referer'=>$_referer));
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
	 * Set pdfUrl
	 * @param string pdfUrl
	 * @return string
	 */
	public function setPdfUrl($_pdfUrl)
	{
		return ($this->pdfUrl = $_pdfUrl);
	}
	/**
	 * Get pdfUrl
	 * @return string
	 */
	public function getPdfUrl()
	{
		return $this->pdfUrl;
	}
	/**
	 * Set recipients
	 * @param MyArrayOfStringType recipients
	 * @return MyArrayOfStringType
	 */
	public function setRecipients($_recipients)
	{
		return ($this->recipients = $_recipients);
	}
	/**
	 * Get recipients
	 * @return OvhTypeMyArrayOfStringType
	 */
	public function getRecipients()
	{
		return $this->recipients;
	}
	/**
	 * Set quality
	 * @param string quality
	 * @return string
	 */
	public function setQuality($_quality)
	{
		return ($this->quality = $_quality);
	}
	/**
	 * Get quality
	 * @return string
	 */
	public function getQuality()
	{
		return $this->quality;
	}
	/**
	 * Set email
	 * @param string email
	 * @return string
	 */
	public function setEmail($_email)
	{
		return ($this->email = $_email);
	}
	/**
	 * Get email
	 * @return string
	 */
	public function getEmail()
	{
		return $this->email;
	}
	/**
	 * Set referer
	 * @param string referer
	 * @return string
	 */
	public function setReferer($_referer)
	{
		return ($this->referer = $_referer);
	}
	/**
	 * Get referer
	 * @return string
	 */
	public function getReferer()
	{
		return $this->referer;
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