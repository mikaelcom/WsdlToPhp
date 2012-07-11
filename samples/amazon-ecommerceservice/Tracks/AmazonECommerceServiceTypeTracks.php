<?php
/**
 * Class file for AmazonECommerceServiceTypeTracks
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeTracks
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeTracks extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The Disc
	 * @var AmazonECommerceServiceTypeDisc
	 */
	public $Disc;
	/**
	 * Constructor
	 * @param AmazonECommerceServiceTypeDisc Disc
	 * @return AmazonECommerceServiceTypeTracks
	 */
	public function __construct($_Disc = null)
	{
		parent::__construct(array('Disc'=>$_Disc));
	}
	/**
	 * Set Disc
	 * @param Disc Disc
	 * @return Disc
	 */
	public function setDisc($_Disc)
	{
		return ($this->Disc = $_Disc);
	}
	/**
	 * Get Disc
	 * @return AmazonECommerceServiceTypeDisc
	 */
	public function getDisc()
	{
		return $this->Disc;
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