<?php
/**
 * Class file for GGAdwordsTypeSizeLimitError
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeSizeLimitError
 * Documentation : Indicates that the number of entries in the request or response exceeds the system limit.
 * @date 03/07/2012
 */
class GGAdwordsTypeSizeLimitError extends GGAdwordsTypeApiError
{
	/**
	 * The reason
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The error reason represented by an enum.
	 * @var GGAdwordsTypeSizeLimitErrorReason
	 */
	public $reason;
	/**
	 * Constructor
	 * @param GGAdwordsTypeSizeLimitErrorReason reason
	 * @return GGAdwordsTypeSizeLimitError
	 */
	public function __construct($_reason = null)
	{
		GGAdwordsWsdlClass::__construct(array('reason'=>$_reason));
	}
	/**
	 * Set reason
	 * @param SizeLimitErrorReason reason
	 * @return SizeLimitErrorReason
	 */
	public function setReason($_reason)
	{
		return ($this->reason = GGAdwordsTypeSizeLimitErrorReason::valueIsValid($_reason)?$_reason:null);
	}
	/**
	 * Get reason
	 * @return GGAdwordsTypeSizeLimitErrorReason
	 */
	public function getReason()
	{
		return $this->reason;
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