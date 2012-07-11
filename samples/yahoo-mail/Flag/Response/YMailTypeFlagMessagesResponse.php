<?php
/**
 * Class file for YMailTypeFlagMessagesResponse
 * @date 02/07/2012
 */
/**
 * Class YMailTypeFlagMessagesResponse
 * @date 02/07/2012
 */
class YMailTypeFlagMessagesResponse extends YMailWsdlClass
{
	/**
	 * The returnCodes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var YMailTypeErrorCode
	 */
	public $returnCodes;
	/**
	 * Constructor
	 * @param YMailTypeErrorCode returnCodes
	 * @return YMailTypeFlagMessagesResponse
	 */
	public function __construct($_returnCodes = null)
	{
		parent::__construct(array('returnCodes'=>$_returnCodes));
	}
	/**
	 * Set returnCodes
	 * @param ErrorCode returnCodes
	 * @return ErrorCode
	 */
	public function setReturnCodes($_returnCodes)
	{
		return ($this->returnCodes = $_returnCodes);
	}
	/**
	 * Get returnCodes
	 * @return YMailTypeErrorCode
	 */
	public function getReturnCodes()
	{
		return $this->returnCodes;
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