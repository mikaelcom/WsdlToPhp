<?php
/**
 * Class file for SOEmailAppendTypeGetConsumerEmailByNameAndPostalCodeUSResponse
 * @date 08/07/2012
 */
/**
 * Class SOEmailAppendTypeGetConsumerEmailByNameAndPostalCodeUSResponse
 * @date 08/07/2012
 */
class SOEmailAppendTypeGetConsumerEmailByNameAndPostalCodeUSResponse extends SOEmailAppendWsdlClass
{
	/**
	 * The GetConsumerEmailByNameAndPostalCodeUSResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOEmailAppendTypeArrayOfEAInfoResult
	 */
	public $GetConsumerEmailByNameAndPostalCodeUSResult;
	/**
	 * Constructor
	 * @param SOEmailAppendTypeArrayOfEAInfoResult GetConsumerEmailByNameAndPostalCodeUSResult
	 * @return SOEmailAppendTypeGetConsumerEmailByNameAndPostalCodeUSResponse
	 */
	public function __construct($_GetConsumerEmailByNameAndPostalCodeUSResult = null)
	{
		parent::__construct(array('GetConsumerEmailByNameAndPostalCodeUSResult'=>new SOEmailAppendTypeArrayOfEAInfoResult($_GetConsumerEmailByNameAndPostalCodeUSResult)));
	}
	/**
	 * Set GetConsumerEmailByNameAndPostalCodeUSResult
	 * @param ArrayOfEAInfoResult GetConsumerEmailByNameAndPostalCodeUSResult
	 * @return ArrayOfEAInfoResult
	 */
	public function setGetConsumerEmailByNameAndPostalCodeUSResult($_GetConsumerEmailByNameAndPostalCodeUSResult)
	{
		return ($this->GetConsumerEmailByNameAndPostalCodeUSResult = $_GetConsumerEmailByNameAndPostalCodeUSResult);
	}
	/**
	 * Get GetConsumerEmailByNameAndPostalCodeUSResult
	 * @return SOEmailAppendTypeArrayOfEAInfoResult
	 */
	public function getGetConsumerEmailByNameAndPostalCodeUSResult()
	{
		return $this->GetConsumerEmailByNameAndPostalCodeUSResult;
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