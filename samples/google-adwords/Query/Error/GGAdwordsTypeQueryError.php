<?php
/**
 * Class file for GGAdwordsTypeQueryError
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeQueryError
 * Documentation : A QueryError represents possible errors for query parsing and execution.
 * @date 03/07/2012
 */
class GGAdwordsTypeQueryError extends GGAdwordsTypeApiError
{
	/**
	 * The reason
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * @var GGAdwordsTypeQueryErrorReason
	 */
	public $reason;
	/**
	 * The message
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $message;
	/**
	 * Constructor
	 * @param GGAdwordsTypeQueryErrorReason reason
	 * @param string message
	 * @return GGAdwordsTypeQueryError
	 */
	public function __construct($_reason = null,$_message = null)
	{
		GGAdwordsWsdlClass::__construct(array('reason'=>$_reason,'message'=>$_message));
	}
	/**
	 * Set reason
	 * @param QueryErrorReason reason
	 * @return QueryErrorReason
	 */
	public function setReason($_reason)
	{
		return ($this->reason = GGAdwordsTypeQueryErrorReason::valueIsValid($_reason)?$_reason:null);
	}
	/**
	 * Get reason
	 * @return GGAdwordsTypeQueryErrorReason
	 */
	public function getReason()
	{
		return $this->reason;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>