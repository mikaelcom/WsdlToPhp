<?php
/**
 * Class file for EccVideoTypeRss
 * @date 03/07/2012
 */
/**
 * Class EccVideoTypeRss
 * @date 03/07/2012
 */
class EccVideoTypeRss extends EccVideoWsdlClass
{
	/**
	 * The channel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccVideoTypeArrayOfItem
	 */
	public $channel;
	/**
	 * Constructor
	 * @param EccVideoTypeArrayOfItem channel
	 * @return EccVideoTypeRss
	 */
	public function __construct($_channel = null)
	{
		parent::__construct(array('channel'=>new EccVideoTypeArrayOfItem($_channel)));
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
	 * @return EccVideoTypeArrayOfItem
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