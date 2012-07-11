<?php
/**
 * Class file for SPListsTypeAddListFromFeature
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeAddListFromFeature
 * @date 07/07/2012
 */
class SPListsTypeAddListFromFeature extends SPListsWsdlClass
{
	/**
	 * The listName
	 * @var string
	 */
	public $listName;
	/**
	 * The description
	 * @var string
	 */
	public $description;
	/**
	 * The featureID
	 * @var guid
	 */
	public $featureID;
	/**
	 * The templateID
	 * @var int
	 */
	public $templateID;
	/**
	 * Constructor
	 * @param string listName
	 * @param string description
	 * @param guid featureID
	 * @param int templateID
	 * @return SPListsTypeAddListFromFeature
	 */
	public function __construct($_listName = null,$_description = null,$_featureID = null,$_templateID = null)
	{
		parent::__construct(array('listName'=>$_listName,'description'=>$_description,'featureID'=>$_featureID,'templateID'=>$_templateID));
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
	 * Set description
	 * @param string description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Get description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}
	/**
	 * Set featureID
	 * @param guid featureID
	 * @return guid
	 */
	public function setFeatureID($_featureID)
	{
		return ($this->featureID = $_featureID);
	}
	/**
	 * Get featureID
	 * @return guid
	 */
	public function getFeatureID()
	{
		return $this->featureID;
	}
	/**
	 * Set templateID
	 * @param int templateID
	 * @return int
	 */
	public function setTemplateID($_templateID)
	{
		return ($this->templateID = $_templateID);
	}
	/**
	 * Get templateID
	 * @return int
	 */
	public function getTemplateID()
	{
		return $this->templateID;
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