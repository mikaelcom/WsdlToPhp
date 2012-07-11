<?php
/**
 * Class file for YMailTypeBatchParameter
 * @date 02/07/2012
 */
/**
 * Class YMailTypeBatchParameter
 * @date 02/07/2012
 */
class YMailTypeBatchParameter extends YMailWsdlClass
{
	/**
	 * The source
	 * Meta informations :
	 * 	- use : required
	 * @var string
	 */
	public $source;
	/**
	 * The destination
	 * Meta informations :
	 * 	- use : required
	 * @var string
	 */
	public $destination;
	/**
	 * Constructor
	 * @param string source
	 * @param string destination
	 * @return YMailTypeBatchParameter
	 */
	public function __construct($_source = null,$_destination = null)
	{
		parent::__construct(array('source'=>$_source,'destination'=>$_destination));
	}
	/**
	 * Set source
	 * @param string source
	 * @return string
	 */
	public function setSource($_source)
	{
		return ($this->source = $_source);
	}
	/**
	 * Get source
	 * @return string
	 */
	public function getSource()
	{
		return $this->source;
	}
	/**
	 * Set destination
	 * @param string destination
	 * @return string
	 */
	public function setDestination($_destination)
	{
		return ($this->destination = $_destination);
	}
	/**
	 * Get destination
	 * @return string
	 */
	public function getDestination()
	{
		return $this->destination;
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