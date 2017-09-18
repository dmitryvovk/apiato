<?php

namespace App\Containers\Stripe\UI\API\Controllers;

use App\Containers\Stripe\Actions\CreateStripeAccountAction;
use App\Containers\Stripe\Actions\UpdateStripeAccountAction;
use App\Containers\Stripe\UI\API\Requests\CreateStripeAccountRequest;
use App\Containers\Stripe\UI\API\Requests\UpdateStripeAccountRequest;
use App\Ship\Parents\Controllers\ApiController;

/**
 * Class Controller.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class Controller extends ApiController
{

    /**
     * @param \App\Containers\Stripe\UI\API\Requests\CreateStripeAccountRequest $request
     *
     * @return  \Illuminate\Http\JsonResponse
     */
    public function createStripeAccount(CreateStripeAccountRequest $request)
    {
        $stripeAccount = $this->call(CreateStripeAccountAction::class, [$request]);

        return $this->accepted([
            'message'           => 'Stripe account created successfully.',
            'stripe_account_id' => $stripeAccount->id,
        ]);
    }

    /**
     * @param \App\Containers\Stripe\UI\API\Requests\UpdateStripeAccountRequest $request
     *
     * @return  \Illuminate\Http\JsonResponse
     */
    public function updateStripeAccount(UpdateStripeAccountRequest $request)
    {
        $stripeAccount = $this->call(UpdateStripeAccountAction::class, [$request]);

        return $this->accepted([
            'message'           => 'Stripe account updated successfully.',
            'stripe_account_id' => $stripeAccount->id,
        ]);
    }

}
