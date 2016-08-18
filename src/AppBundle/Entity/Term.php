<?php
//src/Acme/DemoBundle/Entity/Term.php

namespace AppBundle\Entity;

use ED\BlogBundle\Interfaces\Model\BlogTermInterface;
use ED\BlogBundle\Model\Entity\Term as BaseTerm;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="acme_demo_term")
 * @ORM\Entity()
 * @UniqueEntity("slug")
 */
class Term extends BaseTerm implements BlogTermInterface
{
}