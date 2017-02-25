<?php

namespace CualDocs\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;
use Closure;
use Session;

class Admin
{
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->auth->user()->id != 1) {
        //Si el id de este usuario no es uno quiere decir que este usuario no es
        //administrador
            Session::flash('message-error', 'Sin Privilegios');
            return redirect()->to('admin');
        }

        return $next($request);
    }
}
