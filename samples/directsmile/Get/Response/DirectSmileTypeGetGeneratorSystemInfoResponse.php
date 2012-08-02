<?php
/**
 * Class file for DirectSmileTypeGetGeneratorSystemInfoResponse
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeGetGeneratorSystemInfoResponse
 * @date 02/08/2012
 */
class DirectSmileTypeGetGeneratorSystemInfoResponse extends DirectSmileWsdlClass
{
	/**
	 * The GetGeneratorSystemInfoResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $GetGeneratorSystemInfoResult;
	/**
	 * Constructor
	 * @param string GetGeneratorSystemInfoResult
	 * @return DirectSmileTypeGetGeneratorSystemInfoResponse
	 */
	public function __construct($_GetGeneratorSystemInfoResult = null)
	{
		parent::__construct(array('GetGeneratorSystemInfoResult'=>$_GetGeneratorSystemInfoResult));
	}
	/**
	 * Set GetGeneratorSystemInfoResult
	 * @param string GetGeneratorSystemInfoResult
	 * @return string
	 */
	public function setGetGeneratorSystemInfoResult($_GetGeneratorSystemInfoResult)
	{
		return ($this->GetGeneratorSystemInfoResult = $_GetGeneratorSystemInfoResult);
	}
	/**
	 * Get GetGeneratorSystemInfoResult
	 * @return string
	 */
	public function getGetGeneratorSystemInfoResult()
	{
		return $this->GetGeneratorSystemInfoResult;
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