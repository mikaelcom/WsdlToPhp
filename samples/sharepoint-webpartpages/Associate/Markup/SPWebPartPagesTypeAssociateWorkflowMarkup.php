<?php
/**
 * Class file for SPWebPartPagesTypeAssociateWorkflowMarkup
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeAssociateWorkflowMarkup
 * @date 06/07/2012
 */
class SPWebPartPagesTypeAssociateWorkflowMarkup extends SPWebPartPagesWsdlClass
{
	/**
	 * The configUrl
	 * @var string
	 */
	public $configUrl;
	/**
	 * The configVersion
	 * @var string
	 */
	public $configVersion;
	/**
	 * Constructor
	 * @param string configUrl
	 * @param string configVersion
	 * @return SPWebPartPagesTypeAssociateWorkflowMarkup
	 */
	public function __construct($_configUrl = null,$_configVersion = null)
	{
		parent::__construct(array('configUrl'=>$_configUrl,'configVersion'=>$_configVersion));
	}
	/**
	 * Set configUrl
	 * @param string configUrl
	 * @return string
	 */
	public function setConfigUrl($_configUrl)
	{
		return ($this->configUrl = $_configUrl);
	}
	/**
	 * Get configUrl
	 * @return string
	 */
	public function getConfigUrl()
	{
		return $this->configUrl;
	}
	/**
	 * Set configVersion
	 * @param string configVersion
	 * @return string
	 */
	public function setConfigVersion($_configVersion)
	{
		return ($this->configVersion = $_configVersion);
	}
	/**
	 * Get configVersion
	 * @return string
	 */
	public function getConfigVersion()
	{
		return $this->configVersion;
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