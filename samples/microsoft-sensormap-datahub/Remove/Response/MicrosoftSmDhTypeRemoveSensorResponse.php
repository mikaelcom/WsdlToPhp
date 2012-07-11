<?php
/**
 * Class file for MicrosoftSmDhTypeRemoveSensorResponse
 * @date 05/07/2012
 */
/**
 * Class MicrosoftSmDhTypeRemoveSensorResponse
 * @date 05/07/2012
 */
class MicrosoftSmDhTypeRemoveSensorResponse extends MicrosoftSmDhWsdlClass
{
	/**
	 * The RemoveSensorResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $RemoveSensorResult;
	/**
	 * Constructor
	 * @param string RemoveSensorResult
	 * @return MicrosoftSmDhTypeRemoveSensorResponse
	 */
	public function __construct($_RemoveSensorResult = null)
	{
		parent::__construct(array('RemoveSensorResult'=>$_RemoveSensorResult));
	}
	/**
	 * Set RemoveSensorResult
	 * @param string RemoveSensorResult
	 * @return string
	 */
	public function setRemoveSensorResult($_RemoveSensorResult)
	{
		return ($this->RemoveSensorResult = $_RemoveSensorResult);
	}
	/**
	 * Get RemoveSensorResult
	 * @return string
	 */
	public function getRemoveSensorResult()
	{
		return $this->RemoveSensorResult;
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