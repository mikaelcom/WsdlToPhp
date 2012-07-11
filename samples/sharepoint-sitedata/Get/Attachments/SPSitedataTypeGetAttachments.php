<?php
/**
 * Class file for SPSitedataTypeGetAttachments
 * @date 06/07/2012
 */
/**
 * Class SPSitedataTypeGetAttachments
 * @date 06/07/2012
 */
class SPSitedataTypeGetAttachments extends SPSitedataWsdlClass
{
	/**
	 * The strListName
	 * @var string
	 */
	public $strListName;
	/**
	 * The strItemId
	 * @var string
	 */
	public $strItemId;
	/**
	 * Constructor
	 * @param string strListName
	 * @param string strItemId
	 * @return SPSitedataTypeGetAttachments
	 */
	public function __construct($_strListName = null,$_strItemId = null)
	{
		parent::__construct(array('strListName'=>$_strListName,'strItemId'=>$_strItemId));
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
	 * Set strItemId
	 * @param string strItemId
	 * @return string
	 */
	public function setStrItemId($_strItemId)
	{
		return ($this->strItemId = $_strItemId);
	}
	/**
	 * Get strItemId
	 * @return string
	 */
	public function getStrItemId()
	{
		return $this->strItemId;
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