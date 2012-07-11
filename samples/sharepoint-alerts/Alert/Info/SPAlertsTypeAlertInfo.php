<?php
/**
 * Class file for SPAlertsTypeAlertInfo
 * @date 06/07/2012
 */
/**
 * Class SPAlertsTypeAlertInfo
 * @date 06/07/2012
 */
class SPAlertsTypeAlertInfo extends SPAlertsWsdlClass
{
	/**
	 * The CurrentUser
	 * @var string
	 */
	public $CurrentUser;
	/**
	 * The AlertServerName
	 * @var string
	 */
	public $AlertServerName;
	/**
	 * The AlertServerUrl
	 * @var string
	 */
	public $AlertServerUrl;
	/**
	 * The AlertServerType
	 * @var string
	 */
	public $AlertServerType;
	/**
	 * The AlertsManagementUrl
	 * @var string
	 */
	public $AlertsManagementUrl;
	/**
	 * The AlertWebTitle
	 * @var string
	 */
	public $AlertWebTitle;
	/**
	 * The NewAlertUrl
	 * @var string
	 */
	public $NewAlertUrl;
	/**
	 * The AlertWebId
	 * @var string
	 */
	public $AlertWebId;
	/**
	 * The Alerts
	 * @var SPAlertsTypeArrayOfAlert
	 */
	public $Alerts;
	/**
	 * Constructor
	 * @param string CurrentUser
	 * @param string AlertServerName
	 * @param string AlertServerUrl
	 * @param string AlertServerType
	 * @param string AlertsManagementUrl
	 * @param string AlertWebTitle
	 * @param string NewAlertUrl
	 * @param string AlertWebId
	 * @param SPAlertsTypeArrayOfAlert Alerts
	 * @return SPAlertsTypeAlertInfo
	 */
	public function __construct($_CurrentUser = null,$_AlertServerName = null,$_AlertServerUrl = null,$_AlertServerType = null,$_AlertsManagementUrl = null,$_AlertWebTitle = null,$_NewAlertUrl = null,$_AlertWebId = null,$_Alerts = null)
	{
		parent::__construct(array('CurrentUser'=>$_CurrentUser,'AlertServerName'=>$_AlertServerName,'AlertServerUrl'=>$_AlertServerUrl,'AlertServerType'=>$_AlertServerType,'AlertsManagementUrl'=>$_AlertsManagementUrl,'AlertWebTitle'=>$_AlertWebTitle,'NewAlertUrl'=>$_NewAlertUrl,'AlertWebId'=>$_AlertWebId,'Alerts'=>new SPAlertsTypeArrayOfAlert($_Alerts)));
	}
	/**
	 * Set CurrentUser
	 * @param string CurrentUser
	 * @return string
	 */
	public function setCurrentUser($_CurrentUser)
	{
		return ($this->CurrentUser = $_CurrentUser);
	}
	/**
	 * Get CurrentUser
	 * @return string
	 */
	public function getCurrentUser()
	{
		return $this->CurrentUser;
	}
	/**
	 * Set AlertServerName
	 * @param string AlertServerName
	 * @return string
	 */
	public function setAlertServerName($_AlertServerName)
	{
		return ($this->AlertServerName = $_AlertServerName);
	}
	/**
	 * Get AlertServerName
	 * @return string
	 */
	public function getAlertServerName()
	{
		return $this->AlertServerName;
	}
	/**
	 * Set AlertServerUrl
	 * @param string AlertServerUrl
	 * @return string
	 */
	public function setAlertServerUrl($_AlertServerUrl)
	{
		return ($this->AlertServerUrl = $_AlertServerUrl);
	}
	/**
	 * Get AlertServerUrl
	 * @return string
	 */
	public function getAlertServerUrl()
	{
		return $this->AlertServerUrl;
	}
	/**
	 * Set AlertServerType
	 * @param string AlertServerType
	 * @return string
	 */
	public function setAlertServerType($_AlertServerType)
	{
		return ($this->AlertServerType = $_AlertServerType);
	}
	/**
	 * Get AlertServerType
	 * @return string
	 */
	public function getAlertServerType()
	{
		return $this->AlertServerType;
	}
	/**
	 * Set AlertsManagementUrl
	 * @param string AlertsManagementUrl
	 * @return string
	 */
	public function setAlertsManagementUrl($_AlertsManagementUrl)
	{
		return ($this->AlertsManagementUrl = $_AlertsManagementUrl);
	}
	/**
	 * Get AlertsManagementUrl
	 * @return string
	 */
	public function getAlertsManagementUrl()
	{
		return $this->AlertsManagementUrl;
	}
	/**
	 * Set AlertWebTitle
	 * @param string AlertWebTitle
	 * @return string
	 */
	public function setAlertWebTitle($_AlertWebTitle)
	{
		return ($this->AlertWebTitle = $_AlertWebTitle);
	}
	/**
	 * Get AlertWebTitle
	 * @return string
	 */
	public function getAlertWebTitle()
	{
		return $this->AlertWebTitle;
	}
	/**
	 * Set NewAlertUrl
	 * @param string NewAlertUrl
	 * @return string
	 */
	public function setNewAlertUrl($_NewAlertUrl)
	{
		return ($this->NewAlertUrl = $_NewAlertUrl);
	}
	/**
	 * Get NewAlertUrl
	 * @return string
	 */
	public function getNewAlertUrl()
	{
		return $this->NewAlertUrl;
	}
	/**
	 * Set AlertWebId
	 * @param string AlertWebId
	 * @return string
	 */
	public function setAlertWebId($_AlertWebId)
	{
		return ($this->AlertWebId = $_AlertWebId);
	}
	/**
	 * Get AlertWebId
	 * @return string
	 */
	public function getAlertWebId()
	{
		return $this->AlertWebId;
	}
	/**
	 * Set Alerts
	 * @param ArrayOfAlert Alerts
	 * @return ArrayOfAlert
	 */
	public function setAlerts($_Alerts)
	{
		return ($this->Alerts = $_Alerts);
	}
	/**
	 * Get Alerts
	 * @return SPAlertsTypeArrayOfAlert
	 */
	public function getAlerts()
	{
		return $this->Alerts;
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