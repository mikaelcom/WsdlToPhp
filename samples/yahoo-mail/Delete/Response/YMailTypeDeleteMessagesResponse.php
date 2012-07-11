<?php
/**
 * Class file for YMailTypeDeleteMessagesResponse
 * @date 02/07/2012
 */
/**
 * Class YMailTypeDeleteMessagesResponse
 * @date 02/07/2012
 */
class YMailTypeDeleteMessagesResponse extends YMailWsdlClass
{
	/**
	 * The error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var YMailTypeErrorCode
	 */
	public $error;
	/**
	 * Constructor
	 * @param YMailTypeErrorCode error
	 * @return YMailTypeDeleteMessagesResponse
	 */
	public function __construct($_error = null)
	{
		parent::__construct(array('error'=>$_error));
	}
	/**
	 * Set error
	 * @param ErrorCode error
	 * @return ErrorCode
	 */
	public function setError($_error)
	{
		return ($this->error = $_error);
	}
	/**
	 * Get error
	 * @return YMailTypeErrorCode
	 */
	public function getError()
	{
		return $this->error;
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