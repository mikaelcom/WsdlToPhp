<?php
/**
 * Class file for EccEmailPop3TypePOP3
 * @date 03/07/2012
 */
/**
 * Class EccEmailPop3TypePOP3
 * @date 03/07/2012
 */
class EccEmailPop3TypePOP3 extends EccEmailPop3WsdlClass
{
	/**
	 * The FromEmail
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FromEmail;
	/**
	 * The ToEmail
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ToEmail;
	/**
	 * The CCEmail
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CCEmail;
	/**
	 * The Subject
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Subject;
	/**
	 * The Body
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Body;
	/**
	 * The Version
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Version;
	/**
	 * Constructor
	 * @param string FromEmail
	 * @param string ToEmail
	 * @param string CCEmail
	 * @param string Subject
	 * @param string Body
	 * @param string Version
	 * @return EccEmailPop3TypePOP3
	 */
	public function __construct($_FromEmail = null,$_ToEmail = null,$_CCEmail = null,$_Subject = null,$_Body = null,$_Version = null)
	{
		parent::__construct(array('FromEmail'=>$_FromEmail,'ToEmail'=>$_ToEmail,'CCEmail'=>$_CCEmail,'Subject'=>$_Subject,'Body'=>$_Body,'Version'=>$_Version));
	}
	/**
	 * Set FromEmail
	 * @param string FromEmail
	 * @return string
	 */
	public function setFromEmail($_FromEmail)
	{
		return ($this->FromEmail = $_FromEmail);
	}
	/**
	 * Get FromEmail
	 * @return string
	 */
	public function getFromEmail()
	{
		return $this->FromEmail;
	}
	/**
	 * Set ToEmail
	 * @param string ToEmail
	 * @return string
	 */
	public function setToEmail($_ToEmail)
	{
		return ($this->ToEmail = $_ToEmail);
	}
	/**
	 * Get ToEmail
	 * @return string
	 */
	public function getToEmail()
	{
		return $this->ToEmail;
	}
	/**
	 * Set CCEmail
	 * @param string CCEmail
	 * @return string
	 */
	public function setCCEmail($_CCEmail)
	{
		return ($this->CCEmail = $_CCEmail);
	}
	/**
	 * Get CCEmail
	 * @return string
	 */
	public function getCCEmail()
	{
		return $this->CCEmail;
	}
	/**
	 * Set Subject
	 * @param string Subject
	 * @return string
	 */
	public function setSubject($_Subject)
	{
		return ($this->Subject = $_Subject);
	}
	/**
	 * Get Subject
	 * @return string
	 */
	public function getSubject()
	{
		return $this->Subject;
	}
	/**
	 * Set Body
	 * @param string Body
	 * @return string
	 */
	public function setBody($_Body)
	{
		return ($this->Body = $_Body);
	}
	/**
	 * Get Body
	 * @return string
	 */
	public function getBody()
	{
		return $this->Body;
	}
	/**
	 * Set Version
	 * @param string Version
	 * @return string
	 */
	public function setVersion($_Version)
	{
		return ($this->Version = $_Version);
	}
	/**
	 * Get Version
	 * @return string
	 */
	public function getVersion()
	{
		return $this->Version;
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