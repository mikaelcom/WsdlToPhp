<?php
/**
 * Class file for XiTranscriptsTypeGetPermittedContentResponse
 * @date 08/07/2012
 */
/**
 * Class XiTranscriptsTypeGetPermittedContentResponse
 * @date 08/07/2012
 */
class XiTranscriptsTypeGetPermittedContentResponse extends XiTranscriptsWsdlClass
{
	/**
	 * The GetPermittedContentResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiTranscriptsTypeTranscriptContent
	 */
	public $GetPermittedContentResult;
	/**
	 * Constructor
	 * @param XiTranscriptsTypeTranscriptContent GetPermittedContentResult
	 * @return XiTranscriptsTypeGetPermittedContentResponse
	 */
	public function __construct($_GetPermittedContentResult = null)
	{
		parent::__construct(array('GetPermittedContentResult'=>$_GetPermittedContentResult));
	}
	/**
	 * Set GetPermittedContentResult
	 * @param TranscriptContent GetPermittedContentResult
	 * @return TranscriptContent
	 */
	public function setGetPermittedContentResult($_GetPermittedContentResult)
	{
		return ($this->GetPermittedContentResult = $_GetPermittedContentResult);
	}
	/**
	 * Get GetPermittedContentResult
	 * @return XiTranscriptsTypeTranscriptContent
	 */
	public function getGetPermittedContentResult()
	{
		return $this->GetPermittedContentResult;
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