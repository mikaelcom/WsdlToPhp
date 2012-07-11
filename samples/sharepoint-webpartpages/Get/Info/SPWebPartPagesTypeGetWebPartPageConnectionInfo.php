<?php
/**
 * Class file for SPWebPartPagesTypeGetWebPartPageConnectionInfo
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeGetWebPartPageConnectionInfo
 * @date 06/07/2012
 */
class SPWebPartPagesTypeGetWebPartPageConnectionInfo extends SPWebPartPagesWsdlClass
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
	 * @param string providerPartID
	 * @param string lcid
	 * @return SPWebPartPagesTypeGetWebPartPageConnectionInfo
	 */
	public function __construct($_sourcePageUrl = null,$_sourcePageContents = null,$_providerPartID = null,$_lcid = null)
	{
		parent::__construct(array('sourcePageUrl'=>$_sourcePageUrl,'sourcePageContents'=>$_sourcePageContents,'providerPartID'=>$_providerPartID,'lcid'=>$_lcid));
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