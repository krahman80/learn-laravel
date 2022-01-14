<?php

namespace App\Http\Middleware;

use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Response as BaseResponse;
use Closure;

class EnsureCorrectAPIHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->headers->get('accept') !== 'application/vnd.api+json')
        {
            return new Response('', 406);
        }
        
        if($request->isMethod('POST') || $request->isMethod('PATCH')){
            if($request->header('content-type') !== 'application/vnd.api+json'){
                return new Response('', 415);
            }
        }

        return $next($request);
        // return $this->AddCorrectContentType($next($response));
    }

    private function AddCorrectContentType(BaseResponse $response){
        $response->headers->set('content-type', 'application/vnb.api+json');
        return $response;
    }
}
