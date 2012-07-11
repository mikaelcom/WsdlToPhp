<?php
/**
 * Class file for AmazonECommerceServiceTypeTrack
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeTrack
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeTrack extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The _
	 * @var string
	 */
	public $_;
	/**
	 * The Number
	 * Meta informations :
	 * 	- use : required
	 * @var positiveInteger
	 */
	public $Number;
	/**
	 * Constructor
	 * @param string _
	 * @param positiveInteger Number
	 * @return AmazonECommerceServiceTypeTrack
	 */
	public function __construct($__ = null,$_Number = null)
	{
		parent::__construct(array('_'=>$__,'Number'=>$_Number));
	}
	/**
	 * Set _
	 * @param string _
	 * @return string
	 */
	public function set_($__)
	{
		return ($this->_ = $__);
	}
	/**
	 * Get _
	 * @return string
	 */
	public function get_()
	{
		return $this->_;
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