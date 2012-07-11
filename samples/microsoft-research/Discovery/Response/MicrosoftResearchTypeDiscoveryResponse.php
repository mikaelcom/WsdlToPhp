<?php
/**
 * Class file for MicrosoftResearchTypeDiscoveryResponse
 * @date 05/07/2012
 */
/**
 * Class MicrosoftResearchTypeDiscoveryResponse
 * @date 05/07/2012
 */
class MicrosoftResearchTypeDiscoveryResponse extends MicrosoftResearchWsdlClass
{
	/**
	 * The DiscoveryResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DiscoveryResult;
	/**
	 * Constructor
	 * @param string DiscoveryResult
	 * @return MicrosoftResearchTypeDiscoveryResponse
	 */
	public function __construct($_DiscoveryResult = null)
	{
		parent::__construct(array('DiscoveryResult'=>$_DiscoveryResult));
	}
	/**
	 * Set DiscoveryResult
	 * @param string DiscoveryResult
	 * @return string
	 */
	public function setDiscoveryResult($_DiscoveryResult)
	{
		return ($this->DiscoveryResult = $_DiscoveryResult);
	}
	/**
	 * Get DiscoveryResult
	 * @return string
	 */
	public function getDiscoveryResult()
	{
		return $this->DiscoveryResult;
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