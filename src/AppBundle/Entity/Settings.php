<?php
//src/Acme/DemoBundle/Entity/Settings.php

namespace AppBundle\Entity;

use ED\BlogBundle\Interfaces\Model\BlogSettingsInterface;
use ED\BlogBundle\Model\Entity\BlogSettings as BaseSettings;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="acme_demo_settings")
 * @ORM\Entity(repositoryClass="ED\BlogBundle\Model\Repository\BlogSettingsRepository")
 */
class Settings extends BaseSettings implements BlogSettingsInterface
{
}