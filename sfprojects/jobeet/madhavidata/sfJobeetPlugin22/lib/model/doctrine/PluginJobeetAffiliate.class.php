<?php
abstract class PluginJobeetAffiliate extends BaseJobeetAffiliate
{
	public function save(Doctrine_Connection $conn = null)
	{
		if (!$this->getToken())
		{
			$this->setToken(sha1($object->getEmail().rand(11111, 99999)));
		}

		parent::save($conn);
	}

	// ...
}