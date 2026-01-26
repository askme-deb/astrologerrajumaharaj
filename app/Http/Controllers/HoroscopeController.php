<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class HoroscopeController extends Controller
{
    /**
     * Proxy to fetch horoscope from ohmanda.com API.
     * Caches result for 30 minutes per sign.
     */
    // public function get(Request $request, $sign)
    // {
    //     $sign = strtolower($sign);
    //     $validSigns = [
    //         'aries','taurus','gemini','cancer','leo','virgo','libra','scorpio','sagittarius','capricorn','aquarius','pisces'
    //     ];
    //     if (!in_array($sign, $validSigns)) {
    //         return response()->json(['error' => 'Invalid zodiac sign.'], 400);
    //     }
    //     $cacheKey = "horoscope_{$sign}_daily";
    //     $data = Cache::remember($cacheKey, 1800, function () use ($sign) {
    //         try {
    //             $client = new Client(['timeout' => 10]);
    //             $res = $client->get("https://ohmanda.com/api/horoscope/{$sign}");
    //             if ($res->getStatusCode() === 200) {
    //                 $json = json_decode($res->getBody()->getContents(), true);
    //                 if (is_array($json)) {
    //                     return $json;
    //                 }
    //             }
    //         } catch (\Exception $e) {
    //             Log::error('Horoscope API error: ' . $e->getMessage());
    //         }
    //         return null;
    //     });
    //     if (!$data || empty($data['horoscope'])) {
    //         return response()->json(['error' => 'Horoscope unavailable.'], 502);
    //     }
    //     return response()->json($data);
    // }
    // public function get(Request $request, $sign)
    // {
    //     $sign = strtolower($sign);

    //     $validSigns = [
    //         'aries',
    //         'taurus',
    //         'gemini',
    //         'cancer',
    //         'leo',
    //         'virgo',
    //         'libra',
    //         'scorpio',
    //         'sagittarius',
    //         'capricorn',
    //         'aquarius',
    //         'pisces'
    //     ];

    //     if (!in_array($sign, $validSigns)) {
    //         return response()->json(['error' => 'Invalid zodiac sign.'], 400);
    //     }

    //     $cacheKey = "horoscope_{$sign}_daily";

    //     $data = Cache::remember($cacheKey, 1800, function () use ($sign) {
    //         try {
    //             $response = Http::timeout(10)
    //                 ->acceptJson()
    //                 ->get("https://ohmanda.com/api/horoscope/{$sign}");

    //             if ($response->successful()) {
    //                 return $response->json();
    //             }

    //             Log::error('Horoscope API HTTP error', [
    //                 'status' => $response->status(),
    //                 'body' => $response->body(),
    //             ]);
    //         } catch (\Throwable $e) {
    //             Log::error('Horoscope API exception', [
    //                 'message' => $e->getMessage(),
    //             ]);
    //         }

    //         return null;
    //     });

    //     if (
    //         !$data ||
    //         !isset($data['horoscope']) ||
    //         trim($data['horoscope']) === ''
    //     ) {
    //         return response()->json(['error' => 'Horoscope unavailable.'], 503);
    //     }

    //     return response()->json([
    //         'sign' => $data['sign'] ?? ucfirst($sign),
    //         'date' => $data['date'] ?? now()->toDateString(),
    //         'horoscope' => $data['horoscope'],
    //         'source' => 'ohmanda.com',
    //         'cached' => true
    //     ]);
    // }
public function get(Request $request, $sign)
{
    $sign = strtolower($sign);

    $validSigns = [
        'aries','taurus','gemini','cancer','leo','virgo',
        'libra','scorpio','sagittarius','capricorn','aquarius','pisces'
    ];

    if (!in_array($sign, $validSigns)) {
        return response()->json(['error' => 'Invalid zodiac sign.'], 400);
    }

    $cacheKey = "horoscope_{$sign}_daily";

    $data = Cache::remember($cacheKey, 1800, function () use ($sign) {
        try {
            $response = Http::timeout(10)
                ->asForm()
                ->post('https://aztro.sameerkumar.website/', [
                    'sign' => $sign,
                    'day'  => 'today',
                ]);

            if ($response->successful()) {
                return $response->json();
            }

            Log::error('Aztro API error', [
                'status' => $response->status(),
                'body'   => $response->body(),
            ]);

        } catch (\Throwable $e) {
            Log::error('Aztro API exception', [
                'message' => $e->getMessage(),
            ]);
        }

        return null;
    });

    if (!$data || empty($data['description'])) {
        return response()->json(['error' => 'Horoscope unavailable.'], 503);
    }

    return response()->json([
        'sign'          => ucfirst($sign),
        'date'          => $data['current_date'] ?? now()->toDateString(),
        'horoscope'     => $data['description'],
        'mood'          => $data['mood'] ?? null,
        'lucky_number'  => $data['lucky_number'] ?? null,
        'lucky_time'    => $data['lucky_time'] ?? null,
        'source'        => 'aztro',
        'cached'        => true,
    ]);
}
}
