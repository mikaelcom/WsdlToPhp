<?php
/**
 * Class file for AmazonECommerceServiceTypeArguments
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeArguments
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeArguments extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The Argument
	 * @var AmazonECommerceServiceTypeArgument
	 */
	public $Argument;
	/**
	 * Constructor
	 * @param AmazonECommerceServiceTypeArgument Argument
	 * @return AmazonECommerceServiceTypeArguments
	 */
	public function __construct($_Argument = null)
	{
		parent::__construct(array('Argument'=>$_Argument));
	}
	/**
	 * Set Argument
	 * @param Argument Argument
	 * @return Argument
	 */
	public function setArgument($_Argument)
	{
		return ($this->Argument = $_Argument);
	}
	/**
	 * Get Argument
	 * @return AmazonECommerceServiceTypeArgument
	 */
	public function getArgument()
	{
		return $this->Argument;
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