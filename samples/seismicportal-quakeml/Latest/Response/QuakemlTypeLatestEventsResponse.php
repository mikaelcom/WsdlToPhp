<?php
/**
 * Class file for QuakemlTypeLatestEventsResponse
 * @date 10/07/2012
 */
/**
 * Class QuakemlTypeLatestEventsResponse
 * @date 10/07/2012
 */
class QuakemlTypeLatestEventsResponse extends QuakemlWsdlClass
{
	/**
	 * The quakeml
	 * @var anyType
	 */
	public $quakeml;
	/**
	 * The error
	 * @var anyType
	 */
	public $error;
	/**
	 * Constructor
	 * @param anyType quakeml
	 * @param anyType error
	 * @return QuakemlTypeLatestEventsResponse
	 */
	public function __construct($_quakeml = null,$_error = null)
	{
		parent::__construct(array('quakeml'=>$_quakeml,'error'=>$_error));
	}
	/**
	 * Set quakeml
	 * @param anyType quakeml
	 * @return anyType
	 */
	public function setQuakeml($_quakeml)
	{
		return ($this->quakeml = $_quakeml);
	}
	/**
	 * Get quakeml
	 * @return anyType
	 */
	public function getQuakeml()
	{
		return $this->quakeml;
	}
	/**
	 * Set error
	 * @param anyType error
	 * @return anyType
	 */
	public function setError($_error)
	{
		return ($this->error = $_error);
	}
	/**
	 * Get error
	 * @return anyType
	 */
	public function getError()
	{
		return $this->error;
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