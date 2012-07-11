<?php
/**
 * Class file for SPSitedataTypeGetChangesEx
 * @date 06/07/2012
 */
/**
 * Class SPSitedataTypeGetChangesEx
 * @date 06/07/2012
 */
class SPSitedataTypeGetChangesEx extends SPSitedataWsdlClass
{
	/**
	 * The version
	 * @var int
	 */
	public $version;
	/**
	 * The xmlInput
	 * @var string
	 */
	public $xmlInput;
	/**
	 * Constructor
	 * @param int version
	 * @param string xmlInput
	 * @return SPSitedataTypeGetChangesEx
	 */
	public function __construct($_version = null,$_xmlInput = null)
	{
		parent::__construct(array('version'=>$_version,'xmlInput'=>$_xmlInput));
	}
	/**
	 * Set version
	 * @param int version
	 * @return int
	 */
	public function setVersion($_version)
	{
		return ($this->version = $_version);
	}
	/**
	 * Get version
	 * @return int
	 */
	public function getVersion()
	{
		return $this->version;
	}
	/**
	 * Set xmlInput
	 * @param string xmlInput
	 * @return string
	 */
	public function setXmlInput($_xmlInput)
	{
		return ($this->xmlInput = $_xmlInput);
	}
	/**
	 * Get xmlInput
	 * @return string
	 */
	public function getXmlInput()
	{
		return $this->xmlInput;
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