<?php
/**
 * Class file for OvhTypeTelephonyFaxCampaignCreation
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyFaxCampaignCreation
 * @date 02/07/2012
 */
class OvhTypeTelephonyFaxCampaignCreation extends OvhWsdlClass
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
	 * The campaignName
	 * @var string
	 */
	public $campaignName;
	/**
	 * The pdfUrl
	 * @var string
	 */
	public $pdfUrl;
	/**
	 * The pdfName
	 * @var string
	 */
	public $pdfName;
	/**
	 * The recipients
	 * @var OvhTypeMyArrayOfStringType
	 */
	public $recipients;
	/**
	 * The faxQuality
	 * @var string
	 */
	public $faxQuality;
	/**
	 * The initialStatus
	 * @var string
	 */
	public $initialStatus;
	/**
	 * The launchDate
	 * @var string
	 */
	public $launchDate;
	/**
	 * The remoteRecipients
	 * @var boolean
	 */
	public $remoteRecipients;
	/**
	 * Constructor
	 * @param string session
	 * @param string number
	 * @param string country
	 * @param string campaignName
	 * @param string pdfUrl
	 * @param string pdfName
	 * @param OvhTypeMyArrayOfStringType recipients
	 * @param string faxQuality
	 * @param string initialStatus
	 * @param string launchDate
	 * @param boolean remoteRecipients
	 * @return OvhTypeTelephonyFaxCampaignCreation
	 */
	public function __construct($_session = null,$_number = null,$_country = null,$_campaignName = null,$_pdfUrl = null,$_pdfName = null,$_recipients = null,$_faxQuality = null,$_initialStatus = null,$_launchDate = null,$_remoteRecipients = null)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'campaignName'=>$_campaignName,'pdfUrl'=>$_pdfUrl,'pdfName'=>$_pdfName,'recipients'=>new OvhTypeMyArrayOfStringType($_recipients),'faxQuality'=>$_faxQuality,'initialStatus'=>$_initialStatus,'launchDate'=>$_launchDate,'remoteRecipients'=>$_remoteRecipients));
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
	 * Set campaignName
	 * @param string campaignName
	 * @return string
	 */
	public function setCampaignName($_campaignName)
	{
		return ($this->campaignName = $_campaignName);
	}
	/**
	 * Get campaignName
	 * @return string
	 */
	public function getCampaignName()
	{
		return $this->campaignName;
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
	 * Set pdfName
	 * @param string pdfName
	 * @return string
	 */
	public function setPdfName($_pdfName)
	{
		return ($this->pdfName = $_pdfName);
	}
	/**
	 * Get pdfName
	 * @return string
	 */
	public function getPdfName()
	{
		return $this->pdfName;
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
	 * Set faxQuality
	 * @param string faxQuality
	 * @return string
	 */
	public function setFaxQuality($_faxQuality)
	{
		return ($this->faxQuality = $_faxQuality);
	}
	/**
	 * Get faxQuality
	 * @return string
	 */
	public function getFaxQuality()
	{
		return $this->faxQuality;
	}
	/**
	 * Set initialStatus
	 * @param string initialStatus
	 * @return string
	 */
	public function setInitialStatus($_initialStatus)
	{
		return ($this->initialStatus = $_initialStatus);
	}
	/**
	 * Get initialStatus
	 * @return string
	 */
	public function getInitialStatus()
	{
		return $this->initialStatus;
	}
	/**
	 * Set launchDate
	 * @param string launchDate
	 * @return string
	 */
	public function setLaunchDate($_launchDate)
	{
		return ($this->launchDate = $_launchDate);
	}
	/**
	 * Get launchDate
	 * @return string
	 */
	public function getLaunchDate()
	{
		return $this->launchDate;
	}
	/**
	 * Set remoteRecipients
	 * @param boolean remoteRecipients
	 * @return boolean
	 */
	public function setRemoteRecipients($_remoteRecipients)
	{
		return ($this->remoteRecipients = $_remoteRecipients);
	}
	/**
	 * Get remoteRecipients
	 * @return boolean
	 */
	public function getRemoteRecipients()
	{
		return $this->remoteRecipients;
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