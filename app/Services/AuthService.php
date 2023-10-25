<?php

namespace App\Services;

use Exception;
use Illuminate\Http\Request;

class AuthService
{
    protected $httpService;

    public function __construct(HttpService $httpService)
    {
        $this->httpService = $httpService;
    }

    public function login(Request $request, string $loginUrl)
    {
        $response = $this->httpService->post($loginUrl, $request->all());
        throw_if($response->isFailed(), new Exception($response->getErrors()));
        if ($response->isSuccess()) {
            $data = $response->getData();
            session([
                'access_token' => $data['token'] ?? null,
                'company' => $data['user']['companies'][0] ?? null,
                'employee' => $data['user']['employee'] ?? null
            ]);
            return $data;
        } else {
            throw new Exception('Login failed.');
        }
    }

    public function logout()
    {
        $this->httpService->post('logout');
        session()->forget(['access_token', 'company', 'employee']);
        return redirect()->route('personal.login');
    }
}
