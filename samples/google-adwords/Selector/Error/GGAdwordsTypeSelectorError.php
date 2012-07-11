<?php
/**
 * Class file for GGAdwordsTypeSelectorError
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeSelectorError
 * Documentation : Represents possible error codes for {@link Selector}.
 * @date 03/07/2012
 */
class GGAdwordsTypeSelectorError extends GGAdwordsTypeApiError
{
	/**
	 * The reason
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The error reason represented by enum.
	 * @var GGAdwordsTypeSelectorErrorReason
	 */
	public $reason;
	/**
	 * Constructor
	 * @param GGAdwordsTypeSelectorErrorReason reason
	 * @return GGAdwordsTypeSelectorError
	 */
	public function __construct($_reason = null)
	{
		GGAdwordsWsdlClass::__construct(array('reason'=>$_reason));
	}
	/**
	 * Set reason
	 * @param SelectorErrorReason reason
	 * @return SelectorErrorReason
	 */
	public function setReason($_reason)
	{
		return ($this->reason = GGAdwordsTypeSelectorErrorReason::valueIsValid($_reason)?$_reason:null);
	}
	/**
	 * Get reason
	 * @return GGAdwordsTypeSelectorErrorReason
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