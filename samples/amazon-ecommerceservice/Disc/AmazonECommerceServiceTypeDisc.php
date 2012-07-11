<?php
/**
 * Class file for AmazonECommerceServiceTypeDisc
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeDisc
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeDisc extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The Track
	 * @var AmazonECommerceServiceTypeTrack
	 */
	public $Track;
	/**
	 * The Number
	 * Meta informations :
	 * 	- use : required
	 * @var positiveInteger
	 */
	public $Number;
	/**
	 * Constructor
	 * @param AmazonECommerceServiceTypeTrack Track
	 * @param positiveInteger Number
	 * @return AmazonECommerceServiceTypeDisc
	 */
	public function __construct($_Track = null,$_Number = null)
	{
		parent::__construct(array('Track'=>$_Track,'Number'=>$_Number));
	}
	/**
	 * Set Track
	 * @param Track Track
	 * @return Track
	 */
	public function setTrack($_Track)
	{
		return ($this->Track = $_Track);
	}
	/**
	 * Get Track
	 * @return AmazonECommerceServiceTypeTrack
	 */
	public function getTrack()
	{
		return $this->Track;
	}
	/**
	 * Set Number
	 * @param positiveInteger Number
	 * @return positiveInteger
	 */
	public function setNumber($_Number)
	{
		return ($this->Number = $_Number);
	}
	/**
	 * Get Number
	 * @return positiveInteger
	 */
	public function getNumber()
	{
		return $this->Number;
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