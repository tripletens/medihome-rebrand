<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Exception;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    // public function render($request, Throwable $exception)
    // {
    //     if ($exception instanceof HttpException) {
    //         $statusCode = $exception->getStatusCode();

    //         return $statusCode;

    //         switch ($statusCode) {
    //             case '404':
    //                 # code...
    //                 if (view()->exists("pages.errors.notfound")) {
    //                     return response()->view("pages.errors.notfound", [], $statusCode);
    //                 }
    //                 break;
                
    //             default:
    //                 # code...\
    //                 if (view()->exists("welcome")) {
    //                     return response()->view("welcome", [], $statusCode);
    //                 }
    //                 break;
    //         }
            
    //     }

    //     return parent::render($request, $exception);
    // }

    public function render($request, Throwable $exception)
    {
        if ($exception instanceof NotFoundHttpException) {
            return response()->view('pages.errors.notfound', [], 404);
        }

        if ($exception instanceof AuthorizationException) {
            return response()->view('pages.errors.unauthorised', [], 403);
        }

        if ($exception instanceof Exception) {
            return response()->view('pages.errors.servererror', [], 500);
        }
    

        return parent::render($request, $exception);
    }
}
