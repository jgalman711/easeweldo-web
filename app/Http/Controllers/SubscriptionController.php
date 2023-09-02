<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class SubscriptionController extends Controller
{
    protected $company;

    public function index(Request $request)
    {
        $this->company = session('company_slug');
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

            $response = $this->httpService->get("companies/{$this->company}/employees");

            if ($response->isSuccess()) {
                $employees = $response->getData();
                $employeeCount = $employees ? count($employees) : 1;
                $totalAmount = $employeeCount * $cheapestPlan['price_per_employee'] * $cheapestPlan['months'];
                return view('cart', [
                    'subscription' => $subscription,
                    'employee_count' => $employeeCount,
                    'total_amount' => $totalAmount
                ]);
            }
        }
        // redirect to subscription plans selection page
    }

    public function store(Request $request)
    {
        return view('under-construction')->with('message', 'Thank you for subscribing to Easeweldo!');
    }
}
