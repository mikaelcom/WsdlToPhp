<?php
/**
 * Class file for XiTranscriptsTypeGetLatestTranscriptResponse
 * @date 08/07/2012
 */
/**
 * Class XiTranscriptsTypeGetLatestTranscriptResponse
 * @date 08/07/2012
 */
class XiTranscriptsTypeGetLatestTranscriptResponse extends XiTranscriptsWsdlClass
{
	/**
	 * The GetLatestTranscriptResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiTranscriptsTypeTranscript
	 */
	public $GetLatestTranscriptResult;
	/**
	 * Constructor
	 * @param XiTranscriptsTypeTranscript GetLatestTranscriptResult
	 * @return XiTranscriptsTypeGetLatestTranscriptResponse
	 */
	public function __construct($_GetLatestTranscriptResult = null)
	{
		parent::__construct(array('GetLatestTranscriptResult'=>$_GetLatestTranscriptResult));
	}
	/**
	 * Set GetLatestTranscriptResult
	 * @param Transcript GetLatestTranscriptResult
	 * @return Transcript
	 */
	public function setGetLatestTranscriptResult($_GetLatestTranscriptResult)
	{
		return ($this->GetLatestTranscriptResult = $_GetLatestTranscriptResult);
	}
	/**
	 * Get GetLatestTranscriptResult
	 * @return XiTranscriptsTypeTranscript
	 */
	public function getGetLatestTranscriptResult()
	{
		return $this->GetLatestTranscriptResult;
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