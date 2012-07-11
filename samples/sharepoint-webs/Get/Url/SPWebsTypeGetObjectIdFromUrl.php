<?php
/**
 * Class file for SPWebsTypeGetObjectIdFromUrl
 * @date 06/07/2012
 */
/**
 * Class SPWebsTypeGetObjectIdFromUrl
 * @date 06/07/2012
 */
class SPWebsTypeGetObjectIdFromUrl extends SPWebsWsdlClass
{
	/**
	 * The objectUrl
	 * @var string
	 */
	public $objectUrl;
	/**
	 * Constructor
	 * @param string objectUrl
	 * @return SPWebsTypeGetObjectIdFromUrl
	 */
	public function __construct($_objectUrl = null)
	{
		parent::__construct(array('objectUrl'=>$_objectUrl));
	}
	/**
	 * Set objectUrl
	 * @param string objectUrl
	 * @return string
	 */
	public function setObjectUrl($_objectUrl)
	{
		return ($this->objectUrl = $_objectUrl);
	}
	/**
	 * Get objectUrl
	 * @return string
	 */
	public function getObjectUrl()
	{
		return $this->objectUrl;
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