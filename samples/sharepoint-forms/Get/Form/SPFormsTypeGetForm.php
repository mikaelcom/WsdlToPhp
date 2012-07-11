<?php
/**
 * Class file for SPFormsTypeGetForm
 * @date 06/07/2012
 */
/**
 * Class SPFormsTypeGetForm
 * @date 06/07/2012
 */
class SPFormsTypeGetForm extends SPFormsWsdlClass
{
	/**
	 * The listName
	 * @var string
	 */
	public $listName;
	/**
	 * The formUrl
	 * @var string
	 */
	public $formUrl;
	/**
	 * Constructor
	 * @param string listName
	 * @param string formUrl
	 * @return SPFormsTypeGetForm
	 */
	public function __construct($_listName = null,$_formUrl = null)
	{
		parent::__construct(array('listName'=>$_listName,'formUrl'=>$_formUrl));
	}
	/**
	 * Set listName
	 * @param string listName
	 * @return string
	 */
	public function setListName($_listName)
	{
		return ($this->listName = $_listName);
	}
	/**
	 * Get listName
	 * @return string
	 */
	public function getListName()
	{
		return $this->listName;
	}
	/**
	 * Set formUrl
	 * @param string formUrl
	 * @return string
	 */
	public function setFormUrl($_formUrl)
	{
		return ($this->formUrl = $_formUrl);
	}
	/**
	 * Get formUrl
	 * @return string
	 */
	public function getFormUrl()
	{
		return $this->formUrl;
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