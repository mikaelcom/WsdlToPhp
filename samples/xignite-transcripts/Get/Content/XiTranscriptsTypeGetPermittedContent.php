<?php
/**
 * Class file for XiTranscriptsTypeGetPermittedContent
 * @date 08/07/2012
 */
/**
 * Class XiTranscriptsTypeGetPermittedContent
 * @date 08/07/2012
 */
class XiTranscriptsTypeGetPermittedContent extends XiTranscriptsWsdlClass
{
	/**
	 * The TranscriptURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TranscriptURL;
	/**
	 * Constructor
	 * @param string TranscriptURL
	 * @return XiTranscriptsTypeGetPermittedContent
	 */
	public function __construct($_TranscriptURL = null)
	{
		parent::__construct(array('TranscriptURL'=>$_TranscriptURL));
	}
	/**
	 * Set TranscriptURL
	 * @param string TranscriptURL
	 * @return string
	 */
	public function setTranscriptURL($_TranscriptURL)
	{
		return ($this->TranscriptURL = $_TranscriptURL);
	}
	/**
	 * Get TranscriptURL
	 * @return string
	 */
	public function getTranscriptURL()
	{
		return $this->TranscriptURL;
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