<?php

namespace App\Traits;

use Illuminate\Support\Facades\Log;
use Exception;

trait RetryTrait
{
    /**
     * Eksekusi callback dengan mekanisme retry.
     *
     * @param callable $callback
     * @param int $maxRetries
     * @param int $delayMs (milidetik)
     * @return mixed
     */
    public function executeWithRetry(callable $callback, int $maxRetries = 5, int $delayMs = 500)
    {
        $retryCount = 0;

        while ($retryCount < $maxRetries) {
            try {
                $result = $callback();

                if ($result !== null) {
                    return $result;
                }
            } catch (Exception $e) {
                Log::error("Percobaan ke-" . ($retryCount + 1) . " gagal: " . $e->getMessage());

                // Tunggu sebelum mencoba lagi
                usleep($delayMs * 1000);
            }

            $retryCount++;
        }

        Log::error("Operasi gagal setelah {$maxRetries} percobaan.");
        return null;
    }
}
