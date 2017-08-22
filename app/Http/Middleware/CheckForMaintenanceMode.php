<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode as OriginalMaintenanceModeCheck;

class CheckForMaintenanceMode extends OriginalMaintenanceModeCheck
{
    /**
     * The URI's that should be excluded from maintenance mode throttling.
     *
     * @var array
     */
    protected $except = ['admin', 'admin/*'];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {

        if ($this->app->isDownForMaintenance() && !$this->shouldPassThrough($request)) {
            throw new HttpException(503);
        }

        return $next($request);
    }

    /**
     * Checks if the current request is whitelisted from maintenance mode throttling.
     *
     * @param $request
     * @return bool
     */
    protected function shouldPassThrough($request) {

        foreach ($this->except as $except) {

            if ($except !== '/') {
                $except = trim($except, '/');
            }

            if($request->is($except)) {
                return true;
            }
        }

        return false;
    }
}
