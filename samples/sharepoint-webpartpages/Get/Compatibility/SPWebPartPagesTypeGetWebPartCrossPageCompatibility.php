<?php
/**
 * Class file for SPWebPartPagesTypeGetWebPartCrossPageCompatibility
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeGetWebPartCrossPageCompatibility
 * @date 06/07/2012
 */
class SPWebPartPagesTypeGetWebPartCrossPageCompatibility extends SPWebPartPagesWsdlClass
{
	/**
	 * The sourcePageUrl
	 * @var string
	 */
	public $sourcePageUrl;
	/**
	 * The sourcePageContents
	 * @var string
	 */
	public $sourcePageContents;
	/**
	 * The targetPageUrl
	 * @var string
	 */
	public $targetPageUrl;
	/**
	 * The targetPageContents
	 * @var string
	 */
	public $targetPageContents;
	/**
	 * The providerPartID
	 * @var string
	 */
	public $providerPartID;
	/**
	 * The lcid
	 * @var string
	 */
	public $lcid;
	/**
	 * Constructor
	 * @param string sourcePageUrl
	 * @param string sourcePageContents
	 * @param string targetPageUrl
	 * @param string targetPageContents
	 * @param string providerPartID
	 * @param string lcid
	 * @return SPWebPartPagesTypeGetWebPartCrossPageCompatibility
	 */
	public function __construct($_sourcePageUrl = null,$_sourcePageContents = null,$_targetPageUrl = null,$_targetPageContents = null,$_providerPartID = null,$_lcid = null)
	{
		parent::__construct(array('sourcePageUrl'=>$_sourcePageUrl,'sourcePageContents'=>$_sourcePageContents,'targetPageUrl'=>$_targetPageUrl,'targetPageContents'=>$_targetPageContents,'providerPartID'=>$_providerPartID,'lcid'=>$_lcid));
	}
	/**
	 * Set sourcePageUrl
	 * @param string sourcePageUrl
	 * @return string
	 */
	public function setSourcePageUrl($_sourcePageUrl)
	{
		return ($this->sourcePageUrl = $_sourcePageUrl);
	}
	/**
	 * Get sourcePageUrl
	 * @return string
	 */
	public function getSourcePageUrl()
	{
		return $this->sourcePageUrl;
	}
	/**
	 * Set sourcePageContents
	 * @param string sourcePageContents
	 * @return string
	 */
	public function setSourcePageContents($_sourcePageContents)
	{
		return ($this->sourcePageContents = $_sourcePageContents);
	}
	/**
	 * Get sourcePageContents
	 * @return string
	 */
	public function getSourcePageContents()
	{
		return $this->sourcePageContents;
	}
	/**
	 * Set targetPageUrl
	 * @param string targetPageUrl
	 * @return string
	 */
	public function setTargetPageUrl($_targetPageUrl)
	{
		return ($this->targetPageUrl = $_targetPageUrl);
	}
	/**
	 * Get targetPageUrl
	 * @return string
	 */
	public function getTargetPageUrl()
	{
		return $this->targetPageUrl;
	}
	/**
	 * Set targetPageContents
	 * @param string targetPageContents
	 * @return string
	 */
	public function setTargetPageContents($_targetPageContents)
	{
		return ($this->targetPageContents = $_targetPageContents);
	}
	/**
	 * Get targetPageContents
	 * @return string
	 */
	public function getTargetPageContents()
	{
		return $this->targetPageContents;
	}
	/**
	 * Set providerPartID
	 * @param string providerPartID
	 * @return string
	 */
	public function setProviderPartID($_providerPartID)
	{
		return ($this->providerPartID = $_providerPartID);
	}
	/**
	 * Get providerPartID
	 * @return string
	 */
	public function getProviderPartID()
	{
		return $this->providerPartID;
	}
	/**
	 * Set lcid
	 * @param string lcid
	 * @return string
	 */
	public function setLcid($_lcid)
	{
		return ($this->lcid = $_lcid);
	}
	/**
	 * Get lcid
	 * @return string
	 */
	public function getLcid()
	{
		return $this->lcid;
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