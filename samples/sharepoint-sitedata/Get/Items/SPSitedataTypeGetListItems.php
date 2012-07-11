<?php
/**
 * Class file for SPSitedataTypeGetListItems
 * @date 06/07/2012
 */
/**
 * Class SPSitedataTypeGetListItems
 * @date 06/07/2012
 */
class SPSitedataTypeGetListItems extends SPSitedataWsdlClass
{
	/**
	 * The strListName
	 * @var string
	 */
	public $strListName;
	/**
	 * The strQuery
	 * @var string
	 */
	public $strQuery;
	/**
	 * The strViewFields
	 * @var string
	 */
	public $strViewFields;
	/**
	 * The uRowLimit
	 * @var unsignedInt
	 */
	public $uRowLimit;
	/**
	 * Constructor
	 * @param string strListName
	 * @param string strQuery
	 * @param string strViewFields
	 * @param unsignedInt uRowLimit
	 * @return SPSitedataTypeGetListItems
	 */
	public function __construct($_strListName = null,$_strQuery = null,$_strViewFields = null,$_uRowLimit = null)
	{
		parent::__construct(array('strListName'=>$_strListName,'strQuery'=>$_strQuery,'strViewFields'=>$_strViewFields,'uRowLimit'=>$_uRowLimit));
	}
	/**
	 * Set strListName
	 * @param string strListName
	 * @return string
	 */
	public function setStrListName($_strListName)
	{
		return ($this->strListName = $_strListName);
	}
	/**
	 * Get strListName
	 * @return string
	 */
	public function getStrListName()
	{
		return $this->strListName;
	}
	/**
	 * Set strQuery
	 * @param string strQuery
	 * @return string
	 */
	public function setStrQuery($_strQuery)
	{
		return ($this->strQuery = $_strQuery);
	}
	/**
	 * Get strQuery
	 * @return string
	 */
	public function getStrQuery()
	{
		return $this->strQuery;
	}
	/**
	 * Set strViewFields
	 * @param string strViewFields
	 * @return string
	 */
	public function setStrViewFields($_strViewFields)
	{
		return ($this->strViewFields = $_strViewFields);
	}
	/**
	 * Get strViewFields
	 * @return string
	 */
	public function getStrViewFields()
	{
		return $this->strViewFields;
	}
	/**
	 * Set uRowLimit
	 * @param unsignedInt uRowLimit
	 * @return unsignedInt
	 */
	public function setURowLimit($_uRowLimit)
	{
		return ($this->uRowLimit = $_uRowLimit);
	}
	/**
	 * Get uRowLimit
	 * @return unsignedInt
	 */
	public function getURowLimit()
	{
		return $this->uRowLimit;
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