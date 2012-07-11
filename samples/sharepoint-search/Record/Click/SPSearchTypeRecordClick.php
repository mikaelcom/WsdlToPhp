<?php
/**
 * Class file for SPSearchTypeRecordClick
 * @date 06/07/2012
 */
/**
 * Class SPSearchTypeRecordClick
 * @date 06/07/2012
 */
class SPSearchTypeRecordClick extends SPSearchWsdlClass
{
	/**
	 * The clickInfoXml
	 * @var string
	 */
	public $clickInfoXml;
	/**
	 * Constructor
	 * @param string clickInfoXml
	 * @return SPSearchTypeRecordClick
	 */
	public function __construct($_clickInfoXml = null)
	{
		parent::__construct(array('clickInfoXml'=>$_clickInfoXml));
	}
	/**
	 * Set clickInfoXml
	 * @param string clickInfoXml
	 * @return string
	 */
	public function setClickInfoXml($_clickInfoXml)
	{
		return ($this->clickInfoXml = $_clickInfoXml);
	}
	/**
	 * Get clickInfoXml
	 * @return string
	 */
	public function getClickInfoXml()
	{
		return $this->clickInfoXml;
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