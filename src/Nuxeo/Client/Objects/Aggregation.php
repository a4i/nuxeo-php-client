<?php

namespace Nuxeo\Client\Objects;

use JMS\Serializer\Annotation as Serializer;
use Nuxeo\Client\Constants;
use Nuxeo\Client\NuxeoClient;
use Nuxeo\Client\Spi\ClassCastException;
use Nuxeo\Client\Spi\NuxeoClientException;
use Nuxeo\Client\Spi\Objects\NuxeoEntity;

class Aggregation extends NuxeoEntity {

  /**
   * @var string
   * @Serializer\Type("string")
   */
  private $field;

  /**
   * @var string
   * @Serializer\Type("string")
   */
  private $type;

  /**
   * @var string
   * @Serializer\Type("string")
   */
  private $id;


  /**
   * @var mixed[]
   * @Serializer\Type("array")
   */
  private $buckets;

  /**
   * Document constructor.
   * @param NuxeoClient $nuxeoClient
   */
  public function __construct($nuxeoClient = null) {
    parent::__construct(Constants::ENTITY_TYPE_AGGREGATION, $nuxeoClient);
  }

  /**
   * @param NuxeoClient $nuxeoClient
   * @return self
   */
  public static function create($nuxeoClient = null) {
    return new self($nuxeoClient);
  }

  /**
   * @return string
   */
  public function getField() {
    return $this->field;
  }

  /**
   * @param string field
   * @return self
   */
  public function setField($field) {
    $this->field = $field;
    return $this;
  }

  /**
   * @return string
   */
  public function getType() {
    return $this->type;
  }

  /**
   * @param string $type
   * @return self
   */
  public function setType($type) {
    $this->type = $type;
    return $this;
  }

  /**
   * @return string
   */
  public function getId() {
    return $this->id;
  }

  /**
   * @param string id
   * @return self
   */
  public function setId($id) {
    $this->id = $id;
    return $this;
  }

  /**
   * @return mixed[]
   */
  public function getBuckets() {
    return $this->buckets;
  }

  /**
   * @param mixed[] $buckets
   * @return self
   */
  public function setBuckets($buckets) {
    $this->buckets = $buckets;
    return $this;
  }

}
