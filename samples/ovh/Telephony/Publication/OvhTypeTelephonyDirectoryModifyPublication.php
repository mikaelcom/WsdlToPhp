<?php
/**
 * Class file for OvhTypeTelephonyDirectoryModifyPublication
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyDirectoryModifyPublication
 * @date 02/07/2012
 */
class OvhTypeTelephonyDirectoryModifyPublication extends OvhWsdlClass
{
	/**
	 * The session
	 * @var string
	 */
	public $session;
	/**
	 * The callNumber
	 * @var string
	 */
	public $callNumber;
	/**
	 * The countryCode
	 * @var string
	 */
	public $countryCode;
	/**
	 * The lineDescription
	 * @var string
	 */
	public $lineDescription;
	/**
	 * The displayFirstName
	 * @var string
	 */
	public $displayFirstName;
	/**
	 * The displayOnlyCity
	 * @var string
	 */
	public $displayOnlyCity;
	/**
	 * The displayUniversalDirectory
	 * @var string
	 */
	public $displayUniversalDirectory;
	/**
	 * The displayMarketingDirectory
	 * @var string
	 */
	public $displayMarketingDirectory;
	/**
	 * The displaySearchReverse
	 * @var string
	 */
	public $displaySearchReverse;
	/**
	 * The receivePJDirectory
	 * @var string
	 */
	public $receivePJDirectory;
	/**
	 * Constructor
	 * @param string session
	 * @param string callNumber
	 * @param string countryCode
	 * @param string lineDescription
	 * @param string displayFirstName
	 * @param string displayOnlyCity
	 * @param string displayUniversalDirectory
	 * @param string displayMarketingDirectory
	 * @param string displaySearchReverse
	 * @param string receivePJDirectory
	 * @return OvhTypeTelephonyDirectoryModifyPublication
	 */
	public function __construct($_session = null,$_callNumber = null,$_countryCode = null,$_lineDescription = null,$_displayFirstName = null,$_displayOnlyCity = null,$_displayUniversalDirectory = null,$_displayMarketingDirectory = null,$_displaySearchReverse = null,$_receivePJDirectory = null)
	{
		parent::__construct(array('session'=>$_session,'callNumber'=>$_callNumber,'countryCode'=>$_countryCode,'lineDescription'=>$_lineDescription,'displayFirstName'=>$_displayFirstName,'displayOnlyCity'=>$_displayOnlyCity,'displayUniversalDirectory'=>$_displayUniversalDirectory,'displayMarketingDirectory'=>$_displayMarketingDirectory,'displaySearchReverse'=>$_displaySearchReverse,'receivePJDirectory'=>$_receivePJDirectory));
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
	 * Set callNumber
	 * @param string callNumber
	 * @return string
	 */
	public function setCallNumber($_callNumber)
	{
		return ($this->callNumber = $_callNumber);
	}
	/**
	 * Get callNumber
	 * @return string
	 */
	public function getCallNumber()
	{
		return $this->callNumber;
	}
	/**
	 * Set countryCode
	 * @param string countryCode
	 * @return string
	 */
	public function setCountryCode($_countryCode)
	{
		return ($this->countryCode = $_countryCode);
	}
	/**
	 * Get countryCode
	 * @return string
	 */
	public function getCountryCode()
	{
		return $this->countryCode;
	}
	/**
	 * Set lineDescription
	 * @param string lineDescription
	 * @return string
	 */
	public function setLineDescription($_lineDescription)
	{
		return ($this->lineDescription = $_lineDescription);
	}
	/**
	 * Get lineDescription
	 * @return string
	 */
	public function getLineDescription()
	{
		return $this->lineDescription;
	}
	/**
	 * Set displayFirstName
	 * @param string displayFirstName
	 * @return string
	 */
	public function setDisplayFirstName($_displayFirstName)
	{
		return ($this->displayFirstName = $_displayFirstName);
	}
	/**
	 * Get displayFirstName
	 * @return string
	 */
	public function getDisplayFirstName()
	{
		return $this->displayFirstName;
	}
	/**
	 * Set displayOnlyCity
	 * @param string displayOnlyCity
	 * @return string
	 */
	public function setDisplayOnlyCity($_displayOnlyCity)
	{
		return ($this->displayOnlyCity = $_displayOnlyCity);
	}
	/**
	 * Get displayOnlyCity
	 * @return string
	 */
	public function getDisplayOnlyCity()
	{
		return $this->displayOnlyCity;
	}
	/**
	 * Set displayUniversalDirectory
	 * @param string displayUniversalDirectory
	 * @return string
	 */
	public function setDisplayUniversalDirectory($_displayUniversalDirectory)
	{
		return ($this->displayUniversalDirectory = $_displayUniversalDirectory);
	}
	/**
	 * Get displayUniversalDirectory
	 * @return string
	 */
	public function getDisplayUniversalDirectory()
	{
		return $this->displayUniversalDirectory;
	}
	/**
	 * Set displayMarketingDirectory
	 * @param string displayMarketingDirectory
	 * @return string
	 */
	public function setDisplayMarketingDirectory($_displayMarketingDirectory)
	{
		return ($this->displayMarketingDirectory = $_displayMarketingDirectory);
	}
	/**
	 * Get displayMarketingDirectory
	 * @return string
	 */
	public function getDisplayMarketingDirectory()
	{
		return $this->displayMarketingDirectory;
	}
	/**
	 * Set displaySearchReverse
	 * @param string displaySearchReverse
	 * @return string
	 */
	public function setDisplaySearchReverse($_displaySearchReverse)
	{
		return ($this->displaySearchReverse = $_displaySearchReverse);
	}
	/**
	 * Get displaySearchReverse
	 * @return string
	 */
	public function getDisplaySearchReverse()
	{
		return $this->displaySearchReverse;
	}
	/**
	 * Set receivePJDirectory
	 * @param string receivePJDirectory
	 * @return string
	 */
	public function setReceivePJDirectory($_receivePJDirectory)
	{
		return ($this->receivePJDirectory = $_receivePJDirectory);
	}
	/**
	 * Get receivePJDirectory
	 * @return string
	 */
	public function getReceivePJDirectory()
	{
		return $this->receivePJDirectory;
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