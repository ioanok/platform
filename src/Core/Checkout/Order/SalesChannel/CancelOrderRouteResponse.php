<?php declare(strict_types=1);

namespace Shopware\Core\Checkout\Order\SalesChannel;

use Shopware\Core\Framework\Log\Package;
use Shopware\Core\System\SalesChannel\StoreApiResponse;
use Shopware\Core\System\StateMachine\Aggregation\StateMachineState\StateMachineStateEntity;

#[Package('checkout')]
class CancelOrderRouteResponse extends StoreApiResponse
{
    /**
     * @var StateMachineStateEntity
     *
     * @deprecated tag:v6.7.0 - Will be natively typed
     */
    protected $object;

    public function __construct(StateMachineStateEntity $object)
    {
        parent::__construct($object);
    }

    public function getState(): StateMachineStateEntity
    {
        return $this->object;
    }
}
