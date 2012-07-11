<?php
/**
 * Class file for EccRssNewsTypeRss
 * @date 03/07/2012
 */
/**
 * Class EccRssNewsTypeRss
 * @date 03/07/2012
 */
class EccRssNewsTypeRss extends EccRssNewsWsdlClass
{
	/**
	 * The channel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccRssNewsTypeArrayOfItem
	 */
	public $channel;
	/**
	 * Constructor
	 * @param EccRssNewsTypeArrayOfItem channel
	 * @return EccRssNewsTypeRss
	 */
	public function __construct($_channel = null)
	{
		parent::__construct(array('channel'=>new EccRssNewsTypeArrayOfItem($_channel)));
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
	 * @return EccRssNewsTypeArrayOfItem
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