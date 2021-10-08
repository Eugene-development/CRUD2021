<?php


namespace App\Http\Controllers\Traits;


trait Delete
{
    /**
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function delete()
    {
        $container = app();
        $container->make($this->entity)->delete($this->param);
        return $this->param;
    }
}
