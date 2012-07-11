<?php
/**
 * Class file for GGAdwordsTypeApplicationException
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeApplicationException
 * Documentation : Base class for exceptions.
 * @date 03/07/2012
 */
class GGAdwordsTypeApplicationException extends GGAdwordsWsdlClass
{
	/**
	 * The message
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Error message.
	 * @var string
	 */
	public $message;
	/**
	 * The ApplicationExceptionType
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates that this instance is a subtype of ApplicationException. Although this field is returned in the response, it is ignored on input and cannot be selected. Specify xsi:type instead.
	 * @var string
	 */
	public $ApplicationExceptionType;
	/**
	 * Constructor
	 * @param string message
	 * @param string ApplicationExceptionType
	 * @return GGAdwordsTypeApplicationException
	 */
	public function __construct($_message = null,$_ApplicationExceptionType = null)
	{
		parent::__construct(array('message'=>$_message,'ApplicationExceptionType'=>$_ApplicationExceptionType));
	}
	/**
	 * Set message
	 * @param string message
	 * @return string
	 */
	public function setMessage($_message)
	{
		return ($this->message = $_message);
	}
	/**
	 * Get message
	 * @return string
	 */
	public function getMessage()
	{
		return $this->message;
	}
	/**
	 * Set ApplicationExceptionType
	 * @param string ApplicationExceptionType
	 * @return string
	 */
	public function setApplicationExceptionType($_ApplicationExceptionType)
	{
		return ($this->ApplicationExceptionType = $_ApplicationExceptionType);
	}
	/**
	 * Get ApplicationExceptionType
	 * @return string
	 */
	public function getApplicationExceptionType()
	{
		return $this->ApplicationExceptionType;
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