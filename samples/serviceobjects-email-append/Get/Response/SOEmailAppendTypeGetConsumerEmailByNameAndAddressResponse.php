<?php
/**
 * Class file for SOEmailAppendTypeGetConsumerEmailByNameAndAddressResponse
 * @date 08/07/2012
 */
/**
 * Class SOEmailAppendTypeGetConsumerEmailByNameAndAddressResponse
 * @date 08/07/2012
 */
class SOEmailAppendTypeGetConsumerEmailByNameAndAddressResponse extends SOEmailAppendWsdlClass
{
	/**
	 * The GetConsumerEmailByNameAndAddressResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOEmailAppendTypeArrayOfEAInfoResult
	 */
	public $GetConsumerEmailByNameAndAddressResult;
	/**
	 * Constructor
	 * @param SOEmailAppendTypeArrayOfEAInfoResult GetConsumerEmailByNameAndAddressResult
	 * @return SOEmailAppendTypeGetConsumerEmailByNameAndAddressResponse
	 */
	public function __construct($_GetConsumerEmailByNameAndAddressResult = null)
	{
		parent::__construct(array('GetConsumerEmailByNameAndAddressResult'=>new SOEmailAppendTypeArrayOfEAInfoResult($_GetConsumerEmailByNameAndAddressResult)));
	}
	/**
	 * Set GetConsumerEmailByNameAndAddressResult
	 * @param ArrayOfEAInfoResult GetConsumerEmailByNameAndAddressResult
	 * @return ArrayOfEAInfoResult
	 */
	public function setGetConsumerEmailByNameAndAddressResult($_GetConsumerEmailByNameAndAddressResult)
	{
		return ($this->GetConsumerEmailByNameAndAddressResult = $_GetConsumerEmailByNameAndAddressResult);
	}
	/**
	 * Get GetConsumerEmailByNameAndAddressResult
	 * @return SOEmailAppendTypeArrayOfEAInfoResult
	 */
	public function getGetConsumerEmailByNameAndAddressResult()
	{
		return $this->GetConsumerEmailByNameAndAddressResult;
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