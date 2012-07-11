<?php
/**
 * Class file for SPListsTypeGetVersionCollection
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeGetVersionCollection
 * @date 07/07/2012
 */
class SPListsTypeGetVersionCollection extends SPListsWsdlClass
{
	/**
	 * The strlistID
	 * @var string
	 */
	public $strlistID;
	/**
	 * The strlistItemID
	 * @var string
	 */
	public $strlistItemID;
	/**
	 * The strFieldName
	 * @var string
	 */
	public $strFieldName;
	/**
	 * Constructor
	 * @param string strlistID
	 * @param string strlistItemID
	 * @param string strFieldName
	 * @return SPListsTypeGetVersionCollection
	 */
	public function __construct($_strlistID = null,$_strlistItemID = null,$_strFieldName = null)
	{
		parent::__construct(array('strlistID'=>$_strlistID,'strlistItemID'=>$_strlistItemID,'strFieldName'=>$_strFieldName));
	}
	/**
	 * Set strlistID
	 * @param string strlistID
	 * @return string
	 */
	public function setStrlistID($_strlistID)
	{
		return ($this->strlistID = $_strlistID);
	}
	/**
	 * Get strlistID
	 * @return string
	 */
	public function getStrlistID()
	{
		return $this->strlistID;
	}
	/**
	 * Set strlistItemID
	 * @param string strlistItemID
	 * @return string
	 */
	public function setStrlistItemID($_strlistItemID)
	{
		return ($this->strlistItemID = $_strlistItemID);
	}
	/**
	 * Get strlistItemID
	 * @return string
	 */
	public function getStrlistItemID()
	{
		return $this->strlistItemID;
	}
	/**
	 * Set strFieldName
	 * @param string strFieldName
	 * @return string
	 */
	public function setStrFieldName($_strFieldName)
	{
		return ($this->strFieldName = $_strFieldName);
	}
	/**
	 * Get strFieldName
	 * @return string
	 */
	public function getStrFieldName()
	{
		return $this->strFieldName;
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