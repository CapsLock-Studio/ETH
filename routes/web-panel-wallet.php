<?php

Route::resource('sell', SellController::class, ['only' => 'store']);
