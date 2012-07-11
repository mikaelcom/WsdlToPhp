<?php
/**
 * Class file for SPDocumentWkTypeGetDwsData
 * @date 06/07/2012
 */
/**
 * Class SPDocumentWkTypeGetDwsData
 * @date 06/07/2012
 */
class SPDocumentWkTypeGetDwsData extends SPDocumentWkWsdlClass
{
	/**
	 * The document
	 * @var string
	 */
	public $document;
	/**
	 * The lastUpdate
	 * @var string
	 */
	public $lastUpdate;
	/**
	 * Constructor
	 * @param string document
	 * @param string lastUpdate
	 * @return SPDocumentWkTypeGetDwsData
	 */
	public function __construct($_document = null,$_lastUpdate = null)
	{
		parent::__construct(array('document'=>$_document,'lastUpdate'=>$_lastUpdate));
	}
	/**
	 * Set document
	 * @param string document
	 * @return string
	 */
	public function setDocument($_document)
	{
		return ($this->document = $_document);
	}
	/**
	 * Get document
	 * @return string
	 */
	public function getDocument()
	{
		return $this->document;
	}
	/**
	 * Set lastUpdate
	 * @param string lastUpdate
	 * @return string
	 */
	public function setLastUpdate($_lastUpdate)
	{
		return ($this->lastUpdate = $_lastUpdate);
	}
	/**
	 * Get lastUpdate
	 * @return string
	 */
	public function getLastUpdate()
	{
		return $this->lastUpdate;
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