<?php

/**
 * This file is automatically generated by `composer build-grpc`
 */

namespace Dapr\Client\Interfaces\V1;

/**
 * Dapr service provides APIs to user application to access Dapr building blocks.
 */
interface DaprClientInterface
{
	/**
	 * Invokes a method on a remote Dapr app.
	 * @param \Dapr\Proto\Runtime\V1\InvokeServiceRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 * @return \Grpc\UnaryCall
	 */
	public function InvokeService(
		\Dapr\Proto\Runtime\V1\InvokeServiceRequest $argument,
		array $metadata = [],
		array $options = []
	): \Grpc\UnaryCall;


	/**
	 * Gets the state for a specific key.
	 * @param \Dapr\Proto\Runtime\V1\GetStateRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 * @return \Grpc\UnaryCall
	 */
	public function GetState(
		\Dapr\Proto\Runtime\V1\GetStateRequest $argument,
		array $metadata = [],
		array $options = []
	): \Grpc\UnaryCall;


	/**
	 * Gets a bulk of state items for a list of keys
	 * @param \Dapr\Proto\Runtime\V1\GetBulkStateRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 * @return \Grpc\UnaryCall
	 */
	public function GetBulkState(
		\Dapr\Proto\Runtime\V1\GetBulkStateRequest $argument,
		array $metadata = [],
		array $options = []
	): \Grpc\UnaryCall;


	/**
	 * Saves the state for a specific key.
	 * @param \Dapr\Proto\Runtime\V1\SaveStateRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 * @return \Grpc\UnaryCall
	 */
	public function SaveState(
		\Dapr\Proto\Runtime\V1\SaveStateRequest $argument,
		array $metadata = [],
		array $options = []
	): \Grpc\UnaryCall;


	/**
	 * Deletes the state for a specific key.
	 * @param \Dapr\Proto\Runtime\V1\DeleteStateRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 * @return \Grpc\UnaryCall
	 */
	public function DeleteState(
		\Dapr\Proto\Runtime\V1\DeleteStateRequest $argument,
		array $metadata = [],
		array $options = []
	): \Grpc\UnaryCall;


	/**
	 * Deletes a bulk of state items for a list of keys
	 * @param \Dapr\Proto\Runtime\V1\DeleteBulkStateRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 * @return \Grpc\UnaryCall
	 */
	public function DeleteBulkState(
		\Dapr\Proto\Runtime\V1\DeleteBulkStateRequest $argument,
		array $metadata = [],
		array $options = []
	): \Grpc\UnaryCall;


	/**
	 * Executes transactions for a specified store
	 * @param \Dapr\Proto\Runtime\V1\ExecuteStateTransactionRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 * @return \Grpc\UnaryCall
	 */
	public function ExecuteStateTransaction(
		\Dapr\Proto\Runtime\V1\ExecuteStateTransactionRequest $argument,
		array $metadata = [],
		array $options = []
	): \Grpc\UnaryCall;


	/**
	 * Publishes events to the specific topic.
	 * @param \Dapr\Proto\Runtime\V1\PublishEventRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 * @return \Grpc\UnaryCall
	 */
	public function PublishEvent(
		\Dapr\Proto\Runtime\V1\PublishEventRequest $argument,
		array $metadata = [],
		array $options = []
	): \Grpc\UnaryCall;


	/**
	 * Invokes binding data to specific output bindings
	 * @param \Dapr\Proto\Runtime\V1\InvokeBindingRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 * @return \Grpc\UnaryCall
	 */
	public function InvokeBinding(
		\Dapr\Proto\Runtime\V1\InvokeBindingRequest $argument,
		array $metadata = [],
		array $options = []
	): \Grpc\UnaryCall;


	/**
	 * Gets secrets from secret stores.
	 * @param \Dapr\Proto\Runtime\V1\GetSecretRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 * @return \Grpc\UnaryCall
	 */
	public function GetSecret(
		\Dapr\Proto\Runtime\V1\GetSecretRequest $argument,
		array $metadata = [],
		array $options = []
	): \Grpc\UnaryCall;


	/**
	 * Gets a bulk of secrets
	 * @param \Dapr\Proto\Runtime\V1\GetBulkSecretRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 * @return \Grpc\UnaryCall
	 */
	public function GetBulkSecret(
		\Dapr\Proto\Runtime\V1\GetBulkSecretRequest $argument,
		array $metadata = [],
		array $options = []
	): \Grpc\UnaryCall;


	/**
	 * Register an actor timer.
	 * @param \Dapr\Proto\Runtime\V1\RegisterActorTimerRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 * @return \Grpc\UnaryCall
	 */
	public function RegisterActorTimer(
		\Dapr\Proto\Runtime\V1\RegisterActorTimerRequest $argument,
		array $metadata = [],
		array $options = []
	): \Grpc\UnaryCall;


	/**
	 * Unregister an actor timer.
	 * @param \Dapr\Proto\Runtime\V1\UnregisterActorTimerRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 * @return \Grpc\UnaryCall
	 */
	public function UnregisterActorTimer(
		\Dapr\Proto\Runtime\V1\UnregisterActorTimerRequest $argument,
		array $metadata = [],
		array $options = []
	): \Grpc\UnaryCall;


	/**
	 * Register an actor reminder.
	 * @param \Dapr\Proto\Runtime\V1\RegisterActorReminderRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 * @return \Grpc\UnaryCall
	 */
	public function RegisterActorReminder(
		\Dapr\Proto\Runtime\V1\RegisterActorReminderRequest $argument,
		array $metadata = [],
		array $options = []
	): \Grpc\UnaryCall;


	/**
	 * Unregister an actor reminder.
	 * @param \Dapr\Proto\Runtime\V1\UnregisterActorReminderRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 * @return \Grpc\UnaryCall
	 */
	public function UnregisterActorReminder(
		\Dapr\Proto\Runtime\V1\UnregisterActorReminderRequest $argument,
		array $metadata = [],
		array $options = []
	): \Grpc\UnaryCall;


	/**
	 * Gets the state for a specific actor.
	 * @param \Dapr\Proto\Runtime\V1\GetActorStateRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 * @return \Grpc\UnaryCall
	 */
	public function GetActorState(
		\Dapr\Proto\Runtime\V1\GetActorStateRequest $argument,
		array $metadata = [],
		array $options = []
	): \Grpc\UnaryCall;


	/**
	 * Executes state transactions for a specified actor
	 * @param \Dapr\Proto\Runtime\V1\ExecuteActorStateTransactionRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 * @return \Grpc\UnaryCall
	 */
	public function ExecuteActorStateTransaction(
		\Dapr\Proto\Runtime\V1\ExecuteActorStateTransactionRequest $argument,
		array $metadata = [],
		array $options = []
	): \Grpc\UnaryCall;


	/**
	 * InvokeActor calls a method on an actor.
	 * @param \Dapr\Proto\Runtime\V1\InvokeActorRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 * @return \Grpc\UnaryCall
	 */
	public function InvokeActor(
		\Dapr\Proto\Runtime\V1\InvokeActorRequest $argument,
		array $metadata = [],
		array $options = []
	): \Grpc\UnaryCall;


	/**
	 * Gets metadata of the sidecar
	 * @param \Google\Protobuf\GPBEmpty $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 * @return \Grpc\UnaryCall
	 */
	public function GetMetadata(
		\Google\Protobuf\GPBEmpty $argument,
		array $metadata = [],
		array $options = []
	): \Grpc\UnaryCall;


	/**
	 * Sets value in extended metadata of the sidecar
	 * @param \Dapr\Proto\Runtime\V1\SetMetadataRequest $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 * @return \Grpc\UnaryCall
	 */
	public function SetMetadata(
		\Dapr\Proto\Runtime\V1\SetMetadataRequest $argument,
		array $metadata = [],
		array $options = []
	): \Grpc\UnaryCall;


	/**
	 * Shutdown the sidecar
	 * @param \Google\Protobuf\GPBEmpty $argument input argument
	 * @param array $metadata metadata
	 * @param array $options call options
	 * @return \Grpc\UnaryCall
	 */
	public function Shutdown(
		\Google\Protobuf\GPBEmpty $argument,
		array $metadata = [],
		array $options = []
	): \Grpc\UnaryCall;
}
