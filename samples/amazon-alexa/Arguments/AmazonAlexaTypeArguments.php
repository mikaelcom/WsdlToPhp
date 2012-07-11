<?php
/**
 * Class file for AmazonAlexaTypeArguments
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeArguments
 * @date 10/07/2012
 */
class AmazonAlexaTypeArguments extends AmazonAlexaWsdlClass
{
	/**
	 * The Argument
	 * @var AmazonAlexaTypeArgument
	 */
	public $Argument;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeArgument Argument
	 * @return AmazonAlexaTypeArguments
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
	 * @return AmazonAlexaTypeArgument
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