<?php
/**
 * Class file for MicrosoftSmDhTypeIsDataYoungerThanResponse
 * @date 05/07/2012
 */
/**
 * Class MicrosoftSmDhTypeIsDataYoungerThanResponse
 * @date 05/07/2012
 */
class MicrosoftSmDhTypeIsDataYoungerThanResponse extends MicrosoftSmDhWsdlClass
{
	/**
	 * The IsDataYoungerThanResult
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $IsDataYoungerThanResult;
	/**
	 * Constructor
	 * @param boolean IsDataYoungerThanResult
	 * @return MicrosoftSmDhTypeIsDataYoungerThanResponse
	 */
	public function __construct($_IsDataYoungerThanResult)
	{
		parent::__construct(array('IsDataYoungerThanResult'=>$_IsDataYoungerThanResult));
	}
	/**
	 * Set IsDataYoungerThanResult
	 * @param boolean IsDataYoungerThanResult
	 * @return boolean
	 */
	public function setIsDataYoungerThanResult($_IsDataYoungerThanResult)
	{
		return ($this->IsDataYoungerThanResult = $_IsDataYoungerThanResult);
	}
	/**
	 * Get IsDataYoungerThanResult
	 * @return boolean
	 */
	public function getIsDataYoungerThanResult()
	{
		return $this->IsDataYoungerThanResult;
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