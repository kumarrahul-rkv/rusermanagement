<?php

    namespace Kumarrahul\rusermanagement;

    use Illuminate\Support\ServiceProvider;

    class UMServiceProvider extends ServiceProvider {

        public function boot() {
            $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        }
        public function register() {

        }

    }
