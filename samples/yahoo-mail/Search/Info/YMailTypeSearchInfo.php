<?php
/**
 * Class file for YMailTypeSearchInfo
 * @date 02/07/2012
 */
/**
 * Class YMailTypeSearchInfo
 * @date 02/07/2012
 */
class YMailTypeSearchInfo extends YMailWsdlClass
{
	/**
	 * The snippets
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $snippets;
	/**
	 * The matchedFields
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $matchedFields;
	/**
	 * The attachments
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var YMailTypeSearchAttachmentInfo
	 */
	public $attachments;
	/**
	 * Constructor
	 * @param string snippets
	 * @param string matchedFields
	 * @param YMailTypeSearchAttachmentInfo attachments
	 * @return YMailTypeSearchInfo
	 */
	public function __construct($_snippets = null,$_matchedFields = null,$_attachments = null)
	{
		parent::__construct(array('snippets'=>$_snippets,'matchedFields'=>$_matchedFields,'attachments'=>$_attachments));
	}
	/**
	 * Set snippets
	 * @param string snippets
	 * @return string
	 */
	public function setSnippets($_snippets)
	{
		return ($this->snippets = $_snippets);
	}
	/**
	 * Get snippets
	 * @return string
	 */
	public function getSnippets()
	{
		return $this->snippets;
	}
	/**
	 * Set matchedFields
	 * @param string matchedFields
	 * @return string
	 */
	public function setMatchedFields($_matchedFields)
	{
		return ($this->matchedFields = $_matchedFields);
	}
	/**
	 * Get matchedFields
	 * @return string
	 */
	public function getMatchedFields()
	{
		return $this->matchedFields;
	}
	/**
	 * Set attachments
	 * @param SearchAttachmentInfo attachments
	 * @return SearchAttachmentInfo
	 */
	public function setAttachments($_attachments)
	{
		return ($this->attachments = $_attachments);
	}
	/**
	 * Get attachments
	 * @return YMailTypeSearchAttachmentInfo
	 */
	public function getAttachments()
	{
		return $this->attachments;
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