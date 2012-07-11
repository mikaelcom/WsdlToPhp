<?php
/**
 * Class file for SPSitedataTypeGetList
 * @date 06/07/2012
 */
/**
 * Class SPSitedataTypeGetList
 * @date 06/07/2012
 */
class SPSitedataTypeGetList extends SPSitedataWsdlClass
{
	/**
	 * The strListName
	 * @var string
	 */
	public $strListName;
	/**
	 * Constructor
	 * @param string strListName
	 * @return SPSitedataTypeGetList
	 */
	public function __construct($_strListName = null)
	{
		parent::__construct(array('strListName'=>$_strListName));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>