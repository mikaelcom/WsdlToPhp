<?php
/**
 * Class file for EccVideoAolTypeRss
 * @date 03/07/2012
 */
/**
 * Class EccVideoAolTypeRss
 * @date 03/07/2012
 */
class EccVideoAolTypeRss extends EccVideoAolWsdlClass
{
	/**
	 * The channel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccVideoAolTypeArrayOfItem
	 */
	public $channel;
	/**
	 * Constructor
	 * @param EccVideoAolTypeArrayOfItem channel
	 * @return EccVideoAolTypeRss
	 */
	public function __construct($_channel = null)
	{
		parent::__construct(array('channel'=>new EccVideoAolTypeArrayOfItem($_channel)));
	}
	/**
	 * Set channel
	 * @param ArrayOfItem channel
	 * @return ArrayOfItem
	 */
	public function setChannel($_channel)
	{
		return ($this->channel = $_channel);
	}
	/**
	 * Get channel
	 * @return EccVideoAolTypeArrayOfItem
	 */
	public function getChannel()
	{
		return $this->channel;
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