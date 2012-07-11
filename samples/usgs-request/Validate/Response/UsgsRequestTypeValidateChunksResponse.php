<?php
/**
 * Class file for UsgsRequestTypeValidateChunksResponse
 * @date 08/07/2012
 */
/**
 * Class UsgsRequestTypeValidateChunksResponse
 * @date 08/07/2012
 */
class UsgsRequestTypeValidateChunksResponse extends UsgsRequestWsdlClass
{
	/**
	 * The validateChunksReturn
	 * @var string
	 */
	public $validateChunksReturn;
	/**
	 * Constructor
	 * @param string validateChunksReturn
	 * @return UsgsRequestTypeValidateChunksResponse
	 */
	public function __construct($_validateChunksReturn = null)
	{
		parent::__construct(array('validateChunksReturn'=>$_validateChunksReturn));
	}
	/**
	 * Set validateChunksReturn
	 * @param string validateChunksReturn
	 * @return string
	 */
	public function setValidateChunksReturn($_validateChunksReturn)
	{
		return ($this->validateChunksReturn = $_validateChunksReturn);
	}
	/**
	 * Get validateChunksReturn
	 * @return string
	 */
	public function getValidateChunksReturn()
	{
		return $this->validateChunksReturn;
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