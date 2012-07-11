<?php
/**
 * Class file for MaxMindTypeMinfraud_soap14Response
 * @date 08/07/2012
 */
/**
 * Class MaxMindTypeMinfraud_soap14Response
 * @date 08/07/2012
 */
class MaxMindTypeMinfraud_soap14Response extends MaxMindWsdlClass
{
	/**
	 * The minfraud_output
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var MaxMindTypeMINFRAUD
	 */
	public $minfraud_output;
	/**
	 * Constructor
	 * @param MaxMindTypeMINFRAUD minfraud_output
	 * @return MaxMindTypeMinfraud_soap14Response
	 */
	public function __construct($_minfraud_output = null)
	{
		parent::__construct(array('minfraud_output'=>$_minfraud_output));
	}
	/**
	 * Set minfraud_output
	 * @param MINFRAUD minfraud_output
	 * @return MINFRAUD
	 */
	public function setMinfraud_output($_minfraud_output)
	{
		return ($this->minfraud_output = $_minfraud_output);
	}
	/**
	 * Get minfraud_output
	 * @return MaxMindTypeMINFRAUD
	 */
	public function getMinfraud_output()
	{
		return $this->minfraud_output;
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