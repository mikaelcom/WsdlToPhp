<?php
/**
 * Class file for MicrosoftSmDhTypeGenerateLogMessageResponse
 * @date 05/07/2012
 */
/**
 * Class MicrosoftSmDhTypeGenerateLogMessageResponse
 * @date 05/07/2012
 */
class MicrosoftSmDhTypeGenerateLogMessageResponse extends MicrosoftSmDhWsdlClass
{
	/**
	 * The GenerateLogMessageResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $GenerateLogMessageResult;
	/**
	 * Constructor
	 * @param string GenerateLogMessageResult
	 * @return MicrosoftSmDhTypeGenerateLogMessageResponse
	 */
	public function __construct($_GenerateLogMessageResult = null)
	{
		parent::__construct(array('GenerateLogMessageResult'=>$_GenerateLogMessageResult));
	}
	/**
	 * Set GenerateLogMessageResult
	 * @param string GenerateLogMessageResult
	 * @return string
	 */
	public function setGenerateLogMessageResult($_GenerateLogMessageResult)
	{
		return ($this->GenerateLogMessageResult = $_GenerateLogMessageResult);
	}
	/**
	 * Get GenerateLogMessageResult
	 * @return string
	 */
	public function getGenerateLogMessageResult()
	{
		return $this->GenerateLogMessageResult;
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