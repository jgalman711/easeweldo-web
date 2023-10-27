<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class SubscriptionController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'subscription_id' => 'required'
        ]);
        $response = $this->httpService->get("subscriptions/{$request->subscription_id}");

        if ($response->isSuccess()) {
            $subscription = $response->getData();
            $subscriptionPrices = new Collection($subscription['subscription_prices']);

            $cheapestPlan = $subscriptionPrices->first(function ($price) {
                return $price['months'] == 36;
            });
            $originalPlan = $subscriptionPrices->first(function ($price) {
                return $price['months'] == 1;
            });

            foreach ($subscription['subscription_prices'] as $key => $plan) {
                $subscription['subscription_prices'][$key]['savings']
                    = ($originalPlan['price_per_employee'] * $plan['months'])
                    - ($plan['price_per_employee'] * $plan['months']);
            }

            $employeeCount = 1;
            $totalAmount = $employeeCount * $cheapestPlan['price_per_employee'] * $cheapestPlan['months'];

            $totalSaved = $originalPlan['price_per_employee']
                * $cheapestPlan['months']
                * $employeeCount
                - $totalAmount;

            return view('cart', [
                'original_plan' => $originalPlan,
                'subscription' => $subscription,
                'employee_count' => $employeeCount,
                'total_amount' => $totalAmount,
                'total_saved' => $totalSaved
            ]);
        }
        return redirect()->back()->withErrors($response->getErrors());
    }

    public function store(Request $request)
    {
        if (session()->has('subscribed')) {
            return redirect(env('EASEWELDO_PORTAL_URL'));
        }
        $company = session('company_slug');
        $response = $this->httpService->post("companies/{$company}/subscriptions", $request->all());
        if ($response->isSuccess()) {
            session()->put('subscribed', true);
            return view('subscribed', $response->getData());
        } else {
            return redirect()->back()->withErrors($response->getErrors());
        }
    }
}
