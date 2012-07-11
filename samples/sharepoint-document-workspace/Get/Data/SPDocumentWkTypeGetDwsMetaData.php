<?php
/**
 * Class file for SPDocumentWkTypeGetDwsMetaData
 * @date 06/07/2012
 */
/**
 * Class SPDocumentWkTypeGetDwsMetaData
 * @date 06/07/2012
 */
class SPDocumentWkTypeGetDwsMetaData extends SPDocumentWkWsdlClass
{
	/**
	 * The document
	 * @var string
	 */
	public $document;
	/**
	 * The id
	 * @var string
	 */
	public $id;
	/**
	 * The minimal
	 * @var boolean
	 */
	public $minimal;
	/**
	 * Constructor
	 * @param string document
	 * @param string id
	 * @param boolean minimal
	 * @return SPDocumentWkTypeGetDwsMetaData
	 */
	public function __construct($_document = null,$_id = null,$_minimal = null)
	{
		parent::__construct(array('document'=>$_document,'id'=>$_id,'minimal'=>$_minimal));
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
	 * Set id
	 * @param string id
	 * @return string
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get id
	 * @return string
	 */
	public function getId()
	{
		return $this->id;
	}
	/**
	 * Set minimal
	 * @param boolean minimal
	 * @return boolean
	 */
	public function setMinimal($_minimal)
	{
		return ($this->minimal = $_minimal);
	}
	/**
	 * Get minimal
	 * @return boolean
	 */
	public function getMinimal()
	{
		return $this->minimal;
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