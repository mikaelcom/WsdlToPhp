<?php
/**
 * Class file for OvhTypeMomVersionReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMomVersionReturn
 * @date 02/07/2012
 */
class OvhTypeMomVersionReturn extends OvhWsdlClass
{
	/**
	 * The version
	 * @var string
	 */
	public $version;
	/**
	 * The build
	 * @var string
	 */
	public $build;
	/**
	 * Constructor
	 * @param string version
	 * @param string build
	 * @return OvhTypeMomVersionReturn
	 */
	public function __construct($_version = null,$_build = null)
	{
		parent::__construct(array('version'=>$_version,'build'=>$_build));
	}
	/**
	 * Set version
	 * @param string version
	 * @return string
	 */
	public function setVersion($_version)
	{
		return ($this->version = $_version);
	}
	/**
	 * Get version
	 * @return string
	 */
	public function getVersion()
	{
		return $this->version;
	}
	/**
	 * Set build
	 * @param string build
	 * @return string
	 */
	public function setBuild($_build)
	{
		return ($this->build = $_build);
	}
	/**
	 * Get build
	 * @return string
	 */
	public function getBuild()
	{
		return $this->build;
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