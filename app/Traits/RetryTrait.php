<?php

namespace App\Traits;

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
            } catch (\Exception $e) {
                // Jangan tampilkan error ke user, cukup tunggu sebelum retry
                usleep($delayMs * 1000);
            }

            $retryCount++;
        }

        // Jika sudah mencapai maxRetries, kembalikan null tanpa menampilkan error
        return null;
    }
}
