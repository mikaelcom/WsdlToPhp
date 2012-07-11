<?php
/**
 * Class file for SPListDataRetrievalTypeVersions
 * @date 06/07/2012
 */
/**
 * Class SPListDataRetrievalTypeVersions
 * @date 06/07/2012
 */
class SPListDataRetrievalTypeVersions extends SPListDataRetrievalWsdlClass
{
	/**
	 * The version
	 * @var string
	 */
	public $version;
	/**
	 * Constructor
	 * @param string version
	 * @return SPListDataRetrievalTypeVersions
	 */
	public function __construct($_version = null)
	{
		parent::__construct(array('version'=>$_version));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>