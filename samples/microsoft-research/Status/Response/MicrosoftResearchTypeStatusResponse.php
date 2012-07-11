<?php
/**
 * Class file for MicrosoftResearchTypeStatusResponse
 * @date 05/07/2012
 */
/**
 * Class MicrosoftResearchTypeStatusResponse
 * @date 05/07/2012
 */
class MicrosoftResearchTypeStatusResponse extends MicrosoftResearchWsdlClass
{
	/**
	 * The StatusResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StatusResult;
	/**
	 * Constructor
	 * @param string StatusResult
	 * @return MicrosoftResearchTypeStatusResponse
	 */
	public function __construct($_StatusResult = null)
	{
		parent::__construct(array('StatusResult'=>$_StatusResult));
	}
	/**
	 * Set StatusResult
	 * @param string StatusResult
	 * @return string
	 */
	public function setStatusResult($_StatusResult)
	{
		return ($this->StatusResult = $_StatusResult);
	}
	/**
	 * Get StatusResult
	 * @return string
	 */
	public function getStatusResult()
	{
		return $this->StatusResult;
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