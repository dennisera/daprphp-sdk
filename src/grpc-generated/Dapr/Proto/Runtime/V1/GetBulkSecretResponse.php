<?php

/**
 * This file is automatically generated by `composer build-grpc`
 */

namespace Dapr\Proto\Runtime\V1;

/**
 * GetBulkSecretResponse is the response message to convey the requested secrets.
 *
 * Generated from protobuf message <code>dapr.proto.runtime.v1.GetBulkSecretResponse</code>
 */
class GetBulkSecretResponse extends \Google\Protobuf\Internal\Message
{
	/**
	 * data hold the secret values. Some secret store, such as kubernetes secret
	 * store, can save multiple secrets for single secret key.
	 *
	 * Generated from protobuf field <code>map<string, .dapr.proto.runtime.v1.SecretResponse> data = 1;</code>
	 */
	private $data;


	/**
	 * Constructor.
	 *
	 * @param array $data {
	 *     Optional. Data for populating the Message object.
	 *
	 *     @type array|\Google\Protobuf\Internal\MapField $data
	 *           data hold the secret values. Some secret store, such as kubernetes secret
	 *           store, can save multiple secrets for single secret key.
	 * }
	 */
	public function __construct(array|null $data = null)
	{
		\GPBMetadata\Dapr\Proto\Runtime\V1\Dapr::initOnce();
		parent::__construct($data);
	}


	/**
	 * data hold the secret values. Some secret store, such as kubernetes secret
	 * store, can save multiple secrets for single secret key.
	 *
	 * Generated from protobuf field <code>map<string, .dapr.proto.runtime.v1.SecretResponse> data = 1;</code>
	 * @return \Google\Protobuf\Internal\MapField
	 */
	public function getData(): \Google\Protobuf\Internal\MapField
	{
		return $this->data;
	}


	/**
	 * data hold the secret values. Some secret store, such as kubernetes secret
	 * store, can save multiple secrets for single secret key.
	 *
	 * Generated from protobuf field <code>map<string, .dapr.proto.runtime.v1.SecretResponse> data = 1;</code>
	 * @param array|\Google\Protobuf\Internal\MapField $var
	 * @return $this
	 */
	public function setData(array|\Google\Protobuf\Internal\MapField $var): GetBulkSecretResponse
	{
		$arr = \Google\Protobuf\Internal\GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Dapr\Proto\Runtime\V1\SecretResponse::class);
		$this->data = $arr;

		return $this;
	}
}