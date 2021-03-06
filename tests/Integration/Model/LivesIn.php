<?php

namespace GraphAware\Neo4j\OGM\Tests\Integration\Model;

use GraphAware\Neo4j\OGM\Annotations as OGM;

/**
 * Class LivesIn
 * @package GraphAware\Neo4j\OGM\Tests\Integration\Model
 *
 * @OGM\RelationshipEntity(type="LIVES_IN")
 */
class LivesIn
{
    /**
     * @OGM\GraphId()
     */
    protected $id;

    /**
     * @OGM\StartNode(targetEntity="User")
     */
    protected $user;

    /**
     * @OGM\EndNode(targetEntity="City")
     */
    protected $city;

    /**
     * @OGM\Property(type="int")
     */
    protected $since;

    public function __construct(User $user, City $city, $since)
    {
        $this->user = $user;
        $this->city = $city;
        $this->since = $since;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return mixed
     */
    public function getSince()
    {
        return $this->since;
    }


}