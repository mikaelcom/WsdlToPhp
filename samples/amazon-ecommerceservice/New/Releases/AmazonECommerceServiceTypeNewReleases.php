<?php
/**
 * Class file for AmazonECommerceServiceTypeNewReleases
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeNewReleases
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeNewReleases extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The NewRelease
	 * @var AmazonECommerceServiceTypeNewRelease
	 */
	public $NewRelease;
	/**
	 * Constructor
	 * @param AmazonECommerceServiceTypeNewRelease NewRelease
	 * @return AmazonECommerceServiceTypeNewReleases
	 */
	public function __construct($_NewRelease = null)
	{
		parent::__construct(array('NewRelease'=>$_NewRelease));
	}
	/**
	 * Set NewRelease
	 * @param NewRelease NewRelease
	 * @return NewRelease
	 */
	public function setNewRelease($_NewRelease)
	{
		return ($this->NewRelease = $_NewRelease);
	}
	/**
	 * Get NewRelease
	 * @return AmazonECommerceServiceTypeNewRelease
	 */
	public function getNewRelease()
	{
		return $this->NewRelease;
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